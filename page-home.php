<?php

/*
* template name: Главная страница
*/

get_header();
?>

<main class="main-page">
    <div class="container">
        <h1>
            <?php the_field('title-main-page', 'option'); ?>
        </h1>
    </div>
    <div class="main-image"
         style="background: url(
            <?php if( get_field('image-1-main-page', 'option') ):
                the_field('image-1-main-page', 'option');
            endif; ?>
         )"
    >
    </div>
    <div class="container about">
        <div class="left-block">
            <h2 class="head">
                <?php the_field('main-page-about-title', 'option'); ?>
            </h2>
            <div class="content-text">
                <?php the_field('main-page-about-description', 'option'); ?>
            </div>
            <div class="bullet">
                <?php
                $hero = get_field('mp-about-tezis-block', 'option');
                if( $hero ): ?>
                    <div class="b-block">
                        <div class="number">
                            <?php echo $hero['text-1']?>
                        </div>
                        <div class="text">
                            <?php echo $hero['text-2']?>
                        </div>
                    </div>
                    <div class="b-block">
                        <div class="number">
                            <?php echo $hero['text-3']?>
                        </div>
                        <div class="text">
                            <?php echo $hero['text-4']?>
                        </div>
                    </div>
                    <div class="b-block">
                        <div class="number">
                            <?php echo $hero['text-5']?>
                        </div>
                        <div class="text">
                            <?php echo $hero['text-6']?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="right-block"
             style="background: url(<?php the_field('main-page-about-image', 'option'); ?>)"
        >
        </div>
    </div>

        <?php
        $images = get_field('main-page-gallery', 'option');

if( $images ): ?>
        <div class="swiper-container main-slider">
            <div class="swiper-wrapper">
                <?php foreach( $images as $image ): ?>
                    <div class="swiper-slide one-slide"
                         style="background: url(<?php echo esc_url($image['sizes']['large']); ?>)"
                    >
                    </div>
                <?php endforeach; ?>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
        </div>
        <?php endif; ?>

</main>

<?php get_footer();
?>