<?php

/**
 * Enqueue scripts and styles.
 */
function food_colour_scripts() {
	wp_enqueue_style( 'red-starter-style', get_stylesheet_uri() );

	wp_enqueue_style('font-awesome', '//use.fontawesome.com/releases/v5.1.0/css/all.css'); 

	wp_enqueue_script( 'food-colour-skip-link-focus-fix', get_template_directory_uri() . '/build/js/skip-link-focus-fix.min.js', array(), '20130115', true );

	wp_enqueue_script( 'jquery' );

	wp_enqueue_script( 'food-colour-main', get_template_directory_uri() . '/build/js/main.min.js', array( 'jquery' ), false, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'food_colour_scripts' );