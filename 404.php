<?php get_header() ?>
    <style>
        :root{
            --url: ''
        }
        .animated-404{
            position: fixed;
            width: 100%;
            height: 100%;
            background: url('http://localhost/anhela/wp-content/themes/anhela/assets/images/animated-bg.gif') no-repeat center;
            background-size: cover;
        }
    </style>
    <div class="animated-404">
        <?php echo get_theme_file_uri() ?>
    </div>
<?php get_footer() ?>