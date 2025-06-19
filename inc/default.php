<?php

// Theme title
add_theme_support('title-tag');

// Thumbnail image area
add_theme_support('post-thumbnails', array('post', 'page'));
add_image_size('post-thumbnails', 800, 500, true);
