<?php
	function aeorplex_get_post_thumb($src, $url = false, $width = 100, $height = 100) {
            if ($src) {
                return '<img src="' . get_bloginfo('template_url') . '/timthumb.php?src=' . $src . '&amp;w=' . $width . '&amp;h=' . $height . '&amp;zc=1&amp;" alt="' . get_the_title($post_id) . '" />';
            }
        }
	
/*
 * Add excerpt support for pages
 */

add_post_type_support( 'page', 'excerpt' );


//wp title filter 
function iccp_wp_title( $title, $sep ) {
	global $paged, $page;

	if ( is_feed() )
		return $title;

	// Add the site name.
	$title .= get_bloginfo( 'name' );

	// Add the site description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		$title = "$title $sep $site_description";

	// Add a page number if necessary.
	if ( $paged >= 2 || $page >= 2 )
		$title = "$title $sep " . sprintf( __( 'Page %s', 'iccpportal' ), max( $paged, $page ) );

	return $title;
}
add_filter( 'wp_title', 'iccp_wp_title', 10, 2 );


/*
 * 	Function to get image src of post thumbnail
 */

function rem_get_post_thumb($post_id) {

    if (has_post_thumbnail($post_id)) {
        $post_thumbnail_id = get_post_thumbnail_id($post_id);
        $thumb_object = get_post($post_thumbnail_id);
        $thumb = $thumb_object->guid;
    }
    return $thumb;
}

	
	
	$args = array(
		'id'            => 'Sidebar',
		'name'          => __( 'Sidebar', 'aeroplex' ),
		'description'   => __( 'Sidebar Description', 'aeroplex' ),
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
		'before_widget' => '',
		'after_widget'  => '',
	);
	register_sidebar( $args );
	
	
	$args = array(
		'id'            => 'Twitter Sidebar',
		'name'          => __( 'Twitter Sidebar', 'aeroplex' ),
		'description'   => __( 'Sidebar Description', 'aeroplex' ),
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
		'before_widget' => '',
		'after_widget'  => '',
	);
	register_sidebar( $args );
	
		
	$args = array(
		'id'            => 'Footer Menu1 Sidebar',
		'name'          => __( 'Footer Menu1', 'aeroplex' ),
		'description'   => __( 'Sidebar Description', 'aeroplex' ),
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
		'before_widget' => '',
		'after_widget'  => '',
	);
	register_sidebar( $args );
	
		$args = array(
		'id'            => 'Footer Menu2 Sidebar',
		'name'          => __( 'Footer Menu2', 'aeroplex' ),
		'description'   => __( 'Sidebar Description', 'aeroplex' ),
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
		'before_widget' => '',
		'after_widget'  => '',
	);
	register_sidebar( $args );
	
			$args = array(
		'id'            => 'Footer Menu3 Sidebar',
		'name'          => __( 'Footer Menu3', 'aeroplex' ),
		'description'   => __( 'Sidebar Description', 'aeroplex' ),
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
		'before_widget' => '',
		'after_widget'  => '',
	);
	register_sidebar( $args );
	
	$args = array(
		'id'            => 'Footer Menu4 Sidebar',
		'name'          => __( 'Footer Menu4', 'aeroplex' ),
		'description'   => __( 'Sidebar Description', 'aeroplex' ),
		'before_title'  => '<h5> ',
		'after_title'   => '</h5>',
		'before_widget' => '',
		'after_widget'  => '',
	);
	register_sidebar( $args );
	
		$args = array(
		'id'            => 'Footer Menu5 Sidebar',
		'name'          => __( 'Footer Menu5', 'aeroplex' ),
		'description'   => __( 'Sidebar Description', 'aeroplex' ),
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
		'before_widget' => '',
		'after_widget'  => '',
	);
	register_sidebar( $args );
	
		$args = array(
		'id'            => 'Footer Menu6 Sidebar',
		'name'          => __( 'Footer Menu6', 'aeroplex' ),
		'description'   => __( 'Sidebar Description', 'aeroplex' ),
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
		'before_widget' => '',
		'after_widget'  => '',
	);
	register_sidebar( $args );
	
	
	
	


