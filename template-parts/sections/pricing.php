<?php
/**
 * Template part: Pricing section (homepage)
 *
 * Displays pricing packages from bk_package CPT.
 *
 * @package BrandKey
 */

$packages_query = new WP_Query( array(
	'post_type'      => 'bk_package',
	'posts_per_page' => -1,
	'orderby'        => 'menu_order',
	'order'          => 'ASC',
) );

$default_packages = array(
	array(
		'title'    => __( 'الباقة الأساسية', 'brandkey' ),
		'price_m'  => '999',
		'price_y'  => '9990',
		'popular'  => false,
		'features' => array(
			__( 'تصميم هوية بصرية', 'brandkey' ),
			__( 'موقع تعريفي (5 صفحات)', 'brandkey' ),
			__( 'إدارة سوشيال ميديا (منصة واحدة)', 'brandkey' ),
			__( 'تقرير شهري', 'brandkey' ),
		),
	),
	array(
		'title'    => __( 'الباقة الاحترافية', 'brandkey' ),
		'price_m'  => '1999',
		'price_y'  => '19990',
		'popular'  => true,
		'features' => array(
			__( 'كل مميزات الباقة الأساسية', 'brandkey' ),
			__( 'متجر إلكتروني متكامل', 'brandkey' ),
			__( 'إدارة سوشيال ميديا (3 منصات)', 'brandkey' ),
			__( 'حملات إعلانية ممولة', 'brandkey' ),
			__( 'تقرير أسبوعي + تحسين مستمر', 'brandkey' ),
		),
	),
	array(
		'title'    => __( 'الباقة المخصصة', 'brandkey' ),
		'price_m'  => __( 'حسب الطلب', 'brandkey' ),
		'price_y'  => __( 'حسب الطلب', 'brandkey' ),
		'popular'  => false,
		'features' => array(
			__( 'حلول مخصصة بالكامل', 'brandkey' ),
			__( 'فريق متخصص مخصص', 'brandkey' ),
			__( 'دعم فني 24/7', 'brandkey' ),
			__( 'استشارات استراتيجية', 'brandkey' ),
		),
	),
);
?>

<section class="pricing" id="pricing">
	<div class="pricing-container">

		<header class="pricing-head" id="pricingHead">
			<h2 class="pricing-title"><?php echo esc_html( get_theme_mod( 'brandkey_pricing_title', __( 'باقات مرنة.. ونتائج غير محدودة', 'brandkey' ) ) ); ?></h2>
			<img src="<?php echo esc_url( BRANDKEY_URI . '/assets/icons/heading-line.png' ); ?>" alt="" class="heading-line pricing-heading-line" aria-hidden="true" />
			<p class="pricing-desc">
				<?php echo esc_html( get_theme_mod( 'brandkey_pricing_desc', __( 'اختر الباقة المناسبة لاحتياجاتك — كل الباقات قابلة للتخصيص حسب متطلبات مشروعك.', 'brandkey' ) ) ); ?>
			</p>

			<!-- تبديل شهري/سنوي -->
			<div class="pricing-toggle" id="pricingToggle">
				<button class="pricing-toggle-btn active" data-period="monthly" type="button"><?php esc_html_e( 'شهري', 'brandkey' ); ?></button>
				<button class="pricing-toggle-btn" data-period="yearly" type="button"><?php esc_html_e( 'سنوي', 'brandkey' ); ?></button>
				<span class="pricing-toggle-badge"><?php esc_html_e( 'خصم 20%', 'brandkey' ); ?></span>
			</div>
		</header>

		<div class="pricing-grid" id="pricingGrid">
			<?php
			$i = 0;
			if ( $packages_query->have_posts() ) :
				while ( $packages_query->have_posts() ) : $packages_query->the_post();
					$price_m = get_post_meta( get_the_ID(), '_bk_package_price_monthly', true );
					$price_y = get_post_meta( get_the_ID(), '_bk_package_price_yearly', true );
					$popular = get_post_meta( get_the_ID(), '_bk_package_popular', true );
					$features_str = get_post_meta( get_the_ID(), '_bk_package_features', true );
					$features = $features_str ? array_map( 'trim', explode( "\n", $features_str ) ) : array();
					?>
					<article class="pricing-card<?php echo $popular ? ' pricing-card--popular' : ''; ?>" data-card="<?php echo esc_attr( $i ); ?>">
						<?php if ( $popular ) : ?>
							<span class="pricing-card-badge"><?php esc_html_e( 'الأكثر طلباً', 'brandkey' ); ?></span>
						<?php endif; ?>
						<h3 class="pricing-card-title"><?php the_title(); ?></h3>
						<div class="pricing-card-price">
							<span class="pricing-card-amount" data-monthly="<?php echo esc_attr( $price_m ); ?>" data-yearly="<?php echo esc_attr( $price_y ); ?>"><?php echo esc_html( $price_m ); ?></span>
							<span class="pricing-card-period"><?php esc_html_e( 'ريال / شهرياً', 'brandkey' ); ?></span>
						</div>
						<ul class="pricing-card-features">
							<?php foreach ( $features as $feature ) : ?>
								<li><?php echo esc_html( $feature ); ?></li>
							<?php endforeach; ?>
						</ul>
						<a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="pricing-card-btn pricing-card-btn--<?php echo $popular ? 'gold' : 'outline'; ?>">
							<span><?php esc_html_e( 'اشترك الآن', 'brandkey' ); ?></span>
						</a>
					</article>
					<?php
					$i++;
				endwhile;
				wp_reset_postdata();
			else :
				foreach ( $default_packages as $idx => $pkg ) :
					?>
					<article class="pricing-card<?php echo $pkg['popular'] ? ' pricing-card--popular' : ''; ?>" data-card="<?php echo esc_attr( $idx ); ?>">
						<?php if ( $pkg['popular'] ) : ?>
							<span class="pricing-card-badge"><?php esc_html_e( 'الأكثر طلباً', 'brandkey' ); ?></span>
						<?php endif; ?>
						<h3 class="pricing-card-title"><?php echo esc_html( $pkg['title'] ); ?></h3>
						<div class="pricing-card-price">
							<span class="pricing-card-amount" data-monthly="<?php echo esc_attr( $pkg['price_m'] ); ?>" data-yearly="<?php echo esc_attr( $pkg['price_y'] ); ?>"><?php echo esc_html( $pkg['price_m'] ); ?></span>
							<span class="pricing-card-period"><?php esc_html_e( 'ريال / شهرياً', 'brandkey' ); ?></span>
						</div>
						<ul class="pricing-card-features">
							<?php foreach ( $pkg['features'] as $feature ) : ?>
								<li><?php echo esc_html( $feature ); ?></li>
							<?php endforeach; ?>
						</ul>
						<a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="pricing-card-btn pricing-card-btn--<?php echo $pkg['popular'] ? 'gold' : 'outline'; ?>">
							<span><?php esc_html_e( 'اشترك الآن', 'brandkey' ); ?></span>
						</a>
					</article>
					<?php
				endforeach;
			endif;
			?>
		</div>

	</div>
</section>
