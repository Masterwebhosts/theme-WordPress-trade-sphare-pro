<?php
/**
 * Trade Sphare Pro - Blog Home
 *
 * @package TradeSpharePro
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

	<div class="ts-content-area">

		<div class="ts-container">

			<header class="ts-post-header">

				<h1 class="ts-post-title">
					<?php
					esc_html_e(
						'Latest Articles',
						'trade-sphare-pro'
					);
					?>
				</h1>

			</header>

			<div class="ts-home-post-grid">

				<?php if ( have_posts() ) : ?>

					<?php while ( have_posts() ) : ?>

						<?php the_post(); ?>

						<article
							id="post-<?php the_ID(); ?>"
							<?php post_class( 'ts-home-post-card' ); ?>
						>

							<?php if ( has_post_thumbnail() ) : ?>

								<a
									class="ts-home-post-image"
									href="<?php the_permalink(); ?>"
								>
									<?php
									the_post_thumbnail(
										'trade-sphare-pro-card',
										array(
											'loading' => 'lazy',
										)
									);
									?>
								</a>

							<?php endif; ?>

							<div class="ts-home-post-content">

								<div class="ts-post-meta">
									<time datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>">
										<?php echo esc_html( get_the_date() ); ?>
									</time>
								</div>

								<h2 class="ts-post-title">
									<a href="<?php the_permalink(); ?>">
										<?php the_title(); ?>
									</a>
								</h2>

								<p class="ts-post-excerpt">
									<?php
									echo esc_html(
										wp_trim_words(
											wp_strip_all_tags(
												get_the_excerpt()
											),
											22,
											'…'
										)
									);
									?>
								</p>

								<a
									class="ts-text-link"
									href="<?php the_permalink(); ?>"
								>
									<?php
									esc_html_e(
										'قراءة المقال ←',
										'trade-sphare-pro'
									);
									?>
								</a>

							</div>

						</article>

					<?php endwhile; ?>

				<?php else : ?>

					<p>
						<?php
						esc_html_e(
							'No articles have been published yet.',
							'trade-sphare-pro'
						);
						?>
					</p>

				<?php endif; ?>

			</div>

		</div>

	</div>

<?php
get_footer();