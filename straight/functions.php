<?php
if (!function_exists('straight_setup')):

    function straight_setup() {

        add_theme_support('post-thumbnails');
        /**
         * Register Nav Menus
         * This theme uses wp_nav_menu() in one location.
         */
        register_nav_menus(array(
            'main_menu' => 'Main Menu',
            'footer_menu' => 'Footer Menu',
        ));
    }

endif; // straight_setup
add_action('after_setup_theme', 'straight_setup');

function straight_get_post_thumb($post_id, $url = false, $width = 100, $height = 100) {

    $src = '';
    if (has_post_thumbnail($post_id)) {
        $post_thumbnail_id = get_post_thumbnail_id($post_id);
        $thumb_object = get_post($post_thumbnail_id);
        $src = $thumb_object->guid;

        if ($url) {
            $src = $url;
        }

        return '<img src="' . get_bloginfo('template_url') . '/timthumb.php?src=' . $src . '&amp;w=' . $width . '&amp;h=' . $height . '"  alt="' . get_the_title($post_id) . '" />';
    }
}

/**
 * Enqueue Scripts &; CSS Styles
 * adds javascripts and stylesheets the right way via WP enqueue
 */
require( get_template_directory() . '/inc/enqueue-scripts-styles.php' );

register_sidebar(array(
    'name' => __('Sidebar'),
    'id' => 'Sidebar',
    'description' => __('General Sidebar section for all pages.'),
    'before_title' => '',
    'after_title' => '',
    'before_widget' => '',
    'after_widget' => '',
));

register_sidebar(array(
    'name' => __('Sidebar Newsletter'),
    'id' => 'Sidebar_newsletter',
    'description' => __('General Sidebar newsletter section for all pages.'),
    'before_title' => '',
    'after_title' => '',
    'before_widget' => '',
    'after_widget' => '',
));

function straight_wp_title($title, $sep) {
    global $paged, $page;

    if (is_feed())
        return $title;

    // Add the site name.
    $title .= get_bloginfo('name');

    // Add the site description for the home/front page.
    $site_description = get_bloginfo('description', 'display');
    if ($site_description && ( is_home() || is_front_page() ))
        $title = "$title $sep $site_description";

    // Add a page number if necessary.
    if ($paged >= 2 || $page >= 2)
        $title = "$title $sep " . sprintf(__('Page %s', 'straight'), max($paged, $page));

    return $title;
}

add_filter('wp_title', 'straight_wp_title', 10, 2);

function motorino_truncate_posts($amount, $read_more_link = 'read more') {
    echo balanceTags(wp_trim_words(get_the_content(), $amount, ' ... <a 
href="' . get_permalink() . '">' . $read_more_link . '</a>'), true);
}

add_action('after_setup_theme', 'straight_setup');


define('DISALLOW_FILE_EDIT', true);

// motorino_content_nav





function straight_post_queries($query) {
    // not an admin page and it is the main query
    if (!is_admin() && $query->is_main_query()) {
        if (is_home()) {
            $query->set('posts_per_page', 4);
        }
    }
}

add_action('pre_get_posts', 'straight_post_queries');

add_action('init', 'register_cpt_banner_slider');

function register_cpt_banner_slider() {
    $labels = array(
        'name' => _x('Banner Sliders', 'banner_slider'),
        'singular_name' => _x('Banner Slider', 'banner_slider'),
        'add_new' => _x('Add New', 'banner_slider'),
        'add_new_item' => _x('Add New Banner Slider', 'banner_slider'),
        'edit_item' => _x('Edit Banner Slider', 'banner_slider'),
        'new_item' => _x('New Banner Slider', 'banner_slider'),
        'view_item' => _x('View Banner Slider', 'banner_slider'),
        'search_items' => _x('Search Banner Sliders', 'banner_slider'),
        'not_found' => _x('No banner sliders found', 'banner_slider'),
        'not_found_in_trash' => _x('No banner sliders found in Trash', 'banner_slider'),
        'parent_item_colon' => _x('Parent Banner Slider:', 'banner_slider'),
        'menu_name' => _x('Banner Sliders', 'banner_slider'),
    );
    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
        'supports' => array('title', 'thumbnail', 'page-attributes'),
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
    register_post_type('banner_slider', $args);
}


//short code for the page specific section
function slide_shortcode( $atts, $content = null ) {
   return '<li><p>' . $content . '</p></li>';
}
add_shortcode( 'slides', 'slide_shortcode' );

include_once 'inc/social-count-widgets.php';