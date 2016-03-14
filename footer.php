<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @package wpimtiaz
 */

?>
	</div><!-- .row ends -->
	</div><!-- #content -->

	<footer id="colophon" class="site-footer container-fluid" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'wpimtiaz' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'wpimtiaz' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'wpimtiaz' ), 'wpimtiaz', '<a href="http:imtiaz.me" rel="designer">Imtiaz Khan</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>