<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Register Testimonial Post Type
function testimonial_post_type() {

	$labels = array(
		'name'                  => 'Testimonials',
		'singular_name'         => 'Testimonial',
		'menu_name'             => 'Testimonials',
		'name_admin_bar'        => 'Testimonials',
		'archives'              => 'Testimonial Archives',
		'attributes'            => 'Testimonial Attributes',
		'parent_item_colon'     => 'Parent Item:',
		'all_items'             => 'Testimonials',
		'add_new_item'          => 'Add Testimonial',
		'add_new'               => 'Add Testimonial',
		'new_item'              => 'New Testimonial',
		'edit_item'             => 'Edit Testimonial',
		'update_item'           => 'Update Testimonial',
		'view_item'             => 'View Testimonial',
		'view_items'            => 'View Testimonials',
		'search_items'          => 'Search Testimonial',
		'not_found'             => 'Testimonial not found',
		'not_found_in_trash'    => 'Testimonial not found in Trash',
		'featured_image'        => 'Featured Testimonial Image',
		'set_featured_image'    => 'Set featured Testimonial image',
		'remove_featured_image' => 'Remove featured testimonial image',
		'use_featured_image'    => 'Use as featured testimonial image',
		'insert_into_item'      => 'Insert into testimonial',
		'uploaded_to_this_item' => 'Uploaded to this testimonial',
		'items_list'            => 'Testimonials list',
		'items_list_navigation' => 'Testimonials list navigation',
		'filter_items_list'     => 'Filter testimonials list',
	);
	$args = array(
		'label'                 => 'Testimonial Post Type',
		'description'           => 'Testimonial Description',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-admin-users',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'testimonial', $args );

}
add_action( 'init', 'testimonial_post_type', 0 );

// Register Programs Post Type
function programs_post_type() {

	$labels = array(
		'name'                  => _x( 'Programs', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Program', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Programs', 'text_domain' ),
		'name_admin_bar'        => __( 'Programs', 'text_domain' ),
		'archives'              => __( 'Program Archives', 'text_domain' ),
		'attributes'            => __( 'Program Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Programs', 'text_domain' ),
		'add_new_item'          => __( 'Add New Program', 'text_domain' ),
		'add_new'               => __( 'Add New Program', 'text_domain' ),
		'new_item'              => __( 'New Program', 'text_domain' ),
		'edit_item'             => __( 'Edit Program', 'text_domain' ),
		'update_item'           => __( 'Update Program', 'text_domain' ),
		'view_item'             => __( 'View Program', 'text_domain' ),
		'view_items'            => __( 'View Programs', 'text_domain' ),
		'search_items'          => __( 'Search Program', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into program', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Program', 'text_domain' ),
		'items_list'            => __( 'Programs list', 'text_domain' ),
		'items_list_navigation' => __( 'Programs list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter programs list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Program', 'text_domain' ),
		'description'           => __( 'Programs list', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail'),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-palmtree',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'programs', $args );

}
add_action( 'init', 'programs_post_type', 0 );