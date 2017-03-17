




<script type="text/javascript" src="/BridgeCommunications/wp-content/themes/FoundationPress/assets/javascript/slick/slick.min.js"></script>
<script type="text/javascript" src="/BridgeCommunications/wp-content/themes/FoundationPress/assets/javascript/fullPage/jquery.fullPage.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('.ipad-slick').slick({
			dots: false,
	    infinite: true,
	    speed: 500,
	    cssEase: 'linear',
	    arrows: false,
	    autoplay: true,
	    autoplaySpeed: 4000,
	  	});
			$('.testimonials-slick').slick({
				autoplay: true,
  			autoplaySpeed: 2000
			});
		});
</script>
<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
</body>
</html>
 
