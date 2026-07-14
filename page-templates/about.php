<?php
/**
 * Template Name: من نحن
 * @package BrandKey
 */
get_header();
?>
<main class="page-content" id="pageContent">
  <?php
  $sections = array( 'hero', 'vision', 'mission', 'security', 'team' );
  foreach ( $sections as $sec ) :
    if ( ! bk_section_enabled( 'about', $sec ) ) continue;
    get_template_part( 'template-parts/page', 'about-' . $sec );
  endforeach;
  ?>
</main>
<?php get_footer(); ?>
