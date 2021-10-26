<?php

function main_scripts() {
    wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'main_scripts');

function registrer_menu() {
    register_nav_menu('main_menu', 'Main Menu');
}
add_action('admin_init', 'register_menu');

require get_theme_file_path('/inc/admin/post_type/places_post_type.php');