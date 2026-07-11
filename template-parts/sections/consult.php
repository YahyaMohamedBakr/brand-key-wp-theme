<?php
/**
 * Template part: Consult section (homepage)
 *
 * Two consultation cards: Marketing + Technical.
 *
 * @package BrandKey
 */
?>

<section class="consult" id="consult">
	<!-- مفتاح زخرفي في خلفية السيكشن -->
	<img src="<?php echo esc_url( BRANDKEY_URI . '/assets/icons/hero-key-bg.svg' ); ?>" alt="" class="consult-key-bg" aria-hidden="true" />

	<div class="consult-container">

		<!-- كارت 1: استشارات التسويق -->
		<article class="consult-card" data-card="0">
			<div class="consult-card-body">
				<h3 class="consult-card-title"><?php echo esc_html( get_theme_mod( 'brandkey_consult_marketing_title', __( 'استشارات التسويق', 'brandkey' ) ) ); ?></h3>
				<img src="<?php echo esc_url( BRANDKEY_URI . '/assets/icons/heading-line.png' ); ?>" alt="" class="heading-line consult-heading-line" aria-hidden="true" />
				<p class="consult-card-desc">
					<?php echo esc_html( get_theme_mod( 'brandkey_consult_marketing_desc', __( 'نقدم استشارات تسويقية متخصصة تساعدك على بناء استراتيجيات ناجحة، وتحديد الجمهور المستهدف، وتعزيز حضورك الرقمي في السوق.', 'brandkey' ) ) ); ?>
				</p>
				<a href="<?php echo esc_url( home_url( '/consulting' ) ); ?>" class="consult-btn consult-btn--outline">
					<span><?php esc_html_e( 'اعرف المزيد', 'brandkey' ); ?></span>
					<img src="<?php echo esc_url( BRANDKEY_URI . '/assets/icons/more-arrow.svg' ); ?>" alt="" />
				</a>
			</div>
		</article>

		<!-- كارت 2: الاستشارات الفنية -->
		<article class="consult-card consult-card--accent" data-card="1">
			<div class="consult-card-body">
				<h3 class="consult-card-title"><?php echo esc_html( get_theme_mod( 'brandkey_consult_technical_title', __( 'الاستشارات الفنية', 'brandkey' ) ) ); ?></h3>
				<img src="<?php echo esc_url( BRANDKEY_URI . '/assets/icons/heading-line.png' ); ?>" alt="" class="heading-line consult-heading-line" aria-hidden="true" />
				<p class="consult-card-desc">
					<?php echo esc_html( get_theme_mod( 'brandkey_consult_technical_desc', __( 'استشارات فنية متخصصة لدعم أهدافك التسويقية، حيث نقدم الدعم التقني اللازم لتنفيذ استراتيجياتك بكفاءة وتحقيق أقصى استفادة من مواردك.', 'brandkey' ) ) ); ?>
				</p>
				<a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="consult-btn consult-btn--primary">
					<span><?php esc_html_e( 'احجز', 'brandkey' ); ?></span>
					<img src="<?php echo esc_url( BRANDKEY_URI . '/assets/icons/start-icon.svg' ); ?>" alt="" />
				</a>
			</div>
		</article>

	</div>
</section>
