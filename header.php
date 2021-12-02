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
<html <?php language_attributes(); ?> <?php 
if ( is_home() ) :
	?>
	class="loading" <?php endif; ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://use.typekit.net/eov5ijf.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-TQ1CDEWHTW"></script>
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'G-TQ1CDEWHTW');
	</script>
	<?php
	$pageURL = ( @$_SERVER['HTTPS'] == 'on' ) ? 'https://' : 'http://';
	if ( $_SERVER['SERVER_PORT'] != '80' ) {
		$pageURL .= $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . $_SERVER['REQUEST_URI'];
	} else {
		$pageURL .= $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
	}
	?>
</head>

<body <?php body_class(); ?>>
<!-- loader -->
	<?php if ( is_home() ) : ?>
	<div id="preloader">
		<div class="wrap">
			<div id="counter-wrap"><span id="counter"></span></div>
			<div id="line"></div>
		</div>
	</div>
	<?php endif; ?>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', '_s' ); ?></a>
		<header id="masthead" class="siteHeader">
			<!-- #site-navigation -->
			<!-- <nav id="site-navigation" class="nav">
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
			</nav> -->
		</header>
		<!-- #masthead -->
