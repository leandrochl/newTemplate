<?php 

add_theme_support('menus');
register_nav_menus(
    [
        'top-menu' => __('Top Menu', 'theme'),
        'footer-menu' => __('Footer Menu', 'theme')
    ]
);

add_theme_support('post-thumbnails');
add_image_size('smallest', 300, 300, true);
add_image_size('lergest', 800, 800, true);

function load_stylesheets(){
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', [], false, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('style', get_template_directory_uri() . '/css/style.css', [], false, 'all');
    wp_enqueue_style('style');
}
add_action('wp_enqueue_scripts', 'load_stylesheets');


function include_jquery(){
    wp_deregister_script('jquery');
    wp_register_script('jquery', get_template_directory_uri() . '/js/jquery-3.4.1.min.js', '', 1, true);    
    wp_enqueue_script('jquery');
}
add_action('wp_enqueue_scripts', 'include_jquery');

function load_js(){

    wp_register_script('customjs', get_template_directory_uri() . '/js/scripts.js', '', 1, true);
    wp_enqueue_script('customjs');
}
add_action('wp_enqueue_scripts', 'load_js');

