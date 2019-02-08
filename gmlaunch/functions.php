<?php

require ABSPATH. 'vendor/autoload.php';
require get_template_directory() . '/functions/google-hire.php';


function gmlaunch_scripts() {
	wp_enqueue_style( 'gmlaunch-style', get_stylesheet_uri() ); 
	wp_enqueue_style( 'gmlaunch-framework', get_template_directory_uri(). '/css/framework.css' );
	wp_enqueue_style( 'gmlaunch-format', get_template_directory_uri(). '/css/format.css' );
	wp_enqueue_style('font-awesome5', get_stylesheet_directory_uri(). '/css/fontawesome/all-min.css');
	wp_enqueue_style('animate-css', get_stylesheet_directory_uri(). '/css/animate-min.css');
	wp_enqueue_script( 'general', get_template_directory_uri() . '/js/index.js', array('jquery'), '', true);
	wp_enqueue_script( 'accordion-js', get_template_directory_uri() . '/js/accordian.js', array( 'jquery'), '1.0.0' );
	wp_enqueue_script('waypoints', get_template_directory_uri() . '/js/waypoints.js', array( 'jquery' ), '4.0.1', true ); 
	wp_enqueue_script('waypoints-init', get_template_directory_uri() . '/js/waypoints-int.js',array( 'waypoints' ), '1.0.0', true );  
}

add_action( 'wp_enqueue_scripts', 'gmlaunch_scripts' );


// Custom Post Types 
require get_template_directory() . '/functions/post-type-resources.php';
require get_template_directory() . '/functions/post-type-people.php';



// Add custom class to previous / next to single buttons
// https://justinklemm.com/add-class-to-wordpress-next_post_link-and-previous_post_link-links/
add_filter('next_post_link', 'post_link_attributes');
add_filter('previous_post_link', 'post_link_attributes');

function post_link_attributes($output) {
	$code = 'class="btn hasbg nomargin"';
	return str_replace('<a href=', '<a '.$code.' href=', $output);
}


// SVG support for WP Dashboard
function add_svg_to_upload_mimes( $upload_mimes ) { 
	$upload_mimes['svg'] = 'image/svg+xml'; 
	$upload_mimes['svgz'] = 'image/svg+xml'; 
	return $upload_mimes; 
} 
add_filter( 'upload_mimes', 'add_svg_to_upload_mimes', 10, 1 );




/*-------------------------------------------------------------------------
[buttonstyle]Quote goes here[/buttonstyle]
-------------------------------------------------------------------------*/
function buttonstyle_func( $atts, $content = null ) {
	$code_html .= '<div class="button2">'.$content.'</div>';
	return $code_html;
}
add_shortcode( 'buttonstyle', 'buttonstyle_func' );


/*-------------------------------------------------------------------------
[buttonstyle2]Quote goes here[/buttonstyle2]
-------------------------------------------------------------------------*/
function buttonstyle2_func( $atts, $content = null ) {
	$code_html .= '<div class="btn">'.$content.'</div>';
	return $code_html;
}
add_shortcode( 'buttonstyle2', 'buttonstyle2_func' );




// Replaces the excerpt "Read More" text by a link
function new_excerpt_more($more) {
	global $post;
	return '<a class="moretag" href="'. get_permalink($post->ID) . '"> Read More...</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');



/* 
-------------------------------------------------------------------------
Register Nav menus
------------------------------------------------------------------------- 
*/

function register_my_menus() {
	register_nav_menus(
		array(
			'header-menu-1' => __( 'Header Menu' ),
			'footer-menu-1' => __( 'Footer Menu One' ),
			'footer-menu-2' => __( 'Footer Menu Two' ),
			'footer-menu-3' => __( 'Footer Menu Three' ),
			'footer-menu-4' => __( 'Footer Menu Four' ),
		));
}
add_action( 'init', 'register_my_menus' );


//adds an ACF main options page in admin
if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Theme Options',
		'menu_title'	=> 'Theme Options',
		'menu_slug' 	=> 'theme-options',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

}



// Redirect Resources single to Resource page.
// We don't really need a single so redirecting it.
// https://stackoverflow.com/questions/41268138/using-wp-redirect-to-redirect-wordpress-pages
add_action('template_redirect', 'wpse_128636_redirect_post');

function wpse_128636_redirect_post() {
	$queried_post_type = get_query_var('post_type');
	if (is_single() && 'resources' == $queried_post_type) {
		wp_redirect('/resources', 301);
		exit;
	}
}




// Blog Pre Get Posts
function prefix_category_query($query) {
	if ($query->is_main_query() && !is_admin() || is_category()) {
		$query->set('posts_per_page', '10');

	}
}
add_action('pre_get_posts', 'prefix_category_query');



// Resources Pre Get Posts 
function custom_post_type_archive_portfolio($query) {
	if ($query->is_main_query() && !is_admin()) {
		if ($query->is_tax('resources_categories') || $query->is_post_type_archive('resources')) {
			$query->set('posts_per_page', '9');
			$query->set('orderby', 'post_date');
			$query->set('order', 'DESC');
		}
	}
}
add_action('pre_get_posts', 'custom_post_type_archive_portfolio', 9999);



// Resources Pre Get Posts - People
function custom_post_type_archive_people($query) {

	if ($query->is_main_query() && !is_admin()) {
		if ($query->is_post_type_archive('people')) {
			$query->set('posts_per_page', '9');
			$query->set('orderby', 'post_date');
			$query->set('order', 'DESC');
		}
	}
}
add_action('pre_get_posts', 'custom_post_type_archive_people', 9999);
