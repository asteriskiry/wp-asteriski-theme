<?php
/**
 * Theme customizer menus
 */

function asteriski_customize_register($wp_customize)
{
    /* Social links */

    $wp_customize->add_section('asteriski_social_url_options', array(
        'priority' => 19,
        'capability' => 'edit_theme_options',
        'theme_supports' => '',
        'title' => __('Some ikonit', 'asteriski'),
        'description' => __('Someprofiilien URL:t. Esim. ', 'asteriski') . 'https://facebook.com/asteriski/'
    ));

    $social_links = array( 'Facebook' => 'facebook', 'Twitter' => 'twitter', 'YouTube' => 'youtube', 'Instagram' => 'instagram', 'GitHub' => 'github', 'Linkedin' => 'linkedin' );

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

    /* Cooperation section */

    $wp_customize->add_section('asteriski_cooperation', array(
        'priority' => 16,
        'capability' => 'edit_theme_options',
        'theme_supports' => '',
        'title' => __('Yhteistyö', 'asteriski'),
        'description' => __('Yhteistyössä olevien firmojen logot', 'asteriski')
    ));

    $wp_customize->add_setting('asteriski_cooperation_url_main', array(
        'default' => '',
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'transport' => 'postMessage',
        'sanitize_callback' => 'esc_url_raw'
    ));
    $wp_customize->add_control('asteriski_cooperation_url_main', array(
        'label' => 'Pääyhteistyökumppanin kotisivujen URL',
        'section' => 'asteriski_cooperation',
        'settings' => 'asteriski_cooperation_url_main',
        'type' => 'text'
    ));
    $wp_customize->add_setting('asteriski_cooperation_image_main', array(
        'default' => '',
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control(
        new WP_Customize_Image_Control( $wp_customize, 'asteriski_cooperation_image_main', array(
            'label' => 'Pääyhteistyökumppanin logo',
            'settings'  => 'asteriski_cooperation_image_main',
            'section'   => 'asteriski_cooperation'
        ) ));

    for ($i = 1; $i < 16; $i++) {
        $wp_customize->add_setting('asteriski_cooperation_url_' . $i, array(
            'default' => '',
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport' => 'postMessage',
            'sanitize_callback' => 'esc_url_raw'
        ));
        $wp_customize->add_control('asteriski_cooperation_url_' . $i, array(
            'label' => 'Firman ' . $i . ' kotisivujen URL',
            'section' => 'asteriski_cooperation',
            'settings' => 'asteriski_cooperation_url_' . $i,
            'type' => 'text'
        ));
        $wp_customize->add_setting('asteriski_cooperation_image_' . $i, array(
            'default' => '',
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
        ));
        $wp_customize->add_control(
            new WP_Customize_Image_Control( $wp_customize, 'asteriski_cooperation_image_' . $i, array(
            'label' => 'Firman ' . $i .' logo',
            'settings'  => 'asteriski_cooperation_image_' . $i,
            'section'   => 'asteriski_cooperation'
        ) ));
    }

    /* Hero header text */

    $wp_customize->add_section('asteriski_hero_text', array(
        'priority' => 16,
        'capability' => 'edit_theme_options',
        'theme_supports' => '',
        'title' => __('Etusivun teksti', 'asteriski'),
        'description' => 'Teksti joka näkyy etusivulla Herossa'
    ));
    $wp_customize->add_setting('asteriski_hero_header_text', array(
        'default'             => '',
        'type'                => 'theme_mod',
        'sanitize_callback'   => 'wp_kses_post'
    ));
    $wp_customize->add_control('asteriski_hero_header_text', array(
        'label'    => esc_html__('Etusivun Hero teksti', 'asteriski'),
        'section'  => 'asteriski_hero_text',
        'type'     => 'textarea',
        'priority' => 2
    ));

    /* Non-index-page header image */

    $wp_customize->add_section('asteriski_sm_header_image', array(
        'priority' => 20,
        'capability' => 'edit_theme_options',
        'theme_supports' => '',
        'title' => __('Pienempi otsakekuva', 'asteriski'),
        'description' => __('Varsinainen otsakekuva näkyy vain etusivulla ja 404-sivulla. Tämä näkyy muilla sivuilla.', 'asteriski')
    ));

        $wp_customize->add_setting('asteriski_small_header_image', array(
            'default' => '',
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
        ));
        $wp_customize->add_control(
            new WP_Customize_Image_Control( $wp_customize, 'asteriski_small_header_image', array(
            'label' => 'Pienempi otsakekuva',
            'settings'  => 'asteriski_small_header_image',
            'section'   => 'asteriski_sm_header_image'
        ) ));
}
add_action('customize_register', 'asteriski_customize_register');
