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