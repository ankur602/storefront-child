<?php
/*This file is part of storefront-child, storefront child theme.

All functions of this file will be loaded before of parent theme functions.
Learn more at https://codex.wordpress.org/Child_Themes.

Note: this function loads the parent stylesheet before, then child theme stylesheet
(leave it in place unless you know what you are doing.)
*/

function storefront_child_enqueue_child_styles() {
$parent_style = 'parent-style'; 
	wp_enqueue_style($parent_style, get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 
		'child-style', 
		get_stylesheet_directory_uri() . '/style.css',
		array( $parent_style ),
		wp_get_theme()->get('Version') );
	}
add_action( 'wp_enqueue_scripts', 'storefront_child_enqueue_child_styles' );

/*Write here your own functions */
add_action( 'init', 'create_post_type' );
function create_post_type() {
  register_post_type( 'tunning',
    array(
      'labels' => array(
        'name' => __( 'Tunnings' ),
        'singular_name' => __( 'Tunning' )
      ),
    'supports'            => array( 'title', 'editor', 'thumbnail',  'custom-fields' ),
      'public' => true,
     'has_archive' => true,
   )
 );


}
function iconic_account_menu_items( $items ) {
 
    $items['information'] = __( 'Tunnings', 'iconic' );
 
    return $items;
 
}
 
add_filter( 'woocommerce_account_menu_items', 'iconic_account_menu_items', 10, 1 );
function iconic_add_my_account_endpoint() {
 
    add_rewrite_endpoint( 'information', EP_PAGES );
 
}
 
add_action( 'init', 'iconic_add_my_account_endpoint' );
function iconic_information_endpoint_content() {
  include('performance-tunning.php');
}
 
add_action( 'woocommerce_account_information_endpoint', 'iconic_information_endpoint_content' );
