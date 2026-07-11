<?php
/**
 * Template helper functions
 *
 * @package BrandKey
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Custom Nav Walker for the primary menu
 * Adds icon support and proper RTL classes
 */
class BrandKey_Nav_Walker extends Walker_Nav_Menu {

	/**
	 * Starts the element output.
	 */
	public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
		$icon = get_field( 'menu_icon', $item );
		$icon_html = '';

		if ( $icon ) {
			$icon_html = '<span class="nav-link-icon">' . wp_get_attachment_image( $icon, 'full', false, array( 'alt' => '' ) ) . '</span>';
		}

		$classes   = empty( $item->classes ) ? array() : (array) $item->classes;
		$classes[] = 'menu-item-' . $item->ID;

		$args = (object) $args;

		$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
		$class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

		$id = apply_filters( 'nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args );
		$id = $id ? ' id="' . esc_attr( $id ) . '"' : '';

		$output .= '<a' . $id . $class_names . ' href="' . esc_url( $item->url ) . '" class="nav-link">';

		$output .= $icon_html;

		$output .= '<span class="nav-link-text">' . esc_html( $item->title ) . '</span>';

		$output .= '<span class="nav-link-arrow" aria-hidden="true">';
		$output .= '<svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M2 8H14M14 8L9 3M14 8L9 13" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>';
		$output .= '</span>';

		$output .= '</a>';
	}
}

/**
 * Default nav menu (fallback when no menu is set)
 */
function brandkey_default_nav() {
	$items = array(
		array( 'title' => __( 'الرئيسية', 'brandkey' ), 'url' => home_url( '/' ), 'icon' => 'home' ),
		array( 'title' => __( 'استشارات التسويق', 'brandkey' ), 'url' => home_url( '/consulting' ), 'icon' => 'consulting' ),
		array( 'title' => __( 'معرض الأعمال', 'brandkey' ), 'url' => home_url( '/portfolio' ), 'icon' => 'portfolio' ),
		array( 'title' => __( 'تدريب الشركات', 'brandkey' ), 'url' => home_url( '/training' ), 'icon' => 'training' ),
		array( 'title' => __( 'الباقات والأسعار', 'brandkey' ), 'url' => home_url( '/pricing' ), 'icon' => 'pricing' ),
		array( 'title' => __( 'منظومة التكامل', 'brandkey' ), 'url' => home_url( '/integration' ), 'icon' => 'integration' ),
		array( 'title' => __( 'من نحن', 'brandkey' ), 'url' => home_url( '/about' ), 'icon' => 'about' ),
		array( 'title' => __( 'المدونة', 'brandkey' ), 'url' => home_url( '/blog' ), 'icon' => 'blog' ),
	);

	foreach ( $items as $item ) {
		echo '<a href="' . esc_url( $item['url'] ) . '" class="nav-link">';
		echo '<span class="nav-link-icon"><img src="' . esc_url( BRANDKEY_URI . '/assets/icons/' . $item['icon'] . '.svg' ) . '" alt="" aria-hidden="true" /></span>';
		echo '<span class="nav-link-text">' . esc_html( $item['title'] ) . '</span>';
		echo '<span class="nav-link-arrow" aria-hidden="true"><svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M2 8H14M14 8L9 3M14 8L9 13" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></span>';
		echo '</a>';
	}
}

/**
 * Default footer menu (fallback)
 */
function brandkey_default_footer_menu() {
	$items = array(
		array( 'title' => __( 'الرئيسية', 'brandkey' ), 'url' => home_url( '/' ) ),
		array( 'title' => __( 'عن الشركة', 'brandkey' ), 'url' => home_url( '/about' ) ),
		array( 'title' => __( 'خدماتنا', 'brandkey' ), 'url' => home_url( '/services' ) ),
		array( 'title' => __( 'عملاؤنا', 'brandkey' ), 'url' => home_url( '/portfolio' ) ),
		array( 'title' => __( 'التوظيف', 'brandkey' ), 'url' => '#' ),
		array( 'title' => __( 'سياسة الخصوصية', 'brandkey' ), 'url' => '#' ),
	);

	echo '<ul class="footer-links">';
	foreach ( $items as $item ) {
		echo '<li><a href="' . esc_url( $item['url'] ) . '">' . esc_html( $item['title'] ) . '</a></li>';
	}
	echo '</ul>';
}

/**
 * Default services menu (fallback when no CPT services exist)
 */
function brandkey_default_services_menu() {
	$items = array(
		__( 'تسويق رقمي', 'brandkey' ),
		__( 'التصميم', 'brandkey' ),
		__( 'تطوير المواقع', 'brandkey' ),
		__( 'الإعلانات المدفوعة', 'brandkey' ),
		__( 'تواصل معنا', 'brandkey' ),
		__( 'سياسة الخصوصية', 'brandkey' ),
	);

	foreach ( $items as $item ) {
		echo '<li><a href="#">' . esc_html( $item ) . '</a></li>';
	}
}

/**
 * Get a theme mod with default value
 */
function brandkey_get_option( $key, $default = '' ) {
	return get_theme_mod( $key, $default );
}

/**
 * Output a section only if it's enabled (via Customizer)
 */
function brandkey_is_section_enabled( $section ) {
	$default = true;
	return get_theme_mod( 'brandkey_enable_' . $section, $default );
}

/**
 * Get section title (with Customizer override)
 */
function brandkey_section_title( $section, $default ) {
	return get_theme_mod( 'brandkey_' . $section . '_title', $default );
}

/**
 * Get section description (with Customizer override)
 */
function brandkey_section_desc( $section, $default ) {
	return get_theme_mod( 'brandkey_' . $section . '_desc', $default );
}

/**
 * Render a button with Customizer options
 */
function brandkey_button( $args = array() ) {
	$defaults = array(
		'text'     => __( 'ابدأ الآن', 'brandkey' ),
		'url'      => '#',
		'icon'     => '',
		'style'    => 'primary', // primary | ghost | outline
		'class'    => '',
		'new_tab'  => false,
	);

	$args = wp_parse_args( $args, $defaults );

	$classes = 'btn btn--' . $args['style'];
	if ( $args['class'] ) {
		$classes .= ' ' . $args['class'];
	}

	$target = $args['new_tab'] ? ' target="_blank" rel="noopener"' : '';

	echo '<a href="' . esc_url( $args['url'] ) . '" class="' . esc_attr( $classes ) . '"' . $target . '>';
	echo '<span>' . esc_html( $args['text'] ) . '</span>';
	if ( $args['icon'] ) {
		echo '<img src="' . esc_url( $args['icon'] ) . '" alt="" aria-hidden="true" />';
	}
	echo '</a>';
}

/**
 * Get post excerpt by ID
 */
function brandkey_get_excerpt( $post_id, $length = 30 ) {
	$post = get_post( $post_id );
	if ( ! $post ) {
		return '';
	}

	$text = $post->post_excerpt ? $post->post_excerpt : $post->post_content;
	$text = wp_strip_all_tags( $text );
	$text = trim( preg_replace( '/\s+/', ' ', $text ) );

	if ( mb_strlen( $text ) > $length ) {
		$text = mb_substr( $text, 0, $length ) . '...';
	}

	return $text;
}

/**
 * Format date in Arabic
 */
function brandkey_arabic_date( $post_id = null ) {
	$format = get_option( 'date_format' );
	return get_the_date( $format, $post_id );
}

/**
 * Reading time
 */
function brandkey_reading_time( $post_id = null ) {
	$post = get_post( $post_id );
	if ( ! $post ) {
		return '';
	}

	$content = wp_strip_all_tags( $post->post_content );
	$words   = str_word_count( $content );
	$minutes = max( 1, ceil( $words / 200 ) );

	return sprintf(
		/* translators: %d: minutes */
		_n( '%d دقيقة قراءة', '%d دقائق قراءة', $minutes, 'brandkey' ),
		$minutes
	);
}
