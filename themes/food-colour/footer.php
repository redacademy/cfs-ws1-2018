<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

</div>
<!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">
  <div class="footer-info-container">
    <div class="footer-text">

			<div class="logo-container">
				<div class="logo-top">
				<p class="info">Created by</p>
				<img src="<?php echo esc_url(get_bloginfo('template_directory')); ?>/assets/images/luge_logo.jpeg" alt="luge logo" class="logo"
					/>
				</div>
	
				<div class=logo-bottom>
					<p class="info">Partners</p>
					<div class="logo-bottom-images">
						<img src="<?php echo esc_url(get_bloginfo('template_directory')); ?>/assets/images/liu_logo.jpg" alt="liu logo" class="logos"
						/>
						<img src="<?php echo esc_url(get_bloginfo('template_directory')); ?>/assets/images/isgp_logo.jpg" alt="isgp logo" class="logos"
						/>
						<img src="<?php echo esc_url(get_bloginfo('template_directory')); ?>/assets/images/ires_logo.jpg" alt="ires logo" class="logos"
						/>
					</div>
				</div>
			</div>
				
				<nav id="site-navigation" class="footer-navigation" role="navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html( 'Primary Menu' ); ?></button>
					<div class=links-container>
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
						<div class="share-host">
							<a href="#host">Host</a>
							<a href="#share">Share</a>
						</div>

					</div>
				</nav><!-- #site-navigation -->
				
				<div class="socials">
					<div class="social-media-icons">
						<i class="fab fa-facebook-square" aria-hidden="true"></i>
						<i class="fab fa-youtube-square"></i>
						<i class="fab fa-twitter-square" aria-hidden="true"></i>
						<i class="fab fa-linkedin"></i>
					</div>
					<h3>Liu institute For Global Issues</h3>
					<p class="address">
						6476 NW Marine Drive
						<br>
						Vancouver, BC, Canada, V6T 1Z2
						<br>
						Tel 604 822 1558
						<br>
						Fax 604 822 6966
					</p>
					</div>
					
				</div>
			</div>
			
			<div class="mobile-footer">
				<p class="copy">All copyrights reserved to <span class="redtext"> LUGE - 2018 </span></p>
				<div class="design">
					<p>Designed by <span class="redtext">RED Academy Students</span></p>
					<img src="<?php echo esc_url(get_bloginfo('template_directory')); ?>/assets/images/red_logo.png" alt="red logo" class="mobile-footer__image"/>
				</div>
			</div>
		</footer>
<!-- #colophon -->
</div>
<!-- .site-info -->
</div>
<!-- #page -->

<?php wp_footer(); ?>
</body>

</html>