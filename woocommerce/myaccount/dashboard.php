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

$display_name = $current_user->display_name;

if ( ! $display_name ) {
	$display_name = $current_user->user_login;
}
?>

<section class="ts-account-dashboard">

	<header class="ts-account-welcome">

		<div class="ts-account-welcome-label">
			<span class="ts-account-eyebrow">
				<?php
				esc_html_e(
					'Ø­Ø³Ø§Ø¨ÙŠ',
					'trade-sphare-pro'
				);
				?>
			</span>
		</div>

		<h1>
			<?php
			printf(
				/* translators: %s: customer name. */
				esc_html__(
					'Ù…Ø±Ø­Ø¨Ù‹Ø§ØŒ %s',
					'trade-sphare-pro'
				),
				esc_html( $display_name )
			);
			?>
		</h1>

		<p>
			<?php
			esc_html_e(
				'Ù…Ù† Ù‡Ù†Ø§ ÙŠÙ…ÙƒÙ†Ùƒ Ù…ØªØ§Ø¨Ø¹Ø© Ø·Ù„Ø¨Ø§ØªÙƒ ÙˆØ¥Ø¯Ø§Ø±Ø© Ø¨ÙŠØ§Ù†Ø§Øª Ø­Ø³Ø§Ø¨Ùƒ ÙˆØ¹Ù†Ø§ÙˆÙŠÙ†Ùƒ.',
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

			<div class="ts-account-card-content">

				<h2>
					<?php
					esc_html_e(
						'Ø·Ù„Ø¨Ø§ØªÙŠ',
						'trade-sphare-pro'
					);
					?>
				</h2>

				<p>
					<?php
					esc_html_e(
						'Ø¹Ø±Ø¶ Ø¬Ù…ÙŠØ¹ Ø§Ù„Ø·Ù„Ø¨Ø§Øª ÙˆÙ…ØªØ§Ø¨Ø¹Ø© Ø­Ø§Ù„ØªÙ‡Ø§.',
						'trade-sphare-pro'
					);
					?>
				</p>

				<span class="ts-account-card-link">
					<?php
					esc_html_e(
						'Ø¹Ø±Ø¶ Ø§Ù„Ø·Ù„Ø¨Ø§Øª',
						'trade-sphare-pro'
					);
					?>
				</span>

			</div>

		</a>


		<a
			class="ts-account-card"
			href="<?php echo esc_url( $addresses_url ); ?>"
		>

			<span class="ts-account-card-number">
				02
			</span>

			<div class="ts-account-card-content">

				<h2>
					<?php
					esc_html_e(
						'Ø§Ù„Ø¹Ù†Ø§ÙˆÙŠÙ†',
						'trade-sphare-pro'
					);
					?>
				</h2>

				<p>
					<?php
					esc_html_e(
						'Ø¥Ø¯Ø§Ø±Ø© Ø¹Ù†Ø§ÙˆÙŠÙ† Ø§Ù„ÙÙˆØªØ±Ø© ÙˆØ§Ù„Ø´Ø­Ù†.',
						'trade-sphare-pro'
					);
					?>
				</p>

				<span class="ts-account-card-link">
					<?php
					esc_html_e(
						'Ø¥Ø¯Ø§Ø±Ø© Ø§Ù„Ø¹Ù†Ø§ÙˆÙŠÙ†',
						'trade-sphare-pro'
					);
					?>
				</span>

			</div>

		</a>


		<a
			class="ts-account-card"
			href="<?php echo esc_url( $account_url ); ?>"
		>

			<span class="ts-account-card-number">
				03
			</span>

			<div class="ts-account-card-content">

				<h2>
					<?php
					esc_html_e(
						'Ø¨ÙŠØ§Ù†Ø§Øª Ø§Ù„Ø­Ø³Ø§Ø¨',
						'trade-sphare-pro'
					);
					?>
				</h2>

				<p>
					<?php
					esc_html_e(
						'ØªØ¹Ø¯ÙŠÙ„ Ø§Ù„Ø§Ø³Ù… ÙˆØ§Ù„Ø¨Ø±ÙŠØ¯ ÙˆÙƒÙ„Ù…Ø© Ø§Ù„Ù…Ø±ÙˆØ±.',
						'trade-sphare-pro'
					);
					?>
				</p>

				<span class="ts-account-card-link">
					<?php
					esc_html_e(
						'ØªØ¹Ø¯ÙŠÙ„ Ø§Ù„Ø¨ÙŠØ§Ù†Ø§Øª',
						'trade-sphare-pro'
					);
					?>
				</span>

			</div>

		</a>


		<a
			class="ts-account-card ts-account-card-logout"
			href="<?php echo esc_url( $logout_url ); ?>"
		>

			<span class="ts-account-card-number">
				04
			</span>

			<div class="ts-account-card-content">

				<h2>
					<?php
					esc_html_e(
						'ØªØ³Ø¬ÙŠÙ„ Ø§Ù„Ø®Ø±ÙˆØ¬',
						'trade-sphare-pro'
					);
					?>
				</h2>

				<p>
					<?php
					esc_html_e(
						'Ø§Ù„Ø®Ø±ÙˆØ¬ Ù…Ù† Ø­Ø³Ø§Ø¨Ùƒ Ø¨Ø£Ù…Ø§Ù†.',
						'trade-sphare-pro'
					);
					?>
				</p>

				<span class="ts-account-card-link">
					<?php
					esc_html_e(
						'ØªØ³Ø¬ÙŠÙ„ Ø§Ù„Ø®Ø±ÙˆØ¬',
						'trade-sphare-pro'
					);
					?>
				</span>

			</div>

		</a>

	</div>


	<div class="ts-account-summary">

		<h2>
			<?php
			esc_html_e(
				'Ø¥Ø¯Ø§Ø±Ø© Ø§Ù„Ø­Ø³Ø§Ø¨',
				'trade-sphare-pro'
			);
			?>
		</h2>

		<p>
			<?php
			esc_html_e(
				'Ø§Ø³ØªØ®Ø¯Ù… Ø§Ù„Ù‚Ø§Ø¦Ù…Ø© Ø§Ù„Ø¬Ø§Ù†Ø¨ÙŠØ© Ù„Ù„ÙˆØµÙˆÙ„ Ø¥Ù„Ù‰ Ø¬Ù…ÙŠØ¹ Ø£Ù‚Ø³Ø§Ù… Ø­Ø³Ø§Ø¨Ùƒ.',
				'trade-sphare-pro'
			);
			?>
		</p>

	</div>

</section>