<?php
/**
 * Trade Sphare Pro - View Order
 *
 * Shows the details of a particular order on the account page.
 *
 * @package TradeSpharePro
 */

defined( 'ABSPATH' ) || exit;

if ( ! $order ) {
	return;
}

$order_status       = $order->get_status();
$order_status_name  = wc_get_order_status_name( $order_status );
$order_date         = $order->get_date_created();
$order_number       = $order->get_order_number();
$payment_method     = $order->get_payment_method_title();
$show_customer_info = is_user_logged_in() && $order->get_user_id() === get_current_user_id();
$notes              = $order->get_customer_order_notes();
?>

<section class="ts-account-view-order">

	<header class="ts-account-view-order-header">

		<div class="ts-account-view-order-heading">

			<span class="ts-account-eyebrow">
				<?php esc_html_e( 'تفاصيل الطلب', 'trade-sphare-pro' ); ?>
			</span>

			<h1 class="ts-account-view-order-title">
				<?php
				printf(
					/* translators: %s: order number */
					esc_html__( 'الطلب #%s', 'trade-sphare-pro' ),
					esc_html( $order_number )
				);
				?>
			</h1>

			<?php if ( $order_date ) : ?>
				<p class="ts-account-view-order-date">
					<?php
					printf(
						/* translators: %s: order date */
						esc_html__( 'تم إنشاء الطلب بتاريخ %s', 'trade-sphare-pro' ),
						esc_html( wc_format_datetime( $order_date ) )
					);
					?>
				</p>
			<?php endif; ?>

		</div>

		<div class="ts-account-view-order-status ts-account-view-order-status--<?php echo esc_attr( $order_status ); ?>">
			<span class="ts-account-view-order-status-label">
				<?php esc_html_e( 'حالة الطلب', 'trade-sphare-pro' ); ?>
			</span>

			<strong>
				<?php echo esc_html( $order_status_name ); ?>
			</strong>
		</div>

	</header>

	<div class="ts-account-order-summary-cards">

		<div class="ts-account-order-summary-card">

			<span class="ts-account-order-summary-label">
				<?php esc_html_e( 'رقم الطلب', 'trade-sphare-pro' ); ?>
			</span>

			<strong class="ts-account-order-summary-value">
				#<?php echo esc_html( $order_number ); ?>
			</strong>

		</div>

		<?php if ( $order_date ) : ?>

			<div class="ts-account-order-summary-card">

				<span class="ts-account-order-summary-label">
					<?php esc_html_e( 'تاريخ الطلب', 'trade-sphare-pro' ); ?>
				</span>

				<strong class="ts-account-order-summary-value">
					<?php echo esc_html( wc_format_datetime( $order_date ) ); ?>
				</strong>

			</div>

		<?php endif; ?>

		<div class="ts-account-order-summary-card">

			<span class="ts-account-order-summary-label">
				<?php esc_html_e( 'إجمالي الطلب', 'trade-sphare-pro' ); ?>
			</span>

			<strong class="ts-account-order-summary-value">
				<?php echo wp_kses_post( $order->get_formatted_order_total() ); ?>
			</strong>

		</div>

		<?php if ( $payment_method ) : ?>

			<div class="ts-account-order-summary-card">

				<span class="ts-account-order-summary-label">
					<?php esc_html_e( 'طريقة الدفع', 'trade-sphare-pro' ); ?>
				</span>

				<strong class="ts-account-order-summary-value">
					<?php echo esc_html( $payment_method ); ?>
				</strong>

			</div>

		<?php endif; ?>

	</div>

	<?php
	/**
	 * WooCommerce core order details.
	 *
	 * Important:
	 * Do not call woocommerce_order_details_table() directly here.
	 * WooCommerce handles it through the standard action below.
	 */
	?>

	<div class="ts-account-order-details">

		<div class="ts-account-order-details-header">

			<div>
				<span class="ts-account-eyebrow">
					<?php esc_html_e( 'الطلب', 'trade-sphare-pro' ); ?>
				</span>

				<h2>
					<?php esc_html_e( 'تفاصيل المنتجات', 'trade-sphare-pro' ); ?>
				</h2>
			</div>

			<div class="ts-account-order-details-total">
				<?php echo wp_kses_post( $order->get_formatted_order_total() ); ?>
			</div>

		</div>

		<div class="ts-account-order-details-content">

			<?php
			/**
			 * Standard WooCommerce order details action.
			 *
			 * The core callback renders:
			 * order/order-details.php
			 */
			do_action( 'woocommerce_view_order', $order->get_id() );
			?>

		</div>

	</div>

	<?php if ( ! empty( $notes ) ) : ?>

		<section class="ts-account-order-notes">

			<header class="ts-account-order-notes-header">

				<span class="ts-account-eyebrow">
					<?php esc_html_e( 'المتابعة', 'trade-sphare-pro' ); ?>
				</span>

				<h2>
					<?php esc_html_e( 'تحديثات الطلب', 'trade-sphare-pro' ); ?>
				</h2>

			</header>

			<div class="ts-account-order-notes-list">

				<?php foreach ( $notes as $note ) : ?>

					<article class="ts-account-order-note">

						<div class="ts-account-order-note-date">
							<?php
							echo esc_html(
								wc_format_datetime(
									$note->comment_date
								)
							);
							?>
						</div>

						<div class="ts-account-order-note-content">
							<?php echo wp_kses_post( wpautop( wptexturize( $note->comment_content ) ) ); ?>
						</div>

					</article>

				<?php endforeach; ?>

			</div>

		</section>

	<?php endif; ?>

	<?php if ( $show_customer_info ) : ?>

		<section class="ts-account-order-customer">

			<header class="ts-account-order-customer-header">

				<span class="ts-account-eyebrow">
					<?php esc_html_e( 'معلومات العميل', 'trade-sphare-pro' ); ?>
				</span>

				<h2>
					<?php esc_html_e( 'بيانات الطلب والعناوين', 'trade-sphare-pro' ); ?>
				</h2>

			</header>

			<div class="ts-account-order-customer-content">

				<?php
				wc_get_template(
					'order/order-details-customer.php',
					array(
						'order' => $order,
					)
				);
				?>

			</div>

		</section>

	<?php endif; ?>

	<?php
	/**
	 * Allow extensions and payment gateways to add content.
	 */
	do_action( 'woocommerce_after_order_details', $order );
	?>

	<div class="ts-account-view-order-actions">

		<a
			class="ts-button ts-account-view-order-back"
			href="<?php echo esc_url( wc_get_account_endpoint_url( 'orders' ) ); ?>"
		>
			<span aria-hidden="true">→</span>
			<?php esc_html_e( 'العودة إلى طلباتي', 'trade-sphare-pro' ); ?>
		</a>

		<a
			class="ts-button ts-button-secondary"
			href="<?php echo esc_url( wc_get_page_permalink( 'shop' ) ); ?>"
		>
			<?php esc_html_e( 'متابعة التسوق', 'trade-sphare-pro' ); ?>
		</a>

	</div>

</section>