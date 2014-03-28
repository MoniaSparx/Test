<?php

/**
 * Enqueue scripts and styles
 *
 * @package byers
 * @since byers 1.0
 */
function straight_scripts() {

    /**
     * ENQUEUE STYLESHEETS (CSS)
     */
    // wp_register_style('style.less', get_template_directory_uri() . '/assets/css/style.less', '', '', 'screen');
    //wp_enqueue_style('style.less');
    wp_enqueue_style('style', get_stylesheet_uri(), '', '', 'screen');
    wp_register_style('common.', get_template_directory_uri() . '/assets/css/common.css', '', '', 'screen');
    wp_enqueue_style('common.');
    wp_register_style('flexslider', get_template_directory_uri() . '/assets/css/flexslider.css', '', '', 'screen');
    wp_enqueue_style('flexslider');
    wp_register_style('media', get_template_directory_uri() . '/assets/css/media.css', '', '', 'screen');
    wp_enqueue_style('media');
	wp_register_style('font', 'http://fonts.googleapis.com/css?family=Roboto:300italic', '', '', 'screen');
    wp_enqueue_style('font');
	
	
	wp_register_style('css-tablet', get_template_directory_uri() . '/assets/css/tablet.css', '', '', 'screen and (min-width:768px) and (max-width:1199px)');
    wp_enqueue_style('css-tablet');
	wp_register_style('css-mobile', get_template_directory_uri() . '/assets/css/mobile.css', '', '', 'screen and (max-width:767px)');
    wp_enqueue_style('css-mobile');


    /* ENQUEUE (JAVA)SCRIPTS
     */
    wp_enqueue_script('jquery');
    wp_register_script('jquery-1.8.3.min', get_template_directory_uri() . '/assets/js/jquery-1.8.3.min.js', array('jquery'), '', 'true');
    wp_enqueue_script('jquery-1.8.3.min');
    wp_register_script('flexslider', get_template_directory_uri() . '/assets/js/jquery.flexslider.js', array('jquery'), '', 'true');
    wp_enqueue_script('flexslider');
    wp_register_script('less', get_template_directory_uri() . '/assets/js/less-1.5.0.min.js', array('jquery'), '', 'true');
    wp_enqueue_script('less');
    wp_register_script('custom', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), '', 'true');
    wp_enqueue_script('custom');






    /* MISC CONDITIONAL STYLES
     */
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

add_action('wp_enqueue_scripts', 'straight_scripts');
?>