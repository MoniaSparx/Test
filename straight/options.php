<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 * By default it uses the theme name, in lowercase and without spaces, but this can be changed if needed.
 * If the identifier changes, it'll appear as if the options have been reset.
 */

function optionsframework_option_name() {

	// This gets the theme name from the stylesheet
	$themename = get_option( 'stylesheet' );
	$themename = preg_replace("/\W/", "_", strtolower($themename) );

	$optionsframework_settings = get_option( 'optionsframework' );
	$optionsframework_settings['id'] = $themename;
	update_option( 'optionsframework', $optionsframework_settings );
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 * If you are making your theme translatable, you should replace 'options_framework_theme'
 * with the actual text domain for your theme.  Read more:
 * http://codex.wordpress.org/Function_Reference/load_theme_textdomain
 */

function optionsframework_options() {
	// Define our directory path
	$imagepath =  get_template_directory_uri() . '/images/';


	// Setup the final options array
	$options = array();

	// ...begin Options definition

	$wp_editor_settings = array(
	'wpautop' => true, // Default
	'textarea_rows' => 5,
	'tinymce' => array( 'plugins' => 'wordpress' )
	);
	
	 // Pull all the categories into an array
    $options_categories = array();
    $options_categories_obj = get_categories();
    foreach ($options_categories_obj as $category) {
        $options_categories[$category->cat_ID] = $category->cat_name;
    }
	
               
		// Pull all the pages into an array
		$options_pages = array();
		$options_pages_obj = get_pages('sort_column=post_parent,menu_order');
		$options_pages[''] = 'Select a page:';
		foreach ($options_pages_obj as $page) {
		$options_pages[$page->ID] = $page->post_title;
		}
                
                
                // Pull all the post into an array
		$options_posts = array();
		$options_posts_obj = get_posts('sort_column=post_parent,menu_order');
		foreach ($options_posts_obj as $post) {
		$options_posts[$post->ID] = $post->post_title;
		}
               
	// Editor Setting
	$wp_editor_settings = array(
	'wpautop' => true, // Default
	'textarea_rows' => 5,
	'tinymce' => array( 'plugins' => 'wordpress' )
	);
	
	$options[] = array(
		'name' => __('Basic Settings', 'options_framework_theme'),
		'type' => 'heading');
        
        
        
	$options[] = array(
		'name' => __('Website Logo', 'options_framework_theme'),
		'desc' => __('Please Upload the website logo', 'options_framework_theme'),
		'id' => 'website_logo',
		'std' => '',
		'type' => 'upload');
        
        $options[] = array(
		'name' => __('Website Footer Logo', 'options_framework_theme'),
		'desc' => __('Please Upload the website footer logo', 'options_framework_theme'),
		'id' => 'website_footer_logo',
		'std' => '',
		'type' => 'upload');
		
		$options[] = array(
		'name' => __('Website Mobile Logo', 'options_framework_theme'),
		'desc' => __('Please Upload the website footer logo', 'options_framework_theme'),
		'id' => 'website_mobile_logo',
		'std' => '',
		'type' => 'upload');
                        
        $options[] = array(
		'name' => __('Website Facebook Link', 'options_framework_theme'),
		'desc' => __('Please write the website facebook Link', 'options_framework_theme'),
		'id' => 'facebook_link',
		'std' => '',
		'type' => 'text');
        
        $options[] = array(
		'name' => __('Website Flicker Link', 'options_framework_theme'),
		'desc' => __('Please write the website Flicker Link', 'options_framework_theme'),
		'id' => 'flicker_link',
		'std' => '',
		'type' => 'text');
        
        $options[] = array(
		'name' => __('Website Twitter Link', 'options_framework_theme'),
		'desc' => __('Please write the website Twitter Link', 'options_framework_theme'),
		'id' => 'twitter_link',
		'std' => '',
		'type' => 'text');
        
        $options[] = array(
		'name' => __('Website Help page', 'options_framework_theme'),
		'desc' => __('Please write the website help page Link', 'options_framework_theme'),
		'id' => 'help_page_link',
		'std' => '',
		'type' => 'select',
		'options' => $options_pages);
        
        $options[] = array(
		'name' => __('Website full detail story Text', 'options_framework_theme'),
		'desc' => __('Please write the website full detail story Text', 'options_framework_theme'),
		'id' => 'full_detail_story',
		'std' => '',
		'type' => 'text');
        
        $options[] = array(
		'name' => __('Website join the campaign Text', 'options_framework_theme'),
		'desc' => __('Please write the website join the campaign Text', 'options_framework_theme'),
		'id' => 'join_the_campaign_text',
		'std' => '',
		'type' => 'text');
        
        $options[] = array(
		'name' => __('Website join the campaign Link', 'options_framework_theme'),
		'desc' => __('Please write the website join the campaign Link', 'options_framework_theme'),
		'id' => 'join_the_campaign_link',
		'std' => '',
		'type' => 'text');
        
        $options[] = array(
		'name' => __('Website donate Text', 'options_framework_theme'),
		'desc' => __('Please write the website donate Text', 'options_framework_theme'),
		'id' => 'donate_text',
		'std' => '',
		'type' => 'text');
        
        $options[] = array(
		'name' => __('Website donate Link', 'options_framework_theme'),
		'desc' => __('Please write the website donate Link', 'options_framework_theme'),
		'id' => 'donate_link',
		'std' => '',
		'type' => 'text');
        
        $options[] = array(
		'name' => __('Website speak up Text', 'options_framework_theme'),
		'desc' => __('Please write the website speak up Text', 'options_framework_theme'),
		'id' => 'speak_up_text',
		'std' => '',
		'type' => 'text');
        
        $options[] = array(
		'name' => __('Website speak up Link', 'options_framework_theme'),
		'desc' => __('Please write the website speak up Link', 'options_framework_theme'),
		'id' => 'speak_up_link',
		'std' => '',
		'type' => 'text');
        
        $options[] = array(
		'name' => __('Website start a conversation Text', 'options_framework_theme'),
		'desc' => __('Please write the website start a conversation Text', 'options_framework_theme'),
		'id' => 'start_a_conversation_text',
		'std' => '',
		'type' => 'text');
        
        $options[] = array(
		'name' => __('Website start a conversation Link', 'options_framework_theme'),
		'desc' => __('Please write the website start a conversation Link', 'options_framework_theme'),
		'id' => 'start_a_conversation_link',
		'std' => '',
		'type' => 'text');
        
        
        
        
        
        
        
                                     
                        
		$options[] = array(
		'name' => __('Featured Categories', 'options_framework_theme'),
		'desc' => __('Select featured Category for home for Displaying', 'options_framework_theme'),
		'id' => 'featured_category',
		'std' => '',
		'class' => '',
		'type' => 'multicheck',
                'options'=>$options_categories);  
                
                $options[] = array(
		'name' => __('Select Post to show in front page', 'options_button_theme'),
		'desc' => __('Please Select Post to show in front page', 'options_button text_theme'),
		'id' => 'post_select',
		'std' => '',
		'type' => 'multicheck',
		'options' => $options_posts) ; 
             
                
                $options[] = array(
		'name' => __('Select Page to show in front page', 'options_button_theme'),
		'desc' => __('Please Select Page to show in front page', 'options_button text_theme'),
		'id' => 'page_about',
		'std' => '',
		'type' => 'select',
		'options' => $options_pages) ; 
                
                $options[] = array(
		'name' => __('Select Page to show in inner page', 'options_button_theme'),
		'desc' => __('Please Select Page to show in inner page', 'options_button text_theme'),
		'id' => 'page_inner',
		'std' => '',
		'type' => 'select',
		'options' => $options_pages) ; 
                                    
                     
        return $options;
}
	

