<?php

defined('ABSPATH') || exit;

/*
 * @hooked wc_empty_cart_message - 10
 */
?>
<div class="container">
    <?php do_action('woocommerce_cart_is_empty'); ?>
</div>

<?php
if (wc_get_page_id('shop') > 0) : ?>
    <div class="container">
        <p class="return-to-shop">
            <a class="button wc-backward" href="<?php echo esc_url(apply_filters('woocommerce_return_to_shop_redirect', wc_get_page_permalink('shop'))); ?>">
                <?php
                /**
                 * Filter "Return To Shop" text.
                 *
                 * @since 4.6.0
                 * @param string $default_text Default text.
                 */
                echo esc_html(apply_filters('woocommerce_return_to_shop_text', __('Return to shop', 'woocommerce')));
                ?>
            </a>
        </p>
    </div>
<?php endif; ?>