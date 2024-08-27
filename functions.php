<?php

function carvillage_setup()
{
    add_theme_support('post-thumbnails');
    add_image_size('custom-size', 350, 300, true);

    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'carvillage_setup');
function wp_insert_main_style()
{
    wp_register_style('wp_carvillage_main_style', get_template_directory_uri() . '/assets/css/main.css');
    wp_enqueue_style('wp_carvillage_main_style');

    wp_register_script('wp_carvillage_main_script', get_template_directory_uri() . '/assets/js/main-scripts.js', ['jquery'], false, true);
    wp_enqueue_script('wp_carvillage_main_script');
}

add_action('wp_enqueue_scripts', 'wp_insert_main_style');
