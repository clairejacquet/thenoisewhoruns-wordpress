<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Simple Persona
 */
get_header(); ?>

<!-- Single pqge for Blog Post -->


	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="singular-content-wrap">
				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content/content', 'single' );

					// the_post_navigation();

					the_post_navigation( array(
                        'prev_text' => '<span class="post-title">' . ' %title' .'</span>' . '<svg class="icon icon-angle-down"><use xlink:href="#icon-angle-down"></use></svg>' .'<span class="meta-nav">' . 'Prev post' .'</span>',
                        'next_text' => '<span class="post-title">' . ' %title' .'</span>'  .'<span class="meta-nav">' . 'Next  post' .'</span>' . '<svg class="icon icon-angle-down"><use xlink:href="#icon-angle-down"></use></svg>',
                    ) );


					get_template_part( 'template-parts/content/content', 'comment' );

				endwhile; // End of the loop.
				?>
			</div><!-- .singular-content-wrap -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
