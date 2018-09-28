<?php 

//acf include in theme
add_filter('acf/settings/path', 'my_acf_settings_path');
function my_acf_settings_path( $path ) {
    $path = get_stylesheet_directory() . '/acf/';
    return $path;
}
add_filter('acf/settings/dir', 'my_acf_settings_dir');
function my_acf_settings_dir( $dir ) {
    $dir = get_stylesheet_directory_uri() . '/acf/';
    return $dir;
}
include_once( get_stylesheet_directory() . '/acf/acf.php' );
//end acf include in theme

if( function_exists('acf_add_options_page') ) {
 
	$option_page = acf_add_options_page(array(
		'page_title' 	=> 'Продукты',
		'menu_title' 	=> 'Продукты',
        'menu_slug' 	=> 'valemi-products',
        'position'      => 20,
        'icon_url'      => 'dashicons-cart',
		'capability' 	=> 'edit_posts',
		'redirect' 	    => false
	));
 
}