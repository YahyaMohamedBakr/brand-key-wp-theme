<?php
/**
 * سيكشن مشترك: testimonials
 * @package BrandKey
 */
?>
  <section class="testimonials" id="testimonials">
    <div class="testimonials-container">

      <!-- رأس السيكشن (عنوان + خط + وصف) في النص -->
      <header class="testimonials-head" id="testimonialsHead">
        <h2 class="testimonials-title">ماذا يقول عملاؤنا</h2>
        <img src="<?php bk_icon('heading-line.png'); ?>" alt="" class="heading-line testimonials-heading-line" aria-hidden="true" />
        <p class="testimonials-desc">
          إن نجاحهم يعد المعيار الحقيقي لجودة خدماتنا ومنتجاتنا
        </p>
      </header>

      <!-- الكروت -->
      <div class="testimonials-grid" id="testimonialsGrid">

        <!-- كرت 1 -->
        <article class="testimonial-card" data-card="0">
          <img src="<?php bk_icon('quote-keys.svg'); ?>" alt="" class="testimonial-quote" aria-hidden="true" />
          <p class="testimonial-text">
            كنت خايفة أبدأ في التسويق الرقمي وأخسر فلوس من غير نتيجة — براند كي وضحولي كل خطوة وقدموا تقارير شفافة كل أسبوع. ده مش شغل وكالة عادية
          </p>
          <div class="testimonial-stars" aria-label="5 من 5">
            <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
          </div>
          <div class="testimonial-author">
            <div class="testimonial-avatar">خ</div>
            <div class="testimonial-author-info">
              <h4 class="testimonial-name">خالد حسن</h4>
              <p class="testimonial-role">مدير علامة تجارية مستقل</p>
            </div>
          </div>
        </article>

        <!-- كرت 2 -->
        <article class="testimonial-card" data-card="1">
          <img src="<?php bk_icon('quote-keys.svg'); ?>" alt="" class="testimonial-quote" aria-hidden="true" />
          <p class="testimonial-text">
            الشيء اللي يميز براند كي إنهم بيفهموا عملك الأول قبل ما يبدأوا — مش بيبيعوا خدمات، بيقدموا حلول
          </p>
          <div class="testimonial-stars" aria-label="5 من 5">
            <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
          </div>
          <div class="testimonial-author">
            <div class="testimonial-avatar">س</div>
            <div class="testimonial-author-info">
              <h4 class="testimonial-name">سارة علي</h4>
              <p class="testimonial-role">مديرة التسويق، متجر الأناقة</p>
            </div>
          </div>
        </article>

        <!-- كرت 3 -->
        <article class="testimonial-card" data-card="2">
          <img src="<?php bk_icon('quote-keys.svg'); ?>" alt="" class="testimonial-quote" aria-hidden="true" />
          <p class="testimonial-text">
            براند كي غيّرت صورة شركتنا الرقمية بالكامل — خلال 3 شهور بس حسينا بفرق حقيقي في الاستفسارات والمبيعات
          </p>
          <div class="testimonial-stars" aria-label="5 من 5">
            <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
          </div>
          <div class="testimonial-author">
            <div class="testimonial-avatar">أ</div>
            <div class="testimonial-author-info">
              <h4 class="testimonial-name">أحمد محمد</h4>
              <p class="testimonial-role">الرئيس التنفيذي، شركة النجاح</p>
            </div>
          </div>
        </article>

      </div>

      <!-- أسهم التنقل -->
      <div class="testimonials-nav" id="testimonialsNav">
        <button class="testimonial-nav-btn" id="testPrev" aria-label="السابق">
          <img src="<?php bk_icon('arrow-active.svg'); ?>" alt="" />
        </button>
        <div class="testimonials-dots" id="testDots">
          <span class="testimonial-dot active" data-dot="0"></span>
          <span class="testimonial-dot" data-dot="1"></span>
          <span class="testimonial-dot" data-dot="2"></span>
        </div>
        <button class="testimonial-nav-btn" id="testNext" aria-label="التالي">
          <img src="<?php bk_icon('arrow-inactive.svg'); ?>" alt="" />
        </button>
      </div>

    </div>
  </section>
