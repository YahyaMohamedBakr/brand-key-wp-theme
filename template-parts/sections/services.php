<?php
/**
 * Template part: Services section (homepage)
 *
 * Displays services from bk_service CPT in accordion cards.
 *
 * @package BrandKey
 */

// جلب الخدمات من CPT
$services_query = new WP_Query( array(
	'post_type'      => 'bk_service',
	'posts_per_page' => 6,
	'orderby'        => 'menu_order',
	'order'          => 'ASC',
) );

// لو مفيش خدمات، استخدم بيانات افتراضية
if ( ! $services_query->have_posts() ) {
	$default_services = array(
		array(
			'title' => __( 'المحتوى الإبداعي', 'brandkey' ),
			'desc'  => __( 'محتوى إبداعي يجذب انتباه جمهورك ويعكس هوية علامتك التجارية بأسلوب مميز.', 'brandkey' ),
			'icon'  => 'service-content.png',
			'tags'  => array( __( 'كتابة المحتوى', 'brandkey' ), __( 'التصميم الإبداعي', 'brandkey' ), __( 'إنتاج الفيديو', 'brandkey' ) ),
		),
		array(
			'title' => __( 'التسويق والنمو', 'brandkey' ),
			'desc'  => __( 'خدمات تسويقية مبتكرة لتعزيز نمو أعمالك ووصولك لجمهورك المستهدف.', 'brandkey' ),
			'icon'  => 'service-marketing.png',
			'tags'  => array( __( 'التسويق الرقمي', 'brandkey' ), __( 'إدارة الحملات الإعلانية', 'brandkey' ), __( 'تحسين المحتوى', 'brandkey' ) ),
		),
		array(
			'title' => __( 'الحلول التقنية والمتاجر', 'brandkey' ),
			'desc'  => __( 'حلول تقنية متقدمة لبناء وتطوير متاجرك الإلكترونية وتطبيقاتك بأعلى المعايير.', 'brandkey' ),
			'icon'  => 'service-tech.png',
			'tags'  => array( __( 'تطوير المواقع', 'brandkey' ), __( 'المتاجر الإلكترونية', 'brandkey' ), __( 'تطبيقات الهواتف', 'brandkey' ) ),
		),
	);
}
?>

<section class="services" id="services">
	<div class="services-container">

		<div class="services-grid">

			<!-- العمود الأيسر: العنوان + الوصف + الأزرار -->
			<div class="services-sidebar" id="servicesSidebar">
				<h2 class="services-title"><?php echo esc_html( get_theme_mod( 'brandkey_services_title', __( 'خدماتنا', 'brandkey' ) ) ); ?></h2>
				<img src="<?php echo esc_url( BRANDKEY_URI . '/assets/icons/heading-line.png' ); ?>" alt="" class="heading-line services-heading-line" aria-hidden="true" />
				<p class="services-desc">
					<?php echo esc_html( get_theme_mod( 'brandkey_services_desc', __( 'نقدم لك حلولاً تسويقية متكاملة تجمع بين الإبداع والاحترافية — من التخطيط الاستراتيجي حتى التنفيذ والمتابعة، نحن معك في كل خطوة.', 'brandkey' ) ) ); ?>
				</p>
				<div class="services-actions">
					<a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="services-btn-primary">
						<span><?php esc_html_e( 'ابدأ رحلتك معنا الآن', 'brandkey' ); ?></span>
						<img src="<?php echo esc_url( BRANDKEY_URI . '/assets/icons/start-icon.svg' ); ?>" alt="" />
					</a>
					<a href="<?php echo esc_url( home_url( '/services' ) ); ?>" class="services-btn-link">
						<span><?php esc_html_e( 'اكتشف جميع خدماتنا', 'brandkey' ); ?></span>
						<img src="<?php echo esc_url( BRANDKEY_URI . '/assets/icons/more-arrow.svg' ); ?>" alt="" />
					</a>
				</div>
			</div>

			<!-- العمود الأيمن: كروت الخدمات (accordion) -->
			<div class="services-cards" id="servicesCards">

				<?php
				$index = 0;

				// لو فيه خدمات في الـ CPT
				if ( $services_query->have_posts() ) :
					while ( $services_query->have_posts() ) : $services_query->the_post();
						$subtitle = get_post_meta( get_the_ID(), '_bk_service_subtitle', true );
						$icon_id  = get_post_meta( get_the_ID(), '_bk_service_icon', true );
						$icon_url = $icon_id ? wp_get_attachment_image_url( $icon_id, 'full' ) : BRANDKEY_URI . '/assets/icons/service-content.png';
						$desc     = $subtitle ? $subtitle : brandkey_get_excerpt( get_the_ID(), 15 );
						?>
						<article class="service-card<?php echo 0 === $index ? ' active' : ''; ?>" data-service="<?php echo esc_attr( $index ); ?>">
							<button class="service-card-header" aria-expanded="<?php echo 0 === $index ? 'true' : 'false'; ?>">
								<div class="service-card-img">
									<img src="<?php echo esc_url( $icon_url ); ?>" alt="<?php the_title_attribute(); ?>" />
								</div>
								<div class="service-card-info">
									<h3 class="service-card-title"><?php the_title(); ?></h3>
									<p class="service-card-desc"><?php echo esc_html( $desc ); ?></p>
								</div>
								<span class="service-card-toggle">
									<svg width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M5 8L10 13L15 8" stroke="#927F07" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
								</span>
							</button>
							<div class="service-card-tags">
								<a href="<?php the_permalink(); ?>" class="service-tag">
									<span><?php esc_html_e( 'عرض التفاصيل', 'brandkey' ); ?></span>
									<img src="<?php echo esc_url( BRANDKEY_URI . '/assets/icons/service-arrow.svg' ); ?>" alt="" />
								</a>
							</div>
						</article>
						<?php
						$index++;
					endwhile;
					wp_reset_postdata();

				// لو مفيش خدمات، استخدم الافتراضية
				else :
					foreach ( $default_services as $i => $service ) :
						?>
						<article class="service-card<?php echo 0 === $i ? ' active' : ''; ?>" data-service="<?php echo esc_attr( $i ); ?>">
							<button class="service-card-header" aria-expanded="<?php echo 0 === $i ? 'true' : 'false'; ?>">
								<div class="service-card-img">
									<img src="<?php echo esc_url( BRANDKEY_URI . '/assets/icons/' . $service['icon'] ); ?>" alt="<?php echo esc_attr( $service['title'] ); ?>" />
								</div>
								<div class="service-card-info">
									<h3 class="service-card-title"><?php echo esc_html( $service['title'] ); ?></h3>
									<p class="service-card-desc"><?php echo esc_html( $service['desc'] ); ?></p>
								</div>
								<span class="service-card-toggle">
									<svg width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M5 8L10 13L15 8" stroke="#927F07" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
								</span>
							</button>
							<div class="service-card-tags">
								<?php foreach ( $service['tags'] as $tag ) : ?>
									<a href="#" class="service-tag">
										<span><?php echo esc_html( $tag ); ?></span>
										<img src="<?php echo esc_url( BRANDKEY_URI . '/assets/icons/service-arrow.svg' ); ?>" alt="" />
									</a>
								<?php endforeach; ?>
							</div>
						</article>
						<?php
					endforeach;
				endif;
				?>

			</div>

		</div>

	</div>
</section>
