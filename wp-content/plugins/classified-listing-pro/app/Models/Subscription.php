<?php

namespace RtclPro\Models;

class Subscription {

	protected int $id;
	protected string $subId;
	protected string $gateway_id;
	protected ?string $meta;
	protected array $statusList = [ 'active', 'expired', 'suspended', 'canceled', 'terminated' ];
	const STATUS_ACTIVE = 'active';
	const STATUS_EXPIRED = 'expired';
	const STATUS_EXPIRING = 'expiring';
	const STATUS_FAILED = 'failed';
	const STATUS_SUSPENDED = 'suspended';
	const STATUS_CANCELED = 'canceled';
	const STATUS_TERMINATED = 'terminated';
	/**
	 * @var string
	 */
	private string $table;
	protected int $userId;
	protected string $status;
	protected int $productId;
	protected ?string $expiry_at = null;
	private ?string $name = null;

	public function __construct( $sub ) {
		if ( is_numeric( $sub ) ) {
			$this->setSubscriptionBySubId( $sub );
		} elseif ( $sub && is_object( $sub ) ) {
			$this->setSubscription( $sub );
		}
	}

	public function setSubscriptionBySubId( $subId ) {
		$sub = ( new Subscriptions() )->findOneBySubId( $subId );
		if ( $sub ) {
			$this->setSubscription( $sub );
		}
	}

	public function setSubscription( $sub ): Subscription {
		global $wpdb;
		$this->table      = $wpdb->prefix . "rtcl_subscriptions";
		$this->id         = $sub->id;
		$this->name       = $sub->name;
		$this->subId      = $sub->sub_id;
		$this->gateway_id = $sub->gateway_id;
		$this->userId     = $sub->user_id;
		$this->productId  = $sub->product_id;
		$this->status     = $sub->status;
		$this->expiry_at  = $sub->expiry_at;
		$this->meta       = $sub->meta;

		return $this;
	}

	public function updateStatus( $status ): Subscription {
		$oldStatus = $this->status;

		if ( in_array( $status, $this->statusList ) && $oldStatus != $status ) {
			global $wpdb;
			$update = $wpdb->update(
				$this->table,
				[ 'status' => $status ],
				[
					'id'      => $this->id,
					'sub_id'  => $this->subId,
					'user_id' => $this->userId
				]
			);
			if ( $update ) {
				$this->status = $status;
				do_action( 'rtcl_subscription_update_status', $this, $status, $oldStatus );
			}
		}

		return $this;
	}

	public function updatePayment( $paymentData ): Subscription {
		$oldMeta = $this->getMeta();

		$meta = wp_parse_args( $paymentData, $oldMeta );

		global $wpdb;
		$update = $wpdb->update(
			$this->table,
			[ 'meta' => wp_json_encode( $meta ) ],
			[
				'id'      => $this->id,
				'sub_id'  => $this->subId,
				'user_id' => $this->userId
			]
		);
		if ( $update ) {
			do_action( 'rtcl_subscription_update_payment', $this, $meta, $oldMeta );
		}

		return $this;
	}

	/**
	 * @return int
	 */
	public function getId(): int {
		return $this->id;
	}

	/**
	 * @return string
	 */
	public function getName(): string {
		return $this->name;
	}

	/**
	 * @return string
	 */
	public function getStatus(): string {
		return $this->status;
	}

	/**
	 * @return string
	 */
	public function getGatewayId(): string {
		return $this->gateway_id;
	}

	/**
	 * @return string
	 */
	public function getSubId(): string {
		return $this->subId;
	}

	/**
	 * @return string
	 */
	public function getExpiryAt(): string {
		return $this->expiry_at;
	}

	/**
	 * @return object
	 */
	public function getMeta() {
		$meta = $this->meta;
		if ( empty( $meta ) ) {
			return new \stdClass();
		}
		$meta = stripslashes( $meta );

		return json_decode( $meta );
	}

	/**
	 * @return int
	 */
	public function getProductId(): int {
		return absint( $this->productId );
	}


}