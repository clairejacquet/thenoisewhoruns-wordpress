<?php
/**
 * Displays footer navigation
 *
 */

?>

		<div class="menu-inside-wrapper">

			Mernu test 
			<nav >
				<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_class'     => 'primary-menu',
					) );
				?>
			</nav><!-- .main-navigation -->


		</div><!-- .menu-inside-wrapper -->
