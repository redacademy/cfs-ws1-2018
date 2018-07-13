<?php
/**
* Template Name: take_part
*/
?>

<body id="primary" class="take-content-area">
  <?php get_header(); ?>
  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
      <div class="takebox">
        <img class='takebackground' src="<?php echo esc_url(get_bloginfo('template_directory')); ?>/assets/images/take_part.png"
          alt="take background" />
        <div class="bannertext">
        <h1><?php the_title(); ?></h1>
          <?php echo CFS()->get( 'action' );?>
        </div>
      </div>
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="container" <header class="taketext">
        

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
            echo "<section class='dl'>";
            echo "<a href='https://drive.google.com/drive/folders/1KR6gb1ulL1tunhDn1yw26WX_2GnKU7-I?usp=sharing'><button class='iconbutton'>DOWNLOAD</button><a/>";
            echo "</section>";
            echo "</div>";
            echo "<div class='take-text-wrapper'>";
            echo "<div class='icons-title'>";
            echo "<img src=" . $image_5 . ">";
            echo "<h2>" . $title_5 . "</h2>";
            echo "</div>";
            echo "<p>" . $title_5_text . "</p>";
            echo "</div>";
            echo "</div>";
            echo "<div class='bigbutton' id='host'>";
            echo "<button class='desktopbutton' id='forms'>REGISTER & DOWNLOAD</button>";
            echo "</div>"
            ?>
            <?php echo CFS()->get('form');?>
            
          <div class='share-container' id='share'>
            <img class='mobile-image' src="<?php echo esc_url(get_bloginfo('template_directory')); ?>/assets/images/share_now.png" alt="sharebackground"
            />
            <img class='desktop-image' src="<?php echo esc_url(get_bloginfo('template_directory')); ?>/assets/images/notes.png" alt="sharebackground"
            />
            <div class=share-box>
              <div class=share-text>
                <?php echo CFS()->get( 'sharetext' );?>
              </div>
              <?php echo CFS()->get( 'shareinfo' );?>
            </div>
          </div>
          
          
          
          
          
          <div class='foodcolour'>
            <img class='colourbackground' src="<?php echo esc_url(get_bloginfo('template_directory')); ?>/assets/images/colorbg.png"
            alt='colour background' />
            <div class='foodhashtag'>
              <h2>#ColourFoodSecurity</h2>
            </div>
          </div>
        </div>
      </div>
      <?php get_footer(); ?>
    </body>


    <!-- <?php while ( have_posts() ) : the_post(); ?>

<?php $site_permalink = get_the_permalink(); ?>
  
  <?php
      $args = array( 
          'post_type' => 'event',
          'posts_per_page' => 4, 
      ); 
      $events = new WP_Query( $args );
  ?>
  <div class="event-description">
      <h1><?php the_title(); ?></h1>
      <p><?php echo CFS()->get('organization') ?></p>
      <p><?php echo CFS()->get('address') ?></p>
      <p><?php echo CFS()->get('title') ?></p>
      <p><?php echo CFS()->get('date') ?></p>
      <hr>
      </div>
  </div>


<?php endwhile; // End of the loop. ?>
     -->