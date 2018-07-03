<?php
/**
* Template Name: take part
*/
?>
<body id="primary" class="take-content-area">
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
            $featured_img_url_2 = CFS()->get('banner2'); 
            ?>
        </section>

    <div class="entry-content">

        <?php	$args = array( 'numberposts' => '5', 'order' => 'ASC');
			$take_part_posts = get_posts( $args ); ?>

            <?php foreach ( $take_part_posts as $post ) : setup_postdata( $post );?>
            <article class="journal-entry">
            <?php the_post_thumbnail( 'medium' ); ?>
            </article>
            <?php endforeach; wp_reset_postdata(); ?>
                    
        <?php  

        //     $image = CFS()->get('image');
        //     $title = CFS()->get('title');
        //     $title_text = CFS()->get('title_text');
        //     $image_2 = CFS()->get('image_2');
        //     $title_2 = CFS()->get('title_2');
        //     $title_2_text = CFS()->get('title_2_text');
        //     $image_3 = CFS()->get('image_3');
        //     $title_3 = CFS()->get('title_3');
        //     $title_3_text = CFS()->get('title_3_text');
        //     $image_4 = CFS()->get('image_4');
        //     $title_4 = CFS()->get('title_4');
        //     $title_4_text = CFS()->get('title_4_text');
        //     $image_5 = CFS()->get('image_5');
        //     $title_5 = CFS()->get('title_5');
        //     $title_5_text = CFS()->get('title_5_text');
        //     echo "<div class='take-text-wrapper'>";
        //     echo "<div class='icons-title'>";
        //     echo "<img src=" . $image . ">";
        //     echo "<h2>" . "<a>" . $title . "</a>" . "</h2>";
        //     echo "</div>";
        //     echo "<p>" . $title_text . "</p>";
        //     echo "</div>";
        //     echo "<div class='take-text-wrapper'>";
        //     echo "<div class='icons-title'>";
        //     echo "<img src=" . $image_2 . ">";
        //     echo "<h2>" . "<a>" . $title_2 . "</a>" . "</h2>";
        //     echo "</div>";
        //     echo "<p>" . $title_2_text . "</p>";
        //     echo "</div>";
        //     echo "<div class='take-text-wrapper'>";
        //     echo "<div class='icons-title'>";
        //     echo "<img src=" . $image_3 . ">";
        //     echo "<h2>" . "<a>" . $title_3 . "</a>" . "</h2>";
        //     echo "</div>";
        //     echo "<p>" . $title_3_text . "</p>";
        //     echo "</div>";
        //     echo "<div class='take-text-wrapper'>";
        //     echo "<div class='icons-title'>";
        //     echo "<img src=" . $image_4 . ">";
        //     echo "<h2>" . "<a>" . $title_4 . "</a>" . "</h2>";
        //     echo "</div>";
        //     echo "<p>" . $title_4_text . "</p>";
        //     echo "</div>";
        //     echo "<div class='take-text-wrapper'>";
        //     echo "<div class='icons-title'>";
        //     echo "<img src=" . $image_5 . ">";
        //     echo "<h2>" . "<a>" . $title_5 . "</a>" . "</h2>";
        //     echo "</div>";
        //     echo "<p>" . $title_5_text . "</p>";
        //     echo "</div>";
            
        //  ?>
    </div>
    <?php get_footer(); ?>
</body>