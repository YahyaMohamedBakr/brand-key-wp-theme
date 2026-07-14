<?php
/**
 * Template Name: تدريب الشركات
 * @package BrandKey
 */
get_header();
?>
<main class="page-content" id="pageContent">
  <?php
  $sections = array( 'hero', 'problems', 'audience', 'programs', 'method', 'benefits' );
  foreach ( $sections as $sec ) :
    if ( ! bk_section_enabled( 'training', $sec ) ) continue;
    get_template_part( 'template-parts/page', 'training-' . $sec );
  endforeach;
  ?>
</main>
<?php get_footer(); ?>
