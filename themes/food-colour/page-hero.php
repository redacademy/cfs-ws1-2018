<?php
/**
* Template Name: About
*/
?>
<body id="primary" class="about-content-area">
    <?php get_header(); ?>
    <section class="background-image-main"> 
        <div class="background-image-main-wrapper">
            <?php 
            $featured_img_url_2 = CFS()->get('banner'); 
            echo '<img src="'.esc_url($featured_img_url_2).'" rel="lightbox">'; 
            ?>
        </div>
        <div class="title">
            <h1 class="entry-title"><?php echo CFS()->get('page_title') ?></h1>
        </div>
    </section>
    <span class='anchor-point'></span>
    <div class="entry-content">
        <?php  
            $image_1 = CFS()->get('image_1');
            $title_1 = CFS()->get('title_1');
            $title_1_text = CFS()->get('title_1_text');
            $image_2 = CFS()->get('image_2');
            $title_2 = CFS()->get('title_2');
            $title_2_text = CFS()->get('title_2_text');
            echo "<img src=" . $image_1 . ">";
            echo "<h2>" . "<a>" . $title_1 . "</a>" . "</h2>";
            echo "<p>" . $title_1_text . "</p>";
            echo "<img src=" . $image_2 . ">";
            echo "<h2>" . "<a>" . $title_2 . "</a>" . "</h2>";
            echo "<p>" . $title_2_text . "</p>";
         ?>
    </div>
    <?php get_footer(); ?>
</body>
</html>