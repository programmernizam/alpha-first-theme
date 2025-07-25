<?php
get_header();
?>

<section id="body_area">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <?php get_template_part('template_part/post_setup'); ?>

                <div id="comment_area">
                    <?php if (comments_open()) : ?>
                        <?php comments_template(); ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-md-3">
                <?php get_sidebar(); ?>
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