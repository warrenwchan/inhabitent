<?php
/**
* Template Name: About Page
*
* @package Inhabitent Theme
*/

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section>
				<header class="entry-header page-template-about">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				</header><!-- .entry-header -->
			</section>

			<section class="about-contain">
				<div class="about-entry">
					<h2>Our story</h2>
					<?php echo CFS()->get( 'about_our_story' ); ?>
					
					<h2>Our Team</h2>
					<?php echo CFS()->get( 'about_our_team' ); ?>
				</div>
			</section>
			
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
