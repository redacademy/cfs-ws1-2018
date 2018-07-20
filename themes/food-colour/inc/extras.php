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

/**
 * Load OG meta to header
 */
function food_colour_og_metadata() {
	if (is_singular('exhibition')) {
		$title = get_the_title();
		$description = esc_html(CFS()->get('description'));

		$url = get_permalink();
		$site_name = get_bloginfo();
		$image = CFS()->get('map');

		echo "\t<meta property='og:title' content='$title' />\n";
		if ($description) {
			echo "\t<meta property='og:description' content='$description' />\n";
			echo "\t<meta property='twitter:description' content='$description' />\n";
		}
		echo "\t<meta property='og:type' content='article' />\n";
		echo "\t<meta property='og:url' content='$url' />\n";
		echo "\t<meta property='og:site_name' content='$site_name' />\n";
		echo "\t<meta property='og:image' content='$image' />\n";

		echo "\t<meta property='twitter:card' content='summary_large_image' />\n";
		echo "\t<meta property='twitter:title' content='$title' />\n";
		echo "\t<meta property='twitter:image' content='$image' />\n";
	}
}
add_action('wp_head', 'food_colour_og_metadata');
