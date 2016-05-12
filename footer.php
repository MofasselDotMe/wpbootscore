<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @package wpbootscore
 */

?>
	</div><!-- .row ends -->
	</div><!-- #content -->

	<footer id="colophon" class="site-footer container-fluid" role="contentinfo">
		

		<?php get_footer('top'); ?>

		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<div class="site-info">
						&copy; Copyright <?php echo date('Y'); ?> <a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
					</div><!-- .site-info -->
				</div>
				<div class="col-sm-6">
					<nav class="footer-links">
						<?php
				            wp_nav_menu( array(
				                'menu'              => 'footer-links',
				                'theme_location'    => 'footer-links',
				                'depth'             => 1,
				                'container'         => 'div',
				                'container_class'   => '',
				        		'container_id'      => '',
				                'menu_class'        => 'nav navbar-nav',
				                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
				                'walker'            => new wp_bootstrap_navwalker())
				            );
				        ?>
					</nav>
				</div>
			</div>
		</div>
		
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
