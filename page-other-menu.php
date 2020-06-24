<?php
/*
* template name: Другие меню
*/


get_header();
?>

    <main class="main-menu-page">
        <div class="container">
            <h1 class="title">
                <?php the_title() ?>
            </h1>
            <div class="menu-list">
                <div class="menu-block active">
                    <?php if(get_field('other-image-1')) :?>
                        <img class="image" src="<?php the_field('other-image-1') ?>" alt="">
                    <?php endif; ?>
                    <?php if(get_field('other-image-2')) :?>
                        <img class="image" src="<?php the_field('other-image-2') ?>" alt="">
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <?php
        $images = get_field('other-gallery');

        if( $images ): ?>
            <div class="swiper-container main-slider count-2">
                <div class="swiper-wrapper">
                    <?php foreach( $images as $image ): ?>
                        <div class="swiper-slide one-slide"
                             style="background-image: url(<?php echo esc_url($image['sizes']['large']); ?>)"
                        >
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endif; ?>
        <div class="container">
            <div class="swiper-pagination"></div>
        </div>
    </main>

<?php
get_footer();
?>