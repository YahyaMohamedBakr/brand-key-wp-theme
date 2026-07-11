<?php
/**
 * The footer for our theme
 *
 * @package BrandKey
 */
?>
	</main><!-- #main -->

	<!-- ===== الفوتر ===== -->
	<footer class="site-footer" id="siteFooter">

		<!-- الفوتر الرئيسي (4 أعمدة) -->
		<div class="footer-main">
			<div class="footer-container">
				<div class="footer-grid">

					<!-- العمود 1 (يمين): عن براند كي -->
					<div class="footer-col footer-col--about" data-col="0">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="footer-logo" aria-label="<?php bloginfo( 'name' ); ?>">
							<img src="<?php echo esc_url( BRANDKEY_URI . '/assets/icons/logo-light.svg' ); ?>" alt="<?php bloginfo( 'name' ); ?>" class="footer-logo-img" />
						</a>
						<p class="footer-desc">
							<?php
							echo esc_html( get_theme_mod( 'brandkey_about_text', 'شركة متخصصة في التسويق الرقمي وخدمات التكنولوجيا، أسست في عام 2011. نسعى دائماً لتقديم حلول مبتكرة تساعد عملائنا على النمو والنجاح.' ) );
							?>
						</p>
						<div class="footer-social">
							<?php
							$socials = array(
								'facebook'  => array( 'label' => 'Facebook', 'url' => get_theme_mod( 'brandkey_facebook', '#' ) ),
								'instagram' => array( 'label' => 'Instagram', 'url' => get_theme_mod( 'brandkey_instagram', '#' ) ),
								'linkedin'  => array( 'label' => 'LinkedIn', 'url' => get_theme_mod( 'brandkey_linkedin', '#' ) ),
								'twitter'   => array( 'label' => 'X (Twitter)', 'url' => get_theme_mod( 'brandkey_twitter', '#' ) ),
							);
							foreach ( $socials as $key => $social ) {
								$icon_file = BRANDKEY_URI . '/assets/icons/social-' . $key . '.svg';
								echo '<a href="' . esc_url( $social['url'] ) . '" class="social-link" aria-label="' . esc_attr( $social['label'] ) . '" target="_blank" rel="noopener">';
								echo '<img src="' . esc_url( $icon_file ) . '" alt="" aria-hidden="true" />';
								echo '</a>';
							}
							?>
						</div>
					</div>

					<!-- العمود 2: روابط سريعة -->
					<div class="footer-col" data-col="1">
						<h4 class="footer-heading"><?php esc_html_e( 'روابط سريعة', 'brandkey' ); ?></h4>
						<?php
						if ( has_nav_menu( 'footer' ) ) {
							wp_nav_menu( array(
								'theme_location' => 'footer',
								'container'      => false,
								'menu_class'     => 'footer-links',
								'depth'          => 1,
							) );
						} else {
							brandkey_default_footer_menu();
						}
						?>
					</div>

					<!-- العمود 3: خدماتنا -->
					<div class="footer-col" data-col="2">
						<h4 class="footer-heading"><?php esc_html_e( 'خدماتنا', 'brandkey' ); ?></h4>
						<ul class="footer-links">
							<?php
							$services = new WP_Query( array(
								'post_type'      => 'bk_service',
								'posts_per_page' => 6,
							) );
							if ( $services->have_posts() ) {
								while ( $services->have_posts() ) {
									$services->the_post();
									echo '<li><a href="' . esc_url( get_permalink() ) . '">' . esc_html( get_the_title() ) . '</a></li>';
								}
								wp_reset_postdata();
							} else {
								brandkey_default_services_menu();
							}
							?>
						</ul>
					</div>

					<!-- العمود 4 (يسار): تواصل معنا -->
					<div class="footer-col" data-col="3">
						<h4 class="footer-heading"><?php esc_html_e( 'تواصل معنا', 'brandkey' ); ?></h4>
						<ul class="footer-contact">
							<li>
								<a href="mailto:<?php echo esc_attr( get_theme_mod( 'brandkey_email', 'info@brandkey.com' ) ); ?>" class="contact-item">
									<span class="contact-ic">
										<img src="<?php echo esc_url( BRANDKEY_URI . '/assets/icons/contact-mail.svg' ); ?>" alt="" width="16" height="16" aria-hidden="true" />
									</span>
									<span><?php echo esc_html( get_theme_mod( 'brandkey_email', 'info@brandkey.com' ) ); ?></span>
								</a>
							</li>
							<li>
								<a href="tel:<?php echo esc_attr( get_theme_mod( 'brandkey_phone', '+201001234567' ) ); ?>" class="contact-item">
									<span class="contact-ic">
										<img src="<?php echo esc_url( BRANDKEY_URI . '/assets/icons/contact-phone.svg' ); ?>" alt="" width="16" height="16" aria-hidden="true" />
									</span>
									<span><?php echo esc_html( get_theme_mod( 'brandkey_phone_display', '+20 100 123 4567' ) ); ?></span>
								</a>
							</li>
							<li>
								<a href="<?php echo esc_url( get_theme_mod( 'brandkey_map_url', 'https://maps.google.com' ) ); ?>" target="_blank" rel="noopener" class="contact-item">
									<span class="contact-ic">
										<img src="<?php echo esc_url( BRANDKEY_URI . '/assets/icons/contact-location.svg' ); ?>" alt="" width="16" height="16" aria-hidden="true" />
									</span>
									<span><?php echo esc_html( get_theme_mod( 'brandkey_address', 'القاهرة | مصر، شارع التحرير' ) ); ?></span>
								</a>
							</li>
						</ul>
					</div>

				</div>
			</div>
		</div>

		<!-- قسم الاشتراك في النشرة -->
		<div class="footer-newsletter">
			<div class="footer-container">
				<div class="newsletter-text">
					<h3 class="newsletter-title"><?php esc_html_e( 'اشترك في نشرتنا', 'brandkey' ); ?></h3>
					<p class="newsletter-sub"><?php esc_html_e( 'احصل على آخر الأخبار والعروض التسويقية مباشرة في صندوق بريدك الإلكتروني', 'brandkey' ); ?></p>
				</div>
				<form class="newsletter-form" id="newsletterForm">
					<div class="input-wrap">
						<img src="<?php echo esc_url( BRANDKEY_URI . '/assets/icons/newsletter-mail.svg' ); ?>" alt="" class="input-icon" width="18" height="18" aria-hidden="true" />
						<input type="email" placeholder="<?php esc_attr_e( 'البريد الإلكتروني', 'brandkey' ); ?>" required aria-label="<?php esc_attr_e( 'البريد الإلكتروني', 'brandkey' ); ?>" id="newsletterEmail" />
					</div>
					<button type="submit" class="newsletter-btn">
						<span><?php esc_html_e( 'اشتراك', 'brandkey' ); ?></span>
						<img src="<?php echo esc_url( BRANDKEY_URI . '/assets/icons/newsletter-send.svg' ); ?>" alt="" width="16" height="16" aria-hidden="true" />
					</button>
					<p class="newsletter-msg" id="newsletterMsg" role="status" aria-live="polite"></p>
				</form>
			</div>
		</div>

		<!-- الشريط السفلي -->
		<div class="footer-bottom">
			<div class="footer-container">
				<div class="footer-bottom-inner">
					<div class="legal-links">
						<a href="#"><?php esc_html_e( 'الشروط والأحكام', 'brandkey' ); ?></a>
						<span class="legal-sep">|</span>
						<a href="#"><?php esc_html_e( 'سياسة الخصوصية', 'brandkey' ); ?></a>
					</div>
					<div class="copyright">
						<?php
						printf(
							/* translators: 1: year, 2: site name */
							esc_html__( '© %1$s %2$s. جميع الحقوق محفوظة.', 'brandkey' ),
							date( 'Y' ),
							get_bloginfo( 'name' )
						);
						?>
					</div>
				</div>
			</div>
		</div>

	</footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
