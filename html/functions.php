<?php 

add_theme_support( 'post-thumbnails' ); 
add_theme_support( 'menus' );


// register menus here

register_nav_menus( array(
	'mainmenu' => 'Main Menu',

		'footermenu1' => 'Footer Menu1',
		'footermenu2' => 'Footer Menu2',
		'footermenu3' => 'Footer Menu3',
	    'footermenu4' => 'Footer Menu4',
	   	'footermenu5' => 'Footer Menu5',
	   	'footermenu6' => 'Footer Menu6',
	
) );


 function custom_css_classes_for_vc_row_and_vc_column($class_string, $tag) {
                 if(($tag=='vc_row' || $tag=='vc_row_inner') && !is_home() && !is_front_page()) {
                	$class_string = str_replace('vc_row-fluid', 'grid_24 clearfix inner', $class_string);
                 }if(($tag=='vc_row' || $tag=='vc_row_inner') && is_front_page()) {
                 	$class_string = str_replace('vc_row-fluid', 'container_24 clearfix', $class_string);
                 }
                 if($tag=='vc_column' || $tag=='vc_column_inner') {
                	 $col_divider = str_replace('vc_span', '', $class_string);
                	 $col_divider = $col_divider * 2;
                     $class_string = preg_replace('/vc_span(\d{1,2})/', 'grid_'.$col_divider, $class_string);
                 }
                 return $class_string;
             }
            // Filter to Replace default css class for vc_row shortcode and vc_column
             add_filter('vc_shortcodes_css_class', 'custom_css_classes_for_vc_row_and_vc_column', 10, 2);

// register custom post types
//include( "inc/custom-post-types.php" );


   /**
         * Enqueue Scripts &; CSS Styles
         * adds javascripts and stylesheets the right way via WP enqueue
         * 
         *  */
              require( get_template_directory() . '/inc/enqueue-script.php' ); 

// helper functions
require get_template_directory() . '/inc/helper-functions.php';
/**
 * Add shortcode file
  */
 

// Custom Post Type.
require get_template_directory() . '/inc/custom-post-type.php';
/** Get Terms */


/*************get Top parent*****************/
function get_top_parent_page_id() {

global $post;

// Check if page is a child page (any level)
if ($post->ancestors) {

// Grab the ID of top-level page from the tree
return end($post->ancestors);

} else {

// Page is the top level, so use it's own id
return $post->ID;

}

} 