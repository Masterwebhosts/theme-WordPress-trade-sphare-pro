<?php
/**
 * Trade Sphare Pro - Widgets
 *
 * @package TradeSpharePro
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Register Pro widget areas.
 *
 * @return void
 */
function trade_sphare_pro_widgets_init() {

	register_sidebar(
		array(
			'name'          => __( 'Sidebar', 'trade-sphare-pro' ),
			'id'            => 'sidebar-1',
			'description'   => __( 'Widget area for the main sidebar.', 'trade-sphare-pro' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}

add_action(
	'widgets_init',
	'trade_sphare_pro_widgets_init'
);