<?php

/*
* template name: Главная страница
*/

get_header();
?>

<main class="main-page">
    <div class="container">
        <h1>
            <?php the_field('title-main-page'); ?>
        </h1>
    </div>

    <div class="main-image"
         style="background-image: url(
            <?php if( get_field('image-1-main-page', 'option') ):
                the_field('image-1-main-page', 'option');
            endif; ?>
         )"
    >
    </div>
    <div class="container about">
        <div class="left-block">
            <h2 class="head">
                <?php the_field('main-page-about-title'); ?>

            </h2>
            <div class="content-text">
                <?php the_field('main-page-about-description'); ?>
            </div>
            <div class="bullet">
                <?php
                $hero = get_field('mp-about-tezis-block');
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
             style="background-image: url(<?php the_field('main-page-about-image'); ?>)"
        >
        </div>
        <div class="bullet-m">
            <?php
            $hero = get_field('mp-about-tezis-block');
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

    <?php
    $images = get_field('main-page-gallery');

    if( $images ): ?>
    <div class="swiper-container main-slider">
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
    <?php

    $args = array(
        'posts_per_page' => 3,
        'post_type' => 'stocks'
    );
    $query = new WP_Query( $args );
    if( $query->have_posts() ){ ?>
    <div class="stocks container">
        <h2>
            <?php the_field('main-stocks') ?>
        </h2>
        <p>
            <?php the_field('main-stocks-text') ?>
        </p>
        <div class="content">
            <?php
                while( $query->have_posts() ){
                    $query->the_post();
                    ?>
                    <div class="block-st">
                        <div class="img"
                             style="background-image: url(<?php the_field('stocks-img'); ?>)"
                        >
                        </div>
                        <div class="title"><?php the_title(); ?></div>
                    </div>
              <?php
            } ?>
        </div>
        <?php

        wp_reset_postdata(); // сбрасываем переменную $post
        } ?>
        <div class="block2">
            <a href="<?php the_field('main-stocksss')?>" class="button-primary">
                Смотреть все
            </a>
        </div>
    </div>


    <div class="container">
        <h2 class="h2-m"><?php the_field('main-services') ?></h2>
    </div>
    <div class="container services">


        <?php
        $h2 = get_field('main-services');
        $args = array(
            'posts_per_page' => 10,
            'post_type' => 'services',
            'order' => 'ASC'
        );
        $query = new WP_Query( $args );
        if( $query->have_posts() ){ ?>
            <?php
            $i = true;
            while( $query->have_posts() ){
                $query->the_post();

                ?>
                <div class="block">

                <?php if($i) :
                ?>

                    <h2><?php echo $h2 ?></h2>
                <?php endif;
                $i = false; ?>
                    <div class="img"
                         style="background: url(<?php the_field('services-image')?>)"
                    ></div>
                    <div class="s-block">
                        <div class="title">
                            <?php the_title()?>
                        </div>
                        <a href="<?php the_permalink(); ?>" class="service-link">
                            Подробнее
                            <img src="<?php echo get_template_directory_uri() . '/image/arrow-link.svg' ?>" alt="">
                        </a>
                    </div>
                </div>
                <?php
            } ?>
            <?php

            wp_reset_postdata(); // сбрасываем переменную $post
        } ?>

        <div class="block2">
            <a href="<?php the_field('main-all-services')?>" class="button-primary">
                Подробнее
            </a>
        </div>
    </div>

    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A274f6c883828e30abd3a733cbb6a9d6d2bd21782c8b4e494feeb2f5d2b7f4953&amp;width=100%25&amp;height=450&amp;lang=ru_RU&amp;scroll=false"></script>
<?php get_footer();
?>