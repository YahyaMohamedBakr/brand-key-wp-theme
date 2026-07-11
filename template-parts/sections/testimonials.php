<?php
/**
 * Template part: Testimonials section (homepage)
 *
 * Displays testimonials from bk_testimonial CPT.
 *
 * @package BrandKey
 */

$testimonials_query = new WP_Query( array(
	'post_type'      => 'bk_testimonial',
	'posts_per_page' => 6,
	'orderby'        => 'menu_order',
	'order'          => 'ASC',
) );

$default_testimonials = array(
	array(
		'text'  => __( 'كنت خايفة أبدأ في التسويق الرقمي وأخسر فلوس من غير نتيجة — براند كي وضحولي كل خطوة وقدموا تقارير شفافة كل أسبوع. ده مش شغل وكالة عادية', 'brandkey' ),
		'name'  => __( 'خالد حسن', 'brandkey' ),
		'role'  => __( 'مدير علامة تجارية مستقل', 'brandkey' ),
		'avatar'=> 'خ',
	),
	array(
		'text'  => __( 'فريق محترف بيفهم الموضوع صح. حملاتنا الإعلانية حققت ROI 320% في أول 3 شهور بس. البيانات والتحليلات بتاعتهم شغل تاني تماماً', 'brandkey' ),
		'name'  => __( 'سارة عبدالله', 'brandkey' ),
		'role'  => __( 'صاحبة متجر إلكتروني', 'brandkey' ),
		'avatar'=> 'س',
	),
	array(
		'text'  => __( 'اللي عجبني إنهم مش بيتكلموا كلام بس — كل حركة بتعملها ليها سبب وبيانات. التصميم اللي عملوه للهوية خلى عملاءنا يثقوا فينا أكتر', 'brandkey' ),
		'name'  => __( 'محمد الشمري', 'brandkey' ),
		'role'  => __( 'مؤسس شركة عقارية', 'brandkey' ),
		'avatar'=> 'م',
	),
);
?>

<section class="testimonials" id="testimonials">
	<div class="testimonials-container">

		<header class="testimonials-head" id="testimonialsHead">
			<h2 class="testimonials-title"><?php echo esc_html( get_theme_mod( 'brandkey_testimonials_title', __( 'ماذا يقول عملاؤنا', 'brandkey' ) ) ); ?></h2>
			<img src="<?php echo esc_url( BRANDKEY_URI . '/assets/icons/heading-line.png' ); ?>" alt="" class="heading-line testimonials-heading-line" aria-hidden="true" />
			<p class="testimonials-desc">
				<?php echo esc_html( get_theme_mod( 'brandkey_testimonials_desc', __( 'إن نجاحهم يعد المعيار الحقيقي لجودة خدماتنا ومنتجاتنا', 'brandkey' ) ) ); ?>
			</p>
		</header>

		<div class="testimonials-grid" id="testimonialsGrid">

			<?php
			if ( $testimonials_query->have_posts() ) :
				$i = 0;
				while ( $testimonials_query->have_posts() ) : $testimonials_query->the_post();
					$name  = get_post_meta( get_the_ID(), '_bk_testimonial_name', true );
					$role  = get_post_meta( get_the_ID(), '_bk_testimonial_role', true );
					$rating= get_post_meta( get_the_ID(), '_bk_testimonial_rating', true );
					$rating= $rating ? intval( $rating ) : 5;
					?>
					<article class="testimonial-card" data-card="<?php echo esc_attr( $i ); ?>">
						<img src="<?php echo esc_url( BRANDKEY_URI . '/assets/icons/quote-keys.svg' ); ?>" alt="" class="testimonial-quote" aria-hidden="true" />
						<p class="testimonial-text"><?php echo esc_html( get_the_content() ); ?></p>
						<div class="testimonial-stars" aria-label="<?php echo esc_attr( sprintf( '%d من 5', $rating ) ); ?>">
							<?php for ( $s = 0; $s < 5; $s++ ) : ?>
								<span<?php echo $s < $rating ? '' : ' style="opacity:0.3"'; ?>>★</span>
							<?php endfor; ?>
						</div>
						<div class="testimonial-author">
							<div class="testimonial-avatar"><?php echo esc_html( mb_substr( $name ? $name : get_the_title(), 0, 1 ) ); ?></div>
							<div class="testimonial-author-info">
								<h4 class="testimonial-name"><?php echo esc_html( $name ? $name : get_the_title() ); ?></h4>
								<p class="testimonial-role"><?php echo esc_html( $role ); ?></p>
							</div>
						</div>
					</article>
					<?php
					$i++;
				endwhile;
				wp_reset_postdata();
			else :
				foreach ( $default_testimonials as $i => $t ) :
					?>
					<article class="testimonial-card" data-card="<?php echo esc_attr( $i ); ?>">
						<img src="<?php echo esc_url( BRANDKEY_URI . '/assets/icons/quote-keys.svg' ); ?>" alt="" class="testimonial-quote" aria-hidden="true" />
						<p class="testimonial-text"><?php echo esc_html( $t['text'] ); ?></p>
						<div class="testimonial-stars" aria-label="5 من 5">
							<span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
						</div>
						<div class="testimonial-author">
							<div class="testimonial-avatar"><?php echo esc_html( $t['avatar'] ); ?></div>
							<div class="testimonial-author-info">
								<h4 class="testimonial-name"><?php echo esc_html( $t['name'] ); ?></h4>
								<p class="testimonial-role"><?php echo esc_html( $t['role'] ); ?></p>
							</div>
						</div>
					</article>
					<?php
				endforeach;
			endif;
			?>

		</div>

	</div>
</section>
