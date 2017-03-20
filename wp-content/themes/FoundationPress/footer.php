<!-- <section style="background: #404547;" class="text-center">
	<div class="row">
		<div class="columns small-12 text-center">
			<img src="http://198.58.102.147/BridgeCommunications/wp-content/uploads/2017/03/LOGO.png" alt="" width="150px" style="margin: 50px 0;">
			<p style="color: white;">
				Contact us<br>
				support@bridgecommunication.com<br><br>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
			</p>
		</div>
	</div>
</section> -->

<section>
	<img src="http://198.58.102.147/BridgeCommunications/wp-content/uploads/2017/03/footer_example.png" width="100%" alt="">
</section>


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
  			autoplaySpeed: 4000,
				arrows: true
			});

			// $( "" ).mouseover(function() {
  		// 	$( this ).addClass('hovered');
			// });
			//
			// $( ".top-nav-a" ).mouseout(function() {
			// 	$( this ).removeClass('hovered');
			// });

		});
</script>
<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
</body>
</html>
