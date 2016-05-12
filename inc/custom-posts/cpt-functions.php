<?php
if ( !function_exists( 'wpbootscore_register_custom_post' ) ) : 

	// Function 'wpbootscore_register_custom_post' starts
	function wpbootscore_register_custom_post() {
	
		require get_template_directory().'/inc/custom-posts/cpt-slide.php';
		require get_template_directory().'/inc/custom-posts/cpt-service.php';
		require get_template_directory().'/inc/custom-posts/cpt-portfolio.php';
		
	
	} 
	// Function 'wpbootscore_register_custom_post' ends


	add_action( 'init', 'wpbootscore_register_custom_post' );
	// Hook into the 'init' action
	
	
endif;
// end of wpbootscore_register_custom_post function_exists