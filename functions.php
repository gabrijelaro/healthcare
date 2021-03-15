<?php 
function theme_support(){
    add_theme_support('title-tag');
}
add_action('after_setup_theme','theme_support');

function register_nav() {
    
    
 }
//menu
register_nav_menus(
    array(
        'top-menu'=> 'Top Menu Location',
        'mobile-menu' => 'Mobile Menu Location'

    )
    );

 if (! function_exists('setup')):
     function setup(){
         register_nav();
         add_theme_support('post-thumbnails');
         add_image_size('team', 475, 475, array('center','center'));
     }
endif;

function load_scripts() {
    wp_enqueue_style( 'stylecss', get_stylesheet_uri() );  
    wp_enqueue_style( 'fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" );  

}

add_action('wp_enqueue_scripts', 'load_scripts' );

 function scripts_footer(){
     //wp_enqueue_script('init', get_template_directory_uri().'/js/init.js', array('jquery'));
 
 }
 add_action('after_setup_theme', 'setup');
 add_action('wp_enqueue', 'scripts_header');