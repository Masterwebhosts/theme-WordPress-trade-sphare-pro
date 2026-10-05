<?php
/**
 * Trade Sphare Pro - Single Product
 *
 * @package TradeSpharePro
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );
?>

<section class="ts-single-product-page">

	<div class="ts-container">

		<?php
		/*
		 * Breadcrumbs.
		 */
		if ( function_exists( 'woocommerce_breadcrumb' ) ) {
			woocommerce_breadcrumb(
				array(
					'delimiter'   => '<span class="ts-breadcrumb-separator">/</span>',
					'wrap_before' => '<nav class="ts-product-breadcrumbs" aria-label="' . esc_attr__( 'Ù…Ø³Ø§Ø± Ø§Ù„ØªÙ†Ù‚Ù„', 'trade-sphare-pro' ) . '">',
					'wrap_after'  => '</nav>',
				)
			);
		}
		?>

		<?php wc_print_notices(); ?>

		<?php while ( have_posts() ) : ?>

			<?php the_post(); ?>

			<article
				id="product-<?php the_ID(); ?>"
				<?php wc_product_class( 'ts-single-product', wc_get_product( get_the_ID() ) ); ?>
			>

				<?php
				wc_get_template_part(
					'content',
					'single-product'
				);
				?>

			</article>

		<?php endwhile; ?>

	</div>

</section>

<?php
get_footer( 'shop' );