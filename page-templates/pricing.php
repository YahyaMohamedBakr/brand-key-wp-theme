<?php
/**
 * Template Name: الباقات والأسعار
 * @package BrandKey
 */
get_header();
?>
<main class="page-content" id="pageContent">
  <?php
  $sections = array( 'hero', 'packages' );
  foreach ( $sections as $sec ) :
    if ( ! bk_section_enabled( 'pricing', $sec ) ) continue;
    get_template_part( 'template-parts/page', 'pricing-' . $sec );
  endforeach;
  ?>
</main>
<?php get_footer(); ?>
