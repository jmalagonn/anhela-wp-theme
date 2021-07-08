<?php get_header(null, ['class' => 'bg-a-white']) ?>

<section class="container sentences">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="swiper-container sentences">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <h1 class="text-center">La luz es energía que sustenta la vida. Tu luz en movimiento es energía en transformación.</h1>
                    </div>
                    <div class="swiper-slide">
                        <h1 class="text-center">Tu vida y tu salud están en tus manos, en tu sentir, pensar y acciones.</h1>
                    </div>
                    <div class="swiper-slide">
                        <h1 class="text-center">Permite que tu energía te exprese cómo estás y hazte cargo de estar y sentirte san@.</h1>
                    </div>
                    <div class="swiper-slide">
                        <h1 class="text-center">Se trata de crear una vida sana y feliz, sostenerla día a día... Es posible.</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="mt-5">
    <div class="img-container text-center">
        <?php
        get_template_part(
            'inc/icons/icons',
            'use',
            [
                'icon'  => 'anhela-isopo',
                'fill'  => 'rgba(96, 97, 97, 1)',
                'class' => 'anhela-isopo'
            ]
        );
        ?>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-9">
                <h3 class="main-font text-center mt-5">¿Estás listo para conectar con todo tu potencial y vivirlo?</h3>
                <p class="text-center mt-3">
                    Más allá de los síntomas veremos tu campo energético, te harás consciente de tu naturaleza que tienes todo en tí para disfrutar la vida.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="mt-5">
    <h2 class="text-center"><?php _e('Lo que vivirás en tu consulta', 'anhela') ?></h2>
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-6">
                <div class="appoinments h-100">
                    <div class="content bg-white h-100">
                        <h2>Inhala</h2>
                        <div class="content-text mt-4">
                            <ul>
                                <li>Descubrimos cómo estas energéticamente</li>
                                <li>Analizamos tu energía y las infinitas posibilidades</li>
                                <li>Reprogramamos los parámetros que te impiden estar al 100%</li>
                                <li>Creamos a tu medida las herramientas que te mantienen</li>
                                <li>Nuestros encuentros están basados en el descubrimiento de tu energía sanadora a través de la física cuántica, la nutrición integral con énfasis en la trofología y la aplicación de hábitos realistas y prácticos</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="appoinments h-100">
                    <div class="content bg-white h-100">
                        <h2>Exhala</h2>
                        <div class="content-text mt-4">
                            <ul>
                                <li>Y sé...</li>
                                <li>El espejo que tu eres</li>
                                <li>Con las influencias del universo en ti</li>
                                <li>Con lo que te mueve</li>
                                <li>Con un trabajo interno que se refleja en tu entorno y tu vida</li>
                                <li>Con un día armónico</li>
                                <li>Con todo tu potencial energético</li>
                                <li>Con las mejores herramientas para estar</li>
                                <li>Alquimia para autocuidarte</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <p class="text-center">
        <a href="<?php echo home_url('/nosotros#calendly-anhela') ?>" class="main-button mt-5"><?php _e('Agenda tu consulta', 'anhela') ?></a>
    </p>
</section>

<?php get_footer() ?>