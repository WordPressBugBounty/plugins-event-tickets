<?php
/**
 * Models an Tickets Commerce Orders.
 *
 * @since 5.1.9
 *
 * @package  TEC\Tickets\Commerce\Models
 */

namespace TEC\Tickets\Commerce\Models;

use TEC\Tickets\Commerce;
use TEC\Tickets\Commerce\Module;
use TEC\Tickets\Commerce\Order;
use TEC\Tickets\Commerce\Status\Status_Handler;
use Tribe\Models\Post_Types\Base;
use Tribe__Date_Utils as Dates;
use Tribe__Utils__Array as Arr;

/**
 * Class Order.
 *
 * @since 5.1.9
 *
 * @package  TEC\Tickets\Commerce\Models
 */
class Order_Model extends Base {

	/**
	 * {@inheritDoc}
	 */
	protected function build_properties( $filter ) {
		try {
			$cache_this = $this->get_caching_callback( $filter );

			$post_id = $this->post->ID;

			$post_meta = get_post_meta( $post_id );

			$items               = maybe_unserialize( Arr::get( $post_meta, [ Order::$items_meta_key, 0 ] ) );
			$total_value         = Arr::get( $post_meta, [ Order::$total_value_meta_key, 0 ] );
			$subtotal            = Arr::get( $post_meta, [ Order::$subtotal_value_meta_key, 0 ] );
			$hash                = Arr::get( $post_meta, [ Order::$hash_meta_key, 0 ] );
			$currency            = Arr::get( $post_meta, [ Order::$currency_meta_key, 0 ], 'USD' );
			$gateway_slug        = Arr::get( $post_meta, [ Order::$gateway_meta_key, 0 ] );
			$gateway_order_id    = Arr::get( $post_meta, [ Order::$gateway_order_id_meta_key, 0 ] );
			$gateway_payload     = $this->get_gateway_payloads( $post_meta );
			$status_log          = $this->get_status_log( $post_meta );
			$status              = tribe( Status_Handler::class )->get_by_wp_slug( $this->post->post_status );
			$flag_action_markers = $this->get_flag_action_markers( $post_meta );

			$purchaser_user_id    = Arr::get( $post_meta, [ Order::$purchaser_user_id_meta_key, 0 ] );
			$purchaser_full_name  = Arr::get( $post_meta, [ Order::$purchaser_full_name_meta_key, 0 ] );
			$purchaser_first_name = Arr::get( $post_meta, [ Order::$purchaser_first_name_meta_key, 0 ] );
			$purchaser_last_name  = Arr::get( $post_meta, [ Order::$purchaser_last_name_meta_key, 0 ] );
			$purchaser_email      = Arr::get( $post_meta, [ Order::$purchaser_email_meta_key, 0 ] );

			$events_in_order  = (array) Arr::get( $post_meta, [ Order::$events_in_order_meta_key ] );
			$tickets_in_order = (array) Arr::get( $post_meta, [ Order::$tickets_in_order_meta_key ] );

			// Default in the past. If it's not set or invalid, there should be no active checkout lock.
			$default_checkout_timeout = gmdate( 'Y-m-d H:i:s', time() - YEAR_IN_SECONDS );
			$on_checkout_hold_timeout = Arr::get( $post_meta, [ Order::ON_CHECKOUT_SCREEN_HOLD_META, 0 ], $default_checkout_timeout );
			$on_checkout_hold_timeout = Dates::is_valid_date( $on_checkout_hold_timeout ) ? $on_checkout_hold_timeout : $default_checkout_timeout;
			$on_checkout_hold_timeout = strtotime( $on_checkout_hold_timeout );

			if ( ! is_numeric( $on_checkout_hold_timeout ) ) {
				$on_checkout_hold_timeout = 0;
			}

			$original_gateway_order_id = Arr::get( $post_meta, [ Order::ORIGINAL_GATEWAY_ORDER_ID_META_KEY, 0 ] );
			$gateway_order_object      = Arr::get( $post_meta, [ Order::GATEWAY_ORDER_OBJECT_META_KEY, '' ] );
			$latest_payload_hash_sent  = Arr::get( $post_meta, [ Order::LATEST_PAYLOAD_HASH_SENT_TO_GATEWAY_META_KEY, 0 ] );
			$gateway_customer_id       = Arr::get( $post_meta, [ Order::GATEWAY_CUSTOMER_ID_META_KEY, 0 ] );
			$gateway_order_version     = Arr::get( $post_meta, [ Order::GATEWAY_ORDER_VERSION_META_KEY, 0 ] );

			$properties = [
				'order_id'                  => $post_id,
				'provider'                  => Module::class,
				'provider_slug'             => Commerce::ABBR,
				'status_log'                => $status_log,
				'status_obj'                => $status,
				'status'                    => $status->get_name(),
				'status_slug'               => $status->get_slug(),
				'gateway'                   => $gateway_slug,
				'gateway_order_id'          => $gateway_order_id,
				'original_gateway_order_id' => $original_gateway_order_id,
				'gateway_payload'           => $gateway_payload,
				'gateway_order_object'      => $gateway_order_object ? json_decode( $gateway_order_object, true ) : [],
				'gateway_order_version'     => $gateway_order_version,
				'gateway_customer_id'       => $gateway_customer_id,
				'latest_payload_hash_sent'  => $latest_payload_hash_sent,
				'total_value'               => Commerce\Utils\Value::create( $total_value ),
				'subtotal'                  => Commerce\Utils\Value::create( $subtotal ),
				'total'                     => $total_value,
				'currency'                  => $currency,
				'purchaser_name'            => $purchaser_full_name,
				'purchaser_email'           => $purchaser_email,
				'purchase_time'             => get_post_time( \Tribe__Date_Utils::DBDATETIMEFORMAT, false, $this->post ),
				'items'                     => $items,
				'hash'                      => $hash,
				'events_in_order'           => $events_in_order,
				'tickets_in_order'          => $tickets_in_order,
				'flag_action_markers'       => $flag_action_markers,
				'on_checkout_hold'          => $on_checkout_hold_timeout,
				'purchaser'                 => [
					'user_id'    => (int) $purchaser_user_id,
					'first_name' => $purchaser_first_name,
					'last_name'  => $purchaser_last_name,
					'full_name'  => $purchaser_full_name,
					'email'      => $purchaser_email,
				],
			];
		} catch ( \Exception $e ) {
			return [];
		}

		return $properties;
	}

	/**
	 * Modifies the Gateway payload meta into a more easily consumable array of data.
	 *
	 * @since 5.1.10
	 *
	 * @param array $post_meta Current existing meta.
	 *
	 * @return array
	 */
	protected function get_gateway_payloads( $post_meta ) {
		$statuses = tribe( Commerce\Status\Status_Handler::class )->get_all();
		$meta     = [];

		foreach ( $statuses as $status ) {
			$status_payloads = Arr::get( $post_meta, [ Order::get_gateway_payload_meta_key( $status ) ], [] );

			$meta[ $status->get_slug() ] = array_map( 'maybe_unserialize', $status_payloads );
		}

		return array_filter( $meta );
	}

	/**
	 * Modifies the status log meta into a more easily consumable array of data.
	 *
	 * @since 5.1.10
	 *
	 * @param array $post_meta Current existing meta.
	 *
	 * @return array
	 */
	protected function get_status_log( $post_meta ) {
		$statuses = tribe( Commerce\Status\Status_Handler::class )->get_all();
		$meta     = [];

		foreach ( $statuses as $status ) {
			$status_payloads = Arr::get( $post_meta, [ Order::get_status_log_meta_key( $status ) ], [] );

			$meta[ $status->get_slug() ] = array_map( [ Dates::class, 'build_date_object' ], $status_payloads );
		}

		return array_filter( $meta );
	}

	/**
	 * Modifies the markers for flag actions log meta into a more easily consumable array of data.
	 *
	 * @since 5.1.10
	 *
	 * @param array $post_meta Current existing meta.
	 *
	 * @return array
	 */
	protected function get_flag_action_markers( $post_meta ) {
		$statuses = tribe( Commerce\Status\Status_Handler::class )->get_all();
		$meta     = [];

		foreach ( $statuses as $status ) {
			$slug = $status->get_slug();
			foreach ( $status->get_flags() as $flag ) {
				$flags                  = Arr::get( $post_meta, [ Order::get_flag_action_marker_meta_key( $flag, $status ) ], [] );
				$meta[ $slug ][ $flag ] = array_filter( array_map( [ Dates::class, 'build_date_object' ], $flags ) );
			}
			$meta[ $slug ] = array_filter( $meta[ $slug ] );
		}

		return array_filter( $meta );
	}

	/**
	 * {@inheritDoc}
	 */
	protected function get_cache_slug() {
		return 'tc_orders';
	}
}
