<?php
/****************************************************
* Register service post type
*****************************************************/
$labels = array(
	'name'                => _x( 'Service', 'Post Type General Name', 'wpbootscore' ),
	'singular_name'       => _x( 'Service', 'Post Type Singular Name', 'wpbootscore' ),
	'all_items'           => __( 'All Services', 'wpbootscore' ),
	'view_item'           => __( 'View Service', 'wpbootscore' ),
	'add_new_item'        => __( 'Add New Service', 'wpbootscore' ),
	'add_new'             => __( 'Add New Service ', 'wpbootscore' ),
	'edit_item'           => __( 'Edit Service', 'wpbootscore' ),
	'update_item'         => __( 'Update Service', 'wpbootscore' ),
	'search_items'        => __( 'Search Services', 'wpbootscore' ),
	'not_found'           => __( 'Service Not found', 'wpbootscore' ),
	'not_found_in_trash'  => __( 'Service Not found in Trash', 'wpbootscore' ),
);
$args = array(
	'label'               => __( 'Service', 'wpbootscore' ),
	'labels'              => $labels,
	'supports'            => array( 'title', 'editor' ),
	'public'              => true,
	'show_in_menu'        => true,
	'menu_position'       => 6,
	'menu_icon'           => 'dashicons-smiley',
	'can_export'          => true,
	'has_archive'         => true,
	'exclude_from_search' => false,
	'rewrite'             => array( 'slug' => 'service' ),
);
register_post_type( 'service', $args );