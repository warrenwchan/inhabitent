<nav id="site-navigation" class="main-navigation" role="navigation">
	<div class="logo" >
        <a href="<?php echo get_home_url(); ?>">
	        <img src="<?php echo get_template_directory_uri(); ?>/images/logos/inhabitent-logo-tent.svg" alt="Image of Inhabitent logo" />
		</a>
	</div>
	<div class="site-nav">
		<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html( 'Primary Menu' ); ?></button>
		<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		<span class="search-icon">
			<i class="fa fa-search" aria-hidden="true"></i>
		</span>
		<span class="search-input">
            <?php get_search_form(); ?>
        </span>   
	</div>
</nav>
