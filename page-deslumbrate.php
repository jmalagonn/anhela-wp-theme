<?php get_header(null, ['class' => 'bg-a-white']) ?>

<div class="container">
    <h1 class="text-center"><?php _e('Productos', 'anhela') ?></h1>
    <div class="row justify-content-center mt-5">

        <?php

        $args = array(
            'post_type' => 'product',
            'order'   => 'ASC',
            'tax_query' => array(
                array(
                    'taxonomy'  => 'product_cat',
                    'field'     => 'slug',
                    'terms'     => 'producto'
                )
            )
        );
        $wk_loop = new WP_Query($args);

        if ($wk_loop->have_posts()) {
            while ($wk_loop->have_posts()) {
                $wk_loop->the_post();
                $post_id = get_post()->ID;
                $product = wc_get_product($post_id);

                get_template_part('templates/parts/profundiza', 'products', ['item'=>$product]);
            }
        }

        wp_reset_postdata();
        ?>
    
    </div>
</div>

<?php get_footer() ?>