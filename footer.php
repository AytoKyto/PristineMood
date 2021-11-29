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
	<?php get_template_part( 'template-parts/footer/footer', 'widgets' ); ?>
	<div class="bigWrapperFlex">
		<div class="footerWrapperName">
			<img class="svgLogo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/logofooter.svg"/>
		</div>
		<div class="FooterNewsletterWrapper">
			<p class="titleNewslater">SUBSCRIBE TO PRISTINE MOOD COMMUNICATIONS</p>
			<?php echo do_shortcode( '[contact-form-7 id="6" title="Newsletter"]' ); ?>
		</div>

	</div>
	<div class="bigWrapperFlex">
		<div class="wrapperSectionContactNetwork">
			<div class="wrapperContact">
				<p class="titleContactSection">CONTACT US</p>
				<p class="contactMail"><a href="mailto:explorer@pristinemood.com">explorer@pristinemood.com<a></p>
			</div>
			<div class="wrapperNetwork">
				<div class="wrapperNetworkIcon">
					<a href="#" class="networkIcon"><svg xmlns="http://www.w3.org/2000/svg" width="58" height="58" viewBox="0 0 98 98">
							<g id="Groupe_1931" data-name="Groupe 1931" transform="translate(-1666 -19)">
								<g id="Ellipse_27" data-name="Ellipse 27" transform="translate(1666 19)" fill="none" stroke="#b18a48" stroke-width="1" opacity="0.35">
									<circle cx="49" cy="49" r="49" stroke="none" />
									<circle class="hoverSvg" cx="49" cy="49" r="48.5" fill="none" />
								</g>
								<path id="Icon_awesome-facebook-f" data-name="Icon awesome-facebook-f" d="M10.618,10.125l.5-3.258H7.992V4.753a1.629,1.629,0,0,1,1.837-1.76H11.25V.22A17.329,17.329,0,0,0,8.728,0C6.153,0,4.471,1.56,4.471,4.385V6.867H1.609v3.258H4.471V18H7.992V10.125Z" transform="translate(1708.391 59)" fill="#fff" />
							</g>
						</svg>
					</a>
					<a href="#" class="networkIcon"><svg xmlns="http://www.w3.org/2000/svg" width="58" height="58" viewBox="0 0 98 98">
							<g id="Groupe_1935" data-name="Groupe 1935" transform="translate(-1666 -19)">
								<g id="Ellipse_27" data-name="Ellipse 27" transform="translate(1666 19)" fill="none" stroke="#b18a48" stroke-width="1" opacity="0.35">
									<circle cx="49" cy="49" r="49" stroke="none" />
									<circle class="hoverSvg" cx="49" cy="49" r="48.5" fill="none" />
								</g>
								<g id="Groupe_1934" data-name="Groupe 1934" transform="translate(-67.486 32.729)">
									<rect id="Rectangle_78" data-name="Rectangle 78" width="3.64" height="11.19" transform="translate(1775.059 32.081)" fill="#fff" />
									<path id="Tracé_61" data-name ="Tracé 61" d="M168.468,160.131c-.039-.012-.075-.025-.116-.037s-.1-.02-.148-.028a3.261,3.261,0,0,0-.653-.066,5.057,5.057,0,0,0-3.911,2.139V160H160v11.19h3.64v-6.1s2.751-3.831,3.911-1.017v7.121h3.639v-7.551A3.629,3.629,0,0,0,168.468,160.131Z" transform="translate(1619.951 -127.919)" fill="#fff" />
									<ellipse id="Ellipse_14" data-name="Ellipse 14" cx="1.986" cy="1.986" rx="1.986" ry="1.986" transform="translate(1774.486 27.271)" fill="#fff" />
								</g>
							</g>
						</svg>
						</i></a>
					<a href="#" class="networkIcon"><svg xmlns="http://www.w3.org/2000/svg" width="58" height="58" viewBox="0 0 98 98">
							<g id="Groupe_1936" data-name="Groupe 1936" transform="translate(-1666 -19)">
								<g id="Ellipse_27" data-name="Ellipse 27" transform="translate(1666 19)" fill="none" stroke="#b18a48" stroke-width="1" opacity="0.35">
									<circle cx="49" cy="49" r="49" stroke="none" />
									<circle class="hoverSvg" cx="49" cy="49" r="48.5" fill="none" />
								</g>
								<path id="Icon_awesome-instagram" data-name="Icon awesome-instagram" d="M9,6.623a4.615,4.615,0,1,0,4.615,4.615A4.608,4.608,0,0,0,9,6.623Zm0,7.615a3,3,0,1,1,3-3A3.006,3.006,0,0,1,9,14.238Zm5.88-7.8A1.076,1.076,0,1,1,13.8,5.358,1.074,1.074,0,0,1,14.879,6.434Zm3.057,1.092a5.327,5.327,0,0,0-1.454-3.772A5.362,5.362,0,0,0,12.71,2.3c-1.486-.084-5.94-.084-7.427,0a5.354,5.354,0,0,0-3.772,1.45A5.344,5.344,0,0,0,.058,7.522c-.084,1.486-.084,5.94,0,7.427A5.327,5.327,0,0,0,1.512,18.72a5.369,5.369,0,0,0,3.772,1.454c1.486.084,5.94.084,7.427,0a5.327,5.327,0,0,0,3.772-1.454,5.362,5.362,0,0,0,1.454-3.772c.084-1.486.084-5.936,0-7.423Zm-1.92,9.017A3.038,3.038,0,0,1,14.3,18.255c-1.185.47-4,.361-5.306.361s-4.125.1-5.306-.361a3.038,3.038,0,0,1-1.711-1.711c-.47-1.185-.361-4-.361-5.306s-.1-4.125.361-5.306A3.038,3.038,0,0,1,3.693,4.221c1.185-.47,4-.361,5.306-.361s4.125-.1,5.306.361a3.038,3.038,0,0,1,1.711,1.711c.47,1.185.361,4,.361,5.306S16.486,15.363,16.016,16.544Z" transform="translate(1706.005 56.763)" fill="#fff" />
							</g>
						</svg>
					</a>
				</div>
			</div>
		</div>
		<div class="footerNewslater">
			
			<div class="anchorWrapper">
				<div class="menuAnchor">
					<ul>
						<li><strong>MENU</strong></li>
						<li><a class="anchor" href="pristime-mood">PRISITINE MOOD</a></li>
						<li><a class="anchor" href="goal">OUR GOALS</a></li>
						<li><a class="anchor" href="collectively">COLLECTIVELY</a></li>
						<li><a class="anchor" href="canopy">SUSTAINABILITY CANOPY</a></li>
					</ul>
				</div>
				<div class="logoTraveller">
					<img class="svgLogo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/logo-tm.svg"/>
				</div>
			</div>
		</div>
	</div>
	<div class="wrapperLastLine">
		<div class="wrapperCopyright">
			<p class="copyright">© 2022, Pristine Mood by TRAVELER MADE </p>
		</div>
		<div class="wrapperCopyright">
			<p class="copyright">Création : agence LA NAGEUSE </p>
		</div>
		<div class="wrapperLegend">
			* CSR : Corporate Social Responsibility
		</div>
		<div class="wrapperPolitique">
			<a href="" class="politique">Privacy Policy</a>
			<a href="" class="mention">Terms & Condition</a>
		</div>
	</div>
	<!-- .site-info -->
</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>
