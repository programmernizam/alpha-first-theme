<?php
function alpha_add_theme_page()
{
    add_menu_page(
        'Theme Options',
        'Theme Options',
        'manage_options',
        'alpha-theme-options',
        'alpha_theme_options_page',
        get_template_directory_uri() . '/assets/img/mini_logo_icon.jpg',
        99
    );
    // This submenu marge with the main menu
    add_submenu_page(
        'alpha-theme-options',
        'General Settings',
        'General Settings',
        'manage_options',
        'alpha-theme-options',
        'alpha_theme_options_page'
    );
    add_submenu_page(
        'alpha-theme-options',
        'Theme Customization',
        'Theme Customization',
        'manage_options',
        'alpha-customization',
        'alpha_theme_customization_page'
    );
}

add_action('admin_menu', 'alpha_add_theme_page');

function alpha_theme_options_page()
{
    require_once(get_template_directory() . '/inc/theme-option/general_settings.php');
}
function alpha_theme_customization_page()
{
    require_once(get_template_directory() . '/inc/theme-option/theme_customization.php');
}
