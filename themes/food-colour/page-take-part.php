<?php
/**
* Template Name: Take part
*
* @package Food_Colour_Theme
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
          <?php get_template_part( 'template-parts/content-take' ); ?>
          <?php endwhile; ?>
          <?php the_posts_navigation(); ?>
          <?php else : ?>
          <?php get_template_part( 'template-parts/content', 'none' ); ?>
          <?php endif; ?>
          </section>
          <div>
          
          <h2 class="host-text"> Host an exhibition</h2>
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
  ?>
            <div class='steps-container'>
              <div class='take-text-wrapper'>
                <div class='icons-title'>
                <img src="<?php echo $image ?>" class='icons'>
                <h2><?php echo $title ?></h2>
                <p class='town'><?php echo $title_text ?></p>
                </div>
              <a href='#next'><button class='iconbutton'>GOT IT, NEXT!</button></a>
              </div>
            <div class='take-text-wrapper'>
              <div class='icons-title'>
                <img src="<?php echo $image_2 ?>" class='icons'>
                <h2 id='next'><?php echo $title_2?></h2>
              </div>
              <p><?php echo $title_2_text?></p>
              <a href='#fill'><button class='iconbutton'>GOT IT, NEXT!</button></a>
            </div>
            <div class='take-text-wrapper'>
              <div class='icons-title'>
                <img src="<?php echo $image_3 ?>" class='icons'>
                <h2 id='fill'><?php echo $title_3 ?></h2>
              </div>
              <p><?php echo $title_3_text ?></p>
              <a href='#done'<button class='iconbutton' id='formsmobile'>FILL THE FORM</button></a>
            </div>        
            <div class='take-text-wrapper'>
              <div class='icons-title'>
                <img src="<?php echo $image_4 ?>"class='icons'>
                <h2 id='done'> <?php echo $title_4 ?></h2>
              </div>
              <p><?php echo $title_4_text ?></p>
              <a target='_blank' id='finish' href='https://drive.google.com/drive/folders/1KR6gb1ulL1tunhDn1yw26WX_2GnKU7-I?usp=sharing'><button class='iconbutton'>DOWNLOAD</button></a>
            </div>
            <div class='take-text-wrapper'>
              <div class='icons-title'>
                <img src="<?php echo $image_5 ?>" class='icons'>
                <h2 id='finish'><?php echo $title_5 ?></h2>
              </div>
              <p><?php echo $title_5_text ?></p>
            </div>
            </div>
            <div class='bigbutton'>
              <button class='desktopbutton' id='forms'>REGISTER & DOWNLOAD</button>
            </div>
            <?php echo CFS()->get('form');?>

            <div class='cloud-container' id='cloud'>
              <h2>Download your files</h2>
            <img class='cloudbackground' src="<?php echo esc_url(get_bloginfo('template_directory')); ?>/assets/images/cloud.png"
            alt="cloud background" />
            <a target='_blank' href='https://drive.google.com/drive/folders/1KR6gb1ulL1tunhDn1yw26WX_2GnKU7-I?usp=sharing'><button class='downloadbutton'>ok</button></a>
            
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
  <div class="event-container" event-title="<?php the_title(); ?>" event-google="<?php echo CFS()->get('google_calendar'); ?>" event-facebook="<?php echo CFS()->get('facebook_event'); ?>" event-organization="<?php echo CFS()->get('organization'); ?>" event-branch="<?php echo CFS()->get('branch'); ?>" event-address="<?php echo CFS()->get('address'); ?>">
    <div class="inner">
    </div>

    <div class="event-date">
      <p><?php echo CFS()->get('date');?></p>
      <p><?php echo CFS()->get('country');?></p>
      <p><?php echo CFS()->get('city');?></p>
    </div>
  </div>


<?php endwhile;
?>

<div class="event-main-container">
</div>


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
