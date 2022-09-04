<?php
/**
 * UnderStrap functions and definitions
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// UnderStrap's includes directory.
$understrap_inc_dir = get_template_directory() . '/inc';

// Array of files to include.
$understrap_includes = array(
	'/theme-settings.php',                  // Initialize theme default settings.
	'/setup.php',                           // Theme setup and custom theme supports.
	'/widgets.php',                         // Register widget area.
	'/enqueue.php',                         // Enqueue scripts and styles.
	'/template-tags.php',                   // Custom template tags for this theme.
	'/pagination.php',                      // Custom pagination for this theme.
	'/hooks.php',                           // Custom hooks.
	'/extras.php',                          // Custom functions that act independently of the theme templates.
	'/customizer.php',                      // Customizer additions.
	'/custom-comments.php',                 // Custom Comments file.
	'/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker. Trying to get deeper navigation? Check out: https://github.com/understrap/understrap/issues/567.
	'/editor.php',                          // Load Editor functions.
	'/cpt.php',                          // Load custom post types
	'/acf.php',                          // Load custom post types
	'/deprecated.php',                      // Load deprecated functions.
);

// Load WooCommerce functions if WooCommerce is activated.
if ( class_exists( 'WooCommerce' ) ) {
	$understrap_includes[] = '/woocommerce.php';
}

// Load Jetpack compatibility file if Jetpack is activiated.
if ( class_exists( 'Jetpack' ) ) {
	$understrap_includes[] = '/jetpack.php';
}

// Include files.
foreach ( $understrap_includes as $file ) {
	require_once $understrap_inc_dir . $file;
}


//ACF MAPS API

function my_acf_init() {
    acf_update_setting('google_api_key', GMAP_KEY);//key in wp-config
}
add_action('acf/init', 'my_acf_init');

//episodes was a custom post type added by a previous theme
function remove_admin_menu_items() {
	if( current_user_can( 'manage_options' ) ) { }
	    else {  
	  $remove_menu_items = array(__('Media'),__('Tools'),__('Posts'),__('Contact'), __('Comments'),__('Pages'), __('Profile'));
	  global $menu;
	  end ($menu);
	  while (prev($menu)){
	    $item = explode(' ',$menu[key($menu)][0]);
	    if(in_array($item[0] != NULL?$item[0]:"" , $remove_menu_items)){
	      unset($menu[key($menu)]);
	    }
	  }
	}
}
add_action('admin_menu', 'remove_admin_menu_items');
 
function remove_menus(){
	if( current_user_can( 'manage_options' ) ) { }
	    else {      
	  remove_menu_page( 'index.php' );                  //Dashboard
	  remove_menu_page( 'jetpack' );                    //Jetpack* 
	  remove_menu_page( 'options-general.php' );        //Settings
	  remove_menu_page( 'vc-welcome' );        //Settings
	}
}
add_action( 'admin_menu', 'remove_menus', 999 );


//redirects from dashboard to edit post list 
function remove_the_dashboard () {
if (current_user_can('level_10')) {
    return;
    }else {
    global $menu, $submenu, $user_ID;
    $the_user = new WP_User($user_ID);
    reset($menu); $page = key($menu);
    while ((__('Dashboard') != $menu[$page][0]) && next($menu))
    $page = key($menu);
    if (__('Dashboard') == $menu[$page][0]) unset($menu[$page]);
    reset($menu); $page = key($menu);
    while (!$the_user->has_cap($menu[$page][1]) && next($menu))
    $page = key($menu);
    if (preg_match('#wp-admin/?(index.php)?$#',$_SERVER['REQUEST_URI']) && ('index.php' != $menu[$page][2]))
    wp_redirect(get_option('siteurl') . '/wp-admin/edit.php?post_type=event');}
}
add_action('admin_menu', 'remove_the_dashboard');