<?php
/*
* template name: Главное меню
*/


get_header();
?>

    <main class="main-menu-page">
        <div class="container">
            <h1 class="title">
                <?php the_field('main-menu-title', 'option') ?>
            </h1>
            <div class="text">
                <?php the_field('main-menu-text', 'option') ?>
            </div>
            <div class="block-day">
                <button class="day active">Понедельник</button>
                <button class="day">Вторник</button>
                <button class="day">Среда</button>
                <button class="day">Четверг</button>
                <button class="day">Пятница</button>
                <button class="day">Суббота</button>
                <button class="day">Воскресенье</button>
            </div>
            <div class="menu-list">
                <div class="menu-block active">
                    <?php if(get_field('main-menu-1')) :?>
                        <img class="image" src="<?php the_field('main-menu-1') ?>" alt="">
                    <?php endif; ?>
                    <?php if(get_field('main-menu-12')) :?>
                        <img class="image" src="<?php the_field('main-menu-12') ?>" alt="">
                    <?php endif; ?>
                </div>
                <div class="menu-block">
                    <?php if(get_field('main-menu-2')) :?>
                        <img class="image" src="<?php the_field('main-menu-2') ?>" alt="">
                    <?php endif; ?>
                    <?php if(get_field('main-menu-22')) :?>
                        <img class="image" src="<?php the_field('main-menu-22') ?>" alt="">
                    <?php endif; ?>
                </div>
                <div class="menu-block">
                    <?php if(get_field('main-menu-3')) :?>
                        <img class="image" src="<?php the_field('main-menu-3') ?>" alt="">
                    <?php endif; ?>
                    <?php if(get_field('main-menu-32')) :?>
                        <img class="image" src="<?php the_field('main-menu-32') ?>" alt="">
                    <?php endif; ?>
                </div>
                <div class="menu-block">
                    <?php if(get_field('main-menu-4')) :?>
                        <img class="image" src="<?php the_field('main-menu-4') ?>" alt="">
                    <?php endif; ?>
                    <?php if(get_field('main-menu-42')) :?>
                        <img class="image" src="<?php the_field('main-menu-42') ?>" alt="">
                    <?php endif; ?>
                </div>
                <div class="menu-block">
                    <?php if(get_field('main-menu-5')) :?>
                        <img class="image" src="<?php the_field('main-menu-5') ?>" alt="">
                    <?php endif; ?>
                    <?php if(get_field('main-menu-52')) :?>
                        <img class="image" src="<?php the_field('main-menu-52') ?>" alt="">
                    <?php endif; ?>
                </div>
                <div class="menu-block">
                    <?php if(get_field('main-menu-6')) :?>
                        <img class="image" src="<?php the_field('main-menu-6') ?>" alt="">
                    <?php endif; ?>
                    <?php if(get_field('main-menu-62')) :?>
                        <img class="image" src="<?php the_field('main-menu-62') ?>" alt="">
                    <?php endif; ?>
                </div>
                <div class="menu-block">
                    <?php if(get_field('main-menu-7')) :?>
                        <img class="image" src="<?php the_field('main-menu-7') ?>" alt="">
                    <?php endif; ?>
                    <?php if(get_field('main-menu-72')) :?>
                        <img class="image" src="<?php the_field('main-menu-72') ?>" alt="">
                    <?php endif; ?>
                </div>

            </div>
        </div>
        <?php
        $images = get_field('main-menu-gallery', 'option');

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