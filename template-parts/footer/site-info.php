<?php
/**
* The template used for displaying credits
*
* @package Simple Persona
*/
?>

<div class="site-info">

    <!-- <nav class="footer__nav">
        <a class="footer__nav--link" href="./blog/">Blog</a> -
        <a class="footer__nav--link" href="#">Legal</a> -
        <a class="footer__nav--link" href="#">Cookies</a>
    </nav> -->
    <?php
    $theme_data = wp_get_theme();

    // $footer_text = sprintf( _x( 'Copyright &copy; %1$s %2$s. All Rights Reserved. %3$s', '1: Year, 2: Site Title with home URL, 3: Privacy Policy Link', 'simple-persona' ), esc_attr( date_i18n( __( 'Y', 'simple-persona' ) ) ), '<a href="'. esc_url( home_url( '/' ) ) .'">'. esc_attr( get_bloginfo( 'name', 'display' ) ) . '</a>', get_the_privacy_policy_link() ) . ' &#124; ' . esc_html( $theme_data->get( 'Name') ) . '&nbsp;' . esc_html__( 'by', 'simple-persona' ). '&nbsp;<a target="_blank" href="'. esc_url( $theme_data->get( 'AuthorURI' ) ) .'">'. esc_html( $theme_data->get( 'Author' ) ) .'</a>';

    // $footer_text = sprintf( _x( 'Copyright &copy; %1$s %2$s. All Rights Reserved. %3$s', '1: Year, 2: Site Title with home URL, 3: Privacy Policy Link', 'simple-persona' ), esc_attr( date_i18n( __( 'Y', 'simple-persona' ) ) ), '<a href="'. esc_url( home_url( '/' ) ) .'">'. esc_attr( get_bloginfo( 'name', 'display' ) ) . '</a>', get_the_privacy_policy_link() ) . ' &#124; ' . esc_html( $theme_data->get( 'Name') ) . '&nbsp;' . esc_html__( 'by', 'simple-persona' ). '&nbsp;<a target="_blank" href="'. esc_url( $theme_data->get( 'AuthorURI' ) ) .'">'. esc_html( $theme_data->get( 'Author' ) ) .'</a>';

    // echo $footer_text; // WPCS: XSS OK.
    ?>

    <!-- <div id="footer" class="footer row d-flex align-items-center justify-content-around">

      <div class="col">
        <a class="footer__link--brand" href="/">
          <h2 class="footer__title"> TNWR </h2>
        </a>
      </div> -->

      <nav id="site-navigation" class="footer__nav--link" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'simple-persona' ); ?>">
        <?php
          wp_nav_menu( array(
            'theme_location' => 'menu-1',
            'menu_class'     => 'primary-menu',
          ) );
        ?>
      </nav><!-- .main-navigation -->

    </div>
</div><!-- .site-info -->
