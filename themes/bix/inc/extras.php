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


/**
 * functions that changes "Posts" to "Stories"
 */
function change_post_menu_label() {
    global $menu, $submenu;

    $menu[5][0] = 'Stories';
    $submenu['edit.php'][5][0] = 'Stories';
    $submenu['edit.php'][10][0] = 'New Stories';
    $submenu['edit.php'][16][0] = 'Stories Tags';
    echo '';
}
add_action( 'admin_menu', 'change_post_menu_label' );

function change_post_object_label() {
    global $wp_post_types;

    $labels = &$wp_post_types['post']->labels;
    $labels->name = 'Stories';
    $labels->singular_name = 'Stories';
    $labels->add_new = 'New Stories';
    $labels->add_new_item = 'New Stories';
    $labels->edit_item = 'Edit Stories';
    $labels->new_item = 'New Stories';
    $labels->view_item = 'View Stories';
    $labels->search_items = 'Search Stories';
    $labels->not_found = 'Not found';
    $labels->not_found_in_trash = 'Not found in trash';
}
add_action( 'init', 'change_post_object_label' );