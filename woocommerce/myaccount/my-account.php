<?php
/**
 * Trade Sphare Pro - My Account Wrapper
 *
 * @package TradeSpharePro
 */
defined( 'ABSPATH' ) || exit;
?>
<div class="ts-my-account">
	<div class="ts-container">
		<div class="ts-my-account-layout">
			<aside class="ts-my-account-navigation">
				<?php
				do_action( 'woocommerce_account_navigation' );
				?>
			</aside>
			<div class="ts-my-account-content">
				<?php
				do_action( 'woocommerce_account_content' );
				?>
			</div>
		</div>
	</div>
</div>