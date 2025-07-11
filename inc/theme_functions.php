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

    // Theme Color & Options
    $wp_customize->add_section('alpha_theme_color', array(
        'title' => __('Theme Color & Options', 'alpha'),
        'description' => 'You can change the theme color and options here.',
    ));
    $wp_customize->add_setting('alpha_primary_color', array(
        'default' => '#ea1a70',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'alpha_primary_color', array(
        'label' => 'Primary Color',
        'description' => 'Select the primary color for the theme.',
        'section' => 'alpha_theme_color',
        'settings' => 'alpha_primary_color',
    )));
    $wp_customize->add_setting('alpha_secondary_color', array(
        'default' => '#ffffff',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'alpha_secondary_color', array(
        'label' => 'Secondary Color',
        'description' => 'Select the secondary color for the theme.',
        'section' => 'alpha_theme_color',
        'settings' => 'alpha_secondary_color',
    )));
    $wp_customize->add_setting('alpha_text_color', array(
        'default' => '#262626',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'alpha_text_color', array(
        'label' => 'Text Color',
        'description' => 'Select the secondary color for the theme.',
        'section' => 'alpha_theme_color',
        'settings' => 'alpha_text_color',
    )));
    $wp_customize->add_setting('alpha_global_bg_color', array(
        'default' => '#f4f4f4',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'alpha_global_bg_color', array(
        'label' => 'Global Background Color',
        'description' => 'Select the secondary color for the theme.',
        'section' => 'alpha_theme_color',
        'settings' => 'alpha_global_bg_color',
    )));
};

add_action('customize_register', 'alpha_customize_register');

function alpha_theme_color_customize_css()
{
?>
    <style>
        body {
            background-color: var(--global-bg);
        }

        :root {
            --primary-color: <?php echo get_theme_mod('alpha_primary_color', '#ea1a70'); ?>;
            --secondary-color: <?php echo get_theme_mod('alpha_secondary_color', '#ffffff'); ?>;
            --text-color: <?php echo get_theme_mod('alpha_text_color', '#262626'); ?>;
            --global-bg: <?php echo get_theme_mod('alpha_global_bg_color', '#f4f4f4'); ?>;
        }
    </style>
<?php
}
add_action('wp_head', 'alpha_theme_color_customize_css');
