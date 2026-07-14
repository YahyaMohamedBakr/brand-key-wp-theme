<?php
/**
 * الصفحة الرئيسية
 *
 * @package BrandKey
 */

get_header();
?>

<main class="page-content" id="pageContent">

	<?php
	// كل سيكشن يتعرض لو كان مفعّل من الـ Customizer
	$sections = array( 'hero', 'services', 'consult', 'sectors', 'cta2', 'portfolio', 'pricing', 'how', 'clients', 'testimonials', 'cta_final', 'faq', 'blog' );
	foreach ( $sections as $sec ) :
		if ( ! bk_section_enabled( 'front_page', $sec ) ) continue;
		get_template_part( 'template-parts/front', $sec );
	endforeach;
	?>

</main>

<?php get_footer(); ?>
