<?php
/**
 * Template part: Clients section (homepage)
 *
 * Client logos marquee.
 *
 * @package BrandKey
 */

$clients = range( 1, 8 );
?>

<section class="clients" id="clients">
	<div class="clients-container">

		<header class="clients-head" id="clientsHead">
			<h2 class="clients-title"><?php echo esc_html( get_theme_mod( 'brandkey_clients_title', __( 'عملاء وثقوا فينا', 'brandkey' ) ) ); ?></h2>
			<img src="<?php echo esc_url( BRANDKEY_URI . '/assets/icons/heading-line.png' ); ?>" alt="" class="heading-line clients-heading-line" aria-hidden="true" />
			<p class="clients-desc">
				<?php echo esc_html( get_theme_mod( 'brandkey_clients_desc', __( 'من الشركات الناشئة للمؤسسات الكبرى — كل عميل كان تحدياً جديداً وقصة نجاح نفخر بها', 'brandkey' ) ) ); ?>
			</p>
		</header>

		<div class="clients-marquee" id="clientsMarquee">
			<!-- الصف الأول: رايح من اليمين للشمال -->
			<div class="clients-row clients-row--rtl">
				<div class="clients-track">
					<?php foreach ( $clients as $c ) : ?>
						<div class="client-logo"><img src="<?php echo esc_url( BRANDKEY_URI . '/assets/icons/client-' . $c . '.png' ); ?>" alt="<?php esc_attr_e( 'عميل', 'brandkey' ); ?>" /></div>
					<?php endforeach; ?>
					<?php foreach ( $clients as $c ) : ?>
						<div class="client-logo"><img src="<?php echo esc_url( BRANDKEY_URI . '/assets/icons/client-' . $c . '.png' ); ?>" alt="<?php esc_attr_e( 'عميل', 'brandkey' ); ?>" /></div>
					<?php endforeach; ?>
				</div>
			</div>

			<!-- الصف الثاني: جاي من الشمال لليمين -->
			<div class="clients-row clients-row--ltr">
				<div class="clients-track">
					<?php for ( $c = 8; $c >= 1; $c-- ) : ?>
						<div class="client-logo"><img src="<?php echo esc_url( BRANDKEY_URI . '/assets/icons/client-' . $c . '.png' ); ?>" alt="<?php esc_attr_e( 'عميل', 'brandkey' ); ?>" /></div>
					<?php endfor; ?>
					<?php for ( $c = 8; $c >= 1; $c-- ) : ?>
						<div class="client-logo"><img src="<?php echo esc_url( BRANDKEY_URI . '/assets/icons/client-' . $c . '.png' ); ?>" alt="<?php esc_attr_e( 'عميل', 'brandkey' ); ?>" /></div>
					<?php endfor; ?>
				</div>
			</div>
		</div>

	</div>
</section>
