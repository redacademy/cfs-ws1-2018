<?php
/**
* Template Name: About
*
* @package Food_Colour_Theme
*/
?>
<body id="primary" class="about-content-area">
    <?php get_header(); ?>

        <section class="hero-image">
            <?php if ( have_posts() ) : ?>
                <?php if ( is_home() && ! is_front_page() ) : ?>
                <?php endif; ?>
            <?php while ( have_posts() ) : the_post(); ?>
                    <?php get_template_part( 'template-parts/content' ); ?>
                <?php endwhile; ?>
                    <?php the_posts_navigation(); ?>
            <?php else : ?>
                    <?php get_template_part( 'template-parts/content', 'none' ); ?>
                <?php endif; ?>
            <?php 
            $featured_img_url_2 = CFS()->get('banner'); 
            echo '<img src="'.esc_url($featured_img_url_2).'" rel="lightbox">'; 
            ?>
        </section>

    <div class="about-entry-content">
        <?php  
            $image_1 = CFS()->get('image_1');
            $title_1 = CFS()->get('title_1');
            $title_1_text = CFS()->get('title_1_text');
            $image_2 = CFS()->get('image_2');
            $title_2 = CFS()->get('title_2');
            $title_2_text = CFS()->get('title_2_text');
        ?>
        <div class='hero-text-wrapper'>
            <div class='icon-title'>
                <img src="<?php echo $image_1 ?>">
                <h2><a> <?php echo $title_1 ?> </a></h2>;
            </div>
            <p><?php echo $title_1_text ?></p>
        </div>
        <div class='hero-text-wrapper'>
            <div class='icon-title'>
                <img src="<?php echo $image_2 ?>">
                <h2><a><?php echo $title_2 ?></a></h2>
            </div>
            <p><?php echo $title_2_text ?></p>
        </div>
    </div>
    <hr>
    <?php get_footer(); ?>
</body>