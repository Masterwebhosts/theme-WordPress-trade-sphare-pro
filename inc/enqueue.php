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

	$theme_version = file_exists( TRADE_SPHARE_PRO_PATH . '/style.css' )
		? filemtime( TRADE_SPHARE_PRO_PATH . '/style.css' )
		: TRADE_SPHARE_PRO_VERSION;

	/*
	 * Main stylesheet.
	 */
	wp_enqueue_style(
		'trade-sphare-pro-style',
		get_stylesheet_uri(),
		array(),
		$theme_version
	);

	/*
	 * Main JavaScript.
	 */
	$main_js = TRADE_SPHARE_PRO_PATH . '/assets/js/main.js';

	if ( file_exists( $main_js ) ) {
		wp_enqueue_script(
			'trade-sphare-pro-main',
			TRADE_SPHARE_PRO_URI . '/assets/js/main.js',
			array(),
			$theme_version,
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
			$theme_version,
			true
		);
	}

	/*
	 * Mobile navigation.
	 */
	$navigation_js = TRADE_SPHARE_PRO_PATH . '/assets/js/navigation.js';

	if ( file_exists( $navigation_js ) ) {
		wp_enqueue_script(
			'trade-sphare-pro-navigation',
			TRADE_SPHARE_PRO_URI . '/assets/js/navigation.js',
			array(),
			$theme_version,
			true
		);
	}

	/*
	 * Homepage styles.
	 *
	 * Load on both the static front page and the posts page.
	 */
	if ( is_front_page() || is_home() ) {

		$home_css = TRADE_SPHARE_PRO_PATH . '/assets/css/home.css';

		if ( file_exists( $home_css ) ) {
			wp_enqueue_style(
				'trade-sphare-pro-home',
				TRADE_SPHARE_PRO_URI . '/assets/css/home.css',
				array( 'trade-sphare-pro-style' ),
				$theme_version
			);
		}
	}
}

add_action(
	'wp_enqueue_scripts',
	'trade_sphare_pro_enqueue_assets'
);