<?php
/**
* Template Name: take part
*/
?>
<body id="primary" class="take-content-area">
    <?php get_header(); ?>

        <section class="icon-image">
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
            $featured_img_url_2 = CFS()->get('bannertake'); 
            ?>
        </section>

        <?php

            $image = CFS()->get('image');
            $title = CFS()->get('title');
            $title_text = CFS()->get('text');
            $image_2 = CFS()->get('image_2');
            $title_2 = CFS()->get('title_2');
            $title_2_text = CFS()->get('text_2');
            $image_3 = CFS()->get('image_3');
            $title_3 = CFS()->get('title_3');
            $title_3_text = CFS()->get('text_3');
            $image_4 = CFS()->get('image_4');
            $title_4 = CFS()->get('title_4');
            $title_4_text = CFS()->get('text_4');
            $image_5 = CFS()->get('image_5');
            $title_5 = CFS()->get('title_5');
            $title_5_text = CFS()->get('text_5');
            echo "<div class='take-text-wrapper'>";
            echo "<div class='icons-title'>";
            echo "<img src=" . $image . ">";
            echo "<h2>" . $title . "</h2>";
            echo "</div>";
            echo "<p>" . $title_text . "</p>";
            echo "<button class='iconbutton'>GOT IT, NEXT!</button>";
            echo "</div>";
            echo "<div class='take-text-wrapper'>";
            echo "<div class='icons-title'>";
            echo "<img src=" . $image_2 . ">";
            echo "<h2>" . $title_2 . "</h2>";
            echo "</div>";
            echo "<p>" . $title_2_text . "</p>";
            echo "<button class='iconbutton'>GOT IT, NEXT!</button>";
            echo "</div>";
            echo "<div class='take-text-wrapper'>";
            echo "<div class='icons-title'>";
            echo "<img src=" . $image_3 . ">";
            echo "<h2>" . $title_3 . "</h2>";
            echo "</div>";
            echo "<p>" . $title_3_text . "</p>";
            echo "<button class='iconbutton'>FILL THE FORM</button>";
            echo "</div>";
            echo "<div class='take-text-wrapper'>";
            echo "<div class='icons-title'>";
            echo "<img src=" . $image_4 . ">";
            echo "<h2>" . $title_4 . "</h2>";
            echo "</div>";
            echo "<p>" . $title_4_text . "</p>";
            echo "<button class='iconbutton'>DOWNLOAD</button>";
            echo "</div>";
            echo "<div class='take-text-wrapper'>";
            echo "<div class='icons-title'>";
            echo "<img src=" . $image_5 . ">";
            echo "<h2>" . $title_5 . "</h2>";
            echo "</div>";
            echo "<p>" . $title_5_text . "</p>";
            echo "</div>";
            
         ?>
    </div>
    <?php get_footer(); ?>
</body>

   
   
   <div class="entry-content">

<?php	$args = array( 'numberposts' => '5', 'order' => 'ASC');
    $take_part_posts = get_posts( $args ); ?>

    <?php foreach ( $take_part_posts as $post ) : setup_postdata( $post );?>
    <article class="icon-entry">
    <?php the_post_thumbnail( 'medium' ); ?>
    </article>
    <?php endforeach; wp_reset_postdata(); ?>
            
<?php  