<?php
/**
 * Header — مطابق للتمبلت بالظبط
 *
 * @package BrandKey
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> dir="rtl">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- ===== الهيدر ===== -->
<header class="site-header" id="siteHeader">
  <div class="header-inner">

    <!-- اللوگو -->
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo" aria-label="<?php bloginfo( 'name' ); ?>">
      <?php if ( has_custom_logo() ) : the_custom_logo(); else : ?>
        <img src="<?php bk_icon( 'logo.svg' ); ?>" alt="<?php bloginfo( 'name' ); ?>" class="logo-img" />
      <?php endif; ?>
    </a>

    <!-- أزرار التحكم -->
    <div class="header-actions">
      <button class="icon-btn search-btn" id="searchBtn" aria-label="<?php esc_attr_e( 'بحث', 'brandkey' ); ?>">
        <img src="<?php bk_icon( 'search.svg' ); ?>" alt="" class="search-icon" aria-hidden="true" />
      </button>
      <button class="lang-btn" id="langBtn" aria-label="<?php esc_attr_e( 'تغيير اللغة', 'brandkey' ); ?>">
        <img src="<?php bk_icon( 'language.svg' ); ?>" alt="" class="lang-icon" aria-hidden="true" />
        <span>EN</span>
      </button>
      <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="cta-btn" id="ctaBtn">
        <span><?php esc_html_e( 'تواصل معنا', 'brandkey' ); ?></span>
        <img src="<?php bk_icon( 'contact.svg' ); ?>" alt="" class="cta-icon" aria-hidden="true" />
      </a>
      <button class="icon-btn menu-btn" id="menuBtn" aria-label="<?php esc_attr_e( 'فتح القائمة', 'brandkey' ); ?>" aria-expanded="false" aria-controls="navOverlay">
        <img src="<?php bk_icon( 'menu.svg' ); ?>" alt="" class="menu-icon" aria-hidden="true" />
      </button>
    </div>

  </div>
</header>

<!-- ===== الناف المنزلق ===== -->
<div class="nav-overlay" id="navOverlay" role="dialog" aria-modal="true" aria-label="<?php esc_attr_e( 'قائمة التنقل', 'brandkey' ); ?>" aria-hidden="true">
  <div class="nav-backdrop" id="navBackdrop"></div>
  <div class="nav-panel">

    <!-- زر الإغلاق -->
    <button class="close-btn" id="closeBtn" aria-label="<?php esc_attr_e( 'إغلاق القائمة', 'brandkey' ); ?>">
      <span class="close-line"></span>
      <span class="close-line"></span>
    </button>

    <!-- المقدمة -->
    <div class="nav-intro">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="nav-logo" aria-label="<?php bloginfo( 'name' ); ?>">
        <img src="<?php bk_icon( 'logo.svg' ); ?>" alt="<?php bloginfo( 'name' ); ?>" class="nav-logo-img" />
      </a>
      <h2 class="nav-intro-title"><?php esc_html_e( 'إلى أين تريد الذهاب؟', 'brandkey' ); ?></h2>
      <p class="nav-intro-sub"><?php esc_html_e( 'اختر من القائمة أدناه', 'brandkey' ); ?></p>
    </div>

    <!-- القسمين: خدماتنا + حلول القطاعات -->
    <div class="nav-sections">

      <!-- القسم الأول: خدماتنا -->
      <div class="nav-section active-mobile" data-section="0">
        <h3 class="nav-section-heading">
          <span class="nav-section-icon">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M10 1L3 5V11C3 15.5 6 19 10 20C14 19 17 15.5 17 11V5L10 1Z" stroke="#F2C94C" stroke-width="2" stroke-linejoin="round"/><path d="M7 10L9 12L13 8" stroke="#F2C94C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </span>
          <span><?php esc_html_e( 'خدماتنا', 'brandkey' ); ?></span>
          <img src="<?php bk_icon( 'faq-chevron.svg' ); ?>" alt="" class="nav-section-chevron" aria-hidden="true" />
        </h3>
        <?php
        if ( has_nav_menu( 'nav_services' ) ) {
			wp_nav_menu( array( 'theme_location' => 'nav_services', 'container' => false, 'menu_class' => 'nav-section-list', 'depth' => 1 ) );
		} else {
			echo '<ul class="nav-section-list"><li><a href="#">' . esc_html__( 'أضف قائمة من لوحة التحكم', 'brandkey' ) . '</a></li></ul>';
		}
        ?>
      </div>

      <!-- القسم الثاني: حلول القطاعات -->
      <div class="nav-section" data-section="1">
        <h3 class="nav-section-heading">
          <span class="nav-section-icon">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M3 13L7 9L11 13L17 7M17 7H13M17 7V11" stroke="#F2C94C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </span>
          <span><?php esc_html_e( 'حلول القطاعات', 'brandkey' ); ?></span>
          <img src="<?php bk_icon( 'faq-chevron.svg' ); ?>" alt="" class="nav-section-chevron" aria-hidden="true" />
        </h3>
        <?php
        if ( has_nav_menu( 'nav_sectors' ) ) {
			wp_nav_menu( array( 'theme_location' => 'nav_sectors', 'container' => false, 'menu_class' => 'nav-section-list', 'depth' => 1 ) );
		} else {
			echo '<ul class="nav-section-list"><li><a href="#">' . esc_html__( 'أضف قائمة من لوحة التحكم', 'brandkey' ) . '</a></li></ul>';
		}
        ?>
      </div>

    </div>

    <!-- الروابط السريعة -->
    <nav class="nav-links" aria-label="<?php esc_attr_e( 'روابط سريعة', 'brandkey' ); ?>">
      <?php
      if ( has_nav_menu( 'nav_quick_links' ) ) {
		  wp_nav_menu( array( 'theme_location' => 'nav_quick_links', 'container' => false, 'walker' => new BK_Nav_Walker(), 'depth' => 1 ) );
	  } else {
		  // قائمة افتراضية
		  $defaults = array(
			  array( 'title' => __( 'الرئيسية', 'brandkey' ), 'url' => home_url( '/' ), 'icon' => 'home' ),
			  array( 'title' => __( 'تدريب الشركات', 'brandkey' ), 'url' => home_url( '/training' ), 'icon' => 'training' ),
			  array( 'title' => __( 'استشارات التسويق', 'brandkey' ), 'url' => home_url( '/consulting' ), 'icon' => 'consulting' ),
			  array( 'title' => __( 'معرض الأعمال', 'brandkey' ), 'url' => home_url( '/portfolio' ), 'icon' => 'portfolio' ),
			  array( 'title' => __( 'الباقات والأسعار', 'brandkey' ), 'url' => home_url( '/pricing' ), 'icon' => 'pricing' ),
			  array( 'title' => __( 'منظومة التكامل', 'brandkey' ), 'url' => home_url( '/integration' ), 'icon' => 'integration' ),
			  array( 'title' => __( 'من نحن', 'brandkey' ), 'url' => home_url( '/about' ), 'icon' => 'about' ),
			  array( 'title' => __( 'المدونة', 'brandkey' ), 'url' => home_url( '/blog' ), 'icon' => 'blog' ),
		  );
		  foreach ( $defaults as $i => $d ) {
			  $svg = bk_get_nav_icon( $d['icon'] );
			  echo '<a href="' . esc_url( $d['url'] ) . '" class="nav-link" data-index="' . esc_attr( $i ) . '">';
			  echo '<span class="nav-link-icon">' . $svg . '</span>';
			  echo '<span class="nav-link-text">' . esc_html( $d['title'] ) . '</span>';
			  echo '<span class="nav-link-arrow" aria-hidden="true"><svg width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M9 3L4 7L9 11" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></span>';
			  echo '</a>';
		  }
	  }
      ?>
    </nav>

    <!-- فوتر الناف -->
    <div class="nav-footer">
      <div class="nav-contact">
        <a href="mailto:<?php echo esc_attr( get_theme_mod( 'bk_email', 'info@brandkey.com' ) ); ?>" class="contact-link">
          <svg width="16" height="16" viewBox="0 0 16 16" fill="none" aria-hidden="true"><rect x="1" y="3" width="14" height="10" rx="1.5" stroke="currentColor" stroke-width="1.4"/><path d="M2 4L8 8.5L14 4" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/></svg>
          <span><?php echo esc_html( get_theme_mod( 'bk_email', 'info@brandkey.com' ) ); ?></span>
        </a>
        <a href="tel:<?php echo esc_attr( get_theme_mod( 'bk_phone', '+201001234567' ) ); ?>" class="contact-link">
          <svg width="16" height="16" viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M14.5 11.5V13.5C14.5 14.05 14.05 14.5 13.5 14.5C6.6 14.5 1.5 9.4 1.5 2.5C1.5 1.95 1.95 1.5 2.5 1.5H4.5C5.05 1.5 5.5 1.95 5.5 2.5C5.5 3.3 5.65 4.05 5.9 4.75C6 5.05 5.9 5.4 5.65 5.65L4.6 6.7C5.5 8.5 7 10 8.8 10.9L9.85 9.85C10.1 9.6 10.45 9.5 10.75 9.6C11.45 9.85 12.2 10 13 10C13.55 10 14 10.45 14 11" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/></svg>
          <span><?php echo esc_html( get_theme_mod( 'bk_phone_display', '+20 100 123 4567' ) ); ?></span>
        </a>
      </div>
      <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="nav-cta">
        <span><?php esc_html_e( 'تواصل معنا', 'brandkey' ); ?></span>
        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" aria-hidden="true"><path d="M17.5 0.5L0.5 7.5L7 9L8.5 16.5L12 12L15.5 15.5L17.5 0.5Z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/><path d="M7 9L17.5 0.5" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/></svg>
      </a>
    </div>

  </div>
</div>

<!-- ===== حاوية البحث ===== -->
<div class="search-overlay" id="searchOverlay" aria-hidden="true">
  <div class="search-overlay-backdrop"></div>
  <form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <button type="button" class="search-close" id="searchClose" aria-label="<?php esc_attr_e( 'إغلاق البحث', 'brandkey' ); ?>">
      <span class="close-line"></span>
      <span class="close-line"></span>
    </button>
    <div class="search-input-wrap">
      <img src="<?php bk_icon( 'search.svg' ); ?>" alt="" class="search-input-icon" aria-hidden="true" />
      <input type="search" class="search-input" placeholder="<?php esc_attr_e( 'ابحث عن...', 'brandkey' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
    </div>
    <button type="submit" class="search-submit"><?php esc_html_e( 'بحث', 'brandkey' ); ?></button>
  </form>
</div>
