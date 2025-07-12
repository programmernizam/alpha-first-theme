<?php
// WordPress Shortcode

// Example Shortcode
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


// Service Shortcode
function service_shortcode($atts)
{
    ob_start();
    $query = new WP_Query(array(
        'post_type' => 'service',
        'posts_per_page' => 3,
        'order' => 'ASC',
        'orderby' => 'date',
    ));
    if ($query->have_posts()) {
?>
        <div id="service_area">
            <div class="container">
                <div class="row">
                    <?php
                    while ($query->have_posts()) : $query->the_post();
                    ?>
                        <div class="col-md-4">
                            <div class="service_item">
                                <h2><?php the_title(); ?></h2>
                                <?php echo the_post_thumbnail('service'); ?>
                                <p><?php the_excerpt() ?></p>
                            </div>
                        </div>
                    <?php
                    endwhile;
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
        </div>
<?php
        $myvariable = ob_get_clean();
        return $myvariable;
    }
}

add_shortcode('service', 'service_shortcode');
