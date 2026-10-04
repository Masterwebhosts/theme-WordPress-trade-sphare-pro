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
							'مرحبًا بك في Trade Sphare',
							'trade-sphare-pro'
						);
						?>
					</span>

					<h1 class="ts-store-hero-title">
						<?php
						esc_html_e(
							'اكتشف منتجات تستحق مكانًا في متجرك',
							'trade-sphare-pro'
						);
						?>
					</h1>

					<p class="ts-store-hero-description">
						<?php
						esc_html_e(
							'تجربة تسوق واضحة وسريعة مع منتجات مختارة، أسعار منافسة، ودفع آمن.',
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
									'تصفح المتجر',
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
								'اكتشف المنتجات',
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
								'تسوق بثقة',
								'trade-sphare-pro'
							);
							?>
						</span>

						<strong>
							<?php
							esc_html_e(
								'جودة • سرعة • أمان',
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
						'مزايا التسوق',
						'trade-sphare-pro'
					);
					?>
				</h2>
			</div>

			<div class="ts-benefits-grid">

				<article class="ts-benefit-card">

					<span class="ts-benefit-number">01</span>

					<div>
						<h3>
							<?php
							esc_html_e(
								'دفع آمن',
								'trade-sphare-pro'
							);
							?>
						</h3>

						<p>
							<?php
							esc_html_e(
								'عملية شراء بسيطة وآمنة من البداية حتى تأكيد الطلب.',
								'trade-sphare-pro'
							);
							?>
						</p>
					</div>

				</article>

				<article class="ts-benefit-card">

					<span class="ts-benefit-number">02</span>

					<div>
						<h3>
							<?php
							esc_html_e(
								'شحن سريع',
								'trade-sphare-pro'
							);
							?>
						</h3>

						<p>
							<?php
							esc_html_e(
								'نجهز الطلبات بسرعة مع تجربة توصيل واضحة.',
								'trade-sphare-pro'
							);
							?>
						</p>
					</div>

				</article>

				<article class="ts-benefit-card">

					<span class="ts-benefit-number">03</span>

					<div>
						<h3>
							<?php
							esc_html_e(
								'اختيارات موثوقة',
								'trade-sphare-pro'
							);
							?>
						</h3>

						<p>
							<?php
							esc_html_e(
								'منتجات مرتبة وواضحة لتصل لما تبحث عنه بسهولة.',
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
								'استكشف الأقسام',
								'trade-sphare-pro'
							);
							?>
						</span>

						<h2 id="ts-categories-title">
							<?php
							esc_html_e(
								'تسوق حسب الفئة',
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
							'عرض كل المنتجات',
							'trade-sphare-pro'
						);
						?>
					</a>

				</div>

				<div class="ts-category-grid">

					<?php
					$product_categories = get_terms(
						array(
							'taxonomy'   => 'product_cat',
							'hide_empty' => true,
							'number'     => 6,
						)
					);
					?>

					<?php if ( ! is_wp_error( $product_categories ) && ! empty( $product_categories ) ) : ?>

						<?php foreach ( $product_categories as $category ) : ?>

							<?php
							$category_link = get_term_link( $category );
							$thumbnail_id  = get_term_meta(
								$category->term_id,
								'thumbnail_id',
								true
							);
							?>

							<a
								class="ts-category-card"
								href="<?php echo esc_url( $category_link ); ?>"
							>

								<div class="ts-category-image">

									<?php if ( $thumbnail_id ) : ?>

										<?php
										echo wp_get_attachment_image(
											$thumbnail_id,
											'medium',
											false,
											array(
												'loading' => 'lazy',
											)
										);
										?>

									<?php else : ?>

										<span class="ts-category-placeholder">
											<?php
											esc_html_e(
												'تصنيف',
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
											/* translators: %s: product count. */
											esc_html(
												_n(
													'%s منتج',
													'%s منتجات',
													$category->count,
													'trade-sphare-pro'
												)
											),
											esc_html(
												number_format_i18n(
													$category->count
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
							<?php
							esc_html_e(
								'لم تتم إضافة تصنيفات للمنتجات بعد.',
								'trade-sphare-pro'
							);
							?>
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
								'مختاراتنا',
								'trade-sphare-pro'
							);
							?>
						</span>

						<h2 id="ts-featured-products-title">
							<?php
							esc_html_e(
								'منتجات مميزة',
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
							'المزيد من المنتجات',
							'trade-sphare-pro'
						);
						?>
					</a>

				</div>

				<div class="ts-product-grid">

					<?php
					$featured_products = new WP_Query(
						array(
							'post_type'      => 'product',
							'post_status'    => 'publish',
							'posts_per_page' => 8,
							'no_found_rows'  => true,
							'tax_query'      => array(
								array(
									'taxonomy' => 'product_visibility',
									'field'    => 'name',
									'terms'    => array( 'featured' ),
								),
							),
						)
					);
					?>

					<?php if ( $featured_products->have_posts() ) : ?>

						<?php while ( $featured_products->have_posts() ) : ?>

							<?php $featured_products->the_post(); ?>

							<?php wc_get_template_part( 'content', 'product' ); ?>

						<?php endwhile; ?>

						<?php wp_reset_postdata(); ?>

					<?php else : ?>

						<div class="ts-store-empty">

							<p>
								<?php
								esc_html_e(
									'لم تتم إضافة منتجات مميزة بعد.',
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
									'زيارة المتجر',
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
		     CTA
		================================================== -->

		<section class="ts-store-cta">

			<div class="ts-container">

				<div class="ts-store-cta-box">

					<div>
						<span class="ts-store-eyebrow">
							<?php
							esc_html_e(
								'جاهز للبدء؟',
								'trade-sphare-pro'
							);
							?>
						</span>

						<h2>
							<?php
							esc_html_e(
								'اعثر على ما تحتاجه بسهولة.',
								'trade-sphare-pro'
							);
							?>
						</h2>

						<p>
							<?php
							esc_html_e(
								'استكشف مجموعتنا واكتشف المنتجات التي تناسب احتياجاتك.',
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
							'تصفح المتجر',
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