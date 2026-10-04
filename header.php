<?php
/**
 * The header for Trade Sphare Pro.
 *
 * @package TradeSpharePro
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
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
	<?php esc_html_e( 'Skip to content', 'trade-sphare-pro' ); ?>
</a>

<div id="page" class="ts-site">

	<header class="ts-site-header">

		<!-- Top Bar -->
		<div class="ts-topbar">
			<div class="ts-container ts-topbar-inner">

				<div class="ts-topbar-message">
					<?php esc_html_e( 'شحن سريع وآمن لجميع الطلبات', 'trade-sphare-pro' ); ?>
				</div>

				<div class="ts-topbar-links">
					<a href="#">
						<?php esc_html_e( 'الدعم', 'trade-sphare-pro' ); ?>
					</a>

					<a href="#">
						<?php esc_html_e( 'تتبع الطلب', 'trade-sphare-pro' ); ?>
					</a>
				</div>

			</div>
		</div>

		<!-- Main Header -->
		<div class="ts-main-header">
			<div class="ts-container ts-header-inner">

				<!-- Branding -->
				<div class="ts-site-branding">

					<?php
					if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) {
						the_custom_logo();
					} else {
						?>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<h1 class="ts-site-title">
								<?php bloginfo( 'name' ); ?>
							</h1>
						</a>
						<?php
					}
					?>

				</div>

				<!-- Search -->
				<div class="ts-header-search">

					<?php
					if ( function_exists( 'get_product_search_form' ) ) {
						get_product_search_form();
					} else {
						get_search_form();
					}
					?>

				</div>

				<!-- Header Actions -->
				<div class="ts-header-actions">

					<?php if ( class_exists( 'WooCommerce' ) ) : ?>

						<a
							class="ts-header-account"
							href="<?php echo esc_url( wc_get_page_permalink( 'myaccount' ) ); ?>"
							aria-label="<?php esc_attr_e( 'حسابي', 'trade-sphare-pro' ); ?>"
						>
							<span class="ts-header-action-label">
								<?php esc_html_e( 'حسابي', 'trade-sphare-pro' ); ?>
							</span>
						</a>

						<a
							class="ts-header-cart"
							href="<?php echo esc_url( wc_get_cart_url() ); ?>"
							aria-label="<?php esc_attr_e( 'السلة', 'trade-sphare-pro' ); ?>"
						>
							<span class="ts-header-cart-label">
								<?php esc_html_e( 'السلة', 'trade-sphare-pro' ); ?>
							</span>

							<span class="ts-cart-count">
								<?php
								echo WC()->cart
									? esc_html( WC()->cart->get_cart_contents_count() )
									: '0';
								?>
							</span>
						</a>

					<?php endif; ?>

					<button
						class="ts-menu-toggle"
						type="button"
						aria-controls="site-navigation"
						aria-expanded="false"
					>
						<span></span>
						<span></span>
						<span></span>
						<span class="screen-reader-text">
							<?php esc_html_e( 'فتح القائمة', 'trade-sphare-pro' ); ?>
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
					aria-label="<?php esc_attr_e( 'القائمة الرئيسية', 'trade-sphare-pro' ); ?>"
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