<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package wpimtiaz
 */

if ( ! is_active_sidebar( 'main' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area col-sm-4" role="complementary">
	<?php dynamic_sidebar( 'main' ); ?>
</aside><!-- #secondary -->
