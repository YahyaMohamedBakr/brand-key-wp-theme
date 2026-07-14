<?php
/**
 * Template Name: منظومة التكامل
 * @package BrandKey
 */
get_header();
?>
<main class="page-content" id="pageContent">
  <?php
  $sections = array( 'hero', 'compare', 'timeline', 'services', 'deliverables' );
  foreach ( $sections as $sec ) :
    if ( ! bk_section_enabled( 'integration', $sec ) ) continue;
    get_template_part( 'template-parts/page', 'integration-' . $sec );
  endforeach;
  ?>
</main>
<?php get_footer(); ?>
