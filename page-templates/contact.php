<?php
/**
 * Template Name: تواصل معنا
 * @package BrandKey
 */
get_header();
?>
<main class="page-content" id="pageContent">
  <?php
  $sections = array( 'hero', 'form', 'offices' );
  foreach ( $sections as $sec ) :
    if ( ! bk_section_enabled( 'contact', $sec ) ) continue;
    get_template_part( 'template-parts/page', 'contact-' . $sec );
  endforeach;
  ?>
</main>
<?php get_footer(); ?>
