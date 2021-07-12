<?php get_header(null, ['class'=>'bg-a-white']) ?>
<br><br><br>
INDEX

<?php
    if(have_posts()){
        while(have_posts()){
            the_post();

            the_content();
        }
    }
?>

<?php get_footer() ?>