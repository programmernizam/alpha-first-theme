<?php
/* Template Name: 404 Page */

get_header();
?>

<section id="body_area">
    <div class="container">
        <div class="row">
            <div class="col-md-12 error_page">
                <h1>404 - Page Not Found</h1>
                <p>Opps! The page you are looking for does not exist.</p>
                <?php get_search_form(); ?>
                <a href="<?php echo home_url(); ?>" class="btn btn-primary error_btn">Return to Home</a>

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