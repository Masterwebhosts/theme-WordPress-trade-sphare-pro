<?php
/**
 * Trade Sphare Pro - Theme Welcome Page.
 *
 * @package TradeSpharePro
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Add the Pro theme welcome page.
 *
 * @return void
 */
function trade_sphare_pro_add_welcome_page() {

	add_theme_page(
		__( 'Welcome', 'trade-sphare-pro' ),
		__( 'Welcome', 'trade-sphare-pro' ),
		'edit_theme_options',
		'trade-sphare-pro-welcome',
		'trade_sphare_pro_render_welcome_page'
	);
}

add_action(
	'admin_menu',
	'trade_sphare_pro_add_welcome_page'
);

/**
 * Render the Pro theme welcome page.
 *
 * @return void
 */
function trade_sphare_pro_render_welcome_page() {
	?>
	<div class="wrap trade-sphare-pro-welcome">

		<style>
			.trade-sphare-pro-welcome {
				max-width: 1000px;
			}

			.trade-sphare-pro-welcome .welcome-header {
				background: #fff;
				border: 1px solid #dcdcde;
				padding: 40px;
				margin-top: 25px;
				border-radius: 8px;
			}

			.trade-sphare-pro-welcome .welcome-header h1 {
				margin: 0 0 12px;
				font-size: 32px;
			}

			.trade-sphare-pro-welcome .welcome-header p {
				font-size: 16px;
				line-height: 1.8;
				color: #50575e;
				max-width: 750px;
			}

			.trade-sphare-pro-welcome .welcome-grid {
				display: grid;
				grid-template-columns: repeat(2, 1fr);
				gap: 20px;
				margin-top: 20px;
			}

			.trade-sphare-pro-welcome .welcome-card {
				background: #fff;
				border: 1px solid #dcdcde;
				padding: 25px;
				border-radius: 8px;
			}

			.trade-sphare-pro-welcome .welcome-card h2 {
				margin-top: 0;
				font-size: 20px;
			}

			.trade-sphare-pro-welcome .welcome-card p {
				color: #50575e;
				line-height: 1.8;
			}

			.trade-sphare-pro-welcome .welcome-footer {
				text-align: center;
				margin: 30px 0;
				color: #646970;
			}

			@media (max-width: 782px) {
				.trade-sphare-pro-welcome .welcome-grid {
					grid-template-columns: 1fr;
				}

				.trade-sphare-pro-welcome .welcome-header {
					padding: 25px;
				}
			}
		</style>

		<div class="welcome-header">

			<h1>
				<?php esc_html_e( 'Welcome 👋', 'trade-sphare-pro' ); ?>
			</h1>

			<p>
				<?php
				esc_html_e(
					'Thank you for choosing this theme. You can now customize your website, create pages and posts, and add your own content.',
					'trade-sphare-pro'
				);
				?>
			</p>

		</div>

		<div class="welcome-grid">

			<div class="welcome-card">

				<h2>
					<?php esc_html_e( '🎨 Customize Your Site', 'trade-sphare-pro' ); ?>
				</h2>

				<p>
					<?php
					esc_html_e(
						'Use the WordPress Customizer to adjust your site identity, colors, and available theme options.',
						'trade-sphare-pro'
					);
					?>
				</p>

				<a
					class="button button-primary"
					href="<?php echo esc_url( admin_url( 'customize.php' ) ); ?>"
				>
					<?php esc_html_e( 'Customize Theme', 'trade-sphare-pro' ); ?>
				</a>

			</div>

			<div class="welcome-card">

				<h2>
					<?php esc_html_e( '✍️ Start Creating Content', 'trade-sphare-pro' ); ?>
				</h2>

				<p>
					<?php
					esc_html_e(
						'Create pages and posts using the WordPress editor and publish content that fits your website.',
						'trade-sphare-pro'
					);
					?>
				</p>

				<a
					class="button"
					href="<?php echo esc_url( admin_url( 'post-new.php' ) ); ?>"
				>
					<?php esc_html_e( 'Create a Post', 'trade-sphare-pro' ); ?>
				</a>

			</div>

			<div class="welcome-card">

				<h2>
					<?php esc_html_e( '📱 Responsive Design', 'trade-sphare-pro' ); ?>
				</h2>

				<p>
					<?php
					esc_html_e(
						'The theme is designed to provide a consistent experience across desktops, tablets, and mobile devices.',
						'trade-sphare-pro'
					);
					?>
				</p>

			</div>

			<div class="welcome-card">

				<h2>
					<?php esc_html_e( '🌐 Translation Ready', 'trade-sphare-pro' ); ?>
				</h2>

				<p>
					<?php
					esc_html_e(
						'The theme uses WordPress translation functions and is ready for localization into different languages.',
						'trade-sphare-pro'
					);
					?>
				</p>

			</div>

		</div>

		<div class="welcome-footer">

			<p>
				<?php
				esc_html_e(
					'A clean, lightweight, and reusable WordPress theme.',
					'trade-sphare-pro'
				);
				?>
			</p>

		</div>

	</div>
	<?php
}