<!doctype html>
<html lang="en">
<head>
    <?php
    wp_head();
    ?>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="<?php the_field('favicon', 'option')?>" type="image/x-icon">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title><?php wp_title(); ?></title>
</head>
<body>
<header>
    <div class="header-1">
        <div class="container">
            <div class="address">
                <?php the_field('address', 'option'); ?>
            </div>
            <div class="phone">
                <?php the_field('phone', 'option'); ?>
            </div>
            <div class="work-hours">
                <?php the_field('work-hours', 'option'); ?>
            </div>
        </div>
    </div>
    <div class="header-2">
        <div class="container conts">
            <div class="logo">
                <?php if( get_field('color-logo', 'option') ): ?>
                    <a href="<?php echo home_url(); ?>">
                        <img src="<?php the_field('color-logo', 'option'); ?>" />
                    </a>
                <?php endif; ?>
            </div>
            <div class="menu-d">
                <?php wp_nav_menu( [
                    'theme_location'  => 'main-menu',
                ] ); ?>
            </div>
            <div class="mobile-menu-list">
                <div class="container">
                    <div class="block-m">
                        <?php wp_nav_menu( [
                            'theme_location'  => 'footer-menu-1-1',
                        ] ); ?>
                    </div>
                    <div class="block-m">
                        <?php wp_nav_menu( [
                            'theme_location'  => 'footer-menu-1-2',
                        ] ); ?>
                    </div>
                </div>
            </div>
            <img src="<?php echo get_template_directory_uri() . '/image/menu.svg'?>" alt="" class="mobile-menu">
            <img src="<?php echo get_template_directory_uri() . '/image/menu-close.svg'?>" alt="" class="mobile-menu-close">
        </div>
        <div class="dop-header-menu">
            <div class="container">
                <?php

                // проверяем есть ли в повторителе данные
                if( have_rows('menu-dop-card', 'option') ):

                    // перебираем данные
                    while ( have_rows('menu-dop-card', 'option') ) : the_row();
                        ?>
                        <a href="<?php the_sub_field('link')?>" class="block">
                            <div class="image"
                                style="background-image: url(<?php the_sub_field('image');?>)"
                            ></div>
                            <div class="title">
                                <?php the_sub_field('text');?>
                            </div>
                        </a>



                    <?php
                    endwhile;
                endif;

                ?>
            </div>

        </div>
    </div>

</header>

