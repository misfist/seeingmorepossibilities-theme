<?php
/**
 * Seeing More Possibilities functions and definitions
 *
 * @package Seeing More Possibilities
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'smp_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function smp_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Seeing More Possibilities, use a find and replace
	 * to change 'smp' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'smp', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'smp' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'smp_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
    
    
}
endif; // smp_setup
add_action( 'after_setup_theme', 'smp_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function smp_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'smp' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
    
    register_sidebar( array(
		'name'          => __( 'Header Widget', 'smp' ),
		'id'            => 'site-contact',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="site-contact widget %2$s"><div class="vcard">',
		'after_widget'  => '</div></aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Social Links', 'smp' ),
		'id'            => 'social-links',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="social-links widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Archive Links', 'smp' ),
		'id'            => 'archive-links',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="archives-widget widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Footer 1', 'smp' ),
		'id'            => 'footer-1',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="site-copyright widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Footer 2', 'smp' ),
		'id'            => 'footer-2',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="site-credits widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'smp_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function smp_scripts() {
	
	wp_enqueue_style( 'smp-style', get_template_directory_uri() . '/css/style.css', array( 'dashicons' ) );

	wp_enqueue_script( 'smp-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'smp-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'smp_scripts' );

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
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';


/****************************
 * Custom filters & functions
 ****************************/

// Allow shortcodes to be used in widgets
add_filter('widget_text', 'do_shortcode');

// Shortcode to display current year
function display_current_year_shortcode() {

	return date('Y');
}
add_shortcode( 'year', 'display_current_year_shortcode' );

// Shortcode to display site name
function display_site_name_shortcode() {

	return get_bloginfo('name');
}
add_shortcode( 'site-name', 'display_site_name_shortcode' );


/************* ADD PAGE SLUG TO MENU ITEMS *****************/

function add_slug_to_nav_class( $classes, $item ) {
  if( 'page' == $item->object ){
    $page = get_post( $item->object_id );
    $classes[] = $page->post_name;
  } return
  $classes;
}
add_filter( 'nav_menu_css_class', 'add_slug_to_nav_class', 10, 2 );

// Remove Category: from category heading

add_filter( 'get_the_archive_title', function ($title) {

    if ( is_category() ) {

            $title = single_cat_title( '', false );

        } elseif ( is_tag() ) {

            $title = single_tag_title( '', false );

        } elseif ( is_author() ) {

            $title = '<span class="vcard">' . get_the_author() . '</span>' ;

        }

    return $title;

});


/************* ADD SLUG TO BODY CLASS *****************/

// Add specific CSS class by filter
add_filter('body_class','add_slug_to_body_class');

function add_slug_to_body_class($classes) {
	// add 'class-name' to the $classes array
	global $post; 
	$post_slug_class = $post->post_name; 
	$classes[] = $post_slug_class . ' page-' . $post_slug_class;

	return $classes;
}

/************* ADD TAXONOMY TO BODY CLASS *****************/

add_filter('body_class','add_category_to_body_class');

function add_category_to_body_class($classes = '') {
	global $post;
	if( is_singular('post') ) {
		$category = get_the_category();
		var_dump($category[0]->slug);
		$classes[] = 'blog-post category-' . $category[0]->slug; 
	} elseif( is_singular('event') ) {
		$terms = get_the_terms( $post->ID, 'event-categories' );
		foreach($terms as $term) {
			$classes[] = 'event-type-' . $term->slug;
		}
	}
	return $classes;
}


