<?php $args = array (
					'post_type' => 'slide',
					'posts_per_page' => -1,
					'slider_cat' => '',
					'orderby' => 'menu_order',
					'order' => 'ASC',
			);
			$slider_query = new WP_Query($args);
			
			if ( $slider_query->have_posts() ) :
		?>

			<div id="myCarousel" class="carousel slide" data-ride="carousel">
			  	<!-- Indicators -->
			  	<ol class="carousel-indicators">
			  	<?php while ( $slider_query->have_posts() ) : $slider_query->the_post(); ?>
			    	<li data-target="#myCarousel" data-slide-to="<?php echo $slider_query->current_post; ?>"></li>
			    	<?php endwhile; ?>
			  	</ol>
			  	<div class="carousel-inner" role="listbox">

				<?php while ( $slider_query->have_posts() ) : $slider_query->the_post(); ?>

	<?php 
		$slide_url = get_post_meta($post->ID, 'wpbs_text', true);
	?>

			    	<div class="item">
			    	<?php if( $slide_url ) : ?>
			    		<a href="<?php echo esc_url($slide_url); ?>">
			      		<?php the_post_thumbnail( 'full' ); ?>
			      		</a>
			      	<?php else : ?>
						<?php the_post_thumbnail( 'full' ); ?>
			      	<?php endif; ?>
			      		<div class="container">
				        	<div class="carousel-caption">
				          		<h1><?php the_title(); ?></h1>
				          		<?php the_content(); ?>
				          		<p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
				        	</div>
			      		</div>
			    	</div>

			    <?php endwhile; ?>

			  	</div>
			  	<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			   		<span class="glyphicon glyphicon-chevron-left"></span>
			    	<span class="sr-only">Previous</span>
			  	</a>
			  	<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			    	<span class="glyphicon glyphicon-chevron-right"></span>
			    	<span class="sr-only">Next</span>
			  	</a>
			</div> <!-- /.carousel -->

		<?php endif; wp_reset_query(); ?>