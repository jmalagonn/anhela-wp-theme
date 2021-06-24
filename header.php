<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head() ?>
</head>

<body class="<?php echo $args['class'] ?>">
    <?php get_template_part('inc/icons/icons') ?>
    <section class="menu-section">
        <div class="menu-icon--container text-end">
            <?php
            get_template_part(
                'inc/icons/icons',
                'use',
                [
                    'class' => 'menu-icon',
                    'icon'  => 'menu-icon',
                ]
            ) ?>
        </div>
        <?php
        
        if(has_nav_menu('primary')){
            wp_nav_menu([
                'theme_location'    => 'primary',
                'container'         => false,
                'menu_class'        => 'menu-list menu-list--hidden',
                'fallback_cb'       => false,
            ]);
        }

        ?>
    </section>
    <section class="header-logo">
        <a href="<?php echo home_url() ?>">
            <?php get_template_part('inc/icons/icons', 'use', ['icon' => 'logo-anhela', 'fill' => 'rgba(96, 97, 97, 1)']) ?>
        </a>
    </section>