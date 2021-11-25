<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?>
<footer id="colophon" class="wrapperFooter">
	<?php get_template_part('template-parts/footer/footer', 'widgets'); ?>
	<div class="bigWrapperFlex">
		<div class="footerWrapperName">
			<p class="nameSectionOne">Pristine</p>
			<p class="nameSectionTwo">mood</p>
			<p class="nameSubTitle">seeding, sprouting, blooming !</p>
		</div>
		<div class="footerNewslater">
			<p class="titleNewslater">Newsletter</p>
			<div class="wrapperNewsInput">
				<input class="imputNews" placeholder="Votre adresse mail" type="text">
				<button class="btnNews"></button>
			</div>
		</div>
	</div>
	<div class="bigWrapperFlex">
		<div class="wrapperSectionContactNetwork">
			<div class="wrapperContact">
				<p class="titleContactSection">Contact</p>
				<p class="contactNumber">06.00.00.00.00</p>
				<p class="contactMail">adresse@mail.contact</p>
			</div>
			<div class="wrapperNetwork">
				<p class="titleNetworkSection">Réseaux sociaux</p>
				<div class="wrapperNetworkIcon">
					<a href="#" class="networkIcon"><i class="fab fa-facebook-f"></i></a>
					<a href="#" class="networkIcon"><i class="fab fa-twitter"></i></a>
					<a href="#" class="networkIcon"><i class="fab fa-instagram"></i></a>
				</div>
			</div>
		</div>
		<div class="wrapperInformation">
			<ul>
				<li><a href="#">Lorem Ipsum</a></li>
				<li><a href="#">Lorem Ipsum</a></li>
				<li><a href="#">Lorem Ipsum</a></li>
				<li><a href="#">Lorem Ipsum</a></li>
				<li><a href="#">Lorem Ipsum</a></li>
				<li><a href="#">Lorem Ipsum</a></li>
			</ul>
		</div>
		<div class="wrapperInformation">
			<ul>
				<li><a href="#">Lorem Ipsum</a></li>
				<li><a href="#">Lorem Ipsum</a></li>
				<li><a href="#">Lorem Ipsum</a></li>
				<li><a href="#">Lorem Ipsum</a></li>
				<li><a href="#">Lorem Ipsum</a></li>
				<li><a href="#">Lorem Ipsum</a></li>
			</ul>
		</div>
		<div class="wrapperInformation">
			<ul>
				<li><a href="#">Lorem Ipsum</a></li>
				<li><a href="#">Lorem Ipsum</a></li>
				<li><a href="#">Lorem Ipsum</a></li>
				<li><a href="#">Lorem Ipsum</a></li>
				<li><a href="#">Lorem Ipsum</a></li>
				<li><a href="#">Lorem Ipsum</a></li>
			</ul>
		</div>
		<div class="wrapperInformation">
			<ul>
				<li><a href="#">Lorem Ipsum</a></li>
				<li><a href="#">Lorem Ipsum</a></li>
				<li><a href="#">Lorem Ipsum</a></li>
				<li><a href="#">Lorem Ipsum</a></li>
				<li><a href="#">Lorem Ipsum</a></li>
				<li><a href="#">Lorem Ipsum</a></li>
			</ul>
		</div>
	</div>
	<div class="wrapperLastLine">
		<div class="wrapperCopyright">
			<p class="copyright">© 2022, Pristine Mood by Serandipians </p>
		</div>
		<div class="wrapperPolitique">
			<a href="" class="politique">Politique de confidentialité</a>
			<a href="" class="mention">Mention légal</a>
		</div>
	</div>
	<!-- .site-info -->
</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>