<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Register Custom Post Type
function testimonial_post_type() {

	$labels = array(
		'name'                  => 'Testimonials',
		'singular_name'         => 'Testimonial',
		'menu_name'             => 'Testimonials',
		'name_admin_bar'        => 'Testimonials',
		'archives'              => 'Testimonial Archives',
		'attributes'            => 'Testimonial Attributes',
		'parent_item_colon'     => 'Parent Item:',
		'all_items'             => 'Testimonial Items',
		'add_new_item'          => 'Add New Testimonial',
		'add_new'               => 'Add New Testimonial',
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
		'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail', ),
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

