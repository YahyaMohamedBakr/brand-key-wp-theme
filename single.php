<?php
/**
 * The template for displaying all single posts (articles)
 *
 * @package BrandKey
 */

get_header();
?>

<main class="page-content" id="pageContent">

	<?php
	while ( have_posts() ) :
		the_post();
		?>

		<!-- ===================== هيرو المقالة (Overlapping Card) ===================== -->
		<section class="article-hero" id="articleHero">

			<!-- فتات الخبز -->
			<div class="article-hero-breadcrumbs">
				<div class="article-hero-container">
					<nav class="breadcrumbs" aria-label="<?php esc_attr_e( 'مسار التنقل', 'brandkey' ); ?>">
						<a href="<?php echo esc_url( home_url( '/blog' ) ); ?>" class="breadcrumb-link"><?php esc_html_e( 'المدونة', 'brandkey' ); ?></a>
						<span class="breadcrumb-sep">&gt;</span>
						<span class="breadcrumb-current article-breadcrumb-active"><?php the_title(); ?></span>
					</nav>
				</div>
			</div>

			<!-- البانر + الكارت المتداخل -->
			<div class="article-hero-banner-wrap">
				<div class="article-hero-banner" id="articleHeroBanner">
					<?php if ( has_post_thumbnail() ) : ?>
						<div class="article-hero-bg" style="background-image: url('<?php the_post_thumbnail_url( 'brandkey-hero' ); ?>');"></div>
					<?php else : ?>
						<div class="article-hero-bg" style="background-image: url('<?php echo esc_url( BRANDKEY_URI . '/assets/images/article-hero-bg.png' ); ?>');"></div>
					<?php endif; ?>
					<div class="article-hero-overlay"></div>
				</div>

				<!-- كارت محتوى المقالة المتداخل -->
				<div class="article-hero-card" id="articleHeroCard">
					<div class="article-hero-container">
						<h1 class="article-hero-title"><?php the_title(); ?></h1>
						<p class="article-hero-desc"><?php echo esc_html( get_the_excerpt() ); ?></p>
					</div>
				</div>
			</div>

			<!-- شريط البيانات الوصفية ومشاركة المقال -->
			<div class="article-hero-meta-bar">
				<div class="article-hero-container">
					<div class="article-hero-meta">
						<div class="article-hero-meta-item">
							<svg width="16" height="16" viewBox="0 0 24 24" fill="none">
								<rect x="3" y="4" width="18" height="18" rx="2" stroke="currentColor" stroke-width="2"/>
								<path d="M16 2V6M8 2V6M3 10H21" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
							</svg>
							<span><?php echo esc_html( get_the_date( 'j F Y' ) ); ?></span>
						</div>
						<div class="article-hero-meta-item">
							<svg width="16" height="16" viewBox="0 0 24 24" fill="none">
								<circle cx="12" cy="8" r="4" stroke="currentColor" stroke-width="2"/>
								<path d="M4 21c0-4 4-7 8-7s8 3 8 7" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
							</svg>
							<span><?php echo esc_html( get_the_author() ); ?></span>
						</div>
						<div class="article-hero-meta-item">
							<svg width="16" height="16" viewBox="0 0 24 24" fill="none">
								<circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="2"/>
								<path d="M12 7v5l3 2" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
							<span><?php echo esc_html( brandkey_reading_time( get_the_ID() ) ); ?></span>
						</div>
					</div>

					<div class="article-hero-share">
						<span class="article-hero-share-label"><?php esc_html_e( 'شارك المقال:', 'brandkey' ); ?></span>
						<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo rawurlencode( get_permalink() ); ?>" target="_blank" rel="noopener" class="article-hero-share-btn article-hero-share-btn--fb" aria-label="<?php esc_attr_e( 'مشاركة على فيسبوك', 'brandkey' ); ?>">
							<svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M24 12.07C24 5.4 18.63 0 12 0S0 5.4 0 12.07C0 18.1 4.39 23.1 10.13 24v-8.44H7.08v-3.49h3.05V9.41c0-3.02 1.79-4.69 4.53-4.69 1.31 0 2.69.24 2.69.24v2.97h-1.52c-1.49 0-1.96.93-1.96 1.89v2.25h3.33l-.53 3.49h-2.8V24C19.61 23.1 24 18.1 24 12.07z"/></svg>
						</a>
						<a href="https://twitter.com/intent/tweet?url=<?php echo rawurlencode( get_permalink() ); ?>" target="_blank" rel="noopener" class="article-hero-share-btn article-hero-share-btn--tw" aria-label="<?php esc_attr_e( 'مشاركة على تويتر', 'brandkey' ); ?>">
							<svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24h-6.66l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231 5.45-6.231zm-1.161 17.52h1.833L7.084 4.126H5.117L17.083 19.77z"/></svg>
						</a>
						<a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo rawurlencode( get_permalink() ); ?>" target="_blank" rel="noopener" class="article-hero-share-btn article-hero-share-btn--in" aria-label="<?php esc_attr_e( 'مشاركة على لينكد إن', 'brandkey' ); ?>">
							<svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M20.45 20.45h-3.56v-5.57c0-1.33-.02-3.04-1.85-3.04-1.85 0-2.13 1.45-2.13 2.94v5.67H9.35V9h3.41v1.56h.05c.48-.9 1.64-1.85 3.37-1.85 3.6 0 4.27 2.37 4.27 5.45v6.29zM5.34 7.43a2.07 2.07 0 0 1-2.07-2.07c0-1.15.93-2.07 2.07-2.07s2.07.93 2.07 2.07c0 1.15-.93 2.07-2.07 2.07zM7.12 20.45H3.56V9h3.56v11.45zM22.22 0H1.77C.79 0 0 .77 0 1.73v20.54C0 23.23.79 24 1.77 24h20.45c.98 0 1.78-.77 1.78-1.73V1.73C24 .77 23.2 0 22.22 0z"/></svg>
						</a>
					</div>
				</div>
			</div>

		</section>

		<!-- ===================== جسم المقالة ===================== -->
		<article class="article-body" id="articleBody">
			<div class="article-body-container">
				<?php the_content(); ?>
			</div>
		</article>

		<!-- ===================== سيكشن مكرر: مستعد تبدأ رحلتك الرقمية ===================== -->
		<?php get_template_part( 'template-parts/sections/cta-final' ); ?>

		<!-- ===================== مقالات ذات صلة ===================== -->
		<?php
		$related = new WP_Query( array(
			'post_type'      => 'post',
			'posts_per_page' => 3,
			'post__not_in'   => array( get_the_ID() ),
			'orderby'        => 'rand',
		) );

		if ( $related->have_posts() ) :
		?>
		<section class="blog" id="articleRelated">
			<div class="blog-container">
				<header class="blog-head">
					<div class="blog-head-text">
						<h2 class="blog-title"><?php esc_html_e( 'مقالات ذات صلة', 'brandkey' ); ?></h2>
						<img src="<?php echo esc_url( BRANDKEY_URI . '/assets/icons/heading-line.png' ); ?>" alt="" class="heading-line blog-heading-line" aria-hidden="true" />
						<p class="blog-desc"><?php esc_html_e( 'مقالات تكمّن قراءتك لهذا المقال.', 'brandkey' ); ?></p>
					</div>
					<a href="<?php echo esc_url( home_url( '/blog' ) ); ?>" class="blog-more-link">
						<span><?php esc_html_e( 'المزيد', 'brandkey' ); ?></span>
						<img src="<?php echo esc_url( BRANDKEY_URI . '/assets/icons/more-arrow.svg' ); ?>" alt="" />
					</a>
				</header>

				<div class="blog-grid">
					<?php while ( $related->have_posts() ) : $related->the_post(); ?>
						<article class="blog-card">
							<a href="<?php the_permalink(); ?>" class="blog-card-link-wrap">
								<div class="blog-card-visual">
									<?php if ( has_post_thumbnail() ) : ?>
										<img src="<?php the_post_thumbnail_url( 'brandkey-card' ); ?>" alt="<?php the_title_attribute(); ?>" class="blog-card-img" />
									<?php endif; ?>
									<span class="blog-card-badge"><?php esc_html_e( 'الجديد', 'brandkey' ); ?></span>
								</div>
								<div class="blog-card-body">
									<h3 class="blog-card-title"><?php the_title(); ?></h3>
									<p class="blog-card-excerpt"><?php echo esc_html( brandkey_get_excerpt( get_the_ID(), 20 ) ); ?></p>
									<div class="blog-card-footer">
										<span class="blog-card-date"><?php echo esc_html( get_the_date( 'j F Y' ) ); ?></span>
										<span class="blog-card-link">
											<span><?php esc_html_e( 'المزيد', 'brandkey' ); ?></span>
											<img src="<?php echo esc_url( BRANDKEY_URI . '/assets/icons/gold-arrow.svg' ); ?>" alt="" />
										</span>
									</div>
								</div>
							</a>
						</article>
					<?php endwhile; wp_reset_postdata(); ?>
				</div>
			</div>
		</section>
		<?php endif; ?>

	<?php endwhile; ?>

</main>

<?php
get_footer();
