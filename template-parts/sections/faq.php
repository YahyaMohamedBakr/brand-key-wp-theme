<?php
/**
 * Template part: FAQ section (homepage)
 *
 * Displays FAQs from bk_faq CPT.
 *
 * @package BrandKey
 */

$faq_query = new WP_Query( array(
	'post_type'      => 'bk_faq',
	'posts_per_page' => 6,
	'orderby'        => 'menu_order',
	'order'          => 'ASC',
) );

$default_faqs = array(
	array(
		'q' => __( 'كيف تقيسون نجاح الحملات التسويقية؟', 'brandkey' ),
		'a' => __( 'نقيس النجاح عبر مؤشرات أداء واضحة (KPIs) تشمل: معدل العائد على الاستثمار (ROI)، تكلفة اكتساب العميل (CAC)، معدل التحويل، والنمو في الزيارات والمبيعات. نقدم تقارير شفافة دورية بتظهرلك بالأرقام الحقيقية وين بتحقق ميزانيتك نتائج.', 'brandkey' ),
	),
	array(
		'q' => __( 'ما هي تكلفة خدماتكم وكيف يتم التسعير؟', 'brandkey' ),
		'a' => __( 'التكلفة تعتمد على نطاق المشروع وأهدافك. نقدم 3 باقات مرنة (أساسية، احترافية، مخصصة) وكل باقة قابلة للتخصيص. نقدم استشارة مجانية لتقييم احتياجاتك وتقديم عرض سعر واضح بدون رسوم خفية.', 'brandkey' ),
	),
	array(
		'q' => __( 'كم تستغرق مدة تنفيذ المشروع؟', 'brandkey' ),
		'a' => __( 'تختلف المدة حسب نوع المشروع: الهوية البصرية (2-3 أسابيع)، الموقع التعريفي (4-6 أسابيع)، المتجر الإلكتروني (6-10 أسابيع). بنحدد جدول زمني واضح مع كل عميل ونتابع التقدم أسبوعياً.', 'brandkey' ),
	),
	array(
		'q' => __( 'هل تقدمون خدمات ما بعد الإطلاق؟', 'brandkey' ),
		'a' => __( 'نعم، نقدم خدمات الدعم الفني والصيانة المستمرة بعد إطلاق المشروع. يشمل ذلك تحديثات الأمان، تحسين الأداء، تعديلات المحتوى، والمتابعة الشهرية لضمان استمرار عملك بكفاءة.', 'brandkey' ),
	),
	array(
		'q' => __( 'هل تعملون مع شركات في مصر والسعودية؟', 'brandkey' ),
		'a' => __( 'نعم، نعمل مع عملاء في مصر والسعودية ودول الخليج. لدينا فريق يفهم خصوصية كل سوق، ونقدم خدماتنا باللغة العربية مع دعم كامل للهوية البصرية العربية والثقافة المحلية.', 'brandkey' ),
	),
	array(
		'q' => __( 'ما الذي يميز Brandkey عن وكالات التسويق الأخرى؟', 'brandkey' ),
		'a' => __( 'نحن مش وكالة عادية — نحن شركاء استراتيجيون. بندرس كل مشروع بعمول، نقدم استراتيجية مخصصة مش قوالب جاهزة، ونشتغل بشفافية كاملة في الأرقام والتقارير. هدفنا نجاحك مش مجرد إنهاء مشروع.', 'brandkey' ),
	),
);
?>

<section class="faq" id="faq">
	<div class="faq-container">

		<header class="faq-head" id="faqHead">
			<h2 class="faq-title"><?php echo esc_html( get_theme_mod( 'brandkey_faq_title', __( 'الأسئلة الشائعة', 'brandkey' ) ) ); ?></h2>
			<img src="<?php echo esc_url( BRANDKEY_URI . '/assets/icons/heading-line.png' ); ?>" alt="" class="heading-line faq-heading-line" aria-hidden="true" />
			<p class="faq-desc">
				<?php echo esc_html( get_theme_mod( 'brandkey_faq_desc', __( 'استكشف أكثر الأسئلة شيوعاً حول خدماتنا وكيف يمكننا مساعده عملك على النمو', 'brandkey' ) ) ); ?>
			</p>
		</header>

		<div class="faq-grid" id="faqGrid">

			<?php
			$i = 0;
			if ( $faq_query->have_posts() ) :
				while ( $faq_query->have_posts() ) : $faq_query->the_post();
					?>
					<div class="faq-item" data-faq="<?php echo esc_attr( $i ); ?>">
						<button class="faq-question" aria-expanded="false">
							<span><?php the_title(); ?></span>
							<img src="<?php echo esc_url( BRANDKEY_URI . '/assets/icons/faq-chevron.svg' ); ?>" alt="" class="faq-chevron" />
						</button>
						<div class="faq-answer">
							<p><?php echo esc_html( get_the_content() ); ?></p>
						</div>
					</div>
					<?php
					$i++;
				endwhile;
				wp_reset_postdata();
			else :
				foreach ( $default_faqs as $idx => $faq ) :
					?>
					<div class="faq-item" data-faq="<?php echo esc_attr( $idx ); ?>">
						<button class="faq-question" aria-expanded="false">
							<span><?php echo esc_html( $faq['q'] ); ?></span>
							<img src="<?php echo esc_url( BRANDKEY_URI . '/assets/icons/faq-chevron.svg' ); ?>" alt="" class="faq-chevron" />
						</button>
						<div class="faq-answer">
							<p><?php echo esc_html( $faq['a'] ); ?></p>
						</div>
					</div>
					<?php
				endforeach;
			endif;
			?>

		</div>

	</div>
</section>
