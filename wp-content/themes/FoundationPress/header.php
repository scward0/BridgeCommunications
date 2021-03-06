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
		<meta name="google-site-verification" content="Dpncy58I5xWdySraPNlm8ETW9e4O3rfQg8EUbkjjXr0" />
		<link rel="stylesheet" type="text/css" href="/wp-content/themes/FoundationPress/assets/javascript/slick/slick.css"/>
		<link rel="stylesheet" type="text/css" href="/wp-content/themes/FoundationPress/assets/javascript/slick/slick-theme.css"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-97478142-1', 'auto');
		  ga('send', 'pageview');

		</script>
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
		<div id="hamburger" class="hide-for-large">
			<div id="nav-icon3">
				<span></span>
				<span></span>
				<span></span>
				<span></span>
			</div>
		</div>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" style="float: left; margin-top: 10px;"><img src="/wp-content/uploads/2017/03/LOGO.png" alt="" width="200px"></a>
		<nav id="site-navigation" class="main-navigation show-for-large" role="navigation" style="float: right">
			<div class="top-bar-left">
				<ul id="#menu" class="menu" style="text-transform: uppercase; font-size: 14px; font-weight: 600;">
					<li><a class="text-center" id="top-nav-mission" href="#mission-purpose" rel="home">Mission &amp; Purpose</a></li>
					<li><a class="text-center" id="top-nav-features" href="#features-services" rel="home">Features &amp; Services</a></li>
					<li><a class="text-center" id="top-nav-app" href="#app-contents" rel="home">App Contents</a></li>
					<li><a class="text-center" id="top-nav-testimonials" href="#testimonials" rel="home">Testimonials</a></li>
					<li><a class="text-center" id="top-nav-stay" href="#stay-connected" rel="home">Newsletter Sign-Up</a></li>
					<li><a class="text-center" target="_blank"  href="https://itunes.apple.com/us/app/BRIDGE-communication/id983660714?ls=1&mt=8" rel="home"><img src="/wp-content/uploads/2017/03/app-store.png" alt="" width="110px" style="margin-bottom: 5px; margin-top:10px;"><br><span style="font-size: 13px;">Only $17.99</span></a></li>
				</ul>
			</div>
		</nav>
	</header>

	<div class="mobile-nav hide animated">
		<ul class="vertical menu">
			<li><a class="text-center"  class="mobile-anchor" href="/#mission-purpose" rel="home">Mission &amp; Purpose</a></li>
			<li><a class="text-center"  class="mobile-anchor"href="/#features-services" rel="home">Features &amp; Services</a></li>
			<li><a class="text-center"	class="mobile-anchor"href="/#app-contents" rel="home">App Contents</a></li>
			<li><a class="text-center"  class="mobile-anchor"href="/#testimonials" rel="home">Testimonials</a></li>
			<li><a class="text-center" 	class="mobile-anchor"href="/#stay-connected" rel="home">Newsletter Sign-Up</a></li>
			<li><a class="text-center" class="mobile-anchor" target="_blank"  href="https://itunes.apple.com/us/app/BRIDGE-communication/id983660714?ls=1&mt=8" rel="home"><img src="/wp-content/uploads/2017/03/app-store.png" alt="" width="200px" style="margin-bottom: 5px; margin-top:10px;"><br><span style="font-size: 13px;">Only $17.99</span></a></li>
		</ul>
		<div class="menu-centered">
			<ul class="menu">
				<li><a target="_blank" href="https://www.facebook.com/BRIDGE-Communication-Application-464631923700943/"><img src="/wp-content/uploads/2017/04/facebook_1-1.png" class="style-svg style-svg-2" style="z-index: 10000;"></a></li>
				<li><a target="_blank" href="https://steller.co/search?q=bridgethegap&type=stories&order_by=top"><img src="/wp-content/uploads/2017/04/steller_1-1.png" class="style-svg style-svg-2" style="z-index: 10000;"></a></li>
				<li><a target="_blank" href="https://www.youtube.com/channel/UCVIr5fmx0b2WTA1yluY-MkQ"><img src="/wp-content/uploads/2017/04/YouTube_1-1.png" class="style-svg style-svg-2" style="z-index: 10000;"></a></li>
			</ul>
		</div>
	</div>


	<div class="social-nav show-for-large" style="position: fixed; left: 0; top: 30%; z-index: 1000; padding: 0;">
		<ul class="menu vertical" style="background: black; padding: 10px;">
			<li><a target="_blank" href="https://www.facebook.com/BRIDGE-Communication-Application-464631923700943/" style="padding:0;"><span data-tooltip aria-haspopup="true" class="has-tip right facebook" data-disable-hover="false" tabindex="3" title="FACEBOOK" style="border-bottom: none;"></span></a></li>

			<li><a target="_blank" href="https://steller.co/search?q=bridgethegap&type=stories&order_by=top" style="padding:0;"><span data-tooltip aria-haspopup="true" class="has-tip right steller" data-disable-hover="false" tabindex="3" title="STELLAR" style="border-bottom: none;"></span></a></li>

			<li><a target="_blank" href="https://www.youtube.com/channel/UCVIr5fmx0b2WTA1yluY-MkQ" style="padding:0;"><span data-tooltip aria-haspopup="true" class="has-tip right youtube" data-disable-hover="false" tabindex="3" title="YOUTUBE" style="border-bottom: none;"></span></a></li>
		</ul>
	</div>

	<?php do_action( 'foundationpress_after_header' ); ?>
