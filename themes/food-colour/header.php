<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />



	<?php wp_head(); ?>

	
		<meta property="og:title" content="<?php echo the_title(); ?>">
		<meta property="og:description" content="<?php echo CFS()->get('description'); ?>">
		<meta property="og:type" content="article">
		<meta property="og:url" content="<?php echo the_permalink(); ?>">
		<meta property="og:site_name" content="<?php echo get_bloginfo(); ?>">
		<meta property="og:image" content="<?php echo esc_url( CFS()->get('map') ); ?>">

		<meta name="twitter:card" content="summary_large_image">
		<meta name="twitter:title" content="<?php echo the_title(); ?>">
		<meta name="twitter:description" content="<?php echo CFS()->get('description'); ?>">
		<meta name="twitter:image" content="<?php echo esc_url( CFS()->get('map') ); ?>">
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">
				<div class="site-branding">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img src="<?php echo esc_url(get_bloginfo('template_directory')); ?>/assets/images/the_colours_of_food_security_logo.svg" alt="colours of food security logo"/>
					</a>
					<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<p class="site-description"><?php bloginfo( 'description' ); ?></p>
				</div><!-- .site-branding -->

				<nav id="site-navigation" class="main-navigation" role="navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">Menu</button>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
				</nav><!-- #site-navigation -->
			</header><!-- #masthead -->

			<div id="content" class="site-content">
