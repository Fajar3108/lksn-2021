<?php

function main_scripts() {
    wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'main_scripts');

require get_theme_file_path('/inc/admin/post_type/places_post_type.php');