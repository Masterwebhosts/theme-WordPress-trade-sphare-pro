<?php
/**
 * Trade Sphare Pro - Single Product Content
 *
 * @package TradeSpharePro
 */

defined( 'ABSPATH' ) || exit;

global $product;

if ( ! $product instanceof WC_Product ) {
	return;
}

do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form();
	return;
}
?>

<div class="ts-single-product-main">

	<!-- =================================================
	     PRODUCT GALLERY
	================================================== -->

	<div class="ts-single-product-gallery">

		<?php
		/*
		 * WooCommerce handles:
		 *
		 * - Sale badge
		 * - Main product image
		 * - Product gallery
		 * - Zoom
		 * - Lightbox
		 * - Slider
		 */
		do_action(
			'woocommerce_before_single_product_summary'
		);
		?>

	</div>


	<!-- =================================================
	     PRODUCT SUMMARY
	================================================== -->

	<div class="ts-single-product-summary">

		<?php
		/*
		 * WooCommerce handles:
		 *
		 * - Product title
		 * - Rating
		 * - Price
		 * - Short description
		 * - Add to cart
		 * - Product meta
		 * - Sharing
		 */
		do_action(
			'woocommerce_single_product_summary'
		);
		?>

	</div>

</div>


<!-- =================================================
     PRODUCT INFORMATION
================================================== -->

<div class="ts-single-product-information">

	<?php
	/*
	 * WooCommerce handles:
	 *
	 * - Description
	 * - Additional information
	 * - Reviews
	 * - Upsells
	 * - Related products
	 */
	do_action(
		'woocommerce_after_single_product_summary'
	);
	?>

</div>

<?php
do_action( 'woocommerce_after_single_product' );