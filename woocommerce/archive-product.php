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
							'المتجر',
							'trade-sphare-pro'
						);
						?>
					</span>

					<h1 class="ts-shop-title">

						<?php
						if ( is_product_category() || is_product_tag() ) {

							single_term_title();

						} else {

							woocommerce_page_title();

						}
						?>

					</h1>

					<?php if ( is_product_category() || is_product_tag() ) : ?>

						<?php
						$term_description = term_description();
						?>

						<?php if ( $term_description ) : ?>

							<div class="ts-shop-description">
								<?php
								echo wp_kses_post(
									$term_description
								);
								?>
							</div>

						<?php endif; ?>

					<?php else : ?>

						<p class="ts-shop-description">
							<?php
							esc_html_e(
								'اكتشف مجموعتنا المختارة من المنتجات وتسوق بسهولة.',
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

					<?php
					/**
					 * WooCommerce outputs:
					 *
					 * - Result count
					 * - Catalog ordering
					 */
					do_action( 'woocommerce_before_shop_loop' );
					?>

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

					<div class="ts-shop-empty-icon">
						!
					</div>

					<h2>
						<?php
						esc_html_e(
							'لا توجد منتجات حاليًا',
							'trade-sphare-pro'
						);
						?>
					</h2>

					<p>
						<?php
						esc_html_e(
							'لم يتم العثور على منتجات تطابق هذا القسم أو البحث.',
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
							'العودة إلى المتجر',
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