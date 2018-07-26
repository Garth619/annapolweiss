<?php 
/*
Plugin Name: Class Action CPT
Description: Class Action cutsom post type
Author: Highrank
Version: 0.1
LicenseL GPLv3
*/



/*******************************************************************************
 * Custom Post Type
 ******************************************************************************/
add_action('init', 'cpt' );
function cpt(){
	/* no capital letters, spaces or special characters in the CPT name*/
	
	register_post_type('cpt', array(
		'rewrite' => array( 'slug' => 'settlement-notice', 'with_front' => true ),
		'public' => true,
		'has_archive' => true,
		'public' => true,
		'publicly_queryable' => true,
		'query_var' => true,
		'hierarchical' => false,
		'menu_position' => 5,
		'menu_icon' => 'dashicons-admin-site',
		'supports' => array('title','editor','thumbnail','revisions'),
		'labels' => array(
			//These will show up in the admin panel
			'name' => 'Class Action',
			'singular_name' => 'Class Action',
			'add_new_item' => 'Add New Class Action',
			'not_found' => 'No Class Action Found',
		),

	));
}




/*******************************************************************************
 * Flush the Custom Post Type 
 ******************************************************************************/
function ca_rewrite_flush(){
	cpt(); 
	flush_rewrite_rules();
}
register_activation_hook(__FILE__, 'ca_rewrite_flush' );





/*******************************************************************************
 * Create template based on post type
 ******************************************************************************/
add_filter( 'template_include', 'create_templates' );
function create_templates( $template ){
    $post_types = array( 'cpt' );
    if ( is_post_type_archive( $post_types ) ) return plugin_dir_path( __FILE__ ) . 'templates/archive-class-action.php';
    if( is_singular( $post_types ) ) return plugin_dir_path( __FILE__ ) . 'templates/single-class-action.php';
    return $template;
}







/*******************************************************************************
 * Pagination
 ******************************************************************************/
function toolset_fix_custom_posts_per_page( $query_string ){
    if( is_admin() || ! is_array( $query_string ) )
        return $query_string;
 
    $post_types_to_fix = array(
        array(
            'post_type' => 'cpt',
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
 
add_filter( 'request', 'toolset_fix_custom_posts_per_page' );



/*******************************************************************************
 * Custom Excerpt function for Advanced Custom Fields
 ******************************************************************************/
function custom_field_excerpt() {
	global $post;
	$text = get_field('case'); //Replace 'your_field_name'
	if ( '' != $text ) {
		$text = strip_shortcodes( $text );
		$text = apply_filters('the_content', $text);
		$text = str_replace(']]&gt;', ']]&gt;', $text);
		$excerpt_length = 15; // 20 words
		/*$excerpt_more = apply_filters('excerpt_more', ' ' . '[...]');*/
		$excerpt_more = '';
		$text = wp_trim_words( $text, $excerpt_length, $excerpt_more );
	}
	return apply_filters('the_excerpt', $text);
}















