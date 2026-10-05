<?php
/**
 * Trade Sphare Pro - Page
 *
 * @package TradeSpharePro
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$ts_is_woocommerce_page = false;

if ( function_exists( 'is_woocommerce' ) ) {
	$ts_is_woocommerce_page =
		is_woocommerce()
		|| is_cart()
		|| is_checkout()
		|| is_account_page();
}

get_header();
?>

<div class="ts-page-wrapper">

	<div class="ts-container">

		<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php if ( $ts_is_woocommerce_page ) : ?>

					<?php
					/*
					 * WooCommerce pages provide their own layout,
					 * title and content. Do not wrap them in the
					 * regular page template.
					 */
					the_content();
					?>

				<?php else : ?>

					<div class="ts-layout">

						<div class="ts-content-area">

							<article
								id="post-<?php the_ID(); ?>"
								<?php post_class( 'ts-post' ); ?>
							>

								<?php if ( has_post_thumbnail() ) : ?>

									<div class="ts-post-thumbnail">

										<a
											href="<?php the_permalink(); ?>"
											aria-label="<?php echo esc_attr( get_the_title() ); ?>"
										>

											<?php
											the_post_thumbnail(
												'large',
												array(
													'loading' => 'lazy',
												)
											);
											?>

										</a>

									</div>

								<?php endif; ?>


								<header class="ts-post-header">

									<div class="ts-post-meta">

										<time datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>">
											<?php echo esc_html( get_the_date() ); ?>
										</time>

									</div>

									<h1 class="ts-post-title">
										<?php the_title(); ?>
									</h1>

								</header>


								<div class="ts-post-content">

									<?php
									the_content();

									wp_link_pages(
										array(
											'before' => '<nav class="ts-pagination" aria-label="' .
												esc_attr__(
													'Ø§Ù„ØªÙ†Ù‚Ù„ Ø¨ÙŠÙ† Ø§Ù„ØµÙØ­Ø§Øª',
													'trade-sphare-pro'
												) .
												'">',
											'after'  => '</nav>',
										)
									);
									?>

								</div>

							</article>

						</div>


						<?php get_sidebar(); ?>

					</div>

				<?php endif; ?>

			<?php endwhile; ?>

		<?php else : ?>

			<section class="ts-no-results">

				<h1>
					<?php
					esc_html_e(
						'Ø§Ù„ØµÙØ­Ø© ØºÙŠØ± Ù…ÙˆØ¬ÙˆØ¯Ø©',
						'trade-sphare-pro'
					);
					?>
				</h1>

				<p>
					<?php
					esc_html_e(
						'Ø¹Ø°Ø±Ù‹Ø§ØŒ ØªØ¹Ø°Ø± Ø§Ù„Ø¹Ø«ÙˆØ± Ø¹Ù„Ù‰ Ø§Ù„ØµÙØ­Ø© Ø§Ù„Ù…Ø·Ù„ÙˆØ¨Ø©.',
						'trade-sphare-pro'
					);
					?>
				</p>

			</section>

		<?php endif; ?>

	</div>

</div>

<?php
get_footer();