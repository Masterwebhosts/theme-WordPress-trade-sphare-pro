<?php
/**
 * Trade Sphare Pro - Store Homepage
 *
 * @package TradeSpharePro
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

	<!-- =====================================================
	     HERO
	====================================================== -->

	<section class="ts-store-hero">

		<div class="ts-container">

			<div class="ts-store-hero-grid">

				<div class="ts-store-hero-content">

					<span class="ts-store-eyebrow">
						<?php
						esc_html_e(
							'Ù…Ø±Ø­Ø¨Ù‹Ø§ Ø¨Ùƒ ÙÙŠ Trade Sphare',
							'trade-sphare-pro'
						);
						?>
					</span>

					<h1 class="ts-store-hero-title">
						<?php
						esc_html_e(
							'Ø§ÙƒØªØ´Ù Ù…Ù†ØªØ¬Ø§Øª ØªØ³ØªØ­Ù‚ Ù…ÙƒØ§Ù†Ù‹Ø§ ÙÙŠ Ù…ØªØ¬Ø±Ùƒ',
							'trade-sphare-pro'
						);
						?>
					</h1>

					<p class="ts-store-hero-description">
						<?php
						esc_html_e(
							'ØªØ¬Ø±Ø¨Ø© ØªØ³ÙˆÙ‚ ÙˆØ§Ø¶Ø­Ø© ÙˆØ³Ø±ÙŠØ¹Ø© Ù…Ø¹ Ù…Ù†ØªØ¬Ø§Øª Ù…Ø®ØªØ§Ø±Ø©ØŒ Ø£Ø³Ø¹Ø§Ø± Ù…Ù†Ø§ÙØ³Ø©ØŒ ÙˆØ¯ÙØ¹ Ø¢Ù…Ù†.',
							'trade-sphare-pro'
						);
						?>
					</p>

					<div class="ts-store-hero-actions">

						<?php if ( class_exists( 'WooCommerce' ) ) : ?>

							<a
								class="ts-button"
								href="<?php echo esc_url( wc_get_page_permalink( 'shop' ) ); ?>"
							>
								<?php
								esc_html_e(
									'ØªØµÙØ­ Ø§Ù„Ù…ØªØ¬Ø±',
									'trade-sphare-pro'
								);
								?>
							</a>

						<?php endif; ?>

						<a
							class="ts-button ts-button-outline"
							href="#featured-products"
						>
							<?php
							esc_html_e(
								'Ø§ÙƒØªØ´Ù Ø§Ù„Ù…Ù†ØªØ¬Ø§Øª',
								'trade-sphare-pro'
							);
							?>
						</a>

					</div>

				</div>


				<div class="ts-store-hero-card">

					<div class="ts-store-hero-card-inner">

						<span class="ts-store-hero-card-label">
							<?php
							esc_html_e(
								'ØªØ³ÙˆÙ‚ Ø¨Ø«Ù‚Ø©',
								'trade-sphare-pro'
							);
							?>
						</span>

						<strong>
							<?php
							esc_html_e(
								'Ø¬ÙˆØ¯Ø© â€¢ Ø³Ø±Ø¹Ø© â€¢ Ø£Ù…Ø§Ù†',
								'trade-sphare-pro'
							);
							?>
						</strong>

					</div>

				</div>

			</div>

		</div>

	</section>


	<!-- =====================================================
	     STORE BENEFITS
	====================================================== -->

	<section
		class="ts-store-benefits"
		aria-labelledby="ts-benefits-title"
	>

		<div class="ts-container">

			<div class="ts-visually-hidden">

				<h2 id="ts-benefits-title">
					<?php
					esc_html_e(
						'Ù…Ø²Ø§ÙŠØ§ Ø§Ù„ØªØ³ÙˆÙ‚',
						'trade-sphare-pro'
					);
					?>
				</h2>

			</div>


			<div class="ts-benefits-grid">

				<article class="ts-benefit-card">

					<span class="ts-benefit-number">
						01
					</span>

					<div>

						<h3>
							<?php
							esc_html_e(
								'Ø¯ÙØ¹ Ø¢Ù…Ù†',
								'trade-sphare-pro'
							);
							?>
						</h3>

						<p>
							<?php
							esc_html_e(
								'Ø¹Ù…Ù„ÙŠØ© Ø´Ø±Ø§Ø¡ Ø¨Ø³ÙŠØ·Ø© ÙˆØ¢Ù…Ù†Ø© Ù…Ù† Ø§Ù„Ø¨Ø¯Ø§ÙŠØ© Ø­ØªÙ‰ ØªØ£ÙƒÙŠØ¯ Ø§Ù„Ø·Ù„Ø¨.',
								'trade-sphare-pro'
							);
							?>
						</p>

					</div>

				</article>


				<article class="ts-benefit-card">

					<span class="ts-benefit-number">
						02
					</span>

					<div>

						<h3>
							<?php
							esc_html_e(
								'Ø´Ø­Ù† Ø³Ø±ÙŠØ¹',
								'trade-sphare-pro'
							);
							?>
						</h3>

						<p>
							<?php
							esc_html_e(
								'Ù†Ø¬Ù‡Ø² Ø§Ù„Ø·Ù„Ø¨Ø§Øª Ø¨Ø³Ø±Ø¹Ø© Ù…Ø¹ ØªØ¬Ø±Ø¨Ø© ØªÙˆØµÙŠÙ„ ÙˆØ§Ø¶Ø­Ø©.',
								'trade-sphare-pro'
							);
							?>
						</p>

					</div>

				</article>


				<article class="ts-benefit-card">

					<span class="ts-benefit-number">
						03
					</span>

					<div>

						<h3>
							<?php
							esc_html_e(
								'Ø§Ø®ØªÙŠØ§Ø±Ø§Øª Ù…ÙˆØ«ÙˆÙ‚Ø©',
								'trade-sphare-pro'
							);
							?>
						</h3>

						<p>
							<?php
							esc_html_e(
								'Ù…Ù†ØªØ¬Ø§Øª Ù…Ø±ØªØ¨Ø© ÙˆÙˆØ§Ø¶Ø­Ø© Ù„ØªØµÙ„ Ù„Ù…Ø§ ØªØ¨Ø­Ø« Ø¹Ù†Ù‡ Ø¨Ø³Ù‡ÙˆÙ„Ø©.',
								'trade-sphare-pro'
							);
							?>
						</p>

					</div>

				</article>

			</div>

		</div>

	</section>


	<?php if ( class_exists( 'WooCommerce' ) ) : ?>

		<?php
		/*
		 * -----------------------------------------------------
		 * Product Categories
		 * -----------------------------------------------------
		 */

		$product_categories = get_terms(
			array(
				'taxonomy'   => 'product_cat',
				'hide_empty' => true,
				'number'     => 6,
				'orderby'    => 'count',
				'order'      => 'DESC',
			)
		);

		if ( is_wp_error( $product_categories ) ) {
			$product_categories = array();
		}


		/*
		 * -----------------------------------------------------
		 * Featured Products
		 * -----------------------------------------------------
		 */

		$featured_products = wc_get_products(
			array(
				'status'       => 'publish',
				'limit'        => 8,
				'featured'     => true,
				'stock_status' => 'instock',
				'return'       => 'objects',
			)
		);


		/*
		 * -----------------------------------------------------
		 * Latest Products
		 * -----------------------------------------------------
		 */

		$latest_products = wc_get_products(
			array(
				'status'       => 'publish',
				'limit'        => 8,
				'orderby'      => 'date',
				'order'        => 'DESC',
				'stock_status' => 'instock',
				'return'       => 'objects',
			)
		);


		/*
		 * -----------------------------------------------------
		 * Best Selling Products
		 * -----------------------------------------------------
		 */

		$best_selling_products = wc_get_products(
			array(
				'status'       => 'publish',
				'limit'        => 8,
				'orderby'      => 'popularity',
				'order'        => 'DESC',
				'stock_status' => 'instock',
				'return'       => 'objects',
			)
		);


		/*
		 * -----------------------------------------------------
		 * Prevent repeated products across sections.
		 * -----------------------------------------------------
		 */

		$featured_ids = array();

		foreach ( $featured_products as $featured_product ) {

			if ( $featured_product instanceof WC_Product ) {
				$featured_ids[] = $featured_product->get_id();
			}
		}


		$filtered_latest_products = array();

		foreach ( $latest_products as $latest_product ) {

			if ( ! $latest_product instanceof WC_Product ) {
				continue;
			}

			if ( in_array( $latest_product->get_id(), $featured_ids, true ) ) {
				continue;
			}

			$filtered_latest_products[] = $latest_product;

			if ( count( $filtered_latest_products ) >= 8 ) {
				break;
			}
		}


		$used_product_ids = $featured_ids;

		foreach ( $filtered_latest_products as $latest_product ) {
			$used_product_ids[] = $latest_product->get_id();
		}


		$filtered_best_selling_products = array();

		foreach ( $best_selling_products as $best_selling_product ) {

			if ( ! $best_selling_product instanceof WC_Product ) {
				continue;
			}

			if ( in_array( $best_selling_product->get_id(), $used_product_ids, true ) ) {
				continue;
			}

			$filtered_best_selling_products[] = $best_selling_product;

			if ( count( $filtered_best_selling_products ) >= 8 ) {
				break;
			}
		}
		?>


		<!-- =================================================
		     PRODUCT CATEGORIES
		================================================== -->

		<section
			class="ts-store-categories"
			aria-labelledby="ts-categories-title"
		>

			<div class="ts-container">

				<div class="ts-section-heading">

					<div>

						<span class="ts-store-eyebrow">
							<?php
							esc_html_e(
								'Ø§Ø³ØªÙƒØ´Ù Ø§Ù„Ø£Ù‚Ø³Ø§Ù…',
								'trade-sphare-pro'
							);
							?>
						</span>

						<h2 id="ts-categories-title">
							<?php
							esc_html_e(
								'ØªØ³ÙˆÙ‚ Ø­Ø³Ø¨ Ø§Ù„ÙØ¦Ø©',
								'trade-sphare-pro'
							);
							?>
						</h2>

					</div>


					<a
						class="ts-text-link"
						href="<?php echo esc_url( wc_get_page_permalink( 'shop' ) ); ?>"
					>
						<?php
						esc_html_e(
							'Ø¹Ø±Ø¶ ÙƒÙ„ Ø§Ù„Ù…Ù†ØªØ¬Ø§Øª',
							'trade-sphare-pro'
						);
						?>
					</a>

				</div>


				<div class="ts-category-grid">

					<?php if ( ! empty( $product_categories ) ) : ?>

						<?php foreach ( $product_categories as $category ) : ?>

							<?php
							$category_link = get_term_link( $category );

							if ( is_wp_error( $category_link ) ) {
								continue;
							}

							$thumbnail_id = (int) get_term_meta(
								$category->term_id,
								'thumbnail_id',
								true
							);
							?>

							<a
								class="ts-category-card"
								href="<?php echo esc_url( $category_link ); ?>"
								aria-label="<?php echo esc_attr( $category->name ); ?>"
							>

								<div class="ts-category-image">

									<?php if ( $thumbnail_id ) : ?>

										<?php
										echo wp_get_attachment_image(
											$thumbnail_id,
											'medium',
											false,
											array(
												'loading'  => 'lazy',
												'decoding' => 'async',
												'alt'      => $category->name,
											)
										);
										?>

									<?php else : ?>

										<span class="ts-category-placeholder">
											<?php
											esc_html_e(
												'ØªØµÙ†ÙŠÙ',
												'trade-sphare-pro'
											);
											?>
										</span>

									<?php endif; ?>

								</div>


								<div class="ts-category-content">

									<h3>
										<?php echo esc_html( $category->name ); ?>
									</h3>

									<span>
										<?php
										printf(
											esc_html(
												_n(
													'%s Ù…Ù†ØªØ¬',
													'%s Ù…Ù†ØªØ¬Ø§Øª',
													(int) $category->count,
													'trade-sphare-pro'
												)
											),
											esc_html(
												number_format_i18n(
													(int) $category->count
												)
											)
										);
										?>
									</span>

								</div>

							</a>

						<?php endforeach; ?>

					<?php else : ?>

						<div class="ts-store-empty">

							<p>
								<?php
								esc_html_e(
									'Ù„Ù… ØªØªÙ… Ø¥Ø¶Ø§ÙØ© ØªØµÙ†ÙŠÙØ§Øª Ù„Ù„Ù…Ù†ØªØ¬Ø§Øª Ø¨Ø¹Ø¯.',
									'trade-sphare-pro'
								);
								?>
							</p>

						</div>

					<?php endif; ?>

				</div>

			</div>

		</section>


		<!-- =================================================
		     FEATURED PRODUCTS
		================================================== -->

		<section
			id="featured-products"
			class="ts-store-products"
			aria-labelledby="ts-featured-products-title"
		>

			<div class="ts-container">

				<div class="ts-section-heading">

					<div>

						<span class="ts-store-eyebrow">
							<?php
							esc_html_e(
								'Ù…Ø®ØªØ§Ø±Ø§ØªÙ†Ø§',
								'trade-sphare-pro'
							);
							?>
						</span>

						<h2 id="ts-featured-products-title">
							<?php
							esc_html_e(
								'Ù…Ù†ØªØ¬Ø§Øª Ù…Ù…ÙŠØ²Ø©',
								'trade-sphare-pro'
							);
							?>
						</h2>

					</div>


					<a
						class="ts-text-link"
						href="<?php echo esc_url( wc_get_page_permalink( 'shop' ) ); ?>"
					>
						<?php
						esc_html_e(
							'Ø§Ù„Ù…Ø²ÙŠØ¯ Ù…Ù† Ø§Ù„Ù…Ù†ØªØ¬Ø§Øª',
							'trade-sphare-pro'
						);
						?>
					</a>

				</div>


				<div class="ts-product-grid">

					<?php if ( ! empty( $featured_products ) ) : ?>

						<?php foreach ( $featured_products as $featured_product ) : ?>

							<?php
							$GLOBALS['product'] = $featured_product;

							wc_get_template_part(
								'content',
								'product'
							);
							?>

						<?php endforeach; ?>

					<?php else : ?>

						<div class="ts-store-empty">

							<p>
								<?php
								esc_html_e(
									'Ù„Ù… ØªØªÙ… Ø¥Ø¶Ø§ÙØ© Ù…Ù†ØªØ¬Ø§Øª Ù…Ù…ÙŠØ²Ø© Ø¨Ø¹Ø¯.',
									'trade-sphare-pro'
								);
								?>
							</p>

							<a
								class="ts-button"
								href="<?php echo esc_url( wc_get_page_permalink( 'shop' ) ); ?>"
							>
								<?php
								esc_html_e(
									'Ø²ÙŠØ§Ø±Ø© Ø§Ù„Ù…ØªØ¬Ø±',
									'trade-sphare-pro'
								);
								?>
							</a>

						</div>

					<?php endif; ?>

				</div>

			</div>

		</section>


		<!-- =================================================
		     LATEST PRODUCTS
		================================================== -->

		<?php if ( ! empty( $filtered_latest_products ) ) : ?>

			<section
				class="ts-store-products"
				aria-labelledby="ts-latest-products-title"
			>

				<div class="ts-container">

					<div class="ts-section-heading">

						<div>

							<span class="ts-store-eyebrow">
								<?php
								esc_html_e(
									'ÙˆØµÙ„ Ø­Ø¯ÙŠØ«Ù‹Ø§',
									'trade-sphare-pro'
								);
								?>
							</span>

							<h2 id="ts-latest-products-title">
								<?php
								esc_html_e(
									'Ø£Ø­Ø¯Ø« Ø§Ù„Ù…Ù†ØªØ¬Ø§Øª',
									'trade-sphare-pro'
								);
								?>
							</h2>

						</div>


						<a
							class="ts-text-link"
							href="<?php echo esc_url( wc_get_page_permalink( 'shop' ) ); ?>"
						>
							<?php
							esc_html_e(
								'Ù…Ø´Ø§Ù‡Ø¯Ø© Ø§Ù„ÙƒÙ„',
								'trade-sphare-pro'
							);
							?>
						</a>

					</div>


					<div class="ts-product-grid">

						<?php foreach ( $filtered_latest_products as $latest_product ) : ?>

							<?php
							$GLOBALS['product'] = $latest_product;

							wc_get_template_part(
								'content',
								'product'
							);
							?>

						<?php endforeach; ?>

					</div>

				</div>

			</section>

		<?php endif; ?>


		<!-- =================================================
		     BEST SELLING
		================================================== -->

		<?php if ( ! empty( $filtered_best_selling_products ) ) : ?>

			<section
				class="ts-store-products"
				aria-labelledby="ts-best-selling-title"
			>

				<div class="ts-container">

					<div class="ts-section-heading">

						<div>

							<span class="ts-store-eyebrow">
								<?php
								esc_html_e(
									'Ø§Ù„Ø£ÙƒØ«Ø± Ø·Ù„Ø¨Ù‹Ø§',
									'trade-sphare-pro'
								);
								?>
							</span>

							<h2 id="ts-best-selling-title">
								<?php
								esc_html_e(
									'Ø§Ù„Ø£ÙƒØ«Ø± Ù…Ø¨ÙŠØ¹Ù‹Ø§',
									'trade-sphare-pro'
								);
								?>
							</h2>

						</div>


						<a
							class="ts-text-link"
							href="<?php echo esc_url( wc_get_page_permalink( 'shop' ) ); ?>"
						>
							<?php
							esc_html_e(
								'Ù…Ø´Ø§Ù‡Ø¯Ø© Ø§Ù„ÙƒÙ„',
								'trade-sphare-pro'
							);
							?>
						</a>

					</div>


					<div class="ts-product-grid">

						<?php foreach ( $filtered_best_selling_products as $best_selling_product ) : ?>

							<?php
							$GLOBALS['product'] = $best_selling_product;

							wc_get_template_part(
								'content',
								'product'
							);
							?>

						<?php endforeach; ?>

					</div>

				</div>

			</section>

		<?php endif; ?>


		<!-- =================================================
		     STORE TRUST / CTA
		================================================== -->

		<section class="ts-store-cta">

			<div class="ts-container">

				<div class="ts-store-cta-box">

					<div>

						<span class="ts-store-eyebrow">
							<?php
							esc_html_e(
								'Ø¬Ø§Ù‡Ø² Ù„Ù„Ø¨Ø¯Ø¡ØŸ',
								'trade-sphare-pro'
							);
							?>
						</span>

						<h2>
							<?php
							esc_html_e(
								'Ø§Ø¹Ø«Ø± Ø¹Ù„Ù‰ Ù…Ø§ ØªØ­ØªØ§Ø¬Ù‡ Ø¨Ø³Ù‡ÙˆÙ„Ø©.',
								'trade-sphare-pro'
							);
							?>
						</h2>

						<p>
							<?php
							esc_html_e(
								'Ø§Ø³ØªÙƒØ´Ù Ù…Ø¬Ù…ÙˆØ¹ØªÙ†Ø§ ÙˆØ§ÙƒØªØ´Ù Ø§Ù„Ù…Ù†ØªØ¬Ø§Øª Ø§Ù„ØªÙŠ ØªÙ†Ø§Ø³Ø¨ Ø§Ø­ØªÙŠØ§Ø¬Ø§ØªÙƒ.',
								'trade-sphare-pro'
							);
							?>
						</p>

					</div>


					<a
						class="ts-button"
						href="<?php echo esc_url( wc_get_page_permalink( 'shop' ) ); ?>"
					>
						<?php
						esc_html_e(
							'ØªØµÙØ­ Ø§Ù„Ù…ØªØ¬Ø±',
							'trade-sphare-pro'
						);
						?>
					</a>

				</div>

			</div>

		</section>

	<?php endif; ?>

<?php
get_footer();