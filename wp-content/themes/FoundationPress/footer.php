<section id="footer" style="background: #404547;" class="text-center">
	<div class="row">
		<div class="columns small-12 text-center">
			<img src="/BridgeCommunications/wp-content/uploads/2017/03/logo-foot.png" alt="" width="150px" style="margin: 50px 0;">
			<p style="color: white;">
				Contact us<br>
				support@bridgecommunication.com<br><br>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
			</p>
		</div>
	</div>
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
  			autoplaySpeed: 6000,
				arrows: true
			});
			$('.features-slick').slick({
				autoplay: false,
				arrows: true
			});
			$('#nav-icon3').click(function(){

			if ($(this).hasClass('open') ) {
				$(this).removeClass('open');
				$('.mobile-nav').removeClass('fadeIn');
				$('.mobile-nav').addClass('hide fadeOut');
			}else{
					$(this).addClass('open');
					$('.mobile-nav').removeClass('hide fadeOut');
					$('.mobile-nav').addClass('fadeIn');
				}
			});


			var shape7Bottom = 0;

			$(window).scroll(function(){
				if($(window).scrollTop() + $(window).height() == $(document).height()) {
					console.log('down');
				} else{
					console.log('up');
				}
        // shape7Bottom++;
				// console.log(shape7Bottom);
    	});





		});
</script>
<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
</body>
</html>
