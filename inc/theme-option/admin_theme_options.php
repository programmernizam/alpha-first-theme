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
}

add_action('admin_menu', 'alpha_add_theme_page');

function alpha_theme_options_page()
{
    echo '<h1>Theme Options</h1>';
    echo '<p>Here you can customize your theme settings.</p>';
}
