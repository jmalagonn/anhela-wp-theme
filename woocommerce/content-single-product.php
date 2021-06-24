<?php

defined('ABSPATH') || exit;
global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action('woocommerce_before_single_product');

if (post_password_required()) {
    echo get_the_password_form(); // WPCS: XSS ok.
    return;
}
?>

<div class="container">
    <div id="product-<?php the_ID(); ?>" <?php wc_product_class('', $product); ?>>
        <div class="row mt-5">
            <?php
            if ($product->get_image_id()) {
            ?>
                <div class="col-lg-6">
                    <?php do_action('woocommerce_before_single_product_summary'); ?>
                </div>
            <?php
            }
            ?>
            <div class="col-lg-6">
                <div class="summary entry-summary">
                    <?php do_action('woocommerce_single_product_summary'); ?>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <?php do_action('woocommerce_after_single_product_summary'); ?>
        </div>
    </div>
</div>

<?php do_action('woocommerce_after_single_product'); ?>