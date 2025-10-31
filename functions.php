<?php
function bg3_enqueue_styles() {
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('child-style', get_stylesheet_uri(), array('parent-style'));
    wp_enqueue_style('main-css', get_stylesheet_directory_uri() . '/assets/css/main.css');
    wp_enqueue_script('child-js', get_stylesheet_directory_uri() . '/assets/js/script.js', array('jquery'), null, true);
    wp_enqueue_script('main-js', get_stylesheet_directory_uri() . '/assets/js/main.js', array(), false, true);
    wp_enqueue_script('hero-scroll', get_stylesheet_directory_uri() . '/assets/js/scroll.js', array(), false, true);
}

add_action('wp_enqueue_scripts', 'bg3_enqueue_styles');

function bg3_register_menus() {
    register_nav_menus(array(
        'header' => __('header', 'bg3-storytelling'),
    ));
}

add_action('init', 'bg3_register_menus');
?>