<?php
/**
 * Template part for displaying posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>

		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>

		<div class="entry-meta">
			<?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php red_starter_posted_by(); ?>
		</div><!-- .entry-meta -->

		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
       <?php
            wp_link_pages( array(
                'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
                'after'  => '</div>',
            ) );
        ?>
	</div><!-- .entry-content -->
    <div class="entry-footer">
        <div class="entry-links"> <?php red_starter_entry_footer(); ?> </div>
        <div class="social-links">
            <a href="" class="social-button"><i class="fa fa-facebook" aria-hidden="true"></i> &nbsp like</a>
            <a href="" class="social-button"><i class="fa fa-twitter" aria-hidden="true"></i> &nbsp tweet</a>
            <a href="" class="social-button"><i class="fa fa-pinterest" aria-hidden="true"></i> &nbsp pin</a>
        </div>
    </div>
</article><!-- #post-## -->