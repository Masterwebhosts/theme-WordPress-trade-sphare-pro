<?php
/**
 * Trade Sphare Pro - My Account Addresses
 *
 * @package TradeSpharePro
 */

defined( 'ABSPATH' ) || exit;

$customer_id = get_current_user_id();

$addresses = array(
	'billing'  => array(
		'title' => __( 'عنوان الفوترة', 'trade-sphare-pro' ),
		'icon'  => '01',
	),
	'shipping' => array(
		'title' => __( 'عنوان الشحن', 'trade-sphare-pro' ),
		'icon'  => '02',
	),
);

$address_description = apply_filters(
	'woocommerce_my_account_my_address_description',
	__( 'يمكنك إدارة عناوين الفوترة والشحن المستخدمة في طلباتك من هنا.', 'trade-sphare-pro' )
);
?>

<section class="ts-account-addresses">

<header class="ts-account-section-header">

	<div class="ts-account-section-heading">

		<span class="ts-account-eyebrow">
			<?php esc_html_e( 'حسابي', 'trade-sphare-pro' ); ?>
		</span>

		<h1 class="ts-account-section-title">
			<?php esc_html_e( 'العناوين', 'trade-sphare-pro' ); ?>
		</h1>

		<p class="ts-account-section-description">
			<?php echo esc_html( $address_description ); ?>
		</p>

	</div>

</header>

<div class="ts-account-addresses-grid">

	<?php foreach ( $addresses as $type => $address_data ) : ?>

		<?php
		$address = wc_get_account_formatted_address( $type );
		$edit_url = wc_get_endpoint_url( 'edit-address', $type );
		?>

		<article
			class="ts-account-address-card ts-account-address-card--<?php echo esc_attr( $type ); ?>"
		>

			<header class="ts-account-address-card-header">

				<div class="ts-account-address-card-heading">

					<span
						class="ts-account-address-card-number"
						aria-hidden="true"
					>
						<?php echo esc_html( $address_data['icon'] ); ?>
					</span>

					<div>

						<span class="ts-account-eyebrow">
							<?php esc_html_e( 'العنوان', 'trade-sphare-pro' ); ?>
						</span>

						<h2>
							<?php echo esc_html( $address_data['title'] ); ?>
						</h2>

					</div>

				</div>

				<a
					class="ts-account-address-edit"
					href="<?php echo esc_url( $edit_url ); ?>"
					aria-label="<?php echo esc_attr( sprintf( __( 'تعديل %s', 'trade-sphare-pro' ), $address_data['title'] ) ); ?>"
				>
					<?php
					echo esc_html(
						$address
							? __( 'تعديل العنوان', 'trade-sphare-pro' )
							: __( 'إضافة العنوان', 'trade-sphare-pro' )
					);
					?>
				</a>

			</header>

			<div class="ts-account-address-card-body">

				<?php if ( $address ) : ?>

					<address class="ts-account-address-content">
						<?php echo wp_kses_post( $address ); ?>
					</address>

				<?php else : ?>

					<div class="ts-account-address-empty">

						<div
							class="ts-account-address-empty-icon"
							aria-hidden="true"
						>
							<svg
								viewBox="0 0 24 24"
								width="30"
								height="30"
								fill="none"
								stroke="currentColor"
								stroke-width="1.7"
								stroke-linecap="round"
								stroke-linejoin="round"
								focusable="false"
							>
								<path d="M12 3v18"></path>
								<path d="M3 12h18"></path>
							</svg>
						</div>

						<p>
							<?php
							echo esc_html(
								'billing' === $type
									? __( 'لم تقم بإضافة عنوان فوترة حتى الآن.', 'trade-sphare-pro' )
									: __( 'لم تقم بإضافة عنوان شحن حتى الآن.', 'trade-sphare-pro' )
							);
							?>
						</p>

					</div>

				<?php endif; ?>

			</div>

			<footer class="ts-account-address-card-footer">

				<a
					class="ts-button ts-account-address-button"
					href="<?php echo esc_url( $edit_url ); ?>"
				>
					<?php
					echo esc_html(
						$address
							? __( 'تعديل العنوان', 'trade-sphare-pro' )
							: __( 'إضافة عنوان', 'trade-sphare-pro' )
					);
					?>

					<span aria-hidden="true">←</span>
				</a>

			</footer>

			<?php
			do_action(
				'woocommerce_my_account_after_my_address',
				$type
			);
			?>

		</article>

	<?php endforeach; ?>

</div>

</section>
