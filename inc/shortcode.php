<?php
// WordPress Shortcode

function alpha_shortcode()
{
    return "This is a shortcode example.";
}

add_shortcode('alpha_shortcode', 'alpha_shortcode');


function button_shortcode($atts, $content = null)
{
    $values = shortcode_atts(
        array(
            'url' => '#',
            'class' => 'btn btn-primary',
        ),
        $atts
    );

    return '<a href="' . esc_attr($values['url']) . '" class="' . esc_attr($values['class']) . '">' . do_shortcode($content) . '</a>';
}
add_shortcode('button', 'button_shortcode');
