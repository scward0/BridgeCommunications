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
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
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
	<div class="gradient"></div>
	<header id="masthead" class="site-header" role="banner" style="position: fixed; z-index: 5; width: 100%; background: white; padding: 25px;">
		<div id="hamburger" class="show-for-small-only">
			<div id="nav-icon3">
				<span></span>
				<span></span>
				<span></span>
				<span></span>
			</div>
		</div>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" style="float: left; margin-top: 10px;"><img src="/BridgeCommunications/wp-content/uploads/2017/03/LOGO.png" alt="" width="200px"></a>
		<nav id="site-navigation" class="main-navigation" role="navigation" style="float: right;">
			<div class="top-bar-left">
				<ul id="#menu" class="menu" style="text-transform: uppercase; font-size: 14px;">
					<li><a class="text-center" id="top-nav-mission" href="#mission-purpose" rel="home">Mission &amp; Purpose</a></li>
					<li><a class="text-center" id="top-nav-features" href="#features-services" rel="home">Features &amp; Services</a></li>
					<li><a class="text-center" id="top-nav-app" href="#app-contents" rel="home">App Contents</a></li>
					<li><a class="text-center" id="top-nav-testimonials" href="#testimonials" rel="home">Testimonials</a></li>
					<li><a class="text-center" id="top-nav-stay" href="#stay-connected" rel="home">Newsletter Sign-Up</a></li>
					<li><a class="text-center" target="_blank"  href="https://itunes.apple.com/us/app/BRIDGE-communication/id983660714?ls=1&mt=8" rel="home"><img src="/BridgeCommunications/wp-content/uploads/2017/03/app-store.png" alt="" width="110px" style="margin-bottom: 5px; margin-top:10px;"><br><span style="font-size: 13px;">Only $17.99</span></a></li>
				</ul>
			</div>
		</nav>
	</header>

	<div class="mobile-nav hide animated">
		<ul class="vertical menu">
			<li><a class="text-center" target="_blank"  href="https://itunes.apple.com/us/app/BRIDGE-communication/id983660714?ls=1&mt=8" rel="home"><img src="/BridgeCommunications/wp-content/uploads/2017/03/app-store.png" alt="" width="110px" style="margin-bottom: 5px; margin-top:10px;"><br><span style="font-size: 13px;">Only $17.99</span></a></li>
			<li><a class="text-center"  href="#mission-purpose" rel="home">Mission &amp; Purpose</a></li>
			<li><a class="text-center"  href="#features-services" rel="home">Features &amp; Services</a></li>
			<li><a class="text-center"	href="#app-contents" rel="home">App Contents</a></li>
			<li><a class="text-center"  href="#testimonials" rel="home">Testimonials</a></li>
			<li><a class="text-center" 	href="#stay-connected" rel="home">Newsletter Sign-Up</a></li>
		</ul>
	</div>


	<div class="social-nav hide-for-small-only" style="position: fixed; left: 0; top: 30%; z-index: 1000; padding: 0;">
		<ul class="menu vertical" style="width: 70px; background: black; padding: 0;">
			<li><a href="#" style="padding: 10px 0;"><span data-tooltip aria-haspopup="true" class="has-tip right" data-disable-hover="false" tabindex="3" title="FACEBOOK" style="border-bottom: none;"><img src="/BridgeCommunications/wp-content/uploads/2017/03/facebook.png" style="z-index: 10000; width: 70px;"></span></a></li>
			<li><a href="#" style="padding: 10px 0;"><span data-tooltip aria-haspopup="true" class="has-tip right" data-disable-hover="false" tabindex="3" title="STELLAR" style="border-bottom: none;"><img src="/BridgeCommunications/wp-content/uploads/2017/03/stellar.png" style="z-index: 10000; width: 70px;"></span></a></li>
			<li><a href="#" style="padding: 10px 0;"><span data-tooltip aria-haspopup="true" class="has-tip right" data-disable-hover="false" tabindex="3" title="YOUTUBE" style="border-bottom: none;"><img src="/BridgeCommunications/wp-content/uploads/2017/03/youtube.png" style="z-index: 10000; width: 70px;"></span></a></li>
		</ul>
	</div>

	<?php do_action( 'foundationpress_after_header' ); ?>
