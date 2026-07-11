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
 * Adds icon support via CSS classes (no ACF required)
 * المستخدم يضيف class زي "icon-home" في محرر القائمة
 */
class BrandKey_Nav_Walker extends Walker_Nav_Menu {

        /**
         * Starts the element output.
         */
        public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
                $icon_html = '';

                // ابحث عن class بشكل icon-XXX في عناصر القائمة
                $classes = empty( $item->classes ) ? array() : (array) $item->classes;
                foreach ( $classes as $cls ) {
                        if ( strpos( $cls, 'icon-' ) === 0 ) {
                                $icon_name = substr( $cls, 5 ); // شيل "icon-"
                                $svg = brandkey_get_nav_icon_svg( $icon_name );
                                if ( $svg ) {
                                        $icon_html = '<span class="nav-link-icon">' . $svg . '</span>';
                                        break;
                                }
                        }
                }

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
 * Get inline SVG for a nav icon by name
 * الأيقونات المتاحة: home, consulting, portfolio, training, pricing, integration, about, blog
 */
function brandkey_get_nav_icon_svg( $name ) {
        $icons = array(
                'home'       => '<svg viewBox="0 0 20 21" fill="none"><path d="M8.38 0.6C8.83 0.21 9.41 0 10 0C10.59 0 11.17 0.21 11.62 0.6L19.12 6.97C19.4 7.2 19.62 7.5 19.77 7.83C19.92 8.15 20 8.51 20 8.87V18.84C20 19.35 19.8 19.84 19.44 20.2C19.08 20.56 18.59 20.77 18.08 20.77H15C14.49 20.77 14.01 20.56 13.64 20.2C13.28 19.84 13.08 19.35 13.08 18.84V13.84C13.08 13.44 12.92 13.05 12.63 12.76C12.34 12.47 11.95 12.31 11.55 12.31H8.45C8.05 12.31 7.66 12.47 7.37 12.76C7.08 13.05 6.92 13.44 6.92 13.84V18.84C6.92 19.35 6.72 19.84 6.36 20.2C6 20.56 5.51 20.77 5 20.77H1.92C1.41 20.77 0.92 20.56 0.56 20.2C0.2 19.84 0 19.35 0 18.84V8.87C0 8.51 0.08 8.15 0.23 7.83C0.38 7.5 0.6 7.2 0.88 6.97L8.38 0.6Z" fill="currentColor"/></svg>',
                'consulting' => '<svg viewBox="0 0 24 18" fill="none"><path d="M10.15 10.06C9.63 10.57 9.22 11.17 8.94 11.84C8.66 12.5 8.52 13.21 8.52 13.94C8.52 15.27 9 16.49 9.8 17.43C8.87 17.68 7.92 17.81 6.97 17.81C5.15 17.81 3.45 17.39 2.18 16.61C0.92 15.84 0 14.66 0 13.16C0 12.34 0.33 11.55 0.91 10.97C1.49 10.39 2.28 10.06 3.1 10.06H10.15ZM14.71 10.06C14.92 10.06 15.11 10.15 15.26 10.29C15.4 10.44 15.48 10.63 15.48 10.84C15.48 11.04 15.4 11.24 15.26 11.39C15.11 11.53 14.92 11.61 14.71 11.61H13.94C13.32 11.61 12.73 11.86 12.29 12.29C11.86 12.73 11.61 13.32 11.61 13.94C11.61 14.55 11.86 15.14 12.29 15.58C12.73 16.01 13.32 16.26 13.94 16.26H14.71C14.92 16.26 15.11 16.34 15.26 16.48C15.4 16.63 15.48 16.83 15.48 17.03C15.48 17.24 15.4 17.43 15.26 17.58C15.11 17.72 14.92 17.81 14.71 17.81H13.94C12.91 17.81 11.92 17.4 11.2 16.67C10.47 15.95 10.06 14.96 10.06 13.94C10.06 12.91 10.47 11.92 11.2 11.2C11.92 10.47 12.91 10.06 13.94 10.06H14.71ZM20.13 10.06C21.16 10.06 22.14 10.47 22.87 11.2C23.59 11.92 24 12.91 24 13.94C24 14.96 23.59 15.95 22.87 16.67C22.14 17.4 21.16 17.81 20.13 17.81H19.35C19.15 17.81 18.95 17.72 18.81 17.58C18.66 17.43 18.58 17.24 18.58 17.03C18.58 16.83 18.66 16.63 18.81 16.48C18.95 16.34 19.15 16.26 19.35 16.26H20.13C20.75 16.26 21.34 16.01 21.77 15.58C22.21 15.14 22.45 14.55 22.45 13.94C22.45 13.32 22.21 12.73 21.77 12.29C21.34 11.86 20.75 11.61 20.13 11.61H19.35C19.15 11.61 18.95 11.53 18.81 11.39C18.66 11.24 18.58 11.04 18.58 10.84C18.58 10.63 18.66 10.44 18.81 10.29C18.95 10.15 19.15 10.06 19.35 10.06H20.13ZM6.97 0C8.1 0 9.18 0.45 9.98 1.25C10.78 2.05 11.23 3.13 11.23 4.26C11.23 5.39 10.78 6.47 9.98 7.27C9.18 8.07 8.1 8.52 6.97 8.52C5.84 8.52 4.76 8.07 3.96 7.27C3.16 6.47 2.71 5.39 2.71 4.26C2.71 3.13 3.16 2.05 3.96 1.25C4.76 0.45 5.84 0 6.97 0ZM17.04 1.54C17.5 1.53 17.96 1.62 18.39 1.79C18.82 1.96 19.22 2.21 19.55 2.54C19.88 2.87 20.14 3.25 20.32 3.68C20.5 4.11 20.6 4.57 20.6 5.03C20.6 5.49 20.5 5.95 20.32 6.38C20.14 6.81 19.88 7.2 19.55 7.52C19.22 7.85 18.82 8.1 18.39 8.27C17.96 8.44 17.5 8.53 17.04 8.52C16.12 8.5 15.26 8.12 14.62 7.47C13.98 6.82 13.62 5.94 13.62 5.03C13.62 4.12 13.98 3.24 14.62 2.59C15.26 1.94 16.12 1.56 17.04 1.54Z" fill="currentColor"/></svg>',
                'portfolio'  => '<svg viewBox="0 0 20 18" fill="none"><path d="M11 13H9C8.45 13 8 12.55 8 12H1.01V16C1.01 17.1 1.91 18 3.01 18H17C18.1 18 19 17.1 19 16V12H12C12 12.55 11.55 13 11 13ZM18 4H14C14 1.79 12.21 0 10 0C7.79 0 6 1.79 6 4H2C0.9 4 0 4.9 0 6V9C0 10.11 0.89 11 2 11H8V10C8 9.45 8.45 9 9 9H11C11.55 9 12 9.45 12 10V11H18C19.1 11 20 10.1 20 9V6C20 4.9 19.1 4 18 4ZM8 4C8 2.9 8.9 2 10 2C11.1 2 12 2.9 12 4H7.99H8Z" fill="currentColor"/></svg>',
                'training'   => '<svg viewBox="0 0 20 20" fill="none"><path d="M18 4H14V2C14 0.9 13.1 0 12 0H2C0.9 0 0 0.9 0 2V19C0 19.55 0.45 20 1 20H19C19.55 20 20 19.55 20 19V6C20 4.9 19.1 4 18 4ZM6 14H4V12H6V14ZM6 10H4V8H6V10ZM6 6H4V4H6V6ZM10 14H8V12H10V14ZM10 10H8V8H10V10ZM10 6H8V4H10V6ZM18 14H16V12H18V14ZM18 10H16V8H18V10Z" fill="currentColor"/></svg>',
                'pricing'    => '<svg viewBox="0 0 21 18" fill="none"><path d="M6.3 7.8C7.33 7.8 8.33 7.39 9.06 6.66C9.79 5.93 10.2 4.93 10.2 3.9C10.2 2.87 9.79 1.87 9.06 1.14C8.33 0.41 7.33 0 6.3 0C5.27 0 4.27 0.41 3.54 1.14C2.81 1.87 2.4 2.87 2.4 3.9C2.4 4.93 2.81 5.93 3.54 6.66C4.27 7.39 5.27 7.8 6.3 7.8ZM9 12C9 11.37 9.2 10.76 9.57 10.25C9.93 9.74 10.45 9.35 11.05 9.15C10.78 9.05 10.49 9 10.2 9H2.4C1.76 9 1.15 9.25 0.7 9.7C0.25 10.15 0 10.76 0 11.4C0 11.4 0 16.2 6.3 16.2C7.38 16.2 8.27 16.06 9.01 15.83C9 15.75 9 15.68 9 15.6V12ZM18.6 4.8C18.6 5.6 18.28 6.36 17.72 6.92C17.16 7.48 16.4 7.8 15.6 7.8C14.8 7.8 14.04 7.48 13.48 6.92C12.92 6.36 12.6 5.6 12.6 4.8C12.6 4 12.92 3.24 13.48 2.68C14.04 2.12 14.8 1.8 15.6 1.8C16.4 1.8 17.16 2.12 17.72 2.68C18.28 3.24 18.6 4 18.6 4.8ZM10.2 12C10.2 11.52 10.39 11.06 10.73 10.73C11.06 10.39 11.52 10.2 12 10.2H19.2C19.68 10.2 20.14 10.39 20.47 10.73C20.81 11.06 21 11.52 21 12V15.6C21 16.08 20.81 16.54 20.47 16.87C20.14 17.21 19.68 17.4 19.2 17.4H12C11.52 17.4 11.06 17.21 10.73 16.87C10.39 16.54 10.2 16.08 10.2 15.6V12Z" fill="currentColor"/></svg>',
                'integration'=> '<svg viewBox="0 0 19 19" fill="none"><path d="M4.25 0C4.81 0 5.36 0.11 5.88 0.32C6.39 0.54 6.86 0.85 7.26 1.25C7.65 1.64 7.96 2.11 8.18 2.62C8.39 3.14 8.5 3.69 8.5 4.25V8.5H4.25C3.12 8.5 2.04 8.05 1.24 7.26C0.45 6.46 0 5.38 0 4.25C0 3.12 0.45 2.04 1.24 1.24C2.04 0.45 3.12 0 4.25 0ZM4.25 10.5H8.5V14.75C8.5 15.59 8.25 16.41 7.78 17.11C7.32 17.81 6.65 18.35 5.88 18.68C5.1 19 4.25 19.08 3.42 18.92C2.6 18.75 1.84 18.35 1.24 17.76C0.65 17.16 0.25 16.4 0.08 15.58C-0.08 14.75 0 13.9 0.32 13.12C0.65 12.35 1.19 11.68 1.89 11.22C2.59 10.75 3.41 10.5 4.25 10.5ZM10.5 10.5H14.75C15.59 10.5 16.41 10.75 17.11 11.22C17.81 11.68 18.35 12.35 18.68 13.12C19 13.9 19.08 14.75 18.92 15.58C18.75 16.4 18.35 17.16 17.76 17.76C17.16 18.35 16.4 18.75 15.58 18.92C14.75 19.08 13.9 19 13.12 18.68C12.35 18.35 11.68 17.81 11.22 17.11C10.75 16.41 10.5 15.59 10.5 14.75V10.5ZM15.51 7.57L15.25 8.17C15.05 8.61 14.45 8.61 14.25 8.17L13.99 7.57C13.53 6.51 12.69 5.65 11.63 5.18L10.83 4.82C10.73 4.78 10.65 4.7 10.59 4.61C10.53 4.52 10.5 4.42 10.5 4.31C10.5 4.2 10.53 4.1 10.59 4.01C10.65 3.92 10.73 3.84 10.83 3.8L11.59 3.46C12.67 2.97 13.53 2.09 13.98 1.99L14.25 0.34C14.29 0.24 14.36 0.15 14.45 0.09C14.54 0.03 14.64 0 14.75 0C14.86 0 14.96 0.03 15.05 0.09C15.14 0.15 15.21 0.24 15.25 0.34L15.52 0.99C15.97 2.09 16.83 2.97 17.91 3.46L18.67 3.8C18.77 3.84 18.85 3.92 18.91 4.01C18.97 4.1 19 4.2 19 4.31C19 4.42 18.97 4.52 18.91 4.61C18.85 4.7 18.77 4.78 18.67 4.82L17.87 5.18C16.81 5.65 15.97 6.51 15.51 7.57Z" fill="currentColor"/></svg>',
                'about'      => '<svg viewBox="0 0 22 18" fill="none"><path d="M20 16H22V18H0V16H2V1C2 0.73 2.11 0.48 2.29 0.29C2.48 0.11 2.73 0 3 0H13C13.27 0 13.52 0.11 13.71 0.29C13.89 0.48 14 0.73 14 1V16H16V6H19C19.27 6 19.52 6.11 19.71 6.29C19.89 6.48 20 6.73 20 7V16ZM6 8V10H10V8H6ZM6 4V6H10V4H6Z" fill="currentColor"/></svg>',
                'blog'       => '<svg viewBox="0 0 18 18" fill="none"><path d="M16.82 6.73H15.73C15.44 6.72 15.17 6.61 14.96 6.4C14.76 6.2 14.64 5.92 14.64 5.63C14.64 4.89 14.49 4.16 14.21 3.48C13.92 2.79 13.51 2.17 12.99 1.65C12.46 1.13 11.84 0.71 11.16 0.43C10.47 0.15 9.74 0 9 0H5.64C4.14 0 2.71 0.59 1.65 1.65C0.59 2.71 0 4.14 0 5.64V12.36C0 13.86 0.59 15.29 1.65 16.35C2.71 17.41 4.14 18 5.64 18H12.36C13.86 18 15.29 17.41 16.35 16.35C17.41 15.29 18 13.86 18 12.36V7.91C18 7.75 17.98 7.6 17.92 7.45C17.86 7.31 17.77 7.18 17.66 7.07C17.55 6.95 17.42 6.87 17.28 6.81C17.13 6.75 16.98 6.73 16.82 6.73ZM5.55 4.54H9.59C10.18 4.54 10.68 5.05 10.68 5.64C10.68 6.22 10.18 6.73 9.59 6.73H5.55C5.26 6.72 4.99 6.61 4.78 6.4C4.58 6.2 4.46 5.92 4.46 5.64C4.46 5.05 4.96 4.54 5.55 4.54ZM12.45 13.46H5.64C5.35 13.45 5.07 13.34 4.87 13.13C4.66 12.93 4.55 12.65 4.54 12.36C4.54 11.78 5.05 11.27 5.64 11.27H12.45C13.04 11.27 13.54 11.78 13.54 12.36C13.54 12.95 13.04 13.46 12.45 13.46Z" fill="currentColor"/></svg>',
        );

        return isset( $icons[ $name ] ) ? $icons[ $name ] : '';
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
