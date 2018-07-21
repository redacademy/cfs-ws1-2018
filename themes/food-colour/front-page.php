<?php
/**
 * Template Name: Home
 * Front page (home page) template file.
 *
 * @package Food_Colour_Theme
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
?>
				<section class='title-1'>
					<h1> <?php echo $fptitle_1 ?> </h1>
					<p><?php echo $fptext_1 ?> </p>
					<a href='<?php echo get_site_url()?>/exhibition/all'><button>Exhibition</button></a>
				</section>
				<section class='title-2'>
					<div>
						<hr align='left'>
						<h1> <?php echo $fptitle_2 ?> </h1>
					</div>
					<img src="<?php echo esc_url($fpimage_2) ?>" rel="lightbox">
					<p><?php echo $fptext_2 ?> </p>
					<a href='<?php echo get_site_url() ?>/about'><button>About</button></a>
				</section>
				<section class='title-3'>
					<hr align='left'>
					<h1> <?php echo $fptitle_3 ?> </h1>
					<img src="<?php echo esc_url($fpimage_3) ?>" rel="lightbox"> 
					<p><?php echo $fptext_3 ?> </p>
					<a target='_blank' href='https://drive.google.com/drive/folders/1KR6gb1ulL1tunhDn1yw26WX_2GnKU7-I?usp=sharing'><button>Download Files</button></a>
				</section>
				<hr class='bottom-line' align='center'>
				<p class='hashtag'>#ColourFoodSecurity</p>
			</div>
		</div>
	</div>


<?php get_footer(); ?>