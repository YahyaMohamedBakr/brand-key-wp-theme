<?php
/**
 * Template part: Portfolio section (homepage)
 *
 * Displays latest projects from bk_project CPT in a slider.
 *
 * @package BrandKey
 */

$projects_query = new WP_Query( array(
	'post_type'      => 'bk_project',
	'posts_per_page' => 3,
	'orderby'        => 'date',
	'order'          => 'DESC',
) );

$default_projects = array(
	array(
		'title'  => __( 'منصة تجارة إلكترونية متكاملة', 'brandkey' ),
		'excerpt'=> __( 'قمنا بتطوير منصة تجارة إلكترونية متكاملة تضم آلاف المنتجات مع نظام دفع آمن ولوحة تحكم متقدمة لإدارة المخزون والطلبات.', 'brandkey' ),
		'img'    => 'project-img1.png',
		'tags'   => array( __( 'تطوير المواقع', 'brandkey' ), __( 'التجارة الإلكترونية', 'brandkey' ), __( 'UX/UI', 'brandkey' ) ),
	),
	array(
		'title'  => __( 'هوية بصرية لعلامة تجارية', 'brandkey' ),
		'excerpt'=> __( 'صممنا هوية بصرية متكاملة لعلامة تجارية ناشئة شملت الشعار والألوان والخطوط والمطبوعات لتعزيز حضورها في السوق.', 'brandkey' ),
		'img'    => 'project-img2.png',
		'tags'   => array( __( 'الهوية البصرية', 'brandkey' ), __( 'التصميم الجرافيكي', 'brandkey' ), __( 'البراندينج', 'brandkey' ) ),
	),
	array(
		'title'  => __( 'تطبيق جوال لإدارة المهام', 'brandkey' ),
		'excerpt'=> __( 'طوّرنا تطبيق جوال ذكي لإدارة المهام والمشاريع يتيح للمستخدمين تنظيم عملهم ومتابعة تقدمهم بسهولة عبر واجهة بسيطة وأنيقة.', 'brandkey' ),
		'img'    => 'project-img3.png',
		'tags'   => array( __( 'تطبيقات الجوال', 'brandkey' ), __( 'تطوير البرمجيات', 'brandkey' ), __( 'UX/UI', 'brandkey' ) ),
	),
);
?>

<section class="portfolio" id="portfolio">
	<div class="portfolio-container">

		<header class="portfolio-head" id="portfolioHead">
			<span class="portfolio-eyebrow"><?php esc_html_e( 'أعمالنا الأخيرة', 'brandkey' ); ?></span>
			<h2 class="portfolio-title"><?php echo esc_html( get_theme_mod( 'brandkey_portfolio_title', __( 'آخر أعمالنا', 'brandkey' ) ) ); ?></h2>
			<img src="<?php echo esc_url( BRANDKEY_URI . '/assets/icons/heading-line.png' ); ?>" alt="" class="heading-line portfolio-heading-line" aria-hidden="true" />
			<p class="portfolio-desc">
				<?php echo esc_html( get_theme_mod( 'brandkey_portfolio_desc', __( 'مجموعة مختارة من أحدث المشاريع التي أنجزناها لعملائنا — نفتخر بكل مشروع ونحرص على تقديم أفضل النتائج التي تلبي تطلعات عملائنا.', 'brandkey' ) ) ); ?>
			</p>
		</header>

		<div class="portfolio-slider" id="portfolioSlider" aria-roledescription="carousel" aria-label="<?php esc_attr_e( 'آخر أعمالنا', 'brandkey' ); ?>">
			<div class="portfolio-viewport">
				<div class="portfolio-track" id="portfolioTrack">

					<?php
					$i = 0;
					if ( $projects_query->have_posts() ) :
						while ( $projects_query->have_posts() ) : $projects_query->the_post();
							$tags    = get_post_meta( get_the_ID(), '_bk_project_services', true );
							$tags_arr= $tags ? array_map( 'trim', explode( ',', $tags ) ) : array();
							?>
							<article class="portfolio-card" data-index="<?php echo esc_attr( $i ); ?>" role="group" aria-roledescription="slide" aria-label="<?php echo esc_attr( $i + 1 ); ?> من <?php echo esc_attr( $projects_query->found_posts ); ?>">
								<div class="portfolio-card-visual">
									<?php if ( has_post_thumbnail() ) : ?>
										<img src="<?php the_post_thumbnail_url( 'brandkey-card' ); ?>" alt="<?php the_title_attribute(); ?>" class="portfolio-card-img" />
									<?php else : ?>
										<img src="<?php echo esc_url( BRANDKEY_URI . '/assets/icons/project-img1.png' ); ?>" alt="<?php the_title_attribute(); ?>" class="portfolio-card-img" />
									<?php endif; ?>
								</div>
								<div class="portfolio-card-body">
									<h3 class="portfolio-card-title"><?php the_title(); ?></h3>
									<p class="portfolio-card-excerpt"><?php echo esc_html( brandkey_get_excerpt( get_the_ID(), 25 ) ); ?></p>
									<?php if ( ! empty( $tags_arr ) ) : ?>
										<div class="portfolio-card-tags">
											<?php foreach ( $tags_arr as $tag ) : ?>
												<span class="portfolio-tag"><?php echo esc_html( $tag ); ?></span>
											<?php endforeach; ?>
										</div>
									<?php endif; ?>
									<a href="<?php the_permalink(); ?>" class="portfolio-card-btn">
										<span><?php esc_html_e( 'رؤية المشروع كاملاً', 'brandkey' ); ?></span>
										<img src="<?php echo esc_url( BRANDKEY_URI . '/assets/icons/gold-arrow.svg' ); ?>" alt="" />
									</a>
								</div>
							</article>
							<?php
							$i++;
						endwhile;
						wp_reset_postdata();
					else :
						foreach ( $default_projects as $idx => $project ) :
							?>
							<article class="portfolio-card" data-index="<?php echo esc_attr( $idx ); ?>" role="group" aria-roledescription="slide" aria-label="<?php echo esc_attr( $idx + 1 ); ?> من 3">
								<div class="portfolio-card-visual">
									<img src="<?php echo esc_url( BRANDKEY_URI . '/assets/icons/' . $project['img'] ); ?>" alt="<?php echo esc_attr( $project['title'] ); ?>" class="portfolio-card-img" />
								</div>
								<div class="portfolio-card-body">
									<h3 class="portfolio-card-title"><?php echo esc_html( $project['title'] ); ?></h3>
									<p class="portfolio-card-excerpt"><?php echo esc_html( $project['excerpt'] ); ?></p>
									<div class="portfolio-card-tags">
										<?php foreach ( $project['tags'] as $tag ) : ?>
											<span class="portfolio-tag"><?php echo esc_html( $tag ); ?></span>
										<?php endforeach; ?>
									</div>
									<a href="<?php echo esc_url( home_url( '/portfolio' ) ); ?>" class="portfolio-card-btn">
										<span><?php esc_html_e( 'رؤية المشروع كاملاً', 'brandkey' ); ?></span>
										<img src="<?php echo esc_url( BRANDKEY_URI . '/assets/icons/gold-arrow.svg' ); ?>" alt="" />
									</a>
								</div>
							</article>
							<?php
						endforeach;
					endif;
					?>

				</div>
			</div>

			<div class="portfolio-controls" id="portfolioControls">
				<button class="portfolio-arrow portfolio-arrow--prev" id="portfolioPrev" aria-label="<?php esc_attr_e( 'المشروع السابق', 'brandkey' ); ?>" type="button">
					<img src="<?php echo esc_url( BRANDKEY_URI . '/assets/icons/arrow-active.svg' ); ?>" alt="" />
				</button>
				<div class="portfolio-dots" id="portfolioDots" role="tablist" aria-label="<?php esc_attr_e( 'اختيار المشروع', 'brandkey' ); ?>">
					<button class="portfolio-dot" data-go="0" type="button" aria-label="<?php esc_attr_e( 'المشروع الأول', 'brandkey' ); ?>"></button>
					<button class="portfolio-dot active" data-go="1" type="button" aria-label="<?php esc_attr_e( 'المشروع الثاني', 'brandkey' ); ?>"></button>
					<button class="portfolio-dot" data-go="2" type="button" aria-label="<?php esc_attr_e( 'المشروع الثالث', 'brandkey' ); ?>"></button>
				</div>
				<button class="portfolio-arrow portfolio-arrow--next" id="portfolioNext" aria-label="<?php esc_attr_e( 'المشروع التالي', 'brandkey' ); ?>" type="button">
					<img src="<?php echo esc_url( BRANDKEY_URI . '/assets/icons/arrow-active.svg' ); ?>" alt="" class="portfolio-arrow-flip" />
				</button>
			</div>
		</div>

		<div class="portfolio-actions" id="portfolioActions">
			<a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="portfolio-action portfolio-action--primary">
				<span><?php esc_html_e( 'ابدأ مشروعك الآن', 'brandkey' ); ?></span>
				<img src="<?php echo esc_url( BRANDKEY_URI . '/assets/icons/start-icon.svg' ); ?>" alt="" />
			</a>
			<a href="<?php echo esc_url( home_url( '/portfolio' ) ); ?>" class="portfolio-action portfolio-action--outline">
				<span><?php esc_html_e( 'اعرف المزيد', 'brandkey' ); ?></span>
				<img src="<?php echo esc_url( BRANDKEY_URI . '/assets/icons/more-arrow.svg' ); ?>" alt="" />
			</a>
		</div>

	</div>
</section>
