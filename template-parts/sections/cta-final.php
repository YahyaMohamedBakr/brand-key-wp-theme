<?php
/**
 * Template part: Final CTA section (homepage)
 *
 * @package BrandKey
 */

$data = isset( $bk_cta_final_data ) ? $bk_cta_final_data : array(
	'title'   => get_theme_mod( 'brandkey_cta_final_title', __( 'مستعد تبدأ رحلتك الرقمية!', 'brandkey' ) ),
	'desc'    => get_theme_mod( 'brandkey_cta_final_desc', __( 'استشارة مجانية 30 دقيقة مع خبراء براند كي — بنحلل وضعك ونقولك بالظبط إيه اللي محتاجه', 'brandkey' ) ),
	'btn_text'=> __( 'تواصل معنا الآن!', 'brandkey' ),
	'btn_url' => home_url( '/contact' ),
);
?>

<section class="cta-final" id="ctaFinal">
	<img src="<?php echo esc_url( BRANDKEY_URI . '/assets/icons/cta-vector-right.svg' ); ?>" alt="" class="cta-final-deco cta-final-deco--right" aria-hidden="true" />
	<img src="<?php echo esc_url( BRANDKEY_URI . '/assets/icons/cta-vector-left.svg' ); ?>" alt="" class="cta-final-deco cta-final-deco--left" aria-hidden="true" />

	<div class="cta-final-container">

		<div class="cta-final-text" id="ctaFinalText">
			<h2 class="cta-final-title"><?php echo esc_html( $data['title'] ); ?></h2>
			<img src="<?php echo esc_url( BRANDKEY_URI . '/assets/icons/heading-line.png' ); ?>" alt="" class="heading-line cta-final-heading-line" aria-hidden="true" />
			<p class="cta-final-desc"><?php echo esc_html( $data['desc'] ); ?></p>
		</div>

		<div class="cta-final-action" id="ctaFinalAction">
			<a href="<?php echo esc_url( $data['btn_url'] ); ?>" class="cta-final-btn">
				<span><?php echo esc_html( $data['btn_text'] ); ?></span>
				<img src="<?php echo esc_url( BRANDKEY_URI . '/assets/icons/cta-arrow.svg' ); ?>" alt="" />
			</a>
		</div>

	</div>
</section>
