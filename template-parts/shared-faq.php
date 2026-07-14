<?php
/**
 * سيكشن: faq (الأسئلة الشائعة)
 * يقرأ من ACF repeater لو موجود
 * @package BrandKey
 */

$faq_title = bk_meta( 'fp_faq_title', get_option( 'page_on_front' ), 'الأسئلة الشائعة' );
$faq_desc  = bk_meta( 'fp_faq_desc', get_option( 'page_on_front' ) );
$faq_desc  = $faq_desc ?: 'استكشف أكثر الأسئلة شيوعاً حول خدماتنا وكيف يمكننا مساعده عملك على النمو';

$faqs = bk_meta( 'fp_faq_repeater', get_option( 'page_on_front' ) );

if ( ! $faqs ) {
	$faqs = array(
		array( 'question' => 'كيف تقيسون نجاح الحملات التسويقية؟', 'answer' => 'نقيس النجاح عبر مؤشرات أداء واضحة (KPIs) تشمل: معدل العائد على الاستثمار (ROI)، تكلفة اكتساب العميل (CAC)، معدل التحويل، والنمو في الزيارات والمبيعات.' ),
		array( 'question' => 'ما هي تكلفة خدماتكم وكيف يتم التسعير؟', 'answer' => 'التكلفة تعتمد على حجم المشروع ونوع الخدمات المطلوبة. لدينا باقات مرنة تبدأ من 2,999 ريال شهرياً.' ),
		array( 'question' => 'هل تقدمون تدريب وتمكين للفرق الداخلية؟', 'answer' => 'نعم، نقدم برامج تدريبية متخصصة للفرق الداخلية تشمل التسويق الرقمي، إدارة المحتوى، تحليل البيانات.' ),
		array( 'question' => 'كيف أبدأ العمل مع Brandkey؟', 'answer' => 'البدء بسيط: احجز استشارة مجانية، نحلل وضعك، نقدم خطة، نبدأ التنفيذ.' ),
		array( 'question' => 'ما هي خدمات التسويق الرقمي التي تقدمونها؟', 'answer' => 'نقدم خدمات متكاملة: التسويق الرقمي، SEO، صناعة المحتوى، تطوير المواقع، إدارة السوشيال ميديا.' ),
		array( 'question' => 'ما الذي يميز Brandkey عن وكالات التسويق الأخرى؟', 'answer' => 'إحنا مش بنبيع خدمات، إحنا بنقدم حلول. بنفهم عملك الأول قبل ما نبدأ، ونبني استراتيجية مخصصة بالكامل.' ),
	);
}
?>

<section class="faq" id="faq">
  <div class="faq-container">
    <header class="faq-head" id="faqHead">
      <h2 class="faq-title"><?php echo esc_html( $faq_title ); ?></h2>
      <img src="<?php bk_icon('heading-line.png'); ?>" alt="" class="heading-line faq-heading-line" aria-hidden="true" />
      <p class="faq-desc"><?php echo esc_html( $faq_desc ); ?></p>
    </header>
    <div class="faq-grid" id="faqGrid">
      <?php foreach ( $faqs as $i => $faq ) :
        $q = is_array( $faq ) ? ( $faq['question'] ?? '' ) : '';
        $a = is_array( $faq ) ? ( $faq['answer'] ?? '' ) : '';
      ?>
      <div class="faq-item" data-faq="<?php echo esc_attr( $i ); ?>">
        <button class="faq-question" aria-expanded="false"><span><?php echo esc_html( $q ); ?></span><img src="<?php bk_icon('faq-chevron.svg'); ?>" alt="" class="faq-chevron" /></button>
        <div class="faq-answer"><p><?php echo esc_html( $a ); ?></p></div>
      </div>
      <?php endforeach; ?>
    </div>
    <div class="faq-cta" id="faqCta">
      <img src="<?php bk_icon('faq-vector.svg'); ?>" alt="" class="faq-cta-vector" aria-hidden="true" />
      <div class="faq-cta-content">
        <h3 class="faq-cta-title">هل لا تزال لديك أسئلة؟</h3>
        <p class="faq-cta-sub">فريقنا جاهز لمساعدتك — تواصل معنا واحصل على إجابات فورية</p>
      </div>
      <a href="<?php echo esc_url( home_url('/contact') ); ?>" class="faq-cta-btn"><span>تواصل معنا الآن</span><img src="<?php bk_icon('cta-arrow.svg'); ?>" alt="" /></a>
    </div>
  </div>
</section>
