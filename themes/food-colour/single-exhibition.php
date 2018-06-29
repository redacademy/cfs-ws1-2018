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
                    <div class="menu">
                        <?php
                            $args = array( 
                                'post_type' => 'exhibition',
                                'posts_per_page' => 11, 
                            ); 
                            $exhibitions = new WP_Query( $args );
                        ?>
                        <?php if ( $exhibitions->have_posts() ) : ?>
                            <?php while ( $exhibitions->have_posts() ) : $exhibitions->the_post(); ?>
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                <!-- <a href="<?php the_permalink(); ?>"><img src="<?php echo esc_url( CFS()->get('icon') ); ?>" /></a> -->
                            <?php endwhile; ?>
                            <?php wp_reset_postdata(); ?>
                        <?php endif; ?>
                    </div>

                    <div class="exhibition-description">
                        <?php the_title(); ?>
                        <p><?php echo CFS()->get('description') ?></p>
                        <?php echo CFS()->get('metadata') ?>
                        <button>Twitter</button>
                        <button>Facebook</button>
                    </div>

                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Back</a>
                </div>
            <?php endwhile; // End of the loop. ?>

		</main><!-- #main -->

	</div><!-- #primary -->