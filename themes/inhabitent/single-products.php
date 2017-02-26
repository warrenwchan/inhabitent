<?php
/**
 *  Template Name: Single Template
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
	<div class="single">
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">

			<?php if ( have_posts() ) : ?>

				<div class="post-container">
					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>
						<?php
							get_template_part( 'template-parts/content', 'single' );
						?>
					<?php endwhile; ?>
					<?php the_posts_navigation(); ?>
					
					<?php
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
					?>

					<?php else : ?>
						<?php get_template_part( 'template-parts/content', 'none' ); ?>
					<?php endif; ?>
				</div>

			</main><!-- #main -->
		</div><!-- #primary -->
	</div>

<?php get_footer(); ?>
