<?php
/**
 * Template part: Blog section (homepage)
 *
 * Displays latest blog posts.
 *
 * @package BrandKey
 */

$blog_query = new WP_Query( array(
	'post_type'      => 'post',
	'posts_per_page' => 3,
	'post_status'    => 'publish',
) );

$default_posts = array(
	array(
		'title'  => __( 'تعلن عن شراكة استراتيجية جديدة لتوسيع خدمات الحلول الرقمية.', 'brandkey' ),
		'excerpt'=> __( 'انطلاقاً من رؤيتنا للتكامل، وقعنا اتفاقية تعاون لتقديم خدمات برمجية متقدمة لعملائنا في المنطقة.', 'brandkey' ),
		'date'   => '20 يوليو 2025',
		'img'    => 'blog-1.png',
	),
	array(
		'title'  => __( 'سيكولوجية الألوان: كيف تمنح علامتك التجارية طابع "الفخامة" و"الراحة"؟', 'brandkey' ),
		'excerpt'=> __( 'نغوص في دلالات الألوان وكيف نستخدم المساحات البيضاء لخلق شعور بالراحة والثقة لدى عملائك، تماماً كما نفعل في هوياتنا.', 'brandkey' ),
		'date'   => '20 يوليو 2025',
		'img'    => 'blog-2.png',
	),
	array(
		'title'  => __( 'كيف تصمم كتابًا تعليميًا تفاعليًا يجذب الطلاب ويحفزهم على التعلم؟', 'brandkey' ),
		'excerpt'=> __( 'تعرف على أهم القواعد لتنسيق الكتب المدرسية وتصميمها بلغات متعددة لضمان سهولة القراءة وتوصيل المعلومة بفعالية.', 'brandkey' ),
		'date'   => '20 يوليو 2025',
		'img'    => 'blog-3.png',
	),
);
?>

<section class="blog" id="blog">
	<div class="blog-container">

		<header class="blog-head" id="blogHead">
			<div class="blog-head-text">
				<h2 class="blog-title"><?php echo esc_html( get_theme_mod( 'brandkey_blog_title', __( 'آخر أخبارنا', 'brandkey' ) ) ); ?></h2>
				<img src="<?php echo esc_url( BRANDKEY_URI . '/assets/icons/heading-line.png' ); ?>" alt="" class="heading-line blog-heading-line" aria-hidden="true" />
				<p class="blog-desc"><?php echo esc_html( get_theme_mod( 'brandkey_blog_desc', __( 'نحن فخورون للغاية بثقة عملائنا المميزين، ونسعى دائمًا لتلبية توقعاتهم.', 'brandkey' ) ) ); ?></p>
			</div>
			<a href="<?php echo esc_url( home_url( '/blog' ) ); ?>" class="blog-more-link">
				<span><?php esc_html_e( 'المزيد', 'brandkey' ); ?></span>
				<img src="<?php echo esc_url( BRANDKEY_URI . '/assets/icons/more-arrow.svg' ); ?>" alt="" />
			</a>
		</header>

		<div class="blog-grid" id="blogGrid">

			<?php
			if ( $blog_query->have_posts() ) :
				$i = 0;
				while ( $blog_query->have_posts() ) : $blog_query->the_post();
					?>
					<article class="blog-card" data-card="<?php echo esc_attr( $i ); ?>">
						<a href="<?php the_permalink(); ?>" class="blog-card-link-wrap">
							<div class="blog-card-visual">
								<?php if ( has_post_thumbnail() ) : ?>
									<img src="<?php the_post_thumbnail_url( 'brandkey-card' ); ?>" alt="<?php the_title_attribute(); ?>" class="blog-card-img" />
								<?php else : ?>
									<img src="<?php echo esc_url( BRANDKEY_URI . '/assets/icons/blog-1.png' ); ?>" alt="<?php the_title_attribute(); ?>" class="blog-card-img" />
								<?php endif; ?>
								<span class="blog-card-badge"><?php esc_html_e( 'الجديد', 'brandkey' ); ?></span>
							</div>
							<div class="blog-card-body">
								<h3 class="blog-card-title"><?php the_title(); ?></h3>
								<p class="blog-card-excerpt"><?php echo esc_html( brandkey_get_excerpt( get_the_ID(), 20 ) ); ?></p>
								<div class="blog-card-footer">
									<span class="blog-card-date"><?php echo esc_html( get_the_date( 'j F Y' ) ); ?></span>
									<span class="blog-card-link">
										<span><?php esc_html_e( 'المزيد', 'brandkey' ); ?></span>
										<img src="<?php echo esc_url( BRANDKEY_URI . '/assets/icons/gold-arrow.svg' ); ?>" alt="" />
									</span>
								</div>
							</div>
						</a>
					</article>
					<?php
					$i++;
				endwhile;
				wp_reset_postdata();
			else :
				foreach ( $default_posts as $idx => $post ) :
					?>
					<article class="blog-card" data-card="<?php echo esc_attr( $idx ); ?>">
						<a href="<?php echo esc_url( home_url( '/blog' ) ); ?>" class="blog-card-link-wrap">
							<div class="blog-card-visual">
								<img src="<?php echo esc_url( BRANDKEY_URI . '/assets/icons/' . $post['img'] ); ?>" alt="<?php echo esc_attr( $post['title'] ); ?>" class="blog-card-img" />
								<span class="blog-card-badge"><?php esc_html_e( 'الجديد', 'brandkey' ); ?></span>
							</div>
							<div class="blog-card-body">
								<h3 class="blog-card-title"><?php echo esc_html( $post['title'] ); ?></h3>
								<p class="blog-card-excerpt"><?php echo esc_html( $post['excerpt'] ); ?></p>
								<div class="blog-card-footer">
									<span class="blog-card-date"><?php echo esc_html( $post['date'] ); ?></span>
									<span class="blog-card-link">
										<span><?php esc_html_e( 'المزيد', 'brandkey' ); ?></span>
										<img src="<?php echo esc_url( BRANDKEY_URI . '/assets/icons/gold-arrow.svg' ); ?>" alt="" />
									</span>
								</div>
							</div>
						</a>
					</article>
					<?php
				endforeach;
			endif;
			?>

		</div>

	</div>
</section>
