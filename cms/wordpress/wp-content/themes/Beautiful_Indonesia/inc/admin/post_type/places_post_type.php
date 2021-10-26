<?php

function register_places_post_type() {
    register_post_type('places', [
        'supports' => [''],
        'public' => true,
        'labels' => [
            'name' => 'Places',
            'add_new_item' => 'Add New Place',
            'edit_item' => 'Edit Place',
            'all_items' => 'All Places',
            'singular_name' => 'Place',
        ],
    ]);remove_post_type_support('places', 'title');
}
add_action('init', 'register_places_post_type');

function set_places_table_head($defaults) {
    $defaults['name'] = 'Name';
    $defaults['count'] = 'Count';
    $defaults['created_at'] = 'Created At';
    return $defaults;
}
add_action('manage_designers_posts_columns', 'set_places_table_head');

function set_places_table_content($column_name, $post_id) {
    $place = get_post_meta($post_id, 'places', true);

    // if ($column_name == )
}
add_action('manage_designers_posts_custom_column', 'set_places_table_content');