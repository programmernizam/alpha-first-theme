<?php

/*
 @ Search template
 @ This template is used to display search results.
 */

get_header();
?>

<section id="body_area">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div id="search_title">
                    <h1 class="search-title">
                        <?php printf(__('Search Results for: %s', 'alpha'), '<span>' . get_search_query() . '</span>') ?>
                    </h1>
                </div>
                <?php get_template_part('template_part/blog_setup'); ?>
            </div>
            <div class="col-md-3">
                <?php get_sidebar() ?>
            </div>
        </div>
    </div>
</section>
<?php
/** 
 * Footer template
 */
get_footer();
?>