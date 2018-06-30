<?php
/**
 * The template for displaying single exhibition.
 * 
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

            <?php while ( have_posts() ) : the_post(); ?>
                <div class="exhibition-container" style="background-image: url(<?php echo esc_url( CFS()->get('map') ); ?>)">
                <?php $site_permalink = get_the_permalink(); ?>
                    
                    <?php
                        $args = array( 
                            'post_type' => 'exhibition',
                            'posts_per_page' => 11, 
                        ); 
                        $exhibitions = new WP_Query( $args );
                    ?>
                    <?php if ( $exhibitions->have_posts() ) : ?>
                        <div class="exhibition-nav-container">
                            <a class="exhibition-nav-toggle"><img src= <?php echo esc_url( get_template_directory_uri() ) . "/assets/images/exhibition-menu.svg"; ?> /></a>
                            <nav class="exhibition-nav">  
                            
                                <?php while ( $exhibitions->have_posts() ) : $exhibitions->the_post(); ?>
                                    <?php if($site_permalink === get_permalink()) : ?>
                                        <a class="exhibition-icon exhibition-icon-active " href="<?php the_permalink(); ?>"><img src="<?php echo esc_url( CFS()->get('icon') ); ?>" /></a>   
                                    <?php else : ?>
                                        <a class="exhibition-icon" href="<?php the_permalink(); ?>"><img src="<?php echo esc_url( CFS()->get('icon') ); ?>" /></a>
                                    <?php endif; ?>
                                <?php endwhile; ?>
                                <?php wp_reset_postdata(); ?>
                            </nav>
                        </div>
                    <?php endif; ?>
                  

                    <div class="exhibition-description">
                        <a class="close-btn">&#10006;</a>
                        <h1><?php the_title(); ?></h1>
                        <p><?php echo CFS()->get('description') ?></p>
                        <hr>
                        <div class="exhibition-meta">
                            <?php echo CFS()->get('metadata') ?>
                            <div class="exhibition-social">
                                <?php 
                                    $twitter_title = "Colours of Food Security " . get_the_title();
                                $title = get_the_title();
                                $title = str_replace(" ", "_", $title);
                                $title = "Colours_of_Food_Security_" . $title 
                                
                                ?>
                                
                                <a class="exhibition-facebook" href="http://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fab fa-facebook-f"></i>Share it</a>
                                <a class="exhibition-twitter" href="http://twitter.com/share?text=<?php $twitter_title ?>&url=<?php get_the_permalink(); ?>" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fab fa-twitter"></i>Tweet</a>
                            </div>
                        </div>
                    </div>

                    <a class="exhibition-back" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                        Go Back
                        <img src= <?php echo esc_url( get_template_directory_uri() ) . "/assets/images/back-button.svg"; ?> />
                    </a>
                </div>
            <?php endwhile; // End of the loop. ?>

		</main><!-- #main -->

    </div><!-- #primary -->
    <?php get_footer(); ?>