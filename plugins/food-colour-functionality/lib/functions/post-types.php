<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Register Exhibition Custom Post Type
function exhibition_custom_post_type() {

	$labels = array(
		'name'                  => _x( 'Exhibitions', 'Post Type General Name', 'food-colour' ),
		'singular_name'         => _x( 'Exhibition', 'Post Type Singular Name', 'food-colour' ),
		'menu_name'             => __( 'Exhibition', 'food-colour' ),
		'name_admin_bar'        => __( 'Exhibition', 'food-colour' ),
		'archives'              => __( 'Exhibition Archives', 'food-colour' ),
		'attributes'            => __( 'Exhibition Attributes', 'food-colour' ),
		'parent_item_colon'     => __( 'Parent Exhibition:', 'food-colour' ),
		'all_items'             => __( 'All Exhibitions', 'food-colour' ),
		'add_new_item'          => __( 'Add New Exhibition', 'food-colour' ),
		'add_new'               => __( 'Add New', 'food-colour' ),
		'new_item'              => __( 'New Exhibition', 'food-colour' ),
		'edit_item'             => __( 'Edit Exhibition', 'food-colour' ),
		'update_item'           => __( 'Update Exhibition', 'food-colour' ),
		'view_item'             => __( 'View Exhibition', 'food-colour' ),
		'view_items'            => __( 'View Exhibitions', 'food-colour' ),
		'search_items'          => __( 'Search Exhibition', 'food-colour' ),
		'not_found'             => __( 'Not found', 'food-colour' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'food-colour' ),
		'featured_image'        => __( 'Featured Image', 'food-colour' ),
		'set_featured_image'    => __( 'Set featured image', 'food-colour' ),
		'remove_featured_image' => __( 'Remove featured image', 'food-colour' ),
		'use_featured_image'    => __( 'Use as featured image', 'food-colour' ),
		'insert_into_item'      => __( 'Insert into exhibition', 'food-colour' ),
		'uploaded_to_this_item' => __( 'Uploaded to this exhibition', 'food-colour' ),
		'items_list'            => __( 'Exhibitions list', 'food-colour' ),
		'items_list_navigation' => __( 'Exhibitions list navigation', 'food-colour' ),
		'filter_items_list'     => __( 'Filter exhibitions list', 'food-colour' ),
	);
	$args = array(
		'label'                 => __( 'Exhibition', 'food-colour' ),
		'description'           => __( 'LUGE Exhibition', 'food-colour' ),
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
		'name'                  => _x( 'Events', 'Post Type General Name', 'food-colour' ),
		'singular_name'         => _x( 'Event', 'Post Type Singular Name', 'food-colour' ),
		'menu_name'             => __( 'Event', 'food-colour' ),
		'name_admin_bar'        => __( 'Post Type', 'food-colour' ),
		'archives'              => __( 'Event Archives', 'food-colour' ),
		'attributes'            => __( 'Event Attributes', 'food-colour' ),
		'parent_item_colon'     => __( 'Parent Event:', 'food-colour' ),
		'all_items'             => __( 'All Events', 'food-colour' ),
		'add_new_item'          => __( 'Add New Event', 'food-colour' ),
		'add_new'               => __( 'Add New', 'food-colour' ),
		'new_item'              => __( 'New Event', 'food-colour' ),
		'edit_item'             => __( 'Edit Event', 'food-colour' ),
		'update_item'           => __( 'Update Event', 'food-colour' ),
		'view_item'             => __( 'View Event', 'food-colour' ),
		'view_items'            => __( 'View Event', 'food-colour' ),
		'search_items'          => __( 'Search Event', 'food-colour' ),
		'not_found'             => __( 'Not found', 'food-colour' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'food-colour' ),
		'featured_image'        => __( 'Featured Image', 'food-colour' ),
		'set_featured_image'    => __( 'Set featured image', 'food-colour' ),
		'remove_featured_image' => __( 'Remove featured image', 'food-colour' ),
		'use_featured_image'    => __( 'Use as featured image', 'food-colour' ),
		'insert_into_item'      => __( 'Insert into item', 'food-colour' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'food-colour' ),
		'items_list'            => __( 'Events list', 'food-colour' ),
		'items_list_navigation' => __( 'Events list navigation', 'food-colour' ),
		'filter_items_list'     => __( 'Filter items list', 'food-colour' ),
	);
	$args = array(
		'label'                 => __( 'Event', 'food-colour' ),
		'description'           => __( 'Event Description', 'food-colour' ),
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