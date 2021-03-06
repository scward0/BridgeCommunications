<section id="footer" style="background: #404547;" class="text-center">
	<div class="row">
		<div class="columns small-12 text-center">
			<img src="/wp-content/uploads/2017/04/logo-footer.png" alt="" width="200px" style="margin: 50px 0;">
			<p style="color: white;">
				Contact us<br>
				<a style="color: white; " href="mailto:support@BioprismBridge.com">support@BioprismBridge.com</a><br><br>
				<a style="color: white; font-size: 9px;" href="/terms-and-conditions/">Terms & Conditions</a> | <a style="color: white; font-size: 9px;" href="/privacy-policy/">Privacy Policy</a>
			</p>
		</div>
	</div>
</section>

<script type="text/javascript" src="/wp-content/themes/FoundationPress/assets/javascript/slick/slick.min.js"></script>
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

			$('.mobile-nav ul li a').click(function(){
				$('.mobile-nav').addClass('hide fadeOut');
				$('#nav-icon3').removeClass('open');
			});

			$.fn.moveIt = function(){
			  var $window = $(window);
			  var instances = [];

			  $(this).each(function(){
			    instances.push(new moveItItem($(this)));
			  });

			  window.onscroll = function(){
			    var scrollTop = $window.scrollTop();
			    instances.forEach(function(inst){
			      inst.update(scrollTop);
			    });
			  }
			}

			var moveItItem = function(el){
			  this.el = $(el);
			  this.speed = parseInt(this.el.attr('data-scroll-speed'));
			};

			moveItItem.prototype.update = function(scrollTop){
			  this.el.css('transform', 'translateY(' + -(scrollTop / this.speed) + 'px)');
			};

			// Initialization
			$(function(){
			  $('[data-scroll-speed]').moveIt();
			});

		});
</script>
<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
</body>
</html>
