<?php
/**
 * Shortcodes for reusable components
 *
 * @package BrandKey
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Shortcode: [bk_hero]
 * Displays the hero section
 */
function brandkey_shortcode_hero( $atts ) {
	$atts = shortcode_atts( array(
		'title'       => '',
		'desc'        => '',
		'primary_text'=> '',
		'primary_url' => '',
		'ghost_text'  => '',
		'ghost_url'   => '',
	), $atts, 'bk_hero' );

	// Use Customizer values as defaults
	$title        = $atts['title'] ? $atts['title'] : get_theme_mod( 'brandkey_hero_title', 'حلول تسويق رقمي متكاملة تنمو مع أعمالك' );
	$desc         = $atts['desc'] ? $atts['desc'] : get_theme_mod( 'brandkey_hero_desc', 'في Brand Key، ندمج الإبداع البصري مع الاستراتيجية التسويقية والتقنية المتقدمة لنقدم لك منظومة رقمية متكاملة تحقق أهدافك.' );
	$primary_text = $atts['primary_text'] ? $atts['primary_text'] : get_theme_mod( 'brandkey_hero_primary_text', 'ابدأ الآن، مجاناً' );
	$primary_url  = $atts['primary_url'] ? $atts['primary_url'] : get_theme_mod( 'brandkey_hero_primary_url', '/contact' );
	$ghost_text   = $atts['ghost_text'] ? $atts['ghost_text'] : get_theme_mod( 'brandkey_hero_ghost_text', 'استكشف خدماتنا' );

	set_query_var( 'bk_hero_data', array(
		'title'        => $title,
		'desc'         => $desc,
		'primary_text' => $primary_text,
		'primary_url'  => $primary_url,
		'ghost_text'   => $ghost_text,
		'ghost_url'    => $atts['ghost_url'] ?: '#',
	) );

	ob_start();
	get_template_part( 'template-parts/sections/hero' );
	return ob_get_clean();
}
add_shortcode( 'bk_hero', 'brandkey_shortcode_hero' );

/**
 * Shortcode: [bk_cta_final]
 * Displays the final CTA section
 */
function brandkey_shortcode_cta_final( $atts ) {
	$atts = shortcode_atts( array(
		'title' => '',
		'desc'  => '',
		'btn_text' => '',
		'btn_url'  => '',
	), $atts, 'bk_cta_final' );

	$title   = $atts['title'] ? $atts['title'] : get_theme_mod( 'brandkey_cta_final_title', 'مستعد تبدأ رحلتك الرقمية!' );
	$desc    = $atts['desc'] ? $atts['desc'] : get_theme_mod( 'brandkey_cta_final_desc', 'استشارة مجانية 30 دقيقة مع خبراء براند كي — بنحلل وضعك ونقولك بالظبط إيه اللي محتاجه' );
	$btn_text= $atts['btn_text'] ? $atts['btn_text'] : __( 'تواصل معنا الآن!', 'brandkey' );
	$btn_url = $atts['btn_url'] ? $atts['btn_url'] : home_url( '/contact' );

	set_query_var( 'bk_cta_final_data', array(
		'title'   => $title,
		'desc'    => $desc,
		'btn_text'=> $btn_text,
		'btn_url' => $btn_url,
	) );

	ob_start();
	get_template_part( 'template-parts/sections/cta-final' );
	return ob_get_clean();
}
add_shortcode( 'bk_cta_final', 'brandkey_shortcode_cta_final' );

/**
 * Shortcode: [bk_testimonials]
 * Displays testimonials section
 */
function brandkey_shortcode_testimonials( $atts ) {
	$atts = shortcode_atts( array(
		'count' => 6,
		'title' => '',
	), $atts, 'bk_testimonials' );

	$title = $atts['title'] ? $atts['title'] : get_theme_mod( 'brandkey_testimonials_title', 'ماذا يقول عملاؤنا' );

	$testimonials = new WP_Query( array(
		'post_type'      => 'bk_testimonial',
		'posts_per_page' => intval( $atts['count'] ),
		'orderby'        => 'menu_order',
		'order'          => 'ASC',
	) );

	set_query_var( 'bk_testimonials_data', array(
		'title'        => $title,
		'testimonials' => $testimonials,
	) );

	ob_start();
	get_template_part( 'template-parts/sections/testimonials' );
	return ob_get_clean();
}
add_shortcode( 'bk_testimonials', 'brandkey_shortcode_testimonials' );

/**
 * Shortcode: [bk_faq]
 * Displays FAQ section
 */
function brandkey_shortcode_faq( $atts ) {
	$atts = shortcode_atts( array(
		'count' => 6,
		'title' => '',
	), $atts, 'bk_faq' );

	$title = $atts['title'] ? $atts['title'] : get_theme_mod( 'brandkey_faq_title', 'الأسئلة الشائعة' );

	$faqs = new WP_Query( array(
		'post_type'      => 'bk_faq',
		'posts_per_page' => intval( $atts['count'] ),
		'orderby'        => 'menu_order',
		'order'          => 'ASC',
	) );

	set_query_var( 'bk_faq_data', array(
		'title' => $title,
		'faqs'  => $faqs,
	) );

	ob_start();
	get_template_part( 'template-parts/sections/faq' );
	return ob_get_clean();
}
add_shortcode( 'bk_faq', 'brandkey_shortcode_faq' );

/**
 * Shortcode: [bk_pricing]
 * Displays pricing section
 */
function brandkey_shortcode_pricing( $atts ) {
	$atts = shortcode_atts( array(
		'title' => '',
		'desc'  => '',
	), $atts, 'bk_pricing' );

	$title = $atts['title'] ? $atts['title'] : get_theme_mod( 'brandkey_pricing_title', 'باقات مرنة.. ونتائج غير محدودة' );
	$desc  = $atts['desc'] ? $atts['desc'] : get_theme_mod( 'brandkey_pricing_desc', 'اختر الباقة المناسبة لاحتياجاتك' );

	$packages = new WP_Query( array(
		'post_type'      => 'bk_package',
		'posts_per_page' => -1,
		'orderby'        => 'menu_order',
		'order'          => 'ASC',
	) );

	set_query_var( 'bk_pricing_data', array(
		'title'    => $title,
		'desc'     => $desc,
		'packages' => $packages,
	) );

	ob_start();
	get_template_part( 'template-parts/sections/pricing' );
	return ob_get_clean();
}
add_shortcode( 'bk_pricing', 'brandkey_shortcode_pricing' );

/**
 * Shortcode: [bk_blog]
 * Displays latest blog posts section
 */
function brandkey_shortcode_blog( $atts ) {
	$atts = shortcode_atts( array(
		'count' => 3,
		'title' => '',
	), $atts, 'bk_blog' );

	$title = $atts['title'] ? $atts['title'] : get_theme_mod( 'brandkey_blog_title', 'آخر أخبارنا' );

	$posts = new WP_Query( array(
		'post_type'      => 'post',
		'posts_per_page' => intval( $atts['count'] ),
	) );

	set_query_var( 'bk_blog_data', array(
		'title' => $title,
		'posts' => $posts,
	) );

	ob_start();
	get_template_part( 'template-parts/sections/blog' );
	return ob_get_clean();
}
add_shortcode( 'bk_blog', 'brandkey_shortcode_blog' );

/**
 * Shortcode: [bk_button]
 * Displays a button
 */
function brandkey_shortcode_button( $atts ) {
	$atts = shortcode_atts( array(
		'text'    => __( 'ابدأ الآن', 'brandkey' ),
		'url'     => '#',
		'icon'    => '',
		'style'   => 'primary', // primary | ghost | outline
		'target'  => '_self',
	), $atts, 'bk_button' );

	$classes = 'btn btn--' . $atts['style'];
	$target  = '_blank' === $atts['target'] ? ' target="_blank" rel="noopener"' : '';

	$html = '<a href="' . esc_url( $atts['url'] ) . '" class="' . esc_attr( $classes ) . '"' . $target . '>';
	$html .= '<span>' . esc_html( $atts['text'] ) . '</span>';
	if ( $atts['icon'] ) {
		$html .= '<img src="' . esc_url( $atts['icon'] ) . '" alt="" aria-hidden="true" />';
	}
	$html .= '</a>';

	return $html;
}
add_shortcode( 'bk_button', 'brandkey_shortcode_button' );

/**
 * Shortcode: [bk_section_title]
 * Displays a section title with heading line
 */
function brandkey_shortcode_section_title( $atts ) {
	$atts = shortcode_atts( array(
		'title'    => '',
		'subtitle' => '',
		'align'    => 'center', // center | right | left
		'dark'     => 'false',  // true for dark sections
	), $atts, 'bk_section_title' );

	$dark = 'true' === $atts['dark'];
	$line = $dark ? 'line-white.png' : 'heading-line.png';

	$html = '<header class="section-head section-head--' . esc_attr( $atts['align'] ) . '">';
	$html .= '<h2 class="section-title">' . esc_html( $atts['title'] ) . '</h2>';
	$html .= '<img src="' . esc_url( BRANDKEY_URI . '/assets/icons/' . $line ) . '" alt="" class="heading-line section-heading-line" aria-hidden="true" />';
	if ( $atts['subtitle'] ) {
		$html .= '<p class="section-subtitle">' . esc_html( $atts['subtitle'] ) . '</p>';
	}
	$html .= '</header>';

	return $html;
}
add_shortcode( 'bk_section_title', 'brandkey_shortcode_section_title' );
