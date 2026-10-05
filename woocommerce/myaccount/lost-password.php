<?php
/**
 * Trade Sphare Pro - Lost Password
 *
 * @package TradeSpharePro
 */

defined( 'ABSPATH' ) || exit;

do_action( 'woocommerce_before_lost_password_form' );
?>

<section class="ts-account-lost-password">

<header class="ts-account-auth-header">

	<span class="ts-account-eyebrow">
		<?php esc_html_e( 'استعادة الحساب', 'trade-sphare-pro' ); ?>
	</span>

	<h1 class="ts-account-auth-title">
		<?php esc_html_e( 'نسيت كلمة المرور؟', 'trade-sphare-pro' ); ?>
	</h1>

	<p class="ts-account-auth-description">
		<?php
		esc_html_e(
			'أدخل بريدك الإلكتروني وسنرسل لك رابطًا لإعادة تعيين كلمة المرور.',
			'trade-sphare-pro'
		);
		?>
	</p>

</header>

<div class="ts-account-lost-password-card">

	<div class="ts-account-auth-card-header">

		<span class="ts-account-auth-card-number">
			01
		</span>

		<div>

			<span class="ts-account-eyebrow">
				<?php esc_html_e( 'استعادة الوصول', 'trade-sphare-pro' ); ?>
			</span>

			<h2>
				<?php esc_html_e( 'إعادة تعيين كلمة المرور', 'trade-sphare-pro' ); ?>
			</h2>

			<p>
				<?php
				esc_html_e(
					'اكتب البريد الإلكتروني المرتبط بحسابك للمتابعة.',
					'trade-sphare-pro'
				);
				?>
			</p>

		</div>

	</div>

	<form
		method="post"
		class="woocommerce-ResetPassword lost_reset_password ts-account-auth-form"
	>

		<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide ts-account-auth-field">

			<label for="user_login">
				<?php esc_html_e( 'اسم المستخدم أو البريد الإلكتروني', 'trade-sphare-pro' ); ?>

				<span class="required" aria-hidden="true">
					*
				</span>
			</label>

			<input
				class="woocommerce-Input woocommerce-Input--text input-text"
				type="text"
				name="user_login"
				id="user_login"
				autocomplete="username"
				required
				aria-required="true"
				value="<?php echo ( ! empty( $_POST['user_login'] ) && is_string( $_POST['user_login'] ) ) ? esc_attr( wp_unslash( $_POST['user_login'] ) ) : ''; ?>"
			/>

		</p>

		<p class="ts-account-lost-password-help">
			<?php
			esc_html_e(
				'سيتم إرسال تعليمات إعادة تعيين كلمة المرور إلى البريد الإلكتروني المرتبط بحسابك.',
				'trade-sphare-pro'
			);
			?>
		</p>

		<div class="ts-account-auth-submit">

			<?php wp_nonce_field( 'lost_password', 'woocommerce-lost-password-nonce' ); ?>

			<input
				type="hidden"
				name="wc_reset_password"
				value="true"
			/>

			<button
				type="submit"
				class="woocommerce-Button button ts-button"
				value="<?php esc_attr_e( 'إرسال رابط إعادة التعيين', 'trade-sphare-pro' ); ?>"
			>
				<?php esc_html_e( 'إرسال رابط إعادة التعيين', 'trade-sphare-pro' ); ?>

				<span aria-hidden="true">
					←
				</span>
			</button>

		</div>

	</form>

</div>

<div class="ts-account-lost-password-back">

	<a
		class="ts-account-secondary-link"
		href="<?php echo esc_url( wc_get_page_permalink( 'myaccount' ) ); ?>"
	>
		<span aria-hidden="true">→</span>
		<?php esc_html_e( 'العودة إلى تسجيل الدخول', 'trade-sphare-pro' ); ?>
	</a>

</div>

</section>

<?php do_action( 'woocommerce_after_lost_password_form' ); ?>
