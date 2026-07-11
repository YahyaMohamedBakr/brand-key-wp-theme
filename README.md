# Brand Key WordPress Theme

WordPress theme for **Brand Key** — a digital marketing solutions company. Full RTL Arabic support, custom post types, customizable sections, and reusable components.

## Features

- ✅ **Full RTL Arabic support**
- ✅ **Custom Post Types**: Projects, Services, Sectors, Testimonials, FAQ, Packages
- ✅ **Customizer Integration**: Control colors, contact info, social links, hero content, section visibility
- ✅ **Page Templates**: About, Services, Sectors, Integration, Training, Consulting, Pricing, Contact, Portfolio, Project, Service, Sector
- ✅ **Reusable Shortcodes**: Hero, CTA, Testimonials, FAQ, Pricing, Blog, Button, Section Title
- ✅ **Custom Logo & Menu Support**
- ✅ **Responsive Design**: Desktop, tablet, mobile
- ✅ **No Framework Dependencies**: Vanilla CSS/JS

## Installation

1. Upload the `brand-key-wp-theme` folder to `/wp-content/themes/`
2. Activate the theme in WordPress: `Appearance > Themes`
3. Configure: `Appearance > Customize > إعدادات براند كي`

## Custom Post Types

| CPT | Slug | Description |
|-----|------|-------------|
| المشاريع | `bk_project` | Portfolio projects |
| الخدمات | `bk_service` | Services |
| القطاعات | `bk_sector` | Industry sectors |
| آراء العملاء | `bk_testimonial` | Client testimonials |
| الأسئلة الشائعة | `bk_faq` | FAQ entries |
| الباقات | `bk_package` | Pricing packages |

## Shortcodes

```php
[bk_hero]
[bk_cta_final title="..." desc="..." btn_text="..." btn_url="..."]
[bk_testimonials count="6"]
[bk_faq count="6"]
[bk_pricing]
[bk_blog count="3"]
[bk_button text="..." url="..." style="primary"]
[bk_section_title title="..." subtitle="..." align="center" dark="false"]
```

## Customizer Options

- **الألوان**: Navy (#0E233F), Gold (#F2C94C), Gold Press, Footer BG
- **معلومات التواصل**: Email, Phone, Address, Map URL
- **روابط التواصل**: Facebook, Instagram, LinkedIn, X, YouTube
- **عن الشركة**: About text (footer)
- **إعدادات الهيرو**: Title, Description, Buttons, Background image
- **تفعيل السيكشنات**: Enable/disable any homepage section

## Theme Structure

```
brand-key-wp-theme/
├── style.css                    # Theme metadata
├── functions.php                # Theme setup, scripts, includes
├── header.php                   # Site header + nav
├── footer.php                   # Site footer
├── front-page.php               # Homepage
├── index.php                    # Main template
├── single.php                   # Single article
├── archive.php                  # Blog listing
├── page.php                     # Default page
├── screenshot.png               # Theme preview
├── assets/
│   ├── css/shared.css           # Main stylesheet
│   ├── js/shared.js             # Main JS
│   ├── js/includes.js           # Header/footer loader
│   ├── icons/                   # 92 icons
│   └── images/                  # Theme images
├── inc/
│   ├── custom-post-types.php    # CPT registration
│   ├── customizer.php           # Customizer settings
│   ├── template-helpers.php     # Helper functions + Nav Walker
│   └── shortcodes.php           # Reusable shortcodes
├── page-templates/              # 12 page templates
└── template-parts/
    ├── sections/                # 13 section templates
    ├── content.php              # Default content
    └── content-none.php         # No results
```

## Version

1.0.0

## License

GPL v2 or later
