<?php


require_once get_template_directory() . '/assets/inc/wp-bootstrap-navwalker.php';


// navwalker 

// if ( ! file_exists( get_template_directory() . '/assets/inc/navwalker.php' ) ) {
// 	// file does not exist... return an error.
// 	return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
// } else {
// 	// file exists... require it.
//     require_once get_template_directory() . '/assets/inc/navwalker.php';
// }


function style_resource(){
    wp_register_style('bootstrap','https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css',array(),'5.1.0','all');
    wp_enqueue_style('bootstrap');

    wp_register_style('customcss',get_template_directory_uri() . '/assets/css/style.css',array(),'false','all');
    wp_enqueue_style('customcss');
}
add_action('wp_enqueue_scripts','style_resource');

function script_resource(){
    wp_register_script('bootstrapcdn','https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js',array(),'true','all');
    wp_enqueue_script('bootstrapcdn');
   
    wp_register_script('bootstrapcdn2','https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js',array(),'true','all');
    wp_enqueue_script('bootstrapcdn2');

    wp_register_script('customjs',get_template_directory_uri() . '/assets/js/script.js',array(),'true','all');
    wp_enqueue_script('customjs');
}
add_action('wp_enqueue_scripts','script_resource');

function main_menu(){
    register_nav_menus(array(
        'header' => 'header menu','maker'
    ));
}
add_action('init','main_menu');
  

