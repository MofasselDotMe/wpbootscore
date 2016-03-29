<?php
/**
 * wpbootscore functions and definitions.
 *
 * @package wpbootscore
 */

if ( ! function_exists( 'wpbootscore_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 */
function wpbootscore_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 */
	load_theme_textdomain( 'wpbootscore', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'wpbootscore' ),
		'footer-links' => esc_html__( 'Footer Links', 'wpbootscore' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'wpbootscore_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'wpbootscore_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function wpbootscore_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'wpbootscore_content_width', 640 );
}
add_action( 'after_setup_theme', 'wpbootscore_content_width', 0 );

/**
 * Register widget area.
 *
 */
function wpbootscore_widgets_init() {

	function create_wpbootscore_widget($name, $id, $desc ){
		register_sidebar( array(
			'name'          => $name,
			'id'            => $id,
			'description'   => $desc,
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		) );
	}

	create_wpbootscore_widget('Main Sidebar', 'main', 'Default Sidebar');
	create_wpbootscore_widget('Left Sidebar', 'left', 'Sidebar widget will be displayed in left sidebar template only');
	create_wpbootscore_widget('Footer Left Widget', 'footer_left', 'Widget will be displayed in footer left widget area');
	create_wpbootscore_widget('Footer Middle Widget', 'footer_middle', 'Widget will be displayed in footer middle widget area');
	create_wpbootscore_widget('Footer Right Widget', 'footer_right', 'Widget will be displayed in footer right widget area');

}
add_action( 'widgets_init', 'wpbootscore_widgets_init' );



/**
 * Enqueue scripts and styles.
 */
function wpbootscore_scripts() {

	wp_enqueue_style('wpbootscore-bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
	wp_enqueue_style('wpbootscore-fontawesome', get_template_directory_uri() . '/css/font-awesome.min.css');

	wp_enqueue_style( 'wpbootscore-style', get_stylesheet_uri() );

	wp_enqueue_script( 'wpbootscore-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '3.3.5', true );

	wp_enqueue_script( 'wpbootscore-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	wp_enqueue_script( 'wpbootscore-custom', get_template_directory_uri() . '/js/custom.js', array('jquery'), '20160329', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'wpbootscore_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * wp_bootstrap_navwalker additions.
 */
require get_template_directory() . '/inc/wp_bootstrap_navwalker.php';



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

