 <?php
/**
 * Template Name: Journal Template
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
	<div class="journal">
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">

				<?php if ( have_posts() ) : ?>
				<div class="post-container">
					<?php while ( have_posts() ) : the_post(); ?> <!--start loop-->
						<?php get_template_part( 'template-parts/content' ); ?>
					<?php endwhile; ?>

					<?php the_posts_navigation(); ?>
				
					<?php else : ?>
						<?php get_template_part( 'template-parts/content', 'none' ); ?>
					<?php endif; ?>
				</div>
				<?php get_sidebar(); ?>
				
			</main><!-- #main -->
		</div><!-- #primary -->
	</div>

<?php get_footer(); ?>
