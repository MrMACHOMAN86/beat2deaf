<?php

/**
 * Music_Site
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * {@link https://codex.wordpress.org/Plugin_API}
 *
 * @subpackage Music_Site
 * @since Music_Site 0.1
 */

/*Call the stylesheet*/
function style_sheet() {

wp_enqueue_style( 'style', get_stylesheet_uri() );

};

add_action( 'wp_enqueue_scripts', 'style_sheet' );

/*Call JavaScript File */
function pretty_js() {

	wp_enqueue_script( 'pretty_js', home_url() . '/javascript/pretty.js', array('jquery'), null, true );
}

add_action( 'wp_enqueue_scripts', 'pretty_js' );


/*Add custom menus below. So far only one menu is necessary so there is no need to create the array to add multiple menus.

This will be the primary Navigation menu
**/

/*Footer Menu */
function register_my_menus() {
	register_nav_menus(
		array(
			'nav-menu' => __( 'The Main Navigation Menu' ),
			'footer-menu' => __( 'The Footer Navigation Menu' )
		)
	);
}

add_action( 'init', 'register_my_menus');

/*Register custom sidebars below. Use name convention $theme_$location_sidebar() to make it easier to use
*/
function index_lower_sidebar() {
	register_sidebar(
		array (
			'name' => __('Soundcloud Sidebar', 'music-site'),
			'id' => 'primary',
			'description' => __('Only include a SoundCloud widget in this sidebar please. Any further addition will break the look.', 'music-site'),
			'before_widget' => '<div class="widget-content">',
            'after_widget' => "</div>",
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
		)
	);
}

add_action( 'widgets_init', 'index_lower_sidebar' );