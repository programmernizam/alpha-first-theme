<?php
echo '<h1>Theme Options</h1>';
echo '<p>Customize Your <strong>Header Top Area</strong> Information</p>';
?>
<div id="theme_option_body">
    <div class="main_area_option">
        <form action="options.php" method="post">
            <?php wp_nonce_field('update-options') ?>
            <label for="alpha_address_info" name="alpha_address_info">Address Info</label>
            <input type="text" name="alpha_address_info" value="<?php echo get_option('alpha_address_info'); ?>" placeholder="Enter your address info here">

            <label for="alpha_email_info" name="alpha_email_info">Address Info</label>
            <input type="text" name="alpha_email_info" value="<?php echo get_option('alpha_email_info'); ?>" placeholder="Enter your email info here">

            <label for="alpha_phone_info" name="alpha_phone_info">Address Info</label>
            <input type="text" name="alpha_phone_info" value="<?php echo get_option('alpha_phone_info'); ?>" placeholder="Enter your phone info here">

            <input type="hidden" name="action" value="update">
            <input type="hidden" name="page_options" value="alpha_address_info, alpha_email_info, alpha_phone_info">
            <input type="submit" value="<?php _e('Save Changes', 'alpha'); ?>">
        </form>
    </div>
</div>

<?php
?>