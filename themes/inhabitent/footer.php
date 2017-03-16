<?php
/**
* The template for displaying the footer.
*
* @package RED_Starter_Theme
*/

?>

		</div><!-- #content -->
			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="site-info">
					<div class="info-hour">
						<div class="contact" >
							<h2>contact info</h2>
							<div> <i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:w.warrenchan@gmail.com">w.warrenchan@gmail.com</a> </div>
							<div> <i class="fa fa-phone" aria-hidden="true"></i><a href="778-456-7891">778-456-7891</a> </div>
							<div>
								<a href="facebook.com"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
								<a href="twitter.com"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
								<a href="plus.google.com/"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a>
							</div>
						</div>
						<div class="hours" >
							<h2>business hours</h2>
							<p><span>monday-friday:</span> 9am to 5pm</p>
							<p><span>saturday:</span> 10am to 2pm</p>
							<p><span>sunday:</span> Closed</p>
						</div>
					</div>
					<img src="<?php echo get_template_directory_uri(); ?>/images/logos/inhabitent-logo-text.svg" alt="Full image of Inhabitent footer logo" />
					<p class="wp-power" >copyright © 2016 inhabitent</p>
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->
		<?php wp_footer(); ?>
	</body>
</html>
