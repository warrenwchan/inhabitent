<?php
/**
 *  Template Name: Home Template
 *
 * @package RED_Starter_Theme
 */

?>
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<section>
			<div class="hero" >
				<?php get_header('home'); ?>
				<img src="<?php echo get_template_directory_uri(); ?>/images/logos/inhabitent-logo-full.svg" alt="Full image of Inhabitent logo" />
			</div>
		</section>

		<section class="contain" >
			<h2>Shop Stuff</h2>
            <?php  //shop stuff on front page
                $arg = array( 'taxonomy' => 'product_type', 'hide_empty' => true);
                $terms = get_terms( $arg );
            ?>
            <div class="product-list-style">
                <ul>
                    <?php foreach ( $terms as $term ) : ?>
						<?php $url = get_term_link($term->slug, 'product_type'); ?>
                        <li>
							<img src="<?php echo get_template_directory_uri(); ?>/images/product-type-icons/<?php echo $term->slug; ?>.svg" alt="Product icon image of <?php echo $term->slug;?> ">
							<p><?php echo $term->description; ?></p>
							<a href="<?php echo $url ?>"><?php echo $term->name; ?></a>
						</li>
                    <?php endforeach; ?>
                </ul>
                <?php
                    the_archive_description( '<div e="taxonomy-description">', '</div>' );
                ?>
		</section>
		
		<section class="contain">
			<h2>inhabitent journal</h2>
			<div class="journal-feature">
				<?php
				global $post;
				$args = array( 'posts_per_page' => 3, 'order'=> 'DESC', 'orderby' => 'post_date' );
				$postslist = get_posts( $args );
				foreach ( $postslist as $post ) :
				setup_postdata( $post ); ?> 
					<div class="journal-feature-item" >
						<?php the_post_thumbnail( 'medium' ); ?>
						<div class="journal-feature-text" >
							<span class="comments"><?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?></span>
							<span class="title"><?php the_title(); ?>  </span> 
							<a href="'.get_term_link($term).'" class="readmore">read entry</a>
						</div>
					</div>
				<?php endforeach; wp_reset_postdata(); ?>
			</div>
		</section>
		<section class="contain">
			<h2>latest adventure</h2>
			<div class="adventure-container">
				 <div class="wrap1" ><!--<img src="<?php echo get_template_directory_uri(); ?>/images/adventure-photos/canoe-girl.jpg" alt="canoe-girl" />-->
				 </div>
				 <div class="contain-wrap">
					<div class="wrap2"><!--<img src="<?php echo get_template_directory_uri(); ?>/images/adventure-photos/beach-bonfire.jpg" alt="beach-bonfire" />-->
					</div>
					<div class="wrap3"><!--<img src="<?php echo get_template_directory_uri(); ?>/images/adventure-photos/mountain-hikers.jpg" alt="mountain-hikers" />-->
					</div>
					<div class="wrap4"><!--<img src="<?php echo get_template_directory_uri(); ?>/images/adventure-photos/night-sky.jpg" alt="night-sky" />-->
					</div>
				 </div>
			</div>
		</sectioin>
		<?php get_footer(); ?>
	</main> <!-- #main -->
	
</div> <!-- #primary -->

