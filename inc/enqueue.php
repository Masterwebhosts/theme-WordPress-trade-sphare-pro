<?php
/**
 * Trade Sphare Pro - Assets
 *
 * @package TradeSpharePro
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Enqueue theme assets.
 *
 * @return void
 */
function trade_sphare_pro_enqueue_assets() {

	$style_css = TRADE_SPHARE_PRO_PATH . '/style.css';

	$theme_version = file_exists( $style_css )
		? filemtime( $style_css )
		: TRADE_SPHARE_PRO_VERSION;

	/*
	 * Main stylesheet.
	 */
	wp_enqueue_style(
		'trade-sphare-pro-style',
		TRADE_SPHARE_PRO_URI . '/style.css',
		array(),
		$theme_version
	);

	/*
	 * Header stylesheet.
	 */
	$header_css = TRADE_SPHARE_PRO_PATH . '/assets/css/header.css';

	if ( file_exists( $header_css ) ) {
		wp_enqueue_style(
			'trade-sphare-pro-header',
			TRADE_SPHARE_PRO_URI . '/assets/css/header.css',
			array( 'trade-sphare-pro-style' ),
			filemtime( $header_css )
		);
	}

	/*
	 * Footer stylesheet.
	 */
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

	/*
 * RTL stylesheet.
 */
$rtl_css = TRADE_SPHARE_PRO_PATH . '/assets/css/rtl.css';

if ( is_rtl() && file_exists( $rtl_css ) ) {

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

	/*
 * Product stylesheet.
 *
 * Load on WooCommerce pages and the store homepage.
 */
$product_css = TRADE_SPHARE_PRO_PATH . '/assets/css/product.css';

if ( file_exists( $product_css ) ) {

	$product_css_pages = class_exists( 'WooCommerce' )
		&& (
			is_front_page()
			|| is_shop()
			|| is_product_category()
			|| is_product_tag()
			|| is_product()
		);

	if ( $product_css_pages ) {
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
}

/*
 * Shop stylesheet.
 *
 * Load on the WooCommerce shop and product archives.
 */
$shop_css = TRADE_SPHARE_PRO_PATH . '/assets/css/shop.css';

if ( file_exists( $shop_css ) ) {

	$shop_pages = class_exists( 'WooCommerce' )
		&& (
			is_shop()
			|| is_product_category()
			|| is_product_tag()
			|| is_product_taxonomy()
		);

	if ( $shop_pages ) {
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
}

/*
 * Single product stylesheet.
 */
$single_product_css = TRADE_SPHARE_PRO_PATH . '/assets/css/single-product.css';

if ( file_exists( $single_product_css ) && class_exists( 'WooCommerce' ) ) {

	if ( is_product() ) {

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
}
	/*
	 * Main JavaScript.
	 */
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

	/*
	 * Header JavaScript.
	 */
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

	/*
	 * Mobile navigation JavaScript.
	 */
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

	/*
	 * Homepage stylesheet.
	 */
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
}

add_action(
	'wp_enqueue_scripts',
	'trade_sphare_pro_enqueue_assets'
);

/*
 * My Account stylesheet.
 */
$my_account_css = TRADE_SPHARE_PRO_PATH . '/assets/css/my-account.css';

if ( file_exists( $my_account_css ) && class_exists( 'WooCommerce' ) ) {

	if ( is_account_page() ) {

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
}
