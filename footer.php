<?php

/*
@ Theme Footer Section
@ This file is responsible for the footer area of the theme. 
*/
?>

<footer id="footer_area">
    <div id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <?php dynamic_sidebar('footer-1') ?>
                </div>
                <div class="col-md-4">
                    <?php dynamic_sidebar('footer-2') ?>
                </div>
                <div class="col-md-4">
                    <?php dynamic_sidebar('footer-3') ?>
                </div>
            </div>
        </div>
    </div>
    <section id="copyright_area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p><?php echo get_theme_mod('alpha_copyright_text') ?></p>
                </div>
            </div>
        </div>
    </section>
</footer>
<?php wp_footer(); ?>
</body>

</html>