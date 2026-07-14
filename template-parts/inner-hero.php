<?php
/**
 * Inner Hero — يقرأ من ACF لو موجود، وإلا من query_var
 *
 * @package BrandKey
 */

// لو فيه query_var (من page template مباشر)
$hero_holder = get_query_var( 'bk_inner_hero' );

if ( $hero_holder ) {
        $title        = $hero_holder['title'] ?? '';
        $desc         = $hero_holder['desc'] ?? '';
        $primary_text = $hero_holder['primary_text'] ?? '';
        $primary_href = $hero_holder['primary_href'] ?? home_url( '/contact' );
        $ghost_text   = $hero_holder['ghost_text'] ?? '';
        $ghost_href   = $hero_holder['ghost_href'] ?? '#';
        $photo        = $hero_holder['photo'] ?? BK_URI . '/assets/icons/inner-hero-photo.png';
} else {
        // اقرأ من ACF
        $title        = bk_meta( 'ih_title', get_the_ID(), get_the_title() );
        $desc         = bk_meta( 'ih_desc', get_the_ID() );
        $primary_text = bk_meta( 'ih_primary_text', get_the_ID(), __( 'ابدأ الآن', 'brandkey' ) );
        $primary_href = bk_meta( 'ih_primary_url', get_the_ID(), '/contact' );
        $primary_href = $primary_href ? home_url( $primary_href ) : home_url( '/contact' );
        $ghost_text   = bk_meta( 'ih_ghost_text', get_the_ID() );
        $ghost_url    = bk_meta( 'ih_ghost_url', get_the_ID(), '#' );
        $ghost_href   = $ghost_url ? ( strpos( $ghost_url, 'http' ) === 0 ? $ghost_url : home_url( $ghost_url ) ) : '#';

        // صورة الهيرو من ACF أو الافتراضية
        $acf_photo_id = bk_meta( 'ih_photo', get_the_ID() );
        $acf_photo    = $acf_photo_id ? wp_get_attachment_url( $acf_photo_id ) : '';
        $photo        = $acf_photo ?: BK_URI . '/assets/icons/inner-hero-photo.png';
}
?>

<section class="inner-hero" id="innerHero">
  <div class="inner-hero-frame">
    <div class="inner-hero-frame-fill"></div>
    <div class="inner-hero-frame-photo" style="background-image: url('<?php echo esc_url( $photo ); ?>');"></div>
    <div class="inner-hero-frame-overlay"></div>

    <img src="<?php bk_icon( 'pricing-key.svg' ); ?>" alt="" class="inner-hero-key" aria-hidden="true" />

    <div class="inner-hero-content">
      <h1 class="inner-hero-title"><?php echo esc_html( $title ); ?></h1>
      <div class="inner-hero-body">
        <?php if ( $desc ) : ?>
        <p class="inner-hero-desc"><?php echo esc_html( $desc ); ?></p>
        <?php endif; ?>
        <div class="inner-hero-actions">
          <?php if ( $primary_text ) : ?>
          <a href="<?php echo esc_url( $primary_href ); ?>" class="inner-hero-btn inner-hero-btn--primary">
            <span><?php echo esc_html( $primary_text ); ?></span>
            <img src="<?php bk_icon( 'start-icon.svg' ); ?>" alt="" />
          </a>
          <?php endif; ?>
          <?php if ( $ghost_text ) : ?>
          <a href="<?php echo esc_url( $ghost_href ); ?>" class="inner-hero-btn inner-hero-btn--ghost">
            <img src="<?php bk_icon( 'humbleicons-arrow-up.svg' ); ?>" alt="" />
            <span><?php echo esc_html( $ghost_text ); ?></span>
          </a>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>

  <aside class="inner-hero-scroll" aria-label="إرشاد التمرير">
    <span class="inner-hero-scroll-text">قم بالتمرير لرؤية المزيد</span>
    <span class="inner-hero-mouse">
      <svg width="24" height="38" viewBox="0 0 24 38" fill="none">
        <rect x="1" y="1" width="22" height="36" rx="11" stroke="#5C5C5C" stroke-width="2"/>
        <rect x="10.5" y="7" width="3" height="10" rx="1.5" fill="#5C5C5C"/>
      </svg>
    </span>
  </aside>

  <aside class="inner-hero-follow" aria-label="روابط المتابعة">
    <span class="inner-hero-follow-text">تابعنا</span>
    <div class="inner-hero-social-icons">
      <a href="<?php echo esc_url( get_theme_mod( 'bk_facebook', '#' ) ); ?>" aria-label="Facebook" class="inner-hero-social-link" target="_blank" rel="noopener">
        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M9.5 16V9H11.5L12 6.5H9.5V5C9.5 4.3 9.7 4 10.5 4H12V1.5C11.7 1.5 10.8 1.5 9.8 1.5C7.8 1.5 6.5 2.8 6.5 4.8V6.5H4V9H6.5V16H9.5Z" fill="currentColor"/></svg>
      </a>
      <a href="<?php echo esc_url( get_theme_mod( 'bk_instagram', '#' ) ); ?>" aria-label="Instagram" class="inner-hero-social-link" target="_blank" rel="noopener">
        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M8 1.5C6.1 1.5 5.85 1.51 5.09 1.54C3.33 1.62 2.4 2.55 2.32 4.31C2.29 5.07 2.28 5.32 2.28 7.22C2.28 9.12 2.29 9.37 2.32 10.13C2.4 11.89 3.33 12.82 5.09 12.9C5.85 12.93 6.1 12.94 8 12.94C9.9 12.94 10.15 12.93 10.91 12.9C12.67 12.82 13.6 11.89 13.68 10.13C13.71 9.37 13.72 9.12 13.72 7.22C13.72 5.32 13.71 5.07 13.68 4.31C13.6 2.55 12.67 1.62 10.91 1.54C10.15 1.51 9.9 1.5 8 1.5ZM8 3.3C9.87 3.3 10.1 3.31 10.85 3.34C11.54 3.37 11.92 3.49 12.17 3.58C12.5 3.71 12.74 3.87 12.99 4.12C13.24 4.37 13.4 4.61 13.53 4.94C13.62 5.19 13.74 5.57 13.77 6.26C13.8 7.01 13.81 7.24 13.81 9.11C13.81 10.98 13.8 11.21 13.77 11.96C13.74 12.65 13.62 13.03 13.53 13.28C13.4 13.61 13.24 13.85 12.99 14.1C12.74 14.35 12.5 14.51 12.17 14.64C11.92 14.73 11.54 14.85 10.85 14.88C10.1 14.91 9.87 14.92 8 14.92C6.13 14.92 5.9 14.91 5.15 14.88C4.46 14.85 4.08 14.73 3.83 14.64C3.5 14.51 3.26 14.35 3.01 14.1C2.76 13.85 2.6 13.61 2.47 13.28C2.38 13.03 2.26 12.65 2.23 11.96C2.2 11.21 2.19 10.98 2.19 9.11C2.19 7.24 2.2 7.01 2.23 6.26C2.26 5.57 2.38 5.19 2.47 4.94C2.6 4.61 2.76 4.37 3.01 4.12C3.26 3.87 3.5 3.71 3.83 3.58C4.08 3.49 4.46 3.37 5.15 3.34C5.9 3.31 6.13 3.3 8 3.3ZM8 5.5C6.07 5.5 4.5 7.07 4.5 9C4.5 10.93 6.07 12.5 8 12.5C9.93 12.5 11.5 10.93 11.5 9C11.5 7.07 9.93 5.5 8 5.5ZM8 11.2C6.78 11.2 5.8 10.22 5.8 9C5.8 7.78 6.78 6.8 8 6.8C9.22 6.8 10.2 7.78 10.2 9C10.2 10.22 9.22 11.2 8 11.2ZM12.5 5.35C12.5 5.79 12.14 6.15 11.7 6.15C11.26 6.15 10.9 5.79 10.9 5.35C10.9 4.91 11.26 4.55 11.7 4.55C12.14 4.55 12.5 4.91 12.5 5.35Z" fill="currentColor"/></svg>
      </a>
      <a href="<?php echo esc_url( get_theme_mod( 'bk_linkedin', '#' ) ); ?>" aria-label="LinkedIn" class="inner-hero-social-link" target="_blank" rel="noopener">
        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3.5 1.5C3.5 2.33 2.83 3 2 3C1.17 3 0.5 2.33 0.5 1.5C0.5 0.67 1.17 0 2 0C2.83 0 3.5 0.67 3.5 1.5ZM0.5 5H3.5V16H0.5V5ZM5.5 5H8.3V6.5H8.35C9 5.5 10.2 4.75 12 4.75C15.5 4.75 16 7.5 16 10.5V16H13V11C13 9.5 12.97 7.7 11 7.7C9 7.7 8.5 9.2 8.5 11V16H5.5V5Z" fill="currentColor"/></svg>
      </a>
      <a href="<?php echo esc_url( get_theme_mod( 'bk_twitter', '#' ) ); ?>" aria-label="X (Twitter)" class="inner-hero-social-link" target="_blank" rel="noopener">
        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M12 1H14.5L9 7L15.5 15H10.5L7 11L2.5 15H0L6 9L0 1H5L8.5 5L12 1ZM11 14H12.5L4.5 2.5H3L11 14Z" fill="currentColor"/></svg>
      </a>
    </div>
  </aside>
</section>
