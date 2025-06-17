<?php
/*
* @my theme functions and definitions
*/

// Theme title
add_theme_support('title-tag');

// Google fonts enqueue
function alpha_google_fonts()
{
    wp_enqueue_style('alpha-google-fonts', '<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&family=Poppins&display=swap" rel="stylesheet">', false);
}
add_action('wp_enqueue_scripts', 'alpha_google_fonts');

// Theme CSS & Js file calling
function alpha_css_js_file_calling()
{
    // CSS Calling
    wp_enqueue_style('alpha-style', get_stylesheet_uri());
    wp_register_style('alpha-bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), '5.3.6', 'all');
    wp_enqueue_style('alpha-custom', get_template_directory_uri() . '/css/custom.css', array(), '1.0.0', 'all');
    wp_enqueue_style('alpha-bootstrap');
    wp_enqueue_style('alpha-custom');

    // JQuery Calling
    wp_enqueue_script('jquery');
    wp_enqueue_script('alpha-bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array(), '5.3.6', true);
    wp_enqueue_script('alpha-main', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true);
};

add_action('wp_enqueue_scripts', 'alpha_css_js_file_calling');

// Theme function
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
};

add_action('customize_register', 'alpha_customize_register');

// Menu register
register_nav_menu('primary', __('Primary Menu', 'alpha'));

// Walker menu properties it's optional if anytime it wanted
// function alpha_nav_description($item_output, $item, $depth, $args)
// {
//     if (!empty($item->description)) {
//         $item_output = str_replace(
//             $args->link_after . '</a>',
//             '<span class="menu-description">' . $item->description . '</span>' . $args->link_after . '</a>',
//             $item_output
//         );
//     }
//     return $item_output;
// }
// add_filter('walker_nav_menu_start_el', 'alpha_nav_description', 10, 4);
