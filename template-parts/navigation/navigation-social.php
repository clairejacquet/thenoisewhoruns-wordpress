<?php  if ( has_nav_menu( 'social-menu' ) ) :  ?>
	<nav class="social-navigation" role="navigation" aria-label="<?php  esc_attr_e( 'Social Menu', 'simple-persona' ); ?>">
		<?php
			 wp_nav_menu( array(
			 	'theme_location' 	=> 'social-menu',
			 	'menu_class'     	=> 'social-links-menu',
			 	'container'			=> 'div',
			 	'container_class'	=> 'menu-social-container',
			 	'depth'          	=> 1,
			 	'link_before'    	=> '<span class="screen-reader-text">',
			 	'link_after'     	=> '</span>' . simple_persona_get_svg( array( 'icon' => 'chain' ) ),
			 ) );
		?>
	 </nav><!-- .social-navigation -->

<nav id="site-navigation" class="main-navigation custom-primary-menu" role="navigation" aria-label="<?php  // esc_attr_e( 'Primary Menu', 'simple-persona' ); ?>">
		<?php
			//  wp_nav_menu( array(
			//  	'theme_location' => 'menu-1',
			//  	'menu_class'     => 'primary-menu',
			// ) );
		?>
	</nav><!-- .main-navigation -->

<?php  endif; ?>
