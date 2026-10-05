<?php
/**
 * Trade Sphare Pro - My Account Wrapper
 *
 * @package TradeSpharePro
 */

defined( 'ABSPATH' ) || exit;
?>

<div class="ts-my-account">

	<div class="ts-my-account-layout">

		<?php
		do_action( 'woocommerce_account_navigation' );
		?>

		<main class="ts-my-account-content">

			<?php
			do_action( 'woocommerce_account_content' );
			?>

		</main>

	</div>

</div>