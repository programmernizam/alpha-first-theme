<?php

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
