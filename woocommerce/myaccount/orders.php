<?php
/**
 * Trade Sphare Pro - My Account Orders
 *
 * @package TradeSpharePro
 */

defined( 'ABSPATH' ) || exit;

do_action( 'woocommerce_before_account_orders', $has_orders );

$wp_button_class = '';

if ( function_exists( 'wc_wp_theme_get_element_class' ) ) {
	$wp_button_class = wc_wp_theme_get_element_class( 'button' );
}
?>

<section class="ts-account-orders">

<header class="ts-account-section-header">
	<div class="ts-account-section-heading">
		<span class="ts-account-eyebrow">
			<?php esc_html_e( 'حسابي', 'trade-sphare-pro' ); ?>
		</span>

		<h1 class="ts-account-section-title">
			<?php esc_html_e( 'طلباتي', 'trade-sphare-pro' ); ?>
		</h1>

		<p class="ts-account-section-description">
			<?php esc_html_e( 'تابع جميع طلباتك وراجع تفاصيل كل طلب وحالته.', 'trade-sphare-pro' ); ?>
		</p>
	</div>

	<?php if ( $has_orders ) : ?>
		<div class="ts-account-orders-count">
			<span class="ts-account-orders-count-label">
				<?php esc_html_e( 'إجمالي الطلبات', 'trade-sphare-pro' ); ?>
			</span>

			<strong class="ts-account-orders-count-number">
				<?php echo esc_html( $customer_orders->total ); ?>
			</strong>
		</div>
	<?php endif; ?>
</header>

<?php if ( $has_orders ) : ?>

	<div class="ts-account-orders-panel">

		<div class="ts-account-orders-panel-header">
			<div>
				<h2>
					<?php esc_html_e( 'سجل الطلبات', 'trade-sphare-pro' ); ?>
				</h2>

				<p>
					<?php esc_html_e( 'يمكنك فتح أي طلب لعرض تفاصيله الكاملة.', 'trade-sphare-pro' ); ?>
				</p>
			</div>
		</div>

		<div class="ts-account-orders-table-wrap">

			<table class="woocommerce-orders-table woocommerce-MyAccount-orders shop_table shop_table_responsive my_account_orders account-orders-table ts-account-orders-table">

				<thead>
					<tr>
						<?php foreach ( wc_get_account_orders_columns() as $column_id => $column_name ) : ?>
							<th
								scope="col"
								class="woocommerce-orders-table__header woocommerce-orders-table__header-<?php echo esc_attr( $column_id ); ?>"
							>
								<span class="nobr">
									<?php echo esc_html( $column_name ); ?>
								</span>
							</th>
						<?php endforeach; ?>
					</tr>
				</thead>

				<tbody>
					<?php foreach ( $customer_orders->orders as $customer_order ) : ?>

						<?php
						$order = wc_get_order( $customer_order );

						if ( ! $order ) {
							continue;
						}

						$item_count = $order->get_item_count() - $order->get_item_count_refunded();
						?>

						<tr
							class="woocommerce-orders-table__row woocommerce-orders-table__row--status-<?php echo esc_attr( $order->get_status() ); ?> order"
						>

							<?php foreach ( wc_get_account_orders_columns() as $column_id => $column_name ) : ?>

								<?php
								$is_order_number = 'order-number' === $column_id;
								$cell_class     = 'woocommerce-orders-table__cell woocommerce-orders-table__cell-' . $column_id;
								?>

								<?php if ( $is_order_number ) : ?>

									<th
										class="<?php echo esc_attr( $cell_class ); ?>"
										data-title="<?php echo esc_attr( $column_name ); ?>"
										scope="row"
									>

								<?php else : ?>

									<td
										class="<?php echo esc_attr( $cell_class ); ?>"
										data-title="<?php echo esc_attr( $column_name ); ?>"
									>

								<?php endif; ?>

									<?php if ( has_action( 'woocommerce_my_account_my_orders_column_' . $column_id ) ) : ?>

										<?php
										do_action(
											'woocommerce_my_account_my_orders_column_' . $column_id,
											$order
										);
										?>

									<?php elseif ( $is_order_number ) : ?>

										<a
											class="ts-account-order-number"
											href="<?php echo esc_url( $order->get_view_order_url() ); ?>"
											aria-label="<?php echo esc_attr( sprintf( __( 'عرض الطلب رقم %s', 'trade-sphare-pro' ), $order->get_order_number() ) ); ?>"
										>
											<span class="ts-account-order-hash">#</span>
											<?php echo esc_html( $order->get_order_number() ); ?>
										</a>

									<?php elseif ( 'order-date' === $column_id ) : ?>

										<?php if ( $order->get_date_created() ) : ?>
											<time
												class="ts-account-order-date"
												datetime="<?php echo esc_attr( $order->get_date_created()->date( 'c' ) ); ?>"
											>
												<?php echo esc_html( wc_format_datetime( $order->get_date_created() ) ); ?>
											</time>
										<?php else : ?>
											<span class="ts-account-order-empty">
												<?php esc_html_e( 'غير متوفر', 'trade-sphare-pro' ); ?>
											</span>
										<?php endif; ?>

									<?php elseif ( 'order-status' === $column_id ) : ?>

										<span class="ts-account-order-status ts-account-order-status--<?php echo esc_attr( $order->get_status() ); ?>">
											<?php echo esc_html( wc_get_order_status_name( $order->get_status() ) ); ?>
										</span>

									<?php elseif ( 'order-total' === $column_id ) : ?>

										<div class="ts-account-order-total">
											<strong>
												<?php echo wp_kses_post( $order->get_formatted_order_total() ); ?>
											</strong>

											<span class="ts-account-order-items">
												<?php
												echo esc_html(
													sprintf(
														_n(
															'%s منتج',
															'%s منتجات',
															$item_count,
															'trade-sphare-pro'
														),
														$item_count
													)
												);
												?>
											</span>
										</div>

									<?php elseif ( 'order-actions' === $column_id ) : ?>

										<?php
										$actions = wc_get_account_orders_actions( $order );

										if ( ! empty( $actions ) ) :
											?>

											<div class="ts-account-order-actions">

												<?php foreach ( $actions as $key => $action ) : ?>

													<?php
													$action_aria_label = ! empty( $action['aria-label'] )
														? $action['aria-label']
														: sprintf(
															__( '%1$s للطلب رقم %2$s', 'trade-sphare-pro' ),
															$action['name'],
															$order->get_order_number()
														);
													?>

													<a
														href="<?php echo esc_url( $action['url'] ); ?>"
														class="woocommerce-button <?php echo esc_attr( $wp_button_class ); ?> button <?php echo esc_attr( sanitize_html_class( $key ) ); ?>"
														aria-label="<?php echo esc_attr( $action_aria_label ); ?>"
													>
														<?php echo esc_html( $action['name'] ); ?>
													</a>

												<?php endforeach; ?>

											</div>

										<?php endif; ?>

									<?php endif; ?>

								<?php if ( $is_order_number ) : ?>

									</th>

								<?php else : ?>

									</td>

								<?php endif; ?>

							<?php endforeach; ?>

						</tr>

					<?php endforeach; ?>
				</tbody>

			</table>

		</div>

	</div>

	<?php do_action( 'woocommerce_before_account_orders_pagination' ); ?>

	<?php if ( 1 < $customer_orders->max_num_pages ) : ?>

		<nav
			class="woocommerce-pagination woocommerce-pagination--without-numbers woocommerce-Pagination ts-account-orders-pagination"
			aria-label="<?php esc_attr_e( 'التنقل بين صفحات الطلبات', 'trade-sphare-pro' ); ?>"
		>

			<?php if ( 1 !== $current_page ) : ?>

				<a
					class="woocommerce-button woocommerce-button--previous woocommerce-Button woocommerce-Button--previous button <?php echo esc_attr( $wp_button_class ); ?>"
					href="<?php echo esc_url( wc_get_endpoint_url( 'orders', $current_page - 1 ) ); ?>"
				>
					<span aria-hidden="true">←</span>
					<?php esc_html_e( 'الطلبات السابقة', 'trade-sphare-pro' ); ?>
				</a>

			<?php endif; ?>

			<?php if ( intval( $customer_orders->max_num_pages ) !== $current_page ) : ?>

				<a
					class="woocommerce-button woocommerce-button--next woocommerce-Button woocommerce-Button--next button <?php echo esc_attr( $wp_button_class ); ?>"
					href="<?php echo esc_url( wc_get_endpoint_url( 'orders', $current_page + 1 ) ); ?>"
				>
					<?php esc_html_e( 'الطلبات التالية', 'trade-sphare-pro' ); ?>
					<span aria-hidden="true">→</span>
				</a>

			<?php endif; ?>

		</nav>

	<?php endif; ?>

<?php else : ?>

	<div class="ts-account-orders-empty">

		<div class="ts-account-orders-empty-icon" aria-hidden="true">
			<svg
				viewBox="0 0 24 24"
				width="34"
				height="34"
				fill="none"
				stroke="currentColor"
				stroke-width="1.7"
				stroke-linecap="round"
				stroke-linejoin="round"
				focusable="false"
			>
				<path d="M6 3h12v18H6z"></path>
				<path d="M9 7h6"></path>
				<path d="M9 11h6"></path>
				<path d="M9 15h4"></path>
			</svg>
		</div>

		<h2>
			<?php esc_html_e( 'لا توجد طلبات حتى الآن', 'trade-sphare-pro' ); ?>
		</h2>

		<p>
			<?php esc_html_e( 'عند تنفيذ أول طلب لك، سيظهر هنا مع جميع تفاصيله وحالته.', 'trade-sphare-pro' ); ?>
		</p>

		<a
			class="ts-button"
			href="<?php echo esc_url( apply_filters( 'woocommerce_return_to_shop_redirect', wc_get_page_permalink( 'shop' ) ) ); ?>"
		>
			<?php esc_html_e( 'تصفح المتجر', 'trade-sphare-pro' ); ?>
		</a>

	</div>

<?php endif; ?>

<?php do_action( 'woocommerce_after_account_orders', $has_orders ); ?>

</section>
