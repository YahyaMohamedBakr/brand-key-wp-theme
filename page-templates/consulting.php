<?php
/**
 * Template Name: استشارات التسويق
 * @package BrandKey
 */
get_header();

// بيانات الهيرو لكل صفحة
$hero_data = array(
  'title'        => 'استشارات تصنع الفارق',
  'desc'         => 'خبراؤنا يقدمون لك استشارات استراتيجية مخصصة تساعدك على اتخاذ القرارات الصحيحة وتحقيق نمو قابل للقياس.',
  'primary_text' => 'احجز استشارتك',
  'primary_href' => home_url( '/contact' ),
  'ghost_text'   => 'تعرف على أنواع الاستشارات',
  'ghost_href'   => '#',
);

set_query_var( 'bk_inner_hero', $hero_data );
?>

<main class="page-content" id="pageContent">
  <?php get_template_part( 'template-parts/inner-hero' ); ?>

  <!-- محتوى الصفحة -->
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); the_content(); endwhile; endif; ?>

  <!-- السيكشنات المكررة -->
  <?php get_template_part( 'template-parts/shared', 'testimonials' ); ?>
  <?php get_template_part( 'template-parts/shared', 'cta-final' ); ?>
  <?php get_template_part( 'template-parts/shared', 'faq' ); ?>
  <?php get_template_part( 'template-parts/shared', 'blog' ); ?>

</main>
<?php get_footer(); ?>
