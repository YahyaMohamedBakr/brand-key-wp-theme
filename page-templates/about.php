<?php
/**
 * Template Name: من نحن
 * مطابق للتمبلت بالظبط — كل HTML + SVGs + JS hooks
 * @package BrandKey
 */
get_header();
?>
<main class="page-content" id="pageContent">

  <!-- inner hero -->
  <div id="inner-hero-include"
       data-title="نحن براند كي — شريكك في الرحلة الرقمية"
       data-desc="فريق من الخبراء المتخصصين في التسويق الرقمي، تطوير البرمجيات، والتصميم الإبداعي. نبني حلولاً متكاملة تنمو مع علامتك التجارية."
       data-primary-text="تعرف على فريقنا"
       data-primary-icon="<?php bk_icon('start-icon.svg'); ?>"
       data-primary-href="#aboutSecurity"
       data-ghost-text="شاهد إنجازاتنا"
       data-ghost-icon="<?php bk_icon('humbleicons-arrow-up.svg'); ?>"
       data-ghost-href="<?php echo esc_url(home_url('/portfolio')); ?>">
  </div>

  <!-- سيكشن 1: منظومة التكامل.. وداعاً للتشتت -->
  <?php if ( true ) : ?>
  <section class="about-explore" id="aboutExplore">
    <div class="about-explore-container">
      <header class="about-explore-head" id="aboutExploreHead">
        <h2 class="about-explore-title">منظومة التكامل.. وداعاً للتشتت</h2>
        <img src="<?php bk_icon('heading-line.png'); ?>" alt="" class="heading-line about-explore-heading-line" aria-hidden="true" />
        <p class="about-explore-desc">معظم الشركات تعاني من التشتت؛ يصمم لهم أحد رؤية، وآخر يدير الإعلانات، وثالث يبرمج الموقع، وذلك بدون رؤية موحدة. في Brand Key، نضع المنظومة كاملة نصب عينيك، ونربط كل خطوة بالخطوة التالية لضمان تحقيق أهدافك.</p>
      </header>
      <div class="about-explore-grid" id="aboutExploreGrid">
        <article class="about-explore-card about-explore-card--1" data-card="0"><img src="<?php bk_icon('vector-decoration.png'); ?>" alt="" class="about-explore-card-vector" aria-hidden="true" /><div class="about-explore-card-num">97.5%</div><div class="about-explore-card-label">نسبة رضاء العملاء</div></article>
        <article class="about-explore-card about-explore-card--2" data-card="1"><img src="<?php bk_icon('vector-decoration.png'); ?>" alt="" class="about-explore-card-vector" aria-hidden="true" /><div class="about-explore-card-num">+130</div><div class="about-explore-card-label">عميل يثق بنا</div></article>
        <article class="about-explore-card about-explore-card--3" data-card="2"><img src="<?php bk_icon('vector-decoration.png'); ?>" alt="" class="about-explore-card-vector" aria-hidden="true" /><div class="about-explore-card-num">+8</div><div class="about-explore-card-label">سنوات من الخبرة</div></article>
      </div>
    </div>
  </section>
  <?php endif; ?>

  <!-- سيكشن 2: رؤيتنا -->
  <?php if ( true ) : ?>
  <section class="about-us" id="aboutUs">
    <div class="about-us-container">
      <div class="about-us-visual" id="aboutUsVisual">
        <div class="about-us-image-wrap">
          <img src="<?php bk_icon('blog-1.png'); ?>" alt="رؤيتنا" class="about-us-image" />
          <img src="<?php bk_icon('watermark.png'); ?>" alt="" class="about-us-watermark" aria-hidden="true" />
        </div>
      </div>
      <div class="about-us-content" id="aboutUsContent">
        <h2 class="about-us-title">رؤيتنا</h2>
        <img src="<?php bk_icon('heading-line.png'); ?>" alt="" class="heading-line about-us-heading-line" aria-hidden="true" />
        <p class="about-us-desc">أن نكون الشريك الاستراتيجي الأول لكل شركة تسعى للنمو الرقمي، ونقدم حلولاً مبتكرة تتجاوز توقعات عملائنا وتصنع الفارق الحقيقي في السوق. نطمح إلى بناء مستقبل رقمي تتعزز فيه العلامات التجارية بفضل رؤية موحدة تجمع بين الإبداع والتقنية والتسويق في منظومة واحدة متكاملة.</p>
      </div>
    </div>
  </section>
  <?php endif; ?>

  <!-- سيكشن 3: رسالتنا -->
  <?php if ( true ) : ?>
  <section class="about-why" id="aboutWhy">
    <div class="about-why-container">
      <div class="about-why-content" id="aboutWhyContent">
        <h2 class="about-why-title">رسالتنا</h2>
        <img src="<?php bk_icon('heading-line.png'); ?>" alt="" class="heading-line about-why-heading-line" aria-hidden="true" />
        <p class="about-why-desc">نمكّن عملاءنا من تحقيق أهدافهم عبر حلول تسويقية وتقنية متكاملة، مبنية على فهم عميق لاحتياجاتهم، وتُنفّذ بأعلى معايير الجودة والاحترافية. نلتزم بربط كل خطوة بالخطوة التالية لضمان نتائج قابلة للقياس، ونبني شراكات طويلة الأمد تقوم على الشفافية والثقة والابتكار المستمر.</p>
      </div>
      <div class="about-why-visual" id="aboutWhyVisual">
        <div class="about-why-image-wrap">
          <img src="<?php bk_icon('blog-2.png'); ?>" alt="رسالتنا" class="about-why-image" />
          <img src="<?php bk_icon('watermark.png'); ?>" alt="" class="about-why-watermark" aria-hidden="true" />
        </div>
      </div>
    </div>
  </section>
  <?php endif; ?>

  <!-- سيكشن 4: لا تفوت الفرصة -->
  <?php if ( true ) : ?>
  <section class="about-security" id="aboutSecurity">
    <div class="about-security-container">
      <header class="about-security-head" id="aboutSecurityHead">
        <h2 class="about-security-title">لا تفوت الفرصة</h2>
        <img src="<?php bk_icon('heading-line.png'); ?>" alt="" class="heading-line about-security-heading-line" aria-hidden="true" />
        <p class="about-security-sub">كل ما تحتاجه لإنجاح أعمالك، وعدم تفويت الفرص، وضمان مستقبل ناجح لشركتك. سجل الآن واستفد من خصومات خاصة وفرص استثمارية فريدة.</p>
      </header>
      <div class="about-security-grid" id="aboutSecurityGrid">
        <article class="about-security-card" data-card="0">
          <div class="about-security-card-icon"><svg width="32" height="32" viewBox="0 0 32 32" fill="none" aria-hidden="true"><path d="M16 4l1.8 3.6 4-.6.6 4 3.6 1.8-1.8 3.6 1.8 3.6-3.6 1.8-.6 4-4-.6L16 28l-1.8-3.6-4 .6-.6-4-3.6-1.8 1.8-3.6-1.8-3.6 3.6-1.8.6-4 4 .6L16 4z" stroke="currentColor" stroke-width="2" stroke-linejoin="round" fill="none"/><circle cx="16" cy="16" r="4" stroke="currentColor" stroke-width="2" fill="none"/></svg></div>
          <div class="about-security-card-body"><h3 class="about-security-card-title">خدمات إضافية</h3><p class="about-security-card-desc">تقدم لك باقة من الخدمات الإضافية التي تزيد من قيمة تجربتك، مثل 12 شهراً من الدعم الفني المجاني، وخدمات التسويق الرقمي، والوصول إلى أدوات تحليل البيانات المتقدمة لتعزيز نجاحك.</p></div>
        </article>
        <article class="about-security-card" data-card="1">
          <div class="about-security-card-icon"><svg width="32" height="32" viewBox="0 0 32 32" fill="none" aria-hidden="true"><path d="M16 4C10.5 4 6 8.5 6 14c0 3.5 1.8 6.5 4.5 8.3V24c0 1.1.9 2 2 2h7c1.1 0 2-.9 2-2v-1.7C24.2 20.5 26 17.5 26 14c0-5.5-4.5-10-10-10z" stroke="currentColor" stroke-width="2" stroke-linejoin="round" fill="none"/><path d="M12 28h8M13 31h6" stroke="currentColor" stroke-width="2" stroke-linecap="round"/><path d="M16 9v5M13 14h6" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg></div>
          <div class="about-security-card-body"><h3 class="about-security-card-title">أفكار مبتكرة</h3><p class="about-security-card-desc">تقدم لنا 12 فكرة مبتكرة لتحسين خدماتنا، ونسعى لتحقيق أفضل النتائج مع عملائنا. نحن نستمع إلى أفكارك ونحولها إلى واقع ملموس، مما يضمن رضا العملاء ونجاح شركتك.</p></div>
        </article>
      </div>
      <div class="about-security-cta" id="aboutSecurityCta">
        <div class="about-security-cta-deco" aria-hidden="true"></div>
        <div class="about-security-cta-text">
          <h3 class="about-security-cta-title">جديد: لا تترك أي فرصة للعملاء</h3>
          <p class="about-security-cta-desc">ابدأ الآن، لا تفوت أي فرصة للعملاء واجعلهم يختارونك من بين المنافسين، واحصل على المزيد من الطلبات والعملاء المحتملين.</p>
        </div>
        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="about-security-cta-btn"><span>تواصل معنا الآن</span><svg width="20" height="20" viewBox="0 0 20 20" fill="none" aria-hidden="true"><path d="M4 10H16M16 10L10 4M16 10L10 16" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
      </div>
    </div>
  </section>
  <?php endif; ?>

  <!-- سيكشن 5: العقول خلف المنظومة (سلايدر التيم) -->
  <?php if ( true ) : ?>
  <section class="about-team" id="aboutTeam">
    <div class="about-team-container">
      <header class="about-team-head" id="aboutTeamHead">
        <h2 class="about-team-title">العقول خلف المنظومة</h2>
        <img src="<?php bk_icon('heading-line.png'); ?>" alt="" class="heading-line about-team-heading-line" aria-hidden="true" />
        <p class="about-team-desc">نحن لسنا مجرد أفراد يؤدون مهاماً منفصلة، بل نحن فريق متكامل يعمل بروح الشراكة. يجمعنا هدف واحد: تحويل التحديات التقنية والتسويقية المعقدة إلى نتائج ملموسة تدفع عملك نحو الريادة.</p>
      </header>
      <div class="about-team-slider" id="aboutTeamSlider" aria-roledescription="carousel" aria-label="فريق براند كي">
        <div class="about-team-viewport" id="aboutTeamViewport">
          <div class="about-team-track" id="aboutTeamTrack">
            <?php
            $members = array(
              array('أحمد','المدير العام'),
              array('جاك','مدير المبيعات والتسويق'),
              array('توماس','مدير قسم المبيعات'),
              array('ديفيد','مدير قسم التسويق الرقمي'),
              array('سالم','مدير تطوير المنتجات'),
              array('جيمس','مدير التكنولوجيا والمعلومات'),
              array('عمر','مدير التصميم الإبداعي'),
              array('خالد','مدير المشاريع'),
            );
            foreach ( $members as $i => $m ) :
            ?>
            <article class="about-team-card" data-index="<?php echo esc_attr($i); ?>">
              <div class="about-team-card-photo" style="background-image: url('<?php bk_icon('team-member.png'); ?>');"></div>
              <div class="about-team-card-overlay"></div>
              <div class="about-team-card-info"><h3 class="about-team-card-name"><?php echo esc_html($m[0]); ?></h3><p class="about-team-card-role"><?php echo esc_html($m[1]); ?></p></div>
            </article>
            <?php endforeach; ?>
          </div>
        </div>
        <div class="about-team-controls" id="aboutTeamControls">
          <button class="about-team-arrow about-team-arrow--prev" id="aboutTeamPrev" aria-label="السابق" type="button"><img src="<?php bk_icon('arrow-active.svg'); ?>" alt="" /></button>
          <div class="about-team-dots" id="aboutTeamDots" role="tablist" aria-label="اختيار العضو"></div>
          <button class="about-team-arrow about-team-arrow--next" id="aboutTeamNext" aria-label="التالي" type="button"><img src="<?php bk_icon('arrow-active.svg'); ?>" alt="" class="about-team-arrow-flip" /></button>
        </div>
      </div>
    </div>
  </section>
  <?php endif; ?>

  <!-- السيكشنات المكررة -->
  <?php if ( true ) get_template_part( 'template-parts/shared', 'how' ); ?>
  <?php if ( true ) get_template_part( 'template-parts/shared', 'clients' ); ?>
  <?php if ( true ) get_template_part( 'template-parts/shared', 'testimonials' ); ?>
  <?php if ( true ) get_template_part( 'template-parts/shared', 'cta-final' ); ?>
  <?php if ( true ) get_template_part( 'template-parts/shared', 'faq' ); ?>
  <?php if ( true ) get_template_part( 'template-parts/shared', 'blog' ); ?>

</main>
<?php get_footer(); ?>
