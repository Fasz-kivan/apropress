<?php

namespace RtclPro\Models;


class Subscriptions {

	/**
	 * @var string
	 */
	private $table;

	public function __construct() {
		global $wpdb;
		$this->table = $wpdb->prefix . "rtcl_subscriptions";
	}


	/**
	 * @param      $id
	 * @param bool $user_id
	 *
	 * @return Subscription|[]
	 */
	public function findById( $id, bool $user_id = false ): ?Subscription {
		global $wpdb;
		if ( empty( $user_id ) ) {
			$user_id = get_current_user_id();
		}
		$rawSub = $wpdb->get_row(
			$wpdb->prepare( "SELECT * FROM {$this->table} WHERE id = %d AND user_id = %d", $id, $user_id )
		);
		if ( $rawSub ) {
			return new Subscription( $rawSub );
		}

		return null;
	}


	/**
	 * @param $user_id
	 *
	 * @return Subscription[]|[]
	 */
	public function findAllByUserId( $user_id ): array {
		global $wpdb;
		$rawSubs       = $wpdb->get_results(
			$wpdb->prepare( "SELECT * FROM {$this->table} WHERE user_id = %d AND status != %s ORDER BY created_at DESC", $user_id, 'canceled' )
		);
		$subscriptions = [];
		if ( ! empty( $rawSubs ) ) {
			foreach ( $rawSubs as $rawSub ) {
				$subscriptions[] = new Subscription( $rawSub );
			}
		}

		return $subscriptions;
	}

	/**
	 * @param $subId
	 *
	 * @return Subscription
	 */
	public function findOneBySubId( $subId ) {
		global $wpdb;
		$subscription = $wpdb->get_row(
			$wpdb->prepare( "SELECT * FROM {$this->table} WHERE sub_id = %d", $subId )
		);

		if ( $subscription ) {
			return new Subscription( $subscription );
		}

		return null;
	}

	/**
	 * @param $user_id
	 *
	 * @return Subscription|void
	 */
	public function findOneByUserId( $user_id ) {
		global $wpdb;
		$subscription = $wpdb->get_row(
			$wpdb->prepare( "SELECT * FROM {$this->table} WHERE user_id = %d AND status = %s ORDER BY created_at DESC", $user_id, 'active' )
		);

		if ( $subscription ) {
			return new Subscription( $subscription );
		}
	}


	public function create( $data = [] ) {
		if ( ! is_array( $data ) || empty( $data['name'] ) || empty( $data['sub_id'] ) || empty( $data['gateway_id'] ) ) {
			error_log( 'Error while creating subscription missing subId, gateway_id, name' );

			return false;
		}
		try {
			global $wpdb;
			$current_date = new \DateTime( current_time( 'mysql' ) );
			$data         = array_merge( [
				'quantity'   => 1,
				'user_id'    => get_current_user_id(),
				'created_at' => $current_date->format( 'Y-m-d H:i:s' ),
				'updated_at' => $current_date->format( 'Y-m-d H:i:s' )
			], $data );
			$wpdb->insert( $this->table, $data );
		} catch ( \Exception $e ) {
			error_log( 'Error while creating subscription: ' . $e->getMessage() );
		}
	}

}