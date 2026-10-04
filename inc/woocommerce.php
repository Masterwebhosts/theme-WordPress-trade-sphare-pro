<?php
/**
 * WooCommerce integration.
 *
 * @package TradeSpharePro
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * WooCommerce theme support.
 */
function trade_sphare_pro_woocommerce_setup() {

	add_theme_support(
		'woocommerce',
		array(
			'thumbnail_image_width' => 400,
			'single_image_width'    => 800,
			'product_grid'          => array(
				'default_rows'    => 3,
				'min_rows'        => 1,
				'max_rows'        => 6,
				'default_columns' => 4,
				'min_columns'     => 1,
				'max_columns'     => 4,
			),
		)
	);

	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
}

add_action(
	'after_setup_theme',
	'trade_sphare_pro_woocommerce_setup',
	20
);

/**
 * Arabic My Account menu labels.
 *
 * @param array $items Account menu items.
 * @return array
 */
function trade_sphare_pro_account_menu_labels( $items ) {

	$labels = array(
		'dashboard'       => 'لوحة التحكم',
		'orders'          => 'طلباتي',
		'downloads'       => 'التنزيلات',
		'edit-address'    => 'العناوين',
		'payment-methods' => 'طرق الدفع',
		'edit-account'    => 'بيانات الحساب',
		'customer-logout' => 'تسجيل الخروج',
	);

	foreach ( $labels as $endpoint => $label ) {

		if ( isset( $items[ $endpoint ] ) ) {
			$items[ $endpoint ] = __( $label, 'trade-sphare-pro' );
		}
	}

	return $items;
}

add_filter(
	'woocommerce_account_menu_items',
	'trade_sphare_pro_account_menu_labels',
	20
);