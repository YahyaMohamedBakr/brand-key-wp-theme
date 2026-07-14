<?php
/**
 * ACF Field Groups — كل سيكشن في كل صفحة ليه حقوله
 *
 * @package BrandKey
 */

if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * ============================================================
 * Field Group: الصفحة الرئيسية (Front Page)
 * ============================================================
 */
function bk_acf_front_page() {

	// --- سيكشن الهيرو ---
	acf_add_local_field_group( array(
		'key' => 'group_fp_hero',
		'title' => 'الصفحة الرئيسية — الهيرو',
		'fields' => array(
			array( 'key' => 'fp_hero_title', 'label' => 'العنوان', 'name' => 'fp_hero_title', 'type' => 'text', 'default_value' => 'حلول تسويق رقمي متكاملة تنمو مع أعمالك' ),
			array( 'key' => 'fp_hero_desc', 'label' => 'الوصف', 'name' => 'fp_hero_desc', 'type' => 'textarea', 'default_value' => 'في Brand Key، ندمج الإبداع البصري مع الاستراتيجية التسويقية والتقنية المتقدمة لنقدم لك منظومة رقمية متكاملة تحقق أهدافك.' ),
			array( 'key' => 'fp_hero_primary_text', 'label' => 'نص الزر الأساسي', 'name' => 'fp_hero_primary_text', 'type' => 'text', 'default_value' => 'ابدأ الآن، مجاناً' ),
			array( 'key' => 'fp_hero_primary_url', 'label' => 'رابط الزر الأساسي', 'name' => 'fp_hero_primary_url', 'type' => 'text', 'default_value' => '/contact' ),
			array( 'key' => 'fp_hero_ghost_text', 'label' => 'نص الزر الثانوي', 'name' => 'fp_hero_ghost_text', 'type' => 'text', 'default_value' => 'تعرف على المزيد' ),
			array( 'key' => 'fp_hero_image', 'label' => 'صورة الهيرو', 'name' => 'fp_hero_image', 'type' => 'image', 'return_format' => 'array' ),
		),
		'location' => array(
			array( array( 'param' => 'page_template', 'operator' => '==', 'value' => 'front-page.php' ) ),
		),
	) );

	// --- سيكشن الخدمات ---
	acf_add_local_field_group( array(
		'key' => 'group_fp_services',
		'title' => 'الصفحة الرئيسية — سيكشن الخدمات',
		'fields' => array(
			array( 'key' => 'fp_services_enable', 'label' => 'تفعيل السيكشن', 'name' => 'fp_services_enable', 'type' => 'true_false', 'default_value' => 1 ),
			array( 'key' => 'fp_services_title', 'label' => 'العنوان', 'name' => 'fp_services_title', 'type' => 'text', 'default_value' => 'خدماتنا' ),
			array( 'key' => 'fp_services_desc', 'label' => 'الوصف', 'name' => 'fp_services_desc', 'type' => 'textarea' ),
			array(
				'key' => 'fp_services_repeater',
				'label' => 'الخدمات',
				'name' => 'fp_services_repeater',
				'type' => 'repeater',
				'layout' => 'block',
				'button_label' => 'إضافة خدمة',
				'sub_fields' => array(
					array( 'key' => 'fp_srv_title', 'label' => 'عنوان الخدمة', 'name' => 'title', 'type' => 'text' ),
					array( 'key' => 'fp_srv_desc', 'label' => 'وصف الخدمة', 'name' => 'desc', 'type' => 'textarea' ),
					array( 'key' => 'fp_srv_image', 'label' => 'صورة الخدمة', 'name' => 'image', 'type' => 'image', 'return_format' => 'array' ),
					array( 'key' => 'fp_srv_tags', 'label' => 'الوسوم (افصل بفواصل)', 'name' => 'tags', 'type' => 'text' ),
				),
			),
		),
		'location' => array(
			array( array( 'param' => 'page_template', 'operator' => '==', 'value' => 'front-page.php' ) ),
		),
	) );

	// --- سيكشن القطاعات ---
	acf_add_local_field_group( array(
		'key' => 'group_fp_sectors',
		'title' => 'الصفحة الرئيسية — سيكشن القطاعات',
		'fields' => array(
			array( 'key' => 'fp_sectors_enable', 'label' => 'تفعيل السيكشن', 'name' => 'fp_sectors_enable', 'type' => 'true_false', 'default_value' => 1 ),
			array( 'key' => 'fp_sectors_title', 'label' => 'العنوان', 'name' => 'fp_sectors_title', 'type' => 'text', 'default_value' => 'حلول مصممة لكل قطاع' ),
			array( 'key' => 'fp_sectors_desc', 'label' => 'الوصف', 'name' => 'fp_sectors_desc', 'type' => 'textarea' ),
			array(
				'key' => 'fp_sectors_repeater',
				'label' => 'القطاعات',
				'name' => 'fp_sectors_repeater',
				'type' => 'repeater',
				'layout' => 'block',
				'button_label' => 'إضافة قطاع',
				'sub_fields' => array(
					array( 'key' => 'fp_sec_title', 'label' => 'اسم القطاع', 'name' => 'title', 'type' => 'text' ),
					array( 'key' => 'fp_sec_desc', 'label' => 'وصف القطاع', 'name' => 'desc', 'type' => 'text' ),
				),
			),
		),
		'location' => array(
			array( array( 'param' => 'page_template', 'operator' => '==', 'value' => 'front-page.php' ) ),
		),
	) );

	// --- سيكشن الباقات ---
	acf_add_local_field_group( array(
		'key' => 'group_fp_pricing',
		'title' => 'الصفحة الرئيسية — سيكشن الباقات',
		'fields' => array(
			array( 'key' => 'fp_pricing_enable', 'label' => 'تفعيل السيكشن', 'name' => 'fp_pricing_enable', 'type' => 'true_false', 'default_value' => 1 ),
			array( 'key' => 'fp_pricing_title', 'label' => 'العنوان', 'name' => 'fp_pricing_title', 'type' => 'text', 'default_value' => 'باقات مرنة.. ونتائج غير محدودة' ),
			array( 'key' => 'fp_pricing_desc', 'label' => 'الوصف', 'name' => 'fp_pricing_desc', 'type' => 'textarea' ),
			array(
				'key' => 'fp_pricing_repeater',
				'label' => 'الباقات',
				'name' => 'fp_pricing_repeater',
				'type' => 'repeater',
				'layout' => 'block',
				'button_label' => 'إضافة باقة',
				'sub_fields' => array(
					array( 'key' => 'fp_pkg_name', 'label' => 'اسم الباقة', 'name' => 'name', 'type' => 'text' ),
					array( 'key' => 'fp_pkg_amount', 'label' => 'السعر', 'name' => 'amount', 'type' => 'text' ),
					array( 'key' => 'fp_pkg_featured', 'label' => 'باقة مميزة (الأكثر شعبية)', 'name' => 'featured', 'type' => 'true_false' ),
					array( 'key' => 'fp_pkg_features', 'label' => 'المميزات (سطر لكل ميزة)', 'name' => 'features', 'type' => 'textarea' ),
					array( 'key' => 'fp_pkg_btn_text', 'label' => 'نص الزر', 'name' => 'btn_text', 'type' => 'text', 'default_value' => 'تواصل معنا للاشتراك' ),
				),
			),
		),
		'location' => array(
			array( array( 'param' => 'page_template', 'operator' => '==', 'value' => 'front-page.php' ) ),
		),
	) );

	// --- سيكشن آراء العملاء ---
	acf_add_local_field_group( array(
		'key' => 'group_fp_testimonials',
		'title' => 'الصفحة الرئيسية — آراء العملاء',
		'fields' => array(
			array( 'key' => 'fp_test_enable', 'label' => 'تفعيل السيكشن', 'name' => 'fp_test_enable', 'type' => 'true_false', 'default_value' => 1 ),
			array( 'key' => 'fp_test_title', 'label' => 'العنوان', 'name' => 'fp_test_title', 'type' => 'text', 'default_value' => 'ماذا يقول عملاؤنا' ),
			array( 'key' => 'fp_test_desc', 'label' => 'الوصف', 'name' => 'fp_test_desc', 'type' => 'textarea' ),
			array(
				'key' => 'fp_test_repeater',
				'label' => 'آراء العملاء',
				'name' => 'fp_test_repeater',
				'type' => 'repeater',
				'layout' => 'block',
				'button_label' => 'إضافة رأي',
				'sub_fields' => array(
					array( 'key' => 'fp_tst_text', 'label' => 'نص الرأي', 'name' => 'text', 'type' => 'textarea' ),
					array( 'key' => 'fp_tst_name', 'label' => 'اسم العميل', 'name' => 'name', 'type' => 'text' ),
					array( 'key' => 'fp_tst_role', 'label' => 'الوظيفة', 'name' => 'role', 'type' => 'text' ),
					array( 'key' => 'fp_tst_avatar', 'label' => 'الحرف الأول', 'name' => 'avatar', 'type' => 'text' ),
					array( 'key' => 'fp_tst_rating', 'label' => 'التقييم (1-5)', 'name' => 'rating', 'type' => 'number', 'default_value' => 5 ),
				),
			),
		),
		'location' => array(
			array( array( 'param' => 'page_template', 'operator' => '==', 'value' => 'front-page.php' ) ),
		),
	) );

	// --- سيكشن الأسئلة الشائعة ---
	acf_add_local_field_group( array(
		'key' => 'group_fp_faq',
		'title' => 'الصفحة الرئيسية — الأسئلة الشائعة',
		'fields' => array(
			array( 'key' => 'fp_faq_enable', 'label' => 'تفعيل السيكشن', 'name' => 'fp_faq_enable', 'type' => 'true_false', 'default_value' => 1 ),
			array( 'key' => 'fp_faq_title', 'label' => 'العنوان', 'name' => 'fp_faq_title', 'type' => 'text', 'default_value' => 'الأسئلة الشائعة' ),
			array( 'key' => 'fp_faq_desc', 'label' => 'الوصف', 'name' => 'fp_faq_desc', 'type' => 'textarea' ),
			array(
				'key' => 'fp_faq_repeater',
				'label' => 'الأسئلة',
				'name' => 'fp_faq_repeater',
				'type' => 'repeater',
				'layout' => 'block',
				'button_label' => 'إضافة سؤال',
				'sub_fields' => array(
					array( 'key' => 'fp_faq_q', 'label' => 'السؤال', 'name' => 'question', 'type' => 'text' ),
					array( 'key' => 'fp_faq_a', 'label' => 'الإجابة', 'name' => 'answer', 'type' => 'textarea' ),
				),
			),
		),
		'location' => array(
			array( array( 'param' => 'page_template', 'operator' => '==', 'value' => 'front-page.php' ) ),
		),
	) );

	// --- سيكشن آخر الأخبار ---
	acf_add_local_field_group( array(
		'key' => 'group_fp_blog',
		'title' => 'الصفحة الرئيسية — آخر أخبارنا',
		'fields' => array(
			array( 'key' => 'fp_blog_enable', 'label' => 'تفعيل السيكشن', 'name' => 'fp_blog_enable', 'type' => 'true_false', 'default_value' => 1 ),
			array( 'key' => 'fp_blog_title', 'label' => 'العنوان', 'name' => 'fp_blog_title', 'type' => 'text', 'default_value' => 'آخر أخبارنا' ),
			array( 'key' => 'fp_blog_desc', 'label' => 'الوصف', 'name' => 'fp_blog_desc', 'type' => 'textarea' ),
		),
		'location' => array(
			array( array( 'param' => 'page_template', 'operator' => '==', 'value' => 'front-page.php' ) ),
		),
	) );

	// --- سيكشن CTA النهائي ---
	acf_add_local_field_group( array(
		'key' => 'group_fp_cta_final',
		'title' => 'الصفحة الرئيسية — CTA النهائي',
		'fields' => array(
			array( 'key' => 'fp_cta_enable', 'label' => 'تفعيل السيكشن', 'name' => 'fp_cta_enable', 'type' => 'true_false', 'default_value' => 1 ),
			array( 'key' => 'fp_cta_title', 'label' => 'العنوان', 'name' => 'fp_cta_title', 'type' => 'text', 'default_value' => 'مستعد تبدأ رحلتك الرقمية!' ),
			array( 'key' => 'fp_cta_desc', 'label' => 'الوصف', 'name' => 'fp_cta_desc', 'type' => 'textarea' ),
			array( 'key' => 'fp_cta_btn_text', 'label' => 'نص الزر', 'name' => 'fp_cta_btn_text', 'type' => 'text', 'default_value' => 'تواصل معنا الآن!' ),
			array( 'key' => 'fp_cta_btn_url', 'label' => 'رابط الزر', 'name' => 'fp_cta_btn_url', 'type' => 'text', 'default_value' => '/contact' ),
		),
		'location' => array(
			array( array( 'param' => 'page_template', 'operator' => '==', 'value' => 'front-page.php' ) ),
		),
	) );
}

/**
 * ============================================================
 * Field Group: Inner Hero (كل الصفحات الداخلية)
 * ============================================================
 */
function bk_acf_inner_hero() {
	// كل الصفحات الداخلية اللي بتستخدم inner-hero
	$templates = array( 'page-templates/about.php', 'page-templates/integration.php', 'page-templates/training.php', 'page-templates/consulting.php', 'page-templates/pricing.php', 'page-templates/contact.php' );

	$locations = array();
	foreach ( $templates as $tpl ) {
		$locations[] = array( array( 'param' => 'page_template', 'operator' => '==', 'value' => $tpl ) );
	}

	acf_add_local_field_group( array(
		'key' => 'group_inner_hero',
		'title' => 'الهيرو الداخلي',
		'fields' => array(
			array( 'key' => 'ih_title', 'label' => 'العنوان', 'name' => 'ih_title', 'type' => 'text' ),
			array( 'key' => 'ih_desc', 'label' => 'الوصف', 'name' => 'ih_desc', 'type' => 'textarea' ),
			array( 'key' => 'ih_primary_text', 'label' => 'نص الزر الأساسي', 'name' => 'ih_primary_text', 'type' => 'text' ),
			array( 'key' => 'ih_primary_url', 'label' => 'رابط الزر الأساسي', 'name' => 'ih_primary_url', 'type' => 'text', 'default_value' => '/contact' ),
			array( 'key' => 'ih_ghost_text', 'label' => 'نص الزر الثانوي', 'name' => 'ih_ghost_text', 'type' => 'text' ),
			array( 'key' => 'ih_ghost_url', 'label' => 'رابط الزر الثانوي', 'name' => 'ih_ghost_url', 'type' => 'text', 'default_value' => '#' ),
			array( 'key' => 'ih_photo', 'label' => 'صورة الهيرو', 'name' => 'ih_photo', 'type' => 'image', 'return_format' => 'array' ),
		),
		'location' => $locations,
	) );
}

/**
 * ============================================================
 * Field Group: تواصل معنا — النموذج
 * ============================================================
 */
function bk_acf_contact() {
	acf_add_local_field_group( array(
		'key' => 'group_contact',
		'title' => 'تواصل معنا — معلومات إضافية',
		'fields' => array(
			array( 'key' => 'contact_phone', 'label' => 'رقم الهاتف', 'name' => 'contact_phone', 'type' => 'text' ),
			array( 'key' => 'contact_email', 'label' => 'البريد الإلكتروني', 'name' => 'contact_email', 'type' => 'text' ),
			array( 'key' => 'contact_address', 'label' => 'العنوان', 'name' => 'contact_address', 'type' => 'text' ),
			array(
				'key' => 'contact_offices',
				'label' => 'المكاتب',
				'name' => 'contact_offices',
				'type' => 'repeater',
				'layout' => 'block',
				'button_label' => 'إضافة مكتب',
				'sub_fields' => array(
					array( 'key' => 'co_name', 'label' => 'اسم المكتب', 'name' => 'name', 'type' => 'text' ),
					array( 'key' => 'co_type', 'label' => 'النوع (رئيسي/فرع)', 'name' => 'type', 'type' => 'text' ),
					array( 'key' => 'co_address', 'label' => 'العنوان', 'name' => 'address', 'type' => 'textarea' ),
					array( 'key' => 'co_phone', 'label' => 'الهاتف', 'name' => 'phone', 'type' => 'text' ),
					array( 'key' => 'co_map', 'label' => 'رابط الخريطة', 'name' => 'map_url', 'type' => 'url' ),
				),
			),
		),
		'location' => array(
			array( array( 'param' => 'page_template', 'operator' => '==', 'value' => 'page-templates/contact.php' ) ),
		),
	) );
}

// سجل كل الـ field groups
bk_acf_front_page();
bk_acf_inner_hero();
bk_acf_contact();
