<?php
/**
 * Trade Sphare Pro - My Account Navigation
 *
 * @package TradeSpharePro
 */

defined( 'ABSPATH' ) || exit;

do_action( 'woocommerce_before_account_navigation' );
?>

<nav
	class="ts-account-navigation"
	aria-label="<?php esc_attr_e( 'قائمة الحساب', 'trade-sphare-pro' ); ?>"
>

	<div class="ts-account-nav-header">



		<div>

			<strong>
				<?php
				echo esc_html(
					wp_get_current_user()->display_name
				);
				?>
			</strong>

			<span>
				<?php
				esc_html_e(
					'حسابك الشخصي',
					'trade-sphare-pro'
				);
				?>
			</span>

		</div>

	</div>


	<ul>

		<?php foreach ( wc_get_account_menu_items() as $endpoint => $label ) : ?>

			<li
				class="<?php echo esc_attr(
					wc_get_account_menu_item_classes(
						$endpoint
					)
				); ?>"
			>

				<a
					href="<?php echo esc_url(
						wc_get_account_endpoint_url(
							$endpoint
						)
					); ?>"
					<?php
					echo wc_is_current_account_menu_item( $endpoint )
						? 'aria-current="page"'
						: '';
					?>
				>

					<?php echo esc_html( $label ); ?>

				</a>

			</li>

		<?php endforeach; ?>

	</ul>

</nav>

<?php do_action( 'woocommerce_after_account_navigation' ); ?>