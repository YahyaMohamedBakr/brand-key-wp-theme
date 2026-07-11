<?php
/**
 * ACF-like meta boxes for Custom Post Types
 *
 * Provides custom fields for projects, services, sectors, testimonials, FAQ, packages.
 * No ACF plugin required — native WordPress meta boxes.
 *
 * @package BrandKey
 */

if ( ! defined( 'ABSPATH' ) ) {
        exit;
}

/**
 * Register all meta boxes
 */
function brandkey_add_meta_boxes() {
        // ===== Project meta =====
        add_meta_box( 'bk_project_meta', __( 'تفاصيل المشروع', 'brandkey' ), 'brandkey_project_meta_callback', 'bk_project', 'normal', 'high' );

        // ===== Service meta =====
        add_meta_box( 'bk_service_meta', __( 'تفاصيل الخدمة', 'brandkey' ), 'brandkey_service_meta_callback', 'bk_service', 'normal', 'high' );

        // ===== Sector meta =====
        add_meta_box( 'bk_sector_meta', __( 'تفاصيل القطاع', 'brandkey' ), 'brandkey_sector_meta_callback', 'bk_sector', 'normal', 'high' );

        // ===== Testimonial meta =====
        add_meta_box( 'bk_testimonial_meta', __( 'تفاصيل رأي العميل', 'brandkey' ), 'brandkey_testimonial_meta_callback', 'bk_testimonial', 'normal', 'high' );

        // ===== FAQ meta =====
        add_meta_box( 'bk_faq_meta', __( 'تصنيف السؤال', 'brandkey' ), 'brandkey_faq_meta_callback', 'bk_faq', 'side', 'default' );

        // ===== Package meta =====
        add_meta_box( 'bk_package_meta', __( 'تفاصيل الباقة', 'brandkey' ), 'brandkey_package_meta_callback', 'bk_package', 'normal', 'high' );
}
add_action( 'add_meta_boxes', 'brandkey_add_meta_boxes' );

/**
 * ===== Project meta callback =====
 */
function brandkey_project_meta_callback( $post ) {
        wp_nonce_field( 'bk_project_meta_nonce', 'bk_project_meta_nonce_field' );

        $client   = get_post_meta( $post->ID, '_bk_project_client', true );
        $duration = get_post_meta( $post->ID, '_bk_project_duration', true );
        $location = get_post_meta( $post->ID, '_bk_project_location', true );
        $services = get_post_meta( $post->ID, '_bk_project_services', true );
        $tools    = get_post_meta( $post->ID, '_bk_project_tools', true );
        $results  = get_post_meta( $post->ID, '_bk_project_results', true );
        ?>
        <table class="form-table">
                <tr>
                        <th><label for="bk_project_client"><?php esc_html_e( 'اسم العميل', 'brandkey' ); ?></label></th>
                        <td><input type="text" id="bk_project_client" name="bk_project_client" value="<?php echo esc_attr( $client ); ?>" class="regular-text" /></td>
                </tr>
                <tr>
                        <th><label for="bk_project_duration"><?php esc_html_e( 'مدة المشروع', 'brandkey' ); ?></label></th>
                        <td><input type="text" id="bk_project_duration" name="bk_project_duration" value="<?php echo esc_attr( $duration ); ?>" class="regular-text" placeholder="<?php esc_attr_e( 'مثال: 45 يوماً', 'brandkey' ); ?>" /></td>
                </tr>
                <tr>
                        <th><label for="bk_project_location"><?php esc_html_e( 'الموقع', 'brandkey' ); ?></label></th>
                        <td><input type="text" id="bk_project_location" name="bk_project_location" value="<?php echo esc_attr( $location ); ?>" class="regular-text" placeholder="<?php esc_attr_e( 'مثال: الدمام', 'brandkey' ); ?>" /></td>
                </tr>
                <tr>
                        <th><label for="bk_project_services"><?php esc_html_e( 'الخدمات (افصل بفواصل)', 'brandkey' ); ?></label></th>
                        <td><input type="text" id="bk_project_services" name="bk_project_services" value="<?php echo esc_attr( $services ); ?>" class="regular-text" placeholder="<?php esc_attr_e( 'مثال: تطوير المواقع, التجارة الإلكترونية, UX/UI', 'brandkey' ); ?>" /></td>
                </tr>
                <tr>
                        <th><label for="bk_project_tools"><?php esc_html_e( 'الأدوات المستخدمة (افصل بفواصل)', 'brandkey' ); ?></label></th>
                        <td><input type="text" id="bk_project_tools" name="bk_project_tools" value="<?php echo esc_attr( $tools ); ?>" class="regular-text" placeholder="<?php esc_attr_e( 'مثال: Adobe Illustrator, WordPress, Figma', 'brandkey' ); ?>" /></td>
                </tr>
                <tr>
                        <th><label for="bk_project_results"><?php esc_html_e( 'النتائج المحققة', 'brandkey' ); ?></label></th>
                        <td><textarea id="bk_project_results" name="bk_project_results" rows="3" class="large-text"><?php echo esc_textarea( $results ); ?></textarea></td>
                </tr>
        </table>
        <?php
}

/**
 * ===== Service meta callback =====
 */
function brandkey_service_meta_callback( $post ) {
        wp_nonce_field( 'bk_service_meta_nonce', 'bk_service_meta_nonce_field' );

        $subtitle = get_post_meta( $post->ID, '_bk_service_subtitle', true );
        $icon_id  = get_post_meta( $post->ID, '_bk_service_icon', true );
        $steps    = get_post_meta( $post->ID, '_bk_service_steps', true );
        ?>
        <table class="form-table">
                <tr>
                        <th><label for="bk_service_subtitle"><?php esc_html_e( 'العنوان الفرعي / الوصف المختصر', 'brandkey' ); ?></label></th>
                        <td><input type="text" id="bk_service_subtitle" name="bk_service_subtitle" value="<?php echo esc_attr( $subtitle ); ?>" class="regular-text" /></td>
                </tr>
                <tr>
                        <th><label for="bk_service_icon"><?php esc_html_e( 'صورة الأيقونة (ID)', 'brandkey' ); ?></label></th>
                        <td>
                                <input type="number" id="bk_service_icon" name="bk_service_icon" value="<?php echo esc_attr( $icon_id ); ?>" class="regular-text" />
                                <p class="description"><?php esc_html_e( 'أدخل ID الصورة من مكتبة الوسائط', 'brandkey' ); ?></p>
                        </td>
                </tr>
                <tr>
                        <th><label for="bk_service_steps"><?php esc_html_e( 'خطوات الخدمة (سطر لكل خطوة)', 'brandkey' ); ?></label></th>
                        <td><textarea id="bk_service_steps" name="bk_service_steps" rows="5" class="large-text" placeholder="<?php esc_attr_e( 'الاستكشاف', 'brandkey' ); ?>&#10;<?php esc_attr_e( 'التصميم', 'brandkey' ); ?>&#10;<?php esc_attr_e( 'التطوير', 'brandkey' ); ?>"><?php echo esc_textarea( $steps ); ?></textarea></td>
                </tr>
        </table>
        <?php
}

/**
 * ===== Sector meta callback =====
 */
function brandkey_sector_meta_callback( $post ) {
        wp_nonce_field( 'bk_sector_meta_nonce', 'bk_sector_meta_nonce_field' );

        $subtitle  = get_post_meta( $post->ID, '_bk_sector_subtitle', true );
        $solutions = get_post_meta( $post->ID, '_bk_sector_solutions', true );

        // 4 إحصائيات (حقول فردية سهلة — مش JSON)
        $stat_1_num = get_post_meta( $post->ID, '_bk_sector_stat_1_num', true );
        $stat_1_lbl = get_post_meta( $post->ID, '_bk_sector_stat_1_label', true );
        $stat_2_num = get_post_meta( $post->ID, '_bk_sector_stat_2_num', true );
        $stat_2_lbl = get_post_meta( $post->ID, '_bk_sector_stat_2_label', true );
        $stat_3_num = get_post_meta( $post->ID, '_bk_sector_stat_3_num', true );
        $stat_3_lbl = get_post_meta( $post->ID, '_bk_sector_stat_3_label', true );
        $stat_4_num = get_post_meta( $post->ID, '_bk_sector_stat_4_num', true );
        $stat_4_lbl = get_post_meta( $post->ID, '_bk_sector_stat_4_label', true );
        ?>
        <table class="form-table">
                <tr>
                        <th><label for="bk_sector_subtitle"><?php esc_html_e( 'العنوان الفرعي / الوصف', 'brandkey' ); ?></label></th>
                        <td><input type="text" id="bk_sector_subtitle" name="bk_sector_subtitle" value="<?php echo esc_attr( $subtitle ); ?>" class="regular-text" /></td>
                </tr>
        </table>

        <h3 style="margin: 20px 0 10px;"><?php esc_html_e( 'الإحصائيات (تظهر في هيرو صفحة القطاع)', 'brandkey' ); ?></h3>
        <table class="form-table">
                <tr>
                        <th><?php esc_html_e( 'الإحصائية 1', 'brandkey' ); ?></th>
                        <td>
                                <input type="text" name="bk_sector_stat_1_num" value="<?php echo esc_attr( $stat_1_num ); ?>" placeholder="<?php esc_attr_e( 'الرقم (مثال: 98%)', 'brandkey' ); ?>" style="width:120px;" />
                                <input type="text" name="bk_sector_stat_1_label" value="<?php echo esc_attr( $stat_1_lbl ); ?>" placeholder="<?php esc_attr_e( 'الوصف (مثال: معدل رضا المرضى)', 'brandkey' ); ?>" style="width:300px;" />
                        </td>
                </tr>
                <tr>
                        <th><?php esc_html_e( 'الإحصائية 2', 'brandkey' ); ?></th>
                        <td>
                                <input type="text" name="bk_sector_stat_2_num" value="<?php echo esc_attr( $stat_2_num ); ?>" placeholder="<?php esc_attr_e( 'الرقم (مثال: 12K+)', 'brandkey' ); ?>" style="width:120px;" />
                                <input type="text" name="bk_sector_stat_2_label" value="<?php echo esc_attr( $stat_2_lbl ); ?>" placeholder="<?php esc_attr_e( 'الوصف', 'brandkey' ); ?>" style="width:300px;" />
                        </td>
                </tr>
                <tr>
                        <th><?php esc_html_e( 'الإحصائية 3', 'brandkey' ); ?></th>
                        <td>
                                <input type="text" name="bk_sector_stat_3_num" value="<?php echo esc_attr( $stat_3_num ); ?>" placeholder="<?php esc_attr_e( 'الرقم', 'brandkey' ); ?>" style="width:120px;" />
                                <input type="text" name="bk_sector_stat_3_label" value="<?php echo esc_attr( $stat_3_lbl ); ?>" placeholder="<?php esc_attr_e( 'الوصف', 'brandkey' ); ?>" style="width:300px;" />
                        </td>
                </tr>
                <tr>
                        <th><?php esc_html_e( 'الإحصائية 4', 'brandkey' ); ?></th>
                        <td>
                                <input type="text" name="bk_sector_stat_4_num" value="<?php echo esc_attr( $stat_4_num ); ?>" placeholder="<?php esc_attr_e( 'الرقم', 'brandkey' ); ?>" style="width:120px;" />
                                <input type="text" name="bk_sector_stat_4_label" value="<?php echo esc_attr( $stat_4_lbl ); ?>" placeholder="<?php esc_attr_e( 'الوصف', 'brandkey' ); ?>" style="width:300px;" />
                        </td>
                </tr>
        </table>

        <table class="form-table">
                <tr>
                        <th><label for="bk_sector_solutions"><?php esc_html_e( 'الحلول (سطر لكل حل)', 'brandkey' ); ?></label></th>
                        <td><textarea id="bk_sector_solutions" name="bk_sector_solutions" rows="5" class="large-text"><?php echo esc_textarea( $solutions ); ?></textarea></td>
                </tr>
        </table>
        <?php
}

/**
 * ===== Testimonial meta callback =====
 */
function brandkey_testimonial_meta_callback( $post ) {
        wp_nonce_field( 'bk_testimonial_meta_nonce', 'bk_testimonial_meta_nonce_field' );

        $name    = get_post_meta( $post->ID, '_bk_testimonial_name', true );
        $role    = get_post_meta( $post->ID, '_bk_testimonial_role', true );
        $company = get_post_meta( $post->ID, '_bk_testimonial_company', true );
        $rating  = get_post_meta( $post->ID, '_bk_testimonial_rating', true );
        $rating  = $rating ? $rating : 5;
        ?>
        <table class="form-table">
                <tr>
                        <th><label for="bk_testimonial_name"><?php esc_html_e( 'اسم العميل', 'brandkey' ); ?></label></th>
                        <td><input type="text" id="bk_testimonial_name" name="bk_testimonial_name" value="<?php echo esc_attr( $name ); ?>" class="regular-text" /></td>
                </tr>
                <tr>
                        <th><label for="bk_testimonial_role"><?php esc_html_e( 'الوظيفة / الدور', 'brandkey' ); ?></label></th>
                        <td><input type="text" id="bk_testimonial_role" name="bk_testimonial_role" value="<?php echo esc_attr( $role ); ?>" class="regular-text" /></td>
                </tr>
                <tr>
                        <th><label for="bk_testimonial_company"><?php esc_html_e( 'الشركة', 'brandkey' ); ?></label></th>
                        <td><input type="text" id="bk_testimonial_company" name="bk_testimonial_company" value="<?php echo esc_attr( $company ); ?>" class="regular-text" /></td>
                </tr>
                <tr>
                        <th><label for="bk_testimonial_rating"><?php esc_html_e( 'التقييم (1-5)', 'brandkey' ); ?></label></th>
                        <td>
                                <select id="bk_testimonial_rating" name="bk_testimonial_rating">
                                        <?php for ( $i = 1; $i <= 5; $i++ ) : ?>
                                                <option value="<?php echo esc_attr( $i ); ?>" <?php selected( $rating, $i ); ?>><?php echo esc_html( $i ); ?> ★</option>
                                        <?php endfor; ?>
                                </select>
                        </td>
                </tr>
        </table>
        <p class="description"><?php esc_html_e( 'محتوى الرأي يكون في المحرر الرئيسي بالأعلى.', 'brandkey' ); ?></p>
        <?php
}

/**
 * ===== FAQ meta callback =====
 */
function brandkey_faq_meta_callback( $post ) {
        wp_nonce_field( 'bk_faq_meta_nonce', 'bk_faq_meta_nonce_field' );

        $category = get_post_meta( $post->ID, '_bk_faq_category', true );
        ?>
        <label for="bk_faq_category"><?php esc_html_e( 'التصنيف', 'brandkey' ); ?></label>
        <input type="text" id="bk_faq_category" name="bk_faq_category" value="<?php echo esc_attr( $category ); ?>" class="regular-text" />
        <p class="description"><?php esc_html_e( 'مثال: التسعير، المدة، الدعم', 'brandkey' ); ?></p>
        <?php
}

/**
 * ===== Package meta callback =====
 */
function brandkey_package_meta_callback( $post ) {
        wp_nonce_field( 'bk_package_meta_nonce', 'bk_package_meta_nonce_field' );

        $price_m   = get_post_meta( $post->ID, '_bk_package_price_monthly', true );
        $price_y   = get_post_meta( $post->ID, '_bk_package_price_yearly', true );
        $features  = get_post_meta( $post->ID, '_bk_package_features', true );
        $popular   = get_post_meta( $post->ID, '_bk_package_popular', true );
        ?>
        <table class="form-table">
                <tr>
                        <th><label for="bk_package_price_monthly"><?php esc_html_e( 'السعر الشهري', 'brandkey' ); ?></label></th>
                        <td><input type="text" id="bk_package_price_monthly" name="bk_package_price_monthly" value="<?php echo esc_attr( $price_m ); ?>" class="regular-text" placeholder="<?php esc_attr_e( '999', 'brandkey' ); ?>" /></td>
                </tr>
                <tr>
                        <th><label for="bk_package_price_yearly"><?php esc_html_e( 'السعر السنوي', 'brandkey' ); ?></label></th>
                        <td><input type="text" id="bk_package_price_yearly" name="bk_package_price_yearly" value="<?php echo esc_attr( $price_y ); ?>" class="regular-text" placeholder="<?php esc_attr_e( '9990', 'brandkey' ); ?>" /></td>
                </tr>
                <tr>
                        <th><label for="bk_package_features"><?php esc_html_e( 'المميزات (سطر لكل ميزة)', 'brandkey' ); ?></label></th>
                        <td>
                                <textarea id="bk_package_features" name="bk_package_features" rows="8" class="large-text" placeholder="<?php esc_attr_e( 'تصميم هوية بصرية', 'brandkey' ); ?>&#10;<?php esc_attr_e( 'موقع تعريفي (5 صفحات)', 'brandkey' ); ?>"><?php echo esc_textarea( $features ); ?></textarea>
                        </td>
                </tr>
                <tr>
                        <th><?php esc_html_e( 'باقة مميزة (الأكثر طلباً)', 'brandkey' ); ?></th>
                        <td>
                                <label>
                                        <input type="checkbox" name="bk_package_popular" value="1" <?php checked( $popular, '1' ); ?> />
                                        <?php esc_html_e( 'إظهار شارة "الأكثر طلباً"', 'brandkey' ); ?>
                                </label>
                        </td>
                </tr>
        </table>
        <?php
}

/**
 * Save meta box data
 */
function brandkey_save_meta_boxes( $post_id ) {
        // تحقق من الـ nonce لكل نوع
        $meta_boxes = array(
                'project'     => array( 'client', 'duration', 'location', 'services', 'tools', 'results' ),
                'service'     => array( 'subtitle', 'icon', 'steps' ),
                'sector'      => array( 'subtitle', 'stat_1_num', 'stat_1_label', 'stat_2_num', 'stat_2_label', 'stat_3_num', 'stat_3_label', 'stat_4_num', 'stat_4_label', 'solutions' ),
                'testimonial' => array( 'name', 'role', 'company', 'rating' ),
                'faq'         => array( 'category' ),
                'package'     => array( 'price_monthly', 'price_yearly', 'features', 'popular' ),
        );

        foreach ( $meta_boxes as $type => $fields ) {
                $nonce_name = 'bk_' . $type . '_meta_nonce_field';
                $nonce_action = 'bk_' . $type . '_meta_nonce';

                if ( ! isset( $_POST[ $nonce_name ] ) || ! wp_verify_nonce( $_POST[ $nonce_name ], $nonce_action ) ) {
                        continue;
                }

                if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
                        continue;
                }

                if ( ! current_user_can( 'edit_post', $post_id ) ) {
                        continue;
                }

                foreach ( $fields as $field ) {
                        $key = '_bk_' . $type . '_' . $field;
                        $input_name = 'bk_' . $type . '_' . $field;

                        if ( isset( $_POST[ $input_name ] ) ) {
                                $value = wp_unslash( $_POST[ $input_name ] );
                                if ( 'popular' === $field ) {
                                        $value = '1';
                                }
                                update_post_meta( $post_id, $key, $value );
                        } elseif ( 'popular' === $field ) {
                                // checkbox unchecked
                                update_post_meta( $post_id, '_bk_package_popular', '0' );
                        }
                }
        }
}
add_action( 'save_post', 'brandkey_save_meta_boxes' );

/**
 * Add admin styles for meta boxes
 */
function brandkey_meta_box_styles() {
        ?>
        <style>
                .form-table th { width: 200px; padding: 15px 10px; }
                .form-table td { padding: 10px; }
                .form-table input[type="text"],
                .form-table input[type="number"],
                .form-table textarea,
                .form-table select { width: 100%; max-width: 500px; }
                .form-table .description { color: #666; font-size: 12px; margin-top: 4px; }
        </style>
        <?php
}
add_action( 'admin_head', 'brandkey_meta_box_styles' );
