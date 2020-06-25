<?php
/**
*  Template Name: CustomPageHome
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
<!-- TO BE USED FOR THE HOME/ FRONT PAGE -->
<?php include 'template-parts/main/content-main.php';?>


<?php get_sidebar(); ?>
<?php get_footer();
