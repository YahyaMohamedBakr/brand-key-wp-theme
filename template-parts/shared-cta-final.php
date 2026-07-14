<?php
/**
 * سيكشن: cta-final (مستعد تبدأ رحلتك الرقمية)
 * يقرأ من ACF لو موجود
 * @package BrandKey
 */

$cta_title    = bk_meta( 'fp_cta_title', get_option( 'page_on_front' ), 'مستعد تبدأ رحلتك الرقمية!' );
$cta_desc     = bk_meta( 'fp_cta_desc', get_option( 'page_on_front' ) );
$cta_desc     = $cta_desc ?: 'استشارة مجانية 30 دقيقة مع خبراء براند كي — بنحلل وضعك ونقولك بالظبط إيه اللي محتاجه';
$cta_btn_text = bk_meta( 'fp_cta_btn_text', get_option( 'page_on_front' ), 'تواصل معنا الآن!' );
$cta_btn_url  = bk_meta( 'fp_cta_btn_url', get_option( 'page_on_front' ), '/contact' );
$cta_btn_url  = $cta_btn_url ? home_url( $cta_btn_url ) : home_url( '/contact' );
?>

<section class="cta-final" id="ctaFinal">
  <img src="<?php bk_icon('cta-vector-right.svg'); ?>" alt="" class="cta-final-deco cta-final-deco--right" aria-hidden="true" />
  <img src="<?php bk_icon('cta-vector-left.svg'); ?>" alt="" class="cta-final-deco cta-final-deco--left" aria-hidden="true" />
  <div class="cta-final-container">
    <div class="cta-final-text" id="ctaFinalText">
      <h2 class="cta-final-title"><?php echo esc_html( $cta_title ); ?></h2>
      <img src="<?php bk_icon('heading-line.png'); ?>" alt="" class="heading-line cta-final-heading-line" aria-hidden="true" />
      <p class="cta-final-desc"><?php echo esc_html( $cta_desc ); ?></p>
    </div>
    <div class="cta-final-action" id="ctaFinalAction">
      <a href="<?php echo esc_url( $cta_btn_url ); ?>" class="cta-final-btn"><span><?php echo esc_html( $cta_btn_text ); ?></span><img src="<?php bk_icon('cta-arrow.svg'); ?>" alt="" /></a>
    </div>
  </div>
</section>
