<?php
/**
 * Template Name: Home Template
 *
 * @package RED_Starter_Theme
 */

?>
	<div id="primary" class="content-area">
		<div class="hero" >
			<?php get_header('home'); ?>
			<img src="<?php echo get_template_directory_uri(); ?>/images/logos/inhabitent-logo-full.svg" alt="Full image of Inhabitent logo" />
		</div>
		<main id="main" class="site-main" role="main">

		</main> <!-- #main -->

		<div class="journal-feature">
			<?php
			global $post;
			$args = array( 'posts_per_page' => 3, 'order'=> 'ASC', 'orderby' => 'title' );
			$postslist = get_posts( $args );
			foreach ( $postslist as $post ) :
			setup_postdata( $post ); ?> 
				<div class="journal-feature-item" >
					<?php the_post_thumbnail( 'medium' ); ?>
					<span class="comments"><?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?></span>
					<span class="title"><?php the_title(); ?>  </span> 
				</div>
			<?php
			endforeach; 
			wp_reset_postdata();
			?>
		</div>
	
	</div> <!-- #primary -->

<?php get_footer(); ?>
