<?php
/**
 * Template Name: صفحة project
 *
 * @package BrandKey
 */

get_header();
?>

<main class="page-content" id="pageContent">
	<?php
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
