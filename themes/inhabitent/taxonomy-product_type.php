<?php
/**
 * Template Name: Shop Template
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
<div class="shop">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<section class="contain">
			<?php if ( have_posts() ) : ?>
			<header class="page-header">
			
                <?php 
					add_filter('get_the_archive_title', 'product_archive_title');
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>

                <?php  //shop stuff on front page
                    $arg = array( 'taxonomy' => 'product_type', 'hide_empty' => true);
                    $terms = get_terms( $arg );
                ?>

            </header><!-- .page-header --> 
		</section>
		<section class="contain">
			<div class="shop-contain" >
				<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'template-parts/content','item' );?>

					<?php endwhile; ?>
					<?php else : ?>
						<?php get_template_part( 'template-parts/content', 'none' ); ?>
					<?php endif; ?>
			</div>
		</sectionl>
		</main><!-- #main -->
	</div><!-- #primary -->
</div>
<?php get_footer(); ?>