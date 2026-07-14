<?php
/**
 * Main template — fallback
 *
 * @package BrandKey
 */

get_header();
?>

<main class="page-content" id="pageContent">
  <div style="padding: 120px 24px 80px; text-align: center;">
    <h1 style="font-size: 30px; color: #0E233F; margin-bottom: 20px;"><?php bloginfo( 'name' ); ?></h1>
    <p style="font-size: 18px; color: #64748B; max-width: 600px; margin: 0 auto 40px;"><?php bloginfo( 'description' ); ?></p>
    <div style="max-width: 800px; margin: 0 auto;">
      <?php
      if ( have_posts() ) :
        while ( have_posts() ) : the_post();
          the_title( '<h2 style="font-size: 24px; color: #0E233F; margin: 30px 0 15px;"><a href="' . esc_url( get_permalink() ) . '" style="text-decoration: none; color: inherit;">', '</a></h2>' );
          echo '<div style="color: #475569; line-height: 1.8;">' . wp_trim_words( get_the_content(), 40 ) . '</div>';
        endwhile;
      else :
        echo '<p>' . esc_html__( 'لا يوجد محتوى بعد.', 'brandkey' ) . '</p>';
      endif;
      ?>
    </div>
  </div>
</main>

<?php get_footer(); ?>
