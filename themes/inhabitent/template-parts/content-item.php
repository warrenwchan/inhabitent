<?php
/**
 * Template part for displaying posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article class="post-item" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-image">
		<?php if ( has_post_thumbnail() ) : ?>
			<a href=" <?php the_permalink();?> "><?php the_post_thumbnail(); ?></a>
		<?php endif; ?>
	</div><!-- .entry-header -->

	<div class="entry-info">
        <?php the_title( sprintf( '<a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a>' ); ?>
		<?php echo CFS()->get( 'product_price' ); ?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->