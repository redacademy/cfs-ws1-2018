<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<!-- <div class="page-content" style="background-image: url(<?php //echo esc_url(get_bloginfo('template_directory')); ?>/assets/images/404_image_Map.png)"> -->
				<div class="page-content">
					<div class="error-image-container">
						<img src="<?php echo esc_url(get_bloginfo('template_directory')); ?>/assets/images/404_image_Map.png" alt="404 page map image" />
					</div>

					<div class="error-text-content">
						<h1><?php echo 'Oops, <span>something is missing.</span>' ?></h1>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Take me home</a>
					</div>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
