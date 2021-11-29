<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _s
 */

get_header();
?>
<!-- cursor -->
<!-- <div class="cursor-outer"></div>
<div class="cursor-inner"></div> -->
<!-- end cursor -->
<main id="primary" class="site-main">
	<!-- hero -->
		<?php get_template_part( 'template-parts/content', 'hero' ); ?>
	<!-- goal -->
		<?php get_template_part( 'template-parts/content', 'goal' ); ?>
	<!-- collectively -->
		<?php get_template_part( 'template-parts/content', 'collectively' ); ?>
	<!-- canopy -->
		<?php get_template_part( 'template-parts/content', 'canopy' ); ?>
	<!-- Contact -->
	<!-- canopy -->
		<?php get_template_part( 'template-parts/content', 'contact' ); ?>
</main><!-- #main -->

<?php
get_footer();
