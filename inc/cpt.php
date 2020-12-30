<?php
/**
 * CUSTOM POST TYPES
 *
 *
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;


//event custom post type

// Register Custom Post Type event
// Post Type Key: event

function create_event_cpt() {

  $labels = array(
    'name' => __( 'Events', 'Post Type General Name', 'textdomain' ),
    'singular_name' => __( 'Event', 'Post Type Singular Name', 'textdomain' ),
    'menu_name' => __( 'Event', 'textdomain' ),
    'name_admin_bar' => __( 'Event', 'textdomain' ),
    'archives' => __( 'Event Archives', 'textdomain' ),
    'attributes' => __( 'Event Attributes', 'textdomain' ),
    'parent_item_colon' => __( 'Event:', 'textdomain' ),
    'all_items' => __( 'All Events', 'textdomain' ),
    'add_new_item' => __( 'Add New Event', 'textdomain' ),
    'add_new' => __( 'Add New', 'textdomain' ),
    'new_item' => __( 'New Event', 'textdomain' ),
    'edit_item' => __( 'Edit Event', 'textdomain' ),
    'update_item' => __( 'Update Event', 'textdomain' ),
    'view_item' => __( 'View Event', 'textdomain' ),
    'view_items' => __( 'View Events', 'textdomain' ),
    'search_items' => __( 'Search Events', 'textdomain' ),
    'not_found' => __( 'Not found', 'textdomain' ),
    'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
    'featured_image' => __( 'Featured Image', 'textdomain' ),
    'set_featured_image' => __( 'Set featured image', 'textdomain' ),
    'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
    'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
    'insert_into_item' => __( 'Insert into event', 'textdomain' ),
    'uploaded_to_this_item' => __( 'Uploaded to this event', 'textdomain' ),
    'items_list' => __( 'Event list', 'textdomain' ),
    'items_list_navigation' => __( 'Event list navigation', 'textdomain' ),
    'filter_items_list' => __( 'Filter Event list', 'textdomain' ),
  );
  $args = array(
    'label' => __( 'event', 'textdomain' ),
    'description' => __( '', 'textdomain' ),
    'labels' => $labels,
    'supports' => array('title', 'editor', 'revisions', 'author', 'trackbacks', 'custom-fields', 'thumbnail',),
    'taxonomies' => array('category', 'post_tag'),
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'menu_position' => 5,
    'show_in_admin_bar' => true,
    'show_in_nav_menus' => true,
    'can_export' => true,
    'has_archive' => true,
    'hierarchical' => false,
    'exclude_from_search' => false,
    'show_in_rest' => true,
    'publicly_queryable' => true,
    'capability_type' => 'post',
    'menu_icon' => 'dashicons-calendar-alt',
  );
  register_post_type( 'event', $args );
  
  // flush rewrite rules because we changed the permalink structure
  global $wp_rewrite;
  $wp_rewrite->flush_rules();
}
add_action( 'init', 'create_event_cpt', 0 );


//person custom post type

// Register Custom Post Type person
// Post Type Key: person

function create_person_cpt() {

  $labels = array(
    'name' => __( 'Persons', 'Post Type General Name', 'textdomain' ),
    'singular_name' => __( 'Person', 'Post Type Singular Name', 'textdomain' ),
    'menu_name' => __( 'Person', 'textdomain' ),
    'name_admin_bar' => __( 'Person', 'textdomain' ),
    'archives' => __( 'Person Archives', 'textdomain' ),
    'attributes' => __( 'Person Attributes', 'textdomain' ),
    'parent_item_colon' => __( 'Person:', 'textdomain' ),
    'all_items' => __( 'All Persons', 'textdomain' ),
    'add_new_item' => __( 'Add New Person', 'textdomain' ),
    'add_new' => __( 'Add New', 'textdomain' ),
    'new_item' => __( 'New Person', 'textdomain' ),
    'edit_item' => __( 'Edit Person', 'textdomain' ),
    'update_item' => __( 'Update Person', 'textdomain' ),
    'view_item' => __( 'View Person', 'textdomain' ),
    'view_items' => __( 'View Persons', 'textdomain' ),
    'search_items' => __( 'Search Persons', 'textdomain' ),
    'not_found' => __( 'Not found', 'textdomain' ),
    'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
    'featured_image' => __( 'Featured Image', 'textdomain' ),
    'set_featured_image' => __( 'Set featured image', 'textdomain' ),
    'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
    'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
    'insert_into_item' => __( 'Insert into person', 'textdomain' ),
    'uploaded_to_this_item' => __( 'Uploaded to this person', 'textdomain' ),
    'items_list' => __( 'Person list', 'textdomain' ),
    'items_list_navigation' => __( 'Person list navigation', 'textdomain' ),
    'filter_items_list' => __( 'Filter Person list', 'textdomain' ),
  );
  $args = array(
    'label' => __( 'person', 'textdomain' ),
    'description' => __( '', 'textdomain' ),
    'labels' => $labels,
    'supports' => array('title', 'editor', 'revisions', 'author', 'trackbacks', 'custom-fields', 'thumbnail',),
    'taxonomies' => array('category', 'post_tag'),
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'menu_position' => 5,
    'show_in_admin_bar' => true,
    'show_in_nav_menus' => true,
    'can_export' => true,
    'has_archive' => true,
    'hierarchical' => false,
    'exclude_from_search' => false,
    'show_in_rest' => true,
    'publicly_queryable' => true,
    'capability_type' => 'post',
    'menu_icon' => 'dashicons-universal-access-alt',
  );
  register_post_type( 'person', $args );
  
  // flush rewrite rules because we changed the permalink structure
  global $wp_rewrite;
  $wp_rewrite->flush_rules();
}
add_action( 'init', 'create_person_cpt', 0 );


//place custom post type

// Register Custom Post Type place
// Post Type Key: place

function create_place_cpt() {

  $labels = array(
    'name' => __( 'Places', 'Post Type General Name', 'textdomain' ),
    'singular_name' => __( 'Place', 'Post Type Singular Name', 'textdomain' ),
    'menu_name' => __( 'Place', 'textdomain' ),
    'name_admin_bar' => __( 'Place', 'textdomain' ),
    'archives' => __( 'Place Archives', 'textdomain' ),
    'attributes' => __( 'Place Attributes', 'textdomain' ),
    'parent_item_colon' => __( 'Place:', 'textdomain' ),
    'all_items' => __( 'All Places', 'textdomain' ),
    'add_new_item' => __( 'Add New Place', 'textdomain' ),
    'add_new' => __( 'Add New', 'textdomain' ),
    'new_item' => __( 'New Place', 'textdomain' ),
    'edit_item' => __( 'Edit Place', 'textdomain' ),
    'update_item' => __( 'Update Place', 'textdomain' ),
    'view_item' => __( 'View Place', 'textdomain' ),
    'view_items' => __( 'View Places', 'textdomain' ),
    'search_items' => __( 'Search Places', 'textdomain' ),
    'not_found' => __( 'Not found', 'textdomain' ),
    'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
    'featured_image' => __( 'Featured Image', 'textdomain' ),
    'set_featured_image' => __( 'Set featured image', 'textdomain' ),
    'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
    'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
    'insert_into_item' => __( 'Insert into place', 'textdomain' ),
    'uploaded_to_this_item' => __( 'Uploaded to this place', 'textdomain' ),
    'items_list' => __( 'Place list', 'textdomain' ),
    'items_list_navigation' => __( 'Place list navigation', 'textdomain' ),
    'filter_items_list' => __( 'Filter Place list', 'textdomain' ),
  );
  $args = array(
    'label' => __( 'place', 'textdomain' ),
    'description' => __( '', 'textdomain' ),
    'labels' => $labels,
    'menu_icon' => '',
    'supports' => array('title', 'editor', 'revisions', 'author', 'trackbacks', 'custom-fields', 'thumbnail',),
    'taxonomies' => array('category', 'post_tag'),
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'menu_position' => 5,
    'show_in_admin_bar' => true,
    'show_in_nav_menus' => true,
    'can_export' => true,
    'has_archive' => true,
    'hierarchical' => false,
    'exclude_from_search' => false,
    'show_in_rest' => true,
    'publicly_queryable' => true,
    'capability_type' => 'post',
    'menu_icon' => 'dashicons-admin-site-alt2',
  );
  register_post_type( 'place', $args );
  
  // flush rewrite rules because we changed the permalink structure
  global $wp_rewrite;
  $wp_rewrite->flush_rules();
}
add_action( 'init', 'create_place_cpt', 0 );


//recipe custom post type

// Register Custom Post Type recipe
// Post Type Key: recipe

function create_recipe_cpt() {

  $labels = array(
    'name' => __( 'Recipes', 'Post Type General Name', 'textdomain' ),
    'singular_name' => __( 'Recipe', 'Post Type Singular Name', 'textdomain' ),
    'menu_name' => __( 'Recipe', 'textdomain' ),
    'name_admin_bar' => __( 'Recipe', 'textdomain' ),
    'archives' => __( 'Recipe Archives', 'textdomain' ),
    'attributes' => __( 'Recipe Attributes', 'textdomain' ),
    'parent_item_colon' => __( 'Recipe:', 'textdomain' ),
    'all_items' => __( 'All Recipes', 'textdomain' ),
    'add_new_item' => __( 'Add New Recipe', 'textdomain' ),
    'add_new' => __( 'Add New', 'textdomain' ),
    'new_item' => __( 'New Recipe', 'textdomain' ),
    'edit_item' => __( 'Edit Recipe', 'textdomain' ),
    'update_item' => __( 'Update Recipe', 'textdomain' ),
    'view_item' => __( 'View Recipe', 'textdomain' ),
    'view_items' => __( 'View Recipes', 'textdomain' ),
    'search_items' => __( 'Search Recipes', 'textdomain' ),
    'not_found' => __( 'Not found', 'textdomain' ),
    'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
    'featured_image' => __( 'Featured Image', 'textdomain' ),
    'set_featured_image' => __( 'Set featured image', 'textdomain' ),
    'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
    'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
    'insert_into_item' => __( 'Insert into recipe', 'textdomain' ),
    'uploaded_to_this_item' => __( 'Uploaded to this recipe', 'textdomain' ),
    'items_list' => __( 'Recipe list', 'textdomain' ),
    'items_list_navigation' => __( 'Recipe list navigation', 'textdomain' ),
    'filter_items_list' => __( 'Filter Recipe list', 'textdomain' ),
  );
  $args = array(
    'label' => __( 'recipe', 'textdomain' ),
    'description' => __( '', 'textdomain' ),
    'labels' => $labels,
    'menu_icon' => '',
    'supports' => array('title', 'editor', 'revisions', 'author', 'trackbacks', 'custom-fields', 'thumbnail',),
    'taxonomies' => array('category', 'post_tag'),
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'menu_position' => 5,
    'show_in_admin_bar' => true,
    'show_in_nav_menus' => true,
    'can_export' => true,
    'has_archive' => true,
    'hierarchical' => false,
    'exclude_from_search' => false,
    'show_in_rest' => true,
    'publicly_queryable' => true,
    'capability_type' => 'post',
    'menu_icon' => 'dashicons-carrot',
  );
  register_post_type( 'recipe', $args );
  
  // flush rewrite rules because we changed the permalink structure
  global $wp_rewrite;
  $wp_rewrite->flush_rules();
}
add_action( 'init', 'create_recipe_cpt', 0 );