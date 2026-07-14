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
 * Include files
 */
require_once get_template_directory() . '/inc/sections.php';
require_once get_template_directory() . '/inc/customizer.php';
require_once get_template_directory() . '/inc/seeder.php';
require_once get_template_directory() . '/inc/meta-fields.php';

/**
 * Enqueue admin scripts (media uploader + repeater JS)
 */
function bk_admin_scripts( $hook ) {
        if ( 'post.php' !== $hook && 'post-new.php' !== $hook ) return;
        wp_enqueue_media();
        wp_enqueue_script( 'bk-admin-meta', BK_URI . '/assets/js/admin-meta.js', array( 'jquery', 'wp-color-picker' ), BK_VERSION, true );
        wp_enqueue_style( 'wp-color-picker' );
}
add_action( 'admin_enqueue_scripts', 'bk_admin_scripts' );

/**
 * Admin styles for meta boxes
 */
function bk_admin_styles() {
        ?>
        <style>
        .bk-meta-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 12px; }
        .bk-field { margin-bottom: 12px; }
        .bk-field-label { display: block; font-weight: 600; margin-bottom: 4px; font-size: 13px; }
        .bk-input, .bk-textarea, .bk-select { width: 100%; max-width: 100%; }
        .bk-field-checkbox label { font-weight: 600; cursor: pointer; }
        .bk-field-checkbox input { margin-left: 6px; }
        .bk-repeater { margin-top: 16px; border-top: 2px solid #ddd; padding-top: 12px; }
        .bk-repeater-rows { margin-bottom: 10px; }
        .bk-repeater-row { border: 1px solid #ddd; border-radius: 6px; margin-bottom: 10px; overflow: hidden; }
        .bk-repeater-row-header { background: #f7f7f7; padding: 8px 12px; display: flex; justify-content: space-between; align-items: center; cursor: pointer; }
        .bk-repeater-row-title { font-weight: 600; }
        .bk-repeater-row-body { padding: 12px; }
        .bk-repeater-add { margin-top: 6px !important; }
        .bk-image-wrap { display: flex; align-items: center; gap: 10px; flex-wrap: wrap; }
        .bk-image-preview { width: 120px; height: 80px; border: 1px dashed #ccc; display: flex; align-items: center; justify-content: center; overflow: hidden; }
        .bk-image-preview img { max-width: 100%; max-height: 100%; }
        </style>
        <?php
}
add_action( 'admin_head', 'bk_admin_styles' );

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
        wp_enqueue_style( 'bk-fonts', 'https://fonts.googleapis.com/css2?family=Cairo:wght@400;500;600;700;800;900&display=swap', array(), null );
        wp_enqueue_style( 'bk-style', BK_URI . '/assets/css/shared.css', array(), BK_VERSION );
        wp_enqueue_script( 'bk-script', BK_URI . '/assets/js/shared.js', array(), BK_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'bk_scripts' );

/**
 * Helper: output icon URL
 */
function bk_icon( $name ) {
        echo esc_url( BK_URI . '/assets/icons/' . $name );
}

/**
 * Nav Walker — SVG icons via CSS classes
 */
class BK_Nav_Walker extends Walker_Nav_Menu {
        public function start_lvl( &$output, $depth = 0, $args = array() ) {}
        public function end_lvl( &$output, $depth = 0, $args = array() ) {}

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

        public function end_el( &$output, $item, $depth = 0, $args = array() ) {}
}

/**
 * Get inline SVG for nav icon
 */
function bk_get_nav_icon( $name ) {
        $svg = @file_get_contents( get_template_directory() . '/assets/icons/' . $name . '.svg' );
        if ( $svg ) {
                $svg = preg_replace( '/\s+width="[^"]*"/', '', $svg );
                $svg = preg_replace( '/\s+height="[^"]*"/', '', $svg );
                $svg = str_replace( 'fill="#F2C94C"', 'fill="currentColor"', $svg );
                return $svg;
        }
        return '';
}
