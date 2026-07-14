<?php
/**
 * Template Name: تواصل معنا
 * @package BrandKey
 */
get_header();

// بيانات الهيرو لكل صفحة
$hero_data = array(
  'title'        => 'نحن هنا للإجابة على أسئلتك',
  'desc'         => 'تواصل مع فريقنا للحصول على استشارة مجانية، أو لمناقشة مشروعك القادم. سنعود إليك خلال 24 ساعة.',
  'primary_text' => 'أرسل رسالتك',
  'primary_href' => '#contact-form',
  'ghost_text'   => 'طرق التواصل',
  'ghost_href'   => '#',
);

set_query_var( 'bk_inner_hero', $hero_data );
?>

<main class="page-content" id="pageContent">
  <?php get_template_part( 'template-parts/inner-hero' ); ?>

  <!-- محتوى الصفحة -->
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); the_content(); endwhile; endif; ?>

  <!-- السيكشنات المكررة -->
  <?php get_template_part( 'template-parts/shared', 'cta-final' ); ?>
  <?php get_template_part( 'template-parts/shared', 'faq' ); ?>
  <?php get_template_part( 'template-parts/shared', 'blog' ); ?>

</main>
<?php get_footer(); ?>
