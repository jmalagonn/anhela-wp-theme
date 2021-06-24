<?php get_header(null, ['class'=>'bg-a-white']) ?>

<div class="container mt-5">
    <h1 class="text-center"><?php _e('Ángela Muñóz', 'anhela') ?></h1>
    <div class="row justify-content-center">
        <div class="col-lg-7 col-md-8 mt-5">
            <div class="aus-main-img text-center">
                <img src="<?php echo get_theme_file_uri('assets/images/angela_munoz.jpeg') ?>" alt="Angela Munoz">
            </div>
            <p class="text-center mt-4">
                Yoga para sanar, Trofología para combinar adecuadamente los alimentos, Nutrición para deportistas, cambio de hábitos, guia de meditacion y Kabbalah.
            </p>
            <p class="text-center">
                Con gran devoción por compartir y servir. Guia y compañera de muchas vidas en mejorar su salud, caminos y destinos, adelantada en el tiempo y conectada con la naturaleza de la Unidad.
            </p>
            <ul class="list-unstyled list-inline aus-sn-icons text-center mt-5">
                <li class="list-inline-item mr-3"><a href="/" target="_blank"><?php get_template_part('inc/icons/icons', 'use', ['icon' => 'instagram-icon', 'class' => 'fill-brown']) ?></a></li>
                <li class="list-inline-item"><a href="/" target="_blank"><?php get_template_part('inc/icons/icons', 'use', ['icon' => 'whatsapp-icon', 'class' => 'fill-brown']) ?></a></li>
            </ul>
        </div>
    </div>
    <div id="calendly-anhela" class="row h-100">
        <!-- Principio del widget integrado de Calendly -->
        <div class="calendly-inline-widget" data-url="https://calendly.com/eresloquedigieres/aprendo-a-protejerme-con-limbicarc" style="min-width:320px;height:630px;"></div>
        <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
        <!-- Final del widget integrado de Calendly -->
    </div>
</div>

<?php get_footer() ?>