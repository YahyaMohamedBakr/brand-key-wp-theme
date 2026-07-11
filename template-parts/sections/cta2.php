<?php
/**
 * Template part: CTA2 section (homepage)
 *
 * Three CTA cards: Plan + Support + Monitoring.
 *
 * @package BrandKey
 */

$cta2_cards = array(
	array(
		'title' => __( 'خطة عملك، مُصمّمة', 'brandkey' ),
		'desc'  => __( 'نصنع لك خطة عمل متكاملة ومُصمّمة خصيصاً لاحتياجاتك، مع التركيز على الجودة والفعالية لضمان نجاح مشروعك.', 'brandkey' ),
		'btn'   => __( 'ابدأ الآن، مجاناً', 'brandkey' ),
		'url'   => home_url( '/contact' ),
		'style' => 'primary',
		'accent'=> false,
		'icon'  => '<path d="M13 2L3 7V13C3 17.5 6.5 21.5 13 23C19.5 21.5 23 17.5 23 13V7L13 2Z" fill="white" stroke="white" stroke-width="0.5"/><path d="M9 13L12 16L18 10" stroke="#F2C94C" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>',
	),
	array(
		'title' => __( 'دعم فني متواصل', 'brandkey' ),
		'desc'  => __( 'فريق الدعم الفني الخاص بنا متاح على مدار الساعة لمساعدتك في أي استفسار، نحن هنا لنجاحك في كل خطوة.', 'brandkey' ),
		'btn'   => __( 'تواصل معنا', 'brandkey' ),
		'url'   => home_url( '/contact' ),
		'style' => 'outline',
		'accent'=> true,
		'icon'  => '<path d="M13 2C9.13 2 6 5.13 6 9C6 13.5 11.5 21 12.5 22.5C12.78 22.91 13.22 22.91 13.5 22.5C14.5 21 20 13.5 20 9C20 5.13 16.87 2 13 2Z" fill="white" stroke="white" stroke-width="0.5"/><circle cx="13" cy="9" r="2.5" fill="#F2C94C"/>',
	),
	array(
		'title' => __( 'متابعة وتحسين', 'brandkey' ),
		'desc'  => __( 'نتابع أداء مشروعك باستمرار ونحسّنه بشكل دوري لضمان تحقيق أفضل النتائج والنمو المستمر.', 'brandkey' ),
		'btn'   => __( 'اعرف المزيد', 'brandkey' ),
		'url'   => home_url( '/services' ),
		'style' => 'outline',
		'accent'=> false,
		'icon'  => '<path d="M13 2C7.48 2 3 6.48 3 12C3 17.52 7.48 22 13 22C18.52 22 23 17.52 23 12C23 6.48 18.52 2 13 2ZM13 20C8.58 20 5 16.42 5 12C5 7.58 8.58 4 13 4C17.42 4 21 7.58 21 12C21 16.42 17.42 20 13 20Z" fill="white"/><path d="M13 6V12L17 14" stroke="#F2C94C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>',
	),
);
?>

<section class="cta2" id="cta2">
	<img src="<?php echo esc_url( BRANDKEY_URI . '/assets/icons/cta2-keyhole.png' ); ?>" alt="" class="cta2-keyhole" aria-hidden="true" />

	<div class="cta2-container">

		<header class="cta2-head" id="cta2Head">
			<h2 class="cta2-title"><?php echo esc_html( get_theme_mod( 'brandkey_cta2_title', __( 'ابدأ رحلتك مع Brandkey', 'brandkey' ) ) ); ?></h2>
			<img src="<?php echo esc_url( BRANDKEY_URI . '/assets/icons/heading-line.png' ); ?>" alt="" class="heading-line cta2-heading-line" aria-hidden="true" />
			<p class="cta2-desc">
				<?php echo esc_html( get_theme_mod( 'brandkey_cta2_desc', __( 'نحن نؤمن بأن كل علامة تجارية تستحق فرصة للنجاح — وهنا يأتي دورنا. مع Brandkey ستحصل على استشارة متخصصة مصممة خصيصاً لاحتياجاتك، مع التركيز على كل تفاصيل العلامة التجارية من البداية إلى النهاية.', 'brandkey' ) ) ); ?>
			</p>
		</header>

		<div class="cta2-grid" id="cta2Grid">
			<?php foreach ( $cta2_cards as $i => $card ) : ?>
				<article class="cta2-card<?php echo $card['accent'] ? ' cta2-card--accent' : ''; ?>" data-card="<?php echo esc_attr( $i ); ?>">
					<div class="cta2-card-icon">
						<svg width="26" height="26" viewBox="0 0 26 26" fill="none"><?php echo $card['icon']; // phpcs:ignore ?></svg>
					</div>
					<div class="cta2-card-body">
						<h3 class="cta2-card-title"><?php echo esc_html( $card['title'] ); ?></h3>
						<p class="cta2-card-desc"><?php echo esc_html( $card['desc'] ); ?></p>
						<a href="<?php echo esc_url( $card['url'] ); ?>" class="cta2-btn cta2-btn--<?php echo esc_attr( $card['style'] ); ?>">
							<span><?php echo esc_html( $card['btn'] ); ?></span>
							<img src="<?php echo 'primary' === $card['style'] ? esc_url( BRANDKEY_URI . '/assets/icons/start-icon.svg' ) : esc_url( BRANDKEY_URI . '/assets/icons/more-arrow.svg' ); ?>" alt="" />
						</a>
					</div>
				</article>
			<?php endforeach; ?>
		</div>

	</div>
</section>
