<?php
/**
 * Trade Sphare Pro - Footer
 *
 * @package TradeSpharePro
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

	</main><!-- #primary -->

	<footer class="ts-site-footer">

		<div class="ts-container">

			<div class="ts-footer-main">

				<div class="ts-footer-brand">

					<a
						class="ts-footer-logo"
						href="<?php echo esc_url( home_url( '/' ) ); ?>"
						rel="home"
					>
						<?php if ( has_custom_logo() ) : ?>

							<?php the_custom_logo(); ?>

						<?php else : ?>

							<span class="ts-footer-logo-text">
								<?php echo esc_html( get_bloginfo( 'name' ) ); ?>
							</span>

						<?php endif; ?>
					</a>

					<p class="ts-footer-description">
						<?php echo esc_html( get_bloginfo( 'description' ) ); ?>
					</p>

					<p class="ts-footer-tagline">
						<?php
						esc_html_e(
							'منتجات موثوقة وتجربة شراء بسيطة وآمنة.',
							'trade-sphare-pro'
						);
						?>
					</p>

				</div>


				<div class="ts-footer-column">

					<h2 class="ts-footer-heading">
						<?php
						esc_html_e(
							'روابط سريعة',
							'trade-sphare-pro'
						);
						?>
					</h2>

					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'footer_quick',
							'menu_class'     => 'ts-footer-menu',
							'container'      => 'nav',
							'container_class' => 'ts-footer-nav',
							'fallback_cb'    => false,
						)
					);
					?>

				</div>


				<div class="ts-footer-column">

					<h2 class="ts-footer-heading">
						<?php
						esc_html_e(
							'معلومات',
							'trade-sphare-pro'
						);
						?>
					</h2>

					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'footer_content',
							'menu_class'     => 'ts-footer-menu',
							'container'      => 'nav',
							'container_class' => 'ts-footer-nav',
							'fallback_cb'    => false,
						)
					);
					?>

				</div>


				<div class="ts-footer-column">

					<h2 class="ts-footer-heading">
						<?php
						esc_html_e(
							'خدمة العملاء',
							'trade-sphare-pro'
						);
						?>
					</h2>

					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'footer_support',
							'menu_class'     => 'ts-footer-menu',
							'container'      => 'nav',
							'container_class' => 'ts-footer-nav',
							'fallback_cb'    => false,
						)
					);
					?>

				</div>

			</div>


			<div class="ts-footer-bottom">

				<div class="ts-footer-copyright">

					<span>
						&copy;
						<?php echo esc_html( wp_date( 'Y' ) ); ?>
						<?php echo esc_html( get_bloginfo( 'name' ) ); ?>.
					</span>

					<span class="ts-footer-credit">
						<?php
						esc_html_e(
							' جميع الحقوق محفوظة.',
							'trade-sphare-pro'
						);
						?>
					</span>

				</div>

				<div class="ts-footer-bottom-links">

					<a
						href="<?php echo esc_url( home_url( '/' ) ); ?>"
					>
						<?php
						esc_html_e(
							'الرئيسية',
							'trade-sphare-pro'
						);
						?>
					</a>

				</div>

			</div>

		</div>

	</footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>