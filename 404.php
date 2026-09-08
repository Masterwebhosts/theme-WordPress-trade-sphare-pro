<?php
/**
 * Trade Sphare Pro - 404 Page
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

		<section class="ts-no-results ts-404">

			<header class="ts-post-header">

				<p class="ts-home-eyebrow">
					404
				</p>

				<h1 class="ts-post-title">
					<?php esc_html_e( 'Page Not Found', 'trade-sphare-pro' ); ?>
				</h1>

			</header>

			<div class="ts-post-content">

				<p>
					<?php
					esc_html_e(
						'Sorry, the page you are looking for does not exist or may have been moved.',
						'trade-sphare-pro'
					);
					?>
				</p>

			</div>

			<div class="ts-home-actions">

				<a
					class="ts-button ts-button-primary"
					href="<?php echo esc_url( home_url( '/' ) ); ?>"
				>
					<?php esc_html_e( 'Back to Home', 'trade-sphare-pro' ); ?>
				</a>

				<a
					class="ts-text-link"
					href="<?php echo esc_url( home_url( '/blog/' ) ); ?>"
				>
					<?php esc_html_e( 'Browse the Blog →', 'trade-sphare-pro' ); ?>
				</a>

			</div>

		</section>

	</div>

</main>

<?php
get_footer();
?>

