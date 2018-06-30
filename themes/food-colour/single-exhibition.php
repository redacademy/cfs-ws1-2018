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
                        <span class="close-btn">&#10006;</span>
                        <h1><?php the_title(); ?></h1>
                        <p><?php echo CFS()->get('description') ?></p>
                        <?php echo CFS()->get('metadata') ?>
                        <div class="exhibition-social">
                            <button>Twitter</button>
                            <button>Facebook</button>
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