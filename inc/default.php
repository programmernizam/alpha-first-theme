<?php

// Theme title
add_theme_support('title-tag');

// Thumbnail image area
add_theme_support('post-thumbnails', array('post', 'page', 'service'));
add_image_size('service', 300, 300, true);
add_image_size('post-thumbnails', 800, 500, true);

// Excerpt to 40 words
function alpha_excerpt_more($more)
{
    return '<br><a class="readmore" href="' . get_permalink(get_the_ID()) . '">' . 'Read more' . '</a>';
}

add_filter('excerpt_more', 'alpha_excerpt_more');

function alpha_excerpt_length($length)
{
    return 20;
}
add_filter('excerpt_length', 'alpha_excerpt_length', 999);


// Page navigation Function
function alpha_pagination()
{
    global $wp_query, $wp_rewrite;
    $pages = '';
    $max = $wp_query->max_num_pages;
    if (!$current = get_query_var('paged')) $current = 1;
    $args['base'] = str_replace(999999999, '%#%', get_pagenum_link(999999999));
    $args['total'] = $max;
    $args['current'] = $current;
    $total = 1;
    $args['prev_text'] = 'Prev';
    $args['next_text'] = 'Next';
    if ($max > 1) echo '</pre>
    <div class="wp_pagination">';
    if ($total == 1 && $max > 1) $pages = '<p class="pages">Page ' . $current . ' <span>of</span>' . $max . '</p>';
    echo $pages . paginate_links($args);
    if ($max > 1) echo '</div><pre>';
}
