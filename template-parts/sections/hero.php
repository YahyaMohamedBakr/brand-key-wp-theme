<?php
/**
 * Template part: Hero section (homepage)
 *
 * @package BrandKey
 */

$data = isset( $bk_hero_data ) ? $bk_hero_data : array(
	'title'        => get_theme_mod( 'brandkey_hero_title', 'حلول تسويق رقمي متكاملة تنمو مع أعمالك' ),
	'desc'         => get_theme_mod( 'brandkey_hero_desc', 'في Brand Key، ندمج الإبداع البصري مع الاستراتيجية التسويقية والتقنية المتقدمة لنقدم لك منظومة رقمية متكاملة تحقق أهدافك.' ),
	'primary_text' => get_theme_mod( 'brandkey_hero_primary_text', 'ابدأ الآن، مجاناً' ),
	'primary_url'  => get_theme_mod( 'brandkey_hero_primary_url', home_url( '/contact' ) ),
	'ghost_text'   => get_theme_mod( 'brandkey_hero_ghost_text', 'استكشف خدماتنا' ),
	'ghost_url'    => '#',
);

// Hero background image
$hero_bg_id = get_theme_mod( 'brandkey_hero_bg' );
$hero_bg_url = $hero_bg_id ? wp_get_attachment_image_url( $hero_bg_id, 'brandkey-hero' ) : BRANDKEY_URI . '/assets/images/hero-bg.png';
?>

<section class="hero" id="hero">
	<div class="hero-container">

		<!-- خلفية الهيرو -->
		<div class="hero-bg" style="background-image: url('<?php echo esc_url( $hero_bg_url ); ?>');"></div>
		<div class="hero-overlay"></div>

		<!-- المحتوى -->
		<div class="hero-content" id="heroContent">

			<!-- العنوان الرئيسي -->
			<h1 class="hero-title"><?php echo esc_html( $data['title'] ); ?></h1>

			<!-- الوصف -->
			<p class="hero-desc"><?php echo esc_html( $data['desc'] ); ?></p>

			<!-- الأزرار -->
			<div class="hero-cta-group">
				<a href="<?php echo esc_url( $data['primary_url'] ); ?>" class="hero-cta hero-cta--primary">
					<span><?php echo esc_html( $data['primary_text'] ); ?></span>
					<img src="<?php echo esc_url( BRANDKEY_URI . '/assets/icons/start-icon.svg' ); ?>" alt="" class="hero-cta-icon" aria-hidden="true" />
				</a>
				<a href="<?php echo esc_url( $data['ghost_url'] ); ?>" class="hero-cta hero-cta--secondary">
					<span><?php echo esc_html( $data['ghost_text'] ); ?></span>
					<svg width="20" height="20" viewBox="0 0 24 24" fill="none"><path d="M12 4V20M6 14L12 20L18 14" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
				</a>
			</div>

			<!-- الإحصائيات -->
			<div class="hero-stats">
				<div class="hero-stat">
					<div class="hero-stat-num">+12</div>
					<div class="hero-stat-label"><?php esc_html_e( 'سنة خبرة', 'brandkey' ); ?></div>
				</div>
				<div class="hero-stat">
					<div class="hero-stat-num">+500</div>
					<div class="hero-stat-label"><?php esc_html_e( 'مشروع ناجح', 'brandkey' ); ?></div>
				</div>
				<div class="hero-stat">
					<div class="hero-stat-num">+300</div>
					<div class="hero-stat-label"><?php esc_html_e( 'عميل سعيد', 'brandkey' ); ?></div>
				</div>
			</div>

		</div>
	</div>
</section>
