<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package Food_Colour_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function food_colour_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'food_colour_body_classes' );

/**
 * Allow svg upload to media gallery
 */

function food_colour_add_file_types_to_uploads($file_types){
	$new_filetypes = array();
	$new_filetypes['svg'] = 'image/svg+xml';
	$file_types = array_merge($file_types, $new_filetypes );
	return $file_types;
	}
add_action('upload_mimes', 'food_colour_add_file_types_to_uploads');
