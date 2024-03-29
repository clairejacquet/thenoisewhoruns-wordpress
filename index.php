<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Simple Persona
 */

get_header();
?>

<!-- ALL THE BLOG POSTS ARE DISPLAYED HERE -->
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="archive-post-wrapper section">
			<?php if ( have_posts() ) :
				$simple_persona_title     = get_theme_mod( 'simple_persona_recent_posts_heading', esc_html__( 'News', 'simple-persona' ) );
				$sub_title = get_theme_mod( 'simple_persona_recent_posts_subheading', esc_html__( 'From The Blog', 'simple-persona' ) );

				if ( $simple_persona_title || $sub_title ) : ?>
				<div class="section-heading-wrap">
					<?php if ( $simple_persona_title ) : ?>
							<h2 class="section-title"><?php echo esc_html( $simple_persona_title ); ?></h2>
					<?php endif; ?>

					<?php if (  $sub_title ) : ?>
						<p class="section-subtitle">
							<!-- <?php //echo wp_kses_post( $sub_title ); ?> -->
						</p>
					<?php endif; ?>
				</div><!-- .section-heading-wrap -->
				<?php endif; ?>

				<div class="section-content-wrap">
					<div id="infinite-post-wrap" class="archive-post-wrap">
						<?php
						/* Start the Loop */
						while ( have_posts() ) : the_post();

							/*
							 * Include the Post-Format-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
							 */
							get_template_part( 'template-parts/content/content', get_post_format() );

						endwhile;

						simple_persona_content_nav();

						?>
					</div><!-- .archive-post-wrap -->
				</div><!-- .section-content-wrap -->

				<?php
				else :

					get_template_part( 'template-parts/content/content', 'none' );

				endif; ?>
			</div><!-- .archive-post-wrapper -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer();
