<?php
/*
* Theme front page template
*/
get_header();
?>

<div id="slider_area">
    <div class="slider">
        <?php query_posts('post_type=slider&status=publish&posts_per_page=3&order=ASC&paged=' . get_query_var('post'));

        if (have_posts()) :
            while (have_posts()) : the_post();
        ?>
                <div>
                    <?php echo the_post_thumbnail(); ?>
                </div>
        <?php
            endwhile;
        endif;
        ?>
    </div>
</div>

<div id="service_area">
    <div class="container">
        <div class="row">
            <?php query_posts('post_type=service&status=publish&posts_per_page=3&order=ASC&paged=' . get_query_var('post'));

            if (have_posts()) :
                while (have_posts()) : the_post();
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
            else :
                echo '<p>' . __('Sorry, no services found.', 'alpha') . '</p>';
            endif;
            ?>
        </div>
    </div>
</div>

<?php
get_footer();
?>