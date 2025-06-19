<?php

function alpha_customize_register($wp_customize)
{
    // Header Area Function
    $wp_customize->add_section('alpha_header_area', array(
        'title' => __('Header Area', 'alpha'),
        'description' => 'If you interested in customizing the header area, you can do it here.',
    ));
    $wp_customize->add_setting('alpha_logo', array(
        'default' => get_bloginfo('template_directory') . '/assets/img/logo.webp',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'alpha_logo', array(
        'label' => 'Logo Upload',
        'description' => 'Upload your logo here.',
        'section' => 'alpha_header_area',
        'settings' => 'alpha_logo',
    )));

    // Menu Position Option
    $wp_customize->add_section('alpha_menu_position', array(
        'title' => __('Menu Position', 'alpha'),
        'description' => 'You can change the menu position here.',
    ));
    $wp_customize->add_setting('alpha_menu_position', array(
        'default' => 'left_menu',
    ));
    $wp_customize->add_control('alpha_menu_position', array(
        'label' => 'Menu Position',
        'description' => 'Select the position of the menu in the header area.',
        'section' => 'alpha_menu_position',
        'settings' => 'alpha_menu_position',
        'type' => 'radio',
        'choices' => array(
            'left_menu' => __('Left', 'alpha'),
            'center_menu' => __('Center', 'alpha'),
            'right_menu' => __('Right', 'alpha'),
        ),
    ));

    // Menu Theme Option
    $wp_customize->add_section('alpha_menu_theme', array(
        'title' => __('Menu Theme', 'alpha'),
        'description' => 'You can change the menu theme here.',
    ));
    $wp_customize->add_setting('alpha_menu_theme', array(
        'default' => 'light',
    ));
    $wp_customize->add_control('alpha_menu_theme', array(
        'label' => 'Menu Theme',
        'description' => 'Select the theme of the menu in the header area.',
        'section' => 'alpha_menu_theme',
        'settings' => 'alpha_menu_theme',
        'type' => 'radio',
        'choices' => array(
            'light' => __('Light', 'alpha'),
            'dark' => __('Dark', 'alpha'),
        ),
    ));
    // Footer Theme Option
    $wp_customize->add_section('alpha_footer_option', array(
        'title' => __('Footer Option', 'alpha'),
        'description' => 'You can change the footer option here.',
    ));
    $wp_customize->add_setting('alpha_copyright_text', array(
        'default' => '&copy; Copyright ' . date('Y') . ' Alpha. All rights reserved.',
    ));
    $wp_customize->add_control('alpha_copyright_text', array(
        'label' => 'Copyright Text',
        'description' => 'If you want to change the copyright text, you can do it here.',
        'section' => 'alpha_footer_option',
        'settings' => 'alpha_copyright_text',
        'type' => 'textarea',
    ));
};

add_action('customize_register', 'alpha_customize_register');
