<?php

function main_scripts() {
    wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'main_scripts');

function registrer_menu() {
    register_nav_menu('main_menu', 'Main Menu');
}
add_action('admin_init', 'register_menu');

function my_login_redirect($redirect_to, $requested_redirect_to, $user) {
    if (is_wp_error($user)) {
        //Login failed, find out why...
        $error_types = array_keys($user->errors);
        //Error type seems to be empty if none of the fields are filled out
        $error_type = 'both_empty';
        //Otherwise just get the first error (as far as I know there
        //will only ever be one)
        if (is_array($error_types) && !empty($error_types)) {
            $error_type = $error_types[0];
        }
        wp_redirect( home_url() . '/4dm1n' . "?login=failed&reason=" . $error_type ); 
        exit;
    } else {
        //Login OK - redirect to another page?
        return home_url();
    }
}
add_filter('login_redirect', 'my_login_redirect', 10, 3);

require get_theme_file_path('/inc/admin/post_type/places_post_type.php');
require get_theme_file_path('/inc/appereance/social_media.php');