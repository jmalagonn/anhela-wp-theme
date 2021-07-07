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
    <?php get_template_part('templates/partials/nav') ?>
    <?php get_template_part('templates/partials/nav', 'mobile') ?>
    
    <section class="header-logo">
        <a href="<?php echo home_url() ?>">
            <?php get_template_part('inc/icons/icons', 'use', ['icon' => 'logo-anhela', 'fill' => 'rgba(96, 97, 97, 1)']) ?>
        </a>
    </section>