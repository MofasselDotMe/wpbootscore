<?php
/****************************************************
* Register slide post type
*****************************************************/
$labels = array(
	'name'                => _x( 'Slider', 'Post Type General Name', 'wpbootscore' ),
	'singular_name'       => _x( 'Slide', 'Post Type Singular Name', 'wpbootscore' ),
	'all_items'           => __( 'All Slides', 'wpbootscore' ),
	'view_item'           => __( 'View Slide', 'wpbootscore' ),
	'add_new_item'        => __( 'Add New Slide', 'wpbootscore' ),
	'add_new'             => __( 'Add New Slide ', 'wpbootscore' ),
	'edit_item'           => __( 'Edit Slide', 'wpbootscore' ),
	'update_item'         => __( 'Update Slide', 'wpbootscore' ),
	'search_items'        => __( 'Search Slides', 'wpbootscore' ),
	'not_found'           => __( 'Slide Not found', 'wpbootscore' ),
	'not_found_in_trash'  => __( 'Slide Not found in Trash', 'wpbootscore' ),
);
$args = array(
	'label'               => __( 'Slide', 'wpbootscore' ),
	'labels'              => $labels,
	'supports'            => array( 'title', 'editor', 'thumbnail' ),
	'public'              => true,
	'show_in_menu'        => true,
	'menu_position'       => 6,
	'menu_icon'           => 'dashicons-slides',
	'can_export'          => true,
	'has_archive'         => true,
	'exclude_from_search' => false,
	'rewrite'             => array( 'slug' => 'slide' ),
);
register_post_type( 'slide', $args );

/****************************************************
* Register custom taxonomy for faqs post type
*****************************************************/

$labels = array(
	'name'					=> _x( 'Categories', 'Taxonomy General Name', 'wpbootscore' ),
	'singular_name'			=> _x( 'Category', 'Taxonomy Singular Name', 'wpbootscore' ),
	'add_new_item'			=> __( 'Add New Category', 'wpbootscore' ),
	'edit_item'				=> __( 'Edit Category', 'wpbootscore' ),
	'update_item'			=> __( 'Update Category', 'wpbootscore' ),
	'add_or_remove_items'	=> __( 'Add or remove Category', 'wpbootscore' ),
);

$args = array(
	'labels'            => $labels,
	'public'            => true,
	'hierarchical'      => true,
	'rewrite'             => array( 'slug' => 'slider_cat' ),
);

register_taxonomy( 'slider_cat', array( 'slide' ), $args );