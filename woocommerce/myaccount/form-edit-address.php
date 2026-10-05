<?php
/**
 * Trade Sphare Pro - Edit Address
 *
 * @package TradeSpharePro
 */

defined( 'ABSPATH' ) || exit;

$page_title = ( 'billing' === $load_address )
	? esc_html__( 'عنوان الفوترة', 'trade-sphare-pro' )
	: esc_html__( 'عنوان الشحن', 'trade-sphare-pro' );

$address_label = ( 'billing' === $load_address )
	? esc_html__( 'الفوترة', 'trade-sphare-pro' )
	: esc_html__( 'الشحن', 'trade-sphare-pro' );

do_action( 'woocommerce_before_edit_account_address_form' );
?>

<section class="ts-account-edit-address">

<header class="ts-account-section-header">

	<div class="ts-account-section-heading">

		<span class="ts-account-eyebrow">
			<?php esc_html_e( 'حسابي', 'trade-sphare-pro' ); ?>
		</span>

		<?php if ( ! $load_address ) : ?>

			<h1 class="ts-account-section-title">
				<?php esc_html_e( 'العناوين', 'trade-sphare-pro' ); ?>
			</h1>

			<p class="ts-account-section-description">
				<?php esc_html_e( 'يمكنك إدارة عناوين الفوترة والشحن الخاصة بك من هنا.', 'trade-sphare-pro' ); ?>
			</p>

		<?php else : ?>

			<h1 class="ts-account-section-title">
				<?php echo esc_html( $page_title ); ?>
			</h1>

			<p class="ts-account-section-description">
				<?php
				printf(
					esc_html__( 'قم بتحديث معلومات عنوان %s ثم احفظ التغييرات.', 'trade-sphare-pro' ),
					esc_html( $address_label )
				);
				?>
			</p>

		<?php endif; ?>

	</div>

</header>

<?php if ( ! $load_address ) : ?>

	<div class="ts-account-address-overview">

		<?php
		/**
		 * Keep the standard WooCommerce address template
		 * for the main addresses screen.
		 */
		wc_get_template( 'myaccount/my-address.php' );
		?>

	</div>

<?php else : ?>

	<div class="ts-account-address-card">

		<div class="ts-account-address-card-header">

			<div class="ts-account-address-card-heading">

				<span class="ts-account-address-card-number" aria-hidden="true">
					<?php echo ( 'billing' === $load_address ) ? '01' : '02'; ?>
				</span>

				<div>
					<span class="ts-account-eyebrow">
						<?php echo esc_html( $address_label ); ?>
					</span>

					<h2>
						<?php echo esc_html( $page_title ); ?>
					</h2>
				</div>

			</div>

		</div>

		<form
			method="post"
			class="ts-account-address-form"
			novalidate
		>

			<?php do_action( "woocommerce_before_edit_address_form_{$load_address}" ); ?>

			<div class="woocommerce-address-fields ts-address-fields">

				<div class="woocommerce-address-fields__field-wrapper ts-address-fields-wrapper">

					<?php
					foreach ( $address as $key => $field ) {
						woocommerce_form_field(
							$key,
							$field,
							wc_get_post_data_by_key(
								$key,
								$field['value']
							)
						);
					}
					?>

				</div>

				<?php do_action( "woocommerce_after_edit_address_form_{$load_address}" ); ?>

				<div class="ts-account-address-form-actions">

					<button
						type="submit"
						class="button ts-button ts-account-address-save"
						name="save_address"
						value="<?php esc_attr_e( 'حفظ العنوان', 'trade-sphare-pro' ); ?>"
					>
						<?php esc_html_e( 'حفظ العنوان', 'trade-sphare-pro' ); ?>
					</button>

					<a
						class="ts-button ts-button-secondary ts-account-address-cancel"
						href="<?php echo esc_url( wc_get_account_endpoint_url( 'edit-address' ) ); ?>"
					>
						<?php esc_html_e( 'العودة إلى العناوين', 'trade-sphare-pro' ); ?>
					</a>

				</div>

				<?php wp_nonce_field( 'woocommerce-edit_address', 'woocommerce-edit-address-nonce' ); ?>

				<input
					type="hidden"
					name="action"
					value="edit_address"
				/>

			</div>

		</form>

	</div>

<?php endif; ?>

</section>

<?php do_action( 'woocommerce_after_edit_account_address_form' ); ?>
