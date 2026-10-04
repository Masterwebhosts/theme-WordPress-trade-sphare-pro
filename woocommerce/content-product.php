<?php
/**
 * Trade Sphare Pro - Product Card
 *
 * @package TradeSpharePro
 */

defined( 'ABSPATH' ) || exit;

global $product;

if ( ! $product instanceof WC_Product ) {
	return;
}

if ( ! $product->is_visible() ) {
	return;
}

$product_id  = $product->get_id();
$product_url = get_permalink( $product_id );

/*
 * Product category.
 */
$product_categories = get_the_terms(
	$product_id,
	'product_cat'
);

$category_name = '';
$category_url  = '';

if (
	! is_wp_error( $product_categories ) &&
	! empty( $product_categories )
) {
	$category_name = $product_categories[0]->name;

	$category_term_link = get_term_link(
		$product_categories[0]
	);

	if ( ! is_wp_error( $category_term_link ) ) {
		$category_url = $category_term_link;
	}
}

/*
 * Rating.
 */
$average_rating = (float) $product->get_average_rating();
$rating_count   = (int) $product->get_rating_count();

$rating_percentage = max(
	0,
	min(
		100,
		( $average_rating / 5 ) * 100
	)
);
?>

<li <?php wc_product_class( 'ts-product-card', $product ); ?>>

	<article class="ts-product-card-inner">

		<!-- Product Image -->

		<div class="ts-product-card-media">

			<a
				class="ts-product-card-link"
				href="<?php echo esc_url( $product_url ); ?>"
				aria-label="<?php echo esc_attr( $product->get_name() ); ?>"
			>

				<?php if ( $product->is_on_sale() ) : ?>

					<span class="ts-product-card-sale">
						<?php
						esc_html_e(
							'خصم',
							'trade-sphare-pro'
						);
						?>
					</span>

				<?php endif; ?>

				<div class="ts-product-card-image-wrap">

					<?php
					echo wp_kses_post(
						$product->get_image(
							'woocommerce_thumbnail',
							array(
								'loading' => 'lazy',
							)
						)
					);
					?>

				</div>

			</a>

		</div>


		<!-- Product Content -->

		<div class="ts-product-card-content">

			<?php if ( $category_name && $category_url ) : ?>

				<a
					class="ts-product-card-category"
					href="<?php echo esc_url( $category_url ); ?>"
				>
					<?php echo esc_html( $category_name ); ?>
				</a>

			<?php endif; ?>


			<!-- Product Title -->

			<h2 class="ts-product-card-title">

				<a href="<?php echo esc_url( $product_url ); ?>">
					<?php echo esc_html( $product->get_name() ); ?>
				</a>

			</h2>


			<!-- Rating -->

			<div class="ts-product-card-rating">

				<span
					class="ts-stars"
					aria-hidden="true"
				>

					<span class="ts-stars-empty">
						★★★★★
					</span>

					<span
						class="ts-stars-filled"
						style="width: <?php echo esc_attr( $rating_percentage ); ?>%;"
					>
						★★★★★
					</span>

				</span>

				<span class="screen-reader-text">
					<?php
					printf(
						/* translators: 1: rating, 2: review count. */
						esc_html__(
							'تقييم %1$s من 5، %2$s مراجعة',
							'trade-sphare-pro'
						),
						esc_html(
							number_format_i18n(
								$average_rating,
								1
							)
						),
						esc_html(
							number_format_i18n(
								$rating_count
							)
						)
					);
					?>
				</span>

				<?php if ( $rating_count > 0 ) : ?>

					<span class="ts-product-card-rating-count">
						(<?php echo esc_html( $rating_count ); ?>)
					</span>

				<?php else : ?>

					<span class="ts-product-card-no-rating">
						<?php
						esc_html_e(
							'لا توجد تقييمات',
							'trade-sphare-pro'
						);
						?>
					</span>

				<?php endif; ?>

			</div>


			<!-- Product Price -->

			<div class="ts-product-card-price">

				<?php
				echo wp_kses_post(
					$product->get_price_html()
				);
				?>

			</div>


			<!-- Add to Cart -->

			<div class="ts-product-card-action">

				<?php
				woocommerce_template_loop_add_to_cart();
				?>

			</div>

		</div>

	</article>

</li>