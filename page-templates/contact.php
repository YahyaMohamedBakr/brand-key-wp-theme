<?php
/**
 * Template Name: contact
 * @package BrandKey
 */
get_header();
?>
<main class="page-content" id="pageContent">

  <!-- inner hero -->
  <div id="inner-hero-include"
       data-title="نحن هنا للإجابة على أسئلتك"
       data-desc="تواصل مع فريقنا للحصول على استشارة مجانية، أو لمناقشة مشروعك القادم. سعود إليك خلال 24 ساعة."
       data-primary-text="أرسل رسالتك"
       data-primary-icon="<?php bk_icon('start-icon.svg'); ?>"
       data-primary-href="<?php echo esc_url(home_url('/contact')); ?>"
       data-ghost-text="طرق التواصل"
       data-ghost-icon="<?php bk_icon('humbleicons-arrow-up.svg'); ?>"
       data-ghost-href="#">
  </div>

  <!-- محتوى الصفحة -->
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); the_content(); endwhile; endif; ?>

  <!-- السيكشنات المكررة -->
  <?php get_template_part( 'template-parts/shared', 'cta-final' ); ?>
  <?php get_template_part( 'template-parts/shared', 'faq' ); ?>
  <?php get_template_part( 'template-parts/shared', 'blog' ); ?>

</main>
<?php get_footer(); ?>
