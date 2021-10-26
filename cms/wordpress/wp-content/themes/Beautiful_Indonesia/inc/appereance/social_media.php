<?php

function social_media_setting($wp_customize) {
    $wp_customize->add_section('social_media_section', [
        'title' => 'Social Media'
    ]);
    
    // Facebook
    $wp_customize->add_setting('social_media_facebook', [
        'default' => 'http://facebook.com'
    ]);
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'social_media_facebook_control', [
        'label' => 'Facebook',
        'section' => 'social_media_section',
        'settings' => 'social_media_facebook',
    ]));
    // Instagram
    $wp_customize->add_setting('social_media_instargam', [
        'default' => 'http://instargam.com'
    ]);
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'social_media_instargam_control', [
        'label' => 'Instargam',
        'section' => 'social_media_section',
        'settings' => 'social_media_instargam',
    ]));
    // Twitter
    $wp_customize->add_setting('social_media_twitter', [
        'default' => 'http://twitter.com'
    ]);
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'social_media_twitter_control', [
        'label' => 'Twitter',
        'section' => 'social_media_section',
        'settings' => 'social_media_twitter',
    ]));
}

add_action('customize_register', 'social_media_setting');