<?php
/**
 * Brand Key Theme functions
 *
 * @package BrandKey
 */

if ( ! defined( 'ABSPATH' ) ) exit;

define( 'BK_VERSION', '1.0.0' );
define( 'BK_URI', get_template_directory_uri() );

/**
 * Theme setup
 */
function bk_setup() {
	load_theme_textdomain( 'brandkey', get_template_directory() . '/languages' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-logo', array( 'height' => 60, 'width' => 200, 'flex-width' => true, 'flex-height' => true ) );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'responsive-embeds' );

	// قوائم التنقل
	register_nav_menus( array(
		'nav_services'    => __( 'قائمة الخدمات (في الناف)', 'brandkey' ),
		'nav_sectors'     => __( 'قائمة القطاعات (في الناف)', 'brandkey' ),
		'nav_quick_links' => __( 'الروابط السريعة (في الناف)', 'brandkey' ),
		'footer_quick'    => __( 'روابط سريعة (الفوتر)', 'brandkey' ),
		'footer_services' => __( 'خدماتنا (الفوتر)', 'brandkey' ),
	) );

	add_image_size( 'bk-hero', 1920, 1080, true );
	add_image_size( 'bk-card', 600, 400, true );
}
add_action( 'after_setup_theme', 'bk_setup' );

/**
 * Enqueue scripts and styles
 */
function bk_scripts() {
	// Google Fonts
	wp_enqueue_style( 'bk-fonts', 'https://fonts.googleapis.com/css2?family=Cairo:wght@400;500;600;700;800;900&display=swap', array(), null );

	// CSS الرئيسي (من التمبلت زي ما هو)
	wp_enqueue_style( 'bk-style', BK_URI . '/assets/css/shared.css', array(), BK_VERSION );

	// JS الرئيسي (من التمبلت زي ما هو)
	wp_enqueue_script( 'bk-script', BK_URI . '/assets/js/shared.js', array(), BK_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'bk_scripts' );

/**
 * Customizer
 */
function bk_customize_register( $wp_customize ) {
	// التواصل
	$wp_customize->add_section( 'bk_contact', array(
		'title' => __( 'معلومات التواصل', 'brandkey' ),
		'priority' => 30,
	) );

	$fields = array(
		'bk_email'         => array( 'label' => __( 'البريد الإلكتروني', 'brandkey' ), 'default' => 'info@brandkey.com', 'type' => 'email' ),
		'bk_phone'         => array( 'label' => __( 'رقم الهاتف (للاتصال)', 'brandkey' ), 'default' => '+201001234567', 'type' => 'text' ),
		'bk_phone_display' => array( 'label' => __( 'رقم الهاتف (للعرض)', 'brandkey' ), 'default' => '+20 100 123 4567', 'type' => 'text' ),
		'bk_address'       => array( 'label' => __( 'العنوان', 'brandkey' ), 'default' => 'القاهرة | مصر، شارع التحرير', 'type' => 'text' ),
		'bk_map_url'       => array( 'label' => __( 'رابط الخريطة', 'brandkey' ), 'default' => 'https://maps.google.com', 'type' => 'url' ),
		'bk_about_text'    => array( 'label' => __( 'نبذة عن الشركة (الفوتر)', 'brandkey' ), 'default' => 'شركة متخصصة في التسويق الرقمي وخدمات التكنولوجيا، أسست في عام 2011. نسعى دائماً لتقديم حلول مبتكرة تساعد عملائنا على النمو والنجاح.', 'type' => 'textarea' ),
	);

	foreach ( $fields as $id => $f ) {
		$wp_customize->add_setting( $id, array( 'default' => $f['default'], 'sanitize_callback' => 'sanitize_text_field' ) );
		$wp_customize->add_control( $id, array( 'label' => $f['label'], 'section' => 'bk_contact', 'type' => $f['type'] ) );
	}

	// السوشيال
	$wp_customize->add_section( 'bk_social', array(
		'title' => __( 'روابط التواصل الاجتماعي', 'brandkey' ),
		'priority' => 31,
	) );

	$socials = array( 'facebook' => 'فيسبوك', 'instagram' => 'إنستجرام', 'linkedin' => 'لينكد إن', 'twitter' => 'إكس (تويتر)' );
	foreach ( $socials as $key => $label ) {
		$wp_customize->add_setting( 'bk_' . $key, array( 'default' => '#', 'sanitize_callback' => 'esc_url_raw' ) );
		$wp_customize->add_control( 'bk_' . $key, array( 'label' => $label, 'section' => 'bk_social', 'type' => 'url' ) );
	}
}
add_action( 'customize_register', 'bk_customize_register' );

/**
 * Helper: output icon URL
 */
function bk_icon( $name ) {
	echo esc_url( BK_URI . '/assets/icons/' . $name );
}

/**
 * Nav Walker — يضيف SVG icons للروابط السريعة بناءً على CSS classes
 * المستخدم يضيف class زي "icon-home" في محرر القائمة
 */
class BK_Nav_Walker extends Walker_Nav_Menu {
	public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
		$icon_html = '';
		$classes = empty( $item->classes ) ? array() : (array) $item->classes;

		foreach ( $classes as $cls ) {
			if ( strpos( $cls, 'icon-' ) === 0 ) {
				$icon_name = substr( $cls, 5 );
				$svg = bk_get_nav_icon( $icon_name );
				if ( $svg ) {
					$icon_html = '<span class="nav-link-icon">' . $svg . '</span>';
					break;
				}
			}
		}

		$output .= '<a href="' . esc_url( $item->url ) . '" class="nav-link">';
		$output .= $icon_html;
		$output .= '<span class="nav-link-text">' . esc_html( $item->title ) . '</span>';
		$output .= '<span class="nav-link-arrow" aria-hidden="true"><svg width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M9 3L4 7L9 11" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></span>';
		$output .= '</a>';
	}
}

/**
 * Get inline SVG for nav icon
 */
function bk_get_nav_icon( $name ) {
	// نفس الـ SVGs اللي في التمبلت
	$svg = @file_get_contents( get_template_directory() . '/assets/icons/' . $name . '.svg' );
	if ( $svg ) {
		// شيل width/height عشان ياخد حجم CSS
		$svg = preg_replace( '/\s+width="[^"]*"/', '', $svg );
		$svg = preg_replace( '/\s+height="[^"]*"/', '', $svg );
		// replace fill="#F2C94C" بـ currentColor
		$svg = str_replace( 'fill="#F2C94C"', 'fill="currentColor"', $svg );
		return $svg;
	}
	return '';
}
