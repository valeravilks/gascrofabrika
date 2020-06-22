<?php

/*
* template name: Галерея
*/

get_header();
?>
<main class="gallery">
    <div class="container">
        <h1 class="h1">
            <?php the_title() ?>
        </h1>
        <?php echo do_shortcode('[cc_img_gallery id="131"]')?>
    </div>
</main>


<?php get_footer();
?>