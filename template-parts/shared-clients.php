<?php
/**
 * سيكشن مشترك: clients
 * @package BrandKey
 */
?>
  <section class="clients" id="clients">
    <div class="clients-container">

      <!-- رأس السيكشن (عنوان + خط + وصف) في النص -->
      <header class="clients-head" id="clientsHead">
        <h2 class="clients-title">عملاء وثقوا فينا</h2>
        <img src="<?php bk_icon('heading-line.png'); ?>" alt="" class="heading-line clients-heading-line" aria-hidden="true" />
        <p class="clients-desc">
          من الشركات الناشئة للمؤسسات الكبرى — كل عميل كان تحدياً جديداً وقصة نجاح نفخر بها
        </p>
      </header>

      <!-- سلايدر العملاء (صفين رايح وجاي عكس بعض) -->
      <div class="clients-marquee" id="clientsMarquee">

        <!-- الصف الأول: رايح من اليمين للشمال -->
        <div class="clients-row clients-row--rtl">
          <div class="clients-track">
            <!-- المجموعة الأولى -->
            <div class="client-logo"><img src="<?php bk_icon('client-1.png'); ?>" alt="عميل" /></div>
            <div class="client-logo"><img src="<?php bk_icon('client-2.png'); ?>" alt="عميل" /></div>
            <div class="client-logo"><img src="<?php bk_icon('client-3.png'); ?>" alt="عميل" /></div>
            <div class="client-logo"><img src="<?php bk_icon('client-4.png'); ?>" alt="عميل" /></div>
            <!-- المجموعة الثانية (مكررة للـ loop) -->
            <div class="client-logo"><img src="<?php bk_icon('client-1.png'); ?>" alt="عميل" /></div>
            <div class="client-logo"><img src="<?php bk_icon('client-2.png'); ?>" alt="عميل" /></div>
            <div class="client-logo"><img src="<?php bk_icon('client-3.png'); ?>" alt="عميل" /></div>
            <div class="client-logo"><img src="<?php bk_icon('client-4.png'); ?>" alt="عميل" /></div>
            <!-- المجموعة الثالثة (مكررة عشان ميبقاش فراغ) -->
            <div class="client-logo"><img src="<?php bk_icon('client-1.png'); ?>" alt="عميل" /></div>
            <div class="client-logo"><img src="<?php bk_icon('client-2.png'); ?>" alt="عميل" /></div>
            <div class="client-logo"><img src="<?php bk_icon('client-3.png'); ?>" alt="عميل" /></div>
            <div class="client-logo"><img src="<?php bk_icon('client-4.png'); ?>" alt="عميل" /></div>
          </div>
        </div>

        <!-- الصف الثاني: جاي من الشمال لليمين -->
        <div class="clients-row clients-row--ltr">
          <div class="clients-track">
            <!-- المجموعة الأولى -->
            <div class="client-logo"><img src="<?php bk_icon('client-5.png'); ?>" alt="عميل" /></div>
            <div class="client-logo"><img src="<?php bk_icon('client-6.png'); ?>" alt="عميل" /></div>
            <div class="client-logo"><img src="<?php bk_icon('client-7.png'); ?>" alt="عميل" /></div>
            <div class="client-logo"><img src="<?php bk_icon('client-8.png'); ?>" alt="عميل" /></div>
            <!-- المجموعة الثانية (مكررة للـ loop) -->
            <div class="client-logo"><img src="<?php bk_icon('client-5.png'); ?>" alt="عميل" /></div>
            <div class="client-logo"><img src="<?php bk_icon('client-6.png'); ?>" alt="عميل" /></div>
            <div class="client-logo"><img src="<?php bk_icon('client-7.png'); ?>" alt="عميل" /></div>
            <div class="client-logo"><img src="<?php bk_icon('client-8.png'); ?>" alt="عميل" /></div>
            <!-- المجموعة الثالثة (مكررة عشان ميبقاش فراغ) -->
            <div class="client-logo"><img src="<?php bk_icon('client-5.png'); ?>" alt="عميل" /></div>
            <div class="client-logo"><img src="<?php bk_icon('client-6.png'); ?>" alt="عميل" /></div>
            <div class="client-logo"><img src="<?php bk_icon('client-7.png'); ?>" alt="عميل" /></div>
            <div class="client-logo"><img src="<?php bk_icon('client-8.png'); ?>" alt="عميل" /></div>
          </div>
        </div>

      </div>

    </div>
  </section>
