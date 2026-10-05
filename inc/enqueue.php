<?php
/**
 * Trade Sphare Pro - Assets
 *
 * @package TradeSpharePro
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function trade_sphare_pro_enqueue_assets() {

	/* =========================================================
	 * MAIN STYLE
	 * ========================================================= */

	$style_css = TRADE_SPHARE_PRO_PATH . '/style.css';

	$theme_version = file_exists( $style_css )
		? filemtime( $style_css )
		: TRADE_SPHARE_PRO_VERSION;

	wp_enqueue_style(
		'trade-sphare-pro-style',
		TRADE_SPHARE_PRO_URI . '/style.css',
		array(),
		$theme_version
	);


	/* =========================================================
	 * HEADER
	 * ========================================================= */

	$header_css = TRADE_SPHARE_PRO_PATH . '/assets/css/header.css';

	if ( file_exists( $header_css ) ) {
		wp_enqueue_style(
			'trade-sphare-pro-header',
			TRADE_SPHARE_PRO_URI . '/assets/css/header.css',
			array(
				'trade-sphare-pro-style',
			),
			filemtime( $header_css )
		);
	}


	/* =========================================================
	 * FOOTER
	 * ========================================================= */

	$footer_css = TRADE_SPHARE_PRO_PATH . '/assets/css/footer.css';

	if ( file_exists( $footer_css ) ) {
		wp_enqueue_style(
			'trade-sphare-pro-footer',
			TRADE_SPHARE_PRO_URI . '/assets/css/footer.css',
			array(
				'trade-sphare-pro-style',
				'trade-sphare-pro-header',
			),
			filemtime( $footer_css )
		);
	}


	/* =========================================================
	 * HOME
	 * ========================================================= */

	if ( is_front_page() || is_home() ) {

		$home_css = TRADE_SPHARE_PRO_PATH . '/assets/css/home.css';

		if ( file_exists( $home_css ) ) {
			wp_enqueue_style(
				'trade-sphare-pro-home',
				TRADE_SPHARE_PRO_URI . '/assets/css/home.css',
				array(
					'trade-sphare-pro-style',
					'trade-sphare-pro-header',
					'trade-sphare-pro-footer',
				),
				filemtime( $home_css )
			);
		}
	}


	/* =========================================================
	 * WOOCOMMERCE
	 * ========================================================= */

	if ( class_exists( 'WooCommerce' ) ) {

		/* Product */

		$product_css = TRADE_SPHARE_PRO_PATH . '/assets/css/product.css';


$product_pages =
	is_front_page()
	|| is_shop()
	|| is_product_category()
	|| is_product_tag()
	|| is_product_taxonomy()
	|| is_product()
	|| is_cart();

		if ( file_exists( $product_css ) && $product_pages ) {

			wp_enqueue_style(
				'trade-sphare-pro-product',
				TRADE_SPHARE_PRO_URI . '/assets/css/product.css',
				array(
					'trade-sphare-pro-style',
					'trade-sphare-pro-header',
					'trade-sphare-pro-footer',
				),
				filemtime( $product_css )
			);
		}


		/* Shop */

		$shop_css = TRADE_SPHARE_PRO_PATH . '/assets/css/shop.css';

		$shop_pages =
			is_shop()
			|| is_product_category()
			|| is_product_tag()
			|| is_product_taxonomy();

		if ( file_exists( $shop_css ) && $shop_pages ) {

			wp_enqueue_style(
				'trade-sphare-pro-shop',
				TRADE_SPHARE_PRO_URI . '/assets/css/shop.css',
				array(
					'trade-sphare-pro-style',
					'trade-sphare-pro-header',
					'trade-sphare-pro-footer',
					'trade-sphare-pro-product',
				),
				filemtime( $shop_css )
			);
		}


		/* Single Product */

		$single_product_css = TRADE_SPHARE_PRO_PATH . '/assets/css/single-product.css';

		if ( file_exists( $single_product_css ) && is_product() ) {

			wp_enqueue_style(
				'trade-sphare-pro-single-product',
				TRADE_SPHARE_PRO_URI . '/assets/css/single-product.css',
				array(
					'trade-sphare-pro-style',
					'trade-sphare-pro-header',
					'trade-sphare-pro-footer',
					'trade-sphare-pro-product',
				),
				filemtime( $single_product_css )
			);
		}


		/* Cart */

		$cart_css = TRADE_SPHARE_PRO_PATH . '/assets/css/cart.css';

		if ( file_exists( $cart_css ) && is_cart() ) {

			wp_enqueue_style(
				'trade-sphare-pro-cart',
				TRADE_SPHARE_PRO_URI . '/assets/css/cart.css',
				array(
					'trade-sphare-pro-style',
					'trade-sphare-pro-header',
					'trade-sphare-pro-footer',
					'trade-sphare-pro-product',
				),
				filemtime( $cart_css )
			);
		}


		/* Checkout */

		$checkout_css = TRADE_SPHARE_PRO_PATH . '/assets/css/checkout.css';

		if ( file_exists( $checkout_css ) && is_checkout() ) {

			wp_enqueue_style(
				'trade-sphare-pro-checkout',
				TRADE_SPHARE_PRO_URI . '/assets/css/checkout.css',
				array(
					'trade-sphare-pro-style',
					'trade-sphare-pro-header',
					'trade-sphare-pro-footer',
				),
				filemtime( $checkout_css )
			);
		}
	}


	/* =========================================================
	 * MY ACCOUNT
	 * ========================================================= */

	$my_account_css = TRADE_SPHARE_PRO_PATH . '/assets/css/my-account.css';

	if (
		function_exists( 'is_account_page' )
		&&
		is_account_page()
		&&
		file_exists( $my_account_css )
	) {

		wp_enqueue_style(
			'trade-sphare-pro-my-account',
			TRADE_SPHARE_PRO_URI . '/assets/css/my-account.css',
			array(
				'trade-sphare-pro-style',
				'trade-sphare-pro-header',
				'trade-sphare-pro-footer',
			),
			filemtime( $my_account_css )
		);
	}


	/* =========================================================
	 * RTL
	 * ========================================================= */

	$rtl_css = TRADE_SPHARE_PRO_PATH . '/assets/css/rtl.css';

	if (
		is_rtl()
		&&
		file_exists( $rtl_css )
	) {

		wp_enqueue_style(
			'trade-sphare-pro-rtl',
			TRADE_SPHARE_PRO_URI . '/assets/css/rtl.css',
			array(
				'trade-sphare-pro-style',
				'trade-sphare-pro-header',
				'trade-sphare-pro-footer',
			),
			filemtime( $rtl_css )
		);
	}


	/* =========================================================
	 * JAVASCRIPT
	 * ========================================================= */

	$main_js = TRADE_SPHARE_PRO_PATH . '/assets/js/main.js';

	if ( file_exists( $main_js ) ) {

		wp_enqueue_script(
			'trade-sphare-pro-main',
			TRADE_SPHARE_PRO_URI . '/assets/js/main.js',
			array(),
			filemtime( $main_js ),
			true
		);
	}


	$header_js = TRADE_SPHARE_PRO_PATH . '/assets/js/header.js';

	if ( file_exists( $header_js ) ) {

		wp_enqueue_script(
			'trade-sphare-pro-header',
			TRADE_SPHARE_PRO_URI . '/assets/js/header.js',
			array(),
			filemtime( $header_js ),
			true
		);
	}


	$navigation_js = TRADE_SPHARE_PRO_PATH . '/assets/js/navigation.js';

	if ( file_exists( $navigation_js ) ) {

		wp_enqueue_script(
			'trade-sphare-pro-navigation',
			TRADE_SPHARE_PRO_URI . '/assets/js/navigation.js',
			array(),
			filemtime( $navigation_js ),
			true
		);
	}
}

add_action(
	'wp_enqueue_scripts',
	'trade_sphare_pro_enqueue_assets'
);