<footer class="footer mt-5">
    <div class="container">
        <div class="img-container text-center">
            <?php get_template_part('inc/icons/icons', 'use', ['icon'=>'logo-anhela-oval', 'class'=>'thumbnail', 'fill'=>'rgba(96, 97, 97, 1)']) ?>
        </div>
        <?php
        
        if(has_nav_menu('primary')){
            wp_nav_menu([
                'theme_location'    => 'primary',
                'container'         => 'div',
                'menu_class'        => 'menu-bar text-center mt-5',
                'fallback_cb'       => false,
            ]);
        }

        ?>
        <p class="text-center mt-5">ANELA &#169 Todos los derechos reservados 2021</p>
        <ul class="social-networks text-center mt-5">
            <li>
                <a href="#" target="_blank">
                    <?php get_template_part('inc/icons/icons', 'use', ['icon' => 'whatsapp-icon', 'class' => 'ft-sn-icon']) ?>
                </a>
            </li>
            <li>
                <a href="#" target="_blank">
                    <?php get_template_part('inc/icons/icons', 'use', ['icon' => 'instagram-icon', 'class' => 'ft-sn-icon']) ?>
                </a>
            </li>
            <li>
                <a href="#" target="_blank">
                    <?php get_template_part('inc/icons/icons', 'use', ['icon' => 'facebook-icon', 'class' => 'ft-sn-icon']) ?>
                </a>
            </li>
        </ul>
    </div>
</footer>

<?php wp_footer() ?>

</body>

</html>