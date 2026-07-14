<?php
/**
 * تكوين السيكشنات — يحدد كل سيكشن في كل صفحة + قيمه الافتراضية
 *
 * @package BrandKey
 */

if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * تعريف كل سيكشنات كل صفحة
 * كل سيكشن له:
 * - title: العنوان الافتراضي
 * - desc: الوصف الافتراضي
 * - bg: لون الخلفية الافتراضي
 * - heading: مستوى العنوان (h2, h3, h4)
 * - btn_text: نص الزر
 * - btn_url: رابط الزر
 * - icon: أيقونة
 */
function bk_get_sections_config() {
	return array(

		// ===== الصفحة الرئيسية =====
		'front_page' => array(
			'hero'         => array( 'label' => 'الهيرو', 'title' => 'حلول تسويق رقمي متكاملة تنمو مع أعمالك', 'desc' => 'في Brand Key، ندمج الإبداع البصري مع الاستراتيجية التسويقية والتقنية المتقدمة لنقدم لك منظومة رقمية متكاملة تحقق أهدافك.', 'bg' => '', 'heading' => 'h1' ),
			'services'     => array( 'label' => 'الخدمات', 'title' => 'خدماتنا', 'desc' => 'نقدم لك حلولاً تسويقية متكاملة تجمع بين الإبداع والاحترافية — من التخطيط الاستراتيجي حتى التنفيذ والمتابعة، نحن معك في كل خطوة.', 'bg' => '', 'heading' => 'h2', 'btn_text' => 'ابدأ رحلتك معنا الآن', 'btn_url' => '/contact' ),
			'consult'      => array( 'label' => 'الاستشارات', 'title' => 'استشارات التسويق', 'desc' => 'نقدم استشارات تسويقية متخصصة تساعدك على بناء استراتيجيات ناجحة.', 'bg' => '', 'heading' => 'h3' ),
			'sectors'      => array( 'label' => 'القطاعات', 'title' => 'حلول مصممة لكل قطاع', 'desc' => 'كل ما نحتاجه من خبرة وتخصص وابتكار وخدمة عالية الجودة نقدمه لعملائنا.', 'bg' => '', 'heading' => 'h2' ),
			'cta2'         => array( 'label' => 'ابدأ رحلتك', 'title' => 'ابدأ رحلتك مع Brandkey', 'desc' => 'نحن نؤمن بأن كل علامة تجارية تستحق فرصة للنجاح.', 'bg' => '#0E233F', 'heading' => 'h2' ),
			'portfolio'    => array( 'label' => 'معرض الأعمال', 'title' => 'آخر أعمالنا', 'desc' => 'مجموعة مختارة من أحدث المشاريع التي أنجزناها لعملائنا.', 'bg' => '', 'heading' => 'h2' ),
			'pricing'      => array( 'label' => 'الباقات', 'title' => 'باقات مرنة.. ونتائج غير محدودة', 'desc' => 'اختر الباقة المناسبة لاحتياجاتك.', 'bg' => '', 'heading' => 'h2' ),
			'how'          => array( 'label' => 'طريقتنا', 'title' => 'طريقتنا في الشغل', 'desc' => '4 خطوات واضحة من أول يوم لأول نتيجة.', 'bg' => '', 'heading' => 'h2' ),
			'clients'      => array( 'label' => 'عملاؤنا', 'title' => 'عملاء وثقوا فينا', 'desc' => 'من الشركات الناشئة للمؤسسات الكبرى.', 'bg' => '#0E233F', 'heading' => 'h2' ),
			'testimonials' => array( 'label' => 'آراء العملاء', 'title' => 'ماذا يقول عملاؤنا', 'desc' => 'إن نجاحهم يعد المعيار الحقيقي لجودة خدماتنا.', 'bg' => '', 'heading' => 'h2' ),
			'cta_final'    => array( 'label' => 'مستعد تبدأ', 'title' => 'مستعد تبدأ رحلتك الرقمية!', 'desc' => 'استشارة مجانية 30 دقيقة مع خبراء براند كي.', 'bg' => '#0E233F', 'heading' => 'h2', 'btn_text' => 'تواصل معنا الآن!', 'btn_url' => '/contact' ),
			'faq'          => array( 'label' => 'الأسئلة الشائعة', 'title' => 'الأسئلة الشائعة', 'desc' => 'استكشف أكثر الأسئلة شيوعاً حول خدماتنا.', 'bg' => '', 'heading' => 'h2' ),
			'blog'         => array( 'label' => 'آخر الأخبار', 'title' => 'آخر أخبارنا', 'desc' => 'نحن فخورون للغاية بثقة عملائنا المميزين.', 'bg' => '', 'heading' => 'h2' ),
		),

		// ===== من نحن =====
		'about' => array(
			'hero'         => array( 'label' => 'الهيرو', 'title' => 'من نحن', 'desc' => 'شركة متخصصة في التسويق الرقمي وخدمات التكنولوجيا.', 'heading' => 'h1' ),
			'vision'       => array( 'label' => 'رؤيتنا', 'title' => 'رؤيتنا', 'desc' => 'أن نكون الشريك الاستراتيجي الأول لكل شركة تسعى للنمو الرقمي.', 'heading' => 'h2' ),
			'mission'      => array( 'label' => 'رسالتنا', 'title' => 'رسالتنا', 'desc' => 'نمكّن عملاءنا من تحقيق أهدافهم عبر حلول تسويقية وتقنية متكاملة.', 'heading' => 'h2' ),
			'security'     => array( 'label' => 'لا تفوت الفرصة', 'title' => 'لا تفوت الفرصة', 'desc' => 'كل ما تحتاجه لإنجاح أعمالك.', 'heading' => 'h2' ),
			'team'         => array( 'label' => 'فريقنا', 'title' => 'فريقنا', 'desc' => 'تعرف على فريق براند كي.', 'heading' => 'h2' ),
		),

		// ===== منظومة التكامل =====
		'integration' => array(
			'hero'         => array( 'label' => 'الهيرو', 'title' => 'منظومة التكامل', 'desc' => 'ندمج أدواتك التسويقية في منظومة واحدة متكاملة.', 'heading' => 'h1' ),
			'compare'      => array( 'label' => 'لماذا التكامل', 'title' => 'لماذا التكامل وليس الاختيار العشوائي؟', 'desc' => 'كثير من المشاريع تصرف ميزانيات ضخمة دون نتائج.', 'heading' => 'h2' ),
			'timeline'     => array( 'label' => 'الجدول الزمني', 'title' => 'الجدول الزمني للتكامل', 'desc' => 'مراحل تنفيذ منظومة التكامل.', 'heading' => 'h2' ),
			'services'     => array( 'label' => 'الخدمات', 'title' => 'خدمات التكامل', 'desc' => 'ماذا نقدم في منظومة التكامل.', 'heading' => 'h2' ),
			'deliverables' => array( 'label' => 'المخرجات', 'title' => 'ماذا تحصل في النهاية؟', 'desc' => 'مخرجات منظومة التكامل.', 'bg' => '#0E233F', 'heading' => 'h2' ),
		),

		// ===== تدريب الشركات =====
		'training' => array(
			'hero'         => array( 'label' => 'الهيرو', 'title' => 'تدريب الشركات', 'desc' => 'برامج تدريبية مخصصة للفرق التسويقية.', 'heading' => 'h1' ),
			'problems'     => array( 'label' => 'المشكلات', 'title' => 'هل تواجه هذه التحديات؟', 'desc' => 'تحديات شائعة في الفرق التسويقية.', 'heading' => 'h2' ),
			'audience'     => array( 'label' => 'لمن هذا التدريب', 'title' => 'لمن هذا التدريب؟', 'desc' => 'فئات المستفيدين من البرامج التدريبية.', 'heading' => 'h2' ),
			'programs'     => array( 'label' => 'البرامج', 'title' => 'البرامج التدريبية المتاحة', 'desc' => 'برامجنا التدريبية المتكاملة.', 'bg' => '#0E233F', 'heading' => 'h2' ),
			'method'       => array( 'label' => 'منهجيتنا', 'title' => 'من طلبك حتى ختام التدريب', 'desc' => 'منهجية واضحة.', 'heading' => 'h2' ),
			'benefits'     => array( 'label' => 'الفوائد', 'title' => 'ما الذي تحصل عليه شركتك؟', 'desc' => 'فوائد التدريب.', 'bg' => '#0E233F', 'heading' => 'h2' ),
		),

		// ===== استشارات التسويق =====
		'consulting' => array(
			'hero'         => array( 'label' => 'الهيرو', 'title' => 'استشارات تصنع الفارق', 'desc' => 'خبراؤنا يقدمون لك استشارات استراتيجية مخصصة.', 'heading' => 'h1' ),
			'painpoints'   => array( 'label' => 'نقاط الألم', 'title' => 'هل تعرف هذه المشكلات؟', 'desc' => 'مشكلات شائعة في التسويق.', 'heading' => 'h2' ),
			'types'        => array( 'label' => 'أنواع الاستشارات', 'title' => 'أنواع الاستشارات', 'desc' => 'استشاراتنا المتخصصة.', 'bg' => '#0E233F', 'heading' => 'h2' ),
			'method'       => array( 'label' => 'منهجيتنا', 'title' => 'كيف نعمل', 'desc' => 'منهجية الاستشارات.', 'heading' => 'h2' ),
			'deliverables' => array( 'label' => 'المخرجات', 'title' => 'ماذا تحصل عليه؟', 'desc' => 'مخرجات الاستشارات.', 'bg' => '#0E233F', 'heading' => 'h2' ),
		),

		// ===== الباقات والأسعار =====
		'pricing' => array(
			'hero'         => array( 'label' => 'الهيرو', 'title' => 'الباقات والأسعار', 'desc' => 'باقات مرنة تناسب جميع الاحتياجات.', 'heading' => 'h1' ),
			'packages'     => array( 'label' => 'الباقات', 'title' => 'باقات مرنة.. ونتائج غير محدودة', 'desc' => 'اختر الباقة المناسبة لاحتياجاتك.', 'heading' => 'h2' ),
		),

		// ===== تواصل معنا =====
		'contact' => array(
			'hero'         => array( 'label' => 'الهيرو', 'title' => 'تواصل معنا', 'desc' => 'نحن هنا للإجابة على أسئلتك.', 'heading' => 'h1' ),
			'form'         => array( 'label' => 'نموذج التواصل', 'title' => 'أرسل لنا رسالة', 'desc' => 'املأ النموذج وسنتواصل معك.', 'heading' => 'h2' ),
			'offices'      => array( 'label' => 'موقع المكاتب', 'title' => 'موقع مكاتبنا', 'desc' => 'مكاتبنا في القاهرة والرياض.', 'bg' => '#0E233F', 'heading' => 'h2' ),
		),
	);
}

/**
 * الحصول على قيمة سيكشن
 */
function bk_section( $page, $section, $field = 'title' ) {
	$config = bk_get_sections_config();
	$default = isset( $config[ $page ][ $section ][ $field ] ) ? $config[ $page ][ $section ][ $field ] : '';
	return get_theme_mod( "bk_{$page}_{$section}_{$field}", $default );
}

/**
 * هل السيكشن مفعّل؟
 */
function bk_section_enabled( $page, $section ) {
	$config = bk_get_sections_config();
	if ( ! isset( $config[ $page ][ $section ] ) ) return false;
	return get_theme_mod( "bk_{$page}_{$section}_enabled", true );
}

/**
 * هل السيكشن داكن؟
 */
function bk_section_is_dark( $page, $section ) {
	$bg = bk_section( $page, $section, 'bg' );
	return ! empty( $bg );
}

/**
 * طباعة سمة الخلفية
 */
function bk_section_bg( $page, $section ) {
	$bg = bk_section( $page, $section, 'bg' );
	if ( $bg ) {
		echo ' style="background: ' . esc_attr( $bg ) . ';"';
	}
}

/**
 * طباعة عنوان السيكشن
 */
function bk_section_heading( $page, $section, $class = '' ) {
	$heading = bk_section( $page, $section, 'heading' );
	$title = bk_section( $page, $section, 'title' );
	$heading = $heading ? $heading : 'h2';
	$cls = $class ? ' class="' . esc_attr( $class ) . '"' : '';
	echo '<' . esc_html( $heading ) . $cls . '>' . esc_html( $title ) . '</' . esc_html( $heading ) . '>';
}

/**
 * طباعة وصف السيكشن
 */
function bk_section_desc( $page, $section, $class = '' ) {
	$desc = bk_section( $page, $section, 'desc' );
	if ( ! $desc ) return;
	$cls = $class ? ' class="' . esc_attr( $class ) . '"' : '';
	echo '<p' . $cls . '>' . esc_html( $desc ) . '</p>';
}

/**
 * طباعة خط العنوان (heading-line)
 */
function bk_section_line( $page, $section, $class = '' ) {
	$dark = bk_section_is_dark( $page, $section );
	$icon = $dark ? 'line-white.png' : 'heading-line.png';
	$cls = $class ? ' class="' . esc_attr( $class ) . '"' : '';
	echo '<img src="' . esc_url( BK_URI . '/assets/icons/' . $icon ) . '" alt=""' . $cls . ' aria-hidden="true" />';
}
