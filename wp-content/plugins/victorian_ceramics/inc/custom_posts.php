<?php
add_action( 'init', 'vc_init_' );
function vc_init_() {
	$labels = array(
		'name'               => _x( 'Designs', 'post type general name', 'your-plugin-textdomain' ),
		'singular_name'      => _x( 'Design', 'post type singular name', 'your-plugin-textdomain' ),
		'menu_name'          => _x( 'Designs', 'admin menu', 'your-plugin-textdomain' ),
		'name_admin_bar'     => _x( 'Design', 'add new on admin bar', 'your-plugin-textdomain' ),
		'add_new'            => _x( 'Add New', 'design', 'your-plugin-textdomain' ),
		'add_new_item'       => __( 'Add New Design', 'your-plugin-textdomain' ),
		'new_item'           => __( 'New Design', 'your-plugin-textdomain' ),
		'edit_item'          => __( 'Edit Design', 'your-plugin-textdomain' ),
		'view_item'          => __( 'View Design', 'your-plugin-textdomain' ),
		'all_items'          => __( 'All Designs', 'your-plugin-textdomain' ),
		'search_items'       => __( 'Search Designs', 'your-plugin-textdomain' ),
		'parent_item_colon'  => __( 'Parent Designs:', 'your-plugin-textdomain' ),
		'not_found'          => __( 'No designs found.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'No designs found in Trash.', 'your-plugin-textdomain' )
	);

	$args = array(
		'labels'             => $labels,
                'description'        => __( 'Description.', 'your-plugin-textdomain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'menu_icon'			 => 'dashicons-forms',
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'design' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);
	register_post_type( 'design', $args );
}
?>