<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Register Exhibition Custom Post Type
function exhibition_custom_post_type() {

	$labels = array(
		'name'                  =>  'Exhibitions', 'Post Type General Name',
		'singular_name'         =>  'Exhibition', 'Post Type Singular Name',
		'menu_name'             =>  'Exhibition',
		'name_admin_bar'        =>  'Exhibition',
		'archives'              =>  'Exhibition Archives', 
		'attributes'            =>  'Exhibition Attributes', 
		'parent_item_colon'     =>  'Parent Exhibition:', 
		'all_items'             =>  'All Exhibitions', 
		'add_new_item'          =>  'Add New Exhibition', 
		'add_new'               =>  'Add New', 
		'new_item'              =>  'New Exhibition', 
		'edit_item'             =>  'Edit Exhibition', 
		'update_item'           =>  'Update Exhibition', 
		'view_item'             =>  'View Exhibition', 
		'view_items'            =>  'View Exhibitions',
		'search_items'          =>  'Search Exhibition', 
		'not_found'             =>  'Not found',
		'not_found_in_trash'    =>  'Not found in Trash', 
		'featured_image'        =>  'Featured Image', 
		'set_featured_image'    =>  'Set featured image', 
		'remove_featured_image' =>  'Remove featured image', 
		'use_featured_image'    =>  'Use as featured image', 
		'insert_into_item'      =>  'Insert into exhibition', 
		'uploaded_to_this_item' =>  'Uploaded to this exhibition', 
		'items_list'            =>  'Exhibitions list', 
		'items_list_navigation' =>  'Exhibitions list navigation', 
		'filter_items_list'     =>  'Filter exhibitions list', 
	);
	$args = array(
		'label'                 => 'Exhibition', 
		'description'           => 'LUGE Exhibition', 
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => false,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'exhibition', $args );

}
add_action( 'init', 'exhibition_custom_post_type', 0 );

// Register Events Custom Post Type
function event_custom_post_type() {

	$labels = array(
		'name'                  =>  'Events', 'Post Type General Name',
		'singular_name'         =>  'Event', 'Post Type Singular Name', 
		'menu_name'             =>  'Event', 
		'name_admin_bar'        =>  'Post Type', 
		'archives'              =>  'Event Archives', 
		'attributes'            =>  'Event Attributes', 
		'parent_item_colon'     =>  'Parent Event:', 
		'all_items'             =>  'All Events', 
		'add_new_item'          =>  'Add New Event', 
		'add_new'               =>  'Add New', 
		'new_item'              =>  'New Event', 
		'edit_item'             =>  'Edit Event', 
		'update_item'           =>  'Update Event', 
		'view_item'             =>  'View Event', 
		'view_items'            =>  'View Event', 
		'search_items'          =>  'Search Event', 
		'not_found'             =>  'Not found', 
		'not_found_in_trash'    =>  'Not found in Trash', 
		'featured_image'        =>  'Featured Image', 
		'set_featured_image'    =>  'Set featured image',
		'remove_featured_image' =>  'Remove featured image',
		'use_featured_image'    =>  'Use as featured image',
		'insert_into_item'      =>  'Insert into item', 
		'uploaded_to_this_item' =>  'Uploaded to this item',
		'items_list'            =>  'Events list',
		'items_list_navigation' =>  'Events list navigation',
		'filter_items_list'     =>  'Filter items list',
	);
	$args = array(
		'label'                 => 'Event',
		'description'           => 'Event Description',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'event', $args );

}
add_action( 'init', 'event_custom_post_type', 0 );