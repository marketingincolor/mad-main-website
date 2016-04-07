<?php
/**
 * Team post type setup
 */
 
/** Register meta box */
$team_details = new WPAlchemy_MetaBox(array(
	'id' => '_team_meta',
	'title' => 'Team Details',
	'types' => array('team'),
	'priority' => 'high',
	'template' => TEMPLATEPATH . '/inc/team_details_meta.php',
));

/** Register post type */
function team_register() {
	$team_labels = array(
		'name' => _x('Team', 'post type general name'),
		'singular_name' => _x('team', 'post type singular name'),
		'add_new' => _x('Add New', 'team item'),
		'add_new_item' => __('Add New Team Profile'),
		'edit_item' => __('Edit Team Profile'),
		'new_item' => __('New Team Profile'),
		'view_item' => __('View Team Profile'),
		'search_items' => __('Search Team Profiles'),
		'not_found' =>  __('No profiles found'),
		'not_found_in_trash' => __('No profiles found in Trash'),
		'parent_item_colon' => ''
	);
	$team_args = array(
		'labels' => $team_labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'menu_icon' => get_stylesheet_directory_uri() . '/images/User-16x16.png',
		'rewrite' => array( 'slug' => 'team', 'with_front' => false ),
		'has_archive' => 'team',
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array('title','editor','thumbnail','custom-fields')
	); 
	register_post_type( 'team' , $team_args );
}
add_action('init', 'team_register');