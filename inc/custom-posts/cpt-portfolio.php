<?php
/****************************************************
* Register portfolio post type
*****************************************************/
$labels = array(
	'name'                => _x( 'Portfolio', 'Post Type General Name', 'wpbootscore' ),
	'singular_name'       => _x( 'Portfolio', 'Post Type Singular Name', 'wpbootscore' ),
	'all_items'           => __( 'All Portfolios', 'wpbootscore' ),
	'view_item'           => __( 'View Portfolio', 'wpbootscore' ),
	'add_new_item'        => __( 'Add New Portfolio', 'wpbootscore' ),
	'add_new'             => __( 'Add New Portfolio ', 'wpbootscore' ),
	'edit_item'           => __( 'Edit Portfolio', 'wpbootscore' ),
	'update_item'         => __( 'Update Portfolio', 'wpbootscore' ),
	'search_items'        => __( 'Search Portfolios', 'wpbootscore' ),
	'not_found'           => __( 'Portfolio Not found', 'wpbootscore' ),
	'not_found_in_trash'  => __( 'Portfolio Not found in Trash', 'wpbootscore' ),
);
$args = array(
	'label'               => __( 'Portfolio', 'wpbootscore' ),
	'labels'              => $labels,
	'supports'            => array( 'title', 'editor', 'thumbnail' ),
	'public'              => true,
	'show_in_menu'        => true,
	'menu_position'       => 6,
	'menu_icon'           => 'dashicons-smiley',
	'can_export'          => true,
	'has_archive'         => true,
	'exclude_from_search' => false,
	'rewrite'             => array( 'slug' => 'portfolio' ),
);
register_post_type( 'portfolio', $args );