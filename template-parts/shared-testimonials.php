<?php
/**
 * سيكشن: testimonials (آراء العملاء)
 * يقرأ من ACF repeater لو موجود، وإلا يستخدم البيانات الافتراضية
 * @package BrandKey
 */

// عنوان وصف السيكشن من ACF أو الافتراضي
$test_title = bk_field( 'fp_test_title', get_option( 'page_on_front' ), 'ماذا يقول عملاؤنا' );
$test_desc  = bk_field( 'fp_test_desc', get_option( 'page_on_front' ) );
$test_desc  = $test_desc ?: 'إن نجاحهم يعد المعيار الحقيقي لجودة خدماتنا ومنتجاتنا';

// آراء العملاء من ACF repeater
$testimonials = bk_field( 'fp_test_repeater', get_option( 'page_on_front' ) );

// لو مفيش ACF، استخدم البيانات الافتراضية
if ( ! $testimonials ) {
	$testimonials = array(
		array( 'text' => 'كنت خايفة أبدأ في التسويق الرقمي وأخسر فلوس من غير نتيجة — براند كي وضحولي كل خطوة وقدموا تقارير شفافة كل أسبوع. ده مش شغل وكالة عادية', 'name' => 'خالد حسن', 'role' => 'مدير علامة تجارية مستقل', 'avatar' => 'خ', 'rating' => 5 ),
		array( 'text' => 'الشيء اللي يميز براند كي إنهم بيفهموا عملك الأول قبل ما يبدأوا — مش بيبيعوا خدمات، بيقدموا حلول', 'name' => 'سارة علي', 'role' => 'مديرة التسويق، متجر الأناقة', 'avatar' => 'س', 'rating' => 5 ),
		array( 'text' => 'براند كي غيّرت صورة شركتنا الرقمية بالكامل — خلال 3 شهور بس حسينا بفرق حقيقي في الاستفسارات والمبيعات', 'name' => 'أحمد محمد', 'role' => 'الرئيس التنفيذي، شركة النجاح', 'avatar' => 'أ', 'rating' => 5 ),
	);
}
?>

<section class="testimonials" id="testimonials">
  <div class="testimonials-container">
    <header class="testimonials-head" id="testimonialsHead">
      <h2 class="testimonials-title"><?php echo esc_html( $test_title ); ?></h2>
      <img src="<?php bk_icon('heading-line.png'); ?>" alt="" class="heading-line testimonials-heading-line" aria-hidden="true" />
      <p class="testimonials-desc"><?php echo esc_html( $test_desc ); ?></p>
    </header>
    <div class="testimonials-grid" id="testimonialsGrid">
      <?php foreach ( $testimonials as $i => $t ) :
        $text   = is_array( $t ) ? ( $t['text'] ?? '' ) : '';
        $name   = is_array( $t ) ? ( $t['name'] ?? '' ) : '';
        $role   = is_array( $t ) ? ( $t['role'] ?? '' ) : '';
        $avatar = is_array( $t ) ? ( $t['avatar'] ?? mb_substr( $name, 0, 1 ) ) : mb_substr( $name, 0, 1 );
        $rating = is_array( $t ) ? ( $t['rating'] ?? 5 ) : 5;
      ?>
      <article class="testimonial-card" data-card="<?php echo esc_attr( $i ); ?>">
        <img src="<?php bk_icon('quote-keys.svg'); ?>" alt="" class="testimonial-quote" aria-hidden="true" />
        <p class="testimonial-text"><?php echo esc_html( $text ); ?></p>
        <div class="testimonial-stars" aria-label="<?php echo esc_attr( $rating ); ?> من 5">
          <?php for ( $s = 0; $s < 5; $s++ ) : ?>
          <span<?php echo $s < $rating ? '' : ' style="opacity:0.3"'; ?>>★</span>
          <?php endfor; ?>
        </div>
        <div class="testimonial-author">
          <div class="testimonial-avatar"><?php echo esc_html( $avatar ); ?></div>
          <div class="testimonial-author-info">
            <h4 class="testimonial-name"><?php echo esc_html( $name ); ?></h4>
            <p class="testimonial-role"><?php echo esc_html( $role ); ?></p>
          </div>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
    <div class="testimonials-nav" id="testimonialsNav">
      <button class="testimonial-nav-btn" id="testPrev" aria-label="السابق"><img src="<?php bk_icon('arrow-active.svg'); ?>" alt="" /></button>
      <div class="testimonials-dots" id="testDots"><?php foreach ( $testimonials as $i => $t ) : ?><span class="testimonial-dot<?php echo 0 === $i ? ' active' : ''; ?>" data-dot="<?php echo esc_attr( $i ); ?>"></span><?php endforeach; ?></div>
      <button class="testimonial-nav-btn" id="testNext" aria-label="التالي"><img src="<?php bk_icon('arrow-inactive.svg'); ?>" alt="" /></button>
    </div>
  </div>
</section>
