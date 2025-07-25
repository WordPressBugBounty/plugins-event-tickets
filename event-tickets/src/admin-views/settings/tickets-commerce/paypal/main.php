<?php
/**
 * The Template for displaying the Tickets Commerce PayPal Settings.
 *
 * @version 5.3.0
 *
 * @since 5.1.10
 * @since 5.3.0 Using generic CSS classes for gateway instead of PayPal.
 *
 * @var Tribe__Tickets__Admin__Views                  $this                  [Global] Template object.
 * @var string                                        $plugin_url            [Global] The plugin URL.
 * @var TEC\Tickets\Commerce\Gateways\PayPal\Merchant $merchant              [Global] The merchant class.
 * @var TEC\Tickets\Commerce\Gateways\PayPal\Signup   $signup                [Global] The Signup class.
 * @var bool                                          $is_merchant_active    [Global] Whether the merchant is active or not.
 * @var bool                                          $is_merchant_connected [Global] Whether the merchant is connected or not.
 */

defined( 'ABSPATH' ) || exit;
$classes = [
	'tec-tickets__admin-settings-tickets-commerce-gateway',
	'tec-tickets__admin-settings-tickets-commerce-gateway--connected' => $is_merchant_connected,
]
?>

<div <?php tribe_classes( $classes ); ?>>
	<div id="tec-tickets__admin-settings-tickets-commerce-gateway-connect" class="tec-tickets__admin-settings-tickets-commerce-gateway-connect">

		<?php $this->template( 'settings/tickets-commerce/paypal/connect/inactive' ); ?>

		<?php $this->template( 'settings/tickets-commerce/paypal/connect/active' ); ?>

	</div>

	<?php $this->template( 'settings/tickets-commerce/paypal/connect/logo' ); ?>

</div>

<?php $this->template( 'settings/tickets-commerce/paypal/modal/signup-complete' ); ?>
<?php
