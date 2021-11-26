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

<main id="primary" class="site-main">
	<!-- hero -->
	<div class="heroWrapper">
		<div class="heroContent">
			<div class="heroContent-logo"><img class="svgLogo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/logohero.svg"/></div>
			<h1>Seeding, sporting, blooming !</h1>
			<h2>Turn our luxury travel industry <br/>
				into a leading responsibility and <br/>
				sustainability </h2>
		</div>
	</div>

	<!-- Contact -->
	<div class="wrapperContact">
		<div class="contact">
			<div>
				<p class="contactTitle">Contact us</p>
				<p class="desContact">If you are a Serandipian member or partner check your email.
					Formstack link
					Are you interested to learn more about Pristine Mood ?
					Link to public form
					This is an exclusive launch for Serandipian Members and Partners.
					Click here to find out more about Serandipians.</p>
			</div>
			<div class="contact__form">
				<?php echo do_shortcode( '[contact-form-7 id="5" title="Contact form 1"]' ); ?>
			</div>
		</div>
	</div>

</main><!-- #main -->

<?php
get_footer();
