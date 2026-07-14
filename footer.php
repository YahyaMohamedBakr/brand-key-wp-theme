<?php
/**
 * Footer — مطابق للتمبلت بالظبط
 *
 * @package BrandKey
 */
?>

<!-- ===== الفوتر ===== -->
<footer class="site-footer" id="siteFooter">

  <div class="footer-main">
    <div class="footer-container">
      <div class="footer-grid">

        <!-- العمود 1: عن براند كي -->
        <div class="footer-col footer-col--about" data-col="0">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="footer-logo" aria-label="<?php bloginfo( 'name' ); ?>">
            <img src="<?php bk_icon( 'logo-light.svg' ); ?>" alt="<?php bloginfo( 'name' ); ?>" class="footer-logo-img" />
          </a>
          <p class="footer-desc"><?php echo esc_html( get_theme_mod( 'bk_about_text', 'شركة متخصصة في التسويق الرقمي وخدمات التكنولوجيا، أسست في عام 2011. نسعى دائماً لتقديم حلول مبتكرة تساعد عملائنا على النمو والنجاح.' ) ); ?></p>
          <div class="footer-social">
            <a href="<?php echo esc_url( get_theme_mod( 'bk_facebook', '#' ) ); ?>" class="social-link" aria-label="Facebook" target="_blank" rel="noopener">
              <svg width="18" height="18" viewBox="0 0 18 18" fill="none" aria-hidden="true"><path d="M10.5 17V9.5H13L13.5 6.5H10.5V4.6C10.5 3.7 10.7 3.1 12 3.1H13.5V0.5C13.2 0.5 12.3 0.4 11.2 0.4C8.9 0.4 7.3 1.9 7.3 4.3V6.5H4.5V9.5H7.3V17H10.5Z" fill="currentColor"/></svg>
            </a>
            <a href="<?php echo esc_url( get_theme_mod( 'bk_instagram', '#' ) ); ?>" class="social-link" aria-label="Instagram" target="_blank" rel="noopener">
              <svg width="18" height="18" viewBox="0 0 18 18" fill="none" aria-hidden="true"><path fill-rule="evenodd" clip-rule="evenodd" d="M9 1.5C7.1 1.5 6.85 1.51 6.09 1.54C5.33 1.62 4.4 2.55 4.32 4.31C4.29 5.07 4.28 5.32 4.28 7.22C4.28 9.12 4.29 9.37 4.32 10.13C4.4 11.89 5.33 12.82 7.09 12.9C7.85 12.93 8.1 12.94 9 12.94C9.9 12.94 10.15 12.93 10.91 12.9C12.67 12.82 13.6 11.89 13.68 10.13C13.71 9.37 13.72 9.12 13.72 7.22C13.72 5.32 13.71 5.07 13.68 4.31C13.6 2.55 12.67 1.62 10.91 1.54C10.15 1.51 9.9 1.5 9 1.5ZM9 3.3C10.87 3.3 11.1 3.31 11.85 3.34C12.54 3.37 12.92 3.49 13.17 3.58C13.5 3.71 13.74 3.87 13.99 4.12C14.24 4.37 14.4 4.61 14.53 4.94C14.62 5.19 14.74 5.57 14.77 6.26C14.8 7.01 14.81 7.24 14.81 9.11C14.81 10.98 14.8 11.21 14.77 11.96C14.74 12.65 14.62 13.03 14.53 13.28C14.4 13.61 14.24 13.85 13.99 14.1C13.74 14.35 13.5 14.51 13.17 14.64C12.92 14.73 12.54 14.85 11.85 14.88C11.1 14.91 10.87 14.92 9 14.92C7.13 14.92 6.9 14.91 6.15 14.88C5.46 14.85 5.08 14.73 4.83 14.64C4.5 14.51 4.26 14.35 4.01 14.1C3.76 13.85 3.6 13.61 3.47 13.28C3.38 13.03 3.26 12.65 3.23 11.96C3.2 11.21 3.19 10.98 3.19 9.11C3.19 7.24 3.2 7.01 3.23 6.26C3.26 5.57 3.38 5.19 3.47 4.94C3.6 4.61 3.76 4.37 4.01 4.12C4.26 3.87 4.5 3.71 4.83 3.58C5.08 3.49 5.46 3.37 6.15 3.34C6.9 3.31 7.13 3.3 9 3.3ZM9 5.5C7.07 5.5 5.5 7.07 5.5 9C5.5 10.93 7.07 12.5 9 12.5C10.93 12.5 12.5 10.93 12.5 9C12.5 7.07 10.93 5.5 9 5.5ZM9 11.2C7.78 11.2 6.8 10.22 6.8 9C6.8 7.78 7.78 6.8 9 6.8C10.22 6.8 11.2 7.78 11.2 9C11.2 10.22 10.22 11.2 9 11.2ZM12.5 5.35C12.5 5.79 12.14 6.15 11.7 6.15C11.26 6.15 10.9 5.79 10.9 5.35C10.9 4.91 11.26 4.55 11.7 4.55C12.14 4.55 12.5 4.91 12.5 5.35Z" fill="currentColor"/></svg>
            </a>
            <a href="<?php echo esc_url( get_theme_mod( 'bk_linkedin', '#' ) ); ?>" class="social-link" aria-label="LinkedIn" target="_blank" rel="noopener">
              <svg width="18" height="18" viewBox="0 0 18 18" fill="none" aria-hidden="true"><path d="M4.5 1.5C4.5 2.33 3.83 3 3 3C2.17 3 1.5 2.33 1.5 1.5C1.5 0.67 2.17 0 3 0C3.83 0 4.5 0.67 4.5 1.5ZM0.5 5H3.5V17H0.5V5ZM7.5 5H12.3V7.1H12.37C12.96 5.96 14.35 4.75 16.5 4.75C21 4.75 21.5 7.5 21.5 11V17H16.5V11.9C16.5 10.05 16.47 7.7 14 7.7C11.5 7.7 11.5 9.7 11.5 11.75V17H7.5V5Z" fill="currentColor"/></svg>
            </a>
            <a href="<?php echo esc_url( get_theme_mod( 'bk_twitter', '#' ) ); ?>" class="social-link" aria-label="X (Twitter)" target="_blank" rel="noopener">
              <svg width="18" height="18" viewBox="0 0 18 18" fill="none" aria-hidden="true"><path d="M13.5 1H16L10 8.5L17 17H11.5L7.3 11.8L2.3 17H0L6.5 9L0 1H5.7L9.5 5.7L13.5 1ZM12.5 15.4H14L4.9 2.5H3.3L12.5 15.4Z" fill="currentColor"/></svg>
            </a>
          </div>
        </div>

        <!-- العمود 2: روابط سريعة -->
        <div class="footer-col" data-col="1">
          <h4 class="footer-heading"><?php esc_html_e( 'روابط سريعة', 'brandkey' ); ?></h4>
          <?php
          if ( has_nav_menu( 'footer_quick' ) ) {
			  wp_nav_menu( array( 'theme_location' => 'footer_quick', 'container' => false, 'menu_class' => 'footer-links', 'depth' => 1 ) );
		  } else {
			  echo '<ul class="footer-links">';
			  echo '<li><a href="' . esc_url( home_url( '/' ) ) . '">' . esc_html__( 'الرئيسية', 'brandkey' ) . '</a></li>';
			  echo '<li><a href="' . esc_url( home_url( '/about' ) ) . '">' . esc_html__( 'عن الشركة', 'brandkey' ) . '</a></li>';
			  echo '<li><a href="' . esc_url( home_url( '/services' ) ) . '">' . esc_html__( 'خدماتنا', 'brandkey' ) . '</a></li>';
			  echo '<li><a href="' . esc_url( home_url( '/portfolio' ) ) . '">' . esc_html__( 'عملاؤنا', 'brandkey' ) . '</a></li>';
			  echo '<li><a href="#">' . esc_html__( 'التوظيف', 'brandkey' ) . '</a></li>';
			  echo '<li><a href="#">' . esc_html__( 'سياسة الخصوصية', 'brandkey' ) . '</a></li>';
			  echo '</ul>';
		  }
          ?>
        </div>

        <!-- العمود 3: خدماتنا -->
        <div class="footer-col" data-col="2">
          <h4 class="footer-heading"><?php esc_html_e( 'خدماتنا', 'brandkey' ); ?></h4>
          <?php
          if ( has_nav_menu( 'footer_services' ) ) {
			  wp_nav_menu( array( 'theme_location' => 'footer_services', 'container' => false, 'menu_class' => 'footer-links', 'depth' => 1 ) );
		  } else {
			  echo '<ul class="footer-links">';
			  echo '<li><a href="#">' . esc_html__( 'تسويق رقمي', 'brandkey' ) . '</a></li>';
			  echo '<li><a href="#">' . esc_html__( 'التصميم', 'brandkey' ) . '</a></li>';
			  echo '<li><a href="#">' . esc_html__( 'تطوير المواقع', 'brandkey' ) . '</a></li>';
			  echo '<li><a href="#">' . esc_html__( 'الإعلانات المدفوعة', 'brandkey' ) . '</a></li>';
			  echo '<li><a href="' . esc_url( home_url( '/contact' ) ) . '">' . esc_html__( 'تواصل معنا', 'brandkey' ) . '</a></li>';
			  echo '<li><a href="#">' . esc_html__( 'سياسة الخصوصية', 'brandkey' ) . '</a></li>';
			  echo '</ul>';
		  }
          ?>
        </div>

        <!-- العمود 4: تواصل معنا -->
        <div class="footer-col" data-col="3">
          <h4 class="footer-heading"><?php esc_html_e( 'تواصل معنا', 'brandkey' ); ?></h4>
          <ul class="footer-contact">
            <li>
              <a href="mailto:<?php echo esc_attr( get_theme_mod( 'bk_email', 'info@brandkey.com' ) ); ?>" class="contact-item">
                <span class="contact-ic">
                  <svg width="16" height="16" viewBox="0 0 16 16" fill="none" aria-hidden="true"><rect x="1" y="3" width="14" height="10" rx="1.5" stroke="currentColor" stroke-width="1.4"/><path d="M2 4L8 8.5L14 4" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </span>
                <span><?php echo esc_html( get_theme_mod( 'bk_email', 'info@brandkey.com' ) ); ?></span>
              </a>
            </li>
            <li>
              <a href="tel:<?php echo esc_attr( get_theme_mod( 'bk_phone', '+201001234567' ) ); ?>" class="contact-item">
                <span class="contact-ic">
                  <svg width="16" height="16" viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M14.5 11.5V13.5C14.5 14.05 14.05 14.5 13.5 14.5C6.6 14.5 1.5 9.4 1.5 2.5C1.5 1.95 1.95 1.5 2.5 1.5H4.5C5.05 1.5 5.5 1.95 5.5 2.5C5.5 3.3 5.65 4.05 5.9 4.75C6 5.05 5.9 5.4 5.65 5.65L4.6 6.7C5.5 8.5 7 10 8.8 10.9L9.85 9.85C10.1 9.6 10.45 9.5 10.75 9.6C11.45 9.85 12.2 10 13 10C13.55 10 14 10.45 14 11" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </span>
                <span><?php echo esc_html( get_theme_mod( 'bk_phone_display', '+20 100 123 4567' ) ); ?></span>
              </a>
            </li>
            <li>
              <a href="<?php echo esc_url( get_theme_mod( 'bk_map_url', 'https://maps.google.com' ) ); ?>" target="_blank" rel="noopener" class="contact-item">
                <span class="contact-ic">
                  <svg width="16" height="16" viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M8 1C5.24 1 3 3.24 3 6C3 9.5 8 15 8 15C8 15 13 9.5 13 6C13 3.24 10.76 1 8 1Z" stroke="currentColor" stroke-width="1.4" stroke-linejoin="round"/><circle cx="8" cy="6" r="1.8" stroke="currentColor" stroke-width="1.4"/></svg>
                </span>
                <span><?php echo esc_html( get_theme_mod( 'bk_address', 'القاهرة | مصر، شارع التحرير' ) ); ?></span>
              </a>
            </li>
          </ul>
        </div>

      </div>
    </div>
  </div>

  <!-- النشرة البريدية -->
  <div class="footer-newsletter">
    <div class="footer-container">
      <div class="newsletter-text">
        <h3 class="newsletter-title"><?php esc_html_e( 'اشترك في نشرتنا', 'brandkey' ); ?></h3>
        <p class="newsletter-sub"><?php esc_html_e( 'احصل على آخر الأخبار والعروض التسويقية مباشرة في صندوق بريدك الإلكتروني', 'brandkey' ); ?></p>
      </div>
      <form class="newsletter-form" id="newsletterForm">
        <div class="input-wrap">
          <svg class="input-icon" width="18" height="18" viewBox="0 0 18 18" fill="none" aria-hidden="true"><rect x="1" y="3" width="16" height="12" rx="2" stroke="currentColor" stroke-width="1.5"/><path d="M2 4L9 9.5L16 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
          <input type="email" placeholder="<?php esc_attr_e( 'البريد الإلكتروني', 'brandkey' ); ?>" required aria-label="<?php esc_attr_e( 'البريد الإلكتروني', 'brandkey' ); ?>" id="newsletterEmail" />
        </div>
        <button type="submit" class="newsletter-btn">
          <span><?php esc_html_e( 'اشتراك', 'brandkey' ); ?></span>
          <svg width="16" height="16" viewBox="0 0 20 20" fill="none" aria-hidden="true"><path fill-rule="evenodd" clip-rule="evenodd" d="M16.697 0.147C17.1372 -0.0123 17.6137 -0.0429 18.0706 0.0588C18.5276 0.1605 18.9461 0.3903 19.2771 0.7214C19.6082 1.0524 19.838 1.4709 19.9397 1.9279C20.0414 2.3848 20.0107 2.8613 19.8513 3.3015L14.8428 18.3086C14.711 18.7087 14.4787 19.0683 14.168 19.3527C13.8573 19.6372 13.4786 19.8369 13.0685 19.9329C12.6588 20.0332 12.2301 20.025 11.8246 19.9093C11.419 19.7936 11.0506 19.5742 10.7556 19.2729L8.1656 16.7L5.4656 18.0943C5.3278 18.1653 5.174 18.1992 5.0192 18.1926C4.8643 18.1861 4.7139 18.1394 4.5826 18.0571C4.4513 16.9748 4.3437 17.8597 4.2703 17.7232C4.1969 17.5868 4.1604 17.4335 4.1642 17.2786L4.2785 12.8043L0.7142 9.2386C0.4297 8.9551 0.22 8.6055 0.1038 8.221C-0.0123 7.8366 -0.0314 7.4293 0.0485 7.0357C0.1278 6.6067 0.32 6.2066 0.6052 5.8764C0.8904 5.5463 1.2584 5.298 1.6713 5.1572L1.6785 5.1543L16.697 0.147Z" fill="currentColor"/></svg>
        </button>
        <p class="newsletter-msg" id="newsletterMsg" role="status" aria-live="polite"></p>
      </form>
    </div>
  </div>

  <!-- الشريط السفلي -->
  <div class="footer-bottom">
    <div class="footer-container">
      <div class="footer-bottom-inner">
        <div class="legal-links">
          <a href="#"><?php esc_html_e( 'الشروط والأحكام', 'brandkey' ); ?></a>
          <span class="legal-sep">|</span>
          <a href="#"><?php esc_html_e( 'سياسة الخصوصية', 'brandkey' ); ?></a>
        </div>
        <div class="copyright">
          <?php printf( esc_html__( '© %1$s %2$s. جميع الحقوق محفوظة.', 'brandkey' ), date( 'Y' ), get_bloginfo( 'name' ) ); ?>
        </div>
      </div>
    </div>
  </div>

</footer>

<?php wp_footer(); ?>
</body>
</html>
