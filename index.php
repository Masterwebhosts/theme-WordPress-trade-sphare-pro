<?php
/**
 * Trade Sphare Pro - Blog Index
 *
 * @package TradeSpharePro
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<main id="primary" class="ts-site-main">

	<div class="ts-container">

		<div class="ts-content-area">

			<header class="ts-post-header">

				<h1 class="ts-post-title">
					<?php
					esc_html_e( 'Blog', 'trade-sphare-pro' );
					?>
				</h1>

				<p class="ts-post-content">
					<?php
					esc_html_e(
						'Latest articles, insights, and useful information from Trade Sphare.',
						'trade-sphare-pro'
					);
					?>
				</p>

			</header>

			<?php if ( have_posts() ) : ?>

				<div class="ts-archive-grid">

					<?php while ( have_posts() ) : the_post(); ?>

						<?php
						get_template_part(
							'template-parts/content/content'
						);
						?>

					<?php endwhile; ?>

				</div>

				<nav
					class="ts-pagination"
					aria-label="<?php esc_attr_e( 'Page navigation', 'trade-sphare-pro' ); ?>"
				>

					<?php
					the_posts_pagination(
						array(
							'mid_size'  => 2,
							'prev_text' => __( '← Previous', 'trade-sphare-pro' ),
							'next_text' => __( 'Next →', 'trade-sphare-pro' ),
						)
					);
					?>

				</nav>

			<?php else : ?>

				<section class="ts-no-results">

					<h2>
						<?php esc_html_e( 'No Results Found', 'trade-sphare-pro' ); ?>
					</h2>

					<p>
						<?php
						esc_html_e(
							'No content was found to display at this time.',
							'trade-sphare-pro'
						);
						?>
					</p>

				</section>

			<?php endif; ?>

		</div>

	</div>

</main>

<?php
get_footer();
?>

