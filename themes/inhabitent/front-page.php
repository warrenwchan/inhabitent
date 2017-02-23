<?php
/**
 *  Template Name: Home Template
 *
 * @package RED_Starter_Theme
 */

?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="hero" >
				<?php get_header('home'); ?>
				<img src="<?php echo get_template_directory_uri(); ?>/images/logos/inhabitent-logo-full.svg" alt="Full image of Inhabitent logo" />
			</div>

			<section>
				<h2>inhabitent journal</h2>
				<div class="journal-feature">
					<?php
					global $post;
					$args = array( 'posts_per_page' => 3, 'order'=> 'DESC', 'orderby' => 'title' );
					$postslist = get_posts( $args );
					foreach ( $postslist as $post ) :
					setup_postdata( $post ); ?> 
						<div class="journal-feature-item" >
							<?php the_post_thumbnail( 'medium' ); ?>
							<div class="journal-feature-text" >
								<span class="comments"><?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?></span>
								<span class="title"><?php the_title(); ?>  </span> 
								<button class='readmore' type="button">read entry</button>
							</div>
						</div>
					<?php endforeach; wp_reset_postdata(); ?>
				</div>
			</section>

			<section>
				<h2>latest adventure</h2>
				<div class="adventure-container">
					 <div class="wrap1" >
						 <img src="<?php echo get_template_directory_uri(); ?>/images/adventure-photos/canoe-girl.jpg" alt="canoe-girl" />
					 </div>
					 <div class="wrap2">
						 <img src="<?php echo get_template_directory_uri(); ?>/images/adventure-photos/beach-bonfire.jpg" alt="beach-bonfire" />
					 </div>
					 <div class="wrap3">
						 <img src="<?php echo get_template_directory_uri(); ?>/images/adventure-photos/mountain-hikers.jpg" alt="mountain-hikers" />
					 </div>
					 <div class="wrap3">
						 <img src="<?php echo get_template_directory_uri(); ?>/images/adventure-photos/night-sky.jpg" alt="night-sky" />
					 </div>
				</div>
			</sectioin>
			
		</main> <!-- #main -->

	</div> <!-- #primary -->

<?php get_footer(); ?>
