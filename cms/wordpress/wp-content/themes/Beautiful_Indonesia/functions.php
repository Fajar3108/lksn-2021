<?php

add_action('wp_enqueue_scripts', function() {
    wp_enqueue_style('main-style', get_stylesheet_uri());
});

require get_theme_file_path('/inc/admin/post_type/places_post_type.php');