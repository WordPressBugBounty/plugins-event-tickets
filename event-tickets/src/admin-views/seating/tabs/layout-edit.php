<?php
/**
 * The template used to render the Layout Edit tab.
 *
 * @since 5.16.0
 *
 * @var TEC\Events_Assigned_Seating\Admin\Tabs\Layout_Edit $tab The tab object to render.
 * @var string $iframe_url The URL to the service iframe.
 * @var string $token The ephemeral token used to secure the iframe communication with the service.
 * @var string $error The error message returned by the service.
 */

?>

<div class="tec-tickets__seating-tab-wrapper wrap">
	<div id="tec-tickets-seating-notice" class="notice" style="display: none;"></div>
	<div
		class="tec-tickets-seating__iframe-container"
		data-token="<?php echo esc_attr( $token ); ?>"
		data-error="<?php echo esc_attr( $error ); ?>"
	>
		<iframe
			data-src="<?php echo esc_url( $iframe_url ); ?>"
			id="tec-tickets-seating-iframe-layout-edit"
			class="tec-tickets-seating__iframe tec-tickets-seating__iframe--layout-edit"
			title="<?php esc_html_e( 'Seat Layout', 'event-tickets' ); ?>"></iframe>
	</div>
</div>
