<?php
/**
 * The front page template
 *
 * Displays the homepage with all sections from the static theme.
 *
 * @package BrandKey
 */

get_header();
?>

	<main class="page-content" id="pageContent">

		<!-- ===================== هيرو الصفحة الرئيسية ===================== -->
		<?php get_template_part( 'template-parts/sections/hero' ); ?>

		<!-- ===================== سيكشن: خدماتنا ===================== -->
		<?php get_template_part( 'template-parts/sections/services' ); ?>

		<!-- ===================== سيكشن: استشارات التسويق (consult) ===================== -->
		<?php get_template_part( 'template-parts/sections/consult' ); ?>

		<!-- ===================== سيكشن: القطاعات ===================== -->
		<?php get_template_part( 'template-parts/sections/sectors' ); ?>

		<!-- ===================== سيكشن: ابدأ رحلتك (CTA2) ===================== -->
		<?php get_template_part( 'template-parts/sections/cta2' ); ?>

		<!-- ===================== سيكشن: معرض الأعمال ===================== -->
		<?php get_template_part( 'template-parts/sections/portfolio' ); ?>

		<!-- ===================== سيكشن: باقات مرنة ===================== -->
		<?php get_template_part( 'template-parts/sections/pricing' ); ?>

		<!-- ===================== سيكشن: طريقتنا في الشغل (how) ===================== -->
		<?php get_template_part( 'template-parts/sections/how' ); ?>

		<!-- ===================== سيكشن: عملاء وثقوا فينا ===================== -->
		<?php get_template_part( 'template-parts/sections/clients' ); ?>

		<!-- ===================== سيكشن: ماذا يقول عملاؤنا ===================== -->
		<?php get_template_part( 'template-parts/sections/testimonials' ); ?>

		<!-- ===================== سيكشن: مستعد تبدأ رحلتك الرقمية ===================== -->
		<?php get_template_part( 'template-parts/sections/cta-final' ); ?>

		<!-- ===================== سيكشن: الأسئلة الشائعة ===================== -->
		<?php get_template_part( 'template-parts/sections/faq' ); ?>

		<!-- ===================== سيكشن: آخر أخبارنا ===================== -->
		<?php get_template_part( 'template-parts/sections/blog' ); ?>

	</main>

<?php
get_footer();
