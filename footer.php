<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

?>

<div id="js-heightControl" style="height: 0;">&nbsp;</div>

<div id = "footerWrapper" class="container py-3">
	<div class="row">
		<div class="col-md-12">
			<footer class="site-footer row" id="colophon">
				<div class="col-md-6">
					<?php $logo = get_field('footer_logo', 'options'); ?>
					<img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>">
				</div><!-- .col-md-6 -->
				
				<div class="col-md-6 text-right">
					<p class = "mb-0">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?></p>
					<p class = "mb-0">
						<a href="/privacy-policy">Privacy</a> | <a href="terms-and-conditions">Terms</a>
					</p>
					<p class = "mb-0">Website by <a target = "_blank" href="https://www.designs4theweb.com">Designs 4 The Web</a></p>
				</div><!-- .col-md-6 -->
			</footer><!-- #colophon -->
		</div><!--col end -->
	</div><!-- row end -->
</div><!-- container end -->

</div><!-- #page we need this extra closing tag here from header file -->

<?php wp_footer(); ?>

<?php if ( is_page('testimonials') ) { ?>
	<script>
		var containerEl = document.querySelector('#testimonials');
		if (jQuery(window).width() < 769) {
			var selectFilter = document.querySelector('#mobileSelector');
			var mixer = mixitup(containerEl, {
  				selectors: {
    				control: '[data-mixitup-control]'
		  		}
			})

			 selectFilter.addEventListener('change', function() {
     			var selector = selectFilter.value;
     			mixer.filter(selector);
   			});
		}  else if (jQuery(window).width() > 768) {
			var mixer = mixitup(containerEl, {
  				selectors: {
    				control: '[data-mixitup-control]'
		  		}
			})
		}
	</script>
<?php } ?>


</body>

</html>