<?php
/**
 * Trade Sphare Pro - WooCommerce Product Archive
 *
 * @package TradeSpharePro
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );
?>

<section class="ts-shop-page">

	<div class="ts-container">

		<!-- =================================================
		     SHOP HEADER
		================================================== -->

		<header class="ts-shop-header">

			<div class="ts-shop-heading">

				<span class="ts-shop-eyebrow">
					<?php
					esc_html_e(
						'Ø§Ù„Ù…ØªØ¬Ø±',
						'trade-sphare-pro'
					);
					?>
				</span>

				<h1 class="ts-shop-title">

					<?php
					if (
						is_product_category()
						|| is_product_tag()
						|| is_product_taxonomy()
					) {

						single_term_title();

					} else {

						woocommerce_page_title();
					}
					?>

				</h1>

				<?php
				$term_description = '';

				if (
					is_product_category()
					|| is_product_tag()
					|| is_product_taxonomy()
				) {
					$term_description = term_description();
				}
				?>

				<?php if ( $term_description ) : ?>

					<div class="ts-shop-description">
						<?php
						echo wp_kses_post(
							$term_description
						);
						?>
					</div>

				<?php else : ?>

					<p class="ts-shop-description">
						<?php
						esc_html_e(
							'Ø§ÙƒØªØ´Ù Ù…Ø¬Ù…ÙˆØ¹ØªÙ†Ø§ Ø§Ù„Ù…Ø®ØªØ§Ø±Ø© Ù…Ù† Ø§Ù„Ù…Ù†ØªØ¬Ø§Øª ÙˆØªØ³ÙˆÙ‚ Ø¨Ø³Ù‡ÙˆÙ„Ø©.',
							'trade-sphare-pro'
						);
						?>
					</p>

				<?php endif; ?>

			</div>

		</header>


		<!-- =================================================
		     WOOCOMMERCE NOTICES
		================================================== -->

		<?php wc_print_notices(); ?>


		<?php if ( woocommerce_product_loop() ) : ?>

			<!-- =================================================
			     SHOP TOOLBAR
			================================================== -->

			<div class="ts-shop-toolbar">

				<div class="ts-shop-results">

					<?php
					woocommerce_result_count();
					?>

				</div>

				<div class="ts-shop-ordering">

					<?php
					woocommerce_catalog_ordering();
					?>

				</div>

			</div>


			<!-- =================================================
			     PRODUCTS
			================================================== -->

			<div class="ts-shop-products">

				<?php
				woocommerce_product_loop_start();
				?>

				<?php while ( have_posts() ) : ?>

					<?php the_post(); ?>

					<?php
					do_action( 'woocommerce_shop_loop' );

					wc_get_template_part(
						'content',
						'product'
					);
					?>

				<?php endwhile; ?>

				<?php
				woocommerce_product_loop_end();
				?>

			</div>


			<!-- =================================================
			     PAGINATION
			================================================== -->

			<div class="ts-shop-pagination">

				<?php
				do_action(
					'woocommerce_after_shop_loop'
				);
				?>

			</div>

		<?php else : ?>

			<!-- =================================================
			     EMPTY STORE
			================================================== -->

			<div class="ts-shop-empty">

				<div class="ts-shop-empty-icon" aria-hidden="true">
					!
				</div>

				<h2>
					<?php
					esc_html_e(
						'Ù„Ø§ ØªÙˆØ¬Ø¯ Ù…Ù†ØªØ¬Ø§Øª Ø­Ø§Ù„ÙŠÙ‹Ø§',
						'trade-sphare-pro'
					);
					?>
				</h2>

				<p>
					<?php
					esc_html_e(
						'Ù„Ù… ÙŠØªÙ… Ø§Ù„Ø¹Ø«ÙˆØ± Ø¹Ù„Ù‰ Ù…Ù†ØªØ¬Ø§Øª ØªØ·Ø§Ø¨Ù‚ Ù‡Ø°Ø§ Ø§Ù„Ù‚Ø³Ù… Ø£Ùˆ Ø§Ù„Ø¨Ø­Ø«.',
						'trade-sphare-pro'
					);
					?>
				</p>

				<a
					class="ts-button"
					href="<?php echo esc_url( wc_get_page_permalink( 'shop' ) ); ?>"
				>
					<?php
					esc_html_e(
						'Ø§Ù„Ø¹ÙˆØ¯Ø© Ø¥Ù„Ù‰ Ø§Ù„Ù…ØªØ¬Ø±',
						'trade-sphare-pro'
					);
					?>
				</a>

			</div>

		<?php endif; ?>

	</div>

</section>

<?php
get_footer( 'shop' );