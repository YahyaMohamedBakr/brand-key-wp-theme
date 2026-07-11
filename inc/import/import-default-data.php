<?php
/**
 * Brand Key Theme — Default Data Importer
 *
 * This file imports default content for all custom post types.
 * It can be triggered via:
 *   1. WP-CLI: wp eval-file inc/import/import-default-data.php
 *   2. Admin URL: /wp-admin/admin.php?page=bk-import-data
 *   3. Activation hook (automatic on first activation)
 *
 * @package BrandKey
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Import all default data
 */
function brandkey_import_default_data() {
	// منع إعادة الاستيراد إذا تم من قبل
	if ( get_option( 'brandkey_data_imported' ) ) {
		return false;
	}

	brandkey_import_services();
	brandkey_import_sectors();
	brandkey_import_projects();
	brandkey_import_testimonials();
	brandkey_import_faqs();
	brandkey_import_packages();

	update_option( 'brandkey_data_imported', current_time( 'mysql' ) );
	return true;
}

/**
 * Import default services
 */
function brandkey_import_services() {
	$services = array(
		array(
			'title'    => 'المحتوى الإبداعي',
			'subtitle' => 'محتوى إبداعي يجذب انتباه جمهورك ويعكس هوية علامتك التجارية بأسلوب مميز.',
			'content'  => 'نقدم خدمات محتوى إبداعي متكاملة تشمل كتابة المحتوى، التصميم الإبداعي، وإنتاج الفيديو.',
			'menu_order' => 0,
		),
		array(
			'title'    => 'التسويق والنمو',
			'subtitle' => 'خدمات تسويقية مبتكرة لتعزيز نمو أعمالك ووصولك لجمهورك المستهدف.',
			'content'  => 'خدمات تسويق رقمي متكاملة تشمل التسويق الرقمي، إدارة الحملات الإعلانية، وتحسين المحتوى.',
			'menu_order' => 1,
		),
		array(
			'title'    => 'الحلول التقنية والمتاجر',
			'subtitle' => 'حلول تقنية متقدمة لبناء وتطوير متاجرك الإلكترونية وتطبيقاتك بأعلى المعايير.',
			'content'  => 'حلول تقنية متكاملة تشمل تطوير المواقع، المتاجر الإلكترونية، وتطبيقات الهواتف.',
			'menu_order' => 2,
		),
	);

	foreach ( $services as $service ) {
		$post_id = wp_insert_post( array(
			'post_type'    => 'bk_service',
			'post_title'   => $service['title'],
			'post_content' => $service['content'],
			'post_status'  => 'publish',
			'menu_order'   => $service['menu_order'],
		) );

		if ( $post_id && ! is_wp_error( $post_id ) ) {
			update_post_meta( $post_id, '_bk_service_subtitle', $service['subtitle'] );
		}
	}
}

/**
 * Import default sectors
 */
function brandkey_import_sectors() {
	$sectors = array(
		array( 'title' => 'السياحة والسفر', 'subtitle' => 'حجوزات الطيران والفنادق، تنظيم الرحلات والبرامج السياحية المتكاملة' ),
		array( 'title' => 'القطاع الطبي', 'subtitle' => 'المستشفيات والعيادات، خدمات الرعاية الصحية، والتجهيزات الطبية' ),
		array( 'title' => 'التعليم والتدريب', 'subtitle' => 'البرامج التدريبية المؤسسية، التطوير المهني، والحلول التعليمية الرقمية' ),
		array( 'title' => 'قطاع الطاقة', 'subtitle' => 'الطاقة المتجددة، الكهرباء، النفط والغاز، ومشاريع البنية التحتية للطاقة' ),
		array( 'title' => 'مكاتب المحاماة', 'subtitle' => 'الاستشارات القانونية، إعداد العقود، والتمثيل القانوني والتحكيم' ),
		array( 'title' => 'التجارة الإلكترونية', 'subtitle' => 'المتاجر الإلكترونية، بوابات الدفع، إدارة المخزون والشحن الرقمي' ),
		array( 'title' => 'خدمات الأعمال', 'subtitle' => 'الاستشارات الإدارية، تطوير الأعمال، والحلول التشغيلية للشركات' ),
		array( 'title' => 'خدمات الاستقدام', 'subtitle' => 'استقدام العمالة المنزلية والمهنية، إجراءات التأشيرات والخدمات العمالية' ),
		array( 'title' => 'خدمات الصيانة', 'subtitle' => 'صيانة المباني والمعدات، الكهرباء والتكييف، وخدمات الدعم الفني' ),
		array( 'title' => 'المجال الصناعي', 'subtitle' => 'المصانع والإنتاج، سلاسل الإمداد، والتحول الرقمي الصناعي' ),
		array( 'title' => 'القطاع العقاري', 'subtitle' => 'التطوير العقاري، إدارة الأملاك، التسويق العقاري والاستثمار' ),
	);

	foreach ( $sectors as $i => $sector ) {
		$post_id = wp_insert_post( array(
			'post_type'    => 'bk_sector',
			'post_title'   => $sector['title'],
			'post_content' => $sector['subtitle'],
			'post_status'  => 'publish',
			'menu_order'   => $i,
		) );

		if ( $post_id && ! is_wp_error( $post_id ) ) {
			update_post_meta( $post_id, '_bk_sector_subtitle', $sector['subtitle'] );
		}
	}
}

/**
 * Import default projects
 */
function brandkey_import_projects() {
	$projects = array(
		array(
			'title'    => 'منصة تجارة إلكترونية متكاملة',
			'content'  => 'قمنا بتطوير منصة تجارة إلكترونية متكاملة تضم آلاف المنتجات مع نظام دفع آمن ولوحة تحكم متقدمة لإدارة المخزون والطلبات.',
			'client'   => 'شركة بنيان للتطوير العقاري',
			'duration' => '90 يوماً',
			'location' => 'الرياض',
			'services' => 'تطوير المواقع, التجارة الإلكترونية, UX/UI',
			'tools'    => 'WordPress, WooCommerce, Figma',
			'results'  => 'زيادة 250% في المبيعات خلال 6 أشهر، تخفيض معدل التخلي عن السلة بنسبة 40%',
		),
		array(
			'title'    => 'هوية بصرية لعلامة تجارية',
			'content'  => 'صممنا هوية بصرية متكاملة لعلامة تجارية ناشئة شملت الشعار والألوان والخطوط والمطبوعات لتعزيز حضورها في السوق.',
			'client'   => 'مجموعة النور',
			'duration' => '30 يوماً',
			'location' => 'القاهرة',
			'services' => 'الهوية البصرية, التصميم الجرافيكي, البراندينج',
			'tools'    => 'Adobe Illustrator, Adobe Photoshop',
			'results'  => 'زيادة الوعي بالعلامة التجارية بنسبة 180%، تحسين التذكر البصري لدى الجمهور',
		),
		array(
			'title'    => 'تطبيق جوال لإدارة المهام',
			'content'  => 'طوّرنا تطبيق جوال ذكي لإدارة المهام والمشاريع يتيح للمستخدمين تنظيم عملهم ومتابعة تقدمهم بسهولة عبر واجهة بسيطة وأنيقة.',
			'client'    => 'شركة تك سوليوشنز',
			'duration' => '120 يوماً',
			'location' => 'جدة',
			'services' => 'تطبيقات الجوال, تطوير البرمجيات, UX/UI',
			'tools'    => 'React Native, Node.js, Figma',
			'results'  => '50,000+ تحميل في أول 3 أشهر، تقييم 4.8 نجوم على المتاجر',
		),
	);

	foreach ( $projects as $project ) {
		$post_id = wp_insert_post( array(
			'post_type'    => 'bk_project',
			'post_title'   => $project['title'],
			'post_content' => $project['content'],
			'post_status'  => 'publish',
		) );

		if ( $post_id && ! is_wp_error( $post_id ) ) {
			update_post_meta( $post_id, '_bk_project_client', $project['client'] );
			update_post_meta( $post_id, '_bk_project_duration', $project['duration'] );
			update_post_meta( $post_id, '_bk_project_location', $project['location'] );
			update_post_meta( $post_id, '_bk_project_services', $project['services'] );
			update_post_meta( $post_id, '_bk_project_tools', $project['tools'] );
			update_post_meta( $post_id, '_bk_project_results', $project['results'] );
		}
	}
}

/**
 * Import default testimonials
 */
function brandkey_import_testimonials() {
	$testimonials = array(
		array(
			'content' => 'كنت خايفة أبدأ في التسويق الرقمي وأخسر فلوس من غير نتيجة — براند كي وضحولي كل خطوة وقدموا تقارير شفافة كل أسبوع. ده مش شغل وكالة عادية',
			'name'    => 'خالد حسن',
			'role'    => 'مدير علامة تجارية مستقل',
			'rating'  => 5,
		),
		array(
			'content' => 'فريق محترف بيفهم الموضوع صح. حملاتنا الإعلانية حققت ROI 320% في أول 3 شهور بس. البيانات والتحليلات بتاعتهم شغل تاني تماماً',
			'name'    => 'سارة عبدالله',
			'role'    => 'صاحبة متجر إلكتروني',
			'rating'  => 5,
		),
		array(
			'content' => 'اللي عجبني إنهم مش بيتكلموا كلام بس — كل حركة بتعملها ليها سبب وبيانات. التصميم اللي عملوه للهوية خلى عملاءنا يثقوا فينا أكتر',
			'name'    => 'محمد الشمري',
			'role'    => 'مؤسس شركة عقارية',
			'rating'  => 5,
		),
	);

	foreach ( $testimonials as $i => $t ) {
		$post_id = wp_insert_post( array(
			'post_type'    => 'bk_testimonial',
			'post_title'   => $t['name'],
			'post_content' => $t['content'],
			'post_status'  => 'publish',
			'menu_order'   => $i,
		) );

		if ( $post_id && ! is_wp_error( $post_id ) ) {
			update_post_meta( $post_id, '_bk_testimonial_name', $t['name'] );
			update_post_meta( $post_id, '_bk_testimonial_role', $t['role'] );
			update_post_meta( $post_id, '_bk_testimonial_rating', $t['rating'] );
		}
	}
}

/**
 * Import default FAQs
 */
function brandkey_import_faqs() {
	$faqs = array(
		array( 'q' => 'كيف تقيسون نجاح الحملات التسويقية؟', 'a' => 'نقيس النجاح عبر مؤشرات أداء واضحة (KPIs) تشمل: معدل العائد على الاستثمار (ROI)، تكلفة اكتساب العميل (CAC)، معدل التحويل، والنمو في الزيارات والمبيعات. نقدم تقارير شفافة دورية بتظهرلك بالأرقام الحقيقية وين بتحقق ميزانيتك نتائج.' ),
		array( 'q' => 'ما هي تكلفة خدماتكم وكيف يتم التسعير؟', 'a' => 'التكلفة تعتمد على نطاق المشروع وأهدافك. نقدم 3 باقات مرنة (أساسية، احترافية، مخصصة) وكل باقة قابلة للتخصيص. نقدم استشارة مجانية لتقييم احتياجاتك وتقديم عرض سعر واضح بدون رسوم خفية.' ),
		array( 'q' => 'كم تستغرق مدة تنفيذ المشروع؟', 'a' => 'تختلف المدة حسب نوع المشروع: الهوية البصرية (2-3 أسابيع)، الموقع التعريفي (4-6 أسابيع)، المتجر الإلكتروني (6-10 أسابيع). بنحدد جدول زمني واضح مع كل عميل ونتابع التقدم أسبوعياً.' ),
		array( 'q' => 'هل تقدمون خدمات ما بعد الإطلاق؟', 'a' => 'نعم، نقدم خدمات الدعم الفني والصيانة المستمرة بعد إطلاق المشروع. يشمل ذلك تحديثات الأمان، تحسين الأداء، تعديلات المحتوى، والمتابعة الشهرية لضمان استمرار عملك بكفاءة.' ),
		array( 'q' => 'هل تعملون مع شركات في مصر والسعودية؟', 'a' => 'نعم، نعمل مع عملاء في مصر والسعودية ودول الخليج. لدينا فريق يفهم خصوصية كل سوق، ونقدم خدماتنا باللغة العربية مع دعم كامل للهوية البصرية العربية والثقافة المحلية.' ),
		array( 'q' => 'ما الذي يميز Brandkey عن وكالات التسويق الأخرى؟', 'a' => 'نحن مش وكالة عادية — نحن شركاء استراتيجيون. بندرس كل مشروع بعمول، نقدم استراتيجية مخصصة مش قوالب جاهزة، ونشتغل بشفافية كاملة في الأرقام والتقارير. هدفنا نجاحك مش مجرد إنهاء مشروع.' ),
	);

	foreach ( $faqs as $i => $faq ) {
		$post_id = wp_insert_post( array(
			'post_type'    => 'bk_faq',
			'post_title'   => $faq['q'],
			'post_content' => $faq['a'],
			'post_status'  => 'publish',
			'menu_order'   => $i,
		) );
	}
}

/**
 * Import default packages
 */
function brandkey_import_packages() {
	$packages = array(
		array(
			'title'    => 'الباقة الأساسية',
			'price_m'  => '999',
			'price_y'  => '9990',
			'popular'  => '0',
			'features' => "تصميم هوية بصرية\nموقع تعريفي (5 صفحات)\nإدارة سوشيال ميديا (منصة واحدة)\nتقرير شهري",
		),
		array(
			'title'    => 'الباقة الاحترافية',
			'price_m'  => '1999',
			'price_y'  => '19990',
			'popular'  => '1',
			'features' => "كل مميزات الباقة الأساسية\nمتجر إلكتروني متكامل\nإدارة سوشيال ميديا (3 منصات)\nحملات إعلانية ممولة\nتقرير أسبوعي + تحسين مستمر",
		),
		array(
			'title'    => 'الباقة المخصصة',
			'price_m'  => 'حسب الطلب',
			'price_y'  => 'حسب الطلب',
			'popular'  => '0',
			'features' => "حلول مخصصة بالكامل\nفريق متخصص مخصص\nدعم فني 24/7\nاستشارات استراتيجية",
		),
	);

	foreach ( $packages as $i => $pkg ) {
		$post_id = wp_insert_post( array(
			'post_type'    => 'bk_package',
			'post_title'   => $pkg['title'],
			'post_content' => $pkg['title'],
			'post_status'  => 'publish',
			'menu_order'   => $i,
		) );

		if ( $post_id && ! is_wp_error( $post_id ) ) {
			update_post_meta( $post_id, '_bk_package_price_monthly', $pkg['price_m'] );
			update_post_meta( $post_id, '_bk_package_price_yearly', $pkg['price_y'] );
			update_post_meta( $post_id, '_bk_package_features', $pkg['features'] );
			update_post_meta( $post_id, '_bk_package_popular', $pkg['popular'] );
		}
	}
}

/**
 * Auto-import on theme activation
 */
function brandkey_activate_and_import() {
	// تشغيل بعد تفعيل الثيم
	brandkey_import_default_data();
}
add_action( 'after_switch_theme', 'brandkey_activate_and_import' );

/**
 * Add admin menu for manual import
 */
function brandkey_import_admin_menu() {
	add_submenu_page(
		'themes.php',
		__( 'استيراد البيانات الافتراضية', 'brandkey' ),
		__( 'استيراد البيانات', 'brandkey' ),
		'manage_options',
		'bk-import-data',
		'brandkey_import_admin_page'
	);
}
add_action( 'admin_menu', 'brandkey_import_admin_menu' );

/**
 * Admin page for manual import
 */
function brandkey_import_admin_page() {
	$imported = false;
	if ( isset( $_POST['bk_import_now'] ) && check_admin_referer( 'bk_import_action', 'bk_import_nonce' ) ) {
		// إعادة تعيين علامة الاستيراد للسماح بإعادة الاستيراد
		delete_option( 'brandkey_data_imported' );
		$imported = brandkey_import_default_data();
	}
	?>
	<div class="wrap">
		<h1><?php esc_html_e( 'استيراد البيانات الافتراضية', 'brandkey' ); ?></h1>
		<p><?php esc_html_e( 'هذه الصفحة تستورد البيانات الافتراضية للثيم: الخدمات، القطاعات، المشاريع، آراء العملاء، الأسئلة الشائعة، والباقات.', 'brandkey' ); ?></p>

		<?php if ( $imported ) : ?>
			<div class="notice notice-success">
				<p><?php esc_html_e( '✅ تم استيراد البيانات الافتراضية بنجاح!', 'brandkey' ); ?></p>
			</div>
		<?php endif; ?>

		<?php if ( get_option( 'brandkey_data_imported' ) ) : ?>
			<div class="notice notice-warning">
				<p><?php esc_html_e( '⚠️ البيانات الافتراضية مستوردة بالفعل. يمكنك إعادة الاستيراد (سيضيف نسخ مكررة).', 'brandkey' ); ?></p>
			</div>
		<?php endif; ?>

		<form method="post">
			<?php wp_nonce_field( 'bk_import_action', 'bk_import_nonce' ); ?>
			<p>
				<input type="submit" name="bk_import_now" class="button button-primary" value="<?php esc_attr_e( 'استيراد البيانات الآن', 'brandkey' ); ?>" onclick="return confirm('<?php esc_attr_e( 'هل أنت متأكد؟ سيتم إضافة البيانات الافتراضية.', 'brandkey' ); ?>');" />
			</p>
		</form>

		<h3><?php esc_html_e( 'ماذا سيتم استيراده؟', 'brandkey' ); ?></h3>
		<ul style="list-style: disc; padding-right: 20px;">
			<li><strong><?php esc_html_e( '3 خدمات', 'brandkey' ); ?></strong> — المحتوى الإبداعي، التسويق والنمو، الحلول التقنية</li>
			<li><strong><?php esc_html_e( '11 قطاع', 'brandkey' ); ?></strong> — سياحة، طبي، تعليم، طاقة، محاماة، تجارة إلكترونية، إلخ</li>
			<li><strong><?php esc_html_e( '3 مشاريع', 'brandkey' ); ?></strong> — منصة تجارة، هوية بصرية، تطبيق جوال</li>
			<li><strong><?php esc_html_e( '3 آراء عملاء', 'brandkey' ); ?></strong> — تقييمات 5 نجوم</li>
			<li><strong><?php esc_html_e( '6 أسئلة شائعة', 'brandkey' ); ?></strong></li>
			<li><strong><?php esc_html_e( '3 باقات أسعار', 'brandkey' ); ?></strong> — أساسية، احترافية، مخصصة</li>
		</ul>
	</div>
	<?php
}
