/* Auto-generated includes - do not edit manually */
(function(){
var HEADER_HTML = `<header class="site-header" id="siteHeader">
    <div class="header-inner">

      <!-- اللوگو (يمين في RTL) -->
      <a href="#" class="logo" aria-label="Brand Key - الصفحة الرئيسية">
        <img src="icons/logo.svg" alt="Brand Key" class="logo-img" />
      </a>

      <!-- أزرار التحكم (يسار في RTL) — الترتيب: بحث → لغة → تواصل معنا → القايمة -->
      <div class="header-actions">

        <!-- زر البحث -->
        <button class="icon-btn search-btn" id="searchBtn" aria-label="بحث">
          <img src="icons/search.svg" alt="" class="search-icon" aria-hidden="true" />
        </button>

        <!-- زر تبديل اللغة -->
        <button class="lang-btn" id="langBtn" aria-label="تغيير اللغة">
          <img src="icons/language.svg" alt="" class="lang-icon" aria-hidden="true" />
          <span>EN</span>
        </button>

        <!-- زر الـ CTA الأساسي: تواصل معنا -->
        <a href="contact.html" class="cta-btn" id="ctaBtn">
          <span>تواصل معنا</span>
          <img src="icons/contact.svg" alt="" class="cta-icon" aria-hidden="true" />
        </a>

        <!-- زر الهامبرغر - يفتح الناف -->
        <button class="icon-btn menu-btn" id="menuBtn" aria-label="فتح القائمة" aria-expanded="false" aria-controls="navOverlay">
          <img src="icons/menu.svg" alt="" class="menu-icon" aria-hidden="true" />
        </button>

      </div>
    </div>
  </header>

<div class="nav-overlay" id="navOverlay" role="dialog" aria-modal="true" aria-label="قائمة التنقل" aria-hidden="true">

    <!-- الخلفية المعتمة -->
    <div class="nav-backdrop" id="navBackdrop"></div>

    <!-- اللوحة الرئيسية -->
    <div class="nav-panel">

      <!-- زر الإغلاق -->
      <button class="close-btn" id="closeBtn" aria-label="إغلاق القائمة">
        <span class="close-line"></span>
        <span class="close-line"></span>
      </button>

      <!-- المقدمة -->
      <div class="nav-intro">
        <a href="#" class="nav-logo" aria-label="Brand Key">
          <img src="icons/logo.svg" alt="Brand Key" class="nav-logo-img" />
        </a>
        <h2 class="nav-intro-title">إلى أين تريد الذهاب؟</h2>
        <p class="nav-intro-sub">اختر من القائمة أدناه</p>
      </div>

      <!-- القسمين: خدماتنا (يمين) + حلول القطاعات (شمال) -->
      <div class="nav-sections">

        <!-- القسم الأول (يمين): خدماتنا -->
        <div class="nav-section active-mobile" data-section="0">
          <h3 class="nav-section-heading">
            <span class="nav-section-icon">
              <svg width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M10 1L3 5V11C3 15.5 6 19 10 20C14 19 17 15.5 17 11V5L10 1Z" stroke="#F2C94C" stroke-width="2" stroke-linejoin="round"/><path d="M7 10L9 12L13 8" stroke="#F2C94C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </span>
            <span>خدماتنا</span>
            <img src="icons/faq-chevron.svg" alt="" class="nav-section-chevron" aria-hidden="true" />
          </h3>
          <ul class="nav-section-list">
            <li><a href="#">إدارة السوشيال</a></li>
            <li><a href="#">إنتاج المحتوى الإعلاني</a></li>
            <li><a href="#">تصميم الهوية البصرية</a></li>
            <li><a href="#">تصوير وفيديو</a></li>
            <li><a href="#">SEO تحسين البحث</a></li>
            <li><a href="#">تطبيقات الجوال</a></li>
            <li><a href="#">حملات جوجل</a></li>
            <li><a href="#">إدارة المتاجر الإلكترونية</a></li>
            <li><a href="#">حملات السوشيال</a></li>
            <li><a href="#">تصميم وبرمجة المواقع</a></li>
          </ul>
        </div>

        <!-- القسم الثاني (شمال): حلول القطاعات -->
        <div class="nav-section" data-section="1">
          <h3 class="nav-section-heading">
            <span class="nav-section-icon">
              <svg width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M3 13L7 9L11 13L17 7M17 7H13M17 7V11" stroke="#F2C94C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </span>
            <span>حلول القطاعات</span>
            <img src="icons/faq-chevron.svg" alt="" class="nav-section-chevron" aria-hidden="true" />
          </h3>
          <ul class="nav-section-list">
            <li><a href="#">السياحة والسفر</a></li>
            <li><a href="#">القطاع الطبي</a></li>
            <li><a href="#">التعليم والتدريب</a></li>
            <li><a href="#">قطاع الطاقة</a></li>
            <li><a href="#">مكاتب المحاماة</a></li>
            <li><a href="#">التجارة الإلكترونية</a></li>
            <li><a href="#">خدمات الأعمال</a></li>
            <li><a href="#">خدمات الاستقدام</a></li>
            <li><a href="#">خدمات الصيانة</a></li>
            <li><a href="#">المجال الصناعي</a></li>
            <li><a href="#">القطاع العقاري</a></li>
          </ul>
        </div>

      </div>

      <!-- روابط التنقل الإضافية -->
      <nav class="nav-links" aria-label="روابط سريعة">
        <a href="index.html" class="nav-link" data-index="0">
          <span class="nav-link-icon"><svg viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M8.38077 0.595245C8.83279 0.210986 9.40673 0 10 0C10.5933 0 11.1672 0.210986 11.6192 0.595245L19.1192 6.96986C19.3953 7.20454 19.617 7.49642 19.7691 7.82529C19.9212 8.15415 20 8.51215 20 8.87448V18.8437C20 19.3537 19.7974 19.8429 19.4367 20.2035C19.0761 20.5642 18.587 20.7668 18.0769 20.7668H15C14.49 20.7668 14.0008 20.5642 13.6402 20.2035C13.2795 19.8429 13.0769 19.3537 13.0769 18.8437V13.8437C13.0769 13.4369 12.9158 13.0466 12.6288 12.7583C12.3417 12.47 11.9522 12.3071 11.5454 12.3052H8.45385C8.04715 12.3073 7.65782 12.4703 7.37096 12.7586C7.0841 13.0469 6.92307 13.437 6.92308 13.8437V18.8437C6.92308 19.0962 6.87334 19.3463 6.77669 19.5796C6.68005 19.813 6.5384 20.025 6.35982 20.2035C6.18125 20.3821 5.96925 20.5238 5.73593 20.6204C5.50261 20.717 5.25254 20.7668 5 20.7668H1.92308C1.41305 20.7668 0.923903 20.5642 0.563256 20.2035C0.202609 19.8429 0 19.3537 0 18.8437V8.87448C2.02392e-05 8.51215 0.0787988 8.15415 0.23088 7.82529C0.382961 7.49642 0.60471 7.20454 0.880769 6.96986L8.38077 0.595245Z" fill="currentColor"/>
</svg></span>
          <span class="nav-link-text">الرئيسية</span>
          <span class="nav-link-arrow" aria-hidden="true"><svg width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M9 3L4 7L9 11" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
        </a>
        <a href="training.html" class="nav-link" data-index="1">
          <span class="nav-link-icon"><svg viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M18 4H14V2C14 0.9 13.1 0 12 0H2C0.9 0 0 0.9 0 2V19C0 19.55 0.45 20 1 20H19C19.55 20 20 19.55 20 19V6C20 4.9 19.1 4 18 4ZM6 14H4V12H6V14ZM6 10H4V8H6V10ZM6 6H4V4H6V6ZM10 14H8V12H10V14ZM10 10H8V8H10V10ZM10 6H8V4H10V6ZM18 14H16V12H18V14ZM18 10H16V8H18V10Z" fill="currentColor"/>
</svg></span>
          <span class="nav-link-text">تدريب الشركات</span>
          <span class="nav-link-arrow" aria-hidden="true"><svg width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M9 3L4 7L9 11" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
        </a>
        <a href="consulting.html" class="nav-link" data-index="2">
          <span class="nav-link-icon"><svg viewBox="0 0 24 18" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M10.145 10.0645C9.62962 10.5689 9.22007 11.1711 8.94036 11.8358C8.66066 12.5005 8.51643 13.2143 8.51613 13.9355C8.51613 15.2686 8.99768 16.4903 9.79665 17.4333C8.87424 17.6818 7.92303 17.8073 6.96774 17.8065C5.14839 17.8065 3.4529 17.3853 2.18477 16.6142C0.915097 15.84 0 14.6555 0 13.1613C0 12.34 0.326266 11.5523 0.907024 10.9715C1.48778 10.3908 2.27546 10.0645 3.09677 10.0645H10.145ZM14.7097 10.0645C14.915 10.0645 15.1119 10.1461 15.2571 10.2913C15.4023 10.4365 15.4839 10.6334 15.4839 10.8387C15.4839 11.044 15.4023 11.241 15.2571 11.3861C15.1119 11.5313 14.915 11.6129 14.7097 11.6129H13.9355C13.3195 11.6129 12.7287 11.8576 12.2932 12.2932C11.8576 12.7287 11.6129 13.3195 11.6129 13.9355C11.6129 14.5515 11.8576 15.1422 12.2932 15.5778C12.7287 16.0134 13.3195 16.2581 13.9355 16.2581H14.7097C14.915 16.2581 15.1119 16.3396 15.2571 16.4848C15.4023 16.63 15.4839 16.8269 15.4839 17.0323C15.4839 17.2376 15.4023 17.4345 15.2571 17.5797C15.1119 17.7249 14.915 17.8065 14.7097 17.8065H13.9355C12.9088 17.8065 11.9242 17.3986 11.1983 16.6727C10.4723 15.9467 10.0645 14.9621 10.0645 13.9355C10.0645 12.9088 10.4723 11.9242 11.1983 11.1983C11.9242 10.4723 12.9088 10.0645 13.9355 10.0645H14.7097ZM20.129 10.0645C21.1557 10.0645 22.1403 10.4723 22.8662 11.1983C23.5922 11.9242 24 12.9088 24 13.9355C24 14.9621 23.5922 15.9467 22.8662 16.6727C22.1403 17.3986 21.1557 17.8065 20.129 17.8065H19.3548C19.1495 17.8065 18.9526 17.7249 18.8074 17.5797C18.6622 17.4345 18.5806 17.2376 18.5806 17.0323C18.5806 16.8269 18.6622 16.63 18.8074 16.4848C18.9526 16.3396 19.1495 16.2581 19.3548 16.2581H20.129C20.745 16.2581 21.3358 16.0134 21.7713 15.5778C22.2069 15.1422 22.4516 14.5515 22.4516 13.9355C22.4516 13.3195 22.2069 12.7287 21.7713 12.2932C21.3358 11.8576 20.745 11.6129 20.129 11.6129H19.3548C19.1495 11.6129 18.9526 11.5313 18.8074 11.3861C18.6622 11.241 18.5806 11.044 18.5806 10.8387C18.5806 10.6334 18.6622 10.4365 18.8074 10.2913C18.9526 10.1461 19.1495 10.0645 19.3548 10.0645H20.129ZM20.129 13.1613C20.3344 13.1613 20.5313 13.2429 20.6765 13.388C20.8217 13.5332 20.9032 13.7302 20.9032 13.9355C20.9032 14.1408 20.8217 14.3377 20.6765 14.4829C20.5313 14.6281 20.3344 14.7097 20.129 14.7097H13.9355C13.7302 14.7097 13.5332 14.6281 13.388 14.4829C13.2429 14.3377 13.1613 14.1408 13.1613 13.9355C13.1613 13.7302 13.2429 13.5332 13.388 13.388C13.5332 13.2429 13.7302 13.1613 13.9355 13.1613H20.129ZM6.96774 0C8.09705 0 9.18011 0.448616 9.97865 1.24716C10.7772 2.0457 11.2258 3.12876 11.2258 4.25806C11.2258 5.38737 10.7772 6.47043 9.97865 7.26897C9.18011 8.06751 8.09705 8.51613 6.96774 8.51613C5.83843 8.51613 4.75538 8.06751 3.95684 7.26897C3.15829 6.47043 2.70968 5.38737 2.70968 4.25806C2.70968 3.12876 3.15829 2.0457 3.95684 1.24716C4.75538 0.448616 5.83843 0 6.96774 0ZM17.0354 1.54374C17.4994 1.53396 17.9606 1.61691 18.3922 1.78771C18.8237 1.95852 19.2168 2.21374 19.5484 2.53843C19.88 2.86313 20.1434 3.25075 20.3233 3.67858C20.5032 4.10641 20.5958 4.56584 20.5958 5.02994C20.5958 5.49403 20.5032 5.95346 20.3233 6.38129C20.1434 6.80912 19.88 7.19674 19.5484 7.52144C19.2168 7.84613 18.8237 8.10136 18.3922 8.27216C17.9606 8.44296 17.4994 8.52591 17.0354 8.51613C16.1235 8.49691 15.2554 8.12117 14.6173 7.46948C13.9792 6.81778 13.6219 5.94201 13.6219 5.02994C13.6219 4.11786 13.9792 3.24209 14.6173 2.59039C15.2554 1.9387 16.1235 1.56296 17.0354 1.54374Z" fill="currentColor"/>
</svg></span>
          <span class="nav-link-text">استشارات التسويق</span>
          <span class="nav-link-arrow" aria-hidden="true"><svg width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M9 3L4 7L9 11" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
        </a>
        <a href="portfolio.html" class="nav-link" data-index="3">
          <span class="nav-link-icon"><svg viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M11 13H9C8.45 13 8 12.55 8 12H1.01V16C1.01 17.1 1.91 18 3.01 18H17C18.1 18 19 17.1 19 16V12H12C12 12.55 11.55 13 11 13ZM18 4H14C14 1.79 12.21 0 10 0C7.79 0 6 1.79 6 4H2C0.9 4 0 4.9 0 6V9C0 10.11 0.89 11 2 11H8V10C8 9.45 8.45 9 9 9H11C11.55 9 12 9.45 12 10V11H18C19.1 11 20 10.1 20 9V6C20 4.9 19.1 4 18 4ZM8 4C8 2.9 8.9 2 10 2C11.1 2 12 2.9 12 4H7.99H8Z" fill="currentColor"/>
</svg></span>
          <span class="nav-link-text">معرض الأعمال</span>
          <span class="nav-link-arrow" aria-hidden="true"><svg width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M9 3L4 7L9 11" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
        </a>
        <a href="pricing.html" class="nav-link" data-index="4">
          <span class="nav-link-icon"><svg viewBox="0 0 21 18" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M6.3 7.8C7.33434 7.8 8.32632 7.38911 9.05772 6.65772C9.78911 5.92632 10.2 4.93434 10.2 3.9C10.2 2.86566 9.78911 1.87368 9.05772 1.14228C8.32632 0.410892 7.33434 0 6.3 0C5.26566 0 4.27368 0.410892 3.54228 1.14228C2.81089 1.87368 2.4 2.86566 2.4 3.9C2.4 4.93434 2.81089 5.92632 3.54228 6.65772C4.27368 7.38911 5.26566 7.8 6.3 7.8ZM9 12C8.99997 11.3709 9.19774 10.7576 9.56534 10.247C9.93293 9.73646 10.4517 9.35436 11.0484 9.1548C10.7773 9.0524 10.4898 8.99995 10.2 9H2.4C1.76348 9 1.15303 9.25286 0.702944 9.70294C0.252856 10.153 0 10.7635 0 11.4C0 11.4 0 16.2 6.3 16.2C7.3764 16.2 8.268 16.0596 9.0084 15.828C9.00319 15.7521 9.00039 15.6761 9 15.6V12ZM18.6 4.8C18.6 5.59565 18.2839 6.35871 17.7213 6.92132C17.1587 7.48393 16.3957 7.8 15.6 7.8C14.8044 7.8 14.0413 7.48393 13.4787 6.92132C12.9161 6.35871 12.6 5.59565 12.6 4.8C12.6 4.00435 12.9161 3.24129 13.4787 2.67868C14.0413 2.11607 14.8044 1.8 15.6 1.8C16.3957 1.8 17.1587 2.11607 17.7213 2.67868C18.2839 3.24129 18.6 4.00435 18.6 4.8ZM10.2 12C10.2 11.5226 10.3896 11.0648 10.7272 10.7272C11.0648 10.3896 11.5226 10.2 12 10.2H19.2C19.6774 10.2 20.1352 10.3896 20.4728 10.7272C20.8104 11.0648 21 11.5226 21 12V15.6C21 16.0774 20.8104 16.5352 20.4728 16.8728C20.1352 17.2104 19.6774 17.4 19.2 17.4H12C11.5226 17.4 11.0648 17.2104 10.7272 16.8728C10.3896 16.5352 10.2 16.0774 10.2 15.6V12ZM11.4 12V13.2C11.8774 13.2 12.3352 13.0104 12.6728 12.6728C13.0104 12.3352 13.2 11.8774 13.2 11.4H12C12 11.5591 11.9368 11.7117 11.8243 11.8243C11.7117 11.9368 11.5591 12 11.4 12ZM19.8 13.2V12C19.6409 12 19.4883 11.9368 19.3757 11.8243C19.2632 11.7117 19.2 11.5591 19.2 11.4H18C18 11.8774 18.1896 12.3352 18.5272 12.6728C18.8648 13.0104 19.3226 13.2 19.8 13.2ZM18 16.2H19.2C19.2 16.0409 19.2632 15.8883 19.3757 15.7757C19.4883 15.6632 19.6409 15.6 19.8 15.6V14.4C19.3226 14.4 18.8648 14.5896 18.5272 14.9272C18.1896 15.2648 18 15.7226 18 16.2ZM11.4 14.4V15.6C11.5591 15.6 11.7117 15.6632 11.8243 15.7757C11.9368 15.8883 12 16.0409 12 16.2H13.2C13.2 15.7226 13.0104 15.2648 12.6728 14.9272C12.3352 14.5896 11.8774 14.4 11.4 14.4ZM15.6 15.6C16.0774 15.6 16.5352 15.4104 16.8728 15.0728C17.2104 14.7352 17.4 14.2774 17.4 13.8C17.4 13.3226 17.2104 12.8648 16.8728 12.5272C16.5352 12.1896 16.0774 12 15.6 12C15.1226 12 14.6648 12.1896 14.3272 12.5272C13.9896 12.8648 13.8 13.3226 13.8 13.8C13.8 14.2774 13.9896 14.7352 14.3272 15.0728C14.6648 15.4104 15.1226 15.6 15.6 15.6Z" fill="currentColor"/>
</svg></span>
          <span class="nav-link-text">الباقات والأسعار</span>
          <span class="nav-link-arrow" aria-hidden="true"><svg width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M9 3L4 7L9 11" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
        </a>
        <a href="integration.html" class="nav-link" data-index="5">
          <span class="nav-link-icon"><svg viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M4.24991 0.000394812C4.80801 0.000394812 5.36065 0.110322 5.87627 0.3239C6.3919 0.537477 6.8604 0.850523 7.25504 1.24516C7.64968 1.6398 7.96273 2.10831 8.17631 2.62393C8.38988 3.13955 8.49981 3.69219 8.49981 4.2503V8.5002H4.24991C3.12276 8.5002 2.04178 8.05245 1.24477 7.25544C0.447758 6.45842 1.81715e-06 5.37744 1.81715e-06 4.2503C1.81715e-06 3.12315 0.447758 2.04217 1.24477 1.24516C2.04178 0.448151 3.12276 0.000394812 4.24991 0.000394812ZM4.24991 10.5002H8.49981V14.7501C8.49981 15.5906 8.25056 16.4123 7.78357 17.1112C7.31659 17.8101 6.65284 18.3548 5.87627 18.6765C5.09971 18.9981 4.24519 19.0823 3.42079 18.9183C2.59639 18.7543 1.83913 18.3496 1.24477 17.7552C0.65041 17.1608 0.245646 16.4036 0.0816626 15.5792C-0.0823209 14.7548 0.00184141 13.9003 0.323507 13.1237C0.645172 12.3471 1.18989 11.6834 1.88879 11.2164C2.58768 10.7494 3.40935 10.5002 4.24991 10.5002ZM10.4998 10.5002H14.7497C15.5902 10.5002 16.4119 10.7494 17.1108 11.2164C17.8097 11.6834 18.3544 12.3471 18.6761 13.1237C18.9977 13.9003 19.0819 14.7548 18.9179 15.5792C18.7539 16.4036 18.3492 17.1608 17.7548 17.7552C17.1604 18.3496 16.4032 18.7543 15.5788 18.9183C14.7544 19.0823 13.8999 18.9981 13.1233 18.6765C12.3467 18.3548 11.683 17.8101 11.216 17.1112C10.749 16.4123 10.4998 15.5906 10.4998 14.7501V10.5002ZM15.5077 7.57022L15.2457 8.17021C15.0537 8.6102 14.4457 8.6102 14.2537 8.17021L13.9917 7.57022C13.5324 6.50662 12.6911 5.65386 11.6337 5.18028L10.8268 4.82029C10.7292 4.77518 10.6466 4.70309 10.5887 4.61254C10.5308 4.52199 10.5001 4.41677 10.5001 4.3093C10.5001 4.20183 10.5308 4.0966 10.5887 4.00606C10.6466 3.91551 10.7292 3.84342 10.8268 3.79831L11.5887 3.45832C12.6729 2.9717 13.5291 2.08763 13.9807 0.988373L14.2497 0.339387C14.2895 0.239255 14.3584 0.153372 14.4475 0.092861C14.5367 0.0323503 14.6419 0 14.7497 0C14.8574 0 14.9627 0.0323503 15.0518 0.092861C15.141 0.153372 15.2099 0.239255 15.2497 0.339387L15.5187 0.989373C15.9702 2.08863 16.8264 2.9727 17.9106 3.45932L18.6726 3.79831C18.7701 3.84342 18.8527 3.91551 18.9106 4.00606C18.9685 4.0966 18.9993 4.20183 18.9993 4.3093C18.9993 4.41677 18.9685 4.52199 18.9106 4.61254C18.8527 4.70309 18.7701 4.77518 18.6726 4.82029L17.8656 5.18028C16.8083 5.65386 15.9669 6.50662 15.5077 7.57022Z" fill="currentColor"/>
</svg></span>
          <span class="nav-link-text">منظومة التكامل</span>
          <span class="nav-link-arrow" aria-hidden="true"><svg width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M9 3L4 7L9 11" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
        </a>
        <a href="about.html" class="nav-link" data-index="6">
          <span class="nav-link-icon"><svg viewBox="0 0 22 18" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M20 16H22V18H0V16H2V1C2 0.734784 2.10536 0.48043 2.29289 0.292893C2.48043 0.105357 2.73478 0 3 0H13C13.2652 0 13.5196 0.105357 13.7071 0.292893C13.8946 0.48043 14 0.734784 14 1V16H16V6H19C19.2652 6 19.5196 6.10536 19.7071 6.29289C19.8946 6.48043 20 6.73478 20 7V16ZM6 8V10H10V8H6ZM6 4V6H10V4H6Z" fill="currentColor"/>
</svg></span>
          <span class="nav-link-text">من نحن</span>
          <span class="nav-link-arrow" aria-hidden="true"><svg width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M9 3L4 7L9 11" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
        </a>
        <a href="blog.html" class="nav-link" data-index="7">
          <span class="nav-link-icon"><svg viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M16.8217 6.72887H15.7297C15.4413 6.72373 15.1661 6.60679 14.9622 6.40271C14.7583 6.19862 14.6416 5.92334 14.6367 5.6349C14.6366 4.89478 14.4907 4.16194 14.2073 3.47821C13.924 2.79448 13.5087 2.17326 12.9853 1.65001C12.4619 1.12676 11.8405 0.711733 11.1567 0.428624C10.4728 0.145515 9.73995 -0.000131242 8.99983 8.87377e-08H5.63589C4.14134 6.5212e-08 2.70798 0.593643 1.65107 1.65036C0.594162 2.70708 0.000265181 4.14034 0 5.6349V12.3648C0.000265181 13.8593 0.594162 15.2926 1.65107 16.3493C2.70798 17.406 4.14134 17.9997 5.63589 17.9997H12.3648C13.8593 17.9994 15.2926 17.4055 16.3493 16.3486C17.406 15.2917 17.9997 13.8583 17.9997 12.3638V7.90585C18.0034 7.75019 17.9754 7.5954 17.9175 7.45087C17.8596 7.30633 17.773 7.17505 17.6628 7.065C17.5527 6.95495 17.4213 6.86841 17.2767 6.81063C17.1322 6.75285 16.9773 6.72504 16.8217 6.72887ZM5.5519 4.54192H9.58882C10.1778 4.54192 10.6818 5.04591 10.6818 5.6349C10.6818 6.22388 10.1778 6.72987 9.58982 6.72987H5.5499C5.26146 6.72473 4.98628 6.60779 4.78238 6.40371C4.57848 6.19962 4.4618 5.92434 4.45692 5.63589C4.45692 5.04691 4.96191 4.54292 5.5499 4.54292M12.4468 13.4587H5.63589C5.34728 13.4539 5.07185 13.337 4.86774 13.1329C4.66363 12.9288 4.5468 12.6534 4.54192 12.3648C4.54192 11.7758 5.04691 11.2718 5.63589 11.2718H12.4488C13.0368 11.2718 13.5417 11.7758 13.5417 12.3648C13.5417 12.9538 13.0368 13.4587 12.4488 13.4587" fill="currentColor"/>
</svg></span>
          <span class="nav-link-text">المدونة</span>
          <span class="nav-link-arrow" aria-hidden="true"><svg width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M9 3L4 7L9 11" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
        </a>
      </nav>

      <!-- فوتر الناف: معلومات التواصل + زر CTA -->
      <div class="nav-footer">
        <div class="nav-contact">
          <a href="mailto:info@brandkey.com" class="contact-link">
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" aria-hidden="true"><rect x="1" y="3" width="14" height="10" rx="1.5" stroke="currentColor" stroke-width="1.4"/><path d="M2 4L8 8.5L14 4" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/></svg>
            <span>info@brandkey.com</span>
          </a>
          <a href="tel:+201001234567" class="contact-link">
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M14.5 11.5V13.5C14.5 14.05 14.05 14.5 13.5 14.5C6.6 14.5 1.5 9.4 1.5 2.5C1.5 1.95 1.95 1.5 2.5 1.5H4.5C5.05 1.5 5.5 1.95 5.5 2.5C5.5 3.3 5.65 4.05 5.9 4.75C6 5.05 5.9 5.4 5.65 5.65L4.6 6.7C5.5 8.5 7 10 8.8 10.9L9.85 9.85C10.1 9.6 10.45 9.5 10.75 9.6C11.45 9.85 12.2 10 13 10C13.55 10 14 10.45 14 11" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/></svg>
            <span>+20 100 123 4567</span>
          </a>
        </div>
        <a href="contact.html" class="nav-cta">
          <span>تواصل معنا</span>
          <svg width="18" height="18" viewBox="0 0 18 18" fill="none" aria-hidden="true"><path d="M17.5 0.5L0.5 7.5L7 9L8.5 16.5L12 12L15.5 15.5L17.5 0.5Z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/><path d="M7 9L17.5 0.5" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/></svg>
        </a>
      </div>

    </div>
  </div>`;
var FOOTER_HTML = `<footer class="site-footer" id="siteFooter">

    <!-- ---- الفوتر الرئيسي (4 أعمدة) ----
         الترتيب من اليمين للشمال (RTL):
         عن براند كي → روابط سريعة → خدماتنا → تواصل معنا -->
    <div class="footer-main">
      <div class="footer-container">
        <div class="footer-grid">

          <!-- العمود 1 (يمين): عن براند كي -->
          <div class="footer-col footer-col--about" data-col="0">
            <a href="#" class="footer-logo" aria-label="Brand Key">
              <img src="icons/logo-light.svg" alt="Brand Key" class="footer-logo-img" />
            </a>
            <p class="footer-desc">
              شركة متخصصة في التسويق الرقمي وخدمات التكنولوجيا، أسست في عام 2011. نسعى دائماً لتقديم حلول مبتكرة تساعد عملائنا على النمو والنجاح.
            </p>
            <div class="footer-social">
              <a href="#" class="social-link" aria-label="Facebook">
                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" aria-hidden="true"><path d="M10.5 17V9.5H13L13.5 6.5H10.5V4.6C10.5 3.7 10.7 3.1 12 3.1H13.5V0.5C13.2 0.5 12.3 0.4 11.2 0.4C8.9 0.4 7.3 1.9 7.3 4.3V6.5H4.5V9.5H7.3V17H10.5Z" fill="currentColor"/></svg>
              </a>
              <a href="#" class="social-link" aria-label="Instagram">
                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" aria-hidden="true"><path fill-rule="evenodd" clip-rule="evenodd" d="M9 1.5C7.1 1.5 6.85 1.51 6.09 1.54C5.33 1.58 4.8 1.7 4.34 1.88C3.86 2.06 3.45 2.31 3.05 2.71C2.65 3.11 2.4 3.52 2.22 4C2.04 4.46 1.92 4.99 1.88 5.75C1.85 6.51 1.84 6.76 1.84 8.66C1.84 10.56 1.85 10.81 1.88 11.57C1.92 12.33 2.04 12.86 2.22 13.32C2.4 13.8 2.65 14.21 3.05 14.61C3.45 15.01 3.86 15.26 4.34 15.44C4.8 15.62 5.33 15.74 6.09 15.78C6.85 15.81 7.1 15.82 9 15.82C10.9 15.82 11.15 15.81 11.91 15.78C12.67 15.74 13.2 15.62 13.66 15.44C14.14 15.26 14.55 15.01 14.95 14.61C15.35 14.21 15.6 13.8 15.78 13.32C15.96 12.86 16.08 12.33 16.12 11.57C16.15 10.81 16.16 10.56 16.16 8.66C16.16 6.76 16.15 6.51 16.12 5.75C16.08 4.99 15.96 4.46 15.78 4C15.6 3.52 15.35 3.11 14.95 2.71C14.55 2.31 14.14 2.06 13.66 1.88C13.2 1.7 12.67 1.58 11.91 1.54C11.15 1.51 10.9 1.5 9 1.5ZM9 3.3C10.87 3.3 11.1 3.31 11.85 3.34C12.54 3.37 12.92 3.49 13.17 3.58C13.5 3.71 13.74 3.87 13.99 4.12C14.24 4.37 14.4 4.61 14.53 4.94C14.62 5.19 14.74 5.57 14.77 6.26C14.8 7.01 14.81 7.24 14.81 9.11C14.81 10.98 14.8 11.21 14.77 11.96C14.74 12.65 14.62 13.03 14.53 13.28C14.4 13.61 14.24 13.85 13.99 14.1C13.74 14.35 13.5 14.51 13.17 14.64C12.92 14.73 12.54 14.85 11.85 14.88C11.1 14.91 10.87 14.92 9 14.92C7.13 14.92 6.9 14.91 6.15 14.88C5.46 14.85 5.08 14.73 4.83 14.64C4.5 14.51 4.26 14.35 4.01 14.1C3.76 13.85 3.6 13.61 3.47 13.28C3.38 13.03 3.26 12.65 3.23 11.96C3.2 11.21 3.19 10.98 3.19 9.11C3.19 7.24 3.2 7.01 3.23 6.26C3.26 5.57 3.38 5.19 3.47 4.94C3.6 4.61 3.76 4.37 4.01 4.12C4.26 3.87 4.5 3.71 4.83 3.58C5.08 3.49 5.46 3.37 6.15 3.34C6.9 3.31 7.13 3.3 9 3.3ZM9 5.5C7.07 5.5 5.5 7.07 5.5 9C5.5 10.93 7.07 12.5 9 12.5C10.93 12.5 12.5 10.93 12.5 9C12.5 7.07 10.93 5.5 9 5.5ZM9 11.2C7.78 11.2 6.8 10.22 6.8 9C6.8 7.78 7.78 6.8 9 6.8C10.22 6.8 11.2 7.78 11.2 9C11.2 10.22 10.22 11.2 9 11.2ZM13.5 5.35C13.5 5.79 13.14 6.15 12.7 6.15C12.26 6.15 11.9 5.79 11.9 5.35C11.9 4.91 12.26 4.55 12.7 4.55C13.14 4.55 13.5 4.91 13.5 5.35Z" fill="currentColor"/></svg>
              </a>
              <a href="#" class="social-link" aria-label="LinkedIn">
                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" aria-hidden="true"><path d="M4.5 1.5C4.5 2.33 3.83 3 3 3C2.17 3 1.5 2.33 1.5 1.5C1.5 0.67 2.17 0 3 0C3.83 0 4.5 0.67 4.5 1.5ZM0.5 5H5.5V17H0.5V5ZM7.5 5H12.3V7.1H12.37C12.96 5.96 14.35 4.75 16.5 4.75C21 4.75 21.5 7.5 21.5 11V17H16.5V11.9C16.5 10.05 16.47 7.7 14 7.7C11.5 7.7 11.5 9.7 11.5 11.75V17H7.5V5Z" fill="currentColor"/></svg>
              </a>
              <a href="#" class="social-link" aria-label="X (Twitter)">
                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" aria-hidden="true"><path d="M13.5 1H16L10 8.5L17 17H11.5L7.3 11.8L2.3 17H0L6.5 9L0 1H5.7L9.5 5.7L13.5 1ZM12.5 15.4H14L4.9 2.5H3.3L12.5 15.4Z" fill="currentColor"/></svg>
              </a>
            </div>
          </div>

          <!-- العمود 2: روابط سريعة -->
          <div class="footer-col" data-col="1">
            <h4 class="footer-heading">روابط سريعة</h4>
            <ul class="footer-links">
              <li><a href="index.html">الرئيسية</a></li>
              <li><a href="about.html">عن الشركة</a></li>
              <li><a href="services.html">خدماتنا</a></li>
              <li><a href="sectors.html">حلول القطاعات</a></li>
              <li><a href="portfolio.html">عملاؤنا</a></li>
              <li><a href="contact.html">التوظيف</a></li>
            </ul>
          </div>

          <!-- العمود 3: خدماتنا -->
          <div class="footer-col" data-col="2">
            <h4 class="footer-heading">خدماتنا</h4>
            <ul class="footer-links">
              <li><a href="services.html">تسويق رقمي</a></li>
              <li><a href="services.html">التصميم</a></li>
              <li><a href="services.html">تطوير المواقع</a></li>
              <li><a href="services.html">الإعلانات المدفوعة</a></li>
              <li><a href="contact.html">تواصل معنا</a></li>
            </ul>
          </div>

          <!-- العمود 4 (يسار): تواصل معنا -->
          <div class="footer-col" data-col="3">
            <h4 class="footer-heading">تواصل معنا</h4>
            <ul class="footer-contact">
              <li>
                <a href="mailto:info@brandkey.com" class="contact-item">
                  <span class="contact-ic">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" aria-hidden="true"><rect x="1" y="3" width="14" height="10" rx="1.5" stroke="currentColor" stroke-width="1.4"/><path d="M2 4L8 8.5L14 4" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/></svg>
                  </span>
                  <span>info@brandkey.com</span>
                </a>
              </li>
              <li>
                <a href="tel:+201001234567" class="contact-item">
                  <span class="contact-ic">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M14.5 11.5V13.5C14.5 14.05 14.05 14.5 13.5 14.5C6.6 14.5 1.5 9.4 1.5 2.5C1.5 1.95 1.95 1.5 2.5 1.5H4.5C5.05 1.5 5.5 1.95 5.5 2.5C5.5 3.3 5.65 4.05 5.9 4.75C6 5.05 5.9 5.4 5.65 5.65L4.6 6.7C5.5 8.5 7 10 8.8 10.9L9.85 9.85C10.1 9.6 10.45 9.5 10.75 9.6C11.45 9.85 12.2 10 13 10C13.55 10 14 10.45 14 11" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/></svg>
                  </span>
                  <span>+20 100 123 4567</span>
                </a>
              </li>
              <li>
                <a href="https://maps.google.com/?q=القاهرة+شارع+التحرير" target="_blank" rel="noopener" class="contact-item">
                  <span class="contact-ic">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M8 1C5.24 1 3 3.24 3 6C3 9.5 8 15 8 15C8 15 13 9.5 13 6C13 3.24 10.76 1 8 1Z" stroke="currentColor" stroke-width="1.4" stroke-linejoin="round"/><circle cx="8" cy="6" r="1.8" stroke="currentColor" stroke-width="1.4"/></svg>
                  </span>
                  <span>القاهرة | مصر، شارع التحرير</span>
                </a>
              </li>
            </ul>
          </div>

        </div>
      </div>
    </div>

    <!-- ---- قسم الاشتراك في النشرة (بعد الأعمدة الأربعة، قبل الشروط والأحكام) ---- -->
    <div class="footer-newsletter">
      <div class="footer-container">
        <div class="newsletter-text">
          <h3 class="newsletter-title">اشترك في نشرتنا</h3>
          <p class="newsletter-sub">احصل على آخر الأخبار والعروض التسويقية مباشرة في صندوق بريدك الإلكتروني</p>
        </div>
        <form class="newsletter-form" id="newsletterForm">
          <div class="input-wrap">
            <svg class="input-icon" width="18" height="18" viewBox="0 0 18 18" fill="none" aria-hidden="true">
              <rect x="1" y="3" width="16" height="12" rx="2" stroke="currentColor" stroke-width="1.5"/>
              <path d="M2 4L9 9.5L16 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <input type="email" placeholder="البريد الإلكتروني" required aria-label="البريد الإلكتروني" id="newsletterEmail" />
          </div>
          <button type="submit" class="newsletter-btn">
            <span>اشتراك</span>
            <svg width="16" height="16" viewBox="0 0 20 20" fill="none" aria-hidden="true">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M16.697 0.147C17.1372 -0.0123 17.6137 -0.0429 18.0706 0.0588C18.5276 0.1605 18.9461 0.3903 19.2771 0.7214C19.6082 1.0524 19.838 1.4709 19.9397 1.9279C20.0414 2.3848 20.0107 2.8613 19.8513 3.3015L14.8428 18.3086C14.711 18.7087 14.4787 19.0683 14.168 19.3527C13.8573 19.6372 13.4786 19.8369 13.0685 19.9329C12.6588 20.0332 12.2301 20.025 11.8246 19.9093C11.419 19.7936 11.0506 19.5742 10.7556 19.2729L8.1656 16.7L5.4656 18.0943C5.3278 18.1653 5.174 18.1992 5.0192 18.1926C4.8643 18.1861 4.7139 18.1394 4.5826 18.0571C4.4513 16.9748 4.3437 17.8597 4.2703 17.7232C4.1969 17.5868 4.1604 17.4335 4.1642 17.2786L4.2785 12.8043L0.7142 9.2386C0.4297 8.9551 0.22 8.6055 0.1038 8.221C-0.0123 7.8366 -0.0314 7.4293 0.0485 7.0357C0.1278 6.6067 0.32 6.2066 0.6052 5.8764C0.8904 5.5463 1.2584 5.298 1.6713 5.1572L1.6785 5.1543L16.697 0.147ZM2.2456 6.8472L17.2742 1.8372C17.4032 1.7825 17.546 1.7695 17.6828 1.8C17.7774 1.8201 17.8666 1.8605 17.9443 1.9183C18.0219 1.9761 18.0861 2.05 18.1325 2.1349C18.1789 2.2198 18.2064 2.3138 18.2131 2.4104C18.2198 2.5069 18.2056 2.6038 18.1713 2.6943L18.1613 2.7229L13.1456 17.7457V17.7486C13.1096 17.8587 13.0456 17.9577 12.96 18.0358C12.8744 18.1139 12.77 18.1685 12.657 18.1943L12.6456 18.1972C12.536 18.2246 12.4212 18.2227 12.3126 18.1916C12.204 18.1605 12.1055 18.1013 12.027 18.02L12.0185 18.0115L8.9642 14.9729C8.8299 14.8397 8.6569 14.7527 8.47 14.7242C8.2831 14.6957 8.092 14.7272 7.9242 14.8143L5.9885 15.8143L6.0356 14L14.6827 5.9086C14.8132 5.7864 14.893 5.6196 14.9065 5.4414C14.92 5.2631 14.8662 5.0863 14.7557 4.9458C14.6451 4.8053 14.4859 4.7114 14.3095 4.6825C14.1331 4.6537 13.9523 4.692 13.8027 4.79L4.7599 10.7572L1.9742 7.9743C1.8981 7.8987 1.8422 7.8052 1.8115 7.7024C1.7808 7.5996 1.7763 7.4907 1.7985 7.3857L1.8027 7.3657C1.8235 7.2476 1.8756 7.1372 1.9534 7.0461C2.0313 6.9549 2.1322 6.8862 2.2456 6.8472Z" fill="currentColor"/>
            </svg>
          </button>
          <p class="newsletter-msg" id="newsletterMsg" role="status" aria-live="polite"></p>
        </form>
      </div>
    </div>

    <!-- ---- الشريط السفلي ---- -->
    <div class="footer-bottom">
      <div class="footer-container">
        <div class="footer-bottom-inner">
          <div class="legal-links">
            <a href="#">الشروط والأحكام</a>
            <span class="legal-sep">|</span>
            <a href="#">سياسة الخصوصية</a>
          </div>
          <p class="copyright">© 2026 جميع الحقوق محفوظة، براند كي</p>
        </div>
      </div>
    </div>

  </footer>`;
/* الهيرو الداخلي — بيدعم data-* attributes للتخصيص لكل صفحة:
   data-title, data-desc, data-primary-text, data-primary-icon, data-primary-href,
   data-ghost-text, data-ghost-icon, data-ghost-href, data-photo
   لو أي attribute مش موجود، بنستخدم القيم الافتراضية (بتاعة صفحة التدريب) */
var HERO_DEFAULTS = {
  title: 'فريقك التسويقي هو أصولك — نبنيه أو نطوّره',
  desc: 'برامج تدريبية مخصصة للفرق التسويقية في الشركات — من تأسيس الفريق وتحديد الأدوار، إلى رفع الكفاءة وتطوير الأداء بمنهجية عملية.',
  primaryText: 'اطلب برنامجك التدريبي',
  primaryIcon: 'icons/start-icon.svg',
  primaryHref: '#',
  ghostText: 'تعرّف على البرامج',
  ghostIcon: 'icons/humbleicons-arrow-up.svg',
  ghostHref: '#',
  photo: 'icons/inner-hero-photo.png'
};
var heroHolder = document.getElementById('inner-hero-include');
var heroData = {};
if (heroHolder) {
  heroData.title = heroHolder.getAttribute('data-title') || HERO_DEFAULTS.title;
  heroData.desc = heroHolder.getAttribute('data-desc') || HERO_DEFAULTS.desc;
  heroData.primaryText = heroHolder.getAttribute('data-primary-text') || HERO_DEFAULTS.primaryText;
  heroData.primaryIcon = heroHolder.getAttribute('data-primary-icon') || HERO_DEFAULTS.primaryIcon;
  heroData.primaryHref = heroHolder.getAttribute('data-primary-href') || HERO_DEFAULTS.primaryHref;
  heroData.ghostText = heroHolder.getAttribute('data-ghost-text') || HERO_DEFAULTS.ghostText;
  heroData.ghostIcon = heroHolder.getAttribute('data-ghost-icon') || HERO_DEFAULTS.ghostIcon;
  heroData.ghostHref = heroHolder.getAttribute('data-ghost-href') || HERO_DEFAULTS.ghostHref;
  heroData.photo = heroHolder.getAttribute('data-photo') || HERO_DEFAULTS.photo;
}
var HERO_HTML = `<!-- ============================================================
     الهيرو الداخلي — reusable component
     مبني على كود Figma المصدري
     ============================================================ -->
<section class="inner-hero" id="innerHero">

  <!-- الفريم: شكل كحلي (mask من Subtract.png) + صورة بارزة جوه -->
  <div class="inner-hero-frame">
    <!-- الخلفية الكحلي (mask = شكل Subtract.png) -->
    <div class="inner-hero-frame-fill"></div>
    <!-- صورة بارزة جوه الفريم — div بـ background-image (mask بيشتغل على divs) -->
    <div class="inner-hero-frame-photo" style="background-image: url('${heroData.photo}');"></div>
    <!-- أوفرلاي أسود فوق الصورة عشان النص يظهر -->
    <div class="inner-hero-frame-overlay"></div>

    <!-- المفتاح في النوتش (top-left) — جوه الفريم عشان يتحرك معاه -->
    <img src="icons/pricing-key.svg" alt="" class="inner-hero-key" aria-hidden="true" />

    <!-- المحتوى (متوسط جوه الفريم) — جوه الفريم عشان يفضل متمركز -->
    <div class="inner-hero-content">
      <h1 class="inner-hero-title">${heroData.title}</h1>
      <div class="inner-hero-body">
        <p class="inner-hero-desc">
          ${heroData.desc}
        </p>
        <div class="inner-hero-actions">
          <a href="${heroData.primaryHref}" class="inner-hero-btn inner-hero-btn--primary">
            <span>${heroData.primaryText}</span>
            <img src="${heroData.primaryIcon}" alt="" />
          </a>
          <a href="${heroData.ghostHref}" class="inner-hero-btn inner-hero-btn--ghost">
            <img src="${heroData.ghostIcon}" alt="" />
            <span>${heroData.ghostText}</span>
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- يمين: قم بالتمرير لرؤية المزيد + ماوس -->
  <aside class="inner-hero-scroll" aria-label="إرشاد التمرير">
    <span class="inner-hero-scroll-text">قم بالتمرير لرؤية المزيد</span>
    <span class="inner-hero-mouse">
      <svg width="24" height="38" viewBox="0 0 24 38" fill="none">
        <rect x="1" y="1" width="22" height="36" rx="11" stroke="#5C5C5C" stroke-width="2"/>
        <rect x="10.5" y="7" width="3" height="10" rx="1.5" fill="#5C5C5C"/>
      </svg>
    </span>
  </aside>

  <!-- شمال: تابعنا + سوشيال -->
  <aside class="inner-hero-follow" aria-label="روابط المتابعة">
    <span class="inner-hero-follow-text">تابعنا</span>
    <div class="inner-hero-social-icons">
      <a href="#" aria-label="Facebook" class="inner-hero-social-link">
        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M9.5 16V9H11.5L12 6.5H9.5V5C9.5 4.3 9.7 4 10.5 4H12V1.5C11.7 1.5 10.8 1.5 9.8 1.5C7.8 1.5 6.5 2.8 6.5 4.8V6.5H4V9H6.5V16H9.5Z" fill="currentColor"/></svg>
      </a>
      <a href="#" aria-label="Instagram" class="inner-hero-social-link">
        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M8 1.5C6.1 1.5 5.85 1.51 5.09 1.54C3.33 1.62 2.4 2.55 2.32 4.31C2.29 5.07 2.28 5.32 2.28 7.22C2.28 9.12 2.29 9.37 2.32 10.13C2.4 11.89 3.33 12.82 5.09 12.9C5.85 12.93 6.1 12.94 8 12.94C9.9 12.94 10.15 12.93 10.91 12.9C12.67 12.82 13.6 11.89 13.68 10.13C13.71 9.37 13.72 9.12 13.72 7.22C13.72 5.32 13.71 5.07 13.68 4.31C13.6 2.55 12.67 1.62 10.91 1.54C10.15 1.51 9.9 1.5 8 1.5ZM8 3.3C9.87 3.3 10.1 3.31 10.85 3.34C11.54 3.37 11.92 3.49 12.17 3.58C12.5 3.71 12.74 3.87 12.99 4.12C13.24 4.37 13.4 4.61 13.53 4.94C13.62 5.19 13.74 5.57 13.77 6.26C13.8 7.01 13.81 7.24 13.81 9.11C13.81 10.98 13.8 11.21 13.77 11.96C13.74 12.65 13.62 13.03 13.53 13.28C13.4 13.61 13.24 13.85 12.99 14.1C12.74 14.35 12.5 14.51 12.17 14.64C11.92 14.73 11.54 14.85 10.85 14.88C10.1 14.91 9.87 14.92 8 14.92C6.13 14.92 5.9 14.91 5.15 14.88C4.46 14.85 4.08 14.73 3.83 14.64C3.5 14.51 3.26 14.35 3.01 14.1C2.76 13.85 2.6 13.61 2.47 13.28C2.38 13.03 2.26 12.65 2.23 11.96C2.2 11.21 2.19 10.98 2.19 9.11C2.19 7.24 2.2 7.01 2.23 6.26C2.26 5.57 2.38 5.19 2.47 4.94C2.6 4.61 2.76 4.37 3.01 4.12C3.26 3.87 3.5 3.71 3.83 3.58C4.08 3.49 4.46 3.37 5.15 3.34C5.9 3.31 6.13 3.3 8 3.3ZM8 5.5C6.07 5.5 4.5 7.07 4.5 9C4.5 10.93 6.07 12.5 8 12.5C9.93 12.5 11.5 10.93 11.5 9C11.5 7.07 9.93 5.5 8 5.5ZM8 11.2C6.78 11.2 5.8 10.22 5.8 9C5.8 7.78 6.78 6.8 8 6.8C9.22 6.8 10.2 7.78 10.2 9C10.2 10.22 9.22 11.2 8 11.2ZM12.5 5.35C12.5 5.79 12.14 6.15 11.7 6.15C11.26 6.15 10.9 5.79 10.9 5.35C10.9 4.91 11.26 4.55 11.7 4.55C12.14 4.55 12.5 4.91 12.5 5.35Z" fill="currentColor"/></svg>
      </a>
      <a href="#" aria-label="LinkedIn" class="inner-hero-social-link">
        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3.5 1.5C3.5 2.33 2.83 3 2 3C1.17 3 0.5 2.33 0.5 1.5C0.5 0.67 1.17 0 2 0C2.83 0 3.5 0.67 3.5 1.5ZM0.5 5H3.5V16H0.5V5ZM5.5 5H8.3V6.5H8.35C9 5.5 10.2 4.75 12 4.75C15.5 4.75 16 7.5 16 10.5V16H13V11C13 9.5 12.97 7.7 11 7.7C9 7.7 8.5 9.2 8.5 11V16H5.5V5Z" fill="currentColor"/></svg>
      </a>
      <a href="#" aria-label="X (Twitter)" class="inner-hero-social-link">
        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M12 1H14.5L9 7L15.5 15H10.5L7 11L2.5 15H0L6 9L0 1H5L8.5 5L12 1ZM11 14H12.5L4.5 2.5H3L11 14Z" fill="currentColor"/></svg>
      </a>
    </div>
  </aside>
</section>
`;
var h = document.getElementById("header-include");
var f = document.getElementById("footer-include");
if(h) h.innerHTML = HEADER_HTML;
if(f) f.innerHTML = FOOTER_HTML;
if(heroHolder) heroHolder.innerHTML = HERO_HTML;

/* ============================================================
   استدعاء الأقسام المكررة من ملفات components/*.html
   كل عنصر بـ data-include="component-name" بياخد محتوى components/component-name.html
   مثال: <div data-include="how"></div> → بياخد محتوى components/how.html

   بنستخدم XMLHttpRequest متزامن (synchronous) عشان نقرا الملفات الفعلية
   قبل ما shared.js يشتغل. كده:
   - الـ component files هي المصدر الواحد للحقيقة (single source of truth)
   - مش محتاج نكرر HTML في الـ JS
   - shared.js يلاقي العناصر جاهزة وقت DOMContentLoaded
   - بيشتغل على http:// (Next.js dev server)
   ============================================================ */
function loadSectionIncludesSync() {
  var placeholders = Array.prototype.slice.call(
    document.querySelectorAll('[data-include]')
  );
  placeholders.forEach(function (ph) {
    var name = ph.getAttribute('data-include');
    if (!name) return;
    var url = 'components/' + name + '.html';
    try {
      var xhr = new XMLHttpRequest();
      xhr.open('GET', url, false); // false = synchronous
      xhr.send();
      if (xhr.status === 200) {
        ph.innerHTML = xhr.responseText;
      } else {
        console.error('[includes] failed to load', name, xhr.status);
        ph.innerHTML = '<!-- فشل تحميل ' + name + ' -->';
      }
    } catch (err) {
      console.error('[includes] error loading', name, err);
      ph.innerHTML = '<!-- فشل تحميل ' + name + ' -->';
    }
  });
}

// شغّل فوراً (قبل ما shared.js يتهيأ) — عشان العناصر تكون جاهزة
loadSectionIncludesSync();
})();
