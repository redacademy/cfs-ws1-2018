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
			
			<?php 
				$fptitle_1 = CFS()->get('fp_title_1');
				$fptext_1 = CFS()->get('fp_text_1');
				$fptitle_2 = CFS()->get('fp_title_2');
				$fptext_2 = CFS()->get('fp_text_2');
				$fpimage_2 = CFS()->get('fp_image_2');
				$fptitle_3 = CFS()->get('fp_title_3');
				$fptext_3 = CFS()->get('fp_text_3');
				$fptext_3 = CFS()->get('fp_text_3');
				$fpimage_3 = CFS()->get('fp_image_3');

				echo "<section class='title-1'>";
				echo "<h1>" .  $fptitle_1 . "</h1>";
					echo "<p>" . $fptext_1 . "</p>";
					echo "<button>";
				echo "</section>";
				echo "<section class='title-2'>";
					echo '<img src="'.esc_url($fpimage_2).'" rel="lightbox">'; 
					echo "<div class='side-text'>";
					echo "<h1>" . $fptitle_2 . "</h1>";
					echo "<p> . $fptext_2 . </p>";
					echo "<button>";
					echo "</div>";
				echo "</section>";
				echo "<section class='title-3'>";
					echo "<h1>" . $fptitle_3 . "</h1>";
					echo "<p> . $fptext_3 . </p>";
					echo "<button>";
					echo '<img src="'.esc_url($fpimage_3).'" rel="lightbox">'; 
				echo "</section>";
				
			?>

			</div><!-- #content -->
		</div>
	</div><!-- #primary -->


<?php get_footer(); ?>