<section class="menu-section--desktop">
    <?php
    if (has_nav_menu('primary')) {
        wp_nav_menu([
            'theme_location'    => 'primary',
            'container'         => false,
            'menu_class'        => 'menu-list menu-list--hidden',
            'fallback_cb'       => false,
        ]);
    }
    ?>
</section>