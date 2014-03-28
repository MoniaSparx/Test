<?php 
add_action( 'init', 'register_cpt_slider' );

function register_cpt_slider() {

    $labels = array( 
        'name' => _x( 'Slider', 'slider' ),
        'singular_name' => _x( 'Slider', 'slider' ),
        'add_new' => _x( 'Add New', 'slider' ),
        'add_new_item' => _x( 'Add New Slider', 'slider' ),
        'edit_item' => _x( 'Edit Slider', 'slider' ),
        'new_item' => _x( 'New Slider', 'slider' ),
        'view_item' => _x( 'View Slider', 'slider' ),
        'search_items' => _x( 'Search Slider', 'slider' ),
        'not_found' => _x( 'No slider found', 'slider' ),
        'not_found_in_trash' => _x( 'No slider found in Trash', 'slider' ),
        'parent_item_colon' => _x( 'Parent Slider:', 'slider' ),
        'menu_name' => _x( 'Slider', 'slider' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => true,
        
        'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail' , 'page-attributes'),
        
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        
        
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );

    register_post_type( 'slider', $args );
}

/* Add Team custom Post type*/
add_action( 'init', 'register_cpt_available_space' );

function register_cpt_available_space() {

    $labels = array( 
        'name' => _x( 'Available Space', 'available_space' ),
        'singular_name' => _x( 'Available Space', 'available_space' ),
        'add_new' => _x( 'Add New', 'available_space' ),
        'add_new_item' => _x( 'Add New Available Space', 'available_space' ),
        'edit_item' => _x( 'Edit Available Space', 'available_space' ),
        'new_item' => _x( 'New Available Space', 'available_space' ),
        'view_item' => _x( 'View Available Space', 'available_space' ),
        'search_items' => _x( 'Search Available Space', 'available_space' ),
        'not_found' => _x( 'No available space found', 'available_space' ),
        'not_found_in_trash' => _x( 'No available space found in Trash', 'available_space' ),
        'parent_item_colon' => _x( 'Parent Available Space:', 'available_space' ),
        'menu_name' => _x( 'Available Space', 'available_space' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => true,
        
        'supports' => array( 'title', 'editor', 'thumbnail' ),
        
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        
        
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );

    register_post_type( 'available_space', $args );
}


/* ADD Testimonial custom post type */
add_action( 'init', 'register_cpt_testimonial' );

function register_cpt_testimonial() {

    $labels = array( 
        'name' => _x( 'Testimonial', 'testimonial' ),
        'singular_name' => _x( 'Testimonial', 'testimonial' ),
        'add_new' => _x( 'Add New', 'testimonial' ),
        'add_new_item' => _x( 'Add New Testimonial', 'testimonial' ),
        'edit_item' => _x( 'Edit Testimonial', 'testimonial' ),
        'new_item' => _x( 'New Testimonial', 'testimonial' ),
        'view_item' => _x( 'View Testimonial', 'testimonial' ),
        'search_items' => _x( 'Search Testimonial', 'testimonial' ),
        'not_found' => _x( 'No testimonial found', 'testimonial' ),
        'not_found_in_trash' => _x( 'No testimonial found in Trash', 'testimonial' ),
        'parent_item_colon' => _x( 'Parent Testimonial:', 'testimonial' ),
        'menu_name' => _x( 'Testimonial', 'testimonial' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => true,
        
        'supports' => array( 'title', 'editor' ),
        
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        
        
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );

    register_post_type( 'testimonial', $args );
}

