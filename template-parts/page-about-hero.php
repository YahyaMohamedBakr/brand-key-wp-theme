<?php
/**
 * سيكشن: hero (about)
 * @package BrandKey
 */
if ( ! bk_section_enabled( 'about', 'hero' ) ) return;

$title = bk_section( 'about', 'hero', 'title' );
$desc = bk_section( 'about', 'hero', 'desc' );
$heading = bk_section( 'about', 'hero', 'heading' ) ?: 'h2';
$bg = bk_section( 'about', 'hero', 'bg' );
$dark = ! empty( $bg );
$line_icon = $dark ? 'line-white.png' : 'heading-line.png';
$style = $bg ? ' style="background: ' . esc_attr( $bg ) . ';"' : '';
$title_color = $dark ? '#fff' : 'var(--navy)';
$desc_color = $dark ? 'rgba(255,255,255,0.8)' : 'var(--muted)';
$btn_text = bk_section( 'about', 'hero', 'btn_text' );
$btn_url = bk_section( 'about', 'hero', 'btn_url' );
?>

<section class="about-hero" id="about-hero"<?php echo $style; ?>>
  <div class="container" style="max-width: 1280px; margin: 0 auto; padding: 90px 24px 80px;">

    <?php if ( 'hero' === 'hero' ) : ?>
      <<?php echo esc_html( $heading ); ?> style="font-size: clamp(30px, 4vw, 52px); font-weight: 900; color: <?php echo esc_attr( $title_color ); ?>; text-align: center; margin-bottom: 20px;"><?php echo esc_html( $title ); ?></<?php echo esc_html( $heading ); ?>>
      <p style="font-size: 18px; color: <?php echo esc_attr( $desc_color ); ?>; text-align: center; max-width: 700px; margin: 0 auto 30px; line-height: 1.8;"><?php echo esc_html( $desc ); ?></p>
      <?php if ( $btn_text ) : ?>
      <div style="text-align: center;">
        <a href="<?php echo esc_url( home_url( $btn_url ?: '/contact' ) ); ?>" style="display: inline-flex; align-items: center; gap: 10px; padding: 16px 32px; background: var(--gold); color: var(--navy); border-radius: var(--radius); font-weight: 700; text-decoration: none;">
          <span><?php echo esc_html( $btn_text ); ?></span>
          <img src="<?php bk_icon( 'start-icon.svg' ); ?>" alt="" />
        </a>
      </div>
      <?php endif; ?>
    <?php else : ?>
      <header style="text-align: center; max-width: 720px; margin: 0 auto 56px;">
        <<?php echo esc_html( $heading ); ?> style="font-size: 30px; font-weight: 900; color: <?php echo esc_attr( $title_color ); ?>; margin-bottom: 14px;"><?php echo esc_html( $title ); ?></<?php echo esc_html( $heading ); ?>>
        <img src="<?php echo esc_url( BK_URI . '/assets/icons/' . $line_icon ); ?>" alt="" style="display: block; margin: 0 auto 18px;" aria-hidden="true" />
        <p style="color: <?php echo esc_attr( $desc_color ); ?>; line-height: 1.85;"><?php echo esc_html( $desc ); ?></p>
      </header>
      <div style="color: <?php echo esc_attr( $desc_color ); ?>;">
        <?php echo wp_kses_post( get_the_content() ); ?>
      </div>
    <?php endif; ?>

  </div>
</section>
