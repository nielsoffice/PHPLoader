<?php 

namespace PHPAutoloader\QTE\app;

Class GSPostType Extends \PHPAutoloader\QTE\Classes\GettingStarted {
    
  private $gs_post_type;	

public function __construct() {

    $this->$gs_post_type = add_action( 'init', [$this, 'create_gettingstarted_cpt' ], 0 );

}

  static protected function GettingStartedPostType() {

	$labels = array(
		'name' => _x( 'Getting Starteds', 'Post Type General Name', 'qualitytropicalexports' ),
		'singular_name' => _x( 'Getting Started', 'Post Type Singular Name', 'qualitytropicalexports' ),
		'menu_name' => _x( 'Getting Starteds', 'Admin Menu text', 'qualitytropicalexports' ),
		'name_admin_bar' => _x( 'Getting Started', 'Add New on Toolbar', 'qualitytropicalexports' ),
		'archives' => __( 'Getting Started Archives', 'qualitytropicalexports' ),
		'attributes' => __( 'Getting Started Attributes', 'qualitytropicalexports' ),
		'parent_item_colon' => __( 'Parent Getting Started:', 'qualitytropicalexports' ),
		'all_items' => __( 'All Getting Starteds', 'qualitytropicalexports' ),
		'add_new_item' => __( 'Add New Getting Started', 'qualitytropicalexports' ),
		'add_new' => __( 'Add New', 'qualitytropicalexports' ),
		'new_item' => __( 'New Getting Started', 'qualitytropicalexports' ),
		'edit_item' => __( 'Edit Getting Started', 'qualitytropicalexports' ),
		'update_item' => __( 'Update Getting Started', 'qualitytropicalexports' ),
		'view_item' => __( 'View Getting Started', 'qualitytropicalexports' ),
		'view_items' => __( 'View Getting Starteds', 'qualitytropicalexports' ),
		'search_items' => __( 'Search Getting Started', 'qualitytropicalexports' ),
		'not_found' => __( 'Not found', 'qualitytropicalexports' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'qualitytropicalexports' ),
		'featured_image' => __( 'Featured Image', 'qualitytropicalexports' ),
		'set_featured_image' => __( 'Set featured image', 'qualitytropicalexports' ),
		'remove_featured_image' => __( 'Remove featured image', 'qualitytropicalexports' ),
		'use_featured_image' => __( 'Use as featured image', 'qualitytropicalexports' ),
		'insert_into_item' => __( 'Insert into Getting Started', 'qualitytropicalexports' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Getting Started', 'qualitytropicalexports' ),
		'items_list' => __( 'Getting Starteds list', 'qualitytropicalexports' ),
		'items_list_navigation' => __( 'Getting Starteds list navigation', 'qualitytropicalexports' ),
		'filter_items_list' => __( 'Filter Getting Starteds list', 'qualitytropicalexports' ),
	);
	$args = array(
		'label' => __( 'Getting Started', 'qualitytropicalexports' ),
		'description' => __( 'Getting Started Order DFA', 'qualitytropicalexports' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-image-filter',
		'supports' => array('title', 'revisions', 'author', 'trackbacks'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => true,
		'exclude_from_search' => true,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'gettingstarted', $args );


  }

      
}
