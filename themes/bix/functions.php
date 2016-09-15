<?php
/**
 * RED Starter Theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Bix_Theme
 */

if ( ! function_exists( 'bix_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function bix_setup() {
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html( 'Primary Menu' ),
	) );

	// Switch search form, comment form, and comments to output valid HTML5.
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

}
endif; // bix_setup
add_action( 'after_setup_theme', 'bix_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * @global int $content_width
 */
function bix_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'bix_content_width', 640 );
}
add_action( 'after_setup_theme', 'bix_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function bix_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html( 'Sidebar' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'bix_widgets_init' );

/**
 * Filter the stylesheet_uri to output the minified CSS file.
 */
function bix_minified_css( $stylesheet_uri, $stylesheet_dir_uri ) {
	if ( file_exists( get_template_directory() . '/build/css/style.min.css' ) ) {
		$stylesheet_uri = $stylesheet_dir_uri . '/build/css/style.min.css';
	}

	return $stylesheet_uri;
}
add_filter( 'stylesheet_uri', 'bix_minified_css', 10, 2 );


// /**
//  * Excerpt Adjustments
//  */
// function bix_wp_trim_excerpt( $text ) {
// 	$raw_excerpt = $text;
	
// 	if ( '' == $text ) {
// 		// retrieve the post content
// 		$text = get_the_content('');
		
// 		// delete all shortcode tags from the content
// 		$text = strip_shortcodes( $text );
		
// 		$text = apply_filters( 'the_content', $text );
// 		$text = str_replace( ']]>', ']]&gt;', $text );
		
// 		// indicate allowable tags
// 		$allowed_tags = '<p>,<a>,<em>,<strong>,<blockquote>,<cite>';
// 		$text = strip_tags( $text, $allowed_tags );
		
// 		// change to desired word count
// 		$excerpt_word_count = 35;
// 		$excerpt_length = apply_filters( 'excerpt_length', $excerpt_word_count );
		
// 		// create a custom "more" link
// 		$excerpt_end = '<span>[...]</span><p><a href="' . get_permalink() . '" class="btn btn-stories">Explore</a></p>'; // modify excerpt ending
// 		$excerpt_more = apply_filters( 'excerpt_more', ' ' . $excerpt_end );
		
// 		// add the elipsis and link to the end if the word count is longer than the excerpt
// 		$words = preg_split( "/[\n\r\t ]+/", $text, $excerpt_length + 1, PREG_SPLIT_NO_EMPTY );
		
// 		if ( count( $words ) > $excerpt_length ) {
// 			array_pop( $words );
// 			$text = implode( ' ', $words );
// 			$text = $text . $excerpt_more;
// 		} else {
// 			$text = implode( ' ', $words );
// 		}
// 	}
	
// 	return apply_filters( 'wp_trim_excerpt', $text, $raw_excerpt );
// }

// remove_filter( 'get_the_excerpt', 'wp_trim_excerpt' );
// add_filter( 'get_the_excerpt', 'bix_wp_trim_excerpt' );


/**
 * Enqueue scripts and styles.
 */
function bix_scripts() {
	wp_enqueue_style( 'bix-style', get_stylesheet_uri() );

	wp_enqueue_script( 'bix-skip-link-focus-fix', get_template_directory_uri() . '/build/js/skip-link-focus-fix.min.js', array(), '20130115', true );

	wp_enqueue_script( 'inhabitent-font-awesome', 'https://use.fontawesome.com/757d890296.js', array(), '4.6.3', true);

	wp_enqueue_script( 'jquery' );

	wp_enqueue_script( 'flickity-js', get_template_directory_uri() . '/build/js/flickity.pkgd.min.js', array('jquery'), false, true);

	wp_enqueue_script( 'main-js', get_template_directory_uri() . '/build/js/main.min.js', array('jquery'), false, true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'bix_scripts' );



/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';





