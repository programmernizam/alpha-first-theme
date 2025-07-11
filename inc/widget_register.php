<?php
// Sidebar register function

function alpha_widget_register()
{
    register_sidebar(array(
        'name' => __('Main Widget Area', 'alpha'),
        'id' => 'sidebar-1',
        'description' => __('Widgets in this area will be shown on the sidebar.', 'alpha'),
        'before_widget' => '<div class="child_sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
    register_sidebar(array(
        'name' => __('Footer 1', 'alpha'),
        'id' => 'footer-1',
        'description' => __('Widgets in this area will be shown on the footer.', 'alpha'),
        'before_widget' => '<div class="footer_1_widget">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
    register_sidebar(array(
        'name' => __('Footer 2', 'alpha'),
        'id' => 'footer-2',
        'description' => __('Widgets in this area will be shown on the footer.', 'alpha'),
        'before_widget' => '<div class="footer_2_widget">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
    register_sidebar(array(
        'name' => __('Footer 3', 'alpha'),
        'id' => 'footer-3',
        'description' => __('Widgets in this area will be shown on the footer.', 'alpha'),
        'before_widget' => '<div class="footer_3_widget">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
}

add_action('widgets_init', 'alpha_widget_register');
