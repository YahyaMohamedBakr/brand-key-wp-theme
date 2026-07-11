<?php
/**
 * Template part: Sectors section (homepage)
 *
 * Displays sectors from bk_sector CPT.
 *
 * @package BrandKey
 */

// جلب القطاعات من CPT
$sectors_query = new WP_Query( array(
	'post_type'      => 'bk_sector',
	'posts_per_page' => 11,
	'orderby'        => 'menu_order',
	'order'          => 'ASC',
) );

// بيانات افتراضية لو مفيش قطاعات
$default_sectors = array(
	array( 'title' => __( 'السياحة والسفر', 'brandkey' ), 'desc' => __( 'حجوزات الطيران والفنادق، تنظيم الرحلات والبرامج السياحية المتكاملة', 'brandkey' ) ),
	array( 'title' => __( 'القطاع الطبي', 'brandkey' ), 'desc' => __( 'المستشفيات والعيادات، خدمات الرعاية الصحية، والتجهيزات الطبية', 'brandkey' ) ),
	array( 'title' => __( 'التعليم والتدريب', 'brandkey' ), 'desc' => __( 'البرامج التدريبية المؤسسية، التطوير المهني، والحلول التعليمية الرقمية', 'brandkey' ) ),
	array( 'title' => __( 'قطاع الطاقة', 'brandkey' ), 'desc' => __( 'الطاقة المتجددة، الكهرباء، النفط والغاز، ومشاريع البنية التحتية للطاقة', 'brandkey' ) ),
	array( 'title' => __( 'مكاتب المحاماة', 'brandkey' ), 'desc' => __( 'الاستشارات القانونية، إعداد العقود، والتمثيل القانوني والتحكيم', 'brandkey' ) ),
	array( 'title' => __( 'التجارة الإلكترونية', 'brandkey' ), 'desc' => __( 'المتاجر الإلكترونية، بوابات الدفع، إدارة المخزون والشحن الرقمي', 'brandkey' ) ),
	array( 'title' => __( 'خدمات الأعمال', 'brandkey' ), 'desc' => __( 'الاستشارات الإدارية، تطوير الأعمال، والحلول التشغيلية للشركات', 'brandkey' ) ),
	array( 'title' => __( 'خدمات الاستقدام', 'brandkey' ), 'desc' => __( 'استقدام العمالة المنزلية والمهنية، إجراءات التأشيرات والخدمات العمالية', 'brandkey' ) ),
	array( 'title' => __( 'خدمات الصيانة', 'brandkey' ), 'desc' => __( 'صيانة المباني والمعدات، الكهرباء والتكييف، وخدمات الدعم الفني', 'brandkey' ) ),
	array( 'title' => __( 'المجال الصناعي', 'brandkey' ), 'desc' => __( 'المصانع والإنتاج، سلاسل الإمداد، والتحول الرقمي الصناعي', 'brandkey' ) ),
	array( 'title' => __( 'القطاع العقاري', 'brandkey' ), 'desc' => __( 'التطوير العقاري، إدارة الأملاك، التسويق العقاري والاستثمار', 'brandkey' ) ),
);
?>

<section class="sectors" id="sectors">
	<!-- عناصر زخرفية في الخلفية -->
	<img src="<?php echo esc_url( BRANDKEY_URI . '/assets/icons/sectors-vector.png' ); ?>" alt="" class="sectors-deco sectors-deco--vector" aria-hidden="true" />
	<img src="<?php echo esc_url( BRANDKEY_URI . '/assets/icons/sectors-frame.png' ); ?>" alt="" class="sectors-deco sectors-deco--frame" aria-hidden="true" />

	<div class="sectors-container">

		<header class="sectors-head" id="sectorsHead">
			<h2 class="sectors-title"><?php echo esc_html( get_theme_mod( 'brandkey_sectors_title', __( 'حلول مصممة لكل قطاع', 'brandkey' ) ) ); ?></h2>
			<img src="<?php echo esc_url( BRANDKEY_URI . '/assets/icons/heading-line.png' ); ?>" alt="" class="heading-line sectors-heading-line" aria-hidden="true" />
			<p class="sectors-desc">
				<?php echo esc_html( get_theme_mod( 'brandkey_sectors_desc', __( 'كل ما نحتاجه من خبرة وتخصص وابتكار وخدمة عالية الجودة نقدمه لعملائنا — والنتيجة هي علاقات طويلة الأمد، وثقة متبادلة، وتفوق دائم في الأداء.', 'brandkey' ) ) ); ?>
			</p>
		</header>

		<div class="sectors-grid" id="sectorsGrid">

			<?php
			$index = 0;

			if ( $sectors_query->have_posts() ) :
				while ( $sectors_query->have_posts() ) : $sectors_query->the_post();
					$subtitle = get_post_meta( get_the_ID(), '_bk_sector_subtitle', true );
					$desc     = $subtitle ? $subtitle : brandkey_get_excerpt( get_the_ID(), 12 );
					?>
					<a href="<?php the_permalink(); ?>" class="sector-card" data-card="<?php echo esc_attr( $index ); ?>">
						<div class="sector-card-icon">
							<?php
							if ( has_post_thumbnail() ) {
								the_post_thumbnail( 'thumbnail', array( 'alt' => '' ) );
							} else {
								echo '<svg width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3z" fill="white"/></svg>';
							}
							?>
						</div>
						<div class="sector-card-content">
							<h3 class="sector-card-title"><?php the_title(); ?></h3>
							<p class="sector-card-desc"><?php echo esc_html( $desc ); ?></p>
						</div>
						<span class="sector-card-arrow">
							<svg width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M16.6666 10H3.33331M8.33331 5L3.33331 10L8.33331 15" stroke="#F2C94C" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
						</span>
					</a>
					<?php
					$index++;
				endwhile;
				wp_reset_postdata();
			else :
				foreach ( $default_sectors as $i => $sector ) :
					?>
					<a href="<?php echo esc_url( home_url( '/sectors' ) ); ?>" class="sector-card" data-card="<?php echo esc_attr( $i ); ?>">
						<div class="sector-card-icon">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3z" fill="white"/></svg>
						</div>
						<div class="sector-card-content">
							<h3 class="sector-card-title"><?php echo esc_html( $sector['title'] ); ?></h3>
							<p class="sector-card-desc"><?php echo esc_html( $sector['desc'] ); ?></p>
						</div>
						<span class="sector-card-arrow">
							<svg width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M16.6666 10H3.33331M8.33331 5L3.33331 10L8.33331 15" stroke="#F2C94C" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
						</span>
					</a>
					<?php
				endforeach;
			endif;
			?>

		</div>

		<div class="sectors-more" id="sectorsMore">
			<a href="<?php echo esc_url( home_url( '/services' ) ); ?>" class="sectors-more-btn">
				<svg width="20" height="20" viewBox="0 0 20 20" fill="none" aria-hidden="true"><path d="M16.6666 10H3.33331M8.33331 5L3.33331 10L8.33331 15" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
				<span><?php esc_html_e( 'العودة إلى الخدمات', 'brandkey' ); ?></span>
			</a>
		</div>

	</div>
</section>
