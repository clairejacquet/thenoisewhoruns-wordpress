<?php
/**
 *  Template Name: CustomPageLyrics2
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Simple Persona
 */

get_header();
?>



	<div id="primary" class="content-area page-template-page-lyrics ">
		<main id="main" class="site-main">
			<div class="singular-content-wrap lyrics_pagetest">
				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content/content', 'page' );

					get_template_part( 'template-parts/content/content', 'comment' );

				endwhile; // End of the loop.
				?>
			</div>	<!-- .singular-content-wrap -->
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_sidebar(); ?>
<?php get_footer();
