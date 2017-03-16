<?php
/**
* Template Name: Journal Template
*
* @package RED_Starter_Theme
*/

get_header(); ?>
	<div class="find-us">
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">

				<div class="post-container">
					<?php while ( have_posts() ) : the_post(); ?> <!--Start Loop-->
						<?php get_template_part( 'template-parts/content','page' ); ?>
					<?php endwhile; ?>

					<div class="about-entry">
						<h2>we take camping very seriously.</h2>
						<p>Inhabitent Camping Supply Co. knows what it takes to outfit a camping trip right. From flannel shirts to artisanal axes, we’ve got your covered. Please contact us below with any questions comments or suggestions.</p>
						<h2>send us emails !</h2>
					</div>
				</div>
				<?php get_sidebar(); ?>
				
			</main><!-- #main -->
		</div><!-- #primary -->
	</div>
<?php get_footer(); ?>