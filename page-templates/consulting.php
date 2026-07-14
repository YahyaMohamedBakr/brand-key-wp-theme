<?php
/**
 * Template Name: استشارات التسويق
 * مطابق للتمبلت بالظبط
 * @package BrandKey
 */
get_header();

$hero_data = array(
  'title'        => 'استشارات تصنع الفارق',
  'desc'         => 'خبراؤنا يقدمون لك استشارات استراتيجية مخصصة تساعدك على اتخاذ القرارات الصحيحة وتحقيق نمو قابل للقياس.',
  'primary_text' => 'احجز استشارتك',
  'primary_href' => home_url( '/contact' ),
  'ghost_text'   => 'تعرف على أنواع الاستشارات',
  'ghost_href'   => '#',
);
set_query_var( 'bk_inner_hero', $hero_data );
?>

<main class="page-content" id="pageContent">
  <?php get_template_part( 'template-parts/inner-hero' ); ?>

    <!-- ===================== سيكشن 1: هل تعاني من أحد هذه المواقف؟ (Pain Points Grid) ===================== -->
    <section class="training-problems consulting-painpoints" id="consultingPainpoints">
      <div class="training-problems-container">

        <!-- الهيدر: عنوان + خط أصفر + دائرة + وصف -->
        <header class="training-problems-head" id="consultingPainpointsHead">
          <h2 class="training-problems-title">هل تعاني من أحد هذه المواقف؟</h2>
          <img src="<?php bk_icon('heading-line.png'); ?>" alt="" class="heading-line training-problems-heading-line" aria-hidden="true" />
          <p class="training-problems-sub">
            الاستشارة التسويقية صُممت لأصحاب المشاريع والمسؤولين التسويقيين الذين يواجهون واحداً أو أكثر مما يلي:
          </p>
        </header>

        <!-- الـ Grid: 2 أعمدة × 3 صفوف = 6 كروت -->
        <div class="training-problems-grid" id="consultingPainpointsGrid">

          <!-- كارت 1 -->
          <article class="training-problems-card consulting-painpoints-card" data-card="0">
            <div class="training-problems-card-icon consulting-painpoints-icon" aria-hidden="true">
              <svg width="28" height="28" viewBox="0 0 24 24" fill="none">
                <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2"/>
                <path d="M8 14S9 16 12 16S16 14 16 14" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                <path d="M9 9L9.01 9" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"/>
                <path d="M15 9L15.01 9" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"/>
              </svg>
            </div>
            <p class="training-problems-card-text">تصرف على التسوق لكن النتائج لا تتحسن ولا تعرف أين المشكلة</p>
          </article>

          <!-- كارت 2 -->
          <article class="training-problems-card consulting-painpoints-card" data-card="1">
            <div class="training-problems-card-icon consulting-painpoints-icon" aria-hidden="true">
              <svg width="28" height="28" viewBox="0 0 24 24" fill="none">
                <path d="M9 14L12 11L15 14L12 17L9 14Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/>
                <path d="M10 13L7 10C5.5 8.5 5.5 6 7 4.5C8.5 3 11 3 12.5 4.5L12 5" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                <path d="M14 13L17 10C18.5 8.5 18.5 6 17 4.5C15.5 3 13 3 11.5 4.5L12 5" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                <circle cx="12" cy="11" r="1.5" fill="currentColor"/>
              </svg>
            </div>
            <p class="training-problems-card-text">لديك قنوات تسويقية متعددة لكن لا يوجد تنسيق أو استراتيجية تجمعها</p>
          </article>

          <!-- كارت 3 -->
          <article class="training-problems-card consulting-painpoints-card" data-card="2">
            <div class="training-problems-card-icon consulting-painpoints-icon" aria-hidden="true">
              <svg width="28" height="28" viewBox="0 0 24 24" fill="none">
                <circle cx="9" cy="8" r="3" stroke="currentColor" stroke-width="2"/>
                <path d="M3 19C3 15.69 5.69 13 9 13C10.5 13 11.5 13.5 12.5 14.5" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                <circle cx="17" cy="9" r="2.5" stroke="currentColor" stroke-width="2"/>
                <path d="M11 19C11 16.51 13.51 14.5 17 14.5C20.49 14.5 23 16.51 23 19" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
              </svg>
            </div>
            <p class="training-problems-card-text">لديك فريق تسويقي داخلي تريد توجيهه بشكل صحيح أو تقييم أدائه</p>
          </article>

          <!-- كارت 4 -->
          <article class="training-problems-card consulting-painpoints-card" data-card="3">
            <div class="training-problems-card-icon consulting-painpoints-icon" aria-hidden="true">
              <svg width="28" height="28" viewBox="0 0 24 24" fill="none">
                <path d="M12 3C7.58 3 4 6.58 4 11C4 15.42 7.58 19 12 19C16.42 19 20 15.42 20 11" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                <path d="M20 11L16 11M20 11L20 7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M12 7V11L14 13" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
              </svg>
            </div>
            <p class="training-problems-card-text">مشروع جديد تريد البدء التسويقي له بشكل صحيح من الخطوة الأولى</p>
          </article>

          <!-- كارت 5 -->
          <article class="training-problems-card consulting-painpoints-card" data-card="4">
            <div class="training-problems-card-icon consulting-painpoints-icon" aria-hidden="true">
              <svg width="28" height="28" viewBox="0 0 24 24" fill="none">
                <circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="2"/>
                <path d="M12 7V12L15 14" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
              </svg>
            </div>
            <p class="training-problems-card-text">تريد تحديد الأولويات وتوزيع الميزانية التسويقية بذكاء لا عشوائية</p>
          </article>

          <!-- كارت 6 -->
          <article class="training-problems-card consulting-painpoints-card" data-card="5">
            <div class="training-problems-card-icon consulting-painpoints-icon" aria-hidden="true">
              <svg width="28" height="28" viewBox="0 0 24 24" fill="none">
                <path d="M4 12C4 12 7 5 12 5C17 5 20 12 20 12C20 12 17 19 12 19C7 19 4 12 4 12Z" stroke="currentColor" stroke-width="2"/>
                <path d="M12 8V12L14 14" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                <path d="M9 3L12 5L15 3" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </div>
            <p class="training-problems-card-text">تفكر في إعادة تموضع علامتك التجارية أو دخول سوق جديد</p>
          </article>

        </div>

      </div>

      <!-- البانر السفلي الكحلي -->
      <div class="training-problems-cta consulting-painpoints-cta" id="consultingPainpointsCta">
        <div class="training-problems-cta-waves" aria-hidden="true">
          <svg viewBox="0 0 200 200" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="40" cy="100" r="80" stroke="rgba(242,201,76,0.08)" stroke-width="1.5"/>
            <circle cx="40" cy="100" r="60" stroke="rgba(242,201,76,0.06)" stroke-width="1.5"/>
            <circle cx="40" cy="100" r="40" stroke="rgba(242,201,76,0.05)" stroke-width="1.5"/>
            <circle cx="40" cy="100" r="20" stroke="rgba(242,201,76,0.04)" stroke-width="1.5"/>
          </svg>
        </div>
        <div class="training-problems-cta-content">
          <div class="training-problems-cta-text">
            <h3 class="training-problems-cta-title">نهج متكامل يضمن النتائج</h3>
            <p class="training-problems-cta-desc">لا نكتفي بالتنفيذ فقط. نحن نراقب، نحلل، ونحسن باستمرار لضمان أن حلولنا تحقق أهدافك وتتجاوز توقعاتك في كل مرحلة.</p>
          </div>
          <a href="<?php echo esc_url(home_url('/contact')); ?>" class="training-problems-cta-btn">
            <span>تواصل معنا الآن!</span>
            <svg width="18" height="18" viewBox="0 0 20 20" fill="none" aria-hidden="true">
              <path d="M16.6666 10H3.33331M8.33331 5L3.33331 10L8.33331 15" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </a>
        </div>
      </div>
    </section>

    <!-- ===================== سيكشن 2: ما نوع الاستشارة التي تحتاجها؟ (Dark Consultation Types) ===================== -->
    <section class="training-programs consulting-types" id="consultingTypes">
      <!-- فيكتور الـ keyhole الكبير على الشمال full height -->
      <img src="<?php bk_icon('cta2-keyhole.png'); ?>" alt="" class="training-programs-keyhole" aria-hidden="true" />
      <div class="training-programs-container">

        <!-- الهيدر: عنوان أبيض (يمين) + خط أصفر + دائرة + وصف -->
        <header class="training-programs-head" id="consultingTypesHead">
          <h2 class="training-programs-title">ما نوع الاستشارة التي تحتاجها؟</h2>
          <img src="<?php bk_icon('heading-line.png'); ?>" alt="" class="heading-line training-programs-heading-line" aria-hidden="true" />
          <p class="training-programs-sub">
            نقدم ثلاثة أنواع من الجلسات الاستشارية حسب وضعك وما تحتاج الوصول إليه:
          </p>
        </header>

        <!-- الـ Grid: 3 كروت في صف واحد -->
        <div class="training-programs-grid consulting-types-grid" id="consultingTypesGrid">

          <!-- كارت 1: استشارة التشخيص التسويقي -->
          <article class="training-programs-card" data-card="0">
            <div class="training-programs-card-body">
              <div class="consulting-types-card-header">
                <div class="consulting-types-card-iconbox" aria-hidden="true">
                  <svg width="22" height="22" viewBox="0 0 24 24" fill="none">
                    <circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="1.8"/>
                    <path d="M3 12H21M12 3C14.5 6 15.5 9 15.5 12C15.5 15 14.5 18 12 21M12 3C9.5 6 8.5 9 8.5 12C8.5 15 9.5 18 12 21" stroke="currentColor" stroke-width="1.5"/>
                  </svg>
                </div>
                <div>
                  <h3 class="consulting-types-card-title">استشارة التشخيص التسويقي</h3>
                  <p class="consulting-types-card-subtitle">لمن: لمن يشعر بمشكلة لكنه لا يعرف مكانها</p>
                </div>
              </div>
              <div class="training-programs-card-features consulting-types-features">
                <div class="training-programs-card-feature"><span class="dot"></span>تقييم دقيق لأدائك وأنشطتك الحالية</div>
                <div class="training-programs-card-feature"><span class="dot"></span>اقتراح تحسينات فورية للحملات والمحتوى</div>
                <div class="training-programs-card-feature"><span class="dot"></span>تطوير وضبط آليات قياس النتائج بفعالية</div>
              </div>
            </div>
          </article>

          <!-- كارت 2: استشارة بناء الاستراتيجية -->
          <article class="training-programs-card" data-card="1">
            <div class="training-programs-card-body">
              <div class="consulting-types-card-header">
                <div class="consulting-types-card-iconbox" aria-hidden="true">
                  <svg width="22" height="22" viewBox="0 0 24 24" fill="none">
                    <rect x="3" y="3" width="18" height="18" rx="2" stroke="currentColor" stroke-width="1.8"/>
                    <path d="M3 9H21M9 3V21" stroke="currentColor" stroke-width="1.5"/>
                    <rect x="9" y="9" width="6" height="6" fill="currentColor" opacity="0.3"/>
                  </svg>
                </div>
                <div>
                  <h3 class="consulting-types-card-title">استشارة بناء الاستراتيجية</h3>
                  <p class="consulting-types-card-subtitle">لمن: لمن يريد خارطة طريق تسويقية</p>
                </div>
              </div>
              <div class="training-programs-card-features consulting-types-features">
                <div class="training-programs-card-feature"><span class="dot"></span>عقد جلسة استشارية وتخطيطية معمقة</div>
                <div class="training-programs-card-feature"><span class="dot"></span>بناء اتجاه تسويقي صحيح ومدروس لعلامتك</div>
                <div class="training-programs-card-feature"><span class="dot"></span>تحديد القنوات والأولويات الأنسب لنمو مشروعك</div>
              </div>
            </div>
          </article>

          <!-- كارت 3: استشارة الأداء والتنفيذ -->
          <article class="training-programs-card" data-card="2">
            <div class="training-programs-card-body">
              <div class="consulting-types-card-header">
                <div class="consulting-types-card-iconbox" aria-hidden="true">
                  <svg width="22" height="22" viewBox="0 0 24 24" fill="none">
                    <circle cx="12" cy="8" r="4" stroke="currentColor" stroke-width="1.8"/>
                    <path d="M4 21C4 16.58 7.58 13 12 13C16.42 13 20 16.58 20 21" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
                    <path d="M12 4V6M10 5L14 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                  </svg>
                </div>
                <div>
                  <h3 class="consulting-types-card-title">استشارة الأداء والتنفيذ</h3>
                  <p class="consulting-types-card-subtitle">لمن: لمن لديه خطة ويريد تحسين النتائج</p>
                </div>
              </div>
              <div class="training-programs-card-features consulting-types-features">
                <div class="training-programs-card-feature"><span class="dot"></span>تشخيص شامل للوضع التسويقي الراهن</div>
                <div class="training-programs-card-feature"><span class="dot"></span>رصد وتحليل الثغرات ونقاط الضعف بوضوح</div>
                <div class="training-programs-card-feature"><span class="dot"></span>تقديم توصيات وحلول أولية قابلة للتنفيذ</div>
              </div>
            </div>
          </article>

        </div>

        <!-- الـ Footer: سطر رمادي فاتح + زرار أصفر ممركز -->
        <div class="training-programs-cta" id="consultingTypesCta">
          <p class="training-programs-cta-text">استثمر في العقول التي تدير أعمالك - ابدأ رحلة التحول الآن</p>
          <a href="<?php echo esc_url(home_url('/contact')); ?>" class="training-programs-cta-btn">
            <span>ابدأ رحلتك معنا الآن!</span>
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" aria-hidden="true">
              <path d="M12 2L14 10L22 12L14 14L12 22L10 14L2 12L10 10L12 2Z" fill="currentColor"/>
            </svg>
          </a>
        </div>

      </div>
    </section>

    <!-- ===================== سيكشن 3: كيف تسير جلسة الاستشارة؟ (Method - 5 خطوات) ===================== -->
    <section class="how consulting-method" id="consultingMethod">
      <div class="how-container">

        <!-- رأس السيكشن (عنوان + خط + وصف) -->
        <header class="how-head" id="consultingMethodHead">
          <h2 class="how-title">كيف تسير جلسة الاستشارة؟</h2>
          <img src="<?php bk_icon('heading-line.png'); ?>" alt="" class="heading-line how-heading-line" aria-hidden="true" />
          <p class="how-desc">
            لدينا منهجية واضحة في كل جلسة لضمان أنك تخرج بأكبر قدر ممكن من الفائدة:
          </p>
        </header>

        <!-- العمودين: إطار (شمال) + خطوات (يمين) -->
        <div class="how-grid">

          <!-- الإطار الزخرفي (keyhole + لوگو BK) على الشمال -->
          <div class="how-visual">
            <img src="<?php bk_icon('how-frame.svg'); ?>" alt="Brand Key" class="how-frame" />
          </div>

          <!-- الخطوات الـ 5 على اليمين -->
          <div class="how-steps consulting-method-steps" id="consultingMethodSteps">

            <!-- خطوة 01 -->
            <article class="how-step" data-step="0">
              <div class="how-step-num">01</div>
              <div class="how-step-body">
                <h3 class="how-step-title">استمارة ما قبل الجلسة</h3>
                <p class="how-step-desc">قبل الجلسة بـ 24-48 ساعة تُكمل استمارة قصيرة عن مشروعك وتحدياتك وأهدافك، حتى لا نضيع وقتنا في التعريف ونبدأ مباشرة في العمق.</p>
              </div>
            </article>

            <!-- خطوة 02 -->
            <article class="how-step" data-step="1">
              <div class="how-step-num">02</div>
              <div class="how-step-body">
                <h3 class="how-step-title">مراجعة وتحليل أولي</h3>
                <p class="how-step-desc">نراجع ما أرسلته ونُحضّر أسئلة محددة ونقاطاً تحتاج توضيحاً — الجلسة تبدأ بعد تفكير حقيقي لا ارتجال.</p>
              </div>
            </article>

            <!-- خطوة 03 -->
            <article class="how-step" data-step="2">
              <div class="how-step-num">03</div>
              <div class="how-step-body">
                <h3 class="how-step-title">جلسة التشخيص والتحليل</h3>
                <p class="how-step-desc">حوار عميق يتناول وضعك الحالي وتحدياتك وأهدافك، مع طرح زوايا لم تفكر فيها ومقارنة بالسوق والمنافسين.</p>
              </div>
            </article>

            <!-- خطوة 04 -->
            <article class="how-step" data-step="3">
              <div class="how-step-num">04</div>
              <div class="how-step-body">
                <h3 class="how-step-title">التوصيات والأولويات</h3>
                <p class="how-step-desc">نخصص جزءاً كافياً من الجلسة للوصول إلى توصيات واضحة وعملية — لا مجرد نقاش نظري.</p>
              </div>
            </article>

            <!-- خطوة 05 -->
            <article class="how-step" data-step="4">
              <div class="how-step-num">05</div>
              <div class="how-step-body">
                <h3 class="how-step-title">ملخص ما بعد الجلسة</h3>
                <p class="how-step-desc">تصلك وثيقة ملخص بأبرز ما تم تناوله والتوصيات المتفق عليها وخطوات العمل القادمة خلال 48 ساعة.</p>
              </div>
            </article>

          </div>

        </div>

      </div>
    </section>

    <!-- ===================== سيكشن 4: ماذا ستحصل بعد الجلسة؟ (Dark Deliverables) ===================== -->
    <section class="integration-deliverables consulting-deliverables" id="consultingDeliverables">
      <div class="integration-deliverables-container">

        <!-- الهيدر: عنوان أبيض ممركز + خط أصفر + دائرة + وصف -->
        <header class="integration-deliverables-head" id="consultingDeliverablesHead">
          <h2 class="integration-deliverables-title">ماذا ستحصل بعد الجلسة؟</h2>
          <img src="<?php bk_icon('heading-line.png'); ?>" alt="" class="heading-line integration-deliverables-heading-line" aria-hidden="true" />
          <p class="integration-deliverables-sub">
            في نهاية عملية بناء المنظومة، تحصل على وثيقة استراتيجية شاملة وخارطة تنفيذية جاهزة، لا مجرد توصيات مجردة.
          </p>
        </header>

        <!-- الـ Grid: 4 كروت في صف أفقي -->
        <div class="integration-deliverables-grid" id="consultingDeliverablesGrid">

          <!-- كارت 1: وضوح كامل -->
          <article class="integration-deliverables-card" data-card="0">
            <div class="integration-deliverables-card-icon" aria-hidden="true">
              <svg width="36" height="36" viewBox="0 0 24 24" fill="none">
                <path d="M14 2H6C4.9 2 4 2.9 4 4V20C4 21.1 4.9 22 6 22H18C19.1 22 20 21.1 20 20V8L14 2Z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/>
                <path d="M8 12L10 14L14 10" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
                <path d="M8 16L10 18L14 14" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" fill="none" opacity="0.5"/>
              </svg>
            </div>
            <h3 class="integration-deliverables-card-title">وضوح كامل في الوضع التسويقي</h3>
            <p class="consulting-deliverables-card-desc">تشخيص دقيق لنقاط القوة والضعف في وضعك الحالي بدون مجاملة</p>
          </article>

          <!-- كارت 2: خطوات عمل واضحة -->
          <article class="integration-deliverables-card" data-card="1">
            <div class="integration-deliverables-card-icon" aria-hidden="true">
              <svg width="36" height="36" viewBox="0 0 24 24" fill="none">
                <circle cx="4" cy="6" r="2" stroke="currentColor" stroke-width="1.8"/>
                <circle cx="12" cy="12" r="2" stroke="currentColor" stroke-width="1.8"/>
                <circle cx="20" cy="18" r="2" stroke="currentColor" stroke-width="1.8"/>
                <path d="M6 7C8 8 10 10 10 11M14 13C16 14 18 16 18 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-dasharray="2 2" fill="none"/>
              </svg>
            </div>
            <h3 class="integration-deliverables-card-title">خطوات عمل واضحة ومحددة</h3>
            <p class="consulting-deliverables-card-desc">لن تخرج بأفكار مجردة — بل بقائمة أولويات قابلة للتنفيذ فوراً</p>
          </article>

          <!-- كارت 3: ملخص مكتوب -->
          <article class="integration-deliverables-card" data-card="2">
            <div class="integration-deliverables-card-icon" aria-hidden="true">
              <svg width="36" height="36" viewBox="0 0 24 24" fill="none">
                <path d="M14 2H6C4.9 2 4 2.9 4 4V20C4 21.1 4.9 22 6 22H18C19.1 22 20 21.1 20 20V8L14 2Z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/>
                <path d="M8 12H16M8 16H16M8 8H12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
              </svg>
            </div>
            <h3 class="integration-deliverables-card-title">ملخص مكتوب بعد الجلسة</h3>
            <p class="consulting-deliverables-card-desc">وثيقة تلخص كل ما تم تناوله والتوصيات الرئيسية لتعود إليها في أي وقت</p>
          </article>

          <!-- كارت 4: متابعة أسبوع -->
          <article class="integration-deliverables-card" data-card="3">
            <div class="integration-deliverables-card-icon" aria-hidden="true">
              <svg width="36" height="36" viewBox="0 0 24 24" fill="none">
                <path d="M21 11.5C21 16.75 16.75 21 11.5 21C9.5 21 7.65 20.35 6.15 19.25L3 20L4.75 16.85C3.65 15.35 3 13.5 3 11.5C3 6.25 7.25 2 12.5 2C17.75 2 22 6.25 22 11.5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" transform="translate(-1 0)"/>
                <path d="M8 11H8.01M12 11H12.01M16 11H16.01" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"/>
              </svg>
            </div>
            <h3 class="integration-deliverables-card-title">متابعة لمدة أسبوع بعد الجلسة</h3>
            <p class="consulting-deliverables-card-desc">إمكانية التواصل للأسئلة الطارئة أو التوضيحات لمدة 7 أيام بعد الجلسة</p>
          </article>

        </div>

        <!-- الـ Footer: سطر رمادي فاتح + زرار أصفر ممركز -->
        <div class="integration-deliverables-cta" id="consultingDeliverablesCta">
          <p class="integration-deliverables-cta-text">استثمر في العقول التي تدير أعمالك - ابدأ رحلة التحول الآن</p>
          <a href="<?php echo esc_url(home_url('/contact')); ?>" class="integration-deliverables-cta-btn">
            <span>ابدأ رحلتك معنا الآن!</span>
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" aria-hidden="true">
              <path d="M12 2L14 10L22 12L14 14L12 22L10 14L2 12L10 10L12 2Z" fill="currentColor"/>
            </svg>
          </a>
        </div>

      </div>
    </section>

    <!-- ===================== 
  <!-- السيكشنات المكررة -->
  <?php get_template_part( 'template-parts/shared', 'testimonials' ); ?>
  <?php get_template_part( 'template-parts/shared', 'cta-final' ); ?>
  <?php get_template_part( 'template-parts/shared', 'faq' ); ?>
  <?php get_template_part( 'template-parts/shared', 'blog' ); ?>

</main>
<?php get_footer(); ?>
