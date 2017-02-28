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

/** About Banner Upload */

function inhabitent_about_css() {
if (!is_page_template('page-templates/about.php')) {
    return;
}
    $image = CFS()->get('banner_image_upload');
    if(!$image) {
        return;
    }
    
    $hero_css = ".page-template .entry-header {
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

/** Change Wear title function */
function modify_wear($wear) {
    if(has_term('wear', 'product_type')) {
        $wear = 'Wear';
    }
    return $wear;
}
add_filter('get_the_archive_title', 'modify_wear');

/** Change Eat title function */
function modify_eat($eat) {
    if(has_term('eat', 'product_type')) {
        $eat = 'Eat';
    }
    return $eat;
}
add_filter('get_the_archive_title', 'modify_eat');

/** Change Do title function */
function modify_do($do) {
    if(has_term('do', 'product_type')) {
        $do = 'Do';
    }
    return $do;
}
add_filter('get_the_archive_title', 'modify_do');

/** Change Sleep title function */
function modify_sleep($sleep) {
    if(has_term('sleep', 'product_type') && is_tax( 'product_type','sleep')) {
        $sleep = 'Sleep';
    }
    return $sleep;
}
add_filter('get_the_archive_title', 'modify_sleep');
/**
 * Customize excerpt length and style.
 *
 * @param  string The raw post content.
 * @return string
 */
function red_wp_trim_excerpt( $text ) {
	$raw_excerpt = $text;
	
	if ( '' == $text ) {
		// retrieve the post content
		$text = get_the_content('');
		
		// delete all shortcode tags from the content
		$text = strip_shortcodes( $text );
		
		$text = apply_filters( 'the_content', $text );
		$text = str_replace( ']]>', ']]&gt;', $text );
		
		// indicate allowable tags
		$allowed_tags = '<p>,<a>,<em>,<strong>,<blockquote>,<cite>';
		$text = strip_tags( $text, $allowed_tags );
		
		// change to desired word count
		$excerpt_word_count = 50;
		$excerpt_length = apply_filters( 'excerpt_length', $excerpt_word_count );
		
		// create a custom "more" link
		$excerpt_end = '<span>[...]</span><p><a href="' . get_permalink() . '" class="read-more">Read more &rarr;</a></p>'; // modify excerpt ending
		$excerpt_more = apply_filters( 'excerpt_more', ' ' . $excerpt_end );
		
		// add the elipsis and link to the end if the word count is longer than the excerpt
		$words = preg_split( "/[\n\r\t ]+/", $text, $excerpt_length + 1, PREG_SPLIT_NO_EMPTY );
		
		if ( count( $words ) > $excerpt_length ) {
			array_pop( $words );
			$text = implode( ' ', $words );
			$text = $text . $excerpt_more;
		} else {
			$text = implode( ' ', $words );
		}
	}
	
	return apply_filters( 'wp_trim_excerpt', $text, $raw_excerpt );
}

remove_filter( 'get_the_excerpt', 'wp_trim_excerpt' );
add_filter( 'get_the_excerpt', 'red_wp_trim_excerpt' );

/** sort post items decending */

function foo_modify_query_order($query) {
    if ( $query->is_main_query() ) {
        $query->set( 'orderby', 'title' );
        $query->set( 'order', 'DECS' );
    }
}
add_action( 'pre_get_posts', 'foo_modify_query_order' );
