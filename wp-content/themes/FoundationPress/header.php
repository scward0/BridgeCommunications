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
		<div id="hamburger" class="hide-for-large">
			<div id="nav-icon3">
				<span></span>
				<span></span>
				<span></span>
				<span></span>
			</div>
		</div>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" style="float: left; margin-top: 10px;"><img src="/BridgeCommunications/wp-content/uploads/2017/03/LOGO.png" alt="" width="200px"></a>
		<nav id="site-navigation" class="main-navigation show-for-large" role="navigation" style="float: right">
			<div class="top-bar-left">
				<ul id="#menu" class="menu" style="text-transform: uppercase; font-size: 14px; font-weight: 600;">
					<li><a class="text-center" id="top-nav-mission" href="/BridgeCommunications/#mission-purpose" rel="home">Mission &amp; Purpose</a></li>
					<li><a class="text-center" id="top-nav-features" href="/BridgeCommunications/#features-services" rel="home">Features &amp; Services</a></li>
					<li><a class="text-center" id="top-nav-app" href="/BridgeCommunications/#app-contents" rel="home">App Contents</a></li>
					<li><a class="text-center" id="top-nav-testimonials" href="/BridgeCommunications/#testimonials" rel="home">Testimonials</a></li>
					<li><a class="text-center" id="top-nav-stay" href="/BridgeCommunications/#stay-connected" rel="home">Newsletter Sign-Up</a></li>
					<li><a class="text-center" target="_blank"  href="https://itunes.apple.com/us/app/BRIDGE-communication/id983660714?ls=1&mt=8" rel="home"><img src="/BridgeCommunications/wp-content/uploads/2017/03/app-store.png" alt="" width="110px" style="margin-bottom: 5px; margin-top:10px;"><br><span style="font-size: 13px;">Only $17.99</span></a></li>
				</ul>
			</div>
		</nav>
	</header>

	<div class="mobile-nav hide animated">
		<ul class="vertical menu">
			<li><a class="text-center"  class="mobile-anchor" href="/BridgeCommunications/#mission-purpose" rel="home">Mission &amp; Purpose</a></li>
			<li><a class="text-center"  class="mobile-anchor"href="/BridgeCommunications/#features-services" rel="home">Features &amp; Services</a></li>
			<li><a class="text-center"	class="mobile-anchor"href="/BridgeCommunications/#app-contents" rel="home">App Contents</a></li>
			<li><a class="text-center"  class="mobile-anchor"href="/BridgeCommunications/#testimonials" rel="home">Testimonials</a></li>
			<li><a class="text-center" 	class="mobile-anchor"href="/BridgeCommunications/#stay-connected" rel="home">Newsletter Sign-Up</a></li>
			<li><a class="text-center" class="mobile-anchor" target="_blank"  href="https://itunes.apple.com/us/app/BRIDGE-communication/id983660714?ls=1&mt=8" rel="home"><img src="/BridgeCommunications/wp-content/uploads/2017/03/app-store.png" alt="" width="200px" style="margin-bottom: 5px; margin-top:10px;"><br><span style="font-size: 13px;">Only $17.99</span></a></li>
		</ul>
		<div class="menu-centered">
			<ul class="menu">
				<li><a target="_blank" href="https://www.facebook.com/BRIDGE-Communication-Application-464631923700943/"><img src="/BridgeCommunications/wp-content/uploads/2017/04/facebook.svg" class="style-svg style-svg-2" style="z-index: 10000;"></a></li>
				<li><a target="_blank" href="https://steller.co/search?q=bridgethegap&type=stories&order_by=top"><img src="/BridgeCommunications/wp-content/uploads/2017/04/stellar2.svg" class="style-svg style-svg-2" style="z-index: 10000;"></a></li>
				<li><a target="_blank" href="https://www.youtube.com/channel/UCVIr5fmx0b2WTA1yluY-MkQ"><img src="/BridgeCommunications/wp-content/uploads/2017/04/youtube.svg" class="style-svg style-svg-2" style="z-index: 10000;"></a></li>
			</ul>
		</div>
	</div>


	<div class="social-nav show-for-large" style="position: fixed; left: 0; top: 30%; z-index: 1000; padding: 0;">
		<ul class="menu vertical" style="width: 50px; background: black; padding: 0;">
			<li><a target="_blank" href="https://www.facebook.com/BRIDGE-Communication-Application-464631923700943/" style="padding:0;"><span data-tooltip aria-haspopup="true" class="has-tip right" data-disable-hover="false" tabindex="3" title="FACEBOOK" style="border-bottom: none;"><img class="style-svg" src="/BridgeCommunications/wp-content/uploads/2017/04/Facebook_1.svg" style="z-index: 10000;" width="25px"></span></a></li>
			<li><a target="_blank" href="https://steller.co/search?q=bridgethegap&type=stories&order_by=top" style="padding:0;"><span data-tooltip aria-haspopup="true" class="has-tip right" data-disable-hover="false" tabindex="3" title="STELLAR" style="border-bottom: none;"><img class="style-svg" src="/BridgeCommunications/wp-content/uploads/2017/04/Steller_1.svg" style="z-index: 10000;" width="25px"></span></a></li>
			<li><a target="_blank" href="https://www.youtube.com/channel/UCVIr5fmx0b2WTA1yluY-MkQ" style="padding:0;"><span data-tooltip aria-haspopup="true" class="has-tip right" data-disable-hover="false" tabindex="3" title="YOUTUBE" style="border-bottom: none;"><img class="style-svg" src="/BridgeCommunications/wp-content/uploads/2017/04/YouTube_1.svg" style="z-index: 10000;" width="25px"></span></a></li>
		</ul>
	</div>

	<?php do_action( 'foundationpress_after_header' ); ?>
