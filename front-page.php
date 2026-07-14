<?php
/**
 * الصفحة الرئيسية — مطابقة للتمبلت بالظبط
 * كل السيكشنات بـ HTML كامل + SVGs + JavaScript hooks
 *
 * @package BrandKey
 */

get_header();
?>

<main class="page-content" id="pageContent">

  <!-- ===================== هيرو الصفحة الرئيسية ===================== -->
  <?php $fp_id = get_option('page_on_front'); if ( bk_meta_enabled('bk_front_hero_enable', $fp_id) ) : ?>
  <section class="hero" id="hero">
    <div class="hero-container">

      <div class="hero-text">
        <h1 class="hero-title">
          <?php echo esc_html( bk_meta('bk_front_hero_title', $fp_id, 'حلول تسويق رقمي متكاملة تنمو مع أعمالك') ); ?>
        </h1>
        <p class="hero-subtitle">
          <?php echo esc_html( bk_meta('bk_front_hero_desc', $fp_id) ); ?>
        </p>
        <div class="hero-cta-group">
          <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="hero-cta hero-cta--primary">
            <span><?php echo esc_html( bk_meta('bk_front_hero_primary_text', $fp_id, 'ابدأ الآن، مجاناً') ); ?></span>
            <img src="<?php bk_icon( 'start-icon.svg' ); ?>" alt="" class="hero-cta-icon" aria-hidden="true" />
          </a>
          <a href="#services" class="hero-cta hero-cta--secondary">
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M8 3V13M8 13L13 8M8 13L3 8" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
            <span><?php echo esc_html( bk_meta('bk_front_hero_ghost_text', $fp_id, 'تعرف على المزيد') ); ?></span>
          </a>
        </div>
        <div class="hero-stats">
          <div class="stat">
            <span class="stat-number" data-count="8" data-suffix="+">+8</span>
            <span class="stat-label">من المشاريع</span>
          </div>
          <span class="stat-divider"></span>
          <div class="stat">
            <span class="stat-number" data-count="130" data-suffix="+">130+</span>
            <span class="stat-label">المستخدمين النشطين</span>
          </div>
          <span class="stat-divider"></span>
          <div class="stat">
            <span class="stat-number" data-count="97.5" data-suffix="%" data-decimals="1">97.5%</span>
            <span class="stat-label">من العملاء</span>
          </div>
        </div>
      </div>

      <div class="hero-visual">
        <span class="hero-shape hero-shape--1"></span>
        <span class="hero-shape hero-shape--2"></span>
        <span class="hero-shape hero-shape--3"></span>
        <img src="<?php bk_icon( 'hero-frame.svg' ); ?>" alt="" class="hero-frame" aria-hidden="true" />
        <div class="hero-circle">
          <img src="<?php bk_icon( 'hero-bg.svg' ); ?>" alt="" class="hero-circle-bg" aria-hidden="true" />
          <img src="<?php echo esc_url( BK_URI ); ?>/assets/icons/hero-bg.svg" alt="حلول إدارة المشاريع المتكاملة من Brand Key" class="hero-illustration" />
        </div>
      </div>

    </div>
    <a href="#services" class="hero-scroll" aria-label="انتقل لتحت">
      <span class="hero-scroll-text">اكتشف المزيد</span>
      <span class="hero-scroll-mouse"><span class="hero-scroll-wheel"></span></span>
    </a>
  </section>
  <?php endif; ?>

  <!-- ===================== سيكشن الخدمات ===================== -->
  <?php if ( bk_meta_enabled('bk_front_services_enable', $fp_id) ) : ?>
  <section class="services" id="services">
    <div class="services-container">
      <div class="services-grid">
        <div class="services-sidebar" id="servicesSidebar">
          <h2 class="services-title"><?php echo esc_html( bk_meta('bk_front_services_title', $fp_id, 'خدماتنا') ); ?></h2>
          <img src="<?php bk_icon( 'heading-line.png' ); ?>" alt="" class="heading-line services-heading-line" aria-hidden="true" />
          <p class="services-desc"><?php echo esc_html( bk_meta('bk_front_services_desc', $fp_id) ); ?></p>
          <div class="services-actions">
            <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="services-btn-primary">
              <span>ابدأ رحلتك معنا الآن</span>
              <img src="<?php bk_icon( 'start-icon.svg' ); ?>" alt="" />
            </a>
            <a href="<?php echo esc_url( home_url( '/services' ) ); ?>" class="services-btn-link">
              <span>اكتشف جميع خدماتنا</span>
              <img src="<?php bk_icon( 'more-arrow.svg' ); ?>" alt="" />
            </a>
          </div>
        </div>
        <div class="services-cards" id="servicesCards">
          <article class="service-card active" data-service="0">
            <button class="service-card-header" aria-expanded="true">
              <div class="service-card-img"><img src="<?php bk_icon( 'service-content.png' ); ?>" alt="المحتوى الإبداعي" /></div>
              <div class="service-card-info">
                <h3 class="service-card-title">المحتوى الإبداعي</h3>
                <p class="service-card-desc">محتوى إبداعي يجذب انتباه جمهورك ويعكس هوية علامتك التجارية بأسلوب مميز.</p>
              </div>
              <span class="service-card-toggle"><svg width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M5 8L10 13L15 8" stroke="#927F07" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
            </button>
            <div class="service-card-tags">
              <a href="#" class="service-tag"><span>كتابة المحتوى</span><img src="<?php bk_icon( 'service-arrow.svg' ); ?>" alt="" /></a>
              <a href="#" class="service-tag"><span>التصميم الإبداعي</span><img src="<?php bk_icon( 'service-arrow.svg' ); ?>" alt="" /></a>
              <a href="#" class="service-tag"><span>إنتاج الفيديو</span><img src="<?php bk_icon( 'service-arrow.svg' ); ?>" alt="" /></a>
            </div>
          </article>
          <article class="service-card" data-service="1">
            <button class="service-card-header" aria-expanded="false">
              <div class="service-card-img"><img src="<?php bk_icon( 'service-marketing.png' ); ?>" alt="التسويق والنمو" /></div>
              <div class="service-card-info">
                <h3 class="service-card-title">التسويق والنمو</h3>
                <p class="service-card-desc">خدمات تسويقية مبتكرة لتعزيز نمو أعمالك ووصولك لجمهورك المستهدف.</p>
              </div>
              <span class="service-card-toggle"><svg width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M5 8L10 13L15 8" stroke="#927F07" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
            </button>
            <div class="service-card-tags">
              <a href="#" class="service-tag"><span>التسويق الرقمي</span><img src="<?php bk_icon( 'service-arrow.svg' ); ?>" alt="" /></a>
              <a href="#" class="service-tag"><span>إدارة الحملات الإعلانية</span><img src="<?php bk_icon( 'service-arrow.svg' ); ?>" alt="" /></a>
              <a href="#" class="service-tag"><span>تحسين المحتوى</span><img src="<?php bk_icon( 'service-arrow.svg' ); ?>" alt="" /></a>
            </div>
          </article>
          <article class="service-card" data-service="2">
            <button class="service-card-header" aria-expanded="false">
              <div class="service-card-img"><img src="<?php bk_icon( 'service-tech.png' ); ?>" alt="الحلول التقنية والمتاجر" /></div>
              <div class="service-card-info">
                <h3 class="service-card-title">الحلول التقنية والمتاجر</h3>
                <p class="service-card-desc">حلول تقنية متقدمة لبناء وتطوير متاجرك الإلكترونية وتطبيقاتك بأعلى المعايير.</p>
              </div>
              <span class="service-card-toggle"><svg width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M5 8L10 13L15 8" stroke="#927F07" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
            </button>
            <div class="service-card-tags">
              <a href="#" class="service-tag"><span>تطوير المواقع</span><img src="<?php bk_icon( 'service-arrow.svg' ); ?>" alt="" /></a>
              <a href="#" class="service-tag"><span>المتاجر الإلكترونية</span><img src="<?php bk_icon( 'service-arrow.svg' ); ?>" alt="" /></a>
              <a href="#" class="service-tag"><span>تطبيقات الهواتف</span><img src="<?php bk_icon( 'service-arrow.svg' ); ?>" alt="" /></a>
            </div>
          </article>
        </div>
      </div>
    </div>
  </section>
  <?php endif; ?>

  <!-- ===================== سيكشن الاستشارات ===================== -->
  <?php if ( bk_section_enabled( 'front_page', 'consult' ) ) : ?>
  <section class="consult" id="consult">
    <img src="<?php bk_icon( 'hero-key-bg.svg' ); ?>" alt="" class="consult-key-bg" aria-hidden="true" />
    <div class="consult-container">
      <article class="consult-card" data-card="0">
        <div class="consult-card-body">
          <h3 class="consult-card-title">استشارات التسويق</h3>
          <img src="<?php bk_icon( 'heading-line.png' ); ?>" alt="" class="heading-line consult-heading-line" aria-hidden="true" />
          <p class="consult-card-desc">نقدم استشارات تسويقية متخصصة تساعدك على بناء استراتيجيات ناجحة، وتحديد الجمهور المستهدف، وتعزيز حضورك الرقمي في السوق.</p>
          <a href="<?php echo esc_url( home_url( '/consulting' ) ); ?>" class="consult-btn consult-btn--outline"><span>اعرف المزيد</span><img src="<?php bk_icon( 'more-arrow.svg' ); ?>" alt="" /></a>
        </div>
      </article>
      <article class="consult-card consult-card--accent" data-card="1">
        <div class="consult-card-body">
          <h3 class="consult-card-title">الاستشارات الفنية</h3>
          <img src="<?php bk_icon( 'heading-line.png' ); ?>" alt="" class="heading-line consult-heading-line" aria-hidden="true" />
          <p class="consult-card-desc">استشارات فنية متخصصة لدعم أهدافك التسويقية، حيث نقدم الدعم التقني اللازم لتنفيذ استراتيجياتك بكفاءة وتحقيق أقصى استفادة من مواردك.</p>
          <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="consult-btn consult-btn--primary"><span>احجز</span><img src="<?php bk_icon( 'start-icon.svg' ); ?>" alt="" /></a>
        </div>
      </article>
    </div>
  </section>
  <?php endif; ?>

  <!-- ===================== سيكشن القطاعات ===================== -->
  <?php if ( bk_meta_enabled('bk_front_sectors_enable', $fp_id) ) : ?>
  <section class="sectors" id="sectors">
    <img src="<?php bk_icon( 'sectors-vector.png' ); ?>" alt="" class="sectors-deco sectors-deco--vector" aria-hidden="true" />
    <img src="<?php bk_icon( 'sectors-frame.png' ); ?>" alt="" class="sectors-deco sectors-deco--frame" aria-hidden="true" />
    <div class="sectors-container">
      <header class="sectors-head" id="sectorsHead">
        <h2 class="sectors-title"><?php echo esc_html( bk_meta('bk_front_sectors_title', $fp_id, 'حلول مصممة لكل قطاع') ); ?></h2>
        <img src="<?php bk_icon( 'heading-line.png' ); ?>" alt="" class="heading-line sectors-heading-line" aria-hidden="true" />
        <p class="sectors-desc"><?php echo esc_html( bk_meta('bk_front_sectors_desc', $fp_id) ); ?></p>
      </header>
      <div class="sectors-grid" id="sectorsGrid">
        <?php
        $default_sectors = array(
          array('السياحة والسفر','حجوزات الطيران والفنادق، تنظيم الرحلات والبرامج السياحية المتكاملة','M21 16V14L13 9V3.5C13 2.67 12.33 2 11.5 2C10.67 2 10 2.67 10 3.5V9L2 14V16L10 13.5V19L8 20.5V22L11.5 21L15 22V20.5L13 19V13.5L21 16Z'),
          array('القطاع الطبي','المستشفيات والعيادات، خدمات الرعاية الصحية، والتجهيزات الطبية','M19 8h-3V5c0-1.1-.9-2-2-2H10c-1.1 0-2 .9-2 2v3H5c-1.1 0-2 .9-2 2v9c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2v-9c0-1.1-.9-2-2-2zm-6 7h-2v2H9v-2H7v-2h2v-2h2v2h2v2z'),
          array('التعليم والتدريب','البرامج التدريبية المؤسسية، التطوير المهني، والحلول التعليمية الرقمية','M12 3L1 9L12 15L21 10.5V17H23V9L12 3Z','M5 13.18V17C5 18.1 8.13 20 12 20C15.87 20 19 18.1 19 17V13.18L12 17L5 13.18Z'),
          array('قطاع الطاقة','الطاقة المتجددة، الكهرباء، النفط والغاز، ومشاريع البنية التحتية للطاقة','M6.76 4.84L4.96 3.05L3.55 4.46L5.34 6.25L6.76 4.84ZM4 10.5H1V12.5H4V10.5ZM13 0.55H11V3.5H13V0.55ZM20.45 4.46L19.04 3.05L17.25 4.84L18.66 6.25L20.45 4.46ZM17.24 18.16L19.03 19.96L20.44 18.55L18.64 16.76L17.24 18.16ZM20 10.5V12.5H23V10.5H20ZM12 5.5C8.69 5.5 6 8.19 6 11.5C6 14.81 8.69 17.5 12 17.5C15.31 17.5 18 14.81 18 11.5C18 8.19 15.31 5.5 12 5.5ZM11 22.45H13V19.5H11V22.45ZM3.55 18.54L4.96 19.95L6.75 18.15L5.34 16.74L3.55 18.54Z'),
          array('مكاتب المحاماة','الاستشارات القانونية، إعداد العقود، والتمثيل القانوني والتحكيم','M12 2L1 7V10H2V18H1V20H12V18H11V10H12V7L13 7.5V10H14V7.5L21 11V18H23V11L12 2ZM9 18H6V10H9V18ZM16 18H14V10H16V18Z'),
          array('التجارة الإلكترونية','المتاجر الإلكترونية، بوابات الدفع، إدارة المخزون والشحن الرقمي','M7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zM1 2v2h2l3.6 7.59-1.35 2.45c-.16.28-.25.61-.25.96 0 1.1.9 2 2 2h12v-2H7.42c-.14 0-.25-.11-.25-.25l.03-.12.9-1.63h7.45c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.08-.14.12-.31.12-.48 0-.55-.45-1-1-1H5.21l-.94-2H1zm16 16c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z'),
          array('خدمات الأعمال','الاستشارات الإدارية، تطوير الأعمال، والحلول التشغيلية للشركات','M10 16v-3H3v3h7zm0-9H3v3h7V7zm0-6H3v3h7V1zm10 6H10v3h10V7zm0 6H10v3h10v-3zm0-12H10v3h10V1z'),
          array('خدمات الاستقدام','استقدام العمالة المنزلية والمهنية، إجراءات التأشيرات والخدمات العمالية','M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z'),
          array('خدمات الصيانة','صيانة المباني والمعدات، الكهرباء والتكييف، وخدمات الدعم الفني','M22.7 19l-9.1-9.1c.9-2.3.4-5-1.5-6.9-2-2-5-2.4-7.4-1.3L9 6 6 9 1.6 4.7C.4 7.1.9 10.1 2.9 12.1c1.9 1.9 4.6 2.4 6.9 1.5l9.1 9.1c.4.4 1 .4 1.4 0l2.3-2.3c.5-.4.5-1.1.1-1.4z'),
          array('المجال الصناعي','المصانع والإنتاج، سلاسل الإمداد، والتحول الرقمي الصناعي','M22 22H2V8l5 3V8l5 3V8l5 3V5c0-1.1.9-2 2-2s2 .9 2 2v17z'),
          array('القطاع العقاري','التطوير العقاري، إدارة الأملاك، التسويق العقاري والاستثمار','M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3z'),
        );
        foreach ( $default_sectors as $i => $s ) :
          $extra_path = isset( $s[3] ) ? '<path d="' . esc_attr( $s[3] ) . '" fill="white"/>' : '';
        ?>
        <article class="sector-card" data-card="<?php echo esc_attr( $i ); ?>">
          <div class="sector-card-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="<?php echo esc_attr( $s[2] ); ?>" fill="white"/><?php echo $extra_path; ?></svg></div>
          <div class="sector-card-content">
            <h3 class="sector-card-title"><?php echo esc_html( $s[0] ); ?></h3>
            <p class="sector-card-desc"><?php echo esc_html( $s[1] ); ?></p>
          </div>
          <span class="sector-card-arrow"><svg width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M16.6666 10H3.33331M8.33331 5L3.33331 10L8.33331 15" stroke="#F2C94C" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
        </article>
        <?php endforeach; ?>
      </div>
      <div class="sectors-more" id="sectorsMore">
        <a href="#services" class="sectors-more-btn">
          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" aria-hidden="true"><path d="M16.6666 10H3.33331M8.33331 5L3.33331 10L8.33331 15" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
          <span>العودة إلى الخدمات</span>
        </a>
      </div>
    </div>
  </section>
  <?php endif; ?>

  <!-- ===================== سيكشن CTA الثاني ===================== -->
  <?php if ( bk_meta_enabled('bk_front_cta2_enable', $fp_id) ) : ?>
  <section class="cta2" id="cta2">
    <img src="<?php bk_icon( 'cta2-keyhole.png' ); ?>" alt="" class="cta2-keyhole" aria-hidden="true" />
    <div class="cta2-container">
      <header class="cta2-head" id="cta2Head">
        <h2 class="cta2-title"><?php echo esc_html( bk_meta('bk_front_cta2_title', $fp_id, 'ابدأ رحلتك مع Brandkey') ); ?></h2>
        <img src="<?php bk_icon( 'heading-line.png' ); ?>" alt="" class="heading-line cta2-heading-line" aria-hidden="true" />
        <p class="cta2-desc"><?php echo esc_html( bk_meta('bk_front_cta2_desc', $fp_id) ); ?></p>
      </header>
      <div class="cta2-grid" id="cta2Grid">
        <article class="cta2-card" data-card="0">
          <div class="cta2-card-icon"><svg width="26" height="26" viewBox="0 0 26 26" fill="none"><path d="M13 2L3 7V13C3 17.5 6.5 21.5 13 23C19.5 21.5 23 17.5 23 13V7L13 2Z" fill="white" stroke="white" stroke-width="0.5"/><path d="M9 13L12 16L18 10" stroke="#F2C94C" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
          <div class="cta2-card-body">
            <h3 class="cta2-card-title">خطة عملك، مُصمّمة</h3>
            <p class="cta2-card-desc">نصنع لك خطة عمل متكاملة ومُصمّدة خصيصاً لاحتياجاتك، مع التركيز على الجودة والفعالية لضمان نجاح مشروعك.</p>
            <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="cta2-btn cta2-btn--primary"><span><?php echo esc_html( bk_meta('bk_front_hero_primary_text', $fp_id, 'ابدأ الآن، مجاناً') ); ?></span><img src="<?php bk_icon( 'start-icon.svg' ); ?>" alt="" /></a>
          </div>
        </article>
        <article class="cta2-card cta2-card--accent" data-card="1">
          <div class="cta2-card-icon"><svg width="26" height="26" viewBox="0 0 26 26" fill="none"><path d="M13 2C9.13 2 6 5.13 6 9C6 13.5 11.5 21 12.5 22.5C12.78 22.91 13.22 22.91 13.5 22.5C14.5 21 20 13.5 20 9C20 5.13 16.87 2 13 2Z" fill="white" stroke="white" stroke-width="0.5"/><circle cx="13" cy="9" r="2.5" fill="#F2C94C"/></svg></div>
          <div class="cta2-card-body">
            <h3 class="cta2-card-title">دعم فني متواصل</h3>
            <p class="cta2-card-desc">فريق الدعم الفني الخاص بنا متاح على مدار الساعة لمساعدتك في أي استفسار، نحن هنا لنجاحك في كل خطوة.</p>
            <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="cta2-btn cta2-btn--outline"><span>تواصل معنا</span><img src="<?php bk_icon( 'more-arrow.svg' ); ?>" alt="" /></a>
          </div>
        </article>
        <article class="cta2-card" data-card="2">
          <div class="cta2-card-icon"><svg width="26" height="26" viewBox="0 0 26 26" fill="none"><path d="M13 2C7.48 2 3 6.48 3 12C3 17.52 7.48 22 13 22C18.52 22 23 17.52 23 12C23 6.48 18.52 2 13 2ZM13 20C8.58 20 5 16.42 5 12C5 7.58 8.58 4 13 4C17.42 4 21 7.58 21 12C21 16.42 17.42 20 13 20Z" fill="white"/><path d="M13 6V12L17 14" stroke="#F2C94C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
          <div class="cta2-card-body">
            <h3 class="cta2-card-title">متابعة وتحسين</h3>
            <p class="cta2-card-desc">نتابع أداء مشروعك باستمرار ونحسّنه بشكل دوري لضمان تحقيق أفضل النتائج والنمو المستمر.</p>
            <a href="<?php echo esc_url( home_url( '/services' ) ); ?>" class="cta2-btn cta2-btn--outline"><span>اعرف المزيد</span><img src="<?php bk_icon( 'more-arrow.svg' ); ?>" alt="" /></a>
          </div>
        </article>
      </div>
    </div>
  </section>
  <?php endif; ?>

  <!-- ===================== سيكشن آخر أعمالنا ===================== -->
  <?php if ( bk_meta_enabled('bk_front_portfolio_enable', $fp_id) ) : ?>
  <section class="portfolio" id="portfolio">
    <div class="portfolio-container">
      <header class="portfolio-head" id="portfolioHead">
        <span class="portfolio-eyebrow">أعمالنا الأخيرة</span>
        <h2 class="portfolio-title"><?php echo esc_html( bk_meta('bk_front_portfolio_title', $fp_id, 'آخر أعمالنا') ); ?></h2>
        <img src="<?php bk_icon( 'heading-line.png' ); ?>" alt="" class="heading-line portfolio-heading-line" aria-hidden="true" />
        <p class="portfolio-desc"><?php echo esc_html( bk_meta('bk_front_portfolio_desc', $fp_id) ); ?></p>
      </header>
      <div class="portfolio-slider" id="portfolioSlider" aria-roledescription="carousel" aria-label="آخر أعمالنا">
        <div class="portfolio-viewport">
          <div class="portfolio-track" id="portfolioTrack">
            <article class="portfolio-card" data-index="0" role="group" aria-roledescription="slide" aria-label="1 من 3">
              <div class="portfolio-card-visual"><img src="<?php bk_icon( 'project-img1.png' ); ?>" alt="مشروع منصة تجارة إلكترونية" class="portfolio-card-img" /></div>
              <div class="portfolio-card-body">
                <h3 class="portfolio-card-title">منصة تجارة إلكترونية متكاملة</h3>
                <p class="portfolio-card-excerpt">قمنا بتطوير منصة تجارة إلكترونية متكاملة تضم آلاف المنتجات مع نظام دفع آمن ولوحة تحكم متقدمة لإدارة المخزون والطلبات.</p>
                <div class="portfolio-card-tags"><span class="portfolio-tag">تطوير المواقع</span><span class="portfolio-tag">التجارة الإلكترونية</span><span class="portfolio-tag">UX/UI</span></div>
                <a href="#" class="portfolio-card-btn"><span>رؤية المشروع كاملاً</span><img src="<?php bk_icon( 'gold-arrow.svg' ); ?>" alt="" /></a>
              </div>
            </article>
            <article class="portfolio-card" data-index="1" role="group" aria-roledescription="slide" aria-label="2 من 3">
              <div class="portfolio-card-visual"><img src="<?php bk_icon( 'project-img2.png' ); ?>" alt="مشروع هوية بصرية" class="portfolio-card-img" /></div>
              <div class="portfolio-card-body">
                <h3 class="portfolio-card-title">هوية بصرية لعلامة تجارية</h3>
                <p class="portfolio-card-excerpt">صممنا هوية بصرية متكاملة لعلامة تجارية ناشئة شملت الشعار والألوان والخطوط والمطبوعات لتعزيز حضورها في السوق.</p>
                <div class="portfolio-card-tags"><span class="portfolio-tag">الهوية البصرية</span><span class="portfolio-tag">التصميم الجرافيكي</span><span class="portfolio-tag">البراندينج</span></div>
                <a href="#" class="portfolio-card-btn"><span>رؤية المشروع كاملاً</span><img src="<?php bk_icon( 'gold-arrow.svg' ); ?>" alt="" /></a>
              </div>
            </article>
            <article class="portfolio-card" data-index="2" role="group" aria-roledescription="slide" aria-label="3 من 3">
              <div class="portfolio-card-visual"><img src="<?php bk_icon( 'project-img3.png' ); ?>" alt="مشروع تطبيق جوال" class="portfolio-card-img" /></div>
              <div class="portfolio-card-body">
                <h3 class="portfolio-card-title">تطبيق جوال لإدارة المهام</h3>
                <p class="portfolio-card-excerpt">طوّرنا تطبيق جوال ذكي لإدارة المهام والمشاريع يتيح للمستخدمين تنظيم عملهم ومتابعة تقدمهم بسهولة عبر واجهة بسيطة وأنيقة.</p>
                <div class="portfolio-card-tags"><span class="portfolio-tag">تطبيقات الجوال</span><span class="portfolio-tag">تطوير البرمجيات</span><span class="portfolio-tag">UX/UI</span></div>
                <a href="#" class="portfolio-card-btn"><span>رؤية المشروع كاملاً</span><img src="<?php bk_icon( 'gold-arrow.svg' ); ?>" alt="" /></a>
              </div>
            </article>
          </div>
        </div>
        <div class="portfolio-controls" id="portfolioControls">
          <button class="portfolio-arrow portfolio-arrow--prev" id="portfolioPrev" aria-label="المشروع السابق" type="button"><img src="<?php bk_icon( 'arrow-active.svg' ); ?>" alt="" /></button>
          <div class="portfolio-dots" id="portfolioDots" role="tablist" aria-label="اختيار المشروع">
            <button class="portfolio-dot" data-go="0" type="button" aria-label="المشروع الأول"></button>
            <button class="portfolio-dot active" data-go="1" type="button" aria-label="المشروع الثاني"></button>
            <button class="portfolio-dot" data-go="2" type="button" aria-label="المشروع الثالث"></button>
          </div>
          <button class="portfolio-arrow portfolio-arrow--next" id="portfolioNext" aria-label="المشروع التالي" type="button"><img src="<?php bk_icon( 'arrow-active.svg' ); ?>" alt="" class="portfolio-arrow-flip" /></button>
        </div>
      </div>
      <div class="portfolio-actions" id="portfolioActions">
        <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="portfolio-action portfolio-action--primary"><span>ابدأ مشروعك الآن</span><img src="<?php bk_icon( 'start-icon.svg' ); ?>" alt="" /></a>
        <a href="<?php echo esc_url( home_url( '/portfolio' ) ); ?>" class="portfolio-action portfolio-action--outline"><span>اعرف المزيد</span><img src="<?php bk_icon( 'more-arrow.svg' ); ?>" alt="" /></a>
      </div>
    </div>
  </section>
  <?php endif; ?>

  <!-- ===================== سيكشن الأسعار ===================== -->
  <?php if ( bk_meta_enabled('bk_front_pricing_enable', $fp_id) ) : ?>
  <section class="pricing" id="pricing">
    <div class="pricing-container">
      <header class="pricing-head" id="pricingHead">
        <h2 class="pricing-title"><?php echo esc_html( bk_meta('bk_front_pricing_title', $fp_id, 'باقات مرنة.. ونتائج غير محدودة') ); ?></h2>
        <img src="<?php bk_icon( 'heading-line.png' ); ?>" alt="" class="heading-line pricing-heading-line" aria-hidden="true" />
        <p class="pricing-desc"><?php echo esc_html( bk_meta('bk_front_pricing_desc', $fp_id) ); ?></p>
      </header>
      <div class="pricing-grid" id="pricingGrid">
        <article class="pricing-card" data-card="0">
          <img src="<?php bk_icon( 'pricing-frame.svg' ); ?>" alt="" class="pricing-card-frame" aria-hidden="true" />
          <img src="<?php bk_icon( 'pricing-key.svg' ); ?>" alt="" class="pricing-card-key" aria-hidden="true" />
          <div class="pricing-card-body">
            <h3 class="pricing-card-name">باقة التأسيس</h3>
            <p class="pricing-card-label">تبدأ من</p>
            <div class="pricing-card-price">
              <span class="pricing-card-currency"><img src="<?php bk_icon( 'riyal.svg' ); ?>" alt="" /></span>
              <span class="pricing-card-amount">2,999</span>
              <span class="pricing-card-period">/شهرياً</span>
            </div>
            <ul class="pricing-card-features">
              <li><img src="<?php bk_icon( 'feature-check.svg' ); ?>" alt="" /><span>إدارة المحتوى</span></li>
              <li><img src="<?php bk_icon( 'feature-check.svg' ); ?>" alt="" /><span>النمو الرقمي</span></li>
              <li><img src="<?php bk_icon( 'feature-check.svg' ); ?>" alt="" /><span>صناعة المحتوى والقصص</span></li>
              <li><img src="<?php bk_icon( 'feature-check.svg' ); ?>" alt="" /><span>مدير حساب مخصص والتحليلات</span></li>
              <li><img src="<?php bk_icon( 'feature-check.svg' ); ?>" alt="" /><span>التصميم الاحترافي</span></li>
            </ul>
            <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="pricing-card-btn">تواصل معنا للاشتراك</a>
          </div>
        </article>
        <article class="pricing-card pricing-card--featured" data-card="1">
          <img src="<?php bk_icon( 'pricing-frame-golden.svg' ); ?>" alt="" class="pricing-card-frame" aria-hidden="true" />
          <img src="<?php bk_icon( 'pricing-key.svg' ); ?>" alt="" class="pricing-card-key" aria-hidden="true" />
          <span class="pricing-card-badge">الأكثر شعبية</span>
          <div class="pricing-card-body">
            <h3 class="pricing-card-name">باقة النمو</h3>
            <p class="pricing-card-label">تبدأ من</p>
            <div class="pricing-card-price">
              <span class="pricing-card-currency"><img src="<?php bk_icon( 'riyal.svg' ); ?>" alt="" /></span>
              <span class="pricing-card-amount">5,999</span>
              <span class="pricing-card-period">/شهرياً</span>
            </div>
            <ul class="pricing-card-features">
              <li><img src="<?php bk_icon( 'feature-check.svg' ); ?>" alt="" /><span>تحسين محركات البحث</span></li>
              <li><img src="<?php bk_icon( 'feature-check.svg' ); ?>" alt="" /><span>إدارة الحملات الإعلانية وإدارة الإعلانات</span></li>
              <li><img src="<?php bk_icon( 'feature-check.svg' ); ?>" alt="" /><span>صناعة محتوى المنصات الرقمية</span></li>
              <li><img src="<?php bk_icon( 'feature-check.svg' ); ?>" alt="" /><span>متابعة المنصات الرقمية</span></li>
              <li><img src="<?php bk_icon( 'feature-check.svg' ); ?>" alt="" /><span>تقديم التقارير الإحصائية</span></li>
            </ul>
            <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="pricing-card-btn pricing-card-btn--gold">تواصل معنا للاشتراك</a>
          </div>
        </article>
        <article class="pricing-card" data-card="2">
          <img src="<?php bk_icon( 'pricing-frame.svg' ); ?>" alt="" class="pricing-card-frame" aria-hidden="true" />
          <img src="<?php bk_icon( 'pricing-key.svg' ); ?>" alt="" class="pricing-card-key" aria-hidden="true" />
          <div class="pricing-card-body">
            <h3 class="pricing-card-name">باقة التمكين</h3>
            <p class="pricing-card-label">تبدأ من</p>
            <div class="pricing-card-price">
              <span class="pricing-card-currency"><img src="<?php bk_icon( 'riyal.svg' ); ?>" alt="" /></span>
              <span class="pricing-card-amount">7,999</span>
              <span class="pricing-card-period">/شهرياً</span>
            </div>
            <ul class="pricing-card-features">
              <li><img src="<?php bk_icon( 'feature-check.svg' ); ?>" alt="" /><span>الأساسي</span></li>
              <li><img src="<?php bk_icon( 'feature-check.svg' ); ?>" alt="" /><span>إدارة حملة إعلانية واحدة</span></li>
              <li><img src="<?php bk_icon( 'feature-check.svg' ); ?>" alt="" /><span>تقرير شهري مفصل</span></li>
              <li><img src="<?php bk_icon( 'feature-check.svg' ); ?>" alt="" /><span>دعم فني عبر البريد الإلكتروني</span></li>
              <li><img src="<?php bk_icon( 'feature-check.svg' ); ?>" alt="" /><span>استشارة شهرية واحدة</span></li>
            </ul>
            <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="pricing-card-btn">تواصل معنا للاشتراك</a>
          </div>
        </article>
      </div>
    </div>
  </section>
  <?php endif; ?>

  <!-- ===================== طريقتنا في الشغل ===================== -->
  <?php if ( bk_meta_enabled('bk_front_how_enable', $fp_id) ) : ?>
  <section class="how" id="how">
    <div class="how-container">
      <header class="how-head" id="howHead">
        <h2 class="how-title"><?php echo esc_html( bk_meta('bk_front_how_title', $fp_id, 'طريقتنا في الشغل') ); ?></h2>
        <img src="<?php bk_icon( 'heading-line.png' ); ?>" alt="" class="heading-line how-heading-line" aria-hidden="true" />
        <p class="how-desc"><?php echo esc_html( bk_meta('bk_front_how_desc', $fp_id) ); ?></p>
      </header>
      <div class="how-grid">
        <div class="how-visual"><img src="<?php bk_icon( 'how-frame.svg' ); ?>" alt="Brand Key" class="how-frame" /></div>
        <div class="how-steps" id="howSteps">
          <article class="how-step" data-step="0"><div class="how-step-num">01</div><div class="how-step-body"><h3 class="how-step-title">تحليل وتخطيط</h3><p class="how-step-desc">بندرس عملك، سوقك، ومنافسيك — ونبني استراتيجية واضحة بأهداف قابلة للقياس</p></div></article>
          <article class="how-step" data-step="1"><div class="how-step-num">02</div><div class="how-step-body"><h3 class="how-step-title">تنفيذ الاستراتيجية</h3><p class="how-step-desc">فريقنا المتخصص ينفذ بدقة واحترافية — محتوى، إعلانات، ويب، بالكامل</p></div></article>
          <article class="how-step" data-step="2"><div class="how-step-num">03</div><div class="how-step-body"><h3 class="how-step-title">قياس الأداء</h3><p class="how-step-desc">تقارير شفافة ودورية — بتشوف بالأرقام الحقيقية وين ميزانيتك بتحقق نتائج</p></div></article>
          <article class="how-step" data-step="3"><div class="how-step-num">04</div><div class="how-step-body"><h3 class="how-step-title">تحسين مستمر</h3><p class="how-step-desc">بنحلل النتائج ونحسّن باستمرار — الهدف دايماً أعلى ROI وأقل تكلفة</p></div></article>
        </div>
      </div>
    </div>
  </section>
  <?php endif; ?>

  <!-- ===================== عملاء وثقوا فينا ===================== -->
  <?php if ( bk_meta_enabled('bk_front_clients_enable', $fp_id) ) : ?>
  <section class="clients" id="clients">
    <div class="clients-container">
      <header class="clients-head" id="clientsHead">
        <h2 class="clients-title"><?php echo esc_html( bk_meta('bk_front_clients_title', $fp_id, 'عملاء وثقوا فينا') ); ?></h2>
        <img src="<?php bk_icon( 'heading-line.png' ); ?>" alt="" class="heading-line clients-heading-line" aria-hidden="true" />
        <p class="clients-desc"><?php echo esc_html( bk_meta('bk_front_clients_desc', $fp_id) ); ?></p>
      </header>
      <div class="clients-marquee" id="clientsMarquee">
        <div class="clients-row clients-row--rtl"><div class="clients-track">
          <?php for ( $r = 0; $r < 3; $r++ ) : for ( $c = 1; $c <= 4; $c++ ) : ?>
          <div class="client-logo"><img src="<?php bk_icon( 'client-' . $c . '.png' ); ?>" alt="عميل" /></div>
          <?php endfor; endfor; ?>
        </div></div>
        <div class="clients-row clients-row--ltr"><div class="clients-track">
          <?php for ( $r = 0; $r < 3; $r++ ) : for ( $c = 5; $c <= 8; $c++ ) : ?>
          <div class="client-logo"><img src="<?php bk_icon( 'client-' . $c . '.png' ); ?>" alt="عميل" /></div>
          <?php endfor; endfor; ?>
        </div></div>
      </div>
    </div>
  </section>
  <?php endif; ?>

  <!-- ===================== ماذا يقول عملاؤنا ===================== -->
  <?php if ( bk_meta_enabled('bk_front_test_enable', $fp_id) ) : ?>
  <section class="testimonials" id="testimonials">
    <div class="testimonials-container">
      <header class="testimonials-head" id="testimonialsHead">
        <h2 class="testimonials-title"><?php echo esc_html( bk_meta('bk_front_test_title', $fp_id, 'ماذا يقول عملاؤنا') ); ?></h2>
        <img src="<?php bk_icon( 'heading-line.png' ); ?>" alt="" class="heading-line testimonials-heading-line" aria-hidden="true" />
        <p class="testimonials-desc"><?php echo esc_html( bk_meta('bk_front_test_desc', $fp_id) ); ?></p>
      </header>
      <div class="testimonials-grid" id="testimonialsGrid">
        <article class="testimonial-card" data-card="0">
          <img src="<?php bk_icon( 'quote-keys.svg' ); ?>" alt="" class="testimonial-quote" aria-hidden="true" />
          <p class="testimonial-text">كنت خايفة أبدأ في التسويق الرقمي وأخسر فلوس من غير نتيجة — براند كي وضحولي كل خطوة وقدموا تقارير شفافة كل أسبوع. ده مش شغل وكالة عادية</p>
          <div class="testimonial-stars" aria-label="5 من 5"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></div>
          <div class="testimonial-author"><div class="testimonial-avatar">خ</div><div class="testimonial-author-info"><h4 class="testimonial-name">خالد حسن</h4><p class="testimonial-role">مدير علامة تجارية مستقل</p></div></div>
        </article>
        <article class="testimonial-card" data-card="1">
          <img src="<?php bk_icon( 'quote-keys.svg' ); ?>" alt="" class="testimonial-quote" aria-hidden="true" />
          <p class="testimonial-text">الشيء اللي يميز براند كي إنهم بيفهموا عملك الأول قبل ما يبدأوا — مش بيبيعوا خدمات، بيقدموا حلول</p>
          <div class="testimonial-stars" aria-label="5 من 5"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></div>
          <div class="testimonial-author"><div class="testimonial-avatar">س</div><div class="testimonial-author-info"><h4 class="testimonial-name">سارة علي</h4><p class="testimonial-role">مديرة التسويق، متجر الأناقة</p></div></div>
        </article>
        <article class="testimonial-card" data-card="2">
          <img src="<?php bk_icon( 'quote-keys.svg' ); ?>" alt="" class="testimonial-quote" aria-hidden="true" />
          <p class="testimonial-text">براند كي غيّرت صورة شركتنا الرقمية بالكامل — خلال 3 شهور بس حسينا بفرق حقيقي في الاستفسارات والمبيعات</p>
          <div class="testimonial-stars" aria-label="5 من 5"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></div>
          <div class="testimonial-author"><div class="testimonial-avatar">أ</div><div class="testimonial-author-info"><h4 class="testimonial-name">أحمد محمد</h4><p class="testimonial-role">الرئيس التنفيذي، شركة النجاح</p></div></div>
        </article>
      </div>
      <div class="testimonials-nav" id="testimonialsNav">
        <button class="testimonial-nav-btn" id="testPrev" aria-label="السابق"><img src="<?php bk_icon( 'arrow-active.svg' ); ?>" alt="" /></button>
        <div class="testimonials-dots" id="testDots"><span class="testimonial-dot active" data-dot="0"></span><span class="testimonial-dot" data-dot="1"></span><span class="testimonial-dot" data-dot="2"></span></div>
        <button class="testimonial-nav-btn" id="testNext" aria-label="التالي"><img src="<?php bk_icon( 'arrow-inactive.svg' ); ?>" alt="" /></button>
      </div>
    </div>
  </section>
  <?php endif; ?>

  <!-- ===================== مستعد تبدأ رحلتك الرقمية ===================== -->
  <?php if ( bk_meta_enabled('bk_front_cta_enable', $fp_id) ) : ?>
  <section class="cta-final" id="ctaFinal">
    <img src="<?php bk_icon( 'cta-vector-right.svg' ); ?>" alt="" class="cta-final-deco cta-final-deco--right" aria-hidden="true" />
    <img src="<?php bk_icon( 'cta-vector-left.svg' ); ?>" alt="" class="cta-final-deco cta-final-deco--left" aria-hidden="true" />
    <div class="cta-final-container">
      <div class="cta-final-text" id="ctaFinalText">
        <h2 class="cta-final-title"><?php echo esc_html( bk_meta('bk_front_cta_title', $fp_id, 'مستعد تبدأ رحلتك الرقمية!') ); ?></h2>
        <img src="<?php bk_icon( 'heading-line.png' ); ?>" alt="" class="heading-line cta-final-heading-line" aria-hidden="true" />
        <p class="cta-final-desc"><?php echo esc_html( bk_meta('bk_front_cta_desc', $fp_id) ); ?></p>
      </div>
      <div class="cta-final-action" id="ctaFinalAction">
        <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="cta-final-btn"><span><?php echo esc_html( bk_meta('bk_front_cta_btn_text', $fp_id, 'تواصل معنا الآن!') ); ?></span><img src="<?php bk_icon( 'cta-arrow.svg' ); ?>" alt="" /></a>
      </div>
    </div>
  </section>
  <?php endif; ?>

  <!-- ===================== الأسئلة الشائعة ===================== -->
  <?php if ( bk_meta_enabled('bk_front_faq_enable', $fp_id) ) : ?>
  <section class="faq" id="faq">
    <div class="faq-container">
      <header class="faq-head" id="faqHead">
        <h2 class="faq-title"><?php echo esc_html( bk_meta('bk_front_faq_title', $fp_id, 'الأسئلة الشائعة') ); ?></h2>
        <img src="<?php bk_icon( 'heading-line.png' ); ?>" alt="" class="heading-line faq-heading-line" aria-hidden="true" />
        <p class="faq-desc"><?php echo esc_html( bk_meta('bk_front_faq_desc', $fp_id) ); ?></p>
      </header>
      <div class="faq-grid" id="faqGrid">
        <?php
        $faqs = array(
          array('كيف تقيسون نجاح الحملات التسويقية؟','نقيس النجاح عبر مؤشرات أداء واضحة (KPIs) تشمل: معدل العائد على الاستثمار (ROI)، تكلفة اكتساب العميل (CAC)، معدل التحويل، والنمو في الزيارات والمبيعات. نقدم تقارير شفافة دورية بتظهرلك بالأرقام الحقيقية وين بتحقق ميزانيتك نتائج.'),
          array('ما هي تكلفة خدماتكم وكيف يتم التسعير؟','التكلفة تعتمد على حجم المشروع ونوع الخدمات المطلوبة. لدينا باقات مرنة تبدأ من 2,999 ريال شهرياً وتبقى قابلة للتخصيص بالكامل. نقدم جلسة استشارية مجانية لتحديد الباقة الأنسب لك بناءً على أهدافك وميزانيتك.'),
          array('هل تقدمون تدريب وتمكين للفرق الداخلية؟','نعم، نقدم برامج تدريبية متخصصة للفرق الداخلية تشمل التسويق الرقمي، إدارة المحتوى، تحليل البيانات، وأدوات التسويق الحديثة. هدفنا تمكين فريقك ليكون قادراً على إدارة استراتيجياتك التسويقية بشكل مستقل.'),
          array('كيف أبدأ العمل مع Brandkey؟ ما هي الخطوات؟','البدء بسيط: 1) احجز استشارة مجانية 30 دقيقة. 2) نحلل وضعك ونحدد أهدافك. 3) نقدم خطة استراتيجية مخصصة. 4) نبدأ التنفيذ مع تقارير دورية. كل خطوة شفافة وأنت عارف بالظبط إيه اللي بيحصل.'),
          array('ما هي خدمات التسويق الرقمي التي تقدمونها؟','نقدم خدمات متكاملة تشمل: التسويق الرقمي وإدارة الحملات الإعلانية، تحسين محركات البحث (SEO)، صناعة المحتوى، تصميم وتطوير المواقع والمتاجر الإلكترونية، إدارة السوشيال ميديا، والتصميم الإبداعي والهوية البصرية.'),
          array('كم من الوقت يستغرق رؤية النتائج من حملات التسويق الرقمي؟','النتائج تختلف حسب نوع الخدمة وأهدافك. الحملات الإعلانية المدفوعة ممكن تظهر نتائج خلال أسابيع، بينما SEO يحتاج 3-6 أشهر. نحن نضع توقعات واقعية من البداية ونتابع التقدم بشكل دوري عشان نضمن أعلى ROI.'),
          array('ما الذي يميز Brandkey عن وكالات التسويق الأخرى؟','إحنا مش بنبيع خدمات، إحنا بنقدم حلول. بنفهم عملك الأول قبل ما نبدأ، ونبني استراتيجية مخصصة بالكامل. التقارير شفافة 100%، والتواصل مباشر مع فريق متخصص — مش مجرد رقم في قائمة عملاء.'),
          array('هل تعملون مع الشركات الصغيرة والمتوسطة أم الكبيرة فقط؟','نعمل مع جميع الأحجام! من الشركات الناشئة للمؤسسات الكبرى. باقاتنا قابلة للتخصيص لتلبي احتياجات أي قطاع وحجم. كل عميل بالنسبالنا تحدي جديد وقصة نجاح نفخر بيها — بغض النظر عن حجم شركته.'),
        );
        foreach ( $faqs as $i => $faq ) :
        ?>
        <div class="faq-item" data-faq="<?php echo esc_attr( $i ); ?>">
          <button class="faq-question" aria-expanded="false"><span><?php echo esc_html( $faq[0] ); ?></span><img src="<?php bk_icon( 'faq-chevron.svg' ); ?>" alt="" class="faq-chevron" /></button>
          <div class="faq-answer"><p><?php echo esc_html( $faq[1] ); ?></p></div>
        </div>
        <?php endforeach; ?>
      </div>
      <div class="faq-cta" id="faqCta">
        <img src="<?php bk_icon( 'faq-vector.svg' ); ?>" alt="" class="faq-cta-vector" aria-hidden="true" />
        <div class="faq-cta-content">
          <h3 class="faq-cta-title">هل لا تزال لديك أسئلة؟</h3>
          <p class="faq-cta-sub">فريقنا جاهز لمساعدتك — تواصل معنا واحصل على إجابات فورية</p>
        </div>
        <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="faq-cta-btn"><span>تواصل معنا الآن</span><img src="<?php bk_icon( 'cta-arrow.svg' ); ?>" alt="" /></a>
      </div>
    </div>
  </section>
  <?php endif; ?>

  <!-- ===================== آخر أخبارنا ===================== -->
  <?php if ( bk_meta_enabled('bk_front_blog_enable', $fp_id) ) : ?>
  <section class="blog" id="blog">
    <div class="blog-container">
      <header class="blog-head" id="blogHead">
        <div class="blog-head-text">
          <h2 class="blog-title"><?php echo esc_html( bk_meta('bk_front_blog_title', $fp_id, 'آخر أخبارنا') ); ?></h2>
          <img src="<?php bk_icon( 'heading-line.png' ); ?>" alt="" class="heading-line blog-heading-line" aria-hidden="true" />
          <p class="blog-desc"><?php echo esc_html( bk_meta('bk_front_blog_desc', $fp_id) ); ?></p>
        </div>
        <a href="<?php echo esc_url( home_url( '/blog' ) ); ?>" class="blog-more-link"><span>المزيد</span><img src="<?php bk_icon( 'more-arrow.svg' ); ?>" alt="" /></a>
      </header>
      <div class="blog-grid" id="blogGrid">
        <?php
        $recent = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 3 ) );
        $default_posts = array(
          array('تعلن عن شراكة استراتيجية جديدة لتوسيع خدمات الحلول الرقمية.','انطلاقاً من رؤيتنا للتكامل، وقعنا اتفاقية تعاون لتقديم خدمات برمجية متقدمة لعملائنا في المنطقة.','blog-1.png','20 يوليو 2025'),
          array('سيكولوجية الألوان: كيف تمنح علامتك التجارية طابع "الفخامة" و"الراحة"؟','نغوص في دلالات الألوان وكيف نستخدم المساحات البيضاء لخلق شعور بالراحة والثقة لدى عملائك.','blog-2.png','20 يوليو 2025'),
          array('كيف تصمم كتابًا تعليميًا تفاعليًا يجذب الطلاب ويحفزهم على التعلم؟','تعرف على أهم القواعد لتنسيق الكتب المدرسية وتصميمها بلغات متعددة لضمان سهولة القراءة وتوصيل المعلومة بفعالية.','blog-3.png','20 يوليو 2025'),
        );
        if ( $recent->have_posts() ) :
          $idx = 0;
          while ( $recent->have_posts() ) : $recent->the_post();
            $img = has_post_thumbnail() ? get_the_post_thumbnail_url( get_the_ID(), 'bk-card' ) : BK_URI . '/assets/icons/blog-' . ($idx+1) . '.png';
        ?>
        <article class="blog-card" data-card="<?php echo esc_attr( $idx ); ?>">
          <div class="blog-card-visual"><img src="<?php echo esc_url( $img ); ?>" alt="<?php the_title_attribute(); ?>" class="blog-card-img" /><span class="blog-card-badge">الجديد</span></div>
          <div class="blog-card-body">
            <h3 class="blog-card-title"><?php the_title(); ?></h3>
            <p class="blog-card-excerpt"><?php echo esc_html( wp_trim_words( get_the_content(), 22 ) ); ?></p>
            <div class="blog-card-footer"><span class="blog-card-date"><?php echo esc_html( get_the_date( 'j F Y' ) ); ?></span><a href="<?php the_permalink(); ?>" class="blog-card-link"><span>المزيد</span><img src="<?php bk_icon( 'gold-arrow.svg' ); ?>" alt="" /></a></div>
          </div>
        </article>
        <?php $idx++; endwhile; wp_reset_postdata();
        else :
          foreach ( $default_posts as $i => $p ) : ?>
        <article class="blog-card" data-card="<?php echo esc_attr( $i ); ?>">
          <div class="blog-card-visual"><img src="<?php bk_icon( $p[2] ); ?>" alt="<?php echo esc_attr( $p[0] ); ?>" class="blog-card-img" /><span class="blog-card-badge">الجديد</span></div>
          <div class="blog-card-body">
            <h3 class="blog-card-title"><?php echo esc_html( $p[0] ); ?></h3>
            <p class="blog-card-excerpt"><?php echo esc_html( $p[1] ); ?></p>
            <div class="blog-card-footer"><span class="blog-card-date"><?php echo esc_html( $p[3] ); ?></span><a href="<?php echo esc_url( home_url( '/blog' ) ); ?>" class="blog-card-link"><span>المزيد</span><img src="<?php bk_icon( 'gold-arrow.svg' ); ?>" alt="" /></a></div>
          </div>
        </article>
        <?php endforeach; endif; ?>
      </div>
    </div>
  </section>
  <?php endif; ?>

</main>

<?php get_footer(); ?>
