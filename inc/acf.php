<?php
/**
 * ACF DETAILS
 *
 *
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;


function ingredients_repeater(){
	$html = '<h2>Ingredients</h2><ul id="ingredient-list">';
	if( have_rows('ingredients') ):

	    // Loop through rows.
	    while( have_rows('ingredients') ) : the_row();

	        // Load sub field value.
	        $ingredient = get_sub_field('ingredient_name');
	        $amount = get_sub_field('amount');
	        $measure = get_sub_field('measurement_type');
	        $html .= "<li>{$ingredient} - {$amount} {$measure}</li>";
	        // Do something...
	    // End loop.
	    endwhile;
	    return $html . "</ul>";
		// No value.
		else :
		    // Do something...
		endif;
	}


function steps_repeater(){
	$html = '';
	if( have_rows('steps') ):

	    // Loop through rows.
	    while( have_rows('steps') ) : the_row();
	    	$num = get_row_index();
	        // Load sub field value.
	        $step = get_sub_field('step');
	        // Do something...
	        $html .= "<div class='step'><h2>Step {$num}</h2><div class='step-details'>{$step}</div></div>";
	    // End loop.
	    endwhile;
	    return $html;
		// No value.
		else :
		    // Do something...
		endif;
	}




	//save acf json
		add_filter('acf/settings/save_json', 'memory_json_save_point');
		 
		function memory_json_save_point( $path ) {
		    
		    // update path
		    $path = get_stylesheet_directory(__FILE__) . '/acf-json'; //replace w get_stylesheet_directory() for theme
		    
		    
		    // return
		    return $path;
		    
		}


		// load acf json
		add_filter('acf/settings/load_json', 'memory_json_load_point');

		function memory_json_load_point( $paths ) {
		    
		    // remove original path (optional)
		    unset($paths[0]);
		    
		    
		    // append path
		    $paths[] = get_stylesheet_directory(__FILE__)  . '/acf-json';//replace w get_stylesheet_directory() for theme
		    
		    
		    // return
		    return $paths;
		    
		}