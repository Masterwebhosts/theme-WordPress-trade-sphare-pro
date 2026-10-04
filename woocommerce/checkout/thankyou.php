<?php
/**
 * Trade Sphare Pro - Order Received
 *
 * @package TradeSpharePro
 */

defined( 'ABSPATH' ) || exit;

if ( ! $order instanceof WC_Order ) {
	?>
	<section class="ts-order-received-page">
		<div class="ts-container">
			<div class="ts-order-received-card ts-order-received-invalid">
				<div class="ts-order-received-icon">!</div>

				<h1>
					<?php
					esc_html_e(
						'تعذر العثور على الطلب',
						'trade-sphare-pro'
					);
					?>
				</h1>

				<p>
					<?php
					esc_html_e(
						'يرجى مراجعة بريدك الإلكتروني أو التواصل مع الدعم.',
						'trade-sphare-pro'
					);
					?>
				</p>
			</div>
		</div>
	</section>
	<?php

	return;
}

do_action(
	'woocommerce_before_thankyou',
	$order->get_id()
);

$is_shamcash = 'ts_shamcash' === $order->get_payment_method();

$transaction_id = $order->get_meta(
	'_ts_shamcash_transaction_id'
);
?>

<section class="ts-order-received-page">

	<div class="ts-container">

		<div class="ts-order-received-card">

			<div class="ts-order-success">

				<div
					class="ts-order-success-icon"
					aria-hidden="true"
				>
					✓
				</div>

				<span class="ts-order-eyebrow">
					<?php
					esc_html_e(
						'تم استلام الطلب',
						'trade-sphare-pro'
					);
					?>
				</span>

				<h1>
					<?php
					esc_html_e(
						'شكرًا لك! تم استلام طلبك بنجاح.',
						'trade-sphare-pro'
					);
					?>
				</h1>

				<p>
					<?php
					esc_html_e(
						'طلبك الآن قيد المراجعة وسيتم تحديث حالته بعد التحقق من الدفع.',
						'trade-sphare-pro'
					);
					?>
				</p>

			</div>


			<!-- Order overview -->

			<div class="ts-order-overview">

				<div class="ts-order-overview-item">

					<span>
						<?php
						esc_html_e(
							'رقم الطلب',
							'trade-sphare-pro'
						);
						?>
					</span>

					<strong>
						<?php echo esc_html( $order->get_order_number() ); ?>
					</strong>

				</div>


				<div class="ts-order-overview-item">

					<span>
						<?php
						esc_html_e(
							'التاريخ',
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
							'الإجمالي',
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
							'طريقة الدفع',
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


			<?php if ( $is_shamcash ) : ?>

				<!-- Sham Cash -->

				<div class="ts-shamcash-order-card">

					<div class="ts-shamcash-order-header">

						<span class="ts-shamcash-order-badge">
							<?php
							esc_html_e(
								'شام كاش',
								'trade-sphare-pro'
							);
							?>
						</span>

						<h2>
							<?php
							esc_html_e(
								'بيانات الدفع',
								'trade-sphare-pro'
							);
							?>
						</h2>

					</div>


					<div class="ts-shamcash-order-status">

						<span class="ts-status-dot"></span>

						<div>

							<strong>
								<?php
								esc_html_e(
									'الدفع قيد التحقق',
									'trade-sphare-pro'
								);
								?>
							</strong>

							<p>
								<?php
								esc_html_e(
									'سيتم تأكيد الدفع بعد مراجعة عملية التحويل.',
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
									'رقم العملية',
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


			<!-- Customer message -->

			<div class="ts-order-next-steps">

				<h2>
					<?php
					esc_html_e(
						'ماذا بعد؟',
						'trade-sphare-pro'
					);
					?>
				</h2>

				<p>
					<?php
					esc_html_e(
						'يمكنك متابعة حالة الطلب من حسابك، وسنرسل لك تحديثات الطلب عند توفرها.',
						'trade-sphare-pro'
					);
					?>
				</p>

			</div>


			<!-- Actions -->

			<div class="ts-order-actions">

				<a
					class="ts-button"
					href="<?php echo esc_url( wc_get_page_permalink( 'shop' ) ); ?>"
				>
					<?php
					esc_html_e(
						'متابعة التسوق',
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
							'الذهاب إلى حسابي',
							'trade-sphare-pro'
						);
						?>
					</a>

				<?php endif; ?>

			</div>


			<!-- Order details -->

			<div class="ts-order-details">

				<?php
				woocommerce_order_details_table(
					$order->get_id()
				);
				?>

			</div>

		</div>

	</div>

</section>

<?php

do_action(
	'woocommerce_thankyou_' . $order->get_payment_method(),
	$order->get_id()
);

do_action(
	'woocommerce_thankyou',
	$order->get_id()
);