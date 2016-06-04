<?php
/**
 * Template Name: Portfolio Template
 *
 * @package wpbootscore
 */

get_header(); ?>

	<style>
		#wrapper .mix{
			display: none;
		}
		#wrapper .mix img {
			width: 100%;
			height: auto;
		}
		.portfolio-filter li {
			float: left;
			list-style: none;
			cursor: pointer;
			padding: 15px;
		}
	</style>

	<div id="primary" class="content-area col-sm-12">
		<main id="main" class="site-main" role="main">

			<section id="portfolio">
			
			<?php $filters = get_terms('portfolio_filter'); ?>
			
				<ul class="portfolio-filter">

					<li class="filter" data-filter="all">Show All</li>

					<?php foreach ($filters as $filter) { ?>

					<li class="filter" data-filter=".<?php echo $filter->slug; ?>"><?php echo $filter->name; ?></li>

					<?php } ?>

				</ul>

				<div class="clearfix"></div>
<?php $args = array (
			'post_type' => 'portfolio',
			'posts_per_page' => -1,
			'orderby' => 'menu_order',
			'order' => 'ASC',
	);
	$portfolio_query = new WP_Query($args);
	
	if ( $portfolio_query->have_posts() ) :
?>
	<div id="wrapper" class="row">
	<?php while ( $portfolio_query->have_posts() ) : $portfolio_query->the_post(); ?>

		<div <?php post_class('mix portfolio-item col-sm-4'); ?> data-myorder="2">
			<?php the_post_thumbnail( 'medium' ); ?>
			
			<h3 class="portfolio-title"><?php the_title(); ?></h3>
		</div>

	<?php endwhile; ?>
		</div>

<?php endif; wp_reset_query(); ?>

	</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
