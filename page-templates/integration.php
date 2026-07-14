<?php
/**
 * Template Name: منظومة التكامل
 * مطابق للتمبلت بالظبط
 * @package BrandKey
 */
get_header();
?>
<main class="page-content" id="pageContent">

  <!-- inner hero -->
  <div id="inner-hero-include"
       data-title="منظومة متكاملة تعمل بتناغم"
       data-desc="نربط أدواتك ومنصاتك في منظومة واحدة تعمل بسلاسة — من CRM وأنظمة الإدارة إلى أدوات التسويق والتحليلات."
       data-primary-text="ابدأ التكامل الآن"
       data-primary-icon="<?php bk_icon('start-icon.svg'); ?>"
       data-primary-href="<?php echo esc_url(home_url('/contact')); ?>"
       data-ghost-text="استكشف المنظومة"
       data-ghost-icon="<?php bk_icon('humbleicons-arrow-up.svg'); ?>"
       data-ghost-href="#">
  </div>

  <!-- سيكشن 1: ما المقصود بمنظومة التكامل التسويقي؟ -->
  <?php if ( true ) : ?>
  <section class="about-us" id="integrationVision">
    <div class="about-us-container">
      <div class="about-us-visual" id="integrationVisionVisual">
        <div class="about-us-image-wrap">
          <img src="<?php bk_icon('blog-1.png'); ?>" alt="منظومة التكامل التسويقي" class="about-us-image" />
          <img src="<?php bk_icon('watermark.png'); ?>" alt="" class="about-us-watermark" aria-hidden="true" />
        </div>
      </div>
      <div class="about-us-content" id="integrationVisionContent">
        <h2 class="about-us-title">ما المقصود بمنظومة التكامل التسويقي؟</h2>
        <img src="<?php bk_icon('heading-line.png'); ?>" alt="" class="heading-line about-us-heading-line" aria-hidden="true" />
        <p class="about-us-desc">منظومة التكامل التسويقي هي المزيج الاستراتيجي المدروس بين كافة الأدوات والقنوات التسويقية بما يتوافق مع طبيعة مشروعك وجمهورك وأهدافك، لضمان أن يعمل كل عنصر في خدمة الصورة الكاملة.</p>
        <p class="about-us-desc"><strong>الفكرة الأساسية:</strong> التسويق الفعّال لا يقوم على اختيار قنوات بشكل عشوائي أو تقليد المنافسين، بل على فهم عميق لأهداف الشركة، وطبيعة السوق، وسلوك الجمهور، ثم بناء منظومة متماسكة تجمع بين الأدوات المناسبة فقط.</p>
      </div>
    </div>
  </section>
  <?php endif; ?>

  <!-- سيكشن 2: لماذا التكامل وليس الاختيار العشوائي؟ -->
  <?php if ( true ) : ?>
  <section class="integration-compare" id="integrationCompare">
    <div class="integration-compare-container">
      <header class="integration-compare-head" id="integrationCompareHead">
        <h2 class="integration-compare-title">لماذا التكامل وليس الاختيار العشوائي؟</h2>
        <img src="<?php bk_icon('heading-line.png'); ?>" alt="" class="heading-line integration-compare-heading-line" aria-hidden="true" />
        <p class="integration-compare-sub">كثير من المشاريع تصرف ميزانيات ضخمة على أدوات تسويقية دون نتائج حقيقية — السبب غالباً ليس الأداة، بل غياب المنهجية.</p>
      </header>
      <div class="integration-compare-grid" id="integrationCompareGrid">
        <article class="integration-compare-card integration-compare-card--red" data-card="0">
          <div class="integration-compare-card-header">
            <div class="integration-compare-card-icon" aria-hidden="true"><svg width="28" height="28" viewBox="0 0 28 28" fill="none"><circle cx="14" cy="14" r="13" stroke="currentColor" stroke-width="2"/><path d="M14 7V16" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"/><circle cx="14" cy="20" r="1.5" fill="currentColor"/></svg></div>
            <h3 class="integration-compare-card-title">الطريقة التقليدية</h3>
          </div>
          <p class="integration-compare-card-desc">اختيار قنوات بناءً على الشائع أو تقليد المنافس — بدون دراسة أو ربط بالأهداف — مما يؤدي إلى تشتت الميزانية وضعف النتائج</p>
        </article>
        <article class="integration-compare-card integration-compare-card--green" data-card="1">
          <div class="integration-compare-card-header">
            <div class="integration-compare-card-icon" aria-hidden="true"><svg width="28" height="28" viewBox="0 0 28 28" fill="none"><circle cx="14" cy="14" r="13" stroke="currentColor" stroke-width="2"/><path d="M8 14L12.5 18.5L20 10" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
            <h3 class="integration-compare-card-title">منظومة التكامل</h3>
          </div>
          <p class="integration-compare-card-desc">بناء مزيج تسويقي مخصص يعتمد على دراسة تفصيلية للمشروع والجمهور والمنافسين، بحيث تتكامل كل أداة مع الأخرى لتحقيق الهدف</p>
        </article>
      </div>
      <div class="integration-compare-cta" id="integrationCompareCta">
        <div class="integration-compare-cta-waves" aria-hidden="true"><svg viewBox="0 0 200 200" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="40" cy="100" r="80" stroke="rgba(242,201,76,0.08)" stroke-width="1.5"/><circle cx="40" cy="100" r="60" stroke="rgba(242,201,76,0.06)" stroke-width="1.5"/><circle cx="40" cy="100" r="40" stroke="rgba(242,201,76,0.05)" stroke-width="1.5"/><circle cx="40" cy="100" r="20" stroke="rgba(242,201,76,0.04)" stroke-width="1.5"/></svg></div>
        <div class="integration-compare-cta-content">
          <div class="integration-compare-cta-text">
            <h3 class="integration-compare-cta-title">نهج متكامل يضمن النتائج</h3>
            <p class="integration-compare-cta-desc">لا نكتفي بالتنفيذ فقط، نحن نراقب، نحلل، ونحسن باستمرار لضمان أن حلولنا تحقق أهدافك وتتجاوز توقعاتك في كل مرحلة.</p>
          </div>
          <a href="<?php echo esc_url(home_url('/contact')); ?>" class="integration-compare-cta-btn"><span>تواصل معنا الآن!</span><svg width="18" height="18" viewBox="0 0 20 20" fill="none" aria-hidden="true"><path d="M16.6666 10H3.33331M8.33331 5L3.33331 10L8.33331 15" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
        </div>
      </div>
    </div>
  </section>
  <?php endif; ?>

  <!-- سيكشن 3: هل تعرف هذه المشكلات؟ (Timeline) -->
  <?php if ( true ) : ?>
  <section class="integration-timeline" id="integrationTimeline">
    <div class="integration-timeline-container">
      <header class="integration-timeline-head" id="integrationTimelineHead">
        <h2 class="integration-timeline-title">هل تعرف هذه المشكلات؟</h2>
        <img src="<?php bk_icon('heading-line.png'); ?>" alt="" class="heading-line integration-timeline-heading-line" aria-hidden="true" />
        <p class="integration-timeline-sub">كثير من الشركات تمتلك فرقاً تسويقية لكنها لا تحقق النتائج المطلوبة — الأسباب متكررة ومحددة:</p>
      </header>
      <div class="integration-timeline-grid" id="integrationTimelineGrid">
        <div class="integration-timeline-column">
          <?php
          $steps_right = array(
            array('01','دراسة المشروع والمنتج / الخدمة','نبدأ بفهم طبيعة عملك ونقاط قوتك وميزتك التنافسية وما تقدمه للسوق بشكل حقيقي، لا مجرد وصف سطحي.'),
            array('02','تحليل أهداف الشركة','نترجم أهدافك العامة إلى مستهدفات تسويقية قابلة للقياس: وعي، عملاء محتملون، مبيعات، ولاء — لكل هدف آليته.'),
            array('03','دراسة الجمهور المستهدف','تحديد شرائح الجمهور بدقة: من هم؟ أين يتواجدون؟ ما الذي يحركهم؟ كيف يتخذون قرار الشراء؟'),
          );
          foreach ( $steps_right as $s ) :
          ?>
          <div class="integration-timeline-step" data-step="<?php echo esc_attr($s[0]); ?>">
            <div class="integration-timeline-circle"><?php echo esc_html($s[0]); ?></div>
            <div class="integration-timeline-content">
              <h3 class="integration-timeline-step-title"><?php echo esc_html($s[1]); ?></h3>
              <p class="integration-timeline-step-desc"><?php echo esc_html($s[2]); ?></p>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
        <div class="integration-timeline-column">
          <?php
          $steps_left = array(
            array('04','تحليل السوق والمنافسين','نستعرض المشهد التنافسي لنكشف الفرص الغائبة والفجوات التي يمكن استثمارها لصالح علامتك التجارية.'),
            array('05','تصميم المزيج التسويقي المتكامل','بناءً على كل ما سبق، نختار الأدوات والقنوات الأنسب ونحدد كيف تتكامل معاً لتشكل منظومة واحدة متماسكة.'),
            array('06','وضع خارطة التنفيذ والقياس','خطة تنفيذية واضحة بالأولويات والجداول الزمنية ومؤشرات الأداء التي نتابعها لضمان تحقيق الأهداف.'),
          );
          foreach ( $steps_left as $s ) :
          ?>
          <div class="integration-timeline-step" data-step="<?php echo esc_attr($s[0]); ?>">
            <div class="integration-timeline-circle"><?php echo esc_html($s[0]); ?></div>
            <div class="integration-timeline-content">
              <h3 class="integration-timeline-step-title"><?php echo esc_html($s[1]); ?></h3>
              <p class="integration-timeline-step-desc"><?php echo esc_html($s[2]); ?></p>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>
  <?php endif; ?>

  <!-- سيكشن 4: مستعد تبدأ رحلتك الرقمية؟ -->
  <?php if ( true ) get_template_part( 'template-parts/shared', 'cta-final' ); ?>

  <!-- سيكشن 5: ما الذي قد تشمله منظومتك؟ -->
  <?php if ( true ) : ?>
  <section class="integration-services" id="integrationServices">
    <div class="integration-services-container">
      <header class="integration-services-head" id="integrationServicesHead">
        <h2 class="integration-services-title">ما الذي قد تشمله منظومتك؟</h2>
        <img src="<?php bk_icon('heading-line.png'); ?>" alt="" class="heading-line integration-services-heading-line" aria-hidden="true" />
        <p class="integration-services-sub">لا توجد منظومة واحدة لكل المشاريع — المكونات تُختار وفق نتائج الدراسة. وفيما يلي أبرز الأدوات التي قد تكون جزءاً من منظومتك:</p>
      </header>
      <div class="integration-services-grid" id="integrationServicesGrid">
        <?php
        $services = array(
          array('الهوية والمحتوى','الهوية البصرية، الرسائل التسويقية، المحتوى الرقمي والتسويق بالمحتوى.','M12 5C7.58 5 4 8.58 4 13C4 17.42 7.58 21 12 21C16.42 21 20 17.42 20 13C20 8.58 16.42 5 12 5ZM12 19C8.69 19 6 16.31 6 13C6 9.69 8.69 7 12 7C15.31 7 18 9.69 18 13C18 16.31 15.31 19 12 19Z','<circle cx="12" cy="13" r="3" fill="currentColor"/>'),
          array('التسويق الرقمي','إعلانات ممولة، SEO، إدارة السوشيال ميديا، البريد الإلكتروني.','M3 13H8L10 9L14 17L16 13H21V11H14.5L13 14.5L9 6.5L7 11H3V13Z','<circle cx="5" cy="6" r="1.5" fill="currentColor"/><circle cx="19" cy="6" r="1.5" fill="currentColor"/><circle cx="12" cy="4" r="1.5" fill="currentColor"/>'),
          array('المبيعات والتحويل','صفحات الهبوط، تحسين تجربة المستخدم، إدارة العملاء المحتملين (CRM).','M12 2C6.48 2 2 6.48 2 12C2 17.52 6.48 22 12 22C17.52 22 22 17.52 22 12C22 6.48 17.52 2 12 2ZM12 4C16.42 4 20 7.58 20 12C20 16.42 16.42 20 12 20C7.58 20 4 16.42 4 12C4 7.58 7.58 4 12 4Z','<path d="M12 12L18 7M12 12L9 18M12 12L15 7" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>'),
          array('بناء العلامة التجارية','إدارة السمعة، التسويق بالمؤثرين، الشراكات والفعاليات.','M3 17.25V21H6.75L17.81 9.94L14.06 6.19L3 17.25ZM20.71 7.04C21.1 6.65 21.1 6.02 20.71 5.63L18.37 3.29C17.98 2.9 17.35 2.9 16.96 3.29L15.13 5.12L18.88 8.87L20.71 7.04Z',''),
          array('التحليل والقياس','لوحات تحكم، تقارير دورية، تحليل بيانات الأداء واتخاذ قرارات مبنية على الأرقام.','M4 20H20V22H4V20ZM4 18V8L9 13L12 10L17 15L20 12V18H4Z','<path d="M4 8V6L9 11L12 8L17 13L20 10V8L17 11L12 6L9 9L4 4V6" stroke="currentColor" stroke-width="1.2" fill="none"/>'),
          array('الاستراتيجية والتخطيط','خارطة طريق تسويقية، ميزانية تسويقية مقترحة، أولويات مراحل النمو.','M14 2H6C4.9 2 4 2.9 4 4V20C4 21.1 4.9 22 6 22H18C19.1 22 20 21.1 20 20V8L14 2ZM6 20V4H13V9H18V20H6Z','<path d="M8 13H16V15H8V13ZM8 16H14V18H8V16Z" fill="currentColor"/>'),
        );
        foreach ( $services as $i => $s ) :
        ?>
        <article class="integration-services-card" data-card="<?php echo esc_attr($i); ?>">
          <div class="integration-services-card-iconbox" aria-hidden="true"><svg width="22" height="22" viewBox="0 0 24 24" fill="none"><path d="<?php echo esc_attr($s[2]); ?>" fill="currentColor"/><?php echo $s[3]; ?></svg></div>
          <div class="integration-services-card-body">
            <h3 class="integration-services-card-title"><?php echo esc_html($s[0]); ?></h3>
            <p class="integration-services-card-desc"><?php echo esc_html($s[1]); ?></p>
          </div>
        </article>
        <?php endforeach; ?>
      </div>
      <div class="integration-services-cta" id="integrationServicesCta">
        <p class="integration-services-cta-text">استثمر في العقول التي تدير أعمالك - ابدأ رحلة التحول الآن</p>
        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="integration-services-cta-btn"><span>ابدأ رحلتك معنا الآن!</span><svg width="18" height="18" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M12 2L14 10L22 12L14 14L12 22L10 14L2 12L10 10L12 2Z" fill="currentColor"/></svg></a>
      </div>
    </div>
  </section>
  <?php endif; ?>

  <!-- سيكشن 6: ماذا تحصل في النهاية؟ -->
  <?php if ( true ) : ?>
  <section class="integration-deliverables" id="integrationDeliverables">
    <div class="integration-deliverables-container">
      <header class="integration-deliverables-head" id="integrationDeliverablesHead">
        <h2 class="integration-deliverables-title">ماذا تحصل في النهاية؟</h2>
        <img src="<?php bk_icon('heading-line.png'); ?>" alt="" class="heading-line integration-deliverables-heading-line" aria-hidden="true" />
        <p class="integration-deliverables-sub">في نهاية عملية بناء المنظومة، تحصل على وثيقة استراتيجية شاملة وخارطة تنفيذية جاهزة، لا مجرد توصيات مجردة.</p>
      </header>
      <div class="integration-deliverables-grid" id="integrationDeliverablesGrid">
        <?php
        $deliverables = array(
          array('دراسة تسويقية تفصيلية لمشروعك','M14 2H6C4.9 2 4 2.9 4 4V20C4 21.1 4.9 22 6 22H18C19.1 22 20 21.1 20 20V8L14 2ZM6 20V4H13V9H18V20H6Z','<path d="M8 13L11 16L16 11" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" fill="none"/><path d="M8 17H16" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>'),
          array('مستهدفات واضحة وقابلة للقياس','<circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="1.5"/><circle cx="12" cy="12" r="7" stroke="currentColor" stroke-width="1.5"/><circle cx="12" cy="12" r="4" stroke="currentColor" stroke-width="1.5"/>','<circle cx="12" cy="12" r="1.5" fill="currentColor"/>'),
          array('منظومة أدوات مختارة بدقة','<circle cx="5" cy="6" r="2" stroke="currentColor" stroke-width="1.5"/><circle cx="5" cy="18" r="2" stroke="currentColor" stroke-width="1.5"/><circle cx="19" cy="12" r="2" stroke="currentColor" stroke-width="1.5"/><circle cx="12" cy="6" r="2" stroke="currentColor" stroke-width="1.5"/><circle cx="12" cy="18" r="2" stroke="currentColor" stroke-width="1.5"/>','<path d="M7 6H10M7 18H10M14 6L17 11M14 18L17 13M7 7L10.5 11M7 17L10.5 13" stroke="currentColor" stroke-width="1.3" stroke-linecap="round"/>'),
          array('خارطة تنفيذ بالأولويات والجداول','<circle cx="4" cy="18" r="1.5" fill="currentColor"/><circle cx="20" cy="6" r="1.5" fill="currentColor"/>','<path d="M5 17C5 17 6 8 12 8C18 8 19 14 19 14" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-dasharray="2 2"/><path d="M4 18C4 18 8 12 12 12C16 12 19 7 19 7" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-dasharray="2 2" opacity="0.5"/>'),
        );
        foreach ( $deliverables as $i => $d ) :
        ?>
        <article class="integration-deliverables-card" data-card="<?php echo esc_attr($i); ?>">
          <div class="integration-deliverables-card-icon" aria-hidden="true"><svg width="36" height="36" viewBox="0 0 24 24" fill="none"><path d="<?php echo esc_attr($d[1]); ?>" fill="currentColor"/><?php echo $d[2]; ?></svg></div>
          <h3 class="integration-deliverables-card-title"><?php echo esc_html($d[0]); ?></h3>
        </article>
        <?php endforeach; ?>
      </div>
      <div class="integration-deliverables-cta" id="integrationDeliverablesCta">
        <p class="integration-deliverables-cta-text">استثمر في العقول التي تدير أعمالك - ابدأ رحلة التحول الآن</p>
        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="integration-deliverables-cta-btn"><span>ابدأ رحلتك معنا الآن!</span><svg width="18" height="18" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M12 2L14 10L22 12L14 14L12 22L10 14L2 12L10 10L12 2Z" fill="currentColor"/></svg></a>
      </div>
    </div>
  </section>
  <?php endif; ?>

  <!-- السيكشنات المكررة -->
  <?php get_template_part( 'template-parts/shared', 'testimonials' ); ?>
  <?php get_template_part( 'template-parts/shared', 'clients' ); ?>
  <?php get_template_part( 'template-parts/shared', 'faq' ); ?>
  <?php get_template_part( 'template-parts/shared', 'blog' ); ?>

</main>
<?php get_footer(); ?>
