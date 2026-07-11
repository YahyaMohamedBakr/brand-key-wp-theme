<?php
/**
 * Template Name: صفحة من نحن (About)
 *
 * @package BrandKey
 */

get_header();
?>

<main class="page-content" id="pageContent">
	<?php
	// TODO: Convert about.html sections to WP template parts
	while ( have_posts() ) :
		the_post();
		?>
		<div class="entry-content">
			<?php the_content(); ?>
		</div>
		<?php
	endwhile;
	?>
</main>

<?php
get_footer();
