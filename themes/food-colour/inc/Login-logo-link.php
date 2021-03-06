<?php
/**
 * Custom login logo and url for this theme.
 *
 * @package Food_Colour_Theme
 */

// Changing the logo
function food_colour_my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo.png);
		height:75px;
		width:160px;
		background-size: 160px 90px;
		background-repeat: no-repeat;
        	padding-bottom: 30px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'food_colour_my_login_logo' );

// Changing the url
function food_colour_my_login_logo_url() {
    return esc_url( home_url( '/' ) );
}
add_filter( 'login_headerurl', 'food_colour_my_login_logo_url' );

?>