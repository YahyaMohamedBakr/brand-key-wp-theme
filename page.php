<?php
/**
 * The template for displaying all pages
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
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="entry-content">
				<?php
				the_content();

				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'الصفحات:', 'brandkey' ),
					'after'  => '</div>',
				) );
				?>
			</div>
		</article>
		<?php
	endwhile;
	?>

</main>

<?php
get_footer();
