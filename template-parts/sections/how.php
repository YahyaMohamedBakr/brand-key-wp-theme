<?php
/**
 * Template part: How we work section (homepage)
 *
 * 4-step process with decorative frame.
 *
 * @package BrandKey
 */

$default_steps = array(
	array( 'num' => '01', 'title' => __( 'تحليل وتخطيط', 'brandkey' ), 'desc' => __( 'بندرس عملك، سوقك، ومنافسيك — ونبني استراتيجية واضحة بأهداف قابلة للقياس', 'brandkey' ) ),
	array( 'num' => '02', 'title' => __( 'تصميم وتطوير', 'brandkey' ), 'desc' => __( 'نصمم الهوية البصرية ونطوّر الموقع/المتجر/التطبيق بأعلى معايير الجودة', 'brandkey' ) ),
	array( 'num' => '03', 'title' => __( 'إطلاق وتسويق', 'brandkey' ), 'desc' => __( 'نطلق المشروع ونبدأ الحملات التسويقية المدروسة لجذب الجمهور المستهدف', 'brandkey' ) ),
	array( 'num' => '04', 'title' => __( 'متابعة وتحسين', 'brandkey' ), 'desc' => __( 'نقيس الأداء بالأرقام ونحسّن استمرارياً لضمان أعلى عائد على الاستثمار', 'brandkey' ) ),
);
?>

<section class="how" id="how">
	<div class="how-container">

		<header class="how-head" id="howHead">
			<h2 class="how-title"><?php echo esc_html( get_theme_mod( 'brandkey_how_title', __( 'طريقتنا في الشغل', 'brandkey' ) ) ); ?></h2>
			<img src="<?php echo esc_url( BRANDKEY_URI . '/assets/icons/heading-line.png' ); ?>" alt="" class="heading-line how-heading-line" aria-hidden="true" />
			<p class="how-desc">
				<?php echo esc_html( get_theme_mod( 'brandkey_how_desc', __( '4 خطوات واضحة من أول يوم لأول نتيجة — عارف دايماً إيه اللي بيحصل', 'brandkey' ) ) ); ?>
			</p>
		</header>

		<div class="how-grid">

			<!-- الإطار الزخرفي -->
			<div class="how-visual">
				<img src="<?php echo esc_url( BRANDKEY_URI . '/assets/icons/how-frame.svg' ); ?>" alt="Brand Key" class="how-frame" />
			</div>

			<!-- الخطوات -->
			<div class="how-steps" id="howSteps">
				<?php foreach ( $default_steps as $i => $step ) : ?>
					<article class="how-step" data-step="<?php echo esc_attr( $i ); ?>">
						<div class="how-step-num"><?php echo esc_html( $step['num'] ); ?></div>
						<div class="how-step-body">
							<h3 class="how-step-title"><?php echo esc_html( $step['title'] ); ?></h3>
							<p class="how-step-desc"><?php echo esc_html( $step['desc'] ); ?></p>
						</div>
					</article>
				<?php endforeach; ?>
			</div>

		</div>

	</div>
</section>
