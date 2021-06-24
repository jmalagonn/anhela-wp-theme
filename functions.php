<?php

// Setup
define( 'AN_DEV_MODE', true );

// Includes
include(get_theme_file_path( 'inc/front/enqueue.php' ));
include(get_theme_file_path( 'inc/setup.php' ));

// Hooks
add_action( 'wp_enqueue_scripts', 'an_enqueue');
add_action( 'after_setup_theme', 'an_setup_theme');

// Shortcodes