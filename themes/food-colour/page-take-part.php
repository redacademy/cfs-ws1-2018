<?php
/**
* Template Name: take_part
*/
?>

<body id="primary" class="take-content-area">
  <?php get_header(); ?>
  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
      <div class="takebox" id="host">
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
            echo "<img src=" . $image . " class='icons'>";
            echo "<h2>" . $title . "</h2>";
            echo "<p class='town'>" . $title_text . "</p>";
            echo "</div>";
            echo "<a href='#next'><button class='iconbutton'>GOT IT, NEXT!</button></a>";
            echo "</div>";
            echo "<div class='take-text-wrapper'>";
            echo "<div class='icons-title'>";
            echo "<img src=" . $image_2 . " class='icons'>";
            echo "<h2 id='next'>" . $title_2 . "</h2>";
            echo "</div>";
            echo "<p>" . $title_2_text . "</p>";
            echo "<a href='#fill'><button class='iconbutton'>GOT IT, NEXT!</button></a>";
            echo "</div>";
            echo "<div class='take-text-wrapper'>";
            echo "<div class='icons-title'>";
            echo "<img src=" . $image_3 . " class='icons'>";
            echo "<h2 id='fill'>" . $title_3 . "</h2>";
            echo "</div>";
            echo "<p>" . $title_3_text . "</p>";
            echo "<a href='#done'<button class='iconbutton' id='formsmobile'>FILL THE FORM</button></a>";
            echo "</div>";
            echo "<div class='take-text-wrapper'>";
            echo "<div class='icons-title'>";
            echo "<img src=" . $image_4 . " class='icons'>";
            echo "<h2 id='done'>" . $title_4 . "</h2>";
            echo "</div>";
            echo "<p>" . $title_4_text . "</p>";
            echo "<a href='#finish'https://drive.google.com/drive/folders/1KR6gb1ulL1tunhDn1yw26WX_2GnKU7-I?usp=sharing'><button class='iconbutton'>DOWNLOAD</button><a/>";
            echo "</div>";
            echo "<div class='take-text-wrapper'>";
            echo "<div class='icons-title'>";
            echo "<img src=" . $image_5 . " class='icons'>";
            echo "<h2 id='finish'>" . $title_5 . "</h2>";
            echo "</div>";
            echo "<p>" . $title_5_text . "</p>";
            echo "</div>";
            echo "</div>";
            echo "<div class='bigbutton'>";
            echo "<button class='desktopbutton' id='forms'>REGISTER & DOWNLOAD</button>";
            echo "</div>"
            ?>
            <?php echo CFS()->get('form');?>


            <div class='cloud-container' id='cloud'>
              <h2>Download your files</h2>
            <img class='cloudbackground' src="<?php echo esc_url(get_bloginfo('template_directory')); ?>/assets/images/cloud.png"
            alt="cloud background" />
            <button class='downloadbutton'>ok</button>
            </div>
            
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
</div>

<div class="host-events" style="background-image: url(<?php echo esc_url(get_bloginfo('template_directory')); ?>/assets/images/event_map.png)">

<?php while ( have_posts() ) : the_post(); ?>

<?php
  $args = array( 'post_type' => 'event', 'posts_per_page' => 4,);
  $event = new WP_Query( $args );
  ?>

  <?php while ( $event->have_posts() ) : $event->the_post(); ?>
  <div class="event-container">
  <div class="inner">
  <?php the_title(); ?>
  <?php the_content(); ?>
  </div>
  </div>

<div class="event-date" style='background>
<p><?php echo CFS()->get('date');?></p>
<p><?php echo CFS()->get('country');?></p>
<p><?php echo CFS()->get('city');?></p>
</div>
<?php endwhile;
?>


<?php wp_reset_postdata(); ?>

<?php endwhile; // End of the loop. ?>     

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
    
  
    </div>
  </body>
