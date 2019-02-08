<?php

// Custom Post Type for Resources 
// https://generatewp.com/post-type/?edit=jkV768y
function resources() {

	$labels = array(
		'name'                  => 'Resources',
		'singular_name'         => 'Resources',
		'menu_name'             => 'Resources',
		'name_admin_bar'        => 'Resources',
		'archives'              => 'Item Archives',
		'parent_item_colon'     => 'Parent Item:',
		'all_items'             => 'All Entries',
		'add_new_item'          => 'Add Resources',
		'add_new'               => 'Add Resources',
		'new_item'              => 'New Resources',
		'edit_item'             => 'Edit Resources',
		'update_item'           => 'Update Resources',
		'view_item'             => 'View Resources',
		'search_items'          => 'Search Resourcess',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into item',
		'uploaded_to_this_item' => 'Uploaded to this item',
		'items_list'            => 'Items list',
		'items_list_navigation' => 'Items list navigation',
		'filter_items_list'     => 'Filter items list',
	);
	$rewrite = array(
		'slug'                  => 'resources',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => 'Resources',
		'description'           => 'Resources',
		'labels'                => $labels,
		'supports'              => array( ),
		'taxonomies' => array( 'resources_categories'),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-admin-comments',
		'show_in_nav_menus' => true,
		'publicly_queryable' => true,
		'exclude_from_search' => false,
		'query_var' => true,
		'can_export' => true,
		'rewrite' => array('slug' => 'resources/%resources_categories%','with_front' => FALSE),
		'public' => true,
		'has_archive' => 'resources',
		'capability_type' => 'post'

	);
	register_post_type( 'resources', $args );

}
add_action( 'init', 'resources', 0 );



function themes_taxonomy() {  
	register_taxonomy(  
        'resources_categories',  //The name of the taxonomy. Name should be in slug form (must not contain capital letters or spaces). 
        'resources',        //post type name
        array(  
        	'hierarchical' => true,  
            'label' => 'Category',  //Display name
            'query_var' => true,
            'rewrite' => array(
                'slug' => 'resources-category', // This controls the base slug that will display before each term
                // !!!	IMPORTANT !!!! - If the slug is the same as the CPT pagination will not work and you'll get a 404 error. 
                'with_front' => false // Don't display the category base before 
            )
        )  
    );  
}  
add_action( 'init', 'themes_taxonomy');




function filter_post_type_link($link, $post)
{
	if ($post->post_type != 'resources')
		return $link;

	if ($cats = get_the_terms($post->ID, 'resources_categories'))
		$link = str_replace('%resources_categories%', array_pop($cats)->slug, $link);
	return $link;
}
add_filter('post_type_link', 'filter_post_type_link', 10, 2);



// Fuction to set all posts to ALL
// We use this so we can redirect to resources/all and show all posts vs the archive page

function default_taxonomy_term2( $post_id, $post ) {
	if ( 'publish' === $post->post_status ) {
		$defaults = array(
			'resources_categories' => array( 'all'),  

		);
		$taxonomies = get_object_taxonomies( $post->post_type );
		foreach ( (array) $taxonomies as $taxonomy ) {
			$terms = wp_get_post_terms( $post_id, $taxonomy );
			if ( empty( $terms ) && array_key_exists( $taxonomy, $defaults ) ) {
				wp_set_object_terms( $post_id, $defaults[$taxonomy], $taxonomy );
			}
		}
	}
}
add_action( 'save_post', 'default_taxonomy_term2', 100, 2 );


