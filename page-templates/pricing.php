<?php
/**
 * Template Name: الباقات والأسعار
 * مطابق للتمبلت بالظبط
 * @package BrandKey
 */
get_header();

$hero_data = array(
  'title'        => 'باقات مرنة لكل مرحلة من رحلتك',
  'desc'         => 'اختر الباقة التي تناسب احتياجاتك وميزانيتك. كل باقاتنا قابلة للتخصيص لتلبي متطلبات عملك بدقة.',
  'primary_text' => 'ابدأ الآن',
  'primary_href' => home_url( '/contact' ),
  'ghost_text'   => 'قارن الباقات',
  'ghost_href'   => '#',
);
set_query_var( 'bk_inner_hero', $hero_data );
?>

<main class="page-content" id="pageContent">

    <!-- ===================== سيكشن الباقات والأسعار + Toggle شهري/سنوي ===================== -->
    <section class="pricing pricing-page" id="pricingPage">
      <div class="pricing-container">

        <!-- Toggle: شهري / سنوي -->
        <div class="pricing-toggle" id="pricingToggle">
          <button class="pricing-toggle-btn active" data-period="monthly" type="button">
            <span>الدفع الشهري</span>
          </button>
          <button class="pricing-toggle-btn" data-period="yearly" type="button">
            <span>الدفع السنوي</span>
            <span class="pricing-toggle-discount">خصم 20%</span>
          </button>
        </div>

        <!-- الباقات (3 كروت) -->
        <div class="pricing-grid" id="pricingGrid">

          <!-- باقة 1 (يمين): باقة التأسيس -->
          <article class="pricing-card" data-card="0">
            <img src="<?php bk_icon('pricing-frame.svg'); ?>" alt="" class="pricing-card-frame" aria-hidden="true" />
            <img src="<?php bk_icon('pricing-key.svg'); ?>" alt="" class="pricing-card-key" aria-hidden="true" />
            <div class="pricing-card-body">
              <h3 class="pricing-card-name">باقة التأسيس</h3>
              <p class="pricing-card-label">تبدأ من</p>
              <div class="pricing-card-price">
                <span class="pricing-card-currency"><img src="<?php bk_icon('riyal.svg'); ?>" alt="" /></span>
                <span class="pricing-card-amount" data-monthly="2,999" data-yearly="2,399">2,999</span>
                <span class="pricing-card-period" data-monthly="/شهرياً" data-yearly="/شهرياً">/شهرياً</span>
              </div>
              <ul class="pricing-card-features">
                <li><img src="<?php bk_icon('feature-check.svg'); ?>" alt="" /><span>إدارة المحتوى</span></li>
                <li><img src="<?php bk_icon('feature-check.svg'); ?>" alt="" /><span>النمو الرقمي</span></li>
                <li><img src="<?php bk_icon('feature-check.svg'); ?>" alt="" /><span>صناعة المحتوى والقصص</span></li>
                <li><img src="<?php bk_icon('feature-check.svg'); ?>" alt="" /><span>مدير حساب مخصص والتحليلات</span></li>
                <li><img src="<?php bk_icon('feature-check.svg'); ?>" alt="" /><span>التصميم الاحترافي</span></li>
              </ul>
              <a href="#" class="pricing-card-btn">تواصل معنا للاشتراك</a>
            </div>
          </article>

          <!-- باقة 2 (وسط - ذهبية): باقة النمو -->
          <article class="pricing-card pricing-card--featured" data-card="1">
            <img src="<?php bk_icon('pricing-frame-golden.svg'); ?>" alt="" class="pricing-card-frame" aria-hidden="true" />
            <img src="<?php bk_icon('pricing-key.svg'); ?>" alt="" class="pricing-card-key" aria-hidden="true" />
            <span class="pricing-card-badge">الأكثر شعبية</span>
            <div class="pricing-card-body">
              <h3 class="pricing-card-name">باقة النمو</h3>
              <p class="pricing-card-label">تبدأ من</p>
              <div class="pricing-card-price">
                <span class="pricing-card-currency"><img src="<?php bk_icon('riyal.svg'); ?>" alt="" /></span>
                <span class="pricing-card-amount" data-monthly="5,999" data-yearly="4,799">5,999</span>
                <span class="pricing-card-period" data-monthly="/شهرياً" data-yearly="/شهرياً">/شهرياً</span>
              </div>
              <ul class="pricing-card-features">
                <li><img src="<?php bk_icon('feature-check.svg'); ?>" alt="" /><span>تحسين محركات البحث</span></li>
                <li><img src="<?php bk_icon('feature-check.svg'); ?>" alt="" /><span>إدارة الحملات الإعلانية وإدارة الإعلانات</span></li>
                <li><img src="<?php bk_icon('feature-check.svg'); ?>" alt="" /><span>صناعة محتوى المنصات الرقمية</span></li>
                <li><img src="<?php bk_icon('feature-check.svg'); ?>" alt="" /><span>متابعة المنصات الرقمية</span></li>
                <li><img src="<?php bk_icon('feature-check.svg'); ?>" alt="" /><span>تقديم التقارير الإحصائية</span></li>
              </ul>
              <a href="#" class="pricing-card-btn pricing-card-btn--gold">تواصل معنا للاشتراك</a>
            </div>
          </article>

          <!-- باقة 3 (يسار): باقة التمكين -->
          <article class="pricing-card" data-card="2">
            <img src="<?php bk_icon('pricing-frame.svg'); ?>" alt="" class="pricing-card-frame" aria-hidden="true" />
            <img src="<?php bk_icon('pricing-key.svg'); ?>" alt="" class="pricing-card-key" aria-hidden="true" />
            <div class="pricing-card-body">
              <h3 class="pricing-card-name">باقة التمكين</h3>
              <p class="pricing-card-label">تبدأ من</p>
              <div class="pricing-card-price">
                <span class="pricing-card-currency"><img src="<?php bk_icon('riyal.svg'); ?>" alt="" /></span>
                <span class="pricing-card-amount" data-monthly="7,999" data-yearly="6,399">7,999</span>
                <span class="pricing-card-period" data-monthly="/شهرياً" data-yearly="/شهرياً">/شهرياً</span>
              </div>
              <ul class="pricing-card-features">
                <li><img src="<?php bk_icon('feature-check.svg'); ?>" alt="" /><span>الأساسي</span></li>
                <li><img src="<?php bk_icon('feature-check.svg'); ?>" alt="" /><span>إدارة حملة إعلانية واحدة</span></li>
                <li><img src="<?php bk_icon('feature-check.svg'); ?>" alt="" /><span>تقرير شهري مفصل</span></li>
                <li><img src="<?php bk_icon('feature-check.svg'); ?>" alt="" /><span>دعم فني عبر البريد الإلكتروني</span></li>
                <li><img src="<?php bk_icon('feature-check.svg'); ?>" alt="" /><span>استشارة شهرية واحدة</span></li>
              </ul>
              <a href="#" class="pricing-card-btn">تواصل معنا للاشتراك</a>
            </div>
          </article>

        </div>

      </div>
    </section>

    <!-- ===================== سيكشن 2: مقارنة تفصيلية بين الباقات ===================== -->
    <section class="pricing-compare" id="pricingCompare">
      <div class="pricing-compare-container">

        <!-- الهيدر -->
        <header class="pricing-compare-head" id="pricingCompareHead">
          <h2 class="pricing-compare-title">مقارنة تفصيلية بين الباقات</h2>
          <img src="<?php bk_icon('heading-line.png'); ?>" alt="" class="heading-line integration-services-heading-line" aria-hidden="true" />
          <p class="pricing-compare-sub">اختر الباقة المناسبة بناءً على احتياجاتك</p>
        </header>

        <!-- الجدول -->
        <div class="pricing-compare-table-wrap">
          <table class="pricing-compare-table">
            <thead>
              <tr>
                <th class="col-feature">المميزات</th>
                <th>الانطلاق</th>
                <th class="col-featured">النمو</th>
                <th>التمكين</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="col-feature">عدد منصات السوشيال ميديا</td>
                <td>2</td>
                <td class="col-featured">4</td>
                <td>جميع المنصات</td>
              </tr>
              <tr>
                <td class="col-feature">عدد التصاميم الشهرية</td>
                <td>8</td>
                <td class="col-featured">15</td>
                <td>غير محدود</td>
              </tr>
              <tr>
                <td class="col-feature">موشن جرافيك</td>
                <td><span class="cross">✕</span></td>
                <td class="col-featured">قصير (1)</td>
                <td>احترافي 60 ثانية</td>
              </tr>
              <tr>
                <td class="col-feature">إدارة الحملات الإعلانية</td>
                <td><span class="cross">✕</span></td>
                <td class="col-featured"><span class="check">✓</span></td>
                <td><span class="check">✓</span></td>
              </tr>
              <tr>
                <td class="col-feature">تحسين محركات البحث (SEO)</td>
                <td>أساسي</td>
                <td class="col-featured">متقدم</td>
                <td>متقدم + استشارات</td>
              </tr>
              <tr>
                <td class="col-feature">التقارير والتحليلات</td>
                <td>شهري PDF</td>
                <td class="col-featured">لوحة تحكم حية</td>
                <td>لوحة تحكم + تقارير مخصصة</td>
              </tr>
              <tr>
                <td class="col-feature">كتابة المحتوى القصصي</td>
                <td><span class="cross">✕</span></td>
                <td class="col-featured">4 حملات/شهر</td>
                <td>غير محدود</td>
              </tr>
              <tr>
                <td class="col-feature">مدير حساب خاص</td>
                <td><span class="cross">✕</span></td>
                <td class="col-featured"><span class="cross">✕</span></td>
                <td><span class="check">✓</span></td>
              </tr>
              <tr>
                <td class="col-feature">إدارة Google Grants</td>
                <td><span class="cross">✕</span></td>
                <td class="col-featured"><span class="cross">✕</span></td>
                <td><span class="check">✓</span></td>
              </tr>
              <tr>
                <td class="col-feature">تطوير تجربة المستخدم</td>
                <td><span class="cross">✕</span></td>
                <td class="col-featured">استشارات</td>
                <td>تطوير مستمر</td>
              </tr>
              <tr>
                <td class="col-feature">أولوية الدعم الفني</td>
                <td>عادي</td>
                <td class="col-featured">متوسط</td>
                <td>أولوية قصوى - VIP</td>
              </tr>
              <tr>
                <td class="col-feature">اجتماعات دورية</td>
                <td>شهرية</td>
                <td class="col-featured">أسبوعية</td>
                <td>حسب الطلب</td>
              </tr>
            </tbody>
          </table>
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
