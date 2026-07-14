<?php
/**
 * سيكشن: faq (الصفحة الرئيسية)
 *
 * @package BrandKey
 */

// لو السيكشن مش مفعّل، اخرج
if ( ! bk_section_enabled( 'front_page', 'faq' ) ) return;

// محتوى السيكشن من Customizer
$title = bk_section( 'front_page', 'faq', 'title' );
$desc = bk_section( 'front_page', 'faq', 'desc' );
$heading = bk_section( 'front_page', 'faq', 'heading' ) ?: 'h2';
$bg = bk_section( 'front_page', 'faq', 'bg' );
$dark = ! empty( $bg );
$line_icon = $dark ? 'line-white.png' : 'heading-line.png';
$btn_text = bk_section( 'front_page', 'faq', 'btn_text' );
$btn_url = bk_section( 'front_page', 'faq', 'btn_url' );

$style = $bg ? ' style="background: ' . esc_attr( $bg ) . ';"' : '';
$title_color = $dark ? '#fff' : 'var(--navy)';
$desc_color = $dark ? 'rgba(255,255,255,0.8)' : 'var(--muted)';
?>

<section class="faq" id="faq"<?php echo $style; ?>>
  <div class="faq-container">

    <?php if ( 'faq' !== 'hero' ) : ?>
    <header class="faq-head" id="faqHead">
      <<?php echo esc_html( $heading ); ?> class="faq-title" style="color: <?php echo esc_attr( $title_color ); ?>;"><?php echo esc_html( $title ); ?></<?php echo esc_html( $heading ); ?>>
      <img src="<?php echo esc_url( BK_URI . '/assets/icons/' . $line_icon ); ?>" alt="" class="heading-line faq-heading-line" aria-hidden="true" />
      <p class="faq-desc" style="color: <?php echo esc_attr( $desc_color ); ?>;"><?php echo esc_html( $desc ); ?></p>
    </header>
    <?php else : ?>
    <div class="hero-container">
      <div class="hero-bg" style="background-image: url('<?php echo esc_url( BK_URI ); ?>/assets/icons/hero-bg.svg');"></div>
      <div class="hero-overlay"></div>
      <div class="hero-content" id="heroContent">
        <<?php echo esc_html( $heading ); ?> class="hero-title"><?php echo esc_html( $title ); ?></<?php echo esc_html( $heading ); ?>>
        <p class="hero-desc"><?php echo esc_html( $desc ); ?></p>
        <?php if ( $btn_text ) : ?>
        <div class="hero-cta-group">
          <a href="<?php echo esc_url( home_url( $btn_url ?: '/contact' ) ); ?>" class="hero-cta hero-cta--primary">
            <span><?php echo esc_html( $btn_text ); ?></span>
            <img src="<?php bk_icon( 'start-icon.svg' ); ?>" alt="" class="hero-cta-icon" aria-hidden="true" />
          </a>
          <a href="#services" class="hero-cta hero-cta--secondary">
            <span>استكشف خدماتنا</span>
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none"><path d="M12 4V20M6 14L12 20L18 14" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </a>
        </div>
        <?php endif; ?>
        <div class="hero-stats">
          <div class="hero-stat"><div class="hero-stat-num">+12</div><div class="hero-stat-label">سنة خبرة</div></div>
          <div class="hero-stat"><div class="hero-stat-num">+500</div><div class="hero-stat-label">مشروع ناجح</div></div>
          <div class="hero-stat"><div class="hero-stat-num">+300</div><div class="hero-stat-label">عميل سعيد</div></div>
        </div>
      </div>
    </div>
    <?php endif; ?>

  </div>
</section>
