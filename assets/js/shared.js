/* ============================================================
   Brand Key — Shared JS (Header, Nav, Footer)
   Pure Vanilla JS · No dependencies
   ============================================================ */

/* ============================================================
   تهيئة الهيدر والفوتر (يتم استدعاؤها بعد تحميل includes.js)
   ============================================================ */
function initAll() {
  'use strict';

  // تهيئة الهيدر والناف
  if (typeof initHeaderNav === 'function') initHeaderNav();
  // تهيئة الفوتر
  if (typeof initFooter === 'function') initFooter();
  // تهيئة الهيرو الداخلي (لو موجود)
  if (typeof initInnerHero === 'function') initInnerHero();
  // تهيئة سيكشن التجارة والمبيعات (Stacked Cards on Scroll)
  if (typeof initCommerceStack === 'function') initCommerceStack();
  // تهيئة toggle الباقات (لو موجود)
  if (typeof initPricingToggle === 'function') initPricingToggle();
}

// تشغيل تلقائي لما DOM يتحمل
if (document.readyState === 'loading') {
  document.addEventListener('DOMContentLoaded', initAll);
} else {
  initAll();
}

/* ============================================================
   Header & Nav Logic
   ============================================================ */
function initHeaderNav() {
  'use strict';

  initShared();
}

function initShared() {
  'use strict';

  /* ---------- العناصر ---------- */
  var header     = document.getElementById('siteHeader');
  var menuBtn    = document.getElementById('menuBtn');
  var closeBtn   = document.getElementById('closeBtn');
  var searchBtn  = document.getElementById('searchBtn');
  var langBtn    = document.getElementById('langBtn');
  var ctaBtn     = document.getElementById('ctaBtn');
  var overlay    = document.getElementById('navOverlay');
  var backdrop   = document.getElementById('navBackdrop');
  var navItems   = Array.prototype.slice.call(document.querySelectorAll('.nav-link'));
  var navLinks   = Array.prototype.slice.call(document.querySelectorAll('.nav-overlay a[href^="#"]'));

  var isOpen = false;
  var lastFocused = null;

  /* ---------- فتح الناف ---------- */
  function openNav() {
    if (isOpen) return;
    isOpen = true;

    // حفظ التركيز الحالي عشان نرجعه بعد الإغلاق
    lastFocused = document.activeElement;

    document.body.classList.add('nav-open');
    overlay.classList.add('is-open');
    overlay.setAttribute('aria-hidden', 'false');
    menuBtn.setAttribute('aria-expanded', 'true');

    // staggered animation لعناصر الناف
    // كل عنصر يتأخر بزيادة بسيطة عن اللي قبله
    var baseDelay = 0.35; // ثانية — بعد ما اللوحة تظهر
    var step = 0.06;      // الفرق بين كل عنصر والتالي
    navItems.forEach(function (item, i) {
      item.style.animation = 'none';
      // إعادة التشغيل
      void item.offsetWidth;
      item.style.animation = 'fadeUp 0.5s var(--ease-out) ' + (baseDelay + i * step) + 's both';
    });

    // نقل التركيز لزر الإغلاق (إتاحة)
    window.setTimeout(function () {
      if (closeBtn) closeBtn.focus();
    }, 450);
  }

  /* ---------- إغلاق الناف ---------- */
  function closeNav() {
    if (!isOpen) return;
    isOpen = false;

    document.body.classList.remove('nav-open');
    overlay.classList.remove('is-open');
    overlay.setAttribute('aria-hidden', 'true');
    menuBtn.setAttribute('aria-expanded', 'false');

    // تصفير أنيميشن الـ stagger عشان تتعمل تاني لما نفتح
    navItems.forEach(function (item) {
      item.style.animation = 'none';
    });

    // رجوع التركيز لزر القائمة
    if (lastFocused && typeof lastFocused.focus === 'function') {
      window.setTimeout(function () {
        lastFocused.focus();
      }, 100);
    }
  }

  /* ---------- ربط الأحداث ---------- */
  if (menuBtn)   menuBtn.addEventListener('click', openNav);
  if (closeBtn)  closeBtn.addEventListener('click', closeNav);
  if (backdrop)  backdrop.addEventListener('click', closeNav);

  // إغلاق بالـ ESC
  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape' && isOpen) {
      e.preventDefault();
      closeNav();
    }
  });

  // إغلاق لما تضغط على أي رابط داخل الناف (تجربة المستخدم)
  navLinks.forEach(function (link) {
    link.addEventListener('click', function () {
      if (isOpen) closeNav();
    });
  });

  /* ---------- تاب تراب (focus trap) داخل الـ overlay ---------- */
  var FOCUSABLE = 'a[href], button:not([disabled]), input, textarea, select, [tabindex]:not([tabindex="-1"])';
  overlay.addEventListener('keydown', function (e) {
    if (e.key !== 'Tab' || !isOpen) return;
    var nodes = Array.prototype.slice.call(overlay.querySelectorAll(FOCUSABLE))
      .filter(function (n) { return n.offsetParent !== null; });
    if (!nodes.length) return;
    var first = nodes[0];
    var last = nodes[nodes.length - 1];
    if (e.shiftKey && document.activeElement === first) {
      e.preventDefault(); last.focus();
    } else if (!e.shiftKey && document.activeElement === last) {
      e.preventDefault(); first.focus();
    }
  });

  /* ---------- ظل الهيدر عند الـ scroll ---------- */
  var ticking = false;
  function onScroll() {
    if (ticking) return;
    ticking = true;
    window.requestAnimationFrame(function () {
      if (window.scrollY > 8) {
        header.classList.add('scrolled');
      } else {
        header.classList.remove('scrolled');
      }
      ticking = false;
    });
  }
  window.addEventListener('scroll', onScroll, { passive: true });

  /* ---------- فتح البحث (محاكاة) ---------- */
  if (searchBtn) {
    searchBtn.addEventListener('click', function () {
      // هنا هنبني مودال البحث بعدين — دلوقتي ردة فعل بسيطة
      pulse(searchBtn);
    });
  }

  /* ---------- تبديل اللغة (محاكاة) ---------- */
  if (langBtn) {
    langBtn.addEventListener('click', function () {
      var span = langBtn.querySelector('span');
      if (!span) return;
      var cur = span.textContent.trim();
      span.textContent = cur === 'EN' ? 'ع' : 'EN';
      pulse(langBtn);
    });
  }

  /* ---------- الـ CTA: اهتزاز لطيف ---------- */
  if (ctaBtn) {
    ctaBtn.addEventListener('click', function (e) {
      // لو الرابط # فقط نمنع القفز ونعمل أنيميشن
      var href = ctaBtn.getAttribute('href');
      if (href === '#' || href === '#contact') {
        // هنا هنبني القفز لسيكشن التواصل لما يتعمل
      }
    });
  }

  /* ---------- أداة مساعدة: نبضة بسيطة ---------- */
  function pulse(el) {
    el.style.transition = 'transform 0.18s ease';
    el.style.transform = 'scale(0.92)';
    window.setTimeout(function () {
      el.style.transform = '';
    }, 180);
  }

  /* ---------- مفتاح اختصار: زر "M" لفتح الناف ---------- */
  document.addEventListener('keydown', function (e) {
    // تجاهل لو المستخدم بيكتب في حقل
    var tag = (e.target.tagName || '').toLowerCase();
    if (tag === 'input' || tag === 'textarea' || tag === 'select') return;
    if (e.key === 'm' || e.key === 'M') {
      if (isOpen) closeNav(); else openNav();
    }
  });

  /* ---------- تحسين أداء الـ hover على الموبايل ---------- */
  if (window.matchMedia('(hover: none)').matches) {
    document.documentElement.classList.add('no-hover');
  }

  /* ---------- موبايل: توجال أقسام الناف (accordion) ---------- */
  var navSectionHeadings = Array.prototype.slice.call(document.querySelectorAll('.nav-section-heading'));
  navSectionHeadings.forEach(function (heading) {
    heading.addEventListener('click', function () {
      // بس على الموبايل (max-width 600)
      if (window.innerWidth > 600) return;
      var section = heading.parentElement;
      var isActive = section.classList.contains('active-mobile');
      // نقفل الكل
      navSectionHeadings.forEach(function (h) {
        h.parentElement.classList.remove('active-mobile');
      });
      // نفتح الحالي لو كان مقفول
      if (!isActive) {
        section.classList.add('active-mobile');
      }
    });
  });

  /* ============================================================
     تفاعلات الفوتر
     ============================================================ */

  /* ---------- count-up لإحصائيات الهيرو ---------- */
  var statNumbers = Array.prototype.slice.call(document.querySelectorAll('.stat-number'));

  function animateCount(el) {
    var target = parseFloat(el.getAttribute('data-count'));
    var suffix = el.getAttribute('data-suffix') || '';
    var decimals = parseInt(el.getAttribute('data-decimals') || '0', 10);
    if (isNaN(target)) return;

    var duration = 1600; // ms
    var startTime = null;

    function step(timestamp) {
      if (!startTime) startTime = timestamp;
      var progress = Math.min((timestamp - startTime) / duration, 1);
      // ease-out
      var eased = 1 - Math.pow(1 - progress, 3);
      var current = target * eased;
      el.textContent = current.toFixed(decimals) + suffix;
      if (progress < 1) {
        window.requestAnimationFrame(step);
      } else {
        el.textContent = target.toFixed(decimals) + suffix;
      }
    }
    window.requestAnimationFrame(step);
  }

  if ('IntersectionObserver' in window && statNumbers.length) {
    var statIO = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          animateCount(entry.target);
          statIO.unobserve(entry.target);
        }
      });
    }, { threshold: 0.5 });
    statNumbers.forEach(function (s) { statIO.observe(s); });
  } else {
    // fallback
    statNumbers.forEach(function (s) {
      var t = parseFloat(s.getAttribute('data-count'));
      var suffix = s.getAttribute('data-suffix') || '';
      var decimals = parseInt(s.getAttribute('data-decimals') || '0', 10);
      if (!isNaN(t)) s.textContent = t.toFixed(decimals) + suffix;
    });
  }

  /* ---------- parallax خفيف للدائرة والإطار والأشكال عند تحريك الماوس ---------- */
  var heroVisual = document.querySelector('.hero-visual');
  var heroCircle = document.querySelector('.hero-circle');
  var heroFrame = document.querySelector('.hero-frame');
  var heroShapes = Array.prototype.slice.call(document.querySelectorAll('.hero-shape'));

  if (heroVisual && heroCircle && window.matchMedia('(hover: hover)').matches) {
    var isCoarse = window.matchMedia('(pointer: coarse)').matches;
    if (!isCoarse) {
      heroVisual.addEventListener('mousemove', function (e) {
        var rect = heroVisual.getBoundingClientRect();
        var x = (e.clientX - rect.left) / rect.width - 0.5; // -0.5 .. 0.5
        var y = (e.clientY - rect.top) / rect.height - 0.5;
        // الدائرة تتحرك بشكل خفيف (نسبي لمركزها)
        heroCircle.style.transform = 'translate(calc(-50% + ' + (x * -10) + 'px), calc(-50% + ' + (y * -10) + 'px))';
        // الإطار يتحرك بشكل أخف
        if (heroFrame) heroFrame.style.transform = 'translate(' + (x * 6) + 'px, ' + (y * 6) + 'px)';
        // الأشكال تتحرك أكثر (عمق أكبر)
        heroShapes.forEach(function (sh, i) {
          var factor = (i + 1) * 8;
          sh.style.transform = 'translate(' + (x * factor) + 'px, ' + (y * factor) + 'px)';
        });
      });
      heroVisual.addEventListener('mouseleave', function () {
        heroCircle.style.transform = '';
        if (heroFrame) heroFrame.style.transform = '';
        heroShapes.forEach(function (sh) { sh.style.transform = ''; });
      });
    }
  }

  /* ============================================================
     تفاعلات سيكشن الخدمات (Accordion)
     ============================================================ */

  var serviceCards = Array.prototype.slice.call(document.querySelectorAll('.service-card'));

  /* Accordion: click على رأس الكرت → فتح/إغلاق */
  serviceCards.forEach(function (card) {
    var header = card.querySelector('.service-card-header');
    if (!header) return;

    header.addEventListener('click', function () {
      var isActive = card.classList.contains('active');

      // إغلاق كل الكروت
      serviceCards.forEach(function (other) {
        other.classList.remove('active');
        var otherHeader = other.querySelector('.service-card-header');
        if (otherHeader) otherHeader.setAttribute('aria-expanded', 'false');
      });

      // فتح الحالي لو كان مغلق
      if (!isActive) {
        card.classList.add('active');
        header.setAttribute('aria-expanded', 'true');
      }
    });
  });

  /* منع القفز الافتراضي لروابط الخدمات التجريبية */
  var serviceAnchors = Array.prototype.slice.call(
    document.querySelectorAll('.services a[href="#"]')
  );
  serviceAnchors.forEach(function (a) {
    a.addEventListener('click', function (e) { e.preventDefault(); });
  });

  /* ============================================================
     تفاعلات سيكشن الاستشارات
     ============================================================ */

  var consultCards = Array.prototype.slice.call(document.querySelectorAll('.consult-card'));

  if ('IntersectionObserver' in window && consultCards.length) {
    var consultIO = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('revealed');
          consultIO.unobserve(entry.target);
        }
      });
    }, { threshold: 0.2, rootMargin: '0px 0px -40px 0px' });
    consultCards.forEach(function (card) { consultIO.observe(card); });
  } else {
    consultCards.forEach(function (c) { c.classList.add('revealed'); });
  }

  /* منع القفز الافتراضي لروابط الاستشارات التجريبية */
  var consultAnchors = Array.prototype.slice.call(
    document.querySelectorAll('.consult a[href="#"]')
  );
  consultAnchors.forEach(function (a) {
    a.addEventListener('click', function (e) { e.preventDefault(); });
  });

  /* ============================================================
     تفاعلات سيكشن القطاعات
     ============================================================ */

  var sectorsHead = document.getElementById('sectorsHead');
  var sectorCards = Array.prototype.slice.call(document.querySelectorAll('.sector-card'));
  var sectorsMore = document.getElementById('sectorsMore');

  if ('IntersectionObserver' in window) {
    // رأس السيكشن
    if (sectorsHead) {
      var sectorsHeadIO = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            sectorsHead.classList.add('revealed');
            sectorsHeadIO.unobserve(entry.target);
          }
        });
      }, { threshold: 0.3 });
      sectorsHeadIO.observe(sectorsHead);
    }

    // الكروت — staggered reveal
    var sectorCardIO = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('revealed');
          sectorCardIO.unobserve(entry.target);
        }
      });
    }, { threshold: 0.15, rootMargin: '0px 0px -40px 0px' });
    sectorCards.forEach(function (card) { sectorCardIO.observe(card); });

    // زر CTA
    if (sectorsMore) {
      var sectorsMoreIO = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            sectorsMore.classList.add('revealed');
            sectorsMoreIO.unobserve(entry.target);
          }
        });
      }, { threshold: 0.5 });
      sectorsMoreIO.observe(sectorsMore);
    }
  } else {
    // fallback
    if (sectorsHead) sectorsHead.classList.add('revealed');
    sectorCards.forEach(function (c) { c.classList.add('revealed'); });
    if (sectorsMore) sectorsMore.classList.add('revealed');
  }

  /* ============================================================
     تفاعلات سيكشن CTA الثاني
     ============================================================ */

  var cta2Head = document.getElementById('cta2Head');
  var cta2Cards = Array.prototype.slice.call(document.querySelectorAll('.cta2-card'));

  if ('IntersectionObserver' in window) {
    // رأس السيكشن
    if (cta2Head) {
      var cta2HeadIO = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            cta2Head.classList.add('revealed');
            cta2HeadIO.unobserve(entry.target);
          }
        });
      }, { threshold: 0.3 });
      cta2HeadIO.observe(cta2Head);
    }

    // الكروت — staggered reveal
    var cta2CardIO = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('revealed');
          cta2CardIO.unobserve(entry.target);
        }
      });
    }, { threshold: 0.2, rootMargin: '0px 0px -40px 0px' });
    cta2Cards.forEach(function (card) { cta2CardIO.observe(card); });
  } else {
    if (cta2Head) cta2Head.classList.add('revealed');
    cta2Cards.forEach(function (c) { c.classList.add('revealed'); });
  }

  /* منع القفز الافتراضي لروابط CTA الثاني التجريبية */
  var cta2Anchors = Array.prototype.slice.call(
    document.querySelectorAll('.cta2 a[href="#"]')
  );
  cta2Anchors.forEach(function (a) {
    a.addEventListener('click', function (e) { e.preventDefault(); });
  });

  /* ============================================================
     تفاعلات سيكشن آخر أعمالنا — Coverflow Slider
     ============================================================ */

  var portfolioHead = document.getElementById('portfolioHead');
  var portfolioSlider = document.getElementById('portfolioSlider');
  var portfolioCards = Array.prototype.slice.call(document.querySelectorAll('.portfolio-card'));
  var portfolioActions = document.getElementById('portfolioActions');
  var portfolioPrev = document.getElementById('portfolioPrev');
  var portfolioNext = document.getElementById('portfolioNext');
  var portfolioDots = Array.prototype.slice.call(document.querySelectorAll('.portfolio-dot'));
  var portfolioViewport = document.querySelector('.portfolio-viewport');

  var portfolioActive = 1; // الكارت اللي في النص (افتراضي: التاني من 3)
  var portfolioTotal = portfolioCards.length;
  var portfolioAutoplayTimer = null;
  var portfolioAutoplayDelay = 6000;
  var portfolioIsDesktop = window.matchMedia('(min-width: 601px)').matches;
  var portfolioSwipeStart = null;
  var portfolioSwipeDelta = 0;

  /* تحديث مواضع الكروت بناءً على الكارت النشط */
  function updatePortfolioSlider() {
    portfolioCards.forEach(function (card, i) {
      // احسب الإزاحة.normalize بين -total/2 و +total/2
      var offset = i - portfolioActive;
      if (offset > portfolioTotal / 2) offset -= portfolioTotal;
      if (offset < -portfolioTotal / 2) offset += portfolioTotal;

      var pos, tx, scale, opacity, z, rot;

      if (offset === 0) {
        // الكارت النشط في النص — كامل الحجم
        pos = 0;
        tx = '0px';
        scale = 1;
        opacity = 1;
        z = 3;
        rot = 0;
        card.setAttribute('aria-hidden', 'false');
      } else if (offset === -1) {
        // الكارت السابق — على اليمين في RTL (تحرّك لليمين = +translateX)
        pos = -1;
        tx = '55%';
        scale = 0.78;
        opacity = 0.55;
        z = 2;
        rot = -10; // إمالة خفيفة بـ 3D
        card.setAttribute('aria-hidden', 'true');
      } else if (offset === 1) {
        // الكارت التالي — على الشمال في RTL (تحرّك لليسار = -translateX)
        pos = 1;
        tx = '-55%';
        scale = 0.78;
        opacity = 0.55;
        z = 2;
        rot = 10;
        card.setAttribute('aria-hidden', 'true');
      } else {
        // بعيد — خافي
        pos = 'hidden';
        tx = (offset < 0 ? '120%' : '-120%');
        scale = 0.6;
        opacity = 0;
        z = 0;
        rot = 0;
        card.setAttribute('aria-hidden', 'true');
      }

      card.setAttribute('data-pos', pos);
      card.style.setProperty('--tx', tx);
      card.style.setProperty('--scale', scale);
      card.style.setProperty('--opacity', opacity);
      card.style.setProperty('--z', z);
      card.style.setProperty('--rot', rot + 'deg');
    });

    // تحديث النقاط
    portfolioDots.forEach(function (dot, i) {
      dot.classList.toggle('active', i === portfolioActive);
    });
  }

  /* الذهاب لكارت محدد */
  function portfolioGoTo(index) {
    if (index < 0) index = portfolioTotal - 1;
    if (index >= portfolioTotal) index = 0;
    if (index === portfolioActive) return;
    portfolioActive = index;
    updatePortfolioSlider();
    restartPortfolioAutoplay();
  }

  /* السهم السابق */
  function portfolioPrevSlide() {
    portfolioGoTo(portfolioActive - 1);
  }
  /* السهم التالي */
  function portfolioNextSlide() {
    portfolioGoTo(portfolioActive + 1);
  }

  /* التشغيل التلقائي */
  function startPortfolioAutoplay() {
    if (!portfolioIsDesktop) return;
    if (!portfolioSlider) return; // لو مفيش portfolio section (صفحة غير الرئيسية)
    stopPortfolioAutoplay();
    portfolioAutoplayTimer = window.setInterval(function () {
      // اتأكد إن السيكشن في الـ viewport
      if (document.hidden) return;
      if (!portfolioSlider) return; // تأكيد إضافي
      var rect = portfolioSlider.getBoundingClientRect();
      var inView = rect.top < window.innerHeight && rect.bottom > 0;
      if (inView) portfolioNextSlide();
    }, portfolioAutoplayDelay);
  }
  function stopPortfolioAutoplay() {
    if (portfolioAutoplayTimer) {
      window.clearInterval(portfolioAutoplayTimer);
      portfolioAutoplayTimer = null;
    }
  }
  function restartPortfolioAutoplay() {
    if (!portfolioAutoplayTimer) return;
    stopPortfolioAutoplay();
    startPortfolioAutoplay();
  }

  /* ربط الأحداث */
  if (portfolioPrev) portfolioPrev.addEventListener('click', portfolioPrevSlide);
  if (portfolioNext) portfolioNext.addEventListener('click', portfolioNextSlide);

  // click على النقاط
  portfolioDots.forEach(function (dot) {
    dot.addEventListener('click', function () {
      var go = parseInt(dot.getAttribute('data-go'), 10);
      if (!isNaN(go)) portfolioGoTo(go);
    });
  });

  // click على الكروت الجانبية عشان تفتح
  portfolioCards.forEach(function (card, i) {
    card.addEventListener('click', function (e) {
      var pos = card.getAttribute('data-pos');
      if (pos === '0') return; // الكارت النشط — خليه يمشي عادي
      e.preventDefault();
      portfolioGoTo(i);
    });
  });

  // لوحة المفاتيح — أسهم اليمين/الشمال
  if (portfolioSlider) {
    portfolioSlider.setAttribute('tabindex', '0');
    portfolioSlider.addEventListener('keydown', function (e) {
      // في RTL: سهم اليمين = السابق، سهم الشمال = التالي
      if (e.key === 'ArrowRight') { e.preventDefault(); portfolioPrevSlide(); }
      else if (e.key === 'ArrowLeft') { e.preventDefault(); portfolioNextSlide(); }
    });
  }

  // اللمس (سحب بالإصبع) — swipe
  if (portfolioViewport) {
    portfolioViewport.addEventListener('touchstart', function (e) {
      if (!portfolioIsDesktop) return;
      portfolioSwipeStart = e.touches[0].clientX;
      portfolioSwipeDelta = 0;
      stopPortfolioAutoplay();
    }, { passive: true });

    portfolioViewport.addEventListener('touchmove', function (e) {
      if (portfolioSwipeStart === null) return;
      portfolioSwipeDelta = e.touches[0].clientX - portfolioSwipeStart;
    }, { passive: true });

    portfolioViewport.addEventListener('touchend', function () {
      if (portfolioSwipeStart === null) return;
      var threshold = 40;
      // في RTL: swipe لليمين (delta موجب) = السابق، swipe لليسار (delta سالب) = التالي
      if (portfolioSwipeDelta > threshold) portfolioPrevSlide();
      else if (portfolioSwipeDelta < -threshold) portfolioNextSlide();
      portfolioSwipeStart = null;
      portfolioSwipeDelta = 0;
      startPortfolioAutoplay();
    });
  }

  // إيقاف الأوتوبلاي عند الـ hover
  if (portfolioSlider) {
    portfolioSlider.addEventListener('mouseenter', stopPortfolioAutoplay);
    portfolioSlider.addEventListener('mouseleave', startPortfolioAutoplay);
    // إيقاف كمان عند focus داخل السلايدر
    portfolioSlider.addEventListener('focusin', stopPortfolioAutoplay);
    portfolioSlider.addEventListener('focusout', startPortfolioAutoplay);
  }

  // إعادة حساب isDesktop عند الـ resize
  window.addEventListener('resize', function () {
    var nowDesktop = window.matchMedia('(min-width: 601px)').matches;
    if (nowDesktop !== portfolioIsDesktop) {
      portfolioIsDesktop = nowDesktop;
      if (portfolioIsDesktop) {
        updatePortfolioSlider();
        startPortfolioAutoplay();
      } else {
        stopPortfolioAutoplay();
      }
    }
  });

  // التهيئة الأولية
  updatePortfolioSlider();

  // الأنميشن عند الظهور في الشاشة
  if ('IntersectionObserver' in window) {
    // رأس السيكشن
    if (portfolioHead) {
      var portHeadIO = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            portfolioHead.classList.add('revealed');
            portHeadIO.unobserve(entry.target);
          }
        });
      }, { threshold: 0.3 });
      portHeadIO.observe(portfolioHead);
    }

    // السلايدر نفسه
    if (portfolioSlider) {
      var portSliderIO = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            portfolioSlider.classList.add('revealed');
            portSliderIO.unobserve(entry.target);
            // تشغيل الـ autoplay بعد ظهور السلايدر
            startPortfolioAutoplay();
          }
        });
      }, { threshold: 0.2 });
      portSliderIO.observe(portfolioSlider);
    }

    // زرّان في آخر السيكشن
    if (portfolioActions) {
      var portActionsIO = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            portfolioActions.classList.add('revealed');
            portActionsIO.unobserve(entry.target);
          }
        });
      }, { threshold: 0.5 });
      portActionsIO.observe(portfolioActions);
    }
  } else {
    if (portfolioHead) portfolioHead.classList.add('revealed');
    if (portfolioSlider) portfolioSlider.classList.add('revealed');
    if (portfolioActions) portfolioActions.classList.add('revealed');
    startPortfolioAutoplay();
  }

  /* منع القفز الافتراضي لروابط أعمالنا التجريبية (باستثناء الكارت النشط اللي بياخد الكليك) */
  var portfolioAnchors = Array.prototype.slice.call(
    document.querySelectorAll('.portfolio a[href="#"]')
  );
  portfolioAnchors.forEach(function (a) {
    a.addEventListener('click', function (e) {
      // لو الكارت مش نشط، الخليك يفتح الكارت بدل ما يروح #
      var card = a.closest('.portfolio-card');
      if (card && card.getAttribute('data-pos') !== '0') {
        e.preventDefault();
        return;
      }
      e.preventDefault();
    });
  });

  // وقّف الـ autoplay لما التبويب يتفقّل
  document.addEventListener('visibilitychange', function () {
    if (document.hidden) stopPortfolioAutoplay();
    else startPortfolioAutoplay();
  });

  /* ============================================================
     تفاعلات سيكشن الأسعار
     ============================================================ */

  var pricingHead = document.getElementById('pricingHead');
  var pricingCards = Array.prototype.slice.call(document.querySelectorAll('.pricing-card'));

  if ('IntersectionObserver' in window) {
    if (pricingHead) {
      var priceHeadIO = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            pricingHead.classList.add('revealed');
            priceHeadIO.unobserve(entry.target);
          }
        });
      }, { threshold: 0.3 });
      priceHeadIO.observe(pricingHead);
    }

    var priceCardIO = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('revealed');
          priceCardIO.unobserve(entry.target);
        }
      });
    }, { threshold: 0.15, rootMargin: '0px 0px -50px 0px' });
    pricingCards.forEach(function (card) { priceCardIO.observe(card); });
  } else {
    if (pricingHead) pricingHead.classList.add('revealed');
    pricingCards.forEach(function (c) { c.classList.add('revealed'); });
  }

  /* منع القفز الافتراضي لروابط الأسعار التجريبية */
  var pricingAnchors = Array.prototype.slice.call(
    document.querySelectorAll('.pricing a[href="#"]')
  );
  pricingAnchors.forEach(function (a) {
    a.addEventListener('click', function (e) { e.preventDefault(); });
  });

  /* ============================================================
     تفاعلات سيكشن طريقتنا في الشغل
     ============================================================ */

  var howHead = document.getElementById('howHead');
  var howVisual = document.querySelector('.how-visual');
  var howSteps = Array.prototype.slice.call(document.querySelectorAll('.how-step'));

  if ('IntersectionObserver' in window) {
    // رأس السيكشن
    if (howHead) {
      var howHeadIO = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            howHead.classList.add('revealed');
            howHeadIO.unobserve(entry.target);
          }
        });
      }, { threshold: 0.3 });
      howHeadIO.observe(howHead);
    }

    // الإطار الزخرفي
    if (howVisual) {
      var howVisIO = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            howVisual.classList.add('revealed');
            howVisIO.unobserve(entry.target);
          }
        });
      }, { threshold: 0.2 });
      howVisIO.observe(howVisual);
    }

    // الخطوات — staggered reveal
    var howStepIO = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('revealed');
          howStepIO.unobserve(entry.target);
        }
      });
    }, { threshold: 0.2, rootMargin: '0px 0px -40px 0px' });
    howSteps.forEach(function (step) { howStepIO.observe(step); });
  } else {
    if (howHead) howHead.classList.add('revealed');
    if (howVisual) howVisual.classList.add('revealed');
    howSteps.forEach(function (s) { s.classList.add('revealed'); });
  }

  /* ============================================================
     تفاعلات سيكشن عملاء وثقوا فينا
     ============================================================ */

  var clientsHead = document.getElementById('clientsHead');
  var clientsTracks = Array.prototype.slice.call(document.querySelectorAll('.clients-track'));

  if ('IntersectionObserver' in window) {
    // رأس السيكشن
    if (clientsHead) {
      var clientsHeadIO = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            clientsHead.classList.add('revealed');
            clientsHeadIO.unobserve(entry.target);
          }
        });
      }, { threshold: 0.3 });
      clientsHeadIO.observe(clientsHead);
    }

    // الـ tracks تظهر لما توصل للـ viewport
    var trackIO = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('revealed');
          trackIO.unobserve(entry.target);
        }
      });
    }, { threshold: 0.1 });
    clientsTracks.forEach(function (track) { trackIO.observe(track); });
  } else {
    if (clientsHead) clientsHead.classList.add('revealed');
    clientsTracks.forEach(function (t) { t.classList.add('revealed'); });
  }

  /* ============================================================
     تفاعلات سيكشن ماذا يقول عملاؤنا
     ============================================================ */

  var testHead = document.getElementById('testimonialsHead');
  var testCards = Array.prototype.slice.call(document.querySelectorAll('.testimonial-card'));
  var testNav = document.getElementById('testimonialsNav');
  var testDots = Array.prototype.slice.call(document.querySelectorAll('.testimonial-dot'));
  var testPrev = document.getElementById('testPrev');
  var testNext = document.getElementById('testNext');
  var activeDot = 0;

  if ('IntersectionObserver' in window) {
    // رأس السيكشن
    if (testHead) {
      var testHeadIO = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            testHead.classList.add('revealed');
            testHeadIO.unobserve(entry.target);
          }
        });
      }, { threshold: 0.3 });
      testHeadIO.observe(testHead);
    }

    // الكروت — staggered reveal
    var testCardIO = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('revealed');
          testCardIO.unobserve(entry.target);
        }
      });
    }, { threshold: 0.15, rootMargin: '0px 0px -50px 0px' });
    testCards.forEach(function (card) { testCardIO.observe(card); });

    // أسهم التنقل
    if (testNav) {
      var testNavIO = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            testNav.classList.add('revealed');
            testNavIO.unobserve(entry.target);
          }
        });
      }, { threshold: 0.5 });
      testNavIO.observe(testNav);
    }
  } else {
    if (testHead) testHead.classList.add('revealed');
    testCards.forEach(function (c) { c.classList.add('revealed'); });
    if (testNav) testNav.classList.add('revealed');
  }

  /* slider: تحديث الـ active dot + active card */
  function updateTestActive(idx) {
    activeDot = idx;
    testDots.forEach(function (d, i) {
      d.classList.toggle('active', i === idx);
    });
    // إبراز الكرت النشط
    testCards.forEach(function (c, i) {
      if (i === idx) {
        c.style.transform = 'translateY(-4px)';
        c.style.boxShadow = '0 20px 50px rgba(14, 35, 63, 0.12)';
        c.style.borderColor = 'var(--gold)';
      } else {
        c.style.transform = '';
        c.style.boxShadow = '';
        c.style.borderColor = '';
      }
    });
    // تحديث الأسهم (active/inactive)
    if (testPrev && testNext) {
      testPrev.querySelector('img').src = 'icons/arrow-active.svg';
      testNext.querySelector('img').src = 'icons/arrow-inactive.svg';
    }
  }

  // click على dots
  testDots.forEach(function (dot, i) {
    dot.addEventListener('click', function () { updateTestActive(i); });
  });

  // أسهم prev/next
  if (testPrev) {
    testPrev.addEventListener('click', function () {
      var idx = (activeDot - 1 + testDots.length) % testDots.length;
      updateTestActive(idx);
    });
  }
  if (testNext) {
    testNext.addEventListener('click', function () {
      var idx = (activeDot + 1) % testDots.length;
      updateTestActive(idx);
    });
  }

  /* ============================================================
     تفاعلات سيكشن CTA النهائي
     ============================================================ */

  var ctaFinalText = document.getElementById('ctaFinalText');
  var ctaFinalAction = document.getElementById('ctaFinalAction');

  if ('IntersectionObserver' in window) {
    if (ctaFinalText) {
      var ctaTextIO = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            ctaFinalText.classList.add('revealed');
            ctaTextIO.unobserve(entry.target);
          }
        });
      }, { threshold: 0.3 });
      ctaTextIO.observe(ctaFinalText);
    }
    if (ctaFinalAction) {
      var ctaActionIO = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            ctaFinalAction.classList.add('revealed');
            ctaActionIO.unobserve(entry.target);
          }
        });
      }, { threshold: 0.3 });
      ctaActionIO.observe(ctaFinalAction);
    }
  } else {
    if (ctaFinalText) ctaFinalText.classList.add('revealed');
    if (ctaFinalAction) ctaFinalAction.classList.add('revealed');
  }

  /* ============================================================
     تفاعلات سيكشن الأسئلة الشائعة
     ============================================================ */

  var faqHead = document.getElementById('faqHead');
  var faqItems = Array.prototype.slice.call(document.querySelectorAll('.faq-item'));
  var faqCta = document.getElementById('faqCta');

  if ('IntersectionObserver' in window) {
    // رأس السيكشن
    if (faqHead) {
      var faqHeadIO = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            faqHead.classList.add('revealed');
            faqHeadIO.unobserve(entry.target);
          }
        });
      }, { threshold: 0.3 });
      faqHeadIO.observe(faqHead);
    }

    // الأسئلة — staggered reveal
    var faqItemIO = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('revealed');
          faqItemIO.unobserve(entry.target);
        }
      });
    }, { threshold: 0.1, rootMargin: '0px 0px -30px 0px' });
    faqItems.forEach(function (item) { faqItemIO.observe(item); });

    // شريط CTA
    if (faqCta) {
      var faqCtaIO = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            faqCta.classList.add('revealed');
            faqCtaIO.unobserve(entry.target);
          }
        });
      }, { threshold: 0.3 });
      faqCtaIO.observe(faqCta);
    }
  } else {
    if (faqHead) faqHead.classList.add('revealed');
    faqItems.forEach(function (i) { i.classList.add('revealed'); });
    if (faqCta) faqCta.classList.add('revealed');
  }

  /* accordion: فتح/إغلاق الإجابات */
  faqItems.forEach(function (item) {
    var btn = item.querySelector('.faq-question');
    var answer = item.querySelector('.faq-answer');

    btn.addEventListener('click', function () {
      var isActive = item.classList.contains('active');

      // إغلاق كل الأسئلة
      faqItems.forEach(function (other) {
        other.classList.remove('active');
        other.querySelector('.faq-question').setAttribute('aria-expanded', 'false');
        other.querySelector('.faq-answer').style.maxHeight = '0';
      });

      // فتح الحالي إذا كان مغلق
      if (!isActive) {
        item.classList.add('active');
        btn.setAttribute('aria-expanded', 'true');
        answer.style.maxHeight = answer.scrollHeight + 'px';
      }
    });
  });

  /* ============================================================
     تفاعلات سيكشن آخر أخبارنا
     ============================================================ */

  var blogHead = document.getElementById('blogHead');
  var blogCards = Array.prototype.slice.call(document.querySelectorAll('.blog-card'));

  if ('IntersectionObserver' in window) {
    if (blogHead) {
      var blogHeadIO = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            blogHead.classList.add('revealed');
            blogHeadIO.unobserve(entry.target);
          }
        });
      }, { threshold: 0.3 });
      blogHeadIO.observe(blogHead);
    }

    var blogCardIO = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('revealed');
          blogCardIO.unobserve(entry.target);
        }
      });
    }, { threshold: 0.15, rootMargin: '0px 0px -50px 0px' });
    blogCards.forEach(function (card) { blogCardIO.observe(card); });
  } else {
    if (blogHead) blogHead.classList.add('revealed');
    blogCards.forEach(function (c) { c.classList.add('revealed'); });
  }

  /* ---------- نموذج النشرة البريدية ---------- */
  var newsletterForm = document.getElementById('newsletterForm');
  var newsletterMsg = document.getElementById('newsletterMsg');
  var newsletterEmail = document.getElementById('newsletterEmail');

  if (newsletterForm) {
    newsletterForm.addEventListener('submit', function (e) {
      e.preventDefault();
      var email = newsletterEmail.value.trim();
      // تحقق بسيط من صحة الإيميل
      var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (!emailRegex.test(email)) {
        showMsg(newsletterMsg, 'من فضلك أدخل بريداً إلكترونياً صحيحاً', 'error');
        pulse(newsletterEmail);
        return;
      }
      // محاكاة الإرسال
      showMsg(newsletterMsg, 'تم اشتراكك بنجاح! ✓', 'success');
      newsletterEmail.value = '';
      // إخفاء الرسالة بعد 4 ثواني
      window.setTimeout(function () {
        hideMsg(newsletterMsg);
      }, 4000);
    });
  }

  function showMsg(el, text, type) {
    if (!el) return;
    el.textContent = text;
    el.className = 'newsletter-msg show ' + type;
  }
  function hideMsg(el) {
    if (!el) return;
    el.className = 'newsletter-msg';
  }

  /* ---------- أنيميشن دخول الفوتر عند الـ scroll ---------- */
  var footerSections = Array.prototype.slice.call(
    document.querySelectorAll('.footer-newsletter, .footer-col, .footer-bottom')
  );

  if ('IntersectionObserver' in window && footerSections.length) {
    var io = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          // staggered delay للأعمدة
          var col = entry.target.getAttribute('data-col');
          var delay = col ? (parseInt(col, 10) * 0.12) : 0;
          entry.target.style.transitionDelay = delay + 's';
          entry.target.classList.add('in-view');
          io.unobserve(entry.target);
        }
      });
    }, { threshold: 0.15, rootMargin: '0px 0px -40px 0px' });

    footerSections.forEach(function (section) { io.observe(section); });
  } else {
    // fallback: اعرضهم على طول
    footerSections.forEach(function (s) { s.classList.add('in-view'); });
  }

  /* ---------- سنة ديناميكية في الـ copyright ---------- */
  var copyEl = document.querySelector('.copyright');
  if (copyEl) {
    var year = new Date().getFullYear();
    copyEl.textContent = '© ' + year + ' جميع الحقوق محفوظة، براند كي';
  }

  /* ---------- منع القفز الافتراضي لروابط الفوتر التجريبية ---------- */
  var footerAnchors = Array.prototype.slice.call(
    document.querySelectorAll('.site-footer a[href="#"]')
  );
  footerAnchors.forEach(function (a) {
    a.addEventListener('click', function (e) { e.preventDefault(); });
  });

  /* ============================================================
     تفاعلات صفحة من نحن — السيكشنات الأربعة الجديدة
     ============================================================ */
  var aboutTargets = [
    { id: 'aboutExploreHead', cls: 'about-explore-head' },
    { id: 'aboutExploreGrid', cls: 'about-explore-cards', children: '.about-explore-card' },
    { id: 'aboutUsVisual', cls: 'about-us-visual' },
    { id: 'aboutUsContent', cls: 'about-us-content' },
    { id: 'aboutWhyContent', cls: 'about-why-content' },
    { id: 'aboutWhyVisual', cls: 'about-why-visual' },
    { id: 'aboutSecurityHead', cls: 'about-security-head' },
    { id: 'aboutSecurityGrid', cls: 'about-security-cards', children: '.about-security-card' },
    { id: 'aboutSecurityCta', cls: 'about-security-cta' },
    { id: 'aboutTeamHead', cls: 'about-team-head' },
    { id: 'aboutTeamSlider', cls: 'about-team-slider' },
    { id: 'servicesPhilosophyVisual', cls: 'about-us-visual' },
    { id: 'servicesPhilosophyContent', cls: 'about-us-content' },
    { id: 'servicesAxesHead', cls: 'services-axes-head' },
    { id: 'servicesAxesGrid', cls: 'services-axes-cards', children: '.services-axes-card' },
    { id: 'servicesAxesCta', cls: 'services-axes-cta' },
    { id: 'servicesContentHead', cls: 'services-content-head' },
    { id: 'servicesContentList', cls: 'services-content-rows', children: '.services-content-row' },
    { id: 'servicesContentCta', cls: 'services-content-cta' },
    { id: 'servicesMarketingHead', cls: 'services-content-head' },
    { id: 'servicesMarketingList', cls: 'services-content-rows', children: '.services-content-row' },
    { id: 'servicesMarketingCta', cls: 'services-content-cta' },
    { id: 'servicesProjectsHead', cls: 'services-projects-head' },
    { id: 'servicesMarketingProjectsHead', cls: 'services-projects-head' },
    { id: 'servicesTechHead', cls: 'services-content-head' },
    { id: 'servicesTechList', cls: 'services-content-rows', children: '.services-content-row' },
    { id: 'servicesTechCta', cls: 'services-content-cta' },
    { id: 'servicesTechProjectsHead', cls: 'services-projects-head' },
    { id: 'sectorsAxesHead', cls: 'services-axes-head' },
    { id: 'sectorsAxesGrid', cls: 'services-axes-cards', children: '.services-axes-card' },
    { id: 'sectorsAxesCta', cls: 'services-axes-cta' },
    { id: 'sectorsGridHead', cls: 'sectors-grid-head' },
    { id: 'sectorsGridCards', cls: 'sectors-grid-cards', children: '.sector-flip-card' },
    { id: 'sectorsCommerceHead', cls: 'sectors-commerce-head' },
    { id: 'sectorsCommerceList', cls: 'sectors-commerce-list', children: '.commerce-card' },
    { id: 'integrationVisionVisual', cls: 'about-us-visual' },
    { id: 'integrationVisionContent', cls: 'about-us-content' },
    { id: 'integrationCompareHead', cls: 'integration-compare-head' },
    { id: 'integrationCompareGrid', cls: 'integration-compare-grid' },
    { id: 'integrationCompareCta', cls: 'integration-compare-cta' },
    { id: 'integrationTimelineHead', cls: 'integration-timeline-head' },
    { id: 'integrationTimelineGrid', cls: 'integration-timeline-grid' },
    { id: 'integrationServicesHead', cls: 'integration-services-head' },
    { id: 'integrationServicesGrid', cls: 'integration-services-grid' },
    { id: 'integrationServicesCta', cls: 'integration-services-cta' },
    { id: 'integrationDeliverablesHead', cls: 'integration-deliverables-head' },
    { id: 'integrationDeliverablesGrid', cls: 'integration-deliverables-grid' },
    { id: 'integrationDeliverablesCta', cls: 'integration-deliverables-cta' },
    { id: 'trainingExploreHead', cls: 'about-explore-head' },
    { id: 'trainingExploreGrid', cls: 'about-explore-cards', children: '.about-explore-card' },
    { id: 'trainingProblemsHead', cls: 'training-problems-head' },
    { id: 'trainingProblemsGrid', cls: 'training-problems-grid' },
    { id: 'trainingProblemsCta', cls: 'training-problems-cta' },
    { id: 'trainingAudienceHead', cls: 'integration-services-head' },
    { id: 'trainingAudienceGrid', cls: 'integration-services-grid' },
    { id: 'trainingAudienceCta', cls: 'integration-services-cta' },
    { id: 'trainingProgramsHead', cls: 'training-programs-head' },
    { id: 'trainingProgramsGrid', cls: 'training-programs-grid' },
    { id: 'trainingProgramsCta', cls: 'training-programs-cta' },
    { id: 'trainingTeamHead', cls: 'about-team-head' },
    { id: 'trainingTeamSlider', cls: 'about-team-slider' },
    { id: 'trainingMethodHead', cls: 'how-head' },
    { id: 'trainingMethodSteps', cls: 'how-steps' },
    { id: 'trainingBenefitsHead', cls: 'integration-deliverables-head' },
    { id: 'trainingBenefitsGrid', cls: 'integration-deliverables-grid' },
    { id: 'trainingBenefitsCta', cls: 'integration-deliverables-cta' },
    { id: 'consultingPainpointsHead', cls: 'training-problems-head' },
    { id: 'consultingPainpointsGrid', cls: 'training-problems-grid' },
    { id: 'consultingPainpointsCta', cls: 'training-problems-cta' },
    { id: 'consultingTypesHead', cls: 'training-programs-head' },
    { id: 'consultingTypesGrid', cls: 'training-programs-grid' },
    { id: 'consultingTypesCta', cls: 'training-programs-cta' },
    { id: 'consultingMethodHead', cls: 'how-head' },
    { id: 'consultingMethodSteps', cls: 'how-steps' },
    { id: 'consultingDeliverablesHead', cls: 'integration-deliverables-head' },
    { id: 'consultingDeliverablesGrid', cls: 'integration-deliverables-grid' },
    { id: 'consultingDeliverablesCta', cls: 'integration-deliverables-cta' },
    { id: 'pricingGrid', cls: 'pricing-grid', children: '.pricing-card' },
    { id: 'pricingCompareHead', cls: 'pricing-compare-head' },
    { id: 'contactOfficesHead', cls: 'contact-offices-head' },
    { id: 'contactOfficesGrid', cls: 'contact-offices-grid' },
    { id: 'projectSummaryHead', cls: 'project-summary-head' },
    { id: 'projectSummaryGrid', cls: 'project-summary-grid', children: '.project-summary-card' },
    { id: 'projectChallengeHead', cls: 'project-challenge-head' },
    { id: 'projectChallengeGrid', cls: 'project-challenge-grid' },
    { id: 'projectSuccessText', cls: 'project-success-text' },
    { id: 'projectSuccessVisual', cls: 'project-success-visual' },
    { id: 'projectSolutionHead', cls: 'project-solution-head' },
    { id: 'projectSolutionGrid', cls: 'project-solution-grid' },
    { id: 'projectResultsHead', cls: 'project-results-head' },
    { id: 'projectResultsStats', cls: 'project-results-stats' },
    { id: 'projectMomentsHead', cls: 'project-moments-head' },
    { id: 'projectMomentsGrid', cls: 'project-moments-grid' },
    { id: 'otherProjectsHead', cls: 'other-projects-head' },
    { id: 'otherProjectsGrid', cls: 'other-projects-grid' },
    { id: 'serviceHeroContent', cls: 'service-hero-content' },
    { id: 'serviceWhyVisual', cls: 'about-us-visual' },
    { id: 'serviceWhyContent', cls: 'about-us-content' },
    { id: 'serviceIncludesHead', cls: 'service-includes-head' },
    { id: 'serviceIncludesGrid', cls: 'service-includes-grid', children: '.service-includes-card' },
    { id: 'serviceIncludesCta', cls: 'service-includes-cta' },
    { id: 'serviceConnectContent', cls: 'about-why-content' },
    { id: 'serviceConnectVisual', cls: 'about-why-visual' },
    { id: 'serviceJourneyHead', cls: 'how-head' },
    { id: 'serviceJourneySteps', cls: 'how-steps' },
    { id: 'serviceProjectsHead', cls: 'service-projects-head' },
    { id: 'serviceProjectsGrid', cls: 'service-projects-grid' },
    { id: 'sectorHeroContent', cls: 'sector-hero-content' },
    { id: 'sectorTrustVisual', cls: 'about-us-visual' },
    { id: 'sectorTrustContent', cls: 'about-us-content' },
    { id: 'sectorGrowthContent', cls: 'about-why-content' },
    { id: 'sectorGrowthVisual', cls: 'about-why-visual' },
    { id: 'sectorSolutionsHead', cls: 'service-includes-head' },
    { id: 'sectorSolutionsGrid', cls: 'service-includes-grid', children: '.service-includes-card' },
    { id: 'sectorSolutionsCta', cls: 'service-includes-cta' },
    { id: 'sectorProjectsHead', cls: 'service-projects-head' },
    { id: 'sectorProjectsGrid', cls: 'service-projects-grid' },
    { id: 'sectorSimilarHead', cls: 'sectors-grid-head' },
    { id: 'sectorSimilarCards', cls: 'sectors-grid-cards', children: '.sector-flip-card' },
    { id: 'articleHeroCard', cls: 'article-hero-card' },
    { id: 'articleCallout', cls: 'article-callout' },
    { id: 'articleColors', cls: 'article-colors' },
    { id: 'articleChecklist', cls: 'article-checklist' },
    { id: 'articleConclusion', cls: 'article-conclusion' },
    { id: 'articleRelatedHead', cls: 'blog-head' },
    { id: 'articleRelatedGrid', cls: 'blog-grid', children: '.blog-card' }
  ];

  function revealAboutSection(el) {
    if (el) el.classList.add('revealed');
  }

  if ('IntersectionObserver' in window) {
    aboutTargets.forEach(function (target) {
      var el = document.getElementById(target.id);
      if (!el) return;
      // لو فيه children — observe كل واحد لوحده
      if (target.children) {
        var childItems = el.querySelectorAll(target.children);
        var childIO = new IntersectionObserver(function (entries) {
          entries.forEach(function (entry) {
            if (entry.isIntersecting) {
              entry.target.classList.add('revealed');
              childIO.unobserve(entry.target);
            }
          });
        }, { threshold: 0.15, rootMargin: '0px 0px -50px 0px' });
        childItems.forEach(function (c) { childIO.observe(c); });
      }
      // observe الأب نفسه
      var parentIO = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            revealAboutSection(entry.target);
            parentIO.unobserve(entry.target);
          }
        });
      }, { threshold: 0.2, rootMargin: '0px 0px -40px 0px' });
      parentIO.observe(el);
    });
  } else {
    // fallback: اكشف كل حاجة فوراً
    aboutTargets.forEach(function (target) {
      var el = document.getElementById(target.id);
      revealAboutSection(el);
      if (target.children && el) {
        el.querySelectorAll(target.children).forEach(function (c) { c.classList.add('revealed'); });
      }
    });
  }

  /* ============================================================
     سلايدر العقول خلف المنظومة (about-team) + سلايدر تدريب الشركات
     - بيظهر 4 كروت على الديسكتوب (2 على التابلت، 1 على الموبايل)
     - لوب لا نهائي — لما تخلص بترجع من الأول
     - أسهم + نقاط + swipe + autoplay
     - generic: بيشغل أي سلايدر بـ data-team-slider attribute
     ============================================================ */
  function setupTeamSlider(sliderId, visibleOverride) {
    var teamSlider = document.getElementById(sliderId);
    if (!teamSlider) return;

    var trackId = sliderId.replace('Slider', 'Track');
    var prevId = sliderId.replace('Slider', 'Prev');
    var nextId = sliderId.replace('Slider', 'Next');
    var dotsId = sliderId.replace('Slider', 'Dots');
    var viewportId = sliderId.replace('Slider', 'Viewport');

    var teamTrack = document.getElementById(trackId);
    var teamPrev = document.getElementById(prevId);
    var teamNext = document.getElementById(nextId);
    var teamDotsContainer = document.getElementById(dotsId);
    var teamViewport = document.getElementById(viewportId);
    var teamCards = teamTrack ? Array.prototype.slice.call(teamTrack.querySelectorAll('.about-team-card')) : [];

    if (!teamTrack || !teamCards.length) return;

    var teamActive = 0;
    var teamTotal = teamCards.length;
    var teamAutoplayTimer = null;
    var teamAutoplayDelay = 5000;
    var teamSwipeStart = null;
    var teamSwipeDelta = 0;

    // كم كارت يظهر في كل مرة حسب العرض
    function teamVisibleCount() {
      if (visibleOverride) return visibleOverride;
      var w = window.innerWidth;
      if (w <= 600) return 1;
      if (w <= 900) return 2;
      return 4;
    }

    // أنشئ النقاط حسب عدد الصفحات
    function teamBuildDots() {
      if (!teamDotsContainer) return;
      var visible = teamVisibleCount();
      var pages = Math.max(1, teamTotal - visible + 1);
      teamDotsContainer.innerHTML = '';
      for (var i = 0; i < pages; i++) {
        var dot = document.createElement('button');
        dot.className = 'about-team-dot' + (i === teamActive ? ' active' : '');
        dot.type = 'button';
        dot.setAttribute('data-go', i);
        dot.setAttribute('aria-label', 'صفحة ' + (i + 1));
        (function (idx) {
          dot.addEventListener('click', function () { teamGoTo(idx); });
        })(i);
        teamDotsContainer.appendChild(dot);
      }
    }

    // حدّث موضع الـ track
    function teamUpdate() {
      if (!teamCards.length) return;
      var card = teamCards[0];
      var cardWidth = card.getBoundingClientRect().width;
      var gap = 20; // نفس الـ gap في CSS
      var offset = teamActive * (cardWidth + gap);
      // في RTL: السلايد بيروح من اليمين للشمال، فالـ transform سالب
      teamTrack.style.transform = 'translateX(' + offset + 'px)';

      // حدّث النقاط
      var dots = teamDotsContainer ? teamDotsContainer.querySelectorAll('.about-team-dot') : [];
      dots.forEach(function (dot, i) {
        dot.classList.toggle('active', i === teamActive);
      });
    }

    function teamGoTo(index) {
      var visible = teamVisibleCount();
      var maxIndex = Math.max(0, teamTotal - visible);
      // لوب لا نهائي: لو عدّيت الآخر، ارجع للـ 0؛ لو نقصت عن 0، روح للآخر
      if (index > maxIndex) index = 0;
      if (index < 0) index = maxIndex;
      if (index === teamActive) return;
      teamActive = index;
      teamUpdate();
      teamRestartAutoplay();
    }

    function teamPrevSlide() { teamGoTo(teamActive - 1); }
    function teamNextSlide() { teamGoTo(teamActive + 1); }

    function teamStartAutoplay() {
      stopTeamAutoplay();
      if (!teamSlider) return;
      teamAutoplayTimer = window.setInterval(function () {
        if (document.hidden) return;
        if (!teamSlider) return;
        var rect = teamSlider.getBoundingClientRect();
        if (rect.top < window.innerHeight && rect.bottom > 0) teamNextSlide();
      }, teamAutoplayDelay);
    }
    function stopTeamAutoplay() {
      if (teamAutoplayTimer) { window.clearInterval(teamAutoplayTimer); teamAutoplayTimer = null; }
    }
    function teamRestartAutoplay() {
      if (!teamAutoplayTimer) return;
      stopTeamAutoplay();
      teamStartAutoplay();
    }

    // ربط الأحداث
    if (teamPrev) teamPrev.addEventListener('click', teamPrevSlide);
    if (teamNext) teamNext.addEventListener('click', teamNextSlide);

    // لوحة المفاتيح
    if (teamSlider) {
      teamSlider.setAttribute('tabindex', '0');
      teamSlider.addEventListener('keydown', function (e) {
        // RTL: سهم اليمين = السابق، سهم الشمال = التالي
        if (e.key === 'ArrowRight') { e.preventDefault(); teamPrevSlide(); }
        else if (e.key === 'ArrowLeft') { e.preventDefault(); teamNextSlide(); }
      });
    }

    // swipe
    if (teamViewport) {
      teamViewport.addEventListener('touchstart', function (e) {
        teamSwipeStart = e.touches[0].clientX;
        teamSwipeDelta = 0;
        stopTeamAutoplay();
      }, { passive: true });
      teamViewport.addEventListener('touchmove', function (e) {
        if (teamSwipeStart === null) return;
        teamSwipeDelta = e.touches[0].clientX - teamSwipeStart;
      }, { passive: true });
      teamViewport.addEventListener('touchend', function () {
        if (teamSwipeStart === null) return;
        var threshold = 40;
        // RTL: swipe يمين (delta موجب) = السابق، swipe شمال (delta سالب) = التالي
        if (teamSwipeDelta > threshold) teamPrevSlide();
        else if (teamSwipeDelta < -threshold) teamNextSlide();
        teamSwipeStart = null;
        teamSwipeDelta = 0;
        teamStartAutoplay();
      });
    }

    // إيقاف الأوتوبلاي عند hover/focus
    if (teamSlider) {
      teamSlider.addEventListener('mouseenter', stopTeamAutoplay);
      teamSlider.addEventListener('mouseleave', teamStartAutoplay);
      teamSlider.addEventListener('focusin', stopTeamAutoplay);
      teamSlider.addEventListener('focusout', teamStartAutoplay);
    }

    // إعادة بناء النقاط وإعادة التحديث عند resize
    var teamResizeTimer = null;
    window.addEventListener('resize', function () {
      if (teamResizeTimer) clearTimeout(teamResizeTimer);
      teamResizeTimer = setTimeout(function () {
        var visible = teamVisibleCount();
        var maxIndex = Math.max(0, teamTotal - visible);
        if (teamActive > maxIndex) teamActive = maxIndex;
        teamBuildDots();
        teamUpdate();
      }, 200);
    });

    // التهيئة الأولية
    teamBuildDots();
    teamUpdate();

    // شغّل الأوتوبلاي لما السلايدر يظهر في الشاشة
    if ('IntersectionObserver' in window) {
      var teamIO = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            teamStartAutoplay();
            teamIO.unobserve(entry.target);
          }
        });
      }, { threshold: 0.3 });
      teamIO.observe(teamSlider);
    } else {
      teamStartAutoplay();
    }
  }

  // شغّل السلايدرات
  setupTeamSlider('aboutTeamSlider');
  setupTeamSlider('trainingTeamSlider', 3); // training بـ 3 كروت دايماً

  /* ============================================================
     تفاعلات صفحة المدونة (blog-main)
     - المنيو المنسدلة "الفئة"
     - أزرار الفلاتر (تفعيل/إلغاء)
     - البجنيشن (تبديل الصفحة النشطة)
     - reveal animations
     ============================================================ */
  var blogDropdownBtn = document.getElementById('blogDropdownBtn');
  var blogDropdownMenu = document.getElementById('blogDropdownMenu');
  var blogDropdownWrap = document.getElementById('blogDropdownWrap');
  var blogFilterBtns = Array.prototype.slice.call(document.querySelectorAll('.blog-filter-btn'));
  var blogPageNumbers = Array.prototype.slice.call(document.querySelectorAll('.blog-pagination-num'));
  var blogPagePrev = document.getElementById('blogPagePrev');
  var blogPageNext = document.getElementById('blogPageNext');
  var blogFeatured = document.getElementById('blogFeatured');
  var blogGridCards = Array.prototype.slice.call(document.querySelectorAll('.blog-grid-card'));

  // المنيو المنسدلة — فتح/إغلاق
  if (blogDropdownBtn && blogDropdownMenu) {
    blogDropdownBtn.addEventListener('click', function (e) {
      e.stopPropagation();
      var isOpen = blogDropdownMenu.classList.toggle('is-open');
      blogDropdownBtn.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
      blogDropdownMenu.setAttribute('aria-hidden', isOpen ? 'false' : 'true');
    });
    // إغلاق عند click برة
    document.addEventListener('click', function (e) {
      if (blogDropdownWrap && !blogDropdownWrap.contains(e.target)) {
        blogDropdownMenu.classList.remove('is-open');
        blogDropdownBtn.setAttribute('aria-expanded', 'false');
        blogDropdownMenu.setAttribute('aria-hidden', 'true');
      }
    });
    // اختيار فئة من المنيو
    var blogDropdownItems = blogDropdownMenu.querySelectorAll('li');
    blogDropdownItems.forEach(function (item) {
      item.addEventListener('click', function () {
        var val = item.getAttribute('data-value');
        blogDropdownBtn.querySelector('span').textContent = item.textContent;
        blogDropdownMenu.classList.remove('is-open');
        blogDropdownBtn.setAttribute('aria-expanded', 'false');
        blogDropdownMenu.setAttribute('aria-hidden', 'true');
        // لو الفئة "all" شيل كل الفلاتر، غير كده فعّل الزر المطابق
        if (val === 'all') {
          blogFilterBtns.forEach(function (b) { b.classList.remove('active'); });
        } else {
          blogFilterBtns.forEach(function (b) {
            b.classList.toggle('active', b.getAttribute('data-filter') === val);
          });
        }
        filterBlogGrid();
      });
    });
  }

  // أزرار الفلاتر — تفعيل/إلغاء (واحد بس متفعل في المرة)
  blogFilterBtns.forEach(function (btn) {
    btn.addEventListener('click', function () {
      // لو الزر ده متفعل بالفعل، شيله (يعني عرض الكل)
      if (btn.classList.contains('active')) {
        btn.classList.remove('active');
      } else {
        blogFilterBtns.forEach(function (b) { b.classList.remove('active'); });
        btn.classList.add('active');
      }
      filterBlogGrid();
    });
  });

  // فلترة الجريد حسب الفئة المختارة
  function filterBlogGrid() {
    var activeBtn = document.querySelector('.blog-filter-btn.active');
    var activeFilter = activeBtn ? activeBtn.getAttribute('data-filter') : 'all';
    blogGridCards.forEach(function (card) {
      var cat = card.getAttribute('data-category');
      var show = (activeFilter === 'all' || cat === activeFilter);
      card.style.display = show ? '' : 'none';
    });
  }

  // البجنيشن — تبديل الصفحة النشطة
  blogPageNumbers.forEach(function (num) {
    num.addEventListener('click', function () {
      blogPageNumbers.forEach(function (n) { n.classList.remove('active'); });
      num.classList.add('active');
      // scroll لأعلى الجريد
      var grid = document.getElementById('blogGridMain');
      if (grid) {
        var rect = grid.getBoundingClientRect();
        window.scrollTo({ top: rect.top + window.scrollY - 120, behavior: 'smooth' });
      }
    });
  });

  // أسهم البجنيشن
  function getCurrentPage() {
    var active = document.querySelector('.blog-pagination-num.active');
    return active ? parseInt(active.getAttribute('data-page'), 10) : 1;
  }
  function goToPage(page) {
    // نبحث عن زر الصفحة اللي عليه الـ data-page
    var target = document.querySelector('.blog-pagination-num[data-page="' + page + '"]');
    if (target) {
      target.click();
    } else {
      // لو الصفحة مش معروضة (مثلا 6-32)، فعّل زر مؤقت على آخر صفحة معروضة
      // للتبسيط: نعمل update للـ active على أقرب صفحة
      console.log('[blog] page', page, 'not in visible pagination');
    }
  }
  if (blogPagePrev) {
    blogPagePrev.addEventListener('click', function () {
      var curr = getCurrentPage();
      if (curr > 1) goToPage(curr - 1);
    });
  }
  if (blogPageNext) {
    blogPageNext.addEventListener('click', function () {
      var curr = getCurrentPage();
      if (curr < 33) goToPage(curr + 1);
    });
  }

  // reveal animations للمقال البارز + كروت الجريد
  if ('IntersectionObserver' in window) {
    if (blogFeatured) {
      var blogFeatIO = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            entry.target.classList.add('revealed');
            blogFeatIO.unobserve(entry.target);
          }
        });
      }, { threshold: 0.2 });
      blogFeatIO.observe(blogFeatured);
    }
    if (blogGridCards.length) {
      var blogGridIO = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            entry.target.classList.add('revealed');
            blogGridIO.unobserve(entry.target);
          }
        });
      }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });
      blogGridCards.forEach(function (card, i) {
        // staggered delay
        card.style.transitionDelay = (i % 3) * 100 + 'ms';
        blogGridIO.observe(card);
      });
    }
  } else {
    if (blogFeatured) blogFeatured.classList.add('revealed');
    blogGridCards.forEach(function (c) { c.classList.add('revealed'); });
  }

  /* ============================================================
     تفاعلات صفحة معرض الأعمال (portfolio-main)
     نفس نظام المدونة: dropdowns + filter buttons + pagination + reveal
     ============================================================ */
  var pHead = document.getElementById('portfolioMainHead');
  var pCards = Array.prototype.slice.call(document.querySelectorAll('.portfolio-grid-card'));

  // القائمة المنسدلة "الفئة"
  var pDropdownBtn = document.getElementById('portfolioDropdownBtn');
  var pDropdownMenu = document.getElementById('portfolioDropdownMenu');
  var pDropdownWrap = document.getElementById('portfolioDropdownWrap');
  // القائمة المنسدلة "الصناعة"
  var pIndustryBtn = document.getElementById('portfolioIndustryBtn');
  var pIndustryMenu = document.getElementById('portfolioIndustryMenu');
  var pIndustryWrap = document.getElementById('portfolioIndustryWrap');
  // أزرار الفلاتر
  var pFilterBtns = Array.prototype.slice.call(document.querySelectorAll('.portfolio-filter-btn'));
  // البجنيشن
  var pPageNumbers = Array.prototype.slice.call(document.querySelectorAll('.portfolio-pagination-num'));
  var pPagePrev = document.getElementById('portfolioPagePrev');
  var pPageNext = document.getElementById('portfolioPageNext');

  // القائمة المنسدلة "الفئة" — فتح/إغلاق
  function setupPortfolioDropdown(btn, menu, wrap) {
    if (!btn || !menu) return;
    btn.addEventListener('click', function (e) {
      e.stopPropagation();
      // اقفل أي قائمة منسدلة أخرى مفتوحة
      var otherMenus = document.querySelectorAll('.portfolio-dropdown-menu.is-open');
      otherMenus.forEach(function (m) {
        if (m !== menu) {
          m.classList.remove('is-open');
          var otherBtn = m.parentElement.querySelector('.portfolio-dropdown-btn');
          if (otherBtn) otherBtn.setAttribute('aria-expanded', 'false');
          m.setAttribute('aria-hidden', 'true');
        }
      });
      var isOpen = menu.classList.toggle('is-open');
      btn.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
      menu.setAttribute('aria-hidden', isOpen ? 'false' : 'true');
    });
    // إغلاق عند click برة
    document.addEventListener('click', function (e) {
      if (wrap && !wrap.contains(e.target)) {
        menu.classList.remove('is-open');
        btn.setAttribute('aria-expanded', 'false');
        menu.setAttribute('aria-hidden', 'true');
      }
    });
    // اختيار فئة
    var items = menu.querySelectorAll('li');
    items.forEach(function (item) {
      item.addEventListener('click', function () {
        var val = item.getAttribute('data-value');
        btn.querySelector('span').textContent = item.textContent;
        menu.classList.remove('is-open');
        btn.setAttribute('aria-expanded', 'false');
        menu.setAttribute('aria-hidden', 'true');
        // فلترة الجريد حسب الفئة
        if (val === 'all') {
          pFilterBtns.forEach(function (b) { b.classList.remove('active'); });
        } else {
          pFilterBtns.forEach(function (b) {
            b.classList.toggle('active', b.getAttribute('data-filter') === val);
          });
        }
        filterPortfolioGrid();
      });
    });
  }
  setupPortfolioDropdown(pDropdownBtn, pDropdownMenu, pDropdownWrap);
  setupPortfolioDropdown(pIndustryBtn, pIndustryMenu, pIndustryWrap);

  // أزرار الفلاتر — تفعيل/إلغاء
  pFilterBtns.forEach(function (btn) {
    btn.addEventListener('click', function () {
      if (btn.classList.contains('active')) {
        btn.classList.remove('active');
      } else {
        pFilterBtns.forEach(function (b) { b.classList.remove('active'); });
        btn.classList.add('active');
      }
      filterPortfolioGrid();
    });
  });

  function filterPortfolioGrid() {
    var activeBtn = document.querySelector('.portfolio-filter-btn.active');
    var activeFilter = activeBtn ? activeBtn.getAttribute('data-filter') : 'all';
    pCards.forEach(function (card) {
      var cat = card.getAttribute('data-category');
      var show = (activeFilter === 'all' || cat === activeFilter);
      card.style.display = show ? '' : 'none';
    });
  }

  // البجنيشن — تبديل الصفحة النشطة
  pPageNumbers.forEach(function (num) {
    num.addEventListener('click', function () {
      pPageNumbers.forEach(function (n) { n.classList.remove('active'); });
      num.classList.add('active');
      var grid = document.getElementById('portfolioGridMain');
      if (grid) {
        var rect = grid.getBoundingClientRect();
        window.scrollTo({ top: rect.top + window.scrollY - 120, behavior: 'smooth' });
      }
    });
  });

  function getCurrentPortfolioPage() {
    var active = document.querySelector('.portfolio-pagination-num.active');
    return active ? parseInt(active.getAttribute('data-page'), 10) : 1;
  }
  function goToPortfolioPage(page) {
    var target = document.querySelector('.portfolio-pagination-num[data-page="' + page + '"]');
    if (target) target.click();
  }
  if (pPagePrev) {
    pPagePrev.addEventListener('click', function () {
      var curr = getCurrentPortfolioPage();
      if (curr > 1) goToPortfolioPage(curr - 1);
    });
  }
  if (pPageNext) {
    pPageNext.addEventListener('click', function () {
      var curr = getCurrentPortfolioPage();
      if (curr < 33) goToPortfolioPage(curr + 1);
    });
  }

  // reveal animations للهيدر + كروت الجريد
  if ('IntersectionObserver' in window) {
    if (pHead) {
      var pHeadIO = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            entry.target.classList.add('revealed');
            pHeadIO.unobserve(entry.target);
          }
        });
      }, { threshold: 0.3 });
      pHeadIO.observe(pHead);
    }
    if (pCards.length) {
      var pCardsIO = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            entry.target.classList.add('revealed');
            pCardsIO.unobserve(entry.target);
          }
        });
      }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });
      pCards.forEach(function (card, i) {
        card.style.transitionDelay = (i % 2) * 100 + 'ms';
        pCardsIO.observe(card);
      });
    }
  } else {
    if (pHead) pHead.classList.add('revealed');
    pCards.forEach(function (c) { c.classList.add('revealed'); });
  }

  /* ============================================================
     سلايدرات المشاريع (services-projects) — عام لأي عدد من السلايدرات
     - 2 كروت ظاهرين، التنقل بأسهم + نقاط
     ============================================================ */
  function setupProjectsSlider(sliderId) {
    var slider = document.getElementById(sliderId);
    if (!slider) return;

    var prefix = sliderId;
    var track = document.getElementById(prefix + 'Track');
    var viewport = document.getElementById(prefix + 'Viewport');
    var prevBtn = document.getElementById(prefix + 'Prev');
    var nextBtn = document.getElementById(prefix + 'Next');
    var dotsContainer = document.getElementById(prefix + 'Dots');
    var cards = Array.prototype.slice.call(slider.querySelectorAll('.services-projects-card'));

    if (!track || !cards.length) return;

    var active = 0;
    var total = cards.length;

    function visibleCount() {
      var w = window.innerWidth;
      if (w <= 900) return 1;
      return 2;
    }

    function buildDots() {
      if (!dotsContainer) return;
      var visible = visibleCount();
      var pages = Math.max(1, total - visible + 1);
      dotsContainer.innerHTML = '';
      for (var i = 0; i < pages; i++) {
        var dot = document.createElement('button');
        dot.className = 'services-projects-dot' + (i === active ? ' active' : '');
        dot.type = 'button';
        dot.setAttribute('data-go', i);
        dot.setAttribute('aria-label', 'شريحة ' + (i + 1));
        (function (idx) {
          dot.addEventListener('click', function () { goTo(idx); });
        })(i);
        dotsContainer.appendChild(dot);
      }
    }

    function update() {
      if (!cards.length) return;
      var card = cards[0];
      var cardWidth = card.getBoundingClientRect().width;
      var gap = 24;
      var offset = active * (cardWidth + gap);
      track.style.transform = 'translateX(' + offset + 'px)';

      var dots = dotsContainer ? dotsContainer.querySelectorAll('.services-projects-dot') : [];
      dots.forEach(function (dot, i) {
        dot.classList.toggle('active', i === active);
      });

      var visible = visibleCount();
      var maxIndex = Math.max(0, total - visible);
      if (prevBtn) prevBtn.disabled = (active <= 0);
      if (nextBtn) nextBtn.disabled = (active >= maxIndex);
    }

    function goTo(index) {
      var visible = visibleCount();
      var maxIndex = Math.max(0, total - visible);
      if (index < 0) index = 0;
      if (index > maxIndex) index = maxIndex;
      if (index === active) return;
      active = index;
      update();
    }

    function prevSlide() { goTo(active - 1); }
    function nextSlide() { goTo(active + 1); }

    if (prevBtn) prevBtn.addEventListener('click', prevSlide);
    if (nextBtn) nextBtn.addEventListener('click', nextSlide);

    slider.setAttribute('tabindex', '0');
    slider.addEventListener('keydown', function (e) {
      if (e.key === 'ArrowRight') { e.preventDefault(); prevSlide(); }
      else if (e.key === 'ArrowLeft') { e.preventDefault(); nextSlide(); }
    });

    if (viewport) {
      var swipeStart = null;
      var swipeDelta = 0;
      viewport.addEventListener('touchstart', function (e) {
        swipeStart = e.touches[0].clientX;
        swipeDelta = 0;
      }, { passive: true });
      viewport.addEventListener('touchmove', function (e) {
        if (swipeStart === null) return;
        swipeDelta = e.touches[0].clientX - swipeStart;
      }, { passive: true });
      viewport.addEventListener('touchend', function () {
        if (swipeStart === null) return;
        var threshold = 40;
        if (swipeDelta > threshold) prevSlide();
        else if (swipeDelta < -threshold) nextSlide();
        swipeStart = null;
        swipeDelta = 0;
      });
    }

    var resizeTimer = null;
    window.addEventListener('resize', function () {
      if (resizeTimer) clearTimeout(resizeTimer);
      resizeTimer = setTimeout(function () {
        var visible = visibleCount();
        var maxIndex = Math.max(0, total - visible);
        if (active > maxIndex) active = maxIndex;
        buildDots();
        update();
      }, 200);
    });

    buildDots();
    update();
  }

  setupProjectsSlider('servicesProjectsSlider');
  setupProjectsSlider('servicesMarketingProjectsSlider');
  setupProjectsSlider('servicesTechProjectsSlider');

  console.log('%cBrand Key %cAll sections loaded (Header, Nav, Hero, Services, Consult, Sectors, CTA2, Portfolio, Pricing & Footer)',
    'color:#F2C94C;font-weight:bold;', 'color:#0E233F;');
}

function initFooter() {
  'use strict';
  // Footer interactions are handled in initShared()
}

/* ============================================================
   صفحة حلول القطاعات — سيكشنات Stacked Cards المتعددة
   - كل سيكشن بـ class .sectors-commerce-stack بيشغل نفس الـ logic
   - الكروت absolute، متراكمة فوق بعض من الأول (زي الملفات في درج)
   - الـ pin بـ position: sticky يثبت السيكشن أثناء السكرول
   - الكارت القديم بيتصغّر (scale 0.95) ويِداكن لما الجديد يغطيه
   ============================================================ */
function initCommerceStack() {
  'use strict';

  var sections = Array.prototype.slice.call(document.querySelectorAll('.sectors-commerce-stack'));
  if (sections.length === 0) return;

  sections.forEach(function (section, idx) {
    setupCommerceSection(section, idx);
  });

  console.log('%cBrand Key %cCommerce Stack initialized — ' + sections.length + ' sections',
    'color:#F2C94C;font-weight:bold;', 'color:#0E233F;');
}

function setupCommerceSection(section, sectionIdx) {
  'use strict';

  var pin = section.querySelector('.sectors-commerce-pin');
  var list = section.querySelector('.sectors-commerce-list');
  var progressBar = section.querySelector('.sectors-commerce-progress-bar');
  var header = section.querySelector('.sectors-commerce-head');
  if (!pin || !list) return;

  var cards = Array.prototype.slice.call(list.querySelectorAll('.commerce-card'));
  var N = cards.length;
  if (N < 2) return; // محتاجين على الأقل كارتين عشان الـ animation يشتغل

  // ====== إعدادات ======
  var CARD_OFFSET = 150; // المسافة بين قمة كل كارت واللي قبله (px)

  // ====== تعيين z-index لكل كارت ======
  cards.forEach(function (card, i) {
    card.style.setProperty('--card-z', String(N - i));
    card.style.setProperty('--darken', '0');
  });

  // ====== حساب ارتفاع السيكشن ======
  function recalcHeight() {
    var viewportH = window.innerHeight || document.documentElement.clientHeight;
    var firstCardHeight = cards[0].offsetHeight;
    var stackHeight = firstCardHeight + (N - 1) * CARD_OFFSET;
    var pinContentHeight = stackHeight + 280;
    var extraScroll = (N - 1) * (CARD_OFFSET * 4);
    var totalHeight = Math.max(pinContentHeight + extraScroll, viewportH + extraScroll);
    section.style.height = totalHeight + 'px';
  }

  var ticking = false;
  var lastProgress = -1;

  function easeInOutCubic(t) {
    return t < 0.5 ? 4 * t * t * t : 1 - Math.pow(-2 * t + 2, 3) / 2;
  }

  function clamp(v, min, max) {
    return Math.max(min, Math.min(max, v));
  }

  function update() {
    var rect = section.getBoundingClientRect();
    var viewportH = window.innerHeight || document.documentElement.clientHeight;

    var scrolled = -rect.top;
    var totalScroll = rect.height - viewportH;
    if (totalScroll <= 0) {
      ticking = false;
      return;
    }

    var progress = scrolled / totalScroll;
    if (progress < 0) progress = 0;
    if (progress > 1) progress = 1;

    if (Math.abs(progress - lastProgress) < 0.0005) {
      ticking = false;
      return;
    }
    lastProgress = progress;

    if (progressBar) {
      progressBar.style.width = (progress * 100) + '%';
    }

    if (header) {
      var headerOpacity = 1 - progress * 0.3;
      header.style.opacity = String(headerOpacity);
      header.style.transform = 'translateY(' + (-progress * 8) + 'px)';
    }

    var segmentSize = 1 / (N - 1);

    cards.forEach(function (card, i) {
      var translateY = i * CARD_OFFSET;
      var scale = 1;
      var darken = 0;
      var z = N - i;

      if (i > 0) {
        var enterStart = (i - 1) * segmentSize;
        var enterEnd = i * segmentSize;
        var enterP = (progress - enterStart) / (enterEnd - enterStart);
        enterP = easeInOutCubic(clamp(enterP, 0, 1));

        translateY = i * CARD_OFFSET * (1 - enterP);

        if (enterP > 0.01) {
          z = N + i;
        }
      }

      if (i < N - 1) {
        var coverStart = i * segmentSize;
        var coverEnd = (i + 1) * segmentSize;
        var coverP = (progress - coverStart) / (coverEnd - coverStart);
        coverP = easeInOutCubic(clamp(coverP, 0, 1));
        scale = 1 - coverP * 0.05;
        darken = coverP * 0.55;
      }

      card.style.transform = 'translateY(' + translateY + 'px) scale(' + scale + ')';
      card.style.setProperty('--darken', String(darken));
      card.style.setProperty('--card-z', String(z));
    });

    ticking = false;
  }

  function onScroll() {
    if (!ticking) {
      window.requestAnimationFrame(update);
      ticking = true;
    }
  }

  window.addEventListener('scroll', onScroll, { passive: true });
  window.addEventListener('resize', function () {
    recalcHeight();
    onScroll();
  }, { passive: true });

  recalcHeight();
  if (document.readyState === 'complete') {
    update();
  } else {
    window.addEventListener('load', function () {
      recalcHeight();
      update();
    });
  }
  update();
}

/* ============================================================
   صفحة الباقات — Toggle شهري/سنوي
   ============================================================ */
function initPricingToggle() {
  'use strict';

  var toggle = document.getElementById('pricingToggle');
  if (!toggle) return;

  var buttons = toggle.querySelectorAll('.pricing-toggle-btn');
  var amounts = document.querySelectorAll('.pricing-card-amount');
  var periods = document.querySelectorAll('.pricing-card-period');

  buttons.forEach(function (btn) {
    btn.addEventListener('click', function () {
      var period = btn.getAttribute('data-period');
      
      // تحديث الـ active
      buttons.forEach(function (b) { b.classList.remove('active'); });
      btn.classList.add('active');

      // تحديث الأسعار
      amounts.forEach(function (el) {
        var val = el.getAttribute('data-' + period);
        if (val) el.textContent = val;
      });

      // تحديث الفترة
      periods.forEach(function (el) {
        var val = el.getAttribute('data-' + period);
        if (val) el.textContent = val;
      });
    });
  });
}
