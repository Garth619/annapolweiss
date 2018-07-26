<?php 
/*
Plugin Name: Landing Page CPT
Description: Landing Page custom post type
Author: Highrank
Version: 0.1
LicenseL GPLv3
*/



/*******************************************************************************
 * Custom Post Type
 ******************************************************************************/
add_action('init', 'landing' );
function landing(){
	/* no capital letters, spaces or special characters in the landing name*/
	
	register_post_type('landing', array(
		'rewrite' => array( 'slug' => 'lp', 'with_front' => true ),
		'public' => true,
		'has_archive' => false,
		'public' => true,
		'publicly_queryable' => true,
		'query_var' => true,
		'hierarchical' => false,
		'menu_position' => 5,
		'menu_icon' => 'dashicons-admin-site',
		'supports' => array('title','editor','thumbnail','revisions'),
		'labels' => array(
			//These will show up in the admin panel
			'name' => 'Landing Page',
			'singular_name' => 'Landing Page',
			'add_new_item' => 'Add New Landing Page',
			'not_found' => 'No Landing Page Found',
		),

	));
}




/*******************************************************************************
 * Flush the Custom Post Type 
 ******************************************************************************/
function landing_rewrite_flush(){
	landing(); 
	flush_rewrite_rules();
}
register_activation_hook(__FILE__, 'landing_rewrite_flush' );





/*******************************************************************************
 * Create template based on post type
 ******************************************************************************/
add_filter( 'template_include', 'create_new_templates' );
function create_new_templates( $template ){
    $post_types = array( 'landing' );
    if ( is_post_type_archive( $post_types ) ) return plugin_dir_path( __FILE__ ) . 'templates/archive-landing-page.php';
    if( is_singular( $post_types ) ) return plugin_dir_path( __FILE__ ) . 'templates/single-landing-page.php';
    return $template;
}







/*******************************************************************************
 * Pagination
 ******************************************************************************/
function fix_landing_custom_posts_per_page( $query_string ){
    if( is_admin() || ! is_array( $query_string ) )
        return $query_string;
 
    $post_types_to_fix = array(
        array(
            'post_type' => 'landing',
            'posts_per_page' => 6
        ),
        // add another if you want
        /*
        array(
            'post_type' => 'movie',
            'posts_per_page' => 2
        ),
        */
    );
 
    foreach( $post_types_to_fix as $fix ) {
        if( array_key_exists( 'post_type', $query_string )
            && $query_string['post_type'] == $fix['post_type']
        ) {
            $query_string['posts_per_page'] = $fix['posts_per_page'];
            return $query_string;
        }
    }
 
    return $query_string;
}
 
add_filter( 'request', 'fix_landing_custom_posts_per_page' );



/*******************************************************************************
 * Custom Excerpt function for Advanced Custom Fields
 ******************************************************************************/
















