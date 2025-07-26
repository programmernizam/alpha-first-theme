<!DOCTYPE html>
<html lang="<?php language_attributes() ?>" class="no-js">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header id="header_area" class="<?php echo get_theme_mod('alpha_menu_position') . ' ' . get_theme_mod('alpha_menu_theme'); ?>">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-3">
                    <a href="<?php echo home_url(); ?>" class="logo">
                        <img src="<?php echo get_theme_mod('alpha_logo') ?>" alt="logo">
                    </a>
                </div>
                <div class="col-md-9">
                    <?php wp_nav_menu(array('theme_location' => 'primary', 'menu_id' => 'nav')) ?>
                </div>
            </div>
        </div>
    </header>