<?php
/**
 * Trade Sphare Pro - Edit Account
 *
 * @package TradeSpharePro
 */

defined( 'ABSPATH' ) || exit;

do_action( 'woocommerce_before_edit_account_form' );
?>

<section class="ts-account-edit-account">

<header class="ts-account-section-header">

	<div class="ts-account-section-heading">

		<span class="ts-account-eyebrow">
			<?php esc_html_e( 'حسابي', 'trade-sphare-pro' ); ?>
		</span>

		<h1 class="ts-account-section-title">
			<?php esc_html_e( 'بيانات الحساب', 'trade-sphare-pro' ); ?>
		</h1>

		<p class="ts-account-section-description">
			<?php esc_html_e( 'حدّث معلوماتك الشخصية أو غيّر كلمة المرور الخاصة بحسابك.', 'trade-sphare-pro' ); ?>
		</p>

	</div>

</header>

<form
	class="woocommerce-EditAccountForm edit-account ts-account-edit-account-form"
	action=""
	method="post"
	<?php do_action( 'woocommerce_edit_account_form_tag' ); ?>
>

	<?php do_action( 'woocommerce_edit_account_form_start' ); ?>

	<div class="ts-account-form-card">

		<header class="ts-account-form-card-header">

			<span class="ts-account-eyebrow">
				<?php esc_html_e( 'المعلومات الشخصية', 'trade-sphare-pro' ); ?>
			</span>

			<h2>
				<?php esc_html_e( 'بياناتك الأساسية', 'trade-sphare-pro' ); ?>
			</h2>

			<p>
				<?php esc_html_e( 'هذه البيانات تظهر في حسابك وتستخدم عند تنفيذ الطلبات.', 'trade-sphare-pro' ); ?>
			</p>

		</header>

		<div class="ts-account-form-grid">

			<p class="woocommerce-form-row woocommerce-form-row--first form-row form-row-first ts-account-form-field">

				<label for="account_first_name">
					<?php esc_html_e( 'الاسم الأول', 'trade-sphare-pro' ); ?>

					<span
						class="required"
						aria-hidden="true"
					>
						*
					</span>
				</label>

				<input
					type="text"
					class="woocommerce-Input woocommerce-Input--text input-text"
					name="account_first_name"
					id="account_first_name"
					autocomplete="given-name"
					value="<?php echo esc_attr( $user->first_name ); ?>"
					aria-required="true"
				/>

			</p>

			<p class="woocommerce-form-row woocommerce-form-row--last form-row form-row-last ts-account-form-field">

				<label for="account_last_name">
					<?php esc_html_e( 'اسم العائلة', 'trade-sphare-pro' ); ?>

					<span
						class="required"
						aria-hidden="true"
					>
						*
					</span>
				</label>

				<input
					type="text"
					class="woocommerce-Input woocommerce-Input--text input-text"
					name="account_last_name"
					id="account_last_name"
					autocomplete="family-name"
					value="<?php echo esc_attr( $user->last_name ); ?>"
					aria-required="true"
				/>

			</p>

			<div class="clear"></div>

			<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide ts-account-form-field">

				<label for="account_display_name">
					<?php esc_html_e( 'اسم العرض', 'trade-sphare-pro' ); ?>

					<span
						class="required"
						aria-hidden="true"
					>
						*
					</span>
				</label>

				<input
					type="text"
					class="woocommerce-Input woocommerce-Input--text input-text"
					name="account_display_name"
					id="account_display_name"
					aria-describedby="account_display_name_description"
					value="<?php echo esc_attr( $user->display_name ); ?>"
					aria-required="true"
				/>

				<span
					id="account_display_name_description"
					class="ts-account-field-description"
				>
					<?php
					if ( wc_reviews_enabled() ) {
						esc_html_e(
							'سيظهر هذا الاسم في قسم الحساب وفي التقييمات.',
							'trade-sphare-pro'
						);
					} else {
						esc_html_e(
							'سيظهر هذا الاسم في قسم الحساب.',
							'trade-sphare-pro'
						);
					}
					?>
				</span>

			</p>

			<div class="clear"></div>

			<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide ts-account-form-field">

				<label for="account_email">
					<?php esc_html_e( 'البريد الإلكتروني', 'trade-sphare-pro' ); ?>

					<span
						class="required"
						aria-hidden="true"
					>
						*
					</span>
				</label>

				<input
					type="email"
					class="woocommerce-Input woocommerce-Input--email input-text"
					name="account_email"
					id="account_email"
					autocomplete="email"
					value="<?php echo esc_attr( $user->user_email ); ?>"
					aria-required="true"
				/>

			</p>

		</div>

		<?php do_action( 'woocommerce_edit_account_form_fields' ); ?>

	</div>

	<div class="ts-account-form-card ts-account-password-card">

		<header class="ts-account-form-card-header">

			<span class="ts-account-eyebrow">
				<?php esc_html_e( 'الأمان', 'trade-sphare-pro' ); ?>
			</span>

			<h2>
				<?php esc_html_e( 'تغيير كلمة المرور', 'trade-sphare-pro' ); ?>
			</h2>

			<p>
				<?php esc_html_e( 'اترك الحقول فارغة إذا كنت لا تريد تغيير كلمة المرور.', 'trade-sphare-pro' ); ?>
			</p>

		</header>

		<fieldset class="ts-account-password-fields">

			<legend class="screen-reader-text">
				<?php esc_html_e( 'تغيير كلمة المرور', 'trade-sphare-pro' ); ?>
			</legend>

			<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide ts-account-form-field">

				<label for="password_current">
					<?php esc_html_e( 'كلمة المرور الحالية', 'trade-sphare-pro' ); ?>
				</label>

				<input
					type="password"
					class="woocommerce-Input woocommerce-Input--password input-text"
					name="password_current"
					id="password_current"
					autocomplete="current-password"
				/>

			</p>

			<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide ts-account-form-field">

				<label for="password_1">
					<?php esc_html_e( 'كلمة المرور الجديدة', 'trade-sphare-pro' ); ?>
				</label>

				<input
					type="password"
					class="woocommerce-Input woocommerce-Input--password input-text"
					name="password_1"
					id="password_1"
					autocomplete="new-password"
				/>

			</p>

			<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide ts-account-form-field">

				<label for="password_2">
					<?php esc_html_e( 'تأكيد كلمة المرور الجديدة', 'trade-sphare-pro' ); ?>
				</label>

				<input
					type="password"
					class="woocommerce-Input woocommerce-Input--password input-text"
					name="password_2"
					id="password_2"
					autocomplete="new-password"
				/>

			</p>

		</fieldset>

	</div>

	<?php do_action( 'woocommerce_edit_account_form' ); ?>

	<div class="ts-account-form-actions">

		<?php wp_nonce_field( 'save_account_details', 'save-account-details-nonce' ); ?>

		<button
			type="submit"
			class="woocommerce-Button button ts-button ts-account-save-button"
			name="save_account_details"
			value="<?php esc_attr_e( 'حفظ التغييرات', 'trade-sphare-pro' ); ?>"
		>
			<?php esc_html_e( 'حفظ التغييرات', 'trade-sphare-pro' ); ?>
		</button>

		<input
			type="hidden"
			name="action"
			value="save_account_details"
		/>

	</div>

	<?php do_action( 'woocommerce_edit_account_form_end' ); ?>

</form>

</section>

<?php do_action( 'woocommerce_after_edit_account_form' ); ?>
