<?php
function people_post_type() {

	$labels = array(
		'name'                  => 'People',
		'singular_name'         => 'People',
		'menu_name'             => 'People',
		'name_admin_bar'        => 'People',
		'archives'              => 'People Archives',
		'parent_item_colon'     => 'Parent People:',
		'all_items'             => 'All People',
		'add_new_item'          => 'Add New People',
		'add_new'               => 'Add New',
		'new_item'              => 'New People',
		'edit_item'             => 'Edit People',
		'update_item'           => 'Update People',
		'view_item'             => 'View People',
		'search_items'          => 'Search People',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into People',
		'uploaded_to_this_item' => 'Uploaded to this People',
		'items_list'            => 'People list',
		'items_list_navigation' => 'People list navigation',
		'filter_items_list'     => 'Filter People list',
	);
	$rewrite = array(
		'slug'                  => 'people',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => 'People',
		'description'           => '',
		'labels'                => $labels,
		'supports' => array( 'title', 'editor','thumbnail', 'excerpt'),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-groups',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'               => $rewrite,
		'capability_type'       => 'post',
	);
	register_post_type( 'people', $args );

}
add_action( 'init', 'people_post_type', 0 );
