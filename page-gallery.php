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
<!--        --><?php
//        $images = get_field('gallery-photo'); ?>
<!--        <div class="grid are-images-unloaded">-->
<!--            <div class="grid__col-sizer"></div>-->
<!--            <div class="grid__gutter-sizer"></div>-->
<!---->
<!--         --><?php //if( $images ): ?>
<!---->
<!--            --><?php //foreach( $images as $image ): ?>
<!--                 <div class="grid__item">-->
<!--                     <img src="--><?php //echo esc_url($image['sizes']['large']); ?><!--" alt="">-->
<!--                 </div>-->
<!--            --><?php //endforeach; ?>
<!---->
<!--        --><?php //endif; ?>
<!--        </div>-->
<!---->
<!--        <div class="page-load-status">-->
<!--            <div class="loader-ellips infinite-scroll-request">-->
<!--                <span class="loader-ellips__dot"></span>-->
<!--                <span class="loader-ellips__dot"></span>-->
<!--                <span class="loader-ellips__dot"></span>-->
<!--                <span class="loader-ellips__dot"></span>-->
<!--            </div>-->
<!--            <p class="infinite-scroll-last">End of content</p>-->
<!--            <p class="infinite-scroll-error">No more pages to load</p>-->
<!--        </div>-->
        <?php echo do_shortcode('[cc_img_gallery id="131"]')?>
    </div>
</main>


<?php get_footer();
?>