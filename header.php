<?php
/**
 * The header for our theme
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

<div id="page" class="site">

	<!-- ===== الهيدر ===== -->
	<header class="site-header" id="siteHeader">
		<div class="header-inner">

			<!-- اللوگو (يمين في RTL) -->
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo" aria-label="<?php bloginfo( 'name' ); ?> - <?php esc_attr_e( 'الصفحة الرئيسية', 'brandkey' ); ?>">
				<?php
				if ( has_custom_logo() ) {
					the_custom_logo();
				} else {
					?>
					<img src="<?php echo esc_url( BRANDKEY_URI . '/assets/icons/logo.svg' ); ?>" alt="<?php bloginfo( 'name' ); ?>" class="logo-img" />
					<?php
				}
				?>
			</a>

			<!-- أزرار التحكم (يسار في RTL) -->
			<div class="header-actions">

				<!-- زر البحث -->
				<button class="icon-btn search-btn" id="searchBtn" aria-label="<?php esc_attr_e( 'بحث', 'brandkey' ); ?>">
					<img src="<?php echo esc_url( BRANDKEY_URI . '/assets/icons/search.svg' ); ?>" alt="" class="search-icon" aria-hidden="true" />
				</button>

				<!-- زر تبديل اللغة -->
				<button class="lang-btn" id="langBtn" aria-label="<?php esc_attr_e( 'تغيير اللغة', 'brandkey' ); ?>">
					<img src="<?php echo esc_url( BRANDKEY_URI . '/assets/icons/language.svg' ); ?>" alt="" class="lang-icon" aria-hidden="true" />
					<span>EN</span>
				</button>

				<!-- زر الـ CTA الأساسي -->
				<a href="<?php echo esc_url( get_permalink( get_page_by_path( 'contact' ) ) ?: home_url( '/contact' ) ); ?>" class="cta-btn" id="ctaBtn">
					<span><?php esc_html_e( 'تواصل معنا', 'brandkey' ); ?></span>
					<img src="<?php echo esc_url( BRANDKEY_URI . '/assets/icons/contact.svg' ); ?>" alt="" class="cta-icon" aria-hidden="true" />
				</a>

				<!-- زر القايمة (هامبرغر) -->
				<button class="icon-btn menu-btn" id="navToggle" aria-label="<?php esc_attr_e( 'القائمة', 'brandkey' ); ?>" aria-expanded="false" aria-controls="navOverlay">
					<span class="menu-line menu-line-1"></span>
					<span class="menu-line menu-line-2"></span>
					<span class="menu-line menu-line-3"></span>
				</button>

			</div>

		</div>
	</header>

	<!-- ===== الناف المنزلق (Nav Overlay) ===== -->
	<div class="nav-overlay" id="navOverlay" aria-hidden="true">
		<div class="nav-overlay-backdrop"></div>

		<div class="nav-overlay-panel">

			<!-- زر الإغلاق -->
			<button class="close-btn" id="navClose" aria-label="<?php esc_attr_e( 'إغلاق القائمة', 'brandkey' ); ?>">
				<span class="close-line close-line-1"></span>
				<span class="close-line close-line-2"></span>
			</button>

			<!-- المقدمة -->
			<div class="nav-intro">
				<span class="nav-intro-eyebrow"><?php esc_html_e( 'مرحباً بك في', 'brandkey' ); ?></span>
				<h2 class="nav-intro-title"><?php bloginfo( 'name' ); ?></h2>
				<p class="nav-intro-desc"><?php bloginfo( 'description' ); ?></p>
			</div>

			<!-- القائمة الرئيسية -->
			<nav class="nav-links" aria-label="<?php esc_attr_e( 'روابط سريعة', 'brandkey' ); ?>">
				<?php
				if ( has_nav_menu( 'primary' ) ) {
					wp_nav_menu( array(
						'theme_location' => 'primary',
						'container'      => false,
						'menu_class'     => 'nav-menu',
						'walker'         => new BrandKey_Nav_Walker(),
						'fallback_cb'    => false,
					) );
				} else {
					// Fallback: قائمة افتراضية
					brandkey_default_nav();
				}
				?>
			</nav>

			<!-- فوتر الناف: CTA + contact -->
			<div class="nav-overlay-footer">
				<a href="<?php echo esc_url( get_permalink( get_page_by_path( 'contact' ) ) ?: home_url( '/contact' ) ); ?>" class="nav-cta">
					<span><?php esc_html_e( 'ابدأ الآن، مجاناً', 'brandkey' ); ?></span>
					<img src="<?php echo esc_url( BRANDKEY_URI . '/assets/icons/start-icon.svg' ); ?>" alt="" />
				</a>
				<div class="nav-contact">
					<a href="tel:<?php echo esc_attr( get_theme_mod( 'brandkey_phone', '+201001234567' ) ); ?>"><?php echo esc_html( get_theme_mod( 'brandkey_phone_display', '+20 100 123 4567' ) ); ?></a>
					<a href="mailto:<?php echo esc_attr( get_theme_mod( 'brandkey_email', 'info@brandkey.com' ) ); ?>"><?php echo esc_html( get_theme_mod( 'brandkey_email', 'info@brandkey.com' ) ); ?></a>
				</div>
			</div>

		</div>
	</div>

	<!-- ===== حاوية البحث ===== -->
	<div class="search-overlay" id="searchOverlay" aria-hidden="true">
		<div class="search-overlay-backdrop"></div>
		<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
			<button type="button" class="search-close" id="searchClose" aria-label="<?php esc_attr_e( 'إغلاق البحث', 'brandkey' ); ?>">
				<span class="close-line close-line-1"></span>
				<span class="close-line close-line-2"></span>
			</button>
			<div class="search-input-wrap">
				<img src="<?php echo esc_url( BRANDKEY_URI . '/assets/icons/search.svg' ); ?>" alt="" class="search-input-icon" aria-hidden="true" />
				<input type="search" class="search-input" placeholder="<?php esc_attr_e( 'ابحث عن...', 'brandkey' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
			</div>
			<button type="submit" class="search-submit"><?php esc_html_e( 'بحث', 'brandkey' ); ?></button>
		</form>
	</div>

	<main id="main" class="site-main">
