<?php
/**
 * Template Name: Home
 *front page (home page) template file.
 * 
 *
 * @package WordPress
 * 
 */
get_header(); ?>

	<div id="primary" class="site-content">
		<div class='image-wrapper'>
			<img class='background-image-main' src="<?php echo esc_url(get_bloginfo('template_directory')); ?>/assets/images/home_background.jpg" alt="home background"/>
			<img class='background-map-main' src="<?php echo esc_url(get_bloginfo('template_directory')); ?>/assets/images/map_vector_hero.png" alt="home background"/>
			<div id="content" role="main">
				<section class='title-1'>
					<h1>THE COLOURS OF FOOD SECURITY</h1>
					<p>The Colours of Food Security is a series of bold and striking maps that paint a picture of global agriculture, and key issues surrounding the food system.The message of this exhibit is that to achieve food secure future we need new visions that view the food system from all its many angles, tones and colours.</p>
					<button>
				</section>
				<section class='title-2'>
					<h1>What is Food Security?</h1>
					<p>Food security is a complex issue integrating social and environmental dimensions. Our future access and utilization of stable supplies of quality food depend on us solving farmer livelihood, agricultural productivity, poverty, climate, human health, biodiversity loss, water, and environmental pollution. </p>
					<button>
				</section>
				<section class='title-3'>
					<h1>Take part</h1>
					<p>Want to improve global food security and sustainability? You can host "The colours of food security" exhibit. Just download the images and print it out.</p>
					<button>
				</section>

			</div><!-- #content -->
		</div>
	</div><!-- #primary -->


<?php get_footer(); ?>