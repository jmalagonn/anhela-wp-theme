<?php get_header(null, ['class' => 'bg-a-white']) ?>

<div class="container">
    <h2 class="text-center">Limbic Arc</h2>
    <div class="row mt-4">
        <div class="col text-center">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/0o3p2gzHBrA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
    <h1 class="text-center mt-5"><?php _e('Wellness', 'anhela') ?></h1>
    <div class="row justify-content-center">
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

                get_template_part('templates/parts/profundiza', 'products', ['item' => $product]);
            }
        }

        wp_reset_postdata();
        ?>

    </div>
    <div class="row mt-5 justify-content-center">
        <div class="col-lg-7 col-md-9">
            <p class="text-center fst-italic fs-5">
                Quieres probar<br>
                Cuando quieres algo es posible que pase<br>
                Cuando deseas algo te esfuerzas porque pase<br>
                Cuando...Se ANHELA algo es cuando mágicamene sucede.
            </p>
        </div>
    </div>
</div>

<?php get_footer() ?>