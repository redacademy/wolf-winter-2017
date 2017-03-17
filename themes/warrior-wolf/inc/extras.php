<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );

/**
 * Changing product archive title.
 */
function program_archive_title($title) {
	if(is_post_type_archive('programs')) {
		$title = 'My Programs';
	}
	return $title;
}
add_filter('get_the_archive_title', 'program_archive_title');

/**
 * Programs Archive page -- changing post order
 */
function program_posts( $query ) {
    if ( is_post_type_archive( 'programs' )){
		$query->set('orderby', 'date');
		$query->set('order', 'ASC' );
        return;
    }
}
add_action( 'pre_get_posts', 'program_posts' );