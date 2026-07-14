<?php
/**
 * Template Name: تدريب الشركات
 * مطابق للتمبلت بالظبط — كل 7 سيكشنات + shared components
 * @package BrandKey
 */
get_header();

$hero_data = array(
  'title'        => 'فريقك التسويقي هو أصولك — نبنيه أو نطوّره',
  'desc'         => 'برامج تدريبية مخصصة للفرق التسويقية في الشركات — من تأسيس الفريق وتحديد الأدوار، إلى رفع الكفاءة وتطوير الأداء بمنهجية عملية.',
  'primary_text' => 'اطلب برنامجك التدريبي',
  'primary_href' => home_url( '/contact' ),
  'ghost_text'   => 'تعرّف على البرامج',
  'ghost_href'   => '#',
);
set_query_var( 'bk_inner_hero', $hero_data );
?>

<main class="page-content" id="pageContent">

    <!-- ===================== سيكشن 1: لماذا منظومة Brand Key؟ ===================== -->
    <section class="about-explore" id="trainingExplore">
      <div class="about-explore-container">

        <!-- رأس السيكشن (عنوان + خط + وصف في النص) -->
        <header class="about-explore-head" id="trainingExploreHead">
          <h2 class="about-explore-title">لماذا منظومة Brand Key؟</h2>
          <img src="<?php bk_icon('heading-line.png'); ?>" alt="" class="heading-line about-explore-heading-line" aria-hidden="true" />
          <p class="about-explore-desc">
            معظم الشركات تعاني من تشتت الجهود بين مصمم، ومبرمج، ومعلن لا يربطهم رابط. في Brand Key، نضع المنظومة كاملة نصب أعيننا ونربط كل خطوة بالخطوة التالية لضمان تحويل رؤيتك إلى واقع عملي.
          </p>
        </header>

        <!-- 3 كروت مستطيلة أفقية -->
        <div class="about-explore-grid" id="trainingExploreGrid">

          <!-- كارت 1 (يمين): +15 — مدرب محترف — #153D72 (غامق) -->
          <article class="about-explore-card about-explore-card--1" data-card="0">
            <img src="<?php bk_icon('vector-decoration.png'); ?>" alt="" class="about-explore-card-vector" aria-hidden="true" />
            <div class="about-explore-card-num">+15</div>
            <div class="about-explore-card-label">مدرب محترف</div>
          </article>

          <!-- كارت 2 (وسط): +130 — عميل يثق بنا — #2B578F (وسط) -->
          <article class="about-explore-card about-explore-card--2" data-card="1">
            <img src="<?php bk_icon('vector-decoration.png'); ?>" alt="" class="about-explore-card-vector" aria-hidden="true" />
            <div class="about-explore-card-num">+130</div>
            <div class="about-explore-card-label">عميل يثق بنا</div>
          </article>

          <!-- كارت 3 (شمال): +8 — سنوات من الخبرة — #5073A0 (فاتح) -->
          <article class="about-explore-card about-explore-card--3" data-card="2">
            <img src="<?php bk_icon('vector-decoration.png'); ?>" alt="" class="about-explore-card-vector" aria-hidden="true" />
            <div class="about-explore-card-num">+8</div>
            <div class="about-explore-card-label">سنوات من الخبرة</div>
          </article>

        </div>

      </div>
    </section>

    <!-- ===================== سيكشن 2: هل تعرف هذه المشكلات؟ (Problem Cards Grid) ===================== -->
    <section class="training-problems" id="trainingProblems">
      <div class="training-problems-container">

        <!-- الهيدر: عنوان + خط أصفر + دائرة + وصف -->
        <header class="training-problems-head" id="trainingProblemsHead">
          <h2 class="training-problems-title">هل تعرف هذه المشكلات؟</h2>
          <img src="<?php bk_icon('heading-line.png'); ?>" alt="" class="heading-line training-problems-heading-line" aria-hidden="true" />
          <p class="training-problems-sub">
            كثير من الشركات تمتلك فرقاً تسويقية لكنها لا تحقق النتائج المطلوبة — الأسباب متكررة ومحددة:
          </p>
        </header>

        <!-- الـ Grid: 2 أعمدة × 3 صفوف = 6 كروت -->
        <div class="training-problems-grid" id="trainingProblemsGrid">

          <!-- كارت 1 (يمين، صف 1) -->
          <article class="training-problems-card" data-card="0">
            <div class="training-problems-card-icon" aria-hidden="true">
              <svg width="28" height="28" viewBox="0 0 24 24" fill="none">
                <circle cx="12" cy="8" r="4" stroke="currentColor" stroke-width="2"/>
                <path d="M4 21C4 16.58 7.58 13 12 13C16.42 13 20 16.58 20 21" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                <path d="M5 5L19 19M19 5L5 19" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
              </svg>
            </div>
            <p class="training-problems-card-text">الفريق لا يملك فهماً استراتيجياً للتسويق ويعمل بشكل تشغيلي فقط دون رؤية شاملة</p>
          </article>

          <!-- كارت 2 (يمين، صف 2) -->
          <article class="training-problems-card" data-card="1">
            <div class="training-problems-card-icon" aria-hidden="true">
              <svg width="28" height="28" viewBox="0 0 24 24" fill="none">
                <path d="M3 17L9 11L13 15L21 7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M15 7H21V13" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </div>
            <p class="training-problems-card-text">النتائج لا تُقاس بشكل صحيح والفريق لا يعرف KPIs الحقيقية لعمله</p>
          </article>

          <!-- كارت 3 (يمين، صف 3) -->
          <article class="training-problems-card" data-card="2">
            <div class="training-problems-card-icon" aria-hidden="true">
              <svg width="28" height="28" viewBox="0 0 24 24" fill="none">
                <path d="M9 2V8L5 14V18H19V14L15 8V2" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M9 2H15" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                <path d="M4 22L20 6M20 22L4 6" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
              </svg>
            </div>
            <p class="training-problems-card-text">ضعف التنسيق بين التسويق والمبيعات يُضيّع فرصاً ويخلق فجوة في تجربة العميل</p>
          </article>

          <!-- كارت 4 (شمال، صف 1) -->
          <article class="training-problems-card" data-card="3">
            <div class="training-problems-card-icon" aria-hidden="true">
              <svg width="28" height="28" viewBox="0 0 24 24" fill="none">
                <path d="M7 17L17 7M7 7L17 17" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                <path d="M3 12H7M17 12H21M12 3V7M12 17V21" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
              </svg>
            </div>
            <p class="training-problems-card-text">الأدوار والمسؤوليات غير واضحة داخل الفريق مما يسبب تضارباً وتكراراً في العمل</p>
          </article>

          <!-- كارت 5 (شمال، صف 2) -->
          <article class="training-problems-card" data-card="4">
            <div class="training-problems-card-icon" aria-hidden="true">
              <svg width="28" height="28" viewBox="0 0 24 24" fill="none">
                <path d="M14.7 6.3C14.3 5.9 14.3 5.3 14.7 4.9L17.5 2.1C17.9 1.7 18.5 1.7 18.9 2.1L21.9 5.1C22.3 5.5 22.3 6.1 21.9 6.5L19.1 9.3C18.7 9.7 18.1 9.7 17.7 9.3L14.7 6.3Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/>
                <path d="M17 9L3 23" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                <path d="M5 19L9 15" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
              </svg>
            </div>
            <p class="training-problems-card-text">يعتمد الفريق على أدوات بشكل عشوائي دون منهجية أو استراتيجية تجمعها</p>
          </article>

          <!-- كارت 6 (شمال، صف 3) -->
          <article class="training-problems-card" data-card="5">
            <div class="training-problems-card-icon" aria-hidden="true">
              <svg width="28" height="28" viewBox="0 0 24 24" fill="none">
                <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2"/>
                <path d="M8 14S9 16 12 16S16 14 16 14" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                <path d="M9 9L9.01 9" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"/>
                <path d="M15 9L15.01 9" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"/>
              </svg>
            </div>
            <p class="training-problems-card-text">غياب ثقافة التسويق داخل الشركة يجعل قرارات العمل مفصولة عن الواقع السوقي</p>
          </article>

        </div>

      </div>

      <!-- البانر السفلي الكحلي -->
      <div class="training-problems-cta" id="trainingProblemsCta">
        <!-- تموجات هندسية خافتة في الزاوية اليسرى -->
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
            <h3 class="training-problems-cta-title">التدريب الصحيح يغيّر تفكير الفريق ويبني ثقافة تسويقية</h3>
            <p class="training-problems-cta-desc">التدريب الصحيح لا يُعلّم مجرد مهارات — بل يُغيّر طريقة تفكير الفريق ويبني ثقافة تسويقية حقيقية داخل المؤسسة.</p>
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

    <!-- ===================== سيكشن 3: لمن هذه البرامج التدريبية؟ (Audience Grid) ===================== -->
    <section class="integration-services training-audience" id="trainingAudience">
      <div class="integration-services-container">

        <!-- الهيدر: عنوان + خط أصفر + دائرة (بدون وصف) -->
        <header class="integration-services-head training-audience-head" id="trainingAudienceHead">
          <h2 class="integration-services-title">لمن هذه البرامج التدريبية؟</h2>
          <img src="<?php bk_icon('heading-line.png'); ?>" alt="" class="heading-line integration-services-heading-line" aria-hidden="true" />
        </header>

        <!-- الـ Grid: 2 أعمدة × 2 صفوف = 4 كروت -->
        <div class="integration-services-grid training-audience-grid" id="trainingAudienceGrid">

          <!-- كارت 1: أقسام التسويق -->
          <article class="integration-services-card" data-card="0">
            <div class="integration-services-card-iconbox" aria-hidden="true">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none">
                <path d="M12 5C7.58 5 4 8.58 4 13C4 17.42 7.58 21 12 21C16.42 21 20 17.42 20 13C20 8.58 16.42 5 12 5ZM12 19C8.69 19 6 16.31 6 13C6 9.69 8.69 7 12 7C15.31 7 18 9.69 18 13C18 16.31 15.31 19 12 19Z" fill="currentColor"/>
                <circle cx="12" cy="13" r="3" fill="currentColor"/>
                <rect x="10" y="3" width="4" height="2" fill="currentColor"/>
                <rect x="3" y="12" width="2" height="2" fill="currentColor"/>
                <rect x="19" y="12" width="2" height="2" fill="currentColor"/>
              </svg>
            </div>
            <div class="integration-services-card-body">
              <h3 class="integration-services-card-title">أقسام التسويق</h3>
              <p class="integration-services-card-desc">في المؤسسات الكبيرة التي تحتاج تطوير مهارات بعينها.</p>
            </div>
          </article>

          <!-- كارت 2: المديرون التنفيذيون -->
          <article class="integration-services-card" data-card="1">
            <div class="integration-services-card-iconbox" aria-hidden="true">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none">
                <path d="M16 11C17.66 11 18.99 9.66 18.99 8C18.99 6.34 17.66 5 16 5C14.34 5 13 6.34 13 8C13 9.66 14.34 11 16 11ZM8 11C9.66 11 10.99 9.66 10.99 8C10.99 6.34 9.66 5 8 5C6.34 5 5 6.34 5 8C5 9.66 6.34 11 8 11ZM8 13C5.67 13 1 14.17 1 16.5V19H15V16.5C15 14.17 10.33 13 8 13ZM16 13C15.71 13 15.38 13.02 15.03 13.05C16.19 13.89 17 15.02 17 16.5V19H23V16.5C23 14.17 18.33 13 16 13Z" fill="currentColor"/>
                <rect x="18" y="3" width="4" height="3" fill="currentColor" rx="1"/>
              </svg>
            </div>
            <div class="integration-services-card-body">
              <h3 class="integration-services-card-title">المديرون التنفيذيون</h3>
              <p class="integration-services-card-desc">الذين يحتاجون فهماً تسويقياً لاتخاذ قرارات أفضل.</p>
            </div>
          </article>

          <!-- كارت 3: شركات ناشئة -->
          <article class="integration-services-card" data-card="2">
            <div class="integration-services-card-iconbox" aria-hidden="true">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none">
                <path d="M12 7V3H2V21H22V7H12ZM6 19H4V17H6V19ZM6 15H4V13H6V15ZM6 11H4V9H6V11ZM6 7H4V5H6V7ZM10 19H8V17H10V19ZM10 15H8V13H10V15ZM10 11H8V9H10V11ZM10 7H8V5H10V7ZM20 19H12V17H14V15H12V13H14V11H12V9H20V19ZM18 11H16V13H18V11ZM18 15H16V17H18V15Z" fill="currentColor"/>
              </svg>
            </div>
            <div class="integration-services-card-body">
              <h3 class="integration-services-card-title">شركات ناشئة</h3>
              <p class="integration-services-card-desc">تريد تأسيس فريق تسويقي من الصفر بمنهجية صحيحة.</p>
            </div>
          </article>

          <!-- كارت 4: شركات متوسطة -->
          <article class="integration-services-card" data-card="3">
            <div class="integration-services-card-iconbox" aria-hidden="true">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none">
                <path d="M17 11V3H7V21H21V11H17ZM9 5H15V7H9V5ZM9 9H15V11H9V9ZM15 19V13H19V19H15ZM9 13H13V15H9V13ZM9 17H13V19H9V17Z" fill="currentColor"/>
              </svg>
            </div>
            <div class="integration-services-card-body">
              <h3 class="integration-services-card-title">شركات متوسطة</h3>
              <p class="integration-services-card-desc">لديها فريق قائم وتريد رفع كفاءته وتطوير أدائه.</p>
            </div>
          </article>

        </div>

        <!-- الـ Footer (القفلة): سطر رمادي + زرار أصفر ممركز -->
        <div class="integration-services-cta" id="trainingAudienceCta">
          <p class="integration-services-cta-text">استثمر في العقول التي تدير أعمالك - ابدأ رحلة التحول الآن</p>
          <a href="<?php echo esc_url(home_url('/contact')); ?>" class="integration-services-cta-btn">
            <span>ابدأ رحلتك معنا الآن!</span>
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" aria-hidden="true">
              <path d="M12 2L14 10L22 12L14 14L12 22L10 14L2 12L10 10L12 2Z" fill="currentColor"/>
            </svg>
          </a>
        </div>

      </div>
    </section>

    <!-- ===================== سيكشن 4: البرامج التدريبية المتاحة (Dark Programs Grid) ===================== -->
    <section class="training-programs" id="trainingPrograms">
      <!-- فيكتور الـ keyhole الكبير على الشمال full height -->
      <img src="<?php bk_icon('cta2-keyhole.png'); ?>" alt="" class="training-programs-keyhole" aria-hidden="true" />
      <div class="training-programs-container">

        <!-- الهيدر: عنوان أبيض (يمين) + خط أصفر + دائرة + وصف -->
        <header class="training-programs-head" id="trainingProgramsHead">
          <h2 class="training-programs-title">البرامج التدريبية المتاحة</h2>
          <img src="<?php bk_icon('heading-line.png'); ?>" alt="" class="heading-line training-programs-heading-line" aria-hidden="true" />
          <p class="training-programs-sub">
            كل برنامج مصمم ليناسب مرحلة مختلفة ويُحقق هدفاً محدداً. يمكن تخصيص أي برنامج حسب احتياج شركتك.
          </p>
        </header>

        <!-- الـ Grid: 2 أعمدة × 3 صفوف = 6 كروت -->
        <div class="training-programs-grid" id="trainingProgramsGrid">

          <!-- كارت 1: بناء الفريق التسويقي من الصفر [تأسيسي] -->
          <article class="training-programs-card" data-card="0">
            <span class="training-programs-card-badge">تأسيسي</span>
            <div class="training-programs-card-body">
              <h3 class="training-programs-card-title">بناء الفريق التسويقي من الصفر</h3>
              <p class="training-programs-card-desc">للشركات التي لا يوجد لديها فريق تسويقي أو تريد إعادة هيكلته بشكل صحيح</p>
              <div class="training-programs-card-features">
                <div class="training-programs-card-feature"><span class="dot"></span>سياسات الفريق</div>
                <div class="training-programs-card-feature"><span class="dot"></span>تحديد الأدوار والهيكل</div>
                <div class="training-programs-card-feature"><span class="dot"></span>آليات التنسيق</div>
                <div class="training-programs-card-feature"><span class="dot"></span>معايير التوظيف</div>
              </div>
            </div>
            <div class="training-programs-card-footer">
              <div class="training-programs-card-meta">
                <span class="meta-item"><svg width="14" height="14" viewBox="0 0 24 24" fill="none"><circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="2"/><path d="M12 7V12L15 14" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg> 3-2 أيام</span>
                <span class="meta-item"><svg width="14" height="14" viewBox="0 0 24 24" fill="none"><circle cx="9" cy="8" r="3" stroke="currentColor" stroke-width="2"/><path d="M3 19C3 15.69 5.69 13 9 13C10.5 13 11.5 13.5 12.5 14.5" stroke="currentColor" stroke-width="2" stroke-linecap="round"/><circle cx="17" cy="9" r="2.5" stroke="currentColor" stroke-width="2"/></svg> حضوري / أونلاين</span>
              </div>
              <a href="<?php echo esc_url(home_url('/contact')); ?>" class="training-programs-card-link">تواصل معنا الآن!
                <svg width="14" height="14" viewBox="0 0 20 20" fill="none"><path d="M16.6666 10H3.33331M8.33331 5L3.33331 10L8.33331 15" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
              </a>
            </div>
          </article>

          <!-- كارت 2: الاستراتيجية التسويقية للفريق [تأسيسي] -->
          <article class="training-programs-card" data-card="1">
            <span class="training-programs-card-badge">تأسيسي</span>
            <div class="training-programs-card-body">
              <h3 class="training-programs-card-title">الاستراتيجية التسويقية للفريق</h3>
              <p class="training-programs-card-desc">يُعلّم الفريق كيف يفكر استراتيجياً ويبني خطط تسويقية مبنية على بيانات وأهداف</p>
              <div class="training-programs-card-features">
                <div class="training-programs-card-feature"><span class="dot"></span>تحليل السوق والمنافسين</div>
                <div class="training-programs-card-feature"><span class="dot"></span>تحديد الجمهور</div>
                <div class="training-programs-card-feature"><span class="dot"></span>بناء الخطة التسويقية</div>
                <div class="training-programs-card-feature"><span class="dot"></span>المزيج التسويقي</div>
              </div>
            </div>
            <div class="training-programs-card-footer">
              <div class="training-programs-card-meta">
                <span class="meta-item"><svg width="14" height="14" viewBox="0 0 24 24" fill="none"><circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="2"/><path d="M12 7V12L15 14" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg> 5-3 أيام</span>
                <span class="meta-item"><svg width="14" height="14" viewBox="0 0 24 24" fill="none"><circle cx="9" cy="8" r="3" stroke="currentColor" stroke-width="2"/><path d="M3 19C3 15.69 5.69 13 9 13C10.5 13 11.5 13.5 12.5 14.5" stroke="currentColor" stroke-width="2" stroke-linecap="round"/><circle cx="17" cy="9" r="2.5" stroke="currentColor" stroke-width="2"/></svg> حضوري / أونلاين</span>
              </div>
              <a href="<?php echo esc_url(home_url('/contact')); ?>" class="training-programs-card-link">تواصل معنا الآن!
                <svg width="14" height="14" viewBox="0 0 20 20" fill="none"><path d="M16.6666 10H3.33331M8.33331 5L3.33331 10L8.33331 15" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
              </a>
            </div>
          </article>

          <!-- كارت 3: التسويق الرقمي المتكامل [تخصصي] -->
          <article class="training-programs-card" data-card="2">
            <span class="training-programs-card-badge badge--specialized">تخصصي</span>
            <div class="training-programs-card-body">
              <h3 class="training-programs-card-title">التسويق الرقمي المتكامل</h3>
              <p class="training-programs-card-desc">تدريب عملي على منظومة القنوات الرقمية وكيف تتكامل لتحقيق الأهداف</p>
              <div class="training-programs-card-features">
                <div class="training-programs-card-feature"><span class="dot"></span>إعلانات ممولة</div>
                <div class="training-programs-card-feature"><span class="dot"></span>محتوى رقمي</div>
                <div class="training-programs-card-feature"><span class="dot"></span>إدارة السوشيال</div>
                <div class="training-programs-card-feature"><span class="dot"></span>تحليل البيانات</div>
              </div>
            </div>
            <div class="training-programs-card-footer">
              <div class="training-programs-card-meta">
                <span class="meta-item"><svg width="14" height="14" viewBox="0 0 24 24" fill="none"><circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="2"/><path d="M12 7V12L15 14" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg> 6-4 أيام</span>
                <span class="meta-item"><svg width="14" height="14" viewBox="0 0 24 24" fill="none"><circle cx="9" cy="8" r="3" stroke="currentColor" stroke-width="2"/><path d="M3 19C3 15.69 5.69 13 9 13C10.5 13 11.5 13.5 12.5 14.5" stroke="currentColor" stroke-width="2" stroke-linecap="round"/><circle cx="17" cy="9" r="2.5" stroke="currentColor" stroke-width="2"/></svg> حضوري / أونلاين</span>
              </div>
              <a href="<?php echo esc_url(home_url('/contact')); ?>" class="training-programs-card-link">تواصل معنا الآن!
                <svg width="14" height="14" viewBox="0 0 20 20" fill="none"><path d="M16.6666 10H3.33331M8.33331 5L3.33331 10L8.33331 15" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
              </a>
            </div>
          </article>

          <!-- كارت 4: إدارة المحتوى والعلامة التجارية [تخصصي] -->
          <article class="training-programs-card" data-card="3">
            <span class="training-programs-card-badge badge--specialized">تخصصي</span>
            <div class="training-programs-card-body">
              <h3 class="training-programs-card-title">إدارة المحتوى والعلامة التجارية</h3>
              <p class="training-programs-card-desc">إدارة المحتوى والعلامة التجارية بشكل احترافي ومتكامل</p>
              <div class="training-programs-card-features">
                <div class="training-programs-card-feature"><span class="dot"></span>استراتيجية المحتوى</div>
                <div class="training-programs-card-feature"><span class="dot"></span>الكتابة الإبداعية</div>
                <div class="training-programs-card-feature"><span class="dot"></span>هوية العلامة</div>
                <div class="training-programs-card-feature"><span class="dot"></span>تقويم المحتوى</div>
              </div>
            </div>
            <div class="training-programs-card-footer">
              <div class="training-programs-card-meta">
                <span class="meta-item"><svg width="14" height="14" viewBox="0 0 24 24" fill="none"><circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="2"/><path d="M12 7V12L15 14" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg> 5-3 أيام</span>
                <span class="meta-item"><svg width="14" height="14" viewBox="0 0 24 24" fill="none"><circle cx="9" cy="8" r="3" stroke="currentColor" stroke-width="2"/><path d="M3 19C3 15.69 5.69 13 9 13C10.5 13 11.5 13.5 12.5 14.5" stroke="currentColor" stroke-width="2" stroke-linecap="round"/><circle cx="17" cy="9" r="2.5" stroke="currentColor" stroke-width="2"/></svg> حضوري / أونلاين</span>
              </div>
              <a href="<?php echo esc_url(home_url('/contact')); ?>" class="training-programs-card-link">تواصل معنا الآن!
                <svg width="14" height="14" viewBox="0 0 20 20" fill="none"><path d="M16.6666 10H3.33331M8.33331 5L3.33331 10L8.33331 15" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
              </a>
            </div>
          </article>

          <!-- كارت 5: قياس الأداء التسويقي و KPIs [تخصصي] -->
          <article class="training-programs-card" data-card="4">
            <span class="training-programs-card-badge badge--specialized">تخصصي</span>
            <div class="training-programs-card-body">
              <h3 class="training-programs-card-title">قياس الأداء التسويقي و KPIs</h3>
              <p class="training-programs-card-desc">يُعلّم الفريق كيف يقيس النتائج بشكل صحيح ويتخذ قرارات مبنية على بيانات حقيقية</p>
              <div class="training-programs-card-features">
                <div class="training-programs-card-feature"><span class="dot"></span>تحديد KPIs</div>
                <div class="training-programs-card-feature"><span class="dot"></span>لوحات تحكم</div>
                <div class="training-programs-card-feature"><span class="dot"></span>تحليل الحملات</div>
                <div class="training-programs-card-feature"><span class="dot"></span>تقارير الأداء</div>
              </div>
            </div>
            <div class="training-programs-card-footer">
              <div class="training-programs-card-meta">
                <span class="meta-item"><svg width="14" height="14" viewBox="0 0 24 24" fill="none"><circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="2"/><path d="M12 7V12L15 14" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg> يومان</span>
                <span class="meta-item"><svg width="14" height="14" viewBox="0 0 24 24" fill="none"><circle cx="9" cy="8" r="3" stroke="currentColor" stroke-width="2"/><path d="M3 19C3 15.69 5.69 13 9 13C10.5 13 11.5 13.5 12.5 14.5" stroke="currentColor" stroke-width="2" stroke-linecap="round"/><circle cx="17" cy="9" r="2.5" stroke="currentColor" stroke-width="2"/></svg> حضوري / أونلاين</span>
              </div>
              <a href="<?php echo esc_url(home_url('/contact')); ?>" class="training-programs-card-link">تواصل معنا الآن!
                <svg width="14" height="14" viewBox="0 0 20 20" fill="none"><path d="M16.6666 10H3.33331M8.33331 5L3.33331 10L8.33331 15" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
              </a>
            </div>
          </article>

          <!-- كارت 6: البرنامج الشامل [متكامل] -->
          <article class="training-programs-card" data-card="5">
            <span class="training-programs-card-badge badge--integrated">متكامل</span>
            <div class="training-programs-card-body">
              <h3 class="training-programs-card-title">البرنامج الشامل – تحويل الفريق</h3>
              <p class="training-programs-card-desc">برنامج موسع يجمع التأسيس والاستراتيجية والتطبيق – مخصص لمن يريد تحولاً حقيقياً</p>
              <div class="training-programs-card-features">
                <div class="training-programs-card-feature"><span class="dot"></span>جميع المحاور السابقة</div>
                <div class="training-programs-card-feature"><span class="dot"></span>متابعة بعد التدريب</div>
                <div class="training-programs-card-feature"><span class="dot"></span>مشاريع تطبيقية</div>
              </div>
            </div>
            <div class="training-programs-card-footer">
              <div class="training-programs-card-meta">
                <span class="meta-item"><svg width="14" height="14" viewBox="0 0 24 24" fill="none"><circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="2"/><path d="M12 7V12L15 14" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg> 8-4 أسابيع</span>
                <span class="meta-item"><svg width="14" height="14" viewBox="0 0 24 24" fill="none"><circle cx="9" cy="8" r="3" stroke="currentColor" stroke-width="2"/><path d="M3 19C3 15.69 5.69 13 9 13C10.5 13 11.5 13.5 12.5 14.5" stroke="currentColor" stroke-width="2" stroke-linecap="round"/><circle cx="17" cy="9" r="2.5" stroke="currentColor" stroke-width="2"/></svg> حضوري / أونلاين / هجين</span>
              </div>
              <a href="<?php echo esc_url(home_url('/contact')); ?>" class="training-programs-card-link">تواصل معنا الآن!
                <svg width="14" height="14" viewBox="0 0 20 20" fill="none"><path d="M16.6666 10H3.33331M8.33331 5L3.33331 10L8.33331 15" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
              </a>
            </div>
          </article>

        </div>

        <!-- الـ Footer: سطر رمادي فاتح + زرار أصفر ممركز -->
        <div class="training-programs-cta" id="trainingProgramsCta">
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

    <!-- ===================== سيكشن 5: من يقود هذه البرامج؟ (Team Slider) ===================== -->
    <section class="about-team training-team" id="trainingTeam">
      <div class="about-team-container">

        <!-- رأس السيكشن (تايتل + لاين + ديسكربشن) -->
        <header class="about-team-head" id="trainingTeamHead">
          <h2 class="about-team-title">من يقود هذه البرامج؟</h2>
          <img src="<?php bk_icon('heading-line.png'); ?>" alt="" class="heading-line about-team-heading-line" aria-hidden="true" />
          <p class="about-team-desc">
            نحن لسنا مجرد أفراد يؤدون مهاماً منفصلة، بل نحن فريق متكامل يعمل بروح الشراكة. يجمعنا هدف واحد: تحويل التحديات التقنية والتسويقية المعقدة إلى نتائج ملموسة تدفع عملك نحو الريادة.
          </p>
        </header>

        <!-- سلايدر التيم — 3 أشخاص -->
        <div class="about-team-slider" id="trainingTeamSlider" aria-roledescription="carousel" aria-label="مدربو براند كي">
          <div class="about-team-viewport" id="trainingTeamViewport">
            <div class="about-team-track" id="trainingTeamTrack">

              <!-- مدرب 1 -->
              <article class="about-team-card" data-index="0">
                <div class="about-team-card-photo" style="background-image: url('icons/team-member.png');"></div>
                <div class="about-team-card-overlay"></div>
                <div class="about-team-card-info">
                  <h3 class="about-team-card-name">أحمد</h3>
                  <p class="about-team-card-role">مدير البرامج التدريبية</p>
                </div>
              </article>

              <!-- مدرب 2 -->
              <article class="about-team-card" data-index="1">
                <div class="about-team-card-photo" style="background-image: url('icons/team-member.png');"></div>
                <div class="about-team-card-overlay"></div>
                <div class="about-team-card-info">
                  <h3 class="about-team-card-name">جاك</h3>
                  <p class="about-team-card-role">مدرب الاستراتيجية التسويقية</p>
                </div>
              </article>

              <!-- مدرب 3 -->
              <article class="about-team-card" data-index="2">
                <div class="about-team-card-photo" style="background-image: url('icons/team-member.png');"></div>
                <div class="about-team-card-overlay"></div>
                <div class="about-team-card-info">
                  <h3 class="about-team-card-name">توماس</h3>
                  <p class="about-team-card-role">مدرب التسويق الرقمي</p>
                </div>
              </article>

            </div>
          </div>

          <!-- أزرار التحكم: سهم + نقاط + سهم -->
          <div class="about-team-controls" id="trainingTeamControls">
            <button class="about-team-arrow about-team-arrow--prev" id="trainingTeamPrev" aria-label="السابق" type="button">
              <img src="<?php bk_icon('arrow-active.svg'); ?>" alt="" />
            </button>
            <div class="about-team-dots" id="trainingTeamDots" role="tablist" aria-label="اختيار المدرب"></div>
            <button class="about-team-arrow about-team-arrow--next" id="trainingTeamNext" aria-label="التالي" type="button">
              <img src="<?php bk_icon('arrow-active.svg'); ?>" alt="" class="about-team-arrow-flip" />
            </button>
          </div>

        </div>

      </div>
    </section>

    <!-- ===================== سيكشن 6: من طلبك حتى ختام التدريب (Method - 5 خطوات) ===================== -->
    <section class="how training-method" id="trainingMethod">
      <div class="how-container">

        <!-- رأس السيكشن (عنوان + خط + وصف) -->
        <header class="how-head" id="trainingMethodHead">
          <h2 class="how-title">من طلبك حتى ختام التدريب</h2>
          <img src="<?php bk_icon('heading-line.png'); ?>" alt="" class="heading-line how-heading-line" aria-hidden="true" />
          <p class="how-desc">
            منهجية واضحة تضمن أن البرنامج مُصمَّم لشركتك تحديداً لا برنامجاً جاهزاً من رف:
          </p>
        </header>

        <!-- العمودين: إطار (شمال) + خطوات (يمين) -->
        <div class="how-grid">

          <!-- الإطار الزخرفي (keyhole + لوگو BK) على الشمال -->
          <div class="how-visual">
            <img src="<?php bk_icon('how-frame.svg'); ?>" alt="Brand Key" class="how-frame" />
          </div>

          <!-- الخطوات الـ 5 على اليمين -->
          <div class="how-steps training-method-steps" id="trainingMethodSteps">

            <!-- خطوة 01 -->
            <article class="how-step" data-step="0">
              <div class="how-step-num">01</div>
              <div class="how-step-body">
                <h3 class="how-step-title">جلسة تشخيص الاحتياج التدريبي</h3>
                <p class="how-step-desc">نبدأ بجلسة مع القيادة لفهم وضع الفريق الحالي وتحدياته وأهداف الشركة — لنبني على واقع لا افتراضات.</p>
              </div>
            </article>

            <!-- خطوة 02 -->
            <article class="how-step" data-step="1">
              <div class="how-step-num">02</div>
              <div class="how-step-body">
                <h3 class="how-step-title">تصميم البرنامج المُخصّص</h3>
                <p class="how-step-desc">نختار البرامج والمحاور المناسبة ونُعدّل المحتوى ليعكس طبيعة قطاعك وفريقك وأهدافك الفعلية.</p>
              </div>
            </article>

            <!-- خطوة 03 -->
            <article class="how-step" data-step="2">
              <div class="how-step-num">03</div>
              <div class="how-step-body">
                <h3 class="how-step-title">تنفيذ التدريب</h3>
                <p class="how-step-desc">جلسات تدريبية تفاعلية تجمع بين المفاهيم والتطبيق العملي — ورش عمل، حالات دراسية، تمارين على واقع الشركة.</p>
              </div>
            </article>

            <!-- خطوة 04 -->
            <article class="how-step" data-step="3">
              <div class="how-step-num">04</div>
              <div class="how-step-body">
                <h3 class="how-step-title">مشاريع تطبيقية</h3>
                <p class="how-step-desc">كل برنامج ينتهي بمشروع تطبيقي حقيقي ينفّذه الفريق على بيئة عمله الفعلية — لا مجرد تقييم نظري.</p>
              </div>
            </article>

            <!-- خطوة 05 -->
            <article class="how-step" data-step="4">
              <div class="how-step-num">05</div>
              <div class="how-step-body">
                <h3 class="how-step-title">متابعة ما بعد التدريب</h3>
                <p class="how-step-desc">جلسة متابعة بعد 30 يوماً لقياس الأثر الفعلي على الأداء والإجابة على أي تساؤلات طارئة بعد التطبيق.</p>
              </div>
            </article>

          </div>

        </div>

      </div>
    </section>

    <!-- ===================== سيكشن 7: ما الذي تحصل عليه شركتك؟ (Dark Benefits Grid) ===================== -->
    <section class="integration-deliverables training-benefits" id="trainingBenefits">
      <div class="integration-deliverables-container">

        <!-- الهيدر: عنوان أبيض ممركز + خط أصفر + دائرة -->
        <header class="integration-deliverables-head" id="trainingBenefitsHead">
          <h2 class="integration-deliverables-title">ما الذي تحصل عليه شركتك؟</h2>
          <img src="<?php bk_icon('heading-line.png'); ?>" alt="" class="heading-line integration-deliverables-heading-line" aria-hidden="true" />
        </header>

        <!-- الـ Grid: 6 كروت في صف أفقي -->
        <div class="integration-deliverables-grid training-benefits-grid" id="trainingBenefitsGrid">

          <!-- كارت 1 -->
          <article class="integration-deliverables-card" data-card="0">
            <div class="integration-deliverables-card-icon" aria-hidden="true">
              <svg width="32" height="32" viewBox="0 0 24 24" fill="none">
                <circle cx="9" cy="8" r="3" stroke="currentColor" stroke-width="1.8"/>
                <path d="M3 19C3 15.69 5.69 13 9 13C10.5 13 11.5 13.5 12.5 14.5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
                <circle cx="17" cy="9" r="2.5" stroke="currentColor" stroke-width="1.8"/>
                <path d="M11 19C11 16.51 13.51 14.5 17 14.5C20.49 14.5 23 16.51 23 19" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
              </svg>
            </div>
            <h3 class="integration-deliverables-card-title">فريق تسويقي يفهم دوره ويعمل بمنهجية واضحة</h3>
          </article>

          <!-- كارت 2 -->
          <article class="integration-deliverables-card" data-card="1">
            <div class="integration-deliverables-card-icon" aria-hidden="true">
              <svg width="32" height="32" viewBox="0 0 24 24" fill="none">
                <path d="M12 2C7.58 2 4 5.58 4 10C4 14.42 7.58 18 12 18C16.42 18 20 14.42 20 10C20 5.58 16.42 2 12 2Z" stroke="currentColor" stroke-width="1.8"/>
                <path d="M2 10H6M18 10H22M12 2V6M12 14V18" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
                <path d="M9 10H15M12 7V13" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
              </svg>
            </div>
            <h3 class="integration-deliverables-card-title">ثقافة تسويقية حقيقية داخل المؤسسة</h3>
          </article>

          <!-- كارت 3 -->
          <article class="integration-deliverables-card" data-card="2">
            <div class="integration-deliverables-card-icon" aria-hidden="true">
              <svg width="32" height="32" viewBox="0 0 24 24" fill="none">
                <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="1.8"/>
                <circle cx="12" cy="12" r="6" stroke="currentColor" stroke-width="1.8"/>
                <circle cx="12" cy="12" r="2" stroke="currentColor" stroke-width="1.8"/>
                <path d="M12 2L14 10L12 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" fill="none"/>
              </svg>
            </div>
            <h3 class="integration-deliverables-card-title">فريق يربط عمله بالأهداف والنتائج لا فقط المهام</h3>
          </article>

          <!-- كارت 4 -->
          <article class="integration-deliverables-card" data-card="3">
            <div class="integration-deliverables-card-icon" aria-hidden="true">
              <svg width="32" height="32" viewBox="0 0 24 24" fill="none">
                <rect x="3" y="14" width="4" height="7" stroke="currentColor" stroke-width="1.8"/>
                <rect x="10" y="10" width="4" height="11" stroke="currentColor" stroke-width="1.8"/>
                <rect x="17" y="6" width="4" height="15" stroke="currentColor" stroke-width="1.8"/>
                <path d="M3 11L10 7L17 3" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
                <path d="M17 3H20V6" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
              </svg>
            </div>
            <h3 class="integration-deliverables-card-title">أداء تسويقي قابل للقياس والتحسين المستمر</h3>
          </article>

          <!-- كارت 5 -->
          <article class="integration-deliverables-card" data-card="4">
            <div class="integration-deliverables-card-icon" aria-hidden="true">
              <svg width="32" height="32" viewBox="0 0 24 24" fill="none">
                <path d="M14 2H6C4.9 2 4 2.9 4 4V20C4 21.1 4.9 22 6 22H18C19.1 22 20 21.1 20 20V8L14 2Z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/>
                <path d="M14 2V8H20" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/>
                <path d="M8 13L11 16L16 11" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
              </svg>
            </div>
            <h3 class="integration-deliverables-card-title">شهادات اجتياز للمتدربين وتقارير أداء للإدارة</h3>
          </article>

          <!-- كارت 6 -->
          <article class="integration-deliverables-card" data-card="5">
            <div class="integration-deliverables-card-icon" aria-hidden="true">
              <svg width="32" height="32" viewBox="0 0 24 24" fill="none">
                <path d="M2 12C2 12 5 5 12 5C19 5 22 12 22 12C22 12 19 19 12 19C5 19 2 12 2 12Z" stroke="currentColor" stroke-width="1.8"/>
                <circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="1.8"/>
              </svg>
            </div>
            <h3 class="integration-deliverables-card-title">شراكة مستمرة مع مدرب متخصص يعرف مشروعك</h3>
          </article>

        </div>

        <!-- الـ Footer: سطر رمادي فاتح + زرار أصفر ممركز -->
        <div class="integration-deliverables-cta" id="trainingBenefitsCta">
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
