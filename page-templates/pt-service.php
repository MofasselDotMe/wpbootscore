<?php
/**
 * Template Name: Service Template
 *
 * @package wpbootscore
 */

get_header(); ?>

	<div id="primary" class="content-area col-sm-12">
		<main id="main" class="site-main" role="main">

<?php $args = array (
			'post_type' => 'service',
			'posts_per_page' => 6,
			'orderby' => 'menu_order',
			'order' => 'ASC',
	);

	$service_query = new WP_Query($args);
	
	if ( $service_query->have_posts() ) :
?>
	<section style="margin-top: 60px;" id="service">
			<div class="row">


	<?php while ( $service_query->have_posts() ) : $service_query->the_post(); ?>

		<?php $service_icon = get_post_meta($post->ID, 'wpbs_service_icon', true); ?>

		<article class="service-item col-sm-4 text-center">
			<div class="service-icon">
				<i class="fa fa-<?php echo $service_icon; ?> fa-3x" aria-hidden="true"></i>

			</div>
			<h2 class="service-title"><?php the_title(); ?></h2>
			<div class="service-desc">
				<?php the_content(); ?>
			</div>
		</article>

	<?php endwhile; ?>

			</div>

		</section>
<?php endif; wp_reset_query(); ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php
get_footer();
