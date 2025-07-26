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
        'taxonomies' => array('category', 'post_tag'),
    ));
}

add_action('init', 'custom_service');

function query_post_type($query)
{
    if (is_category()) {
        $post_type = get_query_var('post_type');
        if ($post_type) {
            $post_type = $post_type;
        } else {
            $post_type = array('post', 'service');
            $query->set('post_type', $post_type);
            return $query;
        }
    }
}

add_filter('pre_get_posts', 'query_post_type');

function custom_slider()
{
    register_post_type('slider', array(
        'labels' => array(
            'name' => __('Sliders', 'alpha'),
            'singular_name' => __('Slider', 'alpha'),
            'add_new' => __('Add new Slider', 'alpha'),
            'add_new_item' => __('Add new Slider', 'alpha'),
            'edit_item' => __('Edit', 'alpha'),
            'new_item' => __('New Slider', 'alpha'),
            'view_item' => __('View Slider', 'alpha'),
            'not_found' => __('No Slider found', 'alpha'),
            'not_found_in_trash' => __('No Slider found in Trash', 'alpha'),
        ),
        'menu_icon' => 'dashicons-images-alt2',
        'public' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'show_ui' => true,
        'menu_position' => 7,
        'has_archive' => true,
        'hierarchical' => true,
        'capability_type' => 'post',
        'rewrite' => array('slug' => 'slider'),
        'supports' => array('title', 'editor', 'thumbnail'),
    ));
}

add_action('init', 'custom_slider');
