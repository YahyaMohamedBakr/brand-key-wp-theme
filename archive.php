<?php
/**
 * The template for displaying archive pages (blog listing)
 *
 * @package BrandKey
 */

get_header();
?>

<main class="page-content" id="pageContent">

	<!-- ===================== هيرو المدونة ===================== -->
	<section class="blog-hero" id="blogHero">
		<div class="blog-hero-container">
			<nav class="breadcrumbs" aria-label="<?php esc_attr_e( 'مسار التنقل', 'brandkey' ); ?>">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="breadcrumb-link"><?php esc_html_e( 'الرئيسية', 'brandkey' ); ?></a>
				<span class="breadcrumb-sep">&gt;</span>
				<span class="breadcrumb-current"><?php esc_html_e( 'المدونة', 'brandkey' ); ?></span>
			</nav>

			<h1 class="blog-hero-title"><?php esc_html_e( 'المدونة', 'brandkey' ); ?></h1>
			<p class="blog-hero-desc"><?php esc_html_e( 'أحدث المقالات والأخبار في عالم التسويق الرقمي والتقنية', 'brandkey' ); ?></p>
		</div>
	</section>

	<!-- ===================== قائمة المقالات ===================== -->
	<section class="blog-listing" id="blogListing">
		<div class="blog-container">

			<?php if ( have_posts() ) : ?>

				<div class="blog-grid">
					<?php while ( have_posts() ) : the_post(); ?>
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
					<?php endwhile; ?>
				</div>

				<?php
				the_posts_pagination( array(
					'prev_text' => __( 'السابق', 'brandkey' ),
					'next_text' => __( 'التالي', 'brandkey' ),
				) );
				?>

			<?php else : ?>
				<p><?php esc_html_e( 'لا توجد مقالات.', 'brandkey' ); ?></p>
			<?php endif; ?>

		</div>
	</section>

</main>

<?php
get_footer();
