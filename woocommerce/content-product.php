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
	foreach ( $product_categories as $product_category ) {

		if ( ! $product_category instanceof WP_Term ) {
			continue;
		}

		$category_name = $product_category->name;

		$category_term_link = get_term_link(
			$product_category
		);

		if ( ! is_wp_error( $category_term_link ) ) {
			$category_url = $category_term_link;
		}

		break;
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

/*
 * Sale percentage.
 */
$sale_percentage = 0;

if ( $product->is_on_sale() ) {

	$regular_price = (float) $product->get_regular_price();
	$sale_price    = (float) $product->get_sale_price();

	if (
		$regular_price > 0 &&
		$sale_price > 0 &&
		$sale_price < $regular_price
	) {
		$sale_percentage = (int) round(
			(
				( $regular_price - $sale_price )
				/ $regular_price
			) * 100
		);
	}
}
?>

<li <?php wc_product_class( 'ts-product-card', $product ); ?>>

	<article class="ts-product-card-inner">

		<!-- Product Media -->

		<div class="ts-product-card-media">

			<a
				class="ts-product-card-link"
				href="<?php echo esc_url( $product_url ); ?>"
				aria-label="<?php echo esc_attr( $product->get_name() ); ?>"
			>

				<div class="ts-product-card-badges">

					<?php if ( $sale_percentage > 0 ) : ?>

						<span class="ts-product-card-sale">
							<?php
							printf(
								/* translators: %s: discount percentage. */
								esc_html__(
									'Ø®ØµÙ… %s%%',
									'trade-sphare-pro'
								),
								esc_html( $sale_percentage )
							);
							?>
						</span>

					<?php elseif ( $product->is_on_sale() ) : ?>

						<span class="ts-product-card-sale">
							<?php
							esc_html_e(
								'Ø®ØµÙ…',
								'trade-sphare-pro'
							);
							?>
						</span>

					<?php endif; ?>

					<?php if ( $product->is_featured() ) : ?>

						<span class="ts-product-card-featured">
							<?php
							esc_html_e(
								'Ù…Ù…ÙŠØ²',
								'trade-sphare-pro'
							);
							?>
						</span>

					<?php endif; ?>

				</div>

				<div class="ts-product-card-image-wrap">

					<?php
					echo wp_kses_post(
						$product->get_image(
							'woocommerce_thumbnail',
							array(
								'loading' => 'lazy',
								'alt'     => $product->get_name(),
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

					<span class="ts-stars-empty">â˜…â˜…â˜…â˜…â˜…</span>

					<span
						class="ts-stars-filled"
						style="width: <?php echo esc_attr( $rating_percentage ); ?>%;"
					>
						â˜…â˜…â˜…â˜…â˜…
					</span>

				</span>

				<span class="screen-reader-text">
					<?php
					printf(
						/* translators: 1: rating, 2: review count. */
						esc_html__(
							'ØªÙ‚ÙŠÙŠÙ… %1$s Ù…Ù† 5ØŒ %2$s Ù…Ø±Ø§Ø¬Ø¹Ø©',
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
							'Ù„Ø§ ØªÙˆØ¬Ø¯ ØªÙ‚ÙŠÙŠÙ…Ø§Øª',
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