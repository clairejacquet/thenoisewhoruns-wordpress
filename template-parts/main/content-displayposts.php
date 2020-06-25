<section class="container">
	<div class="row">

		<h2 class="col-12 about__title about__title--text">News</h2>


		<div class="col d-flex overflow-auto display_posts display_posts--scrollbar" style="overflow-x: scroll; " >

			<!-- // Define our WP Query Parameters -->
			<?php	$the_query = new WP_Query( 'posts_per_page=5' ); ?>

			<!-- // Start our WP Query -->
			<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

				<div class="col-10 col-md-5 col-lg-3 d-flex flex-column align-items-center display_post--card ">


					<div class="display_post--img d-flex align-items-center">
						<?php	 	the_post_thumbnail('post-thumbnail'); 	?>
					</div>

					<div class="display_post--text display_post--clamp">
						<!-- // Display the Post Title with Hyperlink -->
						<a class="display_post--title archive-post-wrap entry-title" href="<?php the_permalink() ?>"><?php the_title(); ?></a>
						<!-- // Display the Post Excerpt -->
						<!-- <p class="entry-content display_post--clamp"> -->
							<?php the_excerpt(__('(more…)')); ?>
						<!-- </p> -->

						<a class="more-button" href="<?php the_permalink() ?>">read more</a>
					</div>

				</div>

				<?php
				// Repeat the process and reset once it hits the limit
			endwhile;
			wp_reset_postdata();
			?>
		</div>
	</div>
</section>
