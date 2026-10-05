<?php
/**
 * The header for Trade Sphare Pro.
 *
 * @package TradeSpharePro
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$home_url = home_url( '/' );

$account_url = function_exists( 'wc_get_page_permalink' )
	? wc_get_page_permalink( 'myaccount' )
	: wp_login_url();

$cart_url = function_exists( 'wc_get_cart_url' )
	? wc_get_cart_url()
	: '';

$cart_count = 0;

if (
	class_exists( 'WooCommerce' ) &&
	function_exists( 'WC' ) &&
	WC()->cart
) {
	$cart_count = WC()->cart->get_cart_contents_count();
}
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<a class="skip-link screen-reader-text" href="#primary">
	<?php esc_html_e( 'Ø§Ù„Ø§Ù†ØªÙ‚Ø§Ù„ Ø¥Ù„Ù‰ Ø§Ù„Ù…Ø­ØªÙˆÙ‰', 'trade-sphare-pro' ); ?>
</a>

<div id="page" class="ts-site">

	<header class="ts-site-header">

		<!-- Top Bar -->
		<div class="ts-topbar">

			<div class="ts-container ts-topbar-inner">

				<div class="ts-topbar-message">
					<?php
					esc_html_e(
						'Ø´Ø­Ù† Ø³Ø±ÙŠØ¹ ÙˆØ¢Ù…Ù† Ù„Ø¬Ù…ÙŠØ¹ Ø§Ù„Ø·Ù„Ø¨Ø§Øª',
						'trade-sphare-pro'
					);
					?>
				</div>

				<div class="ts-topbar-links">

					<a href="<?php echo esc_url( home_url( '/support/' ) ); ?>">
						<?php
						esc_html_e(
							'Ø§Ù„Ø¯Ø¹Ù…',
							'trade-sphare-pro'
						);
						?>
					</a>

					<a href="<?php echo esc_url( home_url( '/track-order/' ) ); ?>">
						<?php
						esc_html_e(
							'ØªØªØ¨Ø¹ Ø§Ù„Ø·Ù„Ø¨',
							'trade-sphare-pro'
						);
						?>
					</a>

				</div>

			</div>

		</div>


		<!-- Main Header -->
		<div class="ts-main-header">

			<div class="ts-container ts-header-inner">

				<!-- Branding -->

				<div class="ts-site-branding">

					<?php if ( has_custom_logo() ) : ?>

						<?php the_custom_logo(); ?>

					<?php else : ?>

						<a
							href="<?php echo esc_url( $home_url ); ?>"
							rel="home"
						>
							<span class="ts-site-title">
								<?php bloginfo( 'name' ); ?>
							</span>
						</a>

					<?php endif; ?>

				</div>


				<!-- Search -->

				<div class="ts-header-search">

					<?php
					if ( class_exists( 'WooCommerce' ) ) {

						get_product_search_form();

					} elseif ( function_exists( 'get_search_form' ) ) {

						get_search_form();

					}
					?>

				</div>


				<!-- Header Actions -->

				<div class="ts-header-actions">

					<?php if ( class_exists( 'WooCommerce' ) ) : ?>

						<!-- Account -->

						<a
							class="ts-header-account"
							href="<?php echo esc_url( $account_url ); ?>"
							aria-label="<?php esc_attr_e( 'Ø­Ø³Ø§Ø¨ÙŠ', 'trade-sphare-pro' ); ?>"
						>

							<span
								class="ts-header-action-icon"
								aria-hidden="true"
							>

								<svg
									viewBox="0 0 24 24"
									width="22"
									height="22"
									fill="none"
									stroke="currentColor"
									stroke-width="1.8"
									stroke-linecap="round"
									stroke-linejoin="round"
									focusable="false"
								>
									<circle cx="12" cy="8" r="3.5"></circle>
									<path d="M5 20c.8-3.4 3.1-5.2 7-5.2s6.2 1.8 7 5.2"></path>
								</svg>

							</span>

							<span class="ts-header-action-label">
								<?php
								esc_html_e(
									'Ø­Ø³Ø§Ø¨ÙŠ',
									'trade-sphare-pro'
								);
								?>
							</span>

						</a>


						<!-- Cart -->

						<?php if ( $cart_url ) : ?>

							<a
								class="ts-header-cart"
								href="<?php echo esc_url( $cart_url ); ?>"
								aria-label="<?php esc_attr_e( 'Ø§Ù„Ø³Ù„Ø©', 'trade-sphare-pro' ); ?>"
							>

								<span
									class="ts-header-action-icon"
									aria-hidden="true"
								>

									<svg
										viewBox="0 0 24 24"
										width="22"
										height="22"
										fill="none"
										stroke="currentColor"
										stroke-width="1.8"
										stroke-linecap="round"
										stroke-linejoin="round"
										focusable="false"
									>
										<path d="M3.5 5h2l1.8 9.1a2 2 0 0 0 2 1.6h7.6a2 2 0 0 0 1.9-1.5L21 8H6"></path>
										<circle cx="10" cy="20" r="1"></circle>
										<circle cx="18" cy="20" r="1"></circle>
									</svg>

									<span class="ts-cart-count">
										<?php echo esc_html( $cart_count ); ?>
									</span>

								</span>

								<span class="ts-header-cart-label">
									<?php
									esc_html_e(
										'Ø§Ù„Ø³Ù„Ø©',
										'trade-sphare-pro'
									);
									?>
								</span>

							</a>

						<?php endif; ?>

					<?php endif; ?>


					<!-- Mobile Menu -->

					<button
						class="ts-menu-toggle"
						type="button"
						aria-controls="site-navigation"
						aria-expanded="false"
						aria-label="<?php esc_attr_e( 'ÙØªØ­ Ø§Ù„Ù‚Ø§Ø¦Ù…Ø©', 'trade-sphare-pro' ); ?>"
					>

						<span aria-hidden="true"></span>
						<span aria-hidden="true"></span>
						<span aria-hidden="true"></span>

						<span class="screen-reader-text">
							<?php
							esc_html_e(
								'ÙØªØ­ Ø§Ù„Ù‚Ø§Ø¦Ù…Ø©',
								'trade-sphare-pro'
							);
							?>
						</span>

					</button>

				</div>

			</div>

		</div>


		<!-- Navigation -->

		<div class="ts-navigation-wrapper">

			<div class="ts-container">

				<nav
					id="site-navigation"
					class="ts-navigation"
					aria-label="<?php esc_attr_e( 'Ø§Ù„Ù‚Ø§Ø¦Ù…Ø© Ø§Ù„Ø±Ø¦ÙŠØ³ÙŠØ©', 'trade-sphare-pro' ); ?>"
				>

					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'primary',
							'menu_class'     => 'ts-menu',
							'container'      => false,
							'fallback_cb'    => false,
						)
					);
					?>

				</nav>

			</div>

		</div>

	</header>


	<main id="primary" class="ts-site-main">