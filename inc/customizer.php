<?php
/**
 * Brand Key Theme Customizer
 *
 * @package BrandKey
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 */
function brandkey_customize_register( $wp_customize ) {

	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	// ============================================================
	// Panel: Brand Key Settings
	// ============================================================
	$wp_customize->add_panel( 'brandkey_panel', array(
		'title'    => __( 'إعدادات براند كي', 'brandkey' ),
		'priority' => 30,
	) );

	// ============================================================
	// Section: Colors (الألوان)
	// ============================================================
	$wp_customize->add_section( 'brandkey_colors', array(
		'title' => __( 'الألوان', 'brandkey' ),
		'panel' => 'brandkey_panel',
	) );

	// Navy color
	$wp_customize->add_setting( 'brandkey_navy_color', array(
		'default'           => '#0E233F',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'brandkey_navy_color', array(
		'label'   => __( 'اللون الكحلي (Navy)', 'brandkey' ),
		'section' => 'brandkey_colors',
	) ) );

	// Gold color
	$wp_customize->add_setting( 'brandkey_gold_color', array(
		'default'           => '#F2C94C',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'brandkey_gold_color', array(
		'label'   => __( 'اللون الذهبي (Gold)', 'brandkey' ),
		'section' => 'brandkey_colors',
	) ) );

	// Gold press color
	$wp_customize->add_setting( 'brandkey_gold_press_color', array(
		'default'           => '#C9A233',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'brandkey_gold_press_color', array(
		'label'   => __( 'اللون الذهبي المعتم (Gold Press)', 'brandkey' ),
		'section' => 'brandkey_colors',
	) ) );

	// Footer background color
	$wp_customize->add_setting( 'brandkey_footer_bg_color', array(
		'default'           => '#060e19',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'brandkey_footer_bg_color', array(
		'label'   => __( 'لون خلفية الفوتر', 'brandkey' ),
		'section' => 'brandkey_colors',
	) ) );

	// ============================================================
	// Section: Contact Info (معلومات التواصل)
	// ============================================================
	$wp_customize->add_section( 'brandkey_contact', array(
		'title' => __( 'معلومات التواصل', 'brandkey' ),
		'panel' => 'brandkey_panel',
	) );

	// Email
	$wp_customize->add_setting( 'brandkey_email', array(
		'default'           => 'info@brandkey.com',
		'sanitize_callback' => 'sanitize_email',
	) );
	$wp_customize->add_control( 'brandkey_email', array(
		'label'   => __( 'البريد الإلكتروني', 'brandkey' ),
		'section' => 'brandkey_contact',
		'type'    => 'email',
	) );

	// Phone
	$wp_customize->add_setting( 'brandkey_phone', array(
		'default'           => '+201001234567',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'brandkey_phone', array(
		'label'   => __( 'رقم الهاتف (للإتصال)', 'brandkey' ),
		'section' => 'brandkey_contact',
		'type'    => 'text',
	) );

	// Phone display
	$wp_customize->add_setting( 'brandkey_phone_display', array(
		'default'           => '+20 100 123 4567',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'brandkey_phone_display', array(
		'label'   => __( 'رقم الهاتف (للعرض)', 'brandkey' ),
		'section' => 'brandkey_contact',
		'type'    => 'text',
	) );

	// Address
	$wp_customize->add_setting( 'brandkey_address', array(
		'default'           => 'القاهرة | مصر، شارع التحرير',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'brandkey_address', array(
		'label'   => __( 'العنوان', 'brandkey' ),
		'section' => 'brandkey_contact',
		'type'    => 'text',
	) );

	// Map URL
	$wp_customize->add_setting( 'brandkey_map_url', array(
		'default'           => 'https://maps.google.com',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( 'brandkey_map_url', array(
		'label'   => __( 'رابط الخريطة', 'brandkey' ),
		'section' => 'brandkey_contact',
		'type'    => 'url',
	) );

	// ============================================================
	// Section: Social Media (روابط التواصل)
	// ============================================================
	$wp_customize->add_section( 'brandkey_social', array(
		'title' => __( 'روابط التواصل الاجتماعي', 'brandkey' ),
		'panel' => 'brandkey_panel',
	) );

	$socials = array(
		'facebook'  => __( 'فيسبوك', 'brandkey' ),
		'instagram' => __( 'إنستجرام', 'brandkey' ),
		'linkedin'  => __( 'لينكد إن', 'brandkey' ),
		'twitter'   => __( 'إكس (تويتر)', 'brandkey' ),
		'youtube'   => __( 'يوتيوب', 'brandkey' ),
	);

	foreach ( $socials as $key => $label ) {
		$wp_customize->add_setting( 'brandkey_' . $key, array(
			'default'           => '#',
			'sanitize_callback' => 'esc_url_raw',
		) );
		$wp_customize->add_control( 'brandkey_' . $key, array(
			'label'   => $label,
			'section' => 'brandkey_social',
			'type'    => 'url',
		) );
	}

	// ============================================================
	// Section: About (عن الشركة)
	// ============================================================
	$wp_customize->add_section( 'brandkey_about', array(
		'title' => __( 'عن الشركة', 'brandkey' ),
		'panel' => 'brandkey_panel',
	) );

	// About text
	$wp_customize->add_setting( 'brandkey_about_text', array(
		'default'           => 'شركة متخصصة في التسويق الرقمي وخدمات التكنولوجيا، أسست في عام 2011. نسعى دائماً لتقديم حلول مبتكرة تساعد عملائنا على النمو والنجاح.',
		'sanitize_callback' => 'sanitize_textarea_field',
	) );
	$wp_customize->add_control( 'brandkey_about_text', array(
		'label'   => __( 'نبذة عن الشركة (في الفوتر)', 'brandkey' ),
		'section' => 'brandkey_about',
		'type'    => 'textarea',
	) );

	// ============================================================
	// Section: Hero Settings (إعدادات الهيرو)
	// ============================================================
	$wp_customize->add_section( 'brandkey_hero', array(
		'title' => __( 'إعدادات الهيرو', 'brandkey' ),
		'panel' => 'brandkey_panel',
	) );

	// Hero title
	$wp_customize->add_setting( 'brandkey_hero_title', array(
		'default'           => 'حلول تسويق رقمي متكاملة تنمو مع أعمالك',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'brandkey_hero_title', array(
		'label'   => __( 'عنوان الهيرو', 'brandkey' ),
		'section' => 'brandkey_hero',
		'type'    => 'text',
	) );

	// Hero description
	$wp_customize->add_setting( 'brandkey_hero_desc', array(
		'default'           => 'في Brand Key، ندمج الإبداع البصري مع الاستراتيجية التسويقية والتقنية المتقدمة لنقدم لك منظومة رقمية متكاملة تحقق أهدافك.',
		'sanitize_callback' => 'sanitize_textarea_field',
	) );
	$wp_customize->add_control( 'brandkey_hero_desc', array(
		'label'   => __( 'وصف الهيرو', 'brandkey' ),
		'section' => 'brandkey_hero',
		'type'    => 'textarea',
	) );

	// Hero primary button text
	$wp_customize->add_setting( 'brandkey_hero_primary_text', array(
		'default'           => 'ابدأ الآن، مجاناً',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'brandkey_hero_primary_text', array(
		'label'   => __( 'نص الزر الأساسي', 'brandkey' ),
		'section' => 'brandkey_hero',
		'type'    => 'text',
	) );

	// Hero primary button URL
	$wp_customize->add_setting( 'brandkey_hero_primary_url', array(
		'default'           => '/contact',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( 'brandkey_hero_primary_url', array(
		'label'   => __( 'رابط الزر الأساسي', 'brandkey' ),
		'section' => 'brandkey_hero',
		'type'    => 'url',
	) );

	// Hero ghost button text
	$wp_customize->add_setting( 'brandkey_hero_ghost_text', array(
		'default'           => 'استكشف خدماتنا',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'brandkey_hero_ghost_text', array(
		'label'   => __( 'نص الزر الثانوي', 'brandkey' ),
		'section' => 'brandkey_hero',
		'type'    => 'text',
	) );

	// Hero background image
	$wp_customize->add_setting( 'brandkey_hero_bg', array(
		'default'           => '',
		'sanitize_callback' => 'absint',
	) );
	$wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'brandkey_hero_bg', array(
		'label'     => __( 'صورة خلفية الهيرو', 'brandkey' ),
		'section'   => 'brandkey_hero',
		'mime_type' => 'image',
	) ) );

	// ============================================================
	// Section: Section Visibility (تفعيل/إلغاء السيكشنات)
	// ============================================================
	$wp_customize->add_section( 'brandkey_sections', array(
		'title' => __( 'تفعيل السيكشنات', 'brandkey' ),
		'panel' => 'brandkey_panel',
	) );

	$sections = array(
		'services'    => __( 'سيكشن الخدمات', 'brandkey' ),
		'consult'     => __( 'سيكشن الاستشارات', 'brandkey' ),
		'sectors'     => __( 'سيكشن القطاعات', 'brandkey' ),
		'cta2'        => __( 'سيكشن ابدأ رحلتك', 'brandkey' ),
		'portfolio'   => __( 'سيكشن معرض الأعمال', 'brandkey' ),
		'pricing'     => __( 'سيكشن الباقات', 'brandkey' ),
		'how'         => __( 'سيكشن طريقتنا في الشغل', 'brandkey' ),
		'clients'     => __( 'سيكشن عملاؤنا', 'brandkey' ),
		'testimonials'=> __( 'سيكشن آراء العملاء', 'brandkey' ),
		'cta_final'   => __( 'سيكشن مستعد تبدأ', 'brandkey' ),
		'faq'         => __( 'سيكشن الأسئلة الشائعة', 'brandkey' ),
		'blog'        => __( 'سيكشن آخر أخبارنا', 'brandkey' ),
	);

	foreach ( $sections as $key => $label ) {
		$wp_customize->add_setting( 'brandkey_enable_' . $key, array(
			'default'           => true,
			'sanitize_callback' => 'brandkey_sanitize_checkbox',
		) );
		$wp_customize->add_control( 'brandkey_enable_' . $key, array(
			'label'   => $label,
			'section' => 'brandkey_sections',
			'type'    => 'checkbox',
		) );
	}
}
add_action( 'customize_register', 'brandkey_customize_register' );

/**
 * Sanitize checkbox
 */
function brandkey_sanitize_checkbox( $checked ) {
	return ( isset( $checked ) && true === (bool) $checked ) ? true : false;
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function brandkey_customize_preview_js() {
	wp_enqueue_script( 'brandkey-customizer', BRANDKEY_URI . '/assets/js/customizer.js', array( 'customize-preview' ), BRANDKEY_VERSION, true );
}
add_action( 'customize_preview_init', 'brandkey_customize_preview_js' );
