<?php
/**
 * Trade Sphare Pro - Template Hooks
 *
 * Theme hooks and template-related integrations.
 *
 * @package TradeSpharePro
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/* =========================================================
   BODY CLASS
========================================================= */

/**
 * Add Trade Sphare Pro theme classes to the body.
 *
 * @param array $classes Existing body classes.
 * @return array
 */
function trade_sphare_pro_body_classes( $classes ) {

	$classes[] = 'trade-sphare-pro-theme';

	if ( is_front_page() ) {
		$classes[] = 'trade-sphare-pro-front-page';
	}

	if ( is_home() ) {
		$classes[] = 'trade-sphare-pro-blog';
	}

	if ( is_singular( 'post' ) ) {
		$classes[] = 'trade-sphare-pro-single-post';
	}

	return $classes;
}

add_filter(
	'body_class',
	'trade_sphare_pro_body_classes'
);

/* =========================================================
   POST CLASS
========================================================= */

/**
 * Add a theme class to posts.
 *
 * @param array $classes Existing post classes.
 * @return array
 */
function trade_sphare_pro_post_classes( $classes ) {

	$classes[] = 'ts-pro-post-entry';

	return $classes;
}

add_filter(
	'post_class',
	'trade_sphare_pro_post_classes'
);