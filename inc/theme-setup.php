<?php
/**
 * Trade Sphare Pro - Theme Setup
 *
 * @package TradeSpharePro
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Theme setup.
 *
 * @return void
 */
function trade_sphare_pro_theme_setup() {

	/*
	 * Translation.
	 */
	load_theme_textdomain(
		'trade-sphare-pro',
		TRADE_SPHARE_PRO_PATH . '/languages'
	);

	/*
	 * WordPress core features.
	 */
	add_theme_support( 'title-tag' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-logo' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'wp-block-styles' );

	add_editor_style( 'style.css' );

	/*
	 * HTML5 markup.
	 */
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	/*
	 * Custom image sizes.
	 */
	add_image_size(
		'trade-sphare-pro-card',
		400,
		250,
		true
	);

	/*
	 * Navigation menus.
	 */
	register_nav_menus(
		array(
			'primary'        => __( 'Primary Navigation', 'trade-sphare-pro' ),
			'footer_quick'   => __( 'Footer - Quick Links', 'trade-sphare-pro' ),
			'footer_content' => __( 'Footer - Resources', 'trade-sphare-pro' ),
			'footer_support' => __( 'Footer - Support', 'trade-sphare-pro' ),
		)
	);
}

/**
 * Initialize theme setup.
 */
add_action(
	'after_setup_theme',
	'trade_sphare_pro_theme_setup'
);