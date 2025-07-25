<?php
if (have_posts()) :
    while (have_posts()): the_post();
?>
        <div class="blog_area">
            <div class="post_thumb">
                <a href="<?php the_permalink(); ?>">
                    <?php echo the_post_thumbnail('post-thumbnails'); ?>
                </a>
            </div>
            <div class="post_details">
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <p><i class="fas fa-calendar"></i> <?php echo get_the_date(); ?> <spa>At</spa> <i class="fas fa-clock"></i><?php echo get_the_time(); ?></p>
                <?php the_excerpt() ?>
            </div>
        </div>
<?php
    endwhile;
else:
    echo "No post found";
endif;
?>
<div id="page_nav">
    <?php if ('alpha_pagination') {
        alpha_pagination();
    } else { ?>
        <?php next_post_link(); ?>
        <?php previous_post_link(); ?>
    <?php } ?>
</div>