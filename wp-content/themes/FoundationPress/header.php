<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" type="text/css" href="/BridgeCommunications/wp-content/themes/FoundationPress/assets/javascript/slick/slick.css"/>
		<link rel="stylesheet" type="text/css" href="/BridgeCommunications/wp-content/themes/FoundationPress/assets/javascript/slick/slick-theme.css"/>
		<link rel="stylesheet" type="text/css" href="/BridgeCommunications/wp-content/themes/FoundationPress/assets/javascript/fullPage/jquery.fullPage.css"/>

		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	<?php do_action( 'foundationpress_after_body' ); ?>
	<div id="wptime-plugin-preloader"></div>

	<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
	<div class="off-canvas-wrapper">
		<div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
		<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
	<?php endif; ?>

	<?php do_action( 'foundationpress_layout_start' ); ?>

	<header id="masthead" class="site-header" role="banner" style="position: fixed; z-index: 5; width: 100%; background: white; padding: 25px;">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" style="float: left;"><img src="http://198.58.102.147/BridgeCommunications/wp-content/uploads/2017/03/LOGO.png" alt="" width="150px"></a>
		<nav id="site-navigation" class="main-navigation" role="navigation" style="float: right;">
			<div class="top-bar-left">
				<ul id="#menu" class="menu" style="text-transform: uppercase;">
					<li><a href="#mission-purpose" rel="home">Mission &amp; Purpose</a></li>
					<li><a href="#app-contents" rel="home">App Contents</a></li>
					<li><a href="#features-services" rel="home">Features &amp; Services</a></li>
					<li><a href="#testimonials" rel="home">Testimonials</a></li>
					<li><a href="#stay-connected" rel="home">Newsletter Sign-Up</a></li>
					<li><a href="https://itunes.apple.com/us/app/BRIDGE-communication/id983660714?ls=1&mt=8" rel="home"><img src="http://198.58.102.147/BridgeCommunications/wp-content/uploads/2017/03/app-store.png" alt="" width="150px"></a></li>
				</ul>
			</div>
		</nav>
	</header>

	<?php do_action( 'foundationpress_after_header' ); ?>
