<?php
/**
 * Custom Post Types and Taxonomies
 *
 * @package BrandKey
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Register Custom Post Types
 */
function brandkey_register_post_types() {

	// ===== المشاريع (Projects) =====
	register_post_type( 'bk_project', array(
		'labels' => array(
			'name'               => __( 'المشاريع', 'brandkey' ),
			'singular_name'      => __( 'مشروع', 'brandkey' ),
			'add_new'            => __( 'أضف مشروع', 'brandkey' ),
			'add_new_item'       => __( 'أضف مشروع جديد', 'brandkey' ),
			'edit_item'          => __( 'تعديل المشروع', 'brandkey' ),
			'new_item'           => __( 'مشروع جديد', 'brandkey' ),
			'view_item'          => __( 'عرض المشروع', 'brandkey' ),
			'search_items'       => __( 'بحث في المشاريع', 'brandkey' ),
			'not_found'          => __( 'لا توجد مشاريع', 'brandkey' ),
			'not_found_in_trash' => __( 'لا توجد مشاريع في السلة', 'brandkey' ),
		),
		'public'       => true,
		'has_archive'  => true,
		'menu_icon'    => 'dashicons-portfolio',
		'menu_position'=> 5,
		'supports'     => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' ),
		'rewrite'      => array( 'slug' => 'projects', 'with_front' => false ),
		'show_in_rest' => true,
	) );

	// ===== الخدمات (Services) =====
	register_post_type( 'bk_service', array(
		'labels' => array(
			'name'               => __( 'الخدمات', 'brandkey' ),
			'singular_name'      => __( 'خدمة', 'brandkey' ),
			'add_new'            => __( 'أضف خدمة', 'brandkey' ),
			'add_new_item'       => __( 'أضف خدمة جديدة', 'brandkey' ),
			'edit_item'          => __( 'تعديل الخدمة', 'brandkey' ),
			'new_item'           => __( 'خدمة جديدة', 'brandkey' ),
			'view_item'          => __( 'عرض الخدمة', 'brandkey' ),
			'search_items'       => __( 'بحث في الخدمات', 'brandkey' ),
			'not_found'          => __( 'لا توجد خدمات', 'brandkey' ),
			'not_found_in_trash' => __( 'لا توجد خدمات في السلة', 'brandkey' ),
		),
		'public'       => true,
		'has_archive'  => true,
		'menu_icon'    => 'dashicons-clipboard',
		'menu_position'=> 6,
		'supports'     => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' ),
		'rewrite'      => array( 'slug' => 'services', 'with_front' => false ),
		'show_in_rest' => true,
	) );

	// ===== القطاعات (Sectors) =====
	register_post_type( 'bk_sector', array(
		'labels' => array(
			'name'               => __( 'القطاعات', 'brandkey' ),
			'singular_name'      => __( 'قطاع', 'brandkey' ),
			'add_new'            => __( 'أضف قطاع', 'brandkey' ),
			'add_new_item'       => __( 'أضف قطاع جديد', 'brandkey' ),
			'edit_item'          => __( 'تعديل القطاع', 'brandkey' ),
			'new_item'           => __( 'قطاع جديد', 'brandkey' ),
			'view_item'          => __( 'عرض القطاع', 'brandkey' ),
			'search_items'       => __( 'بحث في القطاعات', 'brandkey' ),
			'not_found'          => __( 'لا توجد قطاعات', 'brandkey' ),
			'not_found_in_trash' => __( 'لا توجد قطاعات في السلة', 'brandkey' ),
		),
		'public'       => true,
		'has_archive'  => true,
		'menu_icon'    => 'dashicons-category',
		'menu_position'=> 7,
		'supports'     => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' ),
		'rewrite'      => array( 'slug' => 'sectors', 'with_front' => false ),
		'show_in_rest' => true,
	) );

	// ===== آراء العملاء (Testimonials) =====
	register_post_type( 'bk_testimonial', array(
		'labels' => array(
			'name'               => __( 'آراء العملاء', 'brandkey' ),
			'singular_name'      => __( 'رأي عميل', 'brandkey' ),
			'add_new'            => __( 'أضف رأي', 'brandkey' ),
			'add_new_item'       => __( 'أضف رأي جديد', 'brandkey' ),
			'edit_item'          => __( 'تعديل الرأي', 'brandkey' ),
			'new_item'           => __( 'رأي جديد', 'brandkey' ),
			'view_item'          => __( 'عرض الرأي', 'brandkey' ),
			'search_items'       => __( 'بحث في الآراء', 'brandkey' ),
			'not_found'          => __( 'لا توجد آراء', 'brandkey' ),
			'not_found_in_trash' => __( 'لا توجد آراء في السلة', 'brandkey' ),
		),
		'public'       => false,
		'show_ui'      => true,
		'has_archive'  => false,
		'menu_icon'    => 'dashicons-format-quote',
		'menu_position'=> 8,
		'supports'     => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
		'show_in_rest' => true,
	) );

	// ===== الأسئلة الشائعة (FAQ) =====
	register_post_type( 'bk_faq', array(
		'labels' => array(
			'name'               => __( 'الأسئلة الشائعة', 'brandkey' ),
			'singular_name'      => __( 'سؤال', 'brandkey' ),
			'add_new'            => __( 'أضف سؤال', 'brandkey' ),
			'add_new_item'       => __( 'أضف سؤال جديد', 'brandkey' ),
			'edit_item'          => __( 'تعديل السؤال', 'brandkey' ),
			'new_item'           => __( 'سؤال جديد', 'brandkey' ),
			'view_item'          => __( 'عرض السؤال', 'brandkey' ),
			'search_items'       => __( 'بحث في الأسئلة', 'brandkey' ),
			'not_found'          => __( 'لا توجد أسئلة', 'brandkey' ),
			'not_found_in_trash' => __( 'لا توجد أسئلة في السلة', 'brandkey' ),
		),
		'public'       => false,
		'show_ui'      => true,
		'has_archive'  => false,
		'menu_icon'    => 'dashicons-editor-help',
		'menu_position'=> 9,
		'supports'     => array( 'title', 'editor', 'custom-fields' ),
		'show_in_rest' => true,
	) );

	// ===== الباقات (Pricing Packages) =====
	register_post_type( 'bk_package', array(
		'labels' => array(
			'name'               => __( 'الباقات', 'brandkey' ),
			'singular_name'      => __( 'باقة', 'brandkey' ),
			'add_new'            => __( 'أضف باقة', 'brandkey' ),
			'add_new_item'       => __( 'أضف باقة جديدة', 'brandkey' ),
			'edit_item'          => __( 'تعديل الباقة', 'brandkey' ),
			'new_item'           => __( 'باقة جديدة', 'brandkey' ),
			'view_item'          => __( 'عرض الباقة', 'brandkey' ),
			'search_items'       => __( 'بحث في الباقات', 'brandkey' ),
			'not_found'          => __( 'لا توجد باقات', 'brandkey' ),
			'not_found_in_trash' => __( 'لا توجد باقات في السلة', 'brandkey' ),
		),
		'public'       => false,
		'show_ui'      => true,
		'has_archive'  => false,
		'menu_icon'    => 'dashicons-tickets-alt',
		'menu_position'=> 10,
		'supports'     => array( 'title', 'editor', 'custom-fields', 'page-attributes' ),
		'show_in_rest' => true,
	) );

	// ===== تصنيف: قطاعات المشاريع =====
	register_taxonomy( 'bk_project_sector', 'bk_project', array(
		'labels' => array(
			'name'          => __( 'قطاعات المشاريع', 'brandkey' ),
			'singular_name' => __( 'قطاع المشروع', 'brandkey' ),
			'add_new_item'  => __( 'أضف قطاع', 'brandkey' ),
			'new_item_name' => __( 'اسم القطاع', 'brandkey' ),
		),
		'public'       => true,
		'hierarchical' => true,
		'show_admin_column' => true,
		'show_in_rest' => true,
	) );

	// ===== تصنيف: نوع الخدمة =====
	register_taxonomy( 'bk_service_type', 'bk_service', array(
		'labels' => array(
			'name'          => __( 'أنواع الخدمات', 'brandkey' ),
			'singular_name' => __( 'نوع الخدمة', 'brandkey' ),
		),
		'public'       => true,
		'hierarchical' => true,
		'show_admin_column' => true,
		'show_in_rest' => true,
	) );
}
add_action( 'init', 'brandkey_register_post_types' );

/**
 * Register meta fields for REST API (Gutenberg support)
 */
function brandkey_register_meta() {
	$meta_fields = array(
		// Project meta
		'_bk_project_client'      => 'string',
		'_bk_project_duration'    => 'string',
		'_bk_project_location'    => 'string',
		'_bk_project_services'    => 'string',
		'_bk_project_tools'       => 'string',
		'_bk_project_results'     => 'string',

		// Service meta
		'_bk_service_icon'        => 'integer',
		'_bk_service_subtitle'    => 'string',
		'_bk_service_steps'       => 'string',

		// Sector meta
		'_bk_sector_stats'        => 'string',
		'_bk_sector_solutions'    => 'string',

		// Testimonial meta
		'_bk_testimonial_name'    => 'string',
		'_bk_testimonial_role'    => 'string',
		'_bk_testimonial_company' => 'string',
		'_bk_testimonial_rating'  => 'integer',

		// FAQ meta
		'_bk_faq_category'        => 'string',

		// Package meta
		'_bk_package_price_monthly'   => 'string',
		'_bk_package_price_yearly'    => 'string',
		'_bk_package_features'        => 'string',
		'_bk_package_popular'         => 'boolean',
	);

	foreach ( $meta_fields as $key => $type ) {
		$post_types = array();
		if ( strpos( $key, 'project' ) !== false ) {
			$post_types[] = 'bk_project';
		}
		if ( strpos( $key, 'service' ) !== false ) {
			$post_types[] = 'bk_service';
		}
		if ( strpos( $key, 'sector' ) !== false ) {
			$post_types[] = 'bk_sector';
		}
		if ( strpos( $key, 'testimonial' ) !== false ) {
			$post_types[] = 'bk_testimonial';
		}
		if ( strpos( $key, 'faq' ) !== false ) {
			$post_types[] = 'bk_faq';
		}
		if ( strpos( $key, 'package' ) !== false ) {
			$post_types[] = 'bk_package';
		}

		register_post_meta( $post_types, $key, array(
			'type'         => $type,
			'single'       => true,
			'show_in_rest' => true,
		) );
	}
}
add_action( 'init', 'brandkey_register_meta' );
