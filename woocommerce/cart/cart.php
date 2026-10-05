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

			<div class="ts-cart-heading">

				<span class="ts-cart-eyebrow">
					<?php
					esc_html_e(
						'Ø§Ù„Ø³Ù„Ø©',
						'trade-sphare-pro'
					);
					?>
				</span>

				<h1 class="ts-cart-title">
					<?php
					esc_html_e(
						'Ù…Ø±Ø§Ø¬Ø¹Ø© Ø·Ù„Ø¨Ùƒ',
						'trade-sphare-pro'
					);
					?>
				</h1>

				<p class="ts-cart-description">
					<?php
					esc_html_e(
						'Ø±Ø§Ø¬Ø¹ Ø§Ù„Ù…Ù†ØªØ¬Ø§Øª ÙˆØ§Ù„ÙƒÙ…ÙŠØ§Øª ÙˆØ§Ù„Ø£Ø³Ø¹Ø§Ø± Ù‚Ø¨Ù„ Ø§Ù„Ø§Ù†ØªÙ‚Ø§Ù„ Ø¥Ù„Ù‰ Ø¥ØªÙ…Ø§Ù… Ø§Ù„Ø·Ù„Ø¨.',
						'trade-sphare-pro'
					);
					?>
				</p>

			</div>

			<div class="ts-cart-count-summary">

				<span class="ts-cart-count-number">
					<?php
					echo esc_html(
						number_format_i18n(
							WC()->cart->get_cart_contents_count()
						)
					);
					?>
				</span>

				<span class="ts-cart-count-label">
					<?php
					echo esc_html(
						sprintf(
							/* translators: %s: number of cart items. */
							_n(
								'Ù…Ù†ØªØ¬ ÙÙŠ Ø§Ù„Ø³Ù„Ø©',
								'Ù…Ù†ØªØ¬Ø§Øª ÙÙŠ Ø§Ù„Ø³Ù„Ø©',
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

						<div class="ts-cart-products-heading">

							<h2>
								<?php
								esc_html_e(
									'Ø§Ù„Ù…Ù†ØªØ¬Ø§Øª',
									'trade-sphare-pro'
								);
								?>
							</h2>

							<p>
								<?php
								esc_html_e(
									'ØªØ­Ù‚Ù‚ Ù…Ù† Ø§Ù„ÙƒÙ…ÙŠØ© ÙˆØ§Ù„Ø³Ø¹Ø± Ù‚Ø¨Ù„ Ø¥ØªÙ…Ø§Ù… Ø·Ù„Ø¨Ùƒ.',
									'trade-sphare-pro'
								);
								?>
							</p>

						</div>

						<a
							class="ts-cart-continue"
							href="<?php echo esc_url( wc_get_page_permalink( 'shop' ) ); ?>"
						>
							<?php
							esc_html_e(
								'Ù…ØªØ§Ø¨Ø¹Ø© Ø§Ù„ØªØ³ÙˆÙ‚',
								'trade-sphare-pro'
							);
							?>
						</a>

					</div>


					<div class="ts-cart-table-wrap">

						<table
							class="shop_table shop_table_responsive cart woocommerce-cart-form__contents ts-cart-table"
							cellspacing="0"
							aria-label="<?php esc_attr_e( 'Ù…Ø­ØªÙˆÙŠØ§Øª Ø³Ù„Ø© Ø§Ù„ØªØ³ÙˆÙ‚', 'trade-sphare-pro' ); ?>"
						>

							<thead>

								<tr>

									<th scope="col" class="product-remove">
										<span class="screen-reader-text">
											<?php
											esc_html_e(
												'Ø­Ø°Ù',
												'trade-sphare-pro'
											);
											?>
										</span>
									</th>

									<th scope="col" class="product-thumbnail">
										<span class="screen-reader-text">
											<?php
											esc_html_e(
												'Ø§Ù„ØµÙˆØ±Ø©',
												'trade-sphare-pro'
											);
											?>
										</span>
									</th>

									<th scope="col" class="product-name">
										<?php
										esc_html_e(
											'Ø§Ù„Ù…Ù†ØªØ¬',
											'trade-sphare-pro'
										);
										?>
									</th>

									<th scope="col" class="product-price">
										<?php
										esc_html_e(
											'Ø§Ù„Ø³Ø¹Ø±',
											'trade-sphare-pro'
										);
										?>
									</th>

									<th scope="col" class="product-quantity">
										<?php
										esc_html_e(
											'Ø§Ù„ÙƒÙ…ÙŠØ©',
											'trade-sphare-pro'
										);
										?>
									</th>

									<th scope="col" class="product-subtotal">
										<?php
										esc_html_e(
											'Ø§Ù„Ø¥Ø¬Ù…Ø§Ù„ÙŠ',
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

									$product_name = $_product
										? $_product->get_name()
										: '';
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
												data-title="<?php esc_attr_e( 'Ø­Ø°Ù', 'trade-sphare-pro' ); ?>"
											>

												<?php
												echo apply_filters(
													'woocommerce_cart_item_remove_link',
													sprintf(
														'<a href="%s" class="remove ts-cart-remove" aria-label="%s" data-product_id="%s" data-product_sku="%s">&times;</a>',
														esc_url( wc_get_cart_remove_url( $cart_item_key ) ),
														esc_attr(
															sprintf(
																__( 'Ø­Ø°Ù %s Ù…Ù† Ø§Ù„Ø³Ù„Ø©', 'trade-sphare-pro' ),
																wp_strip_all_tags(
																	$product_name
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
												data-title="<?php esc_attr_e( 'Ø§Ù„ØµÙˆØ±Ø©', 'trade-sphare-pro' ); ?>"
											>

												<a
													href="<?php echo esc_url( $_product->get_permalink( $cart_item ) ); ?>"
													aria-label="<?php echo esc_attr( $product_name ); ?>"
												>

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
												data-title="<?php esc_attr_e( 'Ø§Ù„Ù…Ù†ØªØ¬', 'trade-sphare-pro' ); ?>"
											>

												<?php if ( ! $_product->is_visible() ) : ?>

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
												) :
													?>

													<p class="backorder_notification">
														<?php
														esc_html_e(
															'Ù…ØªÙˆÙØ± Ø¹Ù†Ø¯ Ø§Ù„Ø·Ù„Ø¨',
															'trade-sphare-pro'
														);
														?>
													</p>

												<?php endif; ?>

											</td>


											<!-- Price -->

											<td
												class="product-price"
												data-title="<?php esc_attr_e( 'Ø§Ù„Ø³Ø¹Ø±', 'trade-sphare-pro' ); ?>"
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
												data-title="<?php esc_attr_e( 'Ø§Ù„ÙƒÙ…ÙŠØ©', 'trade-sphare-pro' ); ?>"
											>

												<?php
												$min_quantity = 0;
												$max_quantity = $_product->get_max_purchase_quantity();

												woocommerce_quantity_input(
													array(
														'input_name'   => "cart[{$cart_item_key}][qty]",
														'input_value'  => $cart_item['quantity'],
														'max_value'    => $max_quantity,
														'min_value'    => $min_quantity,
														'product_name' => $product_name,
													),
													$_product,
													false
												);
												?>

											</td>


											<!-- Subtotal -->

											<td
												class="product-subtotal"
												data-title="<?php esc_attr_e( 'Ø§Ù„Ø¥Ø¬Ù…Ø§Ù„ÙŠ', 'trade-sphare-pro' ); ?>"
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

										<div class="ts-cart-actions-inner">

											<?php if ( wc_coupons_enabled() ) : ?>

												<div class="coupon">

													<label
														class="screen-reader-text"
														for="coupon_code"
													>
														<?php
														esc_html_e(
															'Ø±Ù…Ø² Ø§Ù„Ø®ØµÙ…',
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
														placeholder="<?php esc_attr_e( 'Ø£Ø¯Ø®Ù„ Ø±Ù…Ø² Ø§Ù„Ø®ØµÙ…', 'trade-sphare-pro' ); ?>"
														autocomplete="off"
													>

													<button
														type="submit"
														class="button"
														name="apply_coupon"
														value="<?php esc_attr_e( 'ØªØ·Ø¨ÙŠÙ‚ Ø§Ù„ÙƒÙˆØ¨ÙˆÙ†', 'trade-sphare-pro' ); ?>"
													>
														<?php
														esc_html_e(
															'ØªØ·Ø¨ÙŠÙ‚ Ø§Ù„ÙƒÙˆØ¨ÙˆÙ†',
															'trade-sphare-pro'
														);
														?>
													</button>

												</div>

											<?php endif; ?>


											<div class="ts-cart-update">

												<button
													type="submit"
													class="button ts-update-cart"
													name="update_cart"
													value="<?php esc_attr_e( 'ØªØ­Ø¯ÙŠØ« Ø§Ù„Ø³Ù„Ø©', 'trade-sphare-pro' ); ?>"
												>
													<?php
													esc_html_e(
														'ØªØ­Ø¯ÙŠØ« Ø§Ù„Ø³Ù„Ø©',
														'trade-sphare-pro'
													);
													?>
												</button>

												<?php do_action( 'woocommerce_cart_actions' ); ?>

											</div>

										</div>


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

					</div>


					<?php do_action( 'woocommerce_after_cart_table' ); ?>

				</div>


				<!-- =================================================
				     CART TOTALS
				================================================== -->

				<aside
					class="ts-cart-summary"
					aria-label="<?php esc_attr_e( 'Ù…Ù„Ø®Øµ Ø§Ù„Ø³Ù„Ø©', 'trade-sphare-pro' ); ?>"
				>

					<?php
					do_action( 'woocommerce_cart_collaterals' );
					?>

				</aside>

			</div>

		</form>

	</div>

</section>

<?php do_action( 'woocommerce_after_cart' ); ?>