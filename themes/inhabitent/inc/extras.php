<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}

add_filter( 'body_class', 'red_starter_body_classes' );

// Wordpress login page
function my_custom_login_logo() {
     echo '<style type="text/css">                                                                   
         #login h1 a { 
			background-image:url('.get_stylesheet_directory_uri().'/images/logos/inhabitent-logo-text-dark.svg) !important; 
			height: 120px; 
			width: 310px; 
			background-size: contain;
		 }                            
     </style>';
}
add_action('login_head', 'my_custom_login_logo');

function the_url( $url ) {
    return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'the_url' );
    

// Remove "Editor" links from sub-menus
function inhabitent_remove_submenus() {
    remove_submenu_page( 'themes.php', 'theme-editor.php' );
    remove_submenu_page( 'plugins.php', 'plugin-editor.php' );
}
add_action( 'admin_menu', 'inhabitent_remove_submenus', 110 );



// function inhabitent_about_css() {

// 	if (!is_page_template( 'page-templates/about.php' )) {
// 		return;

// 	}
// 	$image = CFS()->get('banner_image_upload');

// 	if (!$image) {
// 		return;
// 	}

// 	$hero_css = ".page-template-about .entry-header{
//         background:
//             linear-gradient( to bottom, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0.4) 100% ),
//             url({$image}) no-repeat center bottom;
//         background-size: cover, cover;
// 		}";

// wp_add_inline_style( 'red-starter-style', $hero_css);
// }

// add_action( 'wp_enqueue_scripts', 'inhabitent_about_css' );

function inhabitent_about_css() {
if (!is_page_template('page-templates/about.php')) {
    return;
}
    $image = CFS()->get('about_hero_image');
    if(!$image) {
        return;
    }
    $hero_css = ".page-template-about .entry-header {
            background:
                linear-gradient( to bottom, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0.4) 100% ),
                url({$image}) no-repeat center bottom;
            background-size: cover, cover;
    }";
    wp_add_inline_style( 'red-starter-style', $hero_css );
}
add_action( 'wp_enqueue_scripts', 'inhabitent_about_css' );

/**
 * Changing product archive title.
 */
function product_archive_title($title) {
    if(is_post_type_archive('products')) {
        $title = 'Shop Stuff';
    }
    return $title;
}
add_filter('get_the_archive_title', 'product_archive_title'); 