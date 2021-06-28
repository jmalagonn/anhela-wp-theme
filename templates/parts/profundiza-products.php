<?php $data = $args["item"]->get_data(); ?>

<div class="col-lg-4 col-md-6 mb-3">
    <div class="wk-card h-100">
        <div class="wk-card--content bg-white h-100">
            <h2 class="wk-title">
                <?php echo $data["name"] ?>
            </h2>
            <h4 class="wk-subtitle fst-italic main-font fw-normal">
                <?php echo $data["short_description"] ?>
            </h4>
            <hr>
            <p class="wk-description">
                <?php echo $data["description"] ?>
            </p>
            <?php
            if (empty($data["price"])) {
            ?>
                <div class="wk-button">
                    <a href="<?php echo $args["item"]->get_attribute('product_link') ?>" target="_blank" class="btn"><?php _e('Ver más', 'anhela') ?></a>
                </div>
            <?php
            } else {
            ?>
                <p class="wk-price">
                    <b><?php _e('Precio', 'anhela') ?>:</b> $<?php echo $data["price"] ?>
                </p>
                <div class="wk-button">
                    <a href="<?php echo get_permalink($data["id"]) ?>" class="btn"><?php _e('Comprar', 'anhela') ?></a>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</div>