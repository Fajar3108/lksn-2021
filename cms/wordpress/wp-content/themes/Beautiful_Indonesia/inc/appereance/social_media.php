<?php

function social_media_setting($wp_customize) {
    $wp_customize->add_section('socail_media_section', [
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
    $wp_customize->add_setting('social_media_facebook', [
        'default' => 'http://facebook.com'
    ]);
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'social_media_facebook_control', [
        'label' => 'Facebook',
        'section' => 'social_media_section',
        'settings' => 'social_media_facebook',
    ]));
    // Twitter
    $wp_customize->add_setting('social_media_facebook', [
        'default' => 'http://facebook.com'
    ]);
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'social_media_facebook_control', [
        'label' => 'Facebook',
        'section' => 'social_media_section',
        'settings' => 'social_media_facebook',
    ]));
}

add_action('customize_register', 'social_media_setting');