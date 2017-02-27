<?php
/**
 * Template part for displaying posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-header">
		<div class="entry-image">
			<?php if ( has_post_thumbnail() ) : ?>
				<?php the_post_thumbnail( 'large' ); ?>
			<?php endif; ?>
		</div>
		<div class="entry-info">
			<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
			<?php if ( 'post' === get_post_type() ) : ?>

			<div class="entry-meta">
				<?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php red_starter_posted_by(); ?>
			</div><!-- .entry-meta -->

			<?php endif; ?>

			<div class="entry-content">
				<?php echo CFS()->get( 'product_price' ); ?>
				<?php the_content(); ?>
			</div><!-- .entry-content -->
			<div class="social-links">
				<a href="" class="social-button"><i class="fa fa-facebook" aria-hidden="true"></i> like</a>
				<a href="" class="social-button"><i class="fa fa-twitter" aria-hidden="true"></i> tweet</a>
				<a href="" class="social-button"><i class="fa fa-pinterest" aria-hidden="true"></i> pin</a>
			</div>
		</div>
		

	</div><!-- .entry-header -->


	<!--<div>
        <a class="readmore" href="<?php the_permalink(); ?>">Read More</a>
    </div>     -->
</article><!-- #post-## -->