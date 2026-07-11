<?php
/**
 * Template part: content-none (no posts found)
 *
 * @package BrandKey
 */
?>
<section class="no-results">
	<div class="container">
		<h2><?php esc_html_e( 'لا توجد نتائج', 'brandkey' ); ?></h2>
		<p><?php esc_html_e( 'عذراً، لم يتم العثور على ما تبحث عنه. حاول البحث بكلمات أخرى.', 'brandkey' ); ?></p>
		<?php get_search_form(); ?>
	</div>
</section>
