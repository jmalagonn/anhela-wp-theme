<?php

function an_enqueue(){
    $uri = get_theme_file_uri();

    wp_register_style('an_fonts', $uri . '/assets/css/fonts.css');
    wp_register_style('bootstrap', $uri . '/assets/css/bootstrap/css/bootstrap.min.css');
    wp_register_style('an_style', $uri . '/assets/css/style.css');
    wp_register_style('swiper', $uri . '/assets/css/swiper/swiper-bundle.min.css');

    wp_enqueue_style( 'bootstrap' );
    wp_enqueue_style( 'an_fonts' );
    wp_enqueue_style( 'an_style' );

    wp_register_script( 'an_js', $uri . '/assets/js/index.js', [], false, true );
    wp_register_script('swiper_js', $uri . '/assets/js/swiper-bundle.min.js', [], false, true);

    if(is_page('tu-luz-en-movimiento')){
        wp_enqueue_style('swiper');
        wp_enqueue_script('swiper_js');
    }

    wp_enqueue_script( 'an_js' );
}