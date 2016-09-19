<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package Bix_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function bix_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'bix_body_classes' );

//Change the login logo to Inhabitent log
function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_template_directory_uri(); ?>/images/bix-logo-blue.png);
            padding-bottom: 30px;
            background-size: 206px 171px;
            height:171px;
            width:206px;
        }
       
    </style>
<?php }
add_action( 'login_head', 'my_login_logo' );

//Change inhabitent login link url to inhabitent home page
function bix_login_url(){
	return home_url();
}

add_filter('login_headerurl','bix_login_url');

//Change the inhabitent login logo hover to print out below
function bix_title_hover(){
	return 'The Bix Book';
}
add_filter('login_headertitle','bix_title_hover');


