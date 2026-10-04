<?php
/**
 * Trade Sphare Pro - Cart
 *
 * @package TradeSpharePro
 */

defined( 'ABSPATH' ) || exit;

do_action( 'woocommerce_before_cart' );
?>

<section class="ts-cart-page">

	<div class="ts-container">

		<header class="ts-cart-header">

			<span class="ts-cart-eyebrow">
				<?php
				esc_html_e(
					'السلة',
					'trade-sphare-pro'
				);
				?>
			</span>

			<h1 class="ts-cart-title">
				<?php
				esc_html_e(
					'مراجعة طلبك',
					'trade-sphare-pro'
				);
				?>
			</h1>

			<p class="ts-cart-description">
				<?php
				esc_html_e(
					'راجع المنتجات والكميات والأسعار قبل الانتقال إلى إتمام الطلب.',
					'trade-sphare-pro'
				);
				?>
			</p>

		</header>


		<?php wc_print_notices(); ?>


		<form
			class="woocommerce-cart-form ts-cart-form"
			action="<?php echo esc_url( wc_get_cart_url() ); ?>"
			method="post"
		>

			<?php do_action( 'woocommerce_before_cart_table' ); ?>


			<div class="ts-cart-layout">

				<!-- =================================================
				     CART PRODUCTS
				================================================== -->

				<div class="ts-cart-products">

					<div class="ts-cart-products-header">

						<h2>
							<?php
							esc_html_e(
								'المنتجات',
								'trade-sphare-pro'
							);
							?>
						</h2>

						<span>
							<?php
							echo esc_html(
								sprintf(
									/* translators: %s: number of cart items. */
									_n(
										'%s منتج',
										'%s منتجات',
										WC()->cart->get_cart_contents_count(),
										'trade-sphare-pro'
									),
									number_format_i18n(
										WC()->cart->get_cart_contents_count()
									)
								)
							);
							?>
						</span>

					</div>


					<table
						class="shop_table shop_table_responsive cart woocommerce-cart-form__contents ts-cart-table"
						cellspacing="0"
					>

						<thead>

							<tr>

								<th scope="col" class="product-remove">
									<span class="screen-reader-text">
										<?php
										esc_html_e(
											'حذف',
											'trade-sphare-pro'
										);
										?>
									</span>
								</th>

								<th scope="col" class="product-thumbnail">
									<span class="screen-reader-text">
										<?php
										esc_html_e(
											'الصورة',
											'trade-sphare-pro'
										);
										?>
									</span>
								</th>

								<th scope="col" class="product-name">
									<?php
									esc_html_e(
										'المنتج',
										'trade-sphare-pro'
									);
									?>
								</th>

								<th scope="col" class="product-price">
									<?php
									esc_html_e(
										'السعر',
										'trade-sphare-pro'
									);
									?>
								</th>

								<th scope="col" class="product-quantity">
									<?php
									esc_html_e(
										'الكمية',
										'trade-sphare-pro'
									);
									?>
								</th>

								<th scope="col" class="product-subtotal">
									<?php
									esc_html_e(
										'الإجمالي',
										'trade-sphare-pro'
									);
									?>
								</th>

							</tr>

						</thead>


						<tbody>

							<?php do_action( 'woocommerce_before_cart_contents' ); ?>


							<?php foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) : ?>

								<?php
								$_product = apply_filters(
									'woocommerce_cart_item_product',
									$cart_item['data'],
									$cart_item,
									$cart_item_key
								);

								$product_id = apply_filters(
									'woocommerce_cart_item_product_id',
									$cart_item['product_id'],
									$cart_item,
									$cart_item_key
								);
								?>

								<?php
								if (
									$_product &&
									$_product->exists() &&
									$cart_item['quantity'] > 0 &&
									apply_filters(
										'woocommerce_cart_item_visible',
										true,
										$cart_item,
										$cart_item_key
									)
								) :
									?>

									<tr
										class="<?php echo esc_attr( apply_filters( 'woocommerce_cart_item_class', 'woocommerce-cart-form__cart-item cart_item', $cart_item, $cart_item_key ) ); ?>"
									>

										<!-- Remove -->

										<td
											class="product-remove"
											data-title="<?php esc_attr_e( 'حذف', 'trade-sphare-pro' ); ?>"
										>

											<?php
											echo apply_filters(
												'woocommerce_cart_item_remove_link',
												sprintf(
													'<a href="%s" class="remove ts-cart-remove" aria-label="%s" data-product_id="%s" data-product_sku="%s">&times;</a>',
													esc_url( wc_get_cart_remove_url( $cart_item_key ) ),
													esc_attr(
														sprintf(
															__( 'حذف %s من السلة', 'trade-sphare-pro' ),
															wp_strip_all_tags(
																$_product->get_name()
															)
														)
													),
													esc_attr( $product_id ),
													esc_attr( $_product->get_sku() )
												),
												$cart_item_key
											);
											?>

										</td>


										<!-- Thumbnail -->

										<td
											class="product-thumbnail"
											data-title="<?php esc_attr_e( 'الصورة', 'trade-sphare-pro' ); ?>"
										>

											<a href="<?php echo esc_url( $_product->get_permalink( $cart_item ) ); ?>">

												<?php
												echo wp_kses_post(
													$_product->get_image(
														'woocommerce_thumbnail'
													)
												);
												?>

											</a>

										</td>


										<!-- Product -->

										<td
											class="product-name"
											data-title="<?php esc_attr_e( 'المنتج', 'trade-sphare-pro' ); ?>"
										>

											<?php
											$product_name = $_product->get_name();

											if ( ! $_product->is_visible() ) :
												?>

												<strong>
													<?php echo esc_html( $product_name ); ?>
												</strong>

											<?php else : ?>

												<a
													href="<?php echo esc_url( $_product->get_permalink( $cart_item ) ); ?>"
												>
													<?php echo esc_html( $product_name ); ?>
												</a>

											<?php endif; ?>


											<?php
											echo wc_get_formatted_cart_item_data(
												$cart_item
											); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
											?>

											<?php
											if (
												$_product->backorders_require_notification()
												&&
												$cart_item['data']->backorders_allowed()
											) {

												echo wp_kses_post(
													'<p class="backorder_notification">' .
													esc_html__(
														'متوفر عند الطلب',
														'trade-sphare-pro'
													) .
													'</p>'
												);
											}
											?>

										</td>


										<!-- Price -->

										<td
											class="product-price"
											data-title="<?php esc_attr_e( 'السعر', 'trade-sphare-pro' ); ?>"
										>

											<?php
											echo apply_filters(
												'woocommerce_cart_item_price',
												WC()->cart->get_product_price(
													$_product
												),
												$cart_item,
												$cart_item_key
											); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
											?>

										</td>


										<!-- Quantity -->

										<td
											class="product-quantity"
											data-title="<?php esc_attr_e( 'الكمية', 'trade-sphare-pro' ); ?>"
										>

											<?php
											$min_quantity = 0;

											$max_quantity = $_product->get_max_purchase_quantity();

											woocommerce_quantity_input(
												array(
													'input_name'  => "cart[{$cart_item_key}][qty]",
													'input_value' => $cart_item['quantity'],
													'max_value'   => $max_quantity,
													'min_value'   => $min_quantity,
													'product_name'=> $product_name,
												),
												$_product,
												false
											);
											?>

										</td>


										<!-- Subtotal -->

										<td
											class="product-subtotal"
											data-title="<?php esc_attr_e( 'الإجمالي', 'trade-sphare-pro' ); ?>"
										>

											<?php
											echo apply_filters(
												'woocommerce_cart_item_subtotal',
												WC()->cart->get_product_subtotal(
													$_product,
													$cart_item['quantity']
												),
												$cart_item,
												$cart_item_key
											); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
											?>

										</td>

									</tr>

								<?php endif; ?>

							<?php endforeach; ?>


							<?php do_action( 'woocommerce_cart_contents' ); ?>


							<!-- Cart Actions -->

							<tr>

								<td
									colspan="6"
									class="actions ts-cart-actions"
								>

									<?php if ( wc_coupons_enabled() ) : ?>

										<div class="coupon">

											<label
												class="screen-reader-text"
												for="coupon_code"
											>
												<?php
												esc_html_e(
													'رمز الخصم',
													'trade-sphare-pro'
												);
												?>
											</label>

											<input
												type="text"
												name="coupon_code"
												class="input-text"
												id="coupon_code"
												value=""
												placeholder="<?php esc_attr_e( 'رمز الخصم', 'trade-sphare-pro' ); ?>"
											>

											<button
												type="submit"
												class="button"
												name="apply_coupon"
												value="<?php esc_attr_e( 'تطبيق الكوبون', 'trade-sphare-pro' ); ?>"
											>
												<?php
												esc_html_e(
													'تطبيق الكوبون',
													'trade-sphare-pro'
												);
												?>
											</button>

										</div>

									<?php endif; ?>


									<button
										type="submit"
										class="button ts-update-cart"
										name="update_cart"
										value="<?php esc_attr_e( 'تحديث السلة', 'trade-sphare-pro' ); ?>"
									>
										<?php
										esc_html_e(
											'تحديث السلة',
											'trade-sphare-pro'
										);
										?>
									</button>


									<?php do_action( 'woocommerce_cart_actions' ); ?>


									<?php
									wp_nonce_field(
										'woocommerce-cart',
										'woocommerce-cart-nonce'
									);
									?>

								</td>

							</tr>


							<?php do_action( 'woocommerce_after_cart_contents' ); ?>

						</tbody>

					</table>


					<?php do_action( 'woocommerce_after_cart_table' ); ?>

				</div>


				<!-- =================================================
				     CART TOTALS
				================================================== -->

				<aside class="ts-cart-summary">

					<?php
					do_action( 'woocommerce_cart_collaterals' );
					?>

				</aside>

			</div>

		</form>

	</div>

</section>

<?php do_action( 'woocommerce_after_cart' ); ?>