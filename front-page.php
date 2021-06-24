<?php get_header(null, ['class'=>'bg-a-white']) ?>
    <section class="hearth-section">
        <div class="container">
            <img src="<?php echo get_theme_file_uri('assets/images/Heart-Anhela.png') ?>" alt="Heart Anhela">
        </div>
    </section>

    <section class="anhela-home-content">
        <div class="container">
            <div class="img-container text-center mt-5">
                <?php 
                    get_template_part(
                        'inc/icons/icons', 
                        'use', 
                        [
                            'icon'  => 'anhela-isopo', 
                            'fill'  => 'rgba(96, 97, 97, 1)',
                            'class' => 'anhela-isopo'
                        ]); 
                ?>
            </div>
            <h1 class="anhela-home--title text-center mt-5"><?php _e('Tu luz en movimiento', 'anhela') ?></h1>
            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-10">
                    <h4 class="highlight-text text-center mt-5">Anhela es un espacio para recordar y reconectar con tu luz a través del movimiento</h4>
                    <p class="text-center mt-5">
                        <strong>ANGELA MUÑOZ</strong><br>Tu guía para descubrir todo eso que ya eres<br>Intuición, Alquimia y Movimiento
                    </p>
                    <p class="text-center">
                        <a href="<?php echo home_url('/nosotros#calendly-anhela') ?>" class="main-button mt-5">
                            ¿CUÉNTAME CÓMO TE SIENTES?<br><span class="fst-italic fw-lighter d-inline-block mt-2">y así exploramos las infinitas posibilidades,<br> para tu reencuentro contigo.</span></a>
                    </p>
                    <p class="text-center mt-5">
                        <b>TIEMPO PARA ENCENDER TU LUZ</b>
                    </p>
                    <p class="text-center mt-4">
                        Cada persona tiene necesidades únicas que van cambiando con el tiempo.<br>
                        LLas consultas son Bio-Individuales y dedicadas a tu conocimiento interior y a tu conexión con la naturaleza, conócete a trevés del Kabbalah, conecta con prácticas muy sencillas, transfórmate con herramientas únicas y <b>Vive feliz</b>.
                    </p>
                </div>
            </div>
        </div>
    </section>

<?php get_footer() ?>
