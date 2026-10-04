<?php
/**
 * Trade Sphare Pro - My Account Dashboard
 *
 * @package TradeSpharePro
 */

defined( 'ABSPATH' ) || exit;

$current_user = wp_get_current_user();

$orders_url = wc_get_account_endpoint_url(
	'orders'
);

$addresses_url = wc_get_account_endpoint_url(
	'edit-address'
);

$account_url = wc_get_account_endpoint_url(
	'edit-account'
);

$logout_url = wc_logout_url();
?>

<section class="ts-account-dashboard">

	<header class="ts-account-welcome">

		<span class="ts-account-eyebrow">
			<?php
			esc_html_e(
				'حسابي',
				'trade-sphare-pro'
			);
			?>
		</span>

		<h1>
			<?php
			printf(
				/* translators: %s: customer name. */
				esc_html__(
					'مرحبًا، %s',
					'trade-sphare-pro'
				),
				esc_html(
					$current_user->display_name
				)
			);
			?>
		</h1>

		<p>
			<?php
			esc_html_e(
				'من هنا يمكنك متابعة طلباتك وإدارة بيانات حسابك وعناوينك.',
				'trade-sphare-pro'
			);
			?>
		</p>

	</header>


	<div class="ts-account-cards">

		<a
			class="ts-account-card"
			href="<?php echo esc_url( $orders_url ); ?>"
		>

			<span class="ts-account-card-number">
				01
			</span>

			<div>

				<h2>
					<?php
					esc_html_e(
						'طلباتي',
						'trade-sphare-pro'
					);
					?>
				</h2>

				<p>
					<?php
					esc_html_e(
						'عرض جميع الطلبات ومتابعة حالتها.',
						'trade-sphare-pro'
					);
					?>
				</p>

			</div>

		</a>


		<a
			class="ts-account-card"
			href="<?php echo esc_url( $addresses_url ); ?>"
		>

			<span class="ts-account-card-number">
				02
			</span>

			<div>

				<h2>
					<?php
					esc_html_e(
						'العناوين',
						'trade-sphare-pro'
					);
					?>
				</h2>

				<p>
					<?php
					esc_html_e(
						'إدارة عناوين الفوترة والشحن.',
						'trade-sphare-pro'
					);
					?>
				</p>

			</div>

		</a>


		<a
			class="ts-account-card"
			href="<?php echo esc_url( $account_url ); ?>"
		>

			<span class="ts-account-card-number">
				03
			</span>

			<div>

				<h2>
					<?php
					esc_html_e(
						'بيانات الحساب',
						'trade-sphare-pro'
					);
					?>
				</h2>

				<p>
					<?php
					esc_html_e(
						'تعديل الاسم والبريد وكلمة المرور.',
						'trade-sphare-pro'
					);
					?>
				</p>

			</div>

		</a>


		<a
			class="ts-account-card ts-account-card-logout"
			href="<?php echo esc_url( $logout_url ); ?>"
		>

			<span class="ts-account-card-number">
				04
			</span>

			<div>

				<h2>
					<?php
					esc_html_e(
						'تسجيل الخروج',
						'trade-sphare-pro'
					);
					?>
				</h2>

				<p>
					<?php
					esc_html_e(
						'الخروج من حسابك بأمان.',
						'trade-sphare-pro'
					);
					?>
				</p>

			</div>

		</a>

	</div>


	<div class="ts-account-summary">

		<h2>
			<?php
			esc_html_e(
				'إدارة الحساب',
				'trade-sphare-pro'
			);
			?>
		</h2>

		<p>
			<?php
			esc_html_e(
				'استخدم القائمة الجانبية للوصول إلى جميع أقسام حسابك.',
				'trade-sphare-pro'
			);
			?>
		</p>

	</div>

</section>