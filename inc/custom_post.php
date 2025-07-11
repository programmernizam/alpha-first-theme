<?php

function custom_service()
{
    register_post_type('service', array(
        'labels' => array(
            'name' => __('Services', 'alpha'),
            'singular_name' => __('Service', 'alpha'),
            'add_new' => __('Add new Service', 'alpha'),
            'add_new_item' => __('Add new Service', 'alpha'),
            'edit_item' => __('Edit', 'alpha'),
            'new_item' => __('New Service', 'alpha'),
            'view_item' => __('View Service', 'alpha'),
            'not_found' => __('No Service found', 'alpha'),
            'not_found_in_trash' => __('No Service found in Trash', 'alpha'),
        ),
        'menu_icon' => 'dashicons-list-view',
        'public' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'show_ui' => true,
        'menu_position' => 6,
        'has_archive' => true,
        'hierarchical' => true,
        'capability_type' => 'post',
        'rewrite' => array('slug' => 'service'),
        'supports' => array('title', 'editor', 'thumbnail'),
    ));
}

add_action('init', 'custom_service');
