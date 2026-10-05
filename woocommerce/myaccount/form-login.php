<?php
/**
 * Trade Sphare Pro - Login & Register
 *
 * @package TradeSpharePro
 */

defined( 'ABSPATH' ) || exit;

do_action( 'woocommerce_before_customer_login_form' );

$registration_enabled = 'yes' === get_option( 'woocommerce_enable_myaccount_registration' );
?>

<section class="ts-account-auth">

<header class="ts-account-auth-header">

	<span class="ts-account-eyebrow">
		<?php esc_html_e( 'حسابك', 'trade-sphare-pro' ); ?>
	</span>

	<h1 class="ts-account-auth-title">
		<?php esc_html_e( 'مرحبًا بك', 'trade-sphare-pro' ); ?>
	</h1>

	<p class="ts-account-auth-description">
		<?php
		esc_html_e(
			'سجّل الدخول للوصول إلى طلباتك وعناوينك وبيانات حسابك.',
			'trade-sphare-pro'
		);
		?>
	</p>

</header>

<div
	class="ts-account-auth-grid<?php echo $registration_enabled ? ' ts-account-auth-grid--register' : ' ts-account-auth-grid--login-only'; ?>"
	id="customer_login"
>

	<!-- Login -->

	<div class="ts-account-auth-card ts-account-login-card">

		<header class="ts-account-auth-card-header">

			<span class="ts-account-auth-card-number">
				01
			</span>

			<div>

				<span class="ts-account-eyebrow">
					<?php esc_html_e( 'الوصول', 'trade-sphare-pro' ); ?>
				</span>

				<h2>
					<?php esc_html_e( 'تسجيل الدخول', 'trade-sphare-pro' ); ?>
				</h2>

				<p>
					<?php
					esc_html_e(
						'أدخل بيانات حسابك للمتابعة.',
						'trade-sphare-pro'
					);
					?>
				</p>

			</div>

		</header>

		<form
			class="woocommerce-form woocommerce-form-login login ts-account-auth-form"
			method="post"
			novalidate
		>

			<?php do_action( 'woocommerce_login_form_start' ); ?>

			<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide ts-account-auth-field">

				<label for="username">
					<?php esc_html_e( 'اسم المستخدم أو البريد الإلكتروني', 'trade-sphare-pro' ); ?>

					<span class="required" aria-hidden="true">
						*
					</span>

					<span class="screen-reader-text">
						<?php esc_html_e( 'مطلوب', 'trade-sphare-pro' ); ?>
					</span>
				</label>

				<input
					type="text"
					class="woocommerce-Input woocommerce-Input--text input-text"
					name="username"
					id="username"
					autocomplete="username"
					value="<?php echo ( ! empty( $_POST['username'] ) && is_string( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>"
					required
					aria-required="true"
				/>

			</p>

			<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide ts-account-auth-field">

				<label for="password">
					<?php esc_html_e( 'كلمة المرور', 'trade-sphare-pro' ); ?>

					<span class="required" aria-hidden="true">
						*
					</span>

					<span class="screen-reader-text">
						<?php esc_html_e( 'مطلوب', 'trade-sphare-pro' ); ?>
					</span>
				</label>

				<input
					type="password"
					class="woocommerce-Input woocommerce-Input--text input-text"
					name="password"
					id="password"
					autocomplete="current-password"
					required
					aria-required="true"
				/>

			</p>

			<?php do_action( 'woocommerce_login_form' ); ?>

			<div class="ts-account-auth-options">

				<label class="woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__rememberme ts-account-remember">

					<input
						class="woocommerce-form__input woocommerce-form__input-checkbox"
						name="rememberme"
						type="checkbox"
						id="rememberme"
						value="forever"
					/>

					<span>
						<?php esc_html_e( 'تذكرني', 'trade-sphare-pro' ); ?>
					</span>

				</label>

				<a
					class="ts-account-lost-password"
					href="<?php echo esc_url( wp_lostpassword_url() ); ?>"
				>
					<?php esc_html_e( 'نسيت كلمة المرور؟', 'trade-sphare-pro' ); ?>
				</a>

			</div>

			<div class="ts-account-auth-submit">

				<?php wp_nonce_field( 'woocommerce-login', 'woocommerce-login-nonce' ); ?>

				<button
					type="submit"
					class="woocommerce-button button woocommerce-form-login__submit ts-button"
					name="login"
					value="<?php esc_attr_e( 'تسجيل الدخول', 'trade-sphare-pro' ); ?>"
				>
					<?php esc_html_e( 'تسجيل الدخول', 'trade-sphare-pro' ); ?>

					<span aria-hidden="true">
						←
					</span>
				</button>

			</div>

			<?php do_action( 'woocommerce_login_form_end' ); ?>

		</form>

	</div>

	<?php if ( $registration_enabled ) : ?>

		<!-- Register -->

		<div class="ts-account-auth-card ts-account-register-card">

			<header class="ts-account-auth-card-header">

				<span class="ts-account-auth-card-number">
					02
				</span>

				<div>

					<span class="ts-account-eyebrow">
						<?php esc_html_e( 'جديد هنا؟', 'trade-sphare-pro' ); ?>
					</span>

					<h2>
						<?php esc_html_e( 'إنشاء حساب', 'trade-sphare-pro' ); ?>
					</h2>

					<p>
						<?php
						esc_html_e(
							'أنشئ حسابًا جديدًا لتسهيل متابعة طلباتك وإدارتها.',
							'trade-sphare-pro'
						);
						?>
					</p>

				</div>

			</header>

			<form
				method="post"
				class="woocommerce-form woocommerce-form-register register ts-account-auth-form"
				<?php do_action( 'woocommerce_register_form_tag' ); ?>
			>

				<?php do_action( 'woocommerce_register_form_start' ); ?>

				<?php if ( 'no' === get_option( 'woocommerce_registration_generate_username' ) ) : ?>

					<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide ts-account-auth-field">

						<label for="reg_username">
							<?php esc_html_e( 'اسم المستخدم', 'trade-sphare-pro' ); ?>

							<span class="required" aria-hidden="true">
								*
							</span>

							<span class="screen-reader-text">
								<?php esc_html_e( 'مطلوب', 'trade-sphare-pro' ); ?>
							</span>
						</label>

						<input
							type="text"
							class="woocommerce-Input woocommerce-Input--text input-text"
							name="username"
							id="reg_username"
							autocomplete="username"
							value="<?php echo ( ! empty( $_POST['username'] ) && is_string( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>"
							required
							aria-required="true"
						/>

					</p>

				<?php endif; ?>

				<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide ts-account-auth-field">

					<label for="reg_email">
						<?php esc_html_e( 'البريد الإلكتروني', 'trade-sphare-pro' ); ?>

						<span class="required" aria-hidden="true">
							*
						</span>

						<span class="screen-reader-text">
							<?php esc_html_e( 'مطلوب', 'trade-sphare-pro' ); ?>
						</span>
					</label>

					<input
						type="email"
						class="woocommerce-Input woocommerce-Input--text input-text"
						name="email"
						id="reg_email"
						autocomplete="email"
						value="<?php echo ( ! empty( $_POST['email'] ) && is_string( $_POST['email'] ) ) ? esc_attr( wp_unslash( $_POST['email'] ) ) : ''; ?>"
						required
						aria-required="true"
					/>

				</p>

				<?php if ( 'no' === get_option( 'woocommerce_registration_generate_password' ) ) : ?>

					<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide ts-account-auth-field">

						<label for="reg_password">
							<?php esc_html_e( 'كلمة المرور', 'trade-sphare-pro' ); ?>

							<span class="required" aria-hidden="true">
								*
							</span>

							<span class="screen-reader-text">
								<?php esc_html_e( 'مطلوب', 'trade-sphare-pro' ); ?>
							</span>
						</label>

						<input
							type="password"
							class="woocommerce-Input woocommerce-Input--text input-text"
							name="password"
							id="reg_password"
							autocomplete="new-password"
							required
							aria-required="true"
						/>

					</p>

				<?php else : ?>

					<div class="ts-account-register-notice">
						<?php
						esc_html_e(
							'سيتم إرسال رابط إلى بريدك الإلكتروني لتعيين كلمة المرور.',
							'trade-sphare-pro'
						);
						?>
					</div>

				<?php endif; ?>

				<?php do_action( 'woocommerce_register_form' ); ?>

				<div class="ts-account-auth-submit">

					<?php wp_nonce_field( 'woocommerce-register', 'woocommerce-register-nonce' ); ?>

					<button
						type="submit"
						class="woocommerce-Button woocommerce-button button woocommerce-form-register__submit ts-button"
						name="register"
						value="<?php esc_attr_e( 'إنشاء الحساب', 'trade-sphare-pro' ); ?>"
					>
						<?php esc_html_e( 'إنشاء الحساب', 'trade-sphare-pro' ); ?>

						<span aria-hidden="true">
							←
						</span>
					</button>

				</div>

				<?php do_action( 'woocommerce_register_form_end' ); ?>

			</form>

		</div>

	<?php endif; ?>

</div>


</section>

<?php do_action( 'woocommerce_after_customer_login_form' ); ?>
