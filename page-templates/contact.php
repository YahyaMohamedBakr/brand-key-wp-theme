<?php
/**
 * Template Name: تواصل معنا
 * مطابق للتمبلت بالظبط
 * @package BrandKey
 */
get_header();

$hero_data = array(
  'title'        => 'نحن هنا للإجابة على أسئلتك',
  'desc'         => 'تواصل مع فريقنا للحصول على استشارة مجانية، أو لمناقشة مشروعك القادم. سنعود إليك خلال 24 ساعة.',
  'primary_text' => 'أرسل رسالتك',
  'primary_href' => home_url( '/contact' ),
  'ghost_text'   => 'طرق التواصل',
  'ghost_href'   => '#',
);
set_query_var( 'bk_inner_hero', $hero_data );
?>

<main class="page-content" id="pageContent">
  <?php get_template_part( 'template-parts/inner-hero' ); ?>

    <!-- ===================== سيكشن 1: الفورم والتواصل ===================== -->
    <section class="contact-main" id="contactMain">
      <div class="contact-main-container">

        <!-- العمود الأيسر: بيانات التواصل (40%) -->
        <div class="contact-info" id="contactInfo">
          <h2 class="contact-info-title">أرسل رسالتك الآن!</h2>
          <p class="contact-info-desc">
            نحن هنا للإجابة على استفساراتك ومساعدتك في بناء حضور رقمي قوي لعلامتك التجارية. تواصل معنا اليوم واحصل على استشارة مجانية.
          </p>

          <div class="contact-info-items">
            <div class="contact-info-item">
              <div class="contact-info-icon">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none">
                  <rect x="2" y="5" width="20" height="14" rx="2" stroke="currentColor" stroke-width="2"/>
                  <path d="M2 7L12 13L22 7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </div>
              <div class="contact-info-text">
                <span class="contact-info-label">نرد خلال 24 ساعة على</span>
                <a href="mailto:info@brandkey.com" class="contact-info-value">info@brandkey.com</a>
              </div>
            </div>

            <div class="contact-info-item">
              <div class="contact-info-icon contact-info-icon--navy">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none">
                  <circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="2"/>
                  <path d="M12 7V12L15 14" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                </svg>
              </div>
              <div class="contact-info-text">
                <span class="contact-info-label">مواعيد العمل</span>
                <span class="contact-info-value">الأحد - الخميس | 9:00 ص - 5:00 م</span>
              </div>
            </div>
          </div>

          <div class="contact-info-social">
            <a href="#" class="contact-social-link" aria-label="Facebook">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M24 12.07C24 5.41 18.63 0 12 0S0 5.41 0 12.07c0 6.02 4.39 11.01 10.13 11.93v-8.44H7.08v-3.49h3.05V9.41c0-3.02 1.79-4.69 4.53-4.69 1.31 0 2.68.24 2.68.24v2.97h-1.51c-1.49 0-1.96.93-1.96 1.89v2.25h3.33l-.53 3.49h-2.8v8.44C19.61 23.08 24 18.09 24 12.07z"/></svg>
            </a>
            <a href="#" class="contact-social-link" aria-label="LinkedIn">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M20.45 20.45h-3.56v-5.57c0-1.33-.02-3.04-1.85-3.04-1.85 0-2.14 1.45-2.14 2.94v5.67H9.34V9h3.42v1.56h.05c.48-.9 1.64-1.85 3.37-1.85 3.6 0 4.27 2.37 4.27 5.45v6.29zM5.34 7.43a2.06 2.06 0 11-.01-4.12 2.06 2.06 0 01.01 4.12zM7.12 20.45H3.56V9h3.56v11.45zM22.22 0H1.77C.79 0 0 .77 0 1.73v20.54C0 23.23.79 24 1.77 24h20.45c.98 0 1.78-.77 1.78-1.73V1.73C24 .77 23.2 0 22.22 0z"/></svg>
            </a>
            <a href="#" class="contact-social-link" aria-label="Instagram">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2.16c3.2 0 3.58.01 4.85.07 3.25.15 4.77 1.69 4.92 4.92.06 1.27.07 1.65.07 4.85s-.01 3.58-.07 4.85c-.15 3.23-1.66 4.77-4.92 4.92-1.27.06-1.65.07-4.85.07s-3.58-.01-4.85-.07c-3.26-.15-4.77-1.7-4.92-4.92-.06-1.27-.07-1.65-.07-4.85s.01-3.58.07-4.85C2.38 3.92 3.9 2.38 7.15 2.23 8.42 2.17 8.8 2.16 12 2.16zM12 0C8.74 0 8.33.01 7.05.07 2.7.27.27 2.69.07 7.05.01 8.33 0 8.74 0 12s.01 3.67.07 4.95c.2 4.36 2.62 6.78 6.98 6.98C8.33 23.99 8.74 24 12 24s3.67-.01 4.95-.07c4.35-.2 6.78-2.62 6.98-6.98.06-1.28.07-1.69.07-4.95s-.01-3.67-.07-4.95c-.2-4.35-2.62-6.78-6.98-6.98C15.67.01 15.26 0 12 0zm0 5.84a6.16 6.16 0 100 12.32 6.16 6.16 0 000-12.32zM12 16a4 4 0 110-8 4 4 0 010 8zm6.41-11.85a1.44 1.44 0 100 2.88 1.44 1.44 0 000-2.88z"/></svg>
            </a>
            <a href="#" class="contact-social-link" aria-label="X">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24h-6.66l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
            </a>
          </div>
        </div>

        <!-- العمود الأيمن: الفورم (60%) -->
        <div class="contact-form-wrap" id="contactFormWrap">
          <form class="contact-form" id="contactForm" action="#" method="post">

            <!-- الصف الأول: الاسم + البريد -->
            <div class="contact-form-row contact-form-row--2">
              <div class="contact-form-field">
                <label for="contactName">الاسم كامل <span class="required">*</span></label>
                <input type="text" id="contactName" name="name" placeholder="ادخل الاسم الاول والاخير لك" required />
              </div>
              <div class="contact-form-field">
                <label for="contactEmail">البريد الالكتروني <span class="required">*</span></label>
                <input type="email" id="contactEmail" name="email" placeholder="example@example.com" required />
              </div>
            </div>

            <!-- الصف الثاني: الهاتف + الجمعية -->
            <div class="contact-form-row contact-form-row--2">
              <div class="contact-form-field contact-form-field--phone">
                <label for="contactPhone">رقم الهاتف <span class="required">*</span></label>
                <div class="contact-form-phone">
                  <select id="contactCountryCode" name="countryCode" class="contact-form-select-code">
                    <option value="+966">+966 🇸🇦</option>
                    <option value="+971">+971 🇦🇪</option>
                    <option value="+20">+20 🇪🇬</option>
                    <option value="+965">+965 🇰🇼</option>
                    <option value="+974">+974 🇶🇦</option>
                    <option value="+973">+973 🇧🇭</option>
                    <option value="+968">+968 🇴🇲</option>
                    <option value="+962">+962 🇯🇴</option>
                  </select>
                  <input type="tel" id="contactPhone" name="phone" placeholder="XXX XXX XXXX" required />
                </div>
              </div>
              <div class="contact-form-field">
                <label for="contactCompany">اسم الجمعية <span class="required">*</span></label>
                <input type="text" id="contactCompany" name="company" placeholder="اسم الجمعية" required />
              </div>
            </div>

            <!-- الصف الثالث: نوع الاستفسار -->
            <div class="contact-form-row">
              <div class="contact-form-field">
                <label for="contactInquiry">نوع الاستفسار <span class="required">*</span></label>
                <select id="contactInquiry" name="inquiry" class="contact-form-select" required>
                  <option value="" disabled selected>نوع الاستفسار</option>
                  <option value="consulting">استشارة تسويقية</option>
                  <option value="training">تدريب الشركات</option>
                  <option value="integration">منظومة التكامل</option>
                  <option value="pricing">الباقات والأسعار</option>
                  <option value="other">أخرى</option>
                </select>
              </div>
            </div>

            <!-- الصف الرابع: التفاصيل -->
            <div class="contact-form-row">
              <div class="contact-form-field">
                <label for="contactMessage">التفاصيل <span class="required">*</span></label>
                <textarea id="contactMessage" name="message" rows="5" placeholder="الرجاء كتابة تفاصيل رسالتك" required></textarea>
              </div>
            </div>

            <!-- زر الإرسال -->
            <div class="contact-form-actions">
              <button type="submit" class="contact-form-btn">
                <span>إرسال الرسالة</span>
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none">
                  <path d="M22 2L11 13M22 2L15 22L11 13L2 9L22 2Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </button>
            </div>

          </form>
          <p class="contact-form-privacy">نحترم خصوصيتك، جميع البيانات محمية ولن يتم مشاركتها.</p>
        </div>

      </div>
    </section>

    <!-- ===================== سيكشن 2: موقع مكاتبنا (Dark Offices) ===================== -->
    <section class="contact-offices" id="contactOffices">
      <div class="contact-offices-container">

        <!-- الهيدر: عنوان أبيض (يمين) + خط أصفر + دائرة + وصف -->
        <header class="contact-offices-head" id="contactOfficesHead">
          <h2 class="contact-offices-title">موقع مكاتبنا</h2>
          <img src="<?php bk_icon('heading-line.png'); ?>" alt="" class="heading-line contact-offices-heading-line" aria-hidden="true" />
          <p class="contact-offices-sub">تفضل بزيارتنا في أحد مكاتبنا أو تواصل معنا رقمياً في أي وقت</p>
        </header>

        <!-- كارتين مكاتب -->
        <div class="contact-offices-grid" id="contactOfficesGrid">

          <!-- كارت 1: مكتب القاهرة -->
          <article class="contact-offices-card" data-card="0">
            <div class="contact-offices-card-icon" aria-hidden="true">
              <svg width="26" height="26" viewBox="0 0 24 24" fill="none">
                <path d="M12 2C7.58 2 4 5.58 4 10C4 15.5 12 22 12 22S20 15.5 20 10C20 5.58 16.42 2 12 2Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/>
                <circle cx="12" cy="10" r="3" stroke="currentColor" stroke-width="2"/>
              </svg>
            </div>
            <div class="contact-offices-card-body">
              <div class="contact-offices-card-header">
                <h3 class="contact-offices-card-title">مكتب القاهرة</h3>
                <span class="contact-offices-card-badge">المقر الرئيسي</span>
              </div>
              <div class="contact-offices-card-details">
                <div class="contact-offices-detail">
                  <svg width="16" height="16" viewBox="0 0 24 24" fill="none"><path d="M12 2C7.58 2 4 5.58 4 10C4 15.5 12 22 12 22S20 15.5 20 10C20 5.58 16.42 2 12 2Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/><circle cx="12" cy="10" r="3" stroke="currentColor" stroke-width="2"/></svg>
                  <span>القاهرة، مدينة نصر، شارع عباس العقاد، برج النخيل، الدور الخامس</span>
                </div>
                <div class="contact-offices-detail">
                  <svg width="16" height="16" viewBox="0 0 24 24" fill="none"><path d="M22 16.92V19.92C22 20.52 21.52 21 20.92 21C10.86 21 3 13.14 3 3.08C3 2.48 3.48 2 4.08 2H7.08C7.68 2 8.16 2.48 8.16 3.08C8.16 4.68 8.4 6.24 8.88 7.72C9 8.12 8.88 8.56 8.56 8.88L7.2 10.24C8.6 13.04 10.96 15.4 13.76 16.8L15.12 15.44C15.44 15.12 15.88 15 16.28 15.12C17.76 15.6 19.32 15.84 20.92 15.84C21.52 15.84 22 16.32 22 16.92Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/></svg>
                  <span>+20 100 123 4567</span>
                </div>
              </div>
              <a href="#" class="contact-offices-card-link">
                <span>احصل على الاتجاهات</span>
                <svg width="16" height="16" viewBox="0 0 20 20" fill="none"><path d="M16.6666 10H3.33331M8.33331 5L3.33331 10L8.33331 15" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
              </a>
            </div>
          </article>

          <!-- كارت 2: مكتب الرياض -->
          <article class="contact-offices-card" data-card="1">
            <div class="contact-offices-card-icon" aria-hidden="true">
              <svg width="26" height="26" viewBox="0 0 24 24" fill="none">
                <path d="M12 2C7.58 2 4 5.58 4 10C4 15.5 12 22 12 22S20 15.5 20 10C20 5.58 16.42 2 12 2Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/>
                <circle cx="12" cy="10" r="3" stroke="currentColor" stroke-width="2"/>
              </svg>
            </div>
            <div class="contact-offices-card-body">
              <div class="contact-offices-card-header">
                <h3 class="contact-offices-card-title">مكتب الرياض</h3>
                <span class="contact-offices-card-badge">الفرع الإقليمي</span>
              </div>
              <div class="contact-offices-card-details">
                <div class="contact-offices-detail">
                  <svg width="16" height="16" viewBox="0 0 24 24" fill="none"><path d="M12 2C7.58 2 4 5.58 4 10C4 15.5 12 22 12 22S20 15.5 20 10C20 5.58 16.42 2 12 2Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/><circle cx="12" cy="10" r="3" stroke="currentColor" stroke-width="2"/></svg>
                  <span>الرياض، حي الملقا، طريق الملك فهد، برج الأعمال، الدور الثامن</span>
                </div>
                <div class="contact-offices-detail">
                  <svg width="16" height="16" viewBox="0 0 24 24" fill="none"><path d="M22 16.92V19.92C22 20.52 21.52 21 20.92 21C10.86 21 3 13.14 3 3.08C3 2.48 3.48 2 4.08 2H7.08C7.68 2 8.16 2.48 8.16 3.08C8.16 4.68 8.4 6.24 8.88 7.72C9 8.12 8.88 8.56 8.56 8.88L7.2 10.24C8.6 13.04 10.96 15.4 13.76 16.8L15.12 15.44C15.44 15.12 15.88 15 16.28 15.12C17.76 15.6 19.32 15.84 20.92 15.84C21.52 15.84 22 16.32 22 16.92Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/></svg>
                  <span>+966 50 123 4567</span>
                </div>
              </div>
              <a href="#" class="contact-offices-card-link">
                <span>احصل على الاتجاهات</span>
                <svg width="16" height="16" viewBox="0 0 20 20" fill="none"><path d="M16.6666 10H3.33331M8.33331 5L3.33331 10L8.33331 15" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
              </a>
            </div>
          </article>

        </div>

      </div>
    </section>

    <!-- ===================== 
  <!-- السيكشنات المكررة -->
  <?php get_template_part( 'template-parts/shared', 'cta-final' ); ?>
  <?php get_template_part( 'template-parts/shared', 'faq' ); ?>
  <?php get_template_part( 'template-parts/shared', 'blog' ); ?>

</main>
<?php get_footer(); ?>
