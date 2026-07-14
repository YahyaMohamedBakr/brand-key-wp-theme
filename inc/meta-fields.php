<?php
/**
 * نظام الحقول المخصص — Custom Meta Fields System
 *
 * يوفر تحكم كامل في كل سيكشن: نصوص، صور، أزرار، ألوان، repeaters
 * بدون أي إضافة خارجية — native WordPress only
 *
 * @package BrandKey
 */

if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * ============================================================
 * 1. تسجيل Meta Boxes
 * ============================================================
 */
function bk_register_meta_boxes() {
        // ===== الصفحة الرئيسية — فقط لو القالب front-page.php =====
        add_meta_box( 'bk_front_hero', 'الهيرو (الرئيسية)', 'bk_render_front_hero', 'page', 'normal', 'high' );
        add_meta_box( 'bk_front_services', 'سيكشن الخدمات', 'bk_render_front_services', 'page', 'normal', 'high' );
        add_meta_box( 'bk_front_sectors', 'سيكشن القطاعات', 'bk_render_front_sectors', 'page', 'normal', 'high' );
        add_meta_box( 'bk_front_pricing', 'سيكشن الباقات', 'bk_render_front_pricing', 'page', 'normal', 'high' );
        add_meta_box( 'bk_front_testimonials', 'سيكشن آراء العملاء', 'bk_render_front_testimonials', 'page', 'normal', 'high' );
        add_meta_box( 'bk_front_faq', 'سيكشن الأسئلة الشائعة', 'bk_render_front_faq', 'page', 'normal', 'high' );
        add_meta_box( 'bk_front_cta', 'سيكشن CTA النهائي', 'bk_render_front_cta', 'page', 'normal', 'high' );

        // ===== الصفحات الداخلية — الهيرو =====
        add_meta_box( 'bk_inner_hero', 'الهيرو الداخلي', 'bk_render_inner_hero', 'page', 'normal', 'high' );

        // ===== تواصل معنا =====
        add_meta_box( 'bk_contact_info', 'معلومات التواصل', 'bk_render_contact_info', 'page', 'normal', 'high' );
}

/**
 * إخفاء الـ meta boxes بتاعة الصفحة الرئيسية لو الصفحة مش front-page
 */
function bk_hide_front_page_meta_boxes( $hidden, $screen, $use_defaults ) {
        if ( $screen->base === 'post' && $screen->post_type === 'page' ) {
                $post_id = isset( $_GET['post'] ) ? intval( $_GET['post'] ) : ( isset( $_POST['post_ID'] ) ? intval( $_POST['post_ID'] ) : 0 );
                $template = $post_id ? get_post_meta( $post_id, '_wp_page_template', true ) : '';

                // لو مش الصفحة الرئيسية (default template أو قالب تاني) — خبّي كل meta boxes بتاعة front page
                $is_front_page = ( $template === 'front-page.php' || ( empty( $template ) && $post_id == get_option( 'page_on_front' ) ) );
                if ( ! $is_front_page ) {
                        $front_boxes = array( 'bk_front_hero', 'bk_front_services', 'bk_front_sectors', 'bk_front_pricing', 'bk_front_testimonials', 'bk_front_faq', 'bk_front_cta' );
                        foreach ( $front_boxes as $box ) {
                                if ( ! in_array( $box, $hidden ) ) {
                                        $hidden[] = $box;
                                }
                        }
                }

                // لو مش قالب صفحة داخلية — خبّي الـ inner hero
                $inner_templates = array( 'page-templates/about.php', 'page-templates/integration.php', 'page-templates/training.php', 'page-templates/consulting.php', 'page-templates/pricing.php', 'page-templates/contact.php' );
                if ( ! in_array( $template, $inner_templates ) ) {
                        if ( ! in_array( 'bk_inner_hero', $hidden ) ) {
                                $hidden[] = 'bk_inner_hero';
                        }
                }

                // لو مش قالب contact — خبّي معلومات التواصل
                if ( $template !== 'page-templates/contact.php' ) {
                        if ( ! in_array( 'bk_contact_info', $hidden ) ) {
                                $hidden[] = 'bk_contact_info';
                        }
                }
        }
        return $hidden;
}
add_filter( 'hidden_meta_boxes', 'bk_hide_front_page_meta_boxes', 10, 3 );
add_action( 'add_meta_boxes', 'bk_register_meta_boxes' );

/**
 * ============================================================
 * 2. Helpers — rendering functions
 * ============================================================
 */

/**
 * حقل نصي
 */
function bk_field_text( $name, $label, $value = '', $placeholder = '' ) {
        ?>
        <div class="bk-field">
                <label class="bk-field-label"><?php echo esc_html( $label ); ?></label>
                <input type="text" name="<?php echo esc_attr( $name ); ?>" value="<?php echo esc_attr( $value ); ?>" placeholder="<?php echo esc_attr( $placeholder ); ?>" class="bk-input" />
        </div>
        <?php
}

/**
 * حقل textarea
 */
function bk_field_textarea( $name, $label, $value = '', $rows = 3 ) {
        ?>
        <div class="bk-field">
                <label class="bk-field-label"><?php echo esc_html( $label ); ?></label>
                <textarea name="<?php echo esc_attr( $name ); ?>" rows="<?php echo esc_attr( $rows ); ?>" class="bk-textarea"><?php echo esc_textarea( $value ); ?></textarea>
        </div>
        <?php
}

/**
 * حقل صورة (مع media uploader)
 */
function bk_field_image( $name, $label, $value = '' ) {
        $img_url = $value ? wp_get_attachment_url( $value ) : '';
        ?>
        <div class="bk-field bk-field-image">
                <label class="bk-field-label"><?php echo esc_html( $label ); ?></label>
                <div class="bk-image-wrap">
                        <div class="bk-image-preview" data-preview-for="<?php echo esc_attr( $name ); ?>">
                                <?php if ( $img_url ) : ?>
                                        <img src="<?php echo esc_url( $img_url ); ?>" alt="" style="max-width:120px;max-height:80px;" />
                                <?php endif; ?>
                        </div>
                        <input type="hidden" name="<?php echo esc_attr( $name ); ?>" value="<?php echo esc_attr( $value ); ?>" class="bk-image-id" />
                        <button type="button" class="button bk-upload-btn" data-field="<?php echo esc_attr( $name ); ?>"><?php esc_html_e( 'رفع صورة', 'brandkey' ); ?></button>
                        <button type="button" class="button bk-remove-img" data-field="<?php echo esc_attr( $name ); ?>" style="<?php echo $value ? '' : 'display:none'; ?>"><?php esc_html_e( 'حذف', 'brandkey' ); ?></button>
                </div>
        </div>
        <?php
}

/**
 * حقل checkbox (تفعيل/إلغاء)
 */
function bk_field_checkbox( $name, $label, $checked = true ) {
        ?>
        <div class="bk-field bk-field-checkbox">
                <label>
                        <input type="checkbox" name="<?php echo esc_attr( $name ); ?>" value="1" <?php checked( $checked, 1 ); ?> />
                        <?php echo esc_html( $label ); ?>
                </label>
        </div>
        <?php
}

/**
 * حقل select
 */
function bk_field_select( $name, $label, $options, $value = '' ) {
        ?>
        <div class="bk-field">
                <label class="bk-field-label"><?php echo esc_html( $label ); ?></label>
                <select name="<?php echo esc_attr( $name ); ?>" class="bk-select">
                        <?php foreach ( $options as $val => $lbl ) : ?>
                                <option value="<?php echo esc_attr( $val ); ?>" <?php selected( $value, $val ); ?>><?php echo esc_html( $lbl ); ?></option>
                        <?php endforeach; ?>
                </select>
        </div>
        <?php
}

/**
 * حقل color
 */
function bk_field_color( $name, $label, $value = '' ) {
        ?>
        <div class="bk-field bk-field-color">
                <label class="bk-field-label"><?php echo esc_html( $label ); ?></label>
                <input type="text" name="<?php echo esc_attr( $name ); ?>" value="<?php echo esc_attr( $value ); ?>" class="bk-color-picker" />
        </div>
        <?php
}

/**
 * بداية repeater
 */
function bk_repeater_start( $name, $label, $fields_config, $values = array() ) {
        ?>
        <div class="bk-repeater" data-repeater="<?php echo esc_attr( $name ); ?>">
                <label class="bk-field-label"><?php echo esc_html( $label ); ?></label>
                <div class="bk-repeater-rows">
                        <?php if ( ! empty( $values ) ) : foreach ( $values as $i => $row ) : ?>
                        <div class="bk-repeater-row" data-index="<?php echo esc_attr( $i ); ?>">
                                <div class="bk-repeater-row-header">
                                        <span class="bk-repeater-row-title"><?php echo esc_html( '#' . ( $i + 1 ) ); ?></span>
                                        <button type="button" class="button bk-repeater-remove"><?php esc_html_e( 'حذف', 'brandkey' ); ?></button>
                                </div>
                                <div class="bk-repeater-row-body">
                                        <?php foreach ( $fields_config as $field ) :
                                                $f_name = $name . '[' . $i . '][' . $field['name'] . ']';
                                                $f_val = $row[ $field['name'] ] ?? '';
                                                if ( $field['type'] === 'text' ) bk_field_text( $f_name, $field['label'], $f_val, $field['placeholder'] ?? '' );
                                                elseif ( $field['type'] === 'textarea' ) bk_field_textarea( $f_name, $field['label'], $f_val, $field['rows'] ?? 3 );
                                                elseif ( $field['type'] === 'image' ) bk_field_image( $f_name, $field['label'], $f_val );
                                                elseif ( $field['type'] === 'checkbox' ) bk_field_checkbox( $f_name, $field['label'], $f_val == 1 );
                                                elseif ( $field['type'] === 'select' ) bk_field_select( $f_name, $field['label'], $field['options'], $f_val );
                                                elseif ( $field['type'] === 'number' ) bk_field_text( $f_name, $field['label'], $f_val );
                                        ?>
                                        <?php endforeach; ?>
                                </div>
                        </div>
                        <?php endforeach; endif; ?>
                </div>
                <button type="button" class="button button-primary bk-repeater-add" data-template="<?php echo esc_attr( $name ); ?>"><?php esc_html_e( '+ إضافة', 'brandkey' ); ?></button>

                <!-- Template للصف الجديد (مخفي) -->
                <script type="text/html" class="bk-repeater-template" data-template="<?php echo esc_attr( $name ); ?>">
                        <div class="bk-repeater-row" data-index="{{INDEX}}">
                                <div class="bk-repeater-row-header">
                                        <span class="bk-repeater-row-title">#{{INDEX+1}}</span>
                                        <button type="button" class="button bk-repeater-remove"><?php esc_html_e( 'حذف', 'brandkey' ); ?></button>
                                </div>
                                <div class="bk-repeater-row-body">
                                        <?php foreach ( $fields_config as $field ) :
                                                $f_name = $name . '[{{INDEX}}][' . $field['name'] . ']';
                                                if ( $field['type'] === 'text' ) bk_field_text( $f_name, $field['label'], '', $field['placeholder'] ?? '' );
                                                elseif ( $field['type'] === 'textarea' ) bk_field_textarea( $f_name, $field['label'], '', $field['rows'] ?? 3 );
                                                elseif ( $field['type'] === 'image' ) bk_field_image( $f_name, $field['label'], '' );
                                                elseif ( $field['type'] === 'checkbox' ) bk_field_checkbox( $f_name, $field['label'], false );
                                                elseif ( $field['type'] === 'select' ) bk_field_select( $f_name, $field['label'], $field['options'], '' );
                                                elseif ( $field['type'] === 'number' ) bk_field_text( $f_name, $field['label'], '' );
                                        ?>
                                        <?php endforeach; ?>
                                </div>
                        </div>
                </script>
        </div>
        <?php
}

/**
 * ============================================================
 * 3. Rendering — Meta Box Callbacks
 * ============================================================
 */

function bk_render_front_hero( $post ) {
        wp_nonce_field( 'bk_meta_nonce', 'bk_meta_nonce_field' );
        $g = 'bk_front_hero_';
        bk_field_checkbox( $g.'enable', 'تفعيل السيكشن', get_post_meta( $post->ID, $g.'enable', true ) !== '0' );
        ?>
        <div class="bk-meta-grid">
                <?php
                bk_field_text( $g.'title', 'العنوان', get_post_meta( $post->ID, $g.'title', true ) ?: 'حلول تسويق رقمي متكاملة تنمو مع أعمالك' );
                bk_field_textarea( $g.'desc', 'الوصف', get_post_meta( $post->ID, $g.'desc', true ) ?: 'في Brand Key، ندمج الإبداع البصري مع الاستراتيجية التسويقية' );
                bk_field_text( $g.'primary_text', 'نص الزر الأساسي', get_post_meta( $post->ID, $g.'primary_text', true ) ?: 'ابدأ الآن، مجاناً' );
                bk_field_text( $g.'primary_url', 'رابط الزر الأساسي', get_post_meta( $post->ID, $g.'primary_url', true ) ?: '/contact' );
                bk_field_text( $g.'ghost_text', 'نص الزر الثانوي', get_post_meta( $post->ID, $g.'ghost_text', true ) ?: 'تعرف على المزيد' );
                bk_field_image( $g.'image', 'صورة الهيرو', get_post_meta( $post->ID, $g.'image', true ) );
                ?>
        </div>
        <?php
}

function bk_render_front_services( $post ) {
        $g = 'bk_front_services_';
        bk_field_checkbox( $g.'enable', 'تفعيل السيكشن', get_post_meta( get_the_ID(), $g.'enable', true ) !== '0' );
        bk_field_text( $g.'title', 'العنوان', get_post_meta( $post->ID, $g.'title', true ) ?: 'خدماتنا' );
        bk_field_textarea( $g.'desc', 'الوصف', get_post_meta( $post->ID, $g.'desc', true ) );

        $services = get_post_meta( $post->ID, $g.'items', true );
        if ( ! is_array( $services ) || empty( $services ) ) {
                $services = array(
                        array( 'title' => 'المحتوى الإبداعي', 'desc' => 'محتوى إبداعي يجذب انتباه جمهورك', 'tags' => 'كتابة المحتوى, التصميم الإبداعي, إنتاج الفيديو' ),
                        array( 'title' => 'التسويق والنمو', 'desc' => 'خدمات تسويقية مبتكرة لتعزيز نمو أعمالك', 'tags' => 'التسويق الرقمي, إدارة الحملات الإعلانية, تحسين المحتوى' ),
                        array( 'title' => 'الحلول التقنية والمتاجر', 'desc' => 'حلول تقنية متقدمة لبناء وتطوير متاجرك', 'tags' => 'تطوير المواقع, المتاجر الإلكترونية, تطبيقات الهواتف' ),
                );
        }

        bk_repeater_start( $g.'items', 'الخدمات', array(
                array( 'name' => 'title', 'label' => 'عنوان الخدمة', 'type' => 'text' ),
                array( 'name' => 'desc', 'label' => 'وصف الخدمة', 'type' => 'textarea', 'rows' => 2 ),
                array( 'name' => 'tags', 'label' => 'الوسوم (افصل بفواصل)', 'type' => 'text' ),
                array( 'name' => 'image', 'label' => 'صورة الخدمة', 'type' => 'image' ),
        ), $services );
}

function bk_render_front_sectors( $post ) {
        $g = 'bk_front_sectors_';
        bk_field_checkbox( $g.'enable', 'تفعيل السيكشن', get_post_meta( get_the_ID(), $g.'enable', true ) !== '0' );
        bk_field_text( $g.'title', 'العنوان', get_post_meta( $post->ID, $g.'title', true ) ?: 'حلول مصممة لكل قطاع' );
        bk_field_textarea( $g.'desc', 'الوصف', get_post_meta( $post->ID, $g.'desc', true ) );

        $sectors = get_post_meta( $post->ID, $g.'items', true );
        if ( ! is_array( $sectors ) || empty( $sectors ) ) {
                $sectors = array();
                $defaults = array(
                        array('السياحة والسفر','حجوزات الطيران والفنادق، تنظيم الرحلات'),
                        array('القطاع الطبي','المستشفيات والعيادات، خدمات الرعاية الصحية'),
                        array('التعليم والتدريب','البرامج التدريبية المؤسسية، التطوير المهني'),
                        array('قطاع الطاقة','الطاقة المتجددة، الكهرباء، النفط والغاز'),
                        array('مكاتب المحاماة','الاستشارات القانونية، إعداد العقود'),
                        array('التجارة الإلكترونية','المتاجر الإلكترونية، بوابات الدفع'),
                        array('خدمات الأعمال','الاستشارات الإدارية، تطوير الأعمال'),
                        array('خدمات الاستقدام','استقدام العمالة، إجراءات التأشيرات'),
                        array('خدمات الصيانة','صيانة المباني والمعدات، الكهرباء والتكييف'),
                        array('المجال الصناعي','المصانع والإنتاج، سلاسل الإمداد'),
                        array('القطاع العقاري','التطوير العقاري، إدارة الأملاك'),
                );
                foreach ( $defaults as $d ) {
                        $sectors[] = array( 'title' => $d[0], 'desc' => $d[1] );
                }
        }

        bk_repeater_start( $g.'items', 'القطاعات', array(
                array( 'name' => 'title', 'label' => 'اسم القطاع', 'type' => 'text' ),
                array( 'name' => 'desc', 'label' => 'وصف القطاع', 'type' => 'text' ),
        ), $sectors );
}

function bk_render_front_pricing( $post ) {
        $g = 'bk_front_pricing_';
        bk_field_checkbox( $g.'enable', 'تفعيل السيكشن', get_post_meta( get_the_ID(), $g.'enable', true ) !== '0' );
        bk_field_text( $g.'title', 'العنوان', get_post_meta( $post->ID, $g.'title', true ) ?: 'باقات مرنة.. ونتائج غير محدودة' );
        bk_field_textarea( $g.'desc', 'الوصف', get_post_meta( $post->ID, $g.'desc', true ) );

        $packages = get_post_meta( $post->ID, $g.'items', true );
        if ( ! is_array( $packages ) || empty( $packages ) ) {
                $packages = array(
                        array( 'name' => 'باقة التأسيس', 'amount' => '2,999', 'featured' => '0', 'features' => "إدارة المحتوى\nالنمو الرقمي\nصناعة المحتوى والقصص\nمدير حساب مخصص\nالتصميم الاحترافي", 'btn_text' => 'تواصل معنا للاشتراك' ),
                        array( 'name' => 'باقة النمو', 'amount' => '5,999', 'featured' => '1', 'features' => "تحسين محركات البحث\nإدارة الحملات الإعلانية\nصناعة محتوى المنصات\nمتابعة المنصات الرقمية\nتقديم التقارير الإحصائية", 'btn_text' => 'تواصل معنا للاشتراك' ),
                        array( 'name' => 'باقة التمكين', 'amount' => '7,999', 'featured' => '0', 'features' => "الأساسي\nإدارة حملة إعلانية واحدة\nتقرير شهري مفصل\nدعم فني عبر البريد\nاستشارة شهرية واحدة", 'btn_text' => 'تواصل معنا للاشتراك' ),
                );
        }

        bk_repeater_start( $g.'items', 'الباقات', array(
                array( 'name' => 'name', 'label' => 'اسم الباقة', 'type' => 'text' ),
                array( 'name' => 'amount', 'label' => 'السعر', 'type' => 'text' ),
                array( 'name' => 'featured', 'label' => 'باقة مميزة (الأكثر شعبية)', 'type' => 'checkbox' ),
                array( 'name' => 'features', 'label' => 'المميزات (سطر لكل ميزة)', 'type' => 'textarea', 'rows' => 5 ),
                array( 'name' => 'btn_text', 'label' => 'نص الزر', 'type' => 'text' ),
        ), $packages );
}

function bk_render_front_testimonials( $post ) {
        $g = 'bk_front_test_';
        bk_field_checkbox( $g.'enable', 'تفعيل السيكشن', get_post_meta( get_the_ID(), $g.'enable', true ) !== '0' );
        bk_field_text( $g.'title', 'العنوان', get_post_meta( $post->ID, $g.'title', true ) ?: 'ماذا يقول عملاؤنا' );
        bk_field_textarea( $g.'desc', 'الوصف', get_post_meta( $post->ID, $g.'desc', true ) );

        $items = get_post_meta( $post->ID, $g.'items', true );
        if ( ! is_array( $items ) || empty( $items ) ) {
                $items = array(
                        array( 'text' => 'كنت خايفة أبدأ في التسويق الرقمي وأخسر فلوس من غير نتيجة — براند كي وضحولي كل خطوة', 'name' => 'خالد حسن', 'role' => 'مدير علامة تجارية مستقل', 'avatar' => 'خ', 'rating' => '5' ),
                        array( 'text' => 'الشيء اللي يميز براند كي إنهم بيفهموا عملك الأول قبل ما يبدأوا', 'name' => 'سارة علي', 'role' => 'مديرة التسويق، متجر الأناقة', 'avatar' => 'س', 'rating' => '5' ),
                        array( 'text' => 'براند كي غيّرت صورة شركتنا الرقمية بالكامل — خلال 3 شهور بس حسينا بفرق', 'name' => 'أحمد محمد', 'role' => 'الرئيس التنفيذي، شركة النجاح', 'avatar' => 'أ', 'rating' => '5' ),
                );
        }

        bk_repeater_start( $g.'items', 'آراء العملاء', array(
                array( 'name' => 'text', 'label' => 'نص الرأي', 'type' => 'textarea', 'rows' => 3 ),
                array( 'name' => 'name', 'label' => 'اسم العميل', 'type' => 'text' ),
                array( 'name' => 'role', 'label' => 'الوظيفة', 'type' => 'text' ),
                array( 'name' => 'avatar', 'label' => 'الحرف الأول', 'type' => 'text' ),
                array( 'name' => 'rating', 'label' => 'التقييم (1-5)', 'type' => 'number' ),
        ), $items );
}

function bk_render_front_faq( $post ) {
        $g = 'bk_front_faq_';
        bk_field_checkbox( $g.'enable', 'تفعيل السيكشن', get_post_meta( get_the_ID(), $g.'enable', true ) !== '0' );
        bk_field_text( $g.'title', 'العنوان', get_post_meta( $post->ID, $g.'title', true ) ?: 'الأسئلة الشائعة' );
        bk_field_textarea( $g.'desc', 'الوصف', get_post_meta( $post->ID, $g.'desc', true ) );

        $items = get_post_meta( $post->ID, $g.'items', true );
        if ( ! is_array( $items ) || empty( $items ) ) {
                $items = array(
                        array( 'question' => 'كيف تقيسون نجاح الحملات التسويقية؟', 'answer' => 'نقيس النجاح عبر مؤشرات أداء واضحة (KPIs) تشمل ROI، CAC، معدل التحويل.' ),
                        array( 'question' => 'ما هي تكلفة خدماتكم؟', 'answer' => 'التكلفة تعتمد على حجم المشروع. لدينا باقات مرنة تبدأ من 2,999 ريال.' ),
                        array( 'question' => 'كيف أبدأ العمل مع Brandkey؟', 'answer' => 'احجز استشارة مجانية، نحلل وضعك، نقدم خطة، نبدأ التنفيذ.' ),
                        array( 'question' => 'ما الذي يميز Brandkey؟', 'answer' => 'إحنا مش بنبيع خدمات، إحنا بنقدم حلول مخصصة بالكامل.' ),
                );
        }

        bk_repeater_start( $g.'items', 'الأسئلة', array(
                array( 'name' => 'question', 'label' => 'السؤال', 'type' => 'text' ),
                array( 'name' => 'answer', 'label' => 'الإجابة', 'type' => 'textarea', 'rows' => 3 ),
        ), $items );
}

function bk_render_front_cta( $post ) {
        $g = 'bk_front_cta_';
        bk_field_checkbox( $g.'enable', 'تفعيل السيكشن', get_post_meta( get_the_ID(), $g.'enable', true ) !== '0' );
        bk_field_text( $g.'title', 'العنوان', get_post_meta( $post->ID, $g.'title', true ) ?: 'مستعد تبدأ رحلتك الرقمية!' );
        bk_field_textarea( $g.'desc', 'الوصف', get_post_meta( $post->ID, $g.'desc', true ) ?: 'استشارة مجانية 30 دقيقة مع خبراء براند كي' );
        bk_field_text( $g.'btn_text', 'نص الزر', get_post_meta( $post->ID, $g.'btn_text', true ) ?: 'تواصل معنا الآن!' );
        bk_field_text( $g.'btn_url', 'رابط الزر', get_post_meta( $post->ID, $g.'btn_url', true ) ?: '/contact' );
}

/**
 * ===== Inner Hero Meta Box =====
 */
function bk_render_inner_hero( $post ) {
        wp_nonce_field( 'bk_meta_nonce', 'bk_meta_nonce_field' );
        ?>
        <div class="bk-meta-grid">
                <?php
                bk_field_text( 'ih_title', 'العنوان', get_post_meta( $post->ID, 'ih_title', true ) );
                bk_field_textarea( 'ih_desc', 'الوصف', get_post_meta( $post->ID, 'ih_desc', true ) );
                bk_field_text( 'ih_primary_text', 'نص الزر الأساسي', get_post_meta( $post->ID, 'ih_primary_text', true ) ?: 'ابدأ الآن' );
                bk_field_text( 'ih_primary_url', 'رابط الزر الأساسي', get_post_meta( $post->ID, 'ih_primary_url', true ) ?: '/contact' );
                bk_field_text( 'ih_ghost_text', 'نص الزر الثانوي', get_post_meta( $post->ID, 'ih_ghost_text', true ) );
                bk_field_text( 'ih_ghost_url', 'رابط الزر الثانوي', get_post_meta( $post->ID, 'ih_ghost_url', true ) ?: '#' );
                bk_field_image( 'ih_photo', 'صورة الهيرو', get_post_meta( $post->ID, 'ih_photo', true ) );
                ?>
        </div>
        <?php
}

/**
 * ===== Contact Info Meta Box =====
 */
function bk_render_contact_info( $post ) {
        ?>
        <div class="bk-meta-grid">
                <?php
                bk_field_text( 'contact_phone', 'رقم الهاتف', get_post_meta( $post->ID, 'contact_phone', true ) );
                bk_field_text( 'contact_email', 'البريد الإلكتروني', get_post_meta( $post->ID, 'contact_email', true ) );
                bk_field_text( 'contact_address', 'العنوان', get_post_meta( $post->ID, 'contact_address', true ) );
                ?>
        </div>
        <?php

        $offices = get_post_meta( $post->ID, 'contact_offices', true );
        if ( ! is_array( $offices ) || empty( $offices ) ) {
                $offices = array(
                        array( 'name' => 'مكتب القاهرة', 'type' => 'المقر الرئيسي', 'address' => 'القاهرة، شارع التحرير', 'phone' => '+20 100 123 4567', 'map_url' => 'https://maps.google.com' ),
                        array( 'name' => 'مكتب الرياض', 'type' => 'الفرع الإقليمي', 'address' => 'الرياض، حي العليا', 'phone' => '+966 50 123 4567', 'map_url' => 'https://maps.google.com' ),
                );
        }

        bk_repeater_start( 'contact_offices', 'المكاتب', array(
                array( 'name' => 'name', 'label' => 'اسم المكتب', 'type' => 'text' ),
                array( 'name' => 'type', 'label' => 'النوع (رئيسي/فرع)', 'type' => 'text' ),
                array( 'name' => 'address', 'label' => 'العنوان', 'type' => 'textarea', 'rows' => 2 ),
                array( 'name' => 'phone', 'label' => 'الهاتف', 'type' => 'text' ),
                array( 'name' => 'map_url', 'label' => 'رابط الخريطة', 'type' => 'text' ),
        ), $offices );
}

/**
 * ============================================================
 * 4. Save Handler
 * ============================================================
 */
function bk_save_meta( $post_id ) {
        if ( ! isset( $_POST['bk_meta_nonce_field'] ) || ! wp_verify_nonce( $_POST['bk_meta_nonce_field'], 'bk_meta_nonce' ) ) return;
        if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
        if ( ! current_user_can( 'edit_post', $post_id ) ) return;

        // كل الحقول اللي بنحفظها
        $text_fields = array(
                'bk_front_hero_enable', 'bk_front_hero_title', 'bk_front_hero_desc', 'bk_front_hero_primary_text', 'bk_front_hero_primary_url', 'bk_front_hero_ghost_text', 'bk_front_hero_image',
                'bk_front_services_enable', 'bk_front_services_title', 'bk_front_services_desc',
                'bk_front_sectors_enable', 'bk_front_sectors_title', 'bk_front_sectors_desc',
                'bk_front_pricing_enable', 'bk_front_pricing_title', 'bk_front_pricing_desc',
                'bk_front_test_enable', 'bk_front_test_title', 'bk_front_test_desc',
                'bk_front_faq_enable', 'bk_front_faq_title', 'bk_front_faq_desc',
                'bk_front_cta_enable', 'bk_front_cta_title', 'bk_front_cta_desc', 'bk_front_cta_btn_text', 'bk_front_cta_btn_url',
                // inner hero
                'ih_title', 'ih_desc', 'ih_primary_text', 'ih_primary_url', 'ih_ghost_text', 'ih_ghost_url', 'ih_photo',
                // contact
                'contact_phone', 'contact_email', 'contact_address',
        );

        // حفظ الحقول النصية
        foreach ( $text_fields as $field ) {
                if ( isset( $_POST[ $field ] ) ) {
                        update_post_meta( $post_id, $field, sanitize_text_field( $_POST[ $field ] ) );
                } elseif ( strpos( $field, '_enable' ) !== false ) {
                        update_post_meta( $post_id, $field, '0' );
                }
        }

        // حفظ الـ repeaters
        $repeaters = array(
                'bk_front_services_items' => array( 'title', 'desc', 'tags', 'image' ),
                'bk_front_sectors_items' => array( 'title', 'desc' ),
                'bk_front_pricing_items' => array( 'name', 'amount', 'featured', 'features', 'btn_text' ),
                'bk_front_test_items' => array( 'text', 'name', 'role', 'avatar', 'rating' ),
                'bk_front_faq_items' => array( 'question', 'answer' ),
                'contact_offices' => array( 'name', 'type', 'address', 'phone', 'map_url' ),
        );

        foreach ( $repeaters as $key => $sub_fields ) {
                if ( isset( $_POST[ $key ] ) && is_array( $_POST[ $key ] ) ) {
                        $clean = array();
                        foreach ( $_POST[ $key ] as $row ) {
                                $clean_row = array();
                                foreach ( $sub_fields as $sf ) {
                                        $clean_row[ $sf ] = isset( $row[ $sf ] ) ? sanitize_text_field( $row[ $sf ] ) : '';
                                }
                                $clean[] = $clean_row;
                        }
                        update_post_meta( $post_id, $key, $clean );
                }
        }
}
add_action( 'save_post', 'bk_save_meta' );

/**
 * ============================================================
 * 5. Helper: قراءة الحقول في الـ templates
 * ============================================================
 */
function bk_meta( $key, $post_id = null, $default = '' ) {
        if ( ! $post_id ) $post_id = get_the_ID();
        $val = get_post_meta( $post_id, $key, true );
        return ( $val !== '' && $val !== null ) ? $val : $default;
}

function bk_meta_items( $key, $post_id = null ) {
        if ( ! $post_id ) $post_id = get_the_ID();
        $val = get_post_meta( $post_id, $key, true );
        return is_array( $val ) ? $val : array();
}

function bk_meta_enabled( $key, $post_id = null ) {
        if ( ! $post_id ) $post_id = get_the_ID();
        $val = get_post_meta( $post_id, $key, true );
        // لو المفتاح مش موجود في الداتابيز خالص → مفعّل افتراضياً
        // لو موجود = '0' → معطّل
        // لو موجود = '1' أو أي قيمة تانية → مفعّل
        if ( $val === '' || $val === false || $val === null ) return true;
        return $val !== '0';
}
