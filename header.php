<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://use.typekit.net/eov5ijf.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
	<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', '_s'); ?></a>
		<header id="masthead" class="siteHeader">
			<nav id="site-navigation" class="nav">
				<div class="wrapperNav">
					<p class="menuLink">Lorem ipsum</p>
					<p class="menuLink">Lorem ipsum</p>
					<p class="menuLink">Lorem ipsum</p>
					<p class="menuLink">Lorem ipsum</p>
					<p class="menuLink">Lorem ipsum</p>
					<p class="menuLink">Lorem ipsum</p>
					<p class="menuLink">Lorem ipsum</p>
				</div>
				<div onclick="menu()" class="wrapperBtnMenu">
					<div id="open" class="btnMenuBurger">
						<svg xmlns="http://www.w3.org/2000/svg" width="25" height="19" viewBox="0 0 25 19">
							<g id="Groupe_2002" data-name="Groupe 2002" transform="translate(-222 -74)">
								<rect id="Rectangle_1225" data-name="Rectangle 1225" width="25" height="3" transform="translate(222 74)" fill="#fff" />
								<rect id="Rectangle_1226" data-name="Rectangle 1226" width="25" height="3" transform="translate(222 82)" fill="#fff" />
								<rect id="Rectangle_1228" data-name="Rectangle 1228" width="25" height="3" transform="translate(222 90)" fill="#fff" />
							</g>
						</svg>
					</div>
					<div id="close" class="btnMenuCross">
						<svg xmlns="http://www.w3.org/2000/svg" width="28.16" height="20.16" viewBox="0 0 28.16 20.16">
							<g id="Groupe_4978" data-name="Groupe 4978" transform="translate(-1802.42 -99.42)">
								<line id="Ligne_14" data-name="Ligne 14" x2="24" y2="16" transform="translate(1804.5 101.5)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="3" />
								<line id="Ligne_15" data-name="Ligne 15" x1="24" y2="16" transform="translate(1804.5 101.5)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="3" />
							</g>
						</svg>
					</div>
				</div>
			</nav><!-- #site-navigation -->
		</header><!-- #masthead -->