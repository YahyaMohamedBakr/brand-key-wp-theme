<?php
/**
 * Brand Key Seeder — يإنشئ صفحات + قوائم + مقالات تجريبية
 *
 * @package BrandKey
 */

if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * صفحات الثيم + القوالب
 */
function bk_seeder_get_pages() {
        return array(
                'home'         => array( 'title' => 'الرئيسية', 'template' => '', 'is_front' => true ),
                'about'        => array( 'title' => 'من نحن', 'template' => 'page-templates/about.php' ),
                'integration'  => array( 'title' => 'منظومة التكامل', 'template' => 'page-templates/integration.php' ),
                'training'     => array( 'title' => 'تدريب الشركات', 'template' => 'page-templates/training.php' ),
                'consulting'   => array( 'title' => 'استشارات التسويق', 'template' => 'page-templates/consulting.php' ),
                'pricing'      => array( 'title' => 'الباقات والأسعار', 'template' => 'page-templates/pricing.php' ),
                'contact'      => array( 'title' => 'تواصل معنا', 'template' => 'page-templates/contact.php' ),
                'blog'         => array( 'title' => 'المدونة', 'template' => '', 'is_posts' => true ),
        );
}

/**
 * تشغيل السيدر
 */
function bk_seeder_run() {
        // السيدر ممكن يشتغل في كل مرة — لو الصفحات موجودة هيتساب عليها، لو مش موجودة هتتعمل

        $created_pages = array();
        $pages = bk_seeder_get_pages();
        $front_page_id = 0;
        $blog_page_id = 0;

        // 1. إنشاء الصفحات
        foreach ( $pages as $slug => $info ) {
                // لو الصفحة موجودة بالفعل
                $existing = get_page_by_path( $slug );
                if ( $existing ) {
                        $created_pages[ $slug ] = $existing->ID;
                        if ( ! empty( $info['is_front'] ) ) $front_page_id = $existing->ID;
                        if ( ! empty( $info['is_posts'] ) ) $blog_page_id = $existing->ID;
                        continue;
                }

                $page_id = wp_insert_post( array(
                        'post_title'   => $info['title'],
                        'post_name'    => $slug,
                        'post_status'  => 'publish',
                        'post_type'    => 'page',
                        'post_content' => '',
                ) );

                if ( $page_id && ! is_wp_error( $page_id ) ) {
                        // تعيين القالب
                        if ( ! empty( $info['template'] ) ) {
                                update_post_meta( $page_id, '_wp_page_template', $info['template'] );
                        }

                        $created_pages[ $slug ] = $page_id;

                        if ( ! empty( $info['is_front'] ) ) $front_page_id = $page_id;
                        if ( ! empty( $info['is_posts'] ) ) $blog_page_id = $page_id;
                }
        }

        // 2. تعيين الصفحة الرئيسية وصفحة المدونة
        if ( $front_page_id ) {
                update_option( 'show_on_front', 'page' );
                update_option( 'page_on_front', $front_page_id );
        }
        if ( $blog_page_id ) {
                update_option( 'page_for_posts', $blog_page_id );
        }

        // 3. إنشاء القوائم
        bk_seeder_create_menus( $created_pages );

        // 4. إنشاء مقالات تجريبية
        bk_seeder_create_posts();

        // 5. تعيين خيارات افتراضية
        update_option( 'blogname', 'Brand Key' );
        update_option( 'blogdescription', 'حلول تسويق رقمي متكاملة تنمو مع أعمالك' );

        update_option( 'bk_seeded', current_time( 'mysql' ) );
        update_option( 'bk_seeded_pages', $created_pages );

        return array( 'success' => true, 'pages' => $created_pages );
}

/**
 * إنشاء القوائم
 */
function bk_seeder_create_menus( $pages ) {
        // === القائمة: الروابط السريعة (في الناف) ===
        $menu_id = bk_seeder_create_menu( 'nav_quick_links', 'الروابط السريعة (الناف)' );
        if ( $menu_id ) {
                $quick_links = array(
                        'home'       => 'icon-home',
                        'training'   => 'icon-training',
                        'consulting' => 'icon-consulting',
                        'blog'       => 'icon-blog',
                );
                $order = 0;
                foreach ( $quick_links as $slug => $class ) {
                        if ( isset( $pages[ $slug ] ) ) {
                                wp_update_nav_menu_item( $menu_id, 0, array(
                                        'menu-item-object-id' => $pages[ $slug ],
                                        'menu-item-object'    => 'page',
                                        'menu-item-type'      => 'post_type',
                                        'menu-item-status'    => 'publish',
                                        'menu-item-position'  => $order++,
                                        'menu-item-classes'   => $class,
                                ) );
                        }
                }
        }

        // === القائمة: خدماتنا (في الناف) ===
        $menu_id = bk_seeder_create_menu( 'nav_services', 'خدماتنا (الناف)' );
        if ( $menu_id ) {
                $services = array( 'إدارة السوشيال', 'إنتاج المحتوى الإعلاني', 'تصميم الهوية البصرية', 'تصوير وفيديو', 'SEO تحسين البحث', 'تطبيقات الجوال', 'حملات جوجل', 'إدارة المتاجر الإلكترونية', 'حملات السوشيال', 'تصميم وبرمجة المواقع' );
                $order = 0;
                foreach ( $services as $label ) {
                        wp_update_nav_menu_item( $menu_id, 0, array(
                                'menu-item-title'    => $label,
                                'menu-item-url'      => home_url( '/services' ),
                                'menu-item-status'   => 'publish',
                                'menu-item-position' => $order++,
                        ) );
                }
        }

        // === القائمة: حلول القطاعات (في الناف) ===
        $menu_id = bk_seeder_create_menu( 'nav_sectors', 'حلول القطاعات (الناف)' );
        if ( $menu_id ) {
                $sectors = array( 'السياحة والسفر', 'القطاع الطبي', 'التعليم والتدريب', 'قطاع الطاقة', 'مكاتب المحاماة', 'التجارة الإلكترونية', 'خدمات الأعمال', 'خدمات الاستقدام', 'خدمات الصيانة', 'المجال الصناعي', 'القطاع العقاري' );
                $order = 0;
                foreach ( $sectors as $label ) {
                        wp_update_nav_menu_item( $menu_id, 0, array(
                                'menu-item-title'    => $label,
                                'menu-item-url'      => '#',
                                'menu-item-status'   => 'publish',
                                'menu-item-position' => $order++,
                        ) );
                }
        }

        // === القائمة: روابط سريعة (الفوتر) ===
        $menu_id = bk_seeder_create_menu( 'footer_quick', 'روابط سريعة (الفوتر)' );
        if ( $menu_id ) {
                $footer_links = array( 'home', 'about', 'blog', 'contact' );
                $order = 0;
                foreach ( $footer_links as $slug ) {
                        if ( isset( $pages[ $slug ] ) ) {
                                wp_update_nav_menu_item( $menu_id, 0, array(
                                        'menu-item-object-id' => $pages[ $slug ],
                                        'menu-item-object'    => 'page',
                                        'menu-item-type'      => 'post_type',
                                        'menu-item-status'    => 'publish',
                                        'menu-item-position'  => $order++,
                                ) );
                        }
                }
        }

        // === القائمة: خدماتنا (الفوتر) ===
        $menu_id = bk_seeder_create_menu( 'footer_services', 'خدماتنا (الفوتر)' );
        if ( $menu_id ) {
                $footer_services = array( 'consulting', 'training', 'integration', 'pricing', 'contact' );
                $order = 0;
                foreach ( $footer_services as $slug ) {
                        if ( isset( $pages[ $slug ] ) ) {
                                wp_update_nav_menu_item( $menu_id, 0, array(
                                        'menu-item-object-id' => $pages[ $slug ],
                                        'menu-item-object'    => 'page',
                                        'menu-item-type'      => 'post_type',
                                        'menu-item-status'    => 'publish',
                                        'menu-item-position'  => $order++,
                                ) );
                        }
                }
        }
}

/**
 * إنشاء قائمة جديدة (لو مش موجودة) وربطها بالموقع
 */
function bk_seeder_create_menu( $location, $name ) {
        // لو القائمة موجودة بالفعل
        $locations = get_nav_menu_locations();
        if ( isset( $locations[ $location ] ) && $locations[ $location ] ) {
                return $locations[ $location ];
        }

        // لو فيه قائمة بنفس الاسم
        $existing = wp_get_nav_menu_object( $name );
        if ( $existing ) {
                $menu_id = $existing->term_id;
        } else {
                $menu = wp_create_nav_menu( $name );
                if ( is_wp_error( $menu ) ) return 0;
                $menu_id = $menu;
        }

        // ربط القائمة بالموقع
        $locations[ $location ] = $menu_id;
        set_theme_mod( 'nav_menu_locations', $locations );

        return $menu_id;
}

/**
 * إنشاء مقالات تجريبية
 */
function bk_seeder_create_posts() {
        $posts = array(
                array(
                        'title'   => 'تعلن عن شراكة استراتيجية جديدة لتوسيع خدمات الحلول الرقمية.',
                        'excerpt' => 'انطلاقاً من رؤيتنا للتكامل، وقعنا اتفاقية تعاون لتقديم خدمات برمجية متقدمة لعملائنا في المنطقة.',
                        'content' => 'انطلاقاً من رؤيتنا للتكامل، وقعنا اتفاقية تعاون لتقديم خدمات برمجية متقدمة لعملائنا في المنطقة. هذه الشراكة تأتي ضمن خطتنا لتوسيع نطاق خدماتنا وتقديم حلول متكاملة لعملائنا في مصر والسعودية ومنطقة الخليج.',
                        'date'    => '2025-07-20',
                ),
                array(
                        'title'   => 'سيكولوجية الألوان: كيف تمنح علامتك التجارية طابع الفخامة والراحة؟',
                        'excerpt' => 'نغوص في دلالات الألوان وكيف نستخدم المساحات البيضاء لخلق شعور بالراحة والثقة لدى عملائك.',
                        'content' => 'نغوص في دلالات الألوان وكيف نستخدم المساحات البيضاء لخلق شعور بالراحة والثقة لدى عملائك، تماماً كما نفعل في هوياتنا. الألوان ليست مجرد عناصر جمالية، بل هي لغة نفسية قوية تتحدث مباشرة إلى مشاعر جمهورك.',
                        'date'    => '2025-07-15',
                ),
                array(
                        'title'   => 'كيف تصمم كتاباً تعليمياً تفاعلياً يجذب الطلاب ويحفزهم على التعلم؟',
                        'excerpt' => 'تعرف على أهم القواعد لتنسيق الكتب المدرسية وتصميمها بلغات متعددة لضمان سهولة القراءة.',
                        'content' => 'تعرف على أهم القواعد لتنسيق الكتب المدرسية وتصميمها بلغات متعددة لضمان سهولة القراءة وتوصيل المعلومة بفعالية. التصميم التعليمي الجيد يجمع بين البساطة والوضوح والجاذبية البصرية.',
                        'date'    => '2025-07-10',
                ),
        );

        foreach ( $posts as $post_data ) {
                // لو المقال موجود بالفعل (بنفس العنوان)
                $existing = get_page_by_title( $post_data['title'], OBJECT, 'post' );
                if ( $existing ) continue;

                wp_insert_post( array(
                        'post_title'   => $post_data['title'],
                        'post_content' => $post_data['content'],
                        'post_excerpt' => $post_data['excerpt'],
                        'post_status'  => 'publish',
                        'post_type'    => 'post',
                        'post_date'    => $post_data['date'] . ' 10:00:00',
                        'post_date_gmt'=> $post_data['date'] . ' 07:00:00',
                ) );
        }
}

/**
 * صفحة الإدارة للسيدر
 */
function bk_seeder_admin_menu() {
        add_submenu_page(
                'themes.php',
                'Seeder — بيانات تجريبية',
                'Seeder',
                'manage_options',
                'bk-seeder',
                'bk_seeder_admin_page'
        );
}
add_action( 'admin_menu', 'bk_seeder_admin_menu' );

function bk_seeder_admin_page() {
        $result = null;
        if ( isset( $_POST['bk_seed'] ) && check_admin_referer( 'bk_seed_action', 'bk_seed_nonce' ) ) {
                $result = bk_seeder_run();
        }

        $already_seeded = get_option( 'bk_seeded' );
        ?>
        <div class="wrap">
                <h1>Seeder — بيانات تجريبية</h1>
                <p>اضغط الزر أدناه لإنشاء:</p>
                <ul style="list-style: disc; padding-right: 20px; font-size: 14px;">
                        <li><strong>8 صفحات</strong> (الرئيسية، من نحن، منظومة التكامل، تدريب الشركات، استشارات التسويق، الباقات والأسعار، تواصل معنا، المدونة) — مع تعيين القوالب</li>
                        <li><strong>5 قوائم</strong> (الناف: خدماتنا + القطاعات + الروابط السريعة، الفوتر: روابط سريعة + خدماتنا)</li>
                        <li><strong>3 مقالات تجريبية</strong> في المدونة</li>
                        <li>تعيين الصفحة الرئيسية وصفحة المدونة</li>
                </ul>

                <?php if ( $result && $result['success'] ) : ?>
                        <div class="notice notice-success"><p>✅ تم إنشاء البيانات بنجاح!</p></div>
                <?php elseif ( $result && ! $result['success'] ) : ?>
                        <div class="notice notice-warning"><p>⚠️ <?php echo esc_html( $result['message'] ); ?></p></div>
                <?php endif; ?>

                <?php if ( $already_seeded ) : ?>
                        <div class="notice notice-info"><p>ℹ️ السيدر اشتغل قبل كده في: <?php echo esc_html( $already_seeded ); ?></p></div>
                <?php endif; ?>

                <form method="post" style="margin-top: 20px;">
                        <?php wp_nonce_field( 'bk_seed_action', 'bk_seed_nonce' ); ?>
                        <input type="submit" name="bk_seed" class="button button-primary button-large" value="🚀 إنشاء البيانات الآن" onclick="return confirm('هل أنت متأكد؟ سيتم إنشاء صفحات وقوائم ومقالات.');" />
                </form>
        </div>
        <?php
}
