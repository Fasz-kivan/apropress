<?php

namespace RtclPro\Gateways\Authorize\lib;

use DateTime;
use Rtcl\Helpers\Functions;
use Rtcl\Log\Logger;
use Rtcl\Models\Payment;
use RtclPro\Gateways\Authorize\GatewayAuthorize;
use RtclPro\Gateways\Authorize\lib\Types\IntervalAType;
use RtclPro\Gateways\Authorize\lib\Types\PaymentScheduleType;
use RtclPro\Gateways\Authorize\lib\Types\ProfileType;
use RtclPro\Gateways\Authorize\lib\Types\SubscriptionType;
use RtclPro\Gateways\Authorize\lib\Types\TransactionType;
use RtclPro\Models\Subscription;
use RtclPro\Models\Subscriptions;

/**
 *
 * Handles webhooks from Stripe on sources that are not immediately chargeable.
 *
 * @since 4.0.0
 */
class AuthNetWebhook extends AuthNetPaymentGateway {
	/**
	 * Delay of retries.
	 *
	 * @var int
	 */
	public $retry_interval;

	/**
	 * Is test mode active?
	 *
	 * @var bool
	 */
	public $testmode;

	/**
	 * The secret to use when verifying webhooks.
	 *
	 * @var string
	 */
	protected string $secret;

	/**
	 * @var object
	 */
	protected object $notification;

	/**
	 * @var GatewayAuthorize
	 */
	protected GatewayAuthorize $paymentGateway;

	protected array $events = [
		'net.authorize.payment.authcapture.created',
		'net.authorize.payment.authorization.created',
		'net.authorize.payment.capture.created',
		'net.authorize.payment.fraud.approved',
		'net.authorize.payment.fraud.declined',
		'net.authorize.payment.fraud.held',
		'net.authorize.payment.priorAuthCapture.created',
		'net.authorize.payment.refund.created',
		'net.authorize.payment.void.created',
		'net.authorize.customer.subscription.cancelled',
		'net.authorize.customer.subscription.created',
		'net.authorize.customer.subscription.expired',
		'net.authorize.customer.subscription.expiring',
		'net.authorize.customer.subscription.failed',
		'net.authorize.customer.subscription.suspended',
		'net.authorize.customer.subscription.terminated',
		'net.authorize.customer.subscription.updated',
	];

	/**
	 * Constructor.
	 *
	 * @since   4.0.0
	 * @version 5.0.0
	 */
	public function __construct( $paymentGateway ) {
		$this->paymentGateway = $paymentGateway;
	}

	/**
	 * Check incoming requests for Stripe Webhook data and process them.
	 *
	 * @since   4.0.0
	 * @version 5.0.0
	 */
	public function check_for_webhook() {
		if ( ! isset( $_SERVER['REQUEST_METHOD'] ) || ( 'POST' !== $_SERVER['REQUEST_METHOD'] ) ) {
			return;
		}
		$log     = new Logger();
		$payload = file_get_contents( 'php://input' );
		$headers = array_change_key_case( $this->get_request_headers(), CASE_UPPER );
		try {
			$webhook = new AuthNetValidateWebhook( RTCL_AUTHNET_SIGNATURE, $payload, $headers );
		} catch ( \Exception $e ) {
			$log->error( 'Authorized Error: ' . $e->getMessage() );
		}

		if ( $webhook->isValid() ) {
			$transactionId = $webhook->payload->id;
			error_log( print_r( $webhook, true ) );
			// Payment captured
			$logMessage = null;
			$authNet    = new AuthNetAPI();
			if ( 'net.authorize.payment.authcapture.created' === $webhook->eventType ) {
				$transaction = new TransactionType();
				$transaction->setTransId( $transactionId );
				$authNet->setTransaction( $transaction );
				$response = $authNet->getTransactionDetails();
				error_log( 'Transaction details: ' . print_r( $response, true ) );
				if ( is_wp_error( $response ) ) {
					$logMessage .= "Response : " . $response->get_error_message() . "  " . $response->get_error_code();
				} else {
					if ( ! empty( $webhook->payload->invoiceNumber ) && $order = rtcl()->factory->get_order( $webhook->payload->invoiceNumber ) ) {
//						if ( ! empty( $response->transaction->order->description ) && '__action__createSub__' === $response->transaction->order->description ) {
//							$this->createSubscriptionFromCProfile( $response, $order );
//						}
						$order->payment_complete( $response->transaction->transId );
					}
				}
			} else if ( 'net.authorize.customer.subscription.cancelled' === $webhook->eventType ) {
				$subscription = ( new Subscriptions() )->findOneBySubId( $webhook->payload->id );
				if ( $subscription ) {
					$subscription->updateStatus( Subscription::STATUS_CANCELED );
					$logMessage = $webhook->eventType;
					$logMessage .= "Subscription Status updated .";
				}

			} else if ( 'net.authorize.customer.subscription.expiring' === $webhook->eventType ) {
				$subscription = ( new Subscriptions() )->findOneBySubId( $webhook->payload->id );
				if ( $subscription ) {
//					$subscription->updateStatus( Subscription::STATUS_EXPIRING );
//					$logMessage = $webhook->eventType;
//					$logMessage .= "Subscription Status updated to " . Subscription::STATUS_EXPIRING;
				}

			} else if ( 'net.authorize.customer.subscription.expired' === $webhook->eventType ) {
				$subscription = ( new Subscriptions() )->findOneBySubId( $webhook->payload->id );
				if ( $subscription ) {
					$subscription->updateStatus( Subscription::STATUS_EXPIRED );
					$logMessage = $webhook->eventType;
					$logMessage .= "Subscription Status updated to " . Subscription::STATUS_EXPIRED;
				}

			} else if ( 'net.authorize.customer.subscription.failed' === $webhook->eventType ) {
				$subscription = ( new Subscriptions() )->findOneBySubId( $webhook->payload->id );
				if ( $subscription ) {
//					$subscription->updateStatus( Subscription::STATUS_FAILED );
//					$logMessage = $webhook->eventType;
//					$logMessage .= "Subscription Status updated to " . Subscription::STATUS_FAILED;
				}

			} else if ( 'net.authorize.customer.subscription.suspended' === $webhook->eventType ) {
				$subscription = ( new Subscriptions() )->findOneBySubId( $webhook->payload->id );
				if ( $subscription ) {
					$subscription->updateStatus( Subscription::STATUS_SUSPENDED );
					$logMessage = $webhook->eventType;
					$logMessage .= "Subscription Status updated to " . Subscription::STATUS_SUSPENDED;
				}

			} else if ( 'net.authorize.customer.subscription.terminated' === $webhook->eventType ) {
				$subscription = ( new Subscriptions() )->findOneBySubId( $webhook->payload->id );
				if ( $subscription ) {
					$subscription->updateStatus( Subscription::STATUS_TERMINATED );
					$logMessage = $webhook->eventType;
					$logMessage .= "Subscription Status updated to " . Subscription::STATUS_TERMINATED;
				}

			}

			$log->info( 'Authorized webhook: ' . $logMessage );

			status_header( 200 );
			exit();
		} else {
			$log->error( 'Authorized invalid webhook' );
			status_header( 204 );
			exit;
		}
	}


	/**
	 * Processes the incoming webhook.
	 *
	 */
	public function process_webhook() {

		switch ( $this->notification->type ) {
			case 'source.chargeable':
				$this->process_webhook_payment();
				break;

			case 'source.canceled':
				$this->process_webhook_source_canceled();
				break;

			case 'charge.succeeded':
				$this->process_webhook_charge_succeeded();
				break;

			case 'charge.failed':
				$this->process_webhook_charge_failed();
				break;

			case 'charge.captured':
				$this->process_webhook_capture();
				break;

			case 'charge.dispute.created':
				$this->process_webhook_dispute();
				break;

			case 'charge.dispute.closed':
				$this->process_webhook_dispute_closed();
				break;

			case 'charge.refunded':
				$this->process_webhook_refund();
				break;

			case 'review.opened':
				$this->process_review_opened();
				break;

			case 'review.closed':
				$this->process_review_closed();
				break;

			case 'payment_intent.succeeded':
			case 'payment_intent.payment_failed':
			case 'payment_intent.amount_capturable_updated':
				$this->process_payment_intent_success();
				break;

			case 'setup_intent.succeeded':
			case 'setup_intent.setup_failed':
				$this->process_setup_intent();

		}
	}

	/**
	 * @param object  $trResponse
	 * @param Payment $order
	 *
	 * @return void
	 */
	public function createSubscriptionFromCProfile( object $trResponse, Payment $order ) {
		$log = new Logger();

		$transMeta = get_post_meta( $order->get_id(), '_authorizenet_transaction', true );
		if ( empty( $transMeta['profile'] ) ) {
			$log->error( 'Authorized webhook: Transaction profile id is missing to create subscription , transId: ' . $trResponse->transaction->transId );

			return;
		}
		$authNet = new AuthNetAPI();
		$subIn   = ( new Subscriptions() )->findOneByUserId( $order->get_customer_id() );
		if ( $subIn && $subIn->getGatewayId() === $this->id ) {

			// Creating the API Request with required parameters
			$subscription = new SubscriptionType();
			$subscription->setRefId( $order->get_id() );
			$subscription->setSubscriptionId( $subIn->getSubId() );
			$authNet->setSubscriptionType( $subscription );
			$response = $authNet->getSubscription();
			if ( is_wp_error( $response ) ) {
				$log->error( 'Authorized webhook: ' . $response->get_error_message() );
			}
			$response = $authNet->cancelSubscription();
			if ( is_wp_error( $response ) ) {
				$log->error( 'Authorized webhook: ' . $response->get_error_message() );
			}
			$log->info( 'Payment Gateway id: ' . $this->id . ' : ' . "SUCCESS : " . $response->messages->message[0]->code . "  " . $response->messages->message[0]->text );
			$subIn->updateStatus( Subscription::STATUS_CANCELED );
		}

		$subscription = new SubscriptionType();
		$subscription->setRefId( $order->get_id() );
		$subscription->setName( $order->pricing->getTitle() );
		$subscription->setOrder( $order );
		$interval = new IntervalAType();
		$interval->setLength( $order->pricing->getVisible() );
		$interval->setUnit( "days" );

		$paymentSchedule = new PaymentScheduleType();
		$paymentSchedule->setInterval( $interval );
		$startDate = new DateTime();
		$startDate->modify( '+' . $order->pricing->getVisible() . ' day' );
		$paymentSchedule->setStartDate( $startDate );
		$paymentSchedule->setTotalOccurrences( "9999" );
		$paymentSchedule->setTrialOccurrences( "0" );

		$subscription->setPaymentSchedule( $paymentSchedule );
		$chargeAmount = number_format( $order->get_total(), 2, '.', '' );
		$subscription->setAmount( $chargeAmount );
		$subscription->setTrialAmount( '0.00' );
		$profile = new ProfileType();
		$profile->setCustomerProfileId( $transMeta['profile']['customerProfileId'] );
		$profile->setCustomerPaymentProfileId( $transMeta['profile']['customerPaymentProfileId'] );
		$subscription->setProfileType( $profile );
		$authNet->setSubscriptionType( $subscription );
		$response = $authNet->createSubscriptionCp();
		error_log( 'Subscription: ' . print_r( $response, true ) );
		if ( is_wp_error( $response ) ) {
			$order->add_note( $response->get_error_message() );
		}
		$order->payment_complete( $response->subscriptionId );
		( new Subscriptions() )->create( [
			'sub_id'     => $response->subscriptionId,
			'gateway_id' => $this->id,
			'status'     => Subscription::STATUS_ACTIVE,
			'product_id' => $order->pricing->getId(),
			'occurrence' => 1,
			'expiry_at'  => $paymentSchedule->getStartDate()->format( 'Y-m-d H:i:s' ),
			'price'      => $order->get_total(),
			'name'       => $order->pricing->getTitle(),
			'user_id'    => $order->get_customer_id(),
//			'meta'       => wp_json_encode( [
//				'profile' => $response->profile,
//				'cc'      => [
//					'type'   => $transMeta['accountType'],
//					'last4'  => substr( $transMeta['accountNumber'], - 4 ),
//					'expiry' => $transMeta['expirationDate'],
//				]
//			] )
		] );
	}

	/**
	 * Gets the incoming request headers. Some servers are not using
	 * Apache and "getallheaders()" will not work so we may need to
	 * build our own headers.
	 */
	public function get_request_headers() {
		if ( ! function_exists( 'getallheaders' ) ) {
			$headers = [];

			foreach ( $_SERVER as $name => $value ) {
				if ( 'HTTP_' === substr( $name, 0, 5 ) ) {
					$headers[ str_replace( ' ', '-', ucwords( strtolower( str_replace( '_', ' ', substr( $name, 5 ) ) ) ) ) ] = $value;
				}
			}

			return $headers;
		} else {
			return getallheaders();
		}
	}

}
