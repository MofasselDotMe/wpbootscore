<?php
/**
 * wpimtiaz functions and definitions.
 *
 * @package wpimtiaz
 */

if ( ! function_exists( 'wpimtiaz_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 */
function wpimtiaz_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 */
	load_theme_textdomain( 'wpimtiaz', get_template_directory() . '/languages' );

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
		'primary' => esc_html__( 'Primary', 'wpimtiaz' ),
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
	add_theme_support( 'custom-background', apply_filters( 'wpimtiaz_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'wpimtiaz_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function wpimtiaz_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'wpimtiaz_content_width', 640 );
}
add_action( 'after_setup_theme', 'wpimtiaz_content_width', 0 );

/**
 * Register widget area.
 *
 */
function wpimtiaz_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'wpimtiaz' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'wpimtiaz_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function wpimtiaz_scripts() {

	wp_enqueue_style('wpimtiaz-bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');

	wp_enqueue_style( 'wpimtiaz-style', get_stylesheet_uri() );

	wp_enqueue_script( 'wpimtiaz-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '3.3.5', true );

	wp_enqueue_script( 'wpimtiaz-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'wpimtiaz_scripts' );

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
