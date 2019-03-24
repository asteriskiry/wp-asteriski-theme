<?php

/**
 * Theme customizer menus
 */

function asteriski_customize_register($wp_customize)
{
    /* Social links */
    $wp_customize->add_section('asteriski_social_url_options', array(
        'priority' => 17,
        'capability' => 'edit_theme_options',
        'theme_supports' => '',
        'title' => __('Some ikonit', 'asteriski'),
        'description' => __('Someprofiilien URL:t. Esim. ', 'asteriski') . 'https://facebook.com/asteriski/'
    ));

    $social_links = array( 'Facebook' => 'facebook', 'Twitter' => 'twitter', 'YouTube' => 'youtube', 'Instagram' => 'instagram', 'GitHub' => 'github' );

    foreach ($social_links as $key => $val) {
        $wp_customize->add_setting('asteriski_social_icon_url_' . $val, array(
            'default' => '',
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport' => 'postMessage',
            'sanitize_callback' => 'esc_url_raw'
        ));
        $wp_customize->add_control('asteriski_social_icon_url_' . $val, array(
            'label' => sprintf(__('%s', 'asteriski'), $key),
            'section' => 'asteriski_social_url_options',
            'settings' => 'asteriski_social_icon_url_' . $val,
            'type' => 'text'
        ));
    }

    /* Copyright text */
    $wp_customize->add_section('asteriski_copyright', array(
        'priority' => 18,
        'capability' => 'edit_theme_options',
        'theme_supports' => '',
        'title' => __('Copyright teksti', 'asteriski'),
        'description' => 'Teksti joka näkyy alatunnisteessa'
    ));
    $wp_customize->add_setting('asteriski_footer_text', array(
        'default'             => '',
        'type'                => 'theme_mod',
        'sanitize_callback'   => 'wp_kses_post'
    ));
    $wp_customize->add_control('asteriski_footer_text', array(
        'label'    => esc_html__('Copyright teksti', 'asteriski'),
        'section'  => 'asteriski_copyright',
        'type'     => 'textarea',
        'priority' => 2
    ));
}
add_action('customize_register', 'asteriski_customize_register');
