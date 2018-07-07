<?php
/**
* Template Name: take part
*/
?>
<body id="primary" class="take-content-area">
    <?php get_header(); ?>
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
                <img class='takebackground' src="<?php echo esc_url(get_bloginfo('template_directory')); ?>/assets/images/take_part.png" alt="take background"/>
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <div class="container"
        <header class="taketext">
            
            
            
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
        </section>
        <div class="takebox">
                <hr align="left">
            <?php the_title ( '<h1 class="entry-title">', '</h1>' ); ?>
            <?php echo CFS()->get( 'action' );?>
        </div>
        
        
        
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
            echo "<div class='steps-container'>";
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
            echo "</div>";
            ?>

            <img class='sharebackground' src="<?php echo esc_url(get_bloginfo('template_directory')); ?>/assets/images/share_now.png" alt="sharebackground"/>
            <div class=sharebox>
                <div class=sharetext>
                <?php echo CFS()->get( 'sharetext' );?>
                </div>
                <?php echo CFS()->get( 'shareinfo' );?>
            </div>
    </div>
</div>
    <?php get_footer(); ?>
</body>
