<section class="menu-section" <?php echo is_user_logged_in() ? 'style="top: 46px"' : null ?>>
    <div class="menu-icon--container d-flex justify-content-end">
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
    <div class="menu-list--container">
        <?php

        if (has_nav_menu('primary')) {
            wp_nav_menu([
                'theme_location'    => 'primary',
                'container'         => false,
                'menu_class'        => 'menu-list',
                'fallback_cb'       => false,
            ]);
        }

        ?>
    </div>
</section>