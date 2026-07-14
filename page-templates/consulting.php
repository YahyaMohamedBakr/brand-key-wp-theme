<?php
/**
 * Template Name: استشارات التسويق
 * @package BrandKey
 */
get_header();
?>
<main class="page-content" id="pageContent">
  <?php
  $sections = array( 'hero', 'painpoints', 'types', 'method', 'deliverables' );
  foreach ( $sections as $sec ) :
    if ( ! bk_section_enabled( 'consulting', $sec ) ) continue;
    get_template_part( 'template-parts/page', 'consulting-' . $sec );
  endforeach;
  ?>
</main>
<?php get_footer(); ?>
