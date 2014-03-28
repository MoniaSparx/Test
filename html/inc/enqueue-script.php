<?php

add_action('wp_enqueue_scripts','add_script');

function add_script()
{
	/* enqueue style sheet here*/
     wp_deregister_script('jquery');    
     wp_enqueue_style('reset',get_template_directory_uri().'/assets/css/normalize.css','', '');
     wp_enqueue_style('global',get_template_directory_uri().'/assets/css/global.css','', '');
     wp_enqueue_style('mainstyle',get_template_directory_uri().'/style.css','', '');
     wp_enqueue_style('flexslider',get_template_directory_uri().'/assets/css/flexslider.css','', '');
	 wp_enqueue_style('italic','http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic','', '');
	 wp_enqueue_style('sans','http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800','', '');
	 wp_enqueue_style('mobile',get_template_directory_uri().'/assets/css/mobile.css','', '' , 'screen and (max-width:767px)');
	 wp_enqueue_style('tablet',get_template_directory_uri().'/assets/css/tablet.css','', '' , 'screen and (min-width:768px) and (max-width:1136px)');

/* enqueue script here*/
    wp_enqueue_script( 'jqueryscript','http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js','',true); 
    wp_enqueue_script( 'flexsliderscript',get_template_directory_uri().'/assets/js/jquery.flexslider.js','',true); 
    wp_enqueue_script( 'customjs',get_template_directory_uri().'/assets/js/custom.js','',true); 

}

