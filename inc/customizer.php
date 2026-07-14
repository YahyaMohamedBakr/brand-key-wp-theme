<?php
/**
 * Customizer الكامل — تحكم في كل سيكشن
 *
 * @package BrandKey
 */

if ( ! defined( 'ABSPATH' ) ) exit;

function bk_customize_register( $wp_customize ) {
	// ===== ألوان الثيم =====
	$wp_customize->add_section( 'bk_colors', array( 'title' => 'ألوان الثيم', 'priority' => 29 ) );

	$colors = array(
		'bk_navy'       => array( 'label' => 'الكحلي (Navy)', 'default' => '#0E233F' ),
		'bk_gold'       => array( 'label' => 'الذهبي (Gold)', 'default' => '#F2C94C' ),
		'bk_gold_press' => array( 'label' => 'الذهبي المعتم', 'default' => '#C9A233' ),
		'bk_footer_bg'  => array( 'label' => 'خلفية الفوتر', 'default' => '#060e19' ),
	);
	foreach ( $colors as $id => $c ) {
		$wp_customize->add_setting( $id, array( 'default' => $c['default'], 'sanitize_callback' => 'sanitize_hex_color', 'transport' => 'postMessage' ) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, $id, array( 'label' => $c['label'], 'section' => 'bk_colors' ) ) );
	}

	// ===== التواصل =====
	$wp_customize->add_section( 'bk_contact', array( 'title' => 'معلومات التواصل', 'priority' => 30 ) );
	$fields = array(
		'bk_email'         => array( 'label' => 'البريد الإلكتروني', 'default' => 'info@brandkey.com', 'type' => 'email' ),
		'bk_phone'         => array( 'label' => 'رقم الهاتف (للاتصال)', 'default' => '+201001234567', 'type' => 'text' ),
		'bk_phone_display' => array( 'label' => 'رقم الهاتف (للعرض)', 'default' => '+20 100 123 4567', 'type' => 'text' ),
		'bk_address'       => array( 'label' => 'العنوان', 'default' => 'القاهرة | مصر، شارع التحرير', 'type' => 'text' ),
		'bk_map_url'       => array( 'label' => 'رابط الخريطة', 'default' => 'https://maps.google.com', 'type' => 'url' ),
		'bk_about_text'    => array( 'label' => 'نبذة عن الشركة (الفوتر)', 'default' => 'شركة متخصصة في التسويق الرقمي وخدمات التكنولوجيا، أسست في عام 2011.', 'type' => 'textarea' ),
	);
	foreach ( $fields as $id => $f ) {
		$wp_customize->add_setting( $id, array( 'default' => $f['default'], 'sanitize_callback' => 'sanitize_text_field' ) );
		$wp_customize->add_control( $id, array( 'label' => $f['label'], 'section' => 'bk_contact', 'type' => $f['type'] ) );
	}

	// ===== السوشيال =====
	$wp_customize->add_section( 'bk_social', array( 'title' => 'روابط التواصل الاجتماعي', 'priority' => 31 ) );
	$socials = array( 'facebook' => 'فيسبوك', 'instagram' => 'إنستجرام', 'linkedin' => 'لينكد إن', 'twitter' => 'إكس (تويتر)' );
	foreach ( $socials as $key => $label ) {
		$wp_customize->add_setting( 'bk_' . $key, array( 'default' => '#', 'sanitize_callback' => 'esc_url_raw' ) );
		$wp_customize->add_control( 'bk_' . $key, array( 'label' => $label, 'section' => 'bk_social', 'type' => 'url' ) );
	}

	// ===== سيكشنات كل صفحة =====
	$config = bk_get_sections_config();
	$page_labels = array(
		'front_page'  => 'الصفحة الرئيسية',
		'about'       => 'من نحن',
		'integration' => 'منظومة التكامل',
		'training'    => 'تدريب الشركات',
		'consulting'  => 'استشارات التسويق',
		'pricing'     => 'الباقات والأسعار',
		'contact'     => 'تواصل معنا',
	);

	$priority = 40;
	foreach ( $config as $page => $sections ) {
		$panel_id = 'bk_panel_' . $page;

		$wp_customize->add_panel( $panel_id, array(
			'title'    => isset( $page_labels[ $page ] ) ? $page_labels[ $page ] : $page,
			'priority' => $priority++,
		) );

		$sec_priority = 0;
		foreach ( $sections as $section => $fields ) {
			$sec_id = "bk_{$page}_{$section}";

			$wp_customize->add_section( $sec_id, array(
				'title' => isset( $fields['label'] ) ? $fields['label'] : $section,
				'panel' => $panel_id,
				'priority' => $sec_priority++,
			) );

			// تفعيل/إلغاء
			$wp_customize->add_setting( "{$sec_id}_enabled", array( 'default' => true, 'sanitize_callback' => 'bk_sanitize_checkbox' ) );
			$wp_customize->add_control( "{$sec_id}_enabled", array( 'label' => 'تفعيل السيكشن', 'section' => $sec_id, 'type' => 'checkbox' ) );

			// العنوان
			if ( isset( $fields['title'] ) ) {
				$wp_customize->add_setting( "{$sec_id}_title", array( 'default' => $fields['title'], 'sanitize_callback' => 'sanitize_text_field' ) );
				$wp_customize->add_control( "{$sec_id}_title", array( 'label' => 'العنوان', 'section' => $sec_id, 'type' => 'text' ) );
			}

			// الوصف
			if ( isset( $fields['desc'] ) ) {
				$wp_customize->add_setting( "{$sec_id}_desc", array( 'default' => $fields['desc'], 'sanitize_callback' => 'sanitize_textarea_field' ) );
				$wp_customize->add_control( "{$sec_id}_desc", array( 'label' => 'الوصف', 'section' => $sec_id, 'type' => 'textarea' ) );
			}

			// لون الخلفية
			if ( isset( $fields['bg'] ) && $fields['bg'] ) {
				$wp_customize->add_setting( "{$sec_id}_bg", array( 'default' => $fields['bg'], 'sanitize_callback' => 'sanitize_hex_color' ) );
				$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, "{$sec_id}_bg", array( 'label' => 'لون الخلفية', 'section' => $sec_id ) ) );
			}

			// مستوى العنوان
			if ( isset( $fields['heading'] ) ) {
				$wp_customize->add_setting( "{$sec_id}_heading", array( 'default' => $fields['heading'], 'sanitize_callback' => 'sanitize_text_field' ) );
				$wp_customize->add_control( "{$sec_id}_heading", array(
					'label' => 'مستوى العنوان',
					'section' => $sec_id,
					'type' => 'select',
					'choices' => array( 'h1' => 'H1', 'h2' => 'H2', 'h3' => 'H3', 'h4' => 'H4' ),
				) );
			}

			// نص الزر
			if ( isset( $fields['btn_text'] ) ) {
				$wp_customize->add_setting( "{$sec_id}_btn_text", array( 'default' => $fields['btn_text'], 'sanitize_callback' => 'sanitize_text_field' ) );
				$wp_customize->add_control( "{$sec_id}_btn_text", array( 'label' => 'نص الزر', 'section' => $sec_id, 'type' => 'text' ) );
			}

			// رابط الزر
			if ( isset( $fields['btn_url'] ) ) {
				$wp_customize->add_setting( "{$sec_id}_btn_url", array( 'default' => $fields['btn_url'], 'sanitize_callback' => 'esc_url_raw' ) );
				$wp_customize->add_control( "{$sec_id}_btn_url", array( 'label' => 'رابط الزر', 'section' => $sec_id, 'type' => 'url' ) );
			}
		}
	}
}
add_action( 'customize_register', 'bk_customize_register' );

function bk_sanitize_checkbox( $checked ) {
	return ( isset( $checked ) && true === (bool) $checked );
}

/**
 * CSS مخصص من الـ Customizer
 */
function bk_custom_css() {
	$navy = get_theme_mod( 'bk_navy', '#0E233F' );
	$gold = get_theme_mod( 'bk_gold', '#F2C94C' );
	$gold_press = get_theme_mod( 'bk_gold_press', '#C9A233' );
	$footer_bg = get_theme_mod( 'bk_footer_bg', '#060e19' );
	?>
	<style>
	:root {
		--navy: <?php echo esc_html( $navy ); ?>;
		--gold: <?php echo esc_html( $gold ); ?>;
		--gold-press: <?php echo esc_html( $gold_press ); ?>;
	}
	.site-footer { background: <?php echo esc_html( $footer_bg ); ?> !important; }
	</style>
	<?php
}
add_action( 'wp_head', 'bk_custom_css', 100 );
