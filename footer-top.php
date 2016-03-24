<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package wpimtiaz
 */

?>

	<?php if ( is_active_sidebar( 'footer_left' ) || is_active_sidebar( 'footer_middle' ) || is_active_sidebar( 'footer_right' )  ) : ?>

	<div class="container">
		<div class="row">
		<?php if ( is_active_sidebar( 'footer_left' ) ) { ?>
			<div class="col-sm-4">
				<?php dynamic_sidebar( 'footer_left' ); ?>
			</div>
		<?php } ?>
			
		<?php if ( is_active_sidebar( 'footer_middle' ) ) { ?>
			<div class="col-sm-4">
				<?php dynamic_sidebar( 'footer_middle' ); ?>
			</div>
		<?php } ?>

		<?php if ( is_active_sidebar( 'footer_right' ) ) { ?>
			<div class="col-sm-4">
				<?php dynamic_sidebar( 'footer_right' ); ?>
			</div>
		<?php } ?>
		</div>
	</div>

	<?php endif; ?>
