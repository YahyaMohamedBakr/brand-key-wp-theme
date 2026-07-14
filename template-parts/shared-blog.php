<?php
/**
 * سيكشن مشترك: blog
 * @package BrandKey
 */
?>
  <section class="blog" id="blog">
    <div class="blog-container">

      <!-- رأس السيكشن: العنوان + الوصف على اليمين، زر المزيد على الشمال -->
      <header class="blog-head" id="blogHead">
        <div class="blog-head-text">
          <h2 class="blog-title">آخر أخبارنا</h2>
          <img src="<?php bk_icon('heading-line.png'); ?>" alt="" class="heading-line blog-heading-line" aria-hidden="true" />
          <p class="blog-desc">نحن فخورون للغاية بثقة عملائنا المميزين، ونسعى دائمًا لتلبية توقعاتهم.</p>
        </div>
        <a href="#" class="blog-more-link">
          <span>المزيد</span>
          <img src="<?php bk_icon('more-arrow.svg'); ?>" alt="" />
        </a>
      </header>

      <!-- كروت البلوج (3 كروت) -->
      <div class="blog-grid" id="blogGrid">

        <!-- كرت 1 -->
        <article class="blog-card" data-card="0">
          <div class="blog-card-visual">
            <img src="<?php bk_icon('blog-1.png'); ?>" alt="شراكة استراتيجية جديدة" class="blog-card-img" />
            <span class="blog-card-badge">الجديد</span>
          </div>
          <div class="blog-card-body">
            <h3 class="blog-card-title">تعلن عن شراكة استراتيجية جديدة لتوسيع خدمات الحلول الرقمية.</h3>
            <p class="blog-card-excerpt">انطلاقاً من رؤيتنا للتكامل، وقعنا اتفاقية تعاون لتقديم خدمات برمجية متقدمة لعملائنا في المنطقة.</p>
            <div class="blog-card-footer">
              <span class="blog-card-date">20 يوليو 2025</span>
              <a href="#" class="blog-card-link">
                <span>المزيد</span>
                <img src="<?php bk_icon('gold-arrow.svg'); ?>" alt="" />
              </a>
            </div>
          </div>
        </article>

        <!-- كرت 2 -->
        <article class="blog-card" data-card="1">
          <div class="blog-card-visual">
            <img src="<?php bk_icon('blog-2.png'); ?>" alt="سيكولوجية الألوان" class="blog-card-img" />
            <span class="blog-card-badge">الجديد</span>
          </div>
          <div class="blog-card-body">
            <h3 class="blog-card-title">سيكولوجية الألوان: كيف تمنح علامتك التجارية طابع "الفخامة" و"الراحة"؟</h3>
            <p class="blog-card-excerpt">نغوص في دلالات الألوان وكيف نستخدم المساحات البيضاء لخلق شعور بالراحة والثقة لدى عملائك، تماماً كما نفعل في هوياتنا.</p>
            <div class="blog-card-footer">
              <span class="blog-card-date">20 يوليو 2025</span>
              <a href="#" class="blog-card-link">
                <span>المزيد</span>
                <img src="<?php bk_icon('gold-arrow.svg'); ?>" alt="" />
              </a>
            </div>
          </div>
        </article>

        <!-- كرت 3 -->
        <article class="blog-card" data-card="2">
          <div class="blog-card-visual">
            <img src="<?php bk_icon('blog-3.png'); ?>" alt="كتاب تعليمي تفاعلي" class="blog-card-img" />
            <span class="blog-card-badge">الجديد</span>
          </div>
          <div class="blog-card-body">
            <h3 class="blog-card-title">كيف تصمم كتابًا تعليميًا تفاعليًا يجذب الطلاب ويحفزهم على التعلم؟</h3>
            <p class="blog-card-excerpt">تعرف على أهم القواعد لتنسيق الكتب المدرسية وتصميمها بلغات متعددة لضمان سهولة القراءة وتوصيل المعلومة بفعالية.</p>
            <div class="blog-card-footer">
              <span class="blog-card-date">20 يوليو 2025</span>
              <a href="#" class="blog-card-link">
                <span>المزيد</span>
                <img src="<?php bk_icon('gold-arrow.svg'); ?>" alt="" />
              </a>
            </div>
          </div>
        </article>

      </div>

    </div>
  </section>
