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
    ]);
    remove_post_type_support('places', 'title');
}
add_action('init', 'register_places_post_type');

function set_places_table_head($defaults) {
    $defaults['name'] = 'Name';
    $defaults['count'] = 'Count';
    return $defaults;
}
add_action('manage_places_posts_columns', 'set_places_table_head');

function set_places_table_content($column_name, $post_id) {
    $place = get_post_custom($post_id);

    if ($column_name == 'name') {
        echo $place['name'][0];
    } else if ($column_name == 'count') {
        echo 0;
    }
}
add_action('manage_places_posts_custom_column', 'set_places_table_content', 10, 12);