<?php
/**
 * Brand Key Theme functions and definitions
 *
 * @package BrandKey
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
        exit; // Exit if accessed directly.
}

/**
 * Theme version (for cache-busting assets)
 */
if ( ! defined( 'BRANDKEY_VERSION' ) ) {
        define( 'BRANDKEY_VERSION', '1.0.0' );
}

/**
 * Theme directory URI shortcut
 */
if ( ! defined( 'BRANDKEY_URI' ) ) {
        define( 'BRANDKEY_URI', get_template_directory_uri() );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function brandkey_setup() {
        // Make theme available for translation.
        load_theme_textdomain( 'brandkey', get_template_directory() . '/languages' );

        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );

        // Let WordPress manage the document title.
        add_theme_support( 'title-tag' );

        // Enable support for Post Thumbnails on posts and pages.
        add_theme_support( 'post-thumbnails' );

        // Register navigation menus.
        register_nav_menus( array(
                'primary' => __( 'القائمة الرئيسية', 'brandkey' ),
                'footer'  => __( 'قائمة الفوتر', 'brandkey' ),
                'social'  => __( 'روابط التواصل الاجتماعي', 'brandkey' ),
        ) );

        // Switch default core markup to output valid HTML5.
        add_theme_support( 'html5', array(
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
                'style',
                'script',
        ) );

        // Add support for custom logo.
        add_theme_support( 'custom-logo', array(
                'height'      => 60,
                'width'       => 200,
                'flex-width'  => true,
                'flex-height' => true,
        ) );

        // Add support for editor styles.
        add_theme_support( 'editor-styles' );

        // Add support for responsive embedded content.
        add_theme_support( 'responsive-embeds' );

        // Image sizes for the theme.
        add_image_size( 'brandkey-hero', 1920, 1080, true );
        add_image_size( 'brandkey-card', 600, 400, true );
        add_image_size( 'brandkey-thumb', 300, 200, true );
}
add_action( 'after_setup_theme', 'brandkey_setup' );

/**
 * Set the content width in pixels.
 */
function brandkey_content_width() {
        $GLOBALS['content_width'] = apply_filters( 'brandkey_content_width', 1280 );
}
add_action( 'after_setup_theme', 'brandkey_content_width', 0 );

/**
 * Enqueue scripts and styles.
 */
function brandkey_scripts() {
        // Main stylesheet (shared.css from the static theme)
        wp_enqueue_style( 'brandkey-style', BRANDKEY_URI . '/assets/css/shared.css', array(), BRANDKEY_VERSION );

        // Google Fonts (Cairo)
        wp_enqueue_style( 'brandkey-fonts', 'https://fonts.googleapis.com/css2?family=Cairo:wght@400;500;600;700;800;900&display=swap', array(), null );

        // Main JavaScript
        wp_enqueue_script( 'brandkey-script', BRANDKEY_URI . '/assets/js/shared.js', array(), BRANDKEY_VERSION, true );

        // NOTE: includes.js مش محمّل في ووردبريس — header.php و footer.php بيرندروا الهيدر/الفوتر مباشرة

        // Pass data to JS
        wp_localize_script( 'brandkey-script', 'brandkeyData', array(
                'ajaxUrl'  => admin_url( 'admin-ajax.php' ),
                'nonce'    => wp_create_nonce( 'brandkey_nonce' ),
                'themeUri' => BRANDKEY_URI,
        ) );
}
add_action( 'wp_enqueue_scripts', 'brandkey_scripts' );

/**
 * Add preconnect for Google Fonts.
 */
function brandkey_resource_hints( $hints, $relation_type ) {
        if ( 'preconnect' === $relation_type ) {
                $hints[] = array(
                        'href'        => 'https://fonts.gstatic.com',
                        'crossorigin' => '',
                );
        }
        return $hints;
}
add_filter( 'wp_resource_hints', 'brandkey_resource_hints', 10, 2 );

/**
 * Include additional files.
 */
require_once get_template_directory() . '/inc/custom-post-types.php';
require_once get_template_directory() . '/inc/customizer.php';
require_once get_template_directory() . '/inc/template-helpers.php';
require_once get_template_directory() . '/inc/shortcodes.php';
require_once get_template_directory() . '/inc/meta-boxes.php';
require_once get_template_directory() . '/inc/import/import-default-data.php';

/**
 * Add custom body classes.
 */
function brandkey_body_classes( $classes ) {
        if ( is_rtl() ) {
                $classes[] = 'rtl';
        }
        if ( ! is_singular() ) {
                $classes[] = 'hfeed';
        }
        return $classes;
}
add_filter( 'body_class', 'brandkey_body_classes' );

/**
 * Add custom CSS variables to head (from Customizer).
 */
function brandkey_custom_css() {
        $navy       = get_theme_mod( 'brandkey_navy_color', '#0E233F' );
        $gold       = get_theme_mod( 'brandkey_gold_color', '#F2C94C' );
        $gold_press = get_theme_mod( 'brandkey_gold_press_color', '#C9A233' );
        $footer_bg  = get_theme_mod( 'brandkey_footer_bg_color', '#060e19' );

        ?>
        <style id="brandkey-custom-css">
                :root {
                        --navy: <?php echo esc_html( $navy ); ?>;
                        --gold: <?php echo esc_html( $gold ); ?>;
                        --gold-press: <?php echo esc_html( $gold_press ); ?>;
                }
                .site-footer { background: <?php echo esc_html( $footer_bg ); ?>; }
        </style>
        <?php
}
add_action( 'wp_head', 'brandkey_custom_css', 100 );
