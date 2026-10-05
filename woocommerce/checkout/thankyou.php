<?php
/**
 * Trade Sphare Pro - Order Received
 *
 * @package TradeSpharePro
 */

defined( 'ABSPATH' ) || exit;

if ( ! $order instanceof WC_Order ) :
	?>

	<section class="ts-order-received-page">

		<div class="ts-container">

			<div class="ts-order-received-card ts-order-received-invalid">

				<div
					class="ts-order-received-icon"
					aria-hidden="true"
				>
					!
				</div>

				<span class="ts-order-eyebrow">
					<?php
					esc_html_e(
						'Ø§Ù„Ø·Ù„Ø¨',
						'trade-sphare-pro'
					);
					?>
				</span>

				<h1>
					<?php
					esc_html_e(
						'ØªØ¹Ø°Ø± Ø§Ù„Ø¹Ø«ÙˆØ± Ø¹Ù„Ù‰ Ø§Ù„Ø·Ù„Ø¨',
						'trade-sphare-pro'
					);
					?>
				</h1>

				<p>
					<?php
					esc_html_e(
						'ÙŠØ±Ø¬Ù‰ Ù…Ø±Ø§Ø¬Ø¹Ø© Ø¨Ø±ÙŠØ¯Ùƒ Ø§Ù„Ø¥Ù„ÙƒØªØ±ÙˆÙ†ÙŠ Ø£Ùˆ Ø§Ù„ØªÙˆØ§ØµÙ„ Ù…Ø¹ Ø§Ù„Ø¯Ø¹Ù….',
						'trade-sphare-pro'
					);
					?>
				</p>

				<div class="ts-order-actions">

					<a
						class="ts-button"
						href="<?php echo esc_url( wc_get_page_permalink( 'shop' ) ); ?>"
					>
						<?php
						esc_html_e(
							'Ø§Ù„Ø¹ÙˆØ¯Ø© Ø¥Ù„Ù‰ Ø§Ù„Ù…ØªØ¬Ø±',
							'trade-sphare-pro'
						);
						?>
					</a>

				</div>

			</div>

		</div>

	</section>

	<?php
	return;
endif;

do_action(
	'woocommerce_before_thankyou',
	$order->get_id()
);

$is_shamcash = 'ts_shamcash' === $order->get_payment_method();

$transaction_id = $order->get_meta(
	'_ts_shamcash_transaction_id'
);

$order_status = $order->get_status();

$is_payment_pending = in_array(
	$order_status,
	array(
		'pending',
		'on-hold',
	),
	true
);
?>

<section class="ts-order-received-page">

	<div class="ts-container">

		<div class="ts-order-received-card">

			<!-- =================================================
			     SUCCESS HEADER
			================================================== -->

			<div class="ts-order-success">

				<div
					class="ts-order-success-icon"
					aria-hidden="true"
				>
					âœ“
				</div>

				<span class="ts-order-eyebrow">
					<?php
					esc_html_e(
						'ØªÙ… Ø§Ø³ØªÙ„Ø§Ù… Ø§Ù„Ø·Ù„Ø¨',
						'trade-sphare-pro'
					);
					?>
				</span>

				<h1>
					<?php
					esc_html_e(
						'Ø´ÙƒØ±Ù‹Ø§ Ù„Ùƒ! ØªÙ… Ø§Ø³ØªÙ„Ø§Ù… Ø·Ù„Ø¨Ùƒ Ø¨Ù†Ø¬Ø§Ø­.',
						'trade-sphare-pro'
					);
					?>
				</h1>

				<p>
					<?php
					if ( $is_payment_pending ) {
						esc_html_e(
							'Ø·Ù„Ø¨Ùƒ Ø§Ù„Ø¢Ù† Ù‚ÙŠØ¯ Ø§Ù„Ù…Ø±Ø§Ø¬Ø¹Ø© ÙˆØ³ÙŠØªÙ… ØªØ­Ø¯ÙŠØ« Ø­Ø§Ù„ØªÙ‡ Ø¨Ø¹Ø¯ Ø§Ù„ØªØ­Ù‚Ù‚ Ù…Ù† Ø§Ù„Ø¯ÙØ¹.',
							'trade-sphare-pro'
						);
					} else {
						esc_html_e(
							'ØªÙ… ØªØ³Ø¬ÙŠÙ„ Ø·Ù„Ø¨Ùƒ Ø¨Ù†Ø¬Ø§Ø­. ÙŠÙ…ÙƒÙ†Ùƒ Ù…ØªØ§Ø¨Ø¹Ø© Ø­Ø§Ù„ØªÙ‡ Ù…Ù† Ø®Ù„Ø§Ù„ Ø­Ø³Ø§Ø¨Ùƒ.',
							'trade-sphare-pro'
						);
					}
					?>
				</p>

			</div>


			<!-- =================================================
			     ORDER OVERVIEW
			================================================== -->

			<div class="ts-order-overview">

				<div class="ts-order-overview-item">

					<span>
						<?php
						esc_html_e(
							'Ø±Ù‚Ù… Ø§Ù„Ø·Ù„Ø¨',
							'trade-sphare-pro'
						);
						?>
					</span>

					<strong dir="ltr">
						<?php echo esc_html( $order->get_order_number() ); ?>
					</strong>

				</div>


				<div class="ts-order-overview-item">

					<span>
						<?php
						esc_html_e(
							'Ø§Ù„ØªØ§Ø±ÙŠØ®',
							'trade-sphare-pro'
						);
						?>
					</span>

					<strong>
						<?php
						echo esc_html(
							wc_format_datetime(
								$order->get_date_created()
							)
						);
						?>
					</strong>

				</div>


				<div class="ts-order-overview-item">

					<span>
						<?php
						esc_html_e(
							'Ø§Ù„Ø¥Ø¬Ù…Ø§Ù„ÙŠ',
							'trade-sphare-pro'
						);
						?>
					</span>

					<strong>
						<?php
						echo wp_kses_post(
							$order->get_formatted_order_total()
						);
						?>
					</strong>

				</div>


				<div class="ts-order-overview-item">

					<span>
						<?php
						esc_html_e(
							'Ø·Ø±ÙŠÙ‚Ø© Ø§Ù„Ø¯ÙØ¹',
							'trade-sphare-pro'
						);
						?>
					</span>

					<strong>
						<?php
						echo wp_kses_post(
							$order->get_payment_method_title()
						);
						?>
					</strong>

				</div>

			</div>


			<!-- =================================================
			     SHAM CASH
			================================================== -->

			<?php if ( $is_shamcash ) : ?>

				<div class="ts-shamcash-order-card">

					<div class="ts-shamcash-order-header">

						<div>

							<span class="ts-shamcash-order-badge">
								<?php
								esc_html_e(
									'Ø´Ø§Ù… ÙƒØ§Ø´',
									'trade-sphare-pro'
								);
								?>
							</span>

							<h2>
								<?php
								esc_html_e(
									'Ø¨ÙŠØ§Ù†Ø§Øª Ø§Ù„Ø¯ÙØ¹',
									'trade-sphare-pro'
								);
								?>
							</h2>

						</div>

					</div>


					<div class="ts-shamcash-order-status">

						<span
							class="ts-status-dot"
							aria-hidden="true"
						></span>

						<div>

							<strong>
								<?php
								esc_html_e(
									'Ø§Ù„Ø¯ÙØ¹ Ù‚ÙŠØ¯ Ø§Ù„ØªØ­Ù‚Ù‚',
									'trade-sphare-pro'
								);
								?>
							</strong>

							<p>
								<?php
								esc_html_e(
									'Ø³ÙŠØªÙ… ØªØ£ÙƒÙŠØ¯ Ø§Ù„Ø¯ÙØ¹ Ø¨Ø¹Ø¯ Ù…Ø±Ø§Ø¬Ø¹Ø© Ø¹Ù…Ù„ÙŠØ© Ø§Ù„ØªØ­ÙˆÙŠÙ„.',
									'trade-sphare-pro'
								);
								?>
							</p>

						</div>

					</div>


					<?php if ( $transaction_id ) : ?>

						<div class="ts-shamcash-order-detail">

							<span>
								<?php
								esc_html_e(
									'Ø±Ù‚Ù… Ø§Ù„Ø¹Ù…Ù„ÙŠØ©',
									'trade-sphare-pro'
								);
								?>
							</span>

							<strong dir="ltr">
								<?php echo esc_html( $transaction_id ); ?>
							</strong>

						</div>

					<?php endif; ?>

				</div>

			<?php endif; ?>


			<!-- =================================================
			     NEXT STEPS
			================================================== -->

			<div class="ts-order-next-steps">

				<h2>
					<?php
					esc_html_e(
						'Ù…Ø§Ø°Ø§ Ø¨Ø¹Ø¯ØŸ',
						'trade-sphare-pro'
					);
					?>
				</h2>

				<p>
					<?php
					esc_html_e(
						'ÙŠÙ…ÙƒÙ†Ùƒ Ù…ØªØ§Ø¨Ø¹Ø© Ø­Ø§Ù„Ø© Ø§Ù„Ø·Ù„Ø¨ Ù…Ù† Ø­Ø³Ø§Ø¨ÙƒØŒ ÙˆØ³Ù†Ø±Ø³Ù„ Ù„Ùƒ ØªØ­Ø¯ÙŠØ«Ø§Øª Ø§Ù„Ø·Ù„Ø¨ Ø¹Ù†Ø¯ ØªÙˆÙØ±Ù‡Ø§.',
						'trade-sphare-pro'
					);
					?>
				</p>

			</div>


			<!-- =================================================
			     ACTIONS
			================================================== -->

			<div class="ts-order-actions">

				<a
					class="ts-button"
					href="<?php echo esc_url( wc_get_page_permalink( 'shop' ) ); ?>"
				>
					<?php
					esc_html_e(
						'Ù…ØªØ§Ø¨Ø¹Ø© Ø§Ù„ØªØ³ÙˆÙ‚',
						'trade-sphare-pro'
					);
					?>
				</a>

				<?php if ( is_user_logged_in() ) : ?>

					<a
						class="ts-button ts-button-outline"
						href="<?php echo esc_url( wc_get_page_permalink( 'myaccount' ) ); ?>"
					>
						<?php
						esc_html_e(
							'Ø§Ù„Ø°Ù‡Ø§Ø¨ Ø¥Ù„Ù‰ Ø­Ø³Ø§Ø¨ÙŠ',
							'trade-sphare-pro'
						);
						?>
					</a>

				<?php endif; ?>

			</div>


			<!-- =================================================
			     ORDER DETAILS
			================================================== -->

			<div class="ts-order-details">

				<?php
				/*
				 * WooCommerce outputs the order details table
				 * through this hook.
				 */
				do_action(
					'woocommerce_thankyou_' . $order->get_payment_method(),
					$order->get_id()
				);

				do_action(
					'woocommerce_thankyou',
					$order->get_id()
				);
				?>

			</div>

		</div>

	</div>

</section>