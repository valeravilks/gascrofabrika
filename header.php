<!doctype html>
<html lang="en">
<head>
    <?php
    wp_head();
    ?>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Document</title>
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
        <div class="container">
            <div class="menu-left">
                <?php wp_nav_menu( [
                'theme_location'  => 'main-left-menu',
                ] ); ?>
            </div>
            <div class="logo">
                <?php if( get_field('color-logo', 'option') ): ?>
                    <img src="<?php the_field('color-logo', 'option'); ?>" />
                <?php endif; ?>
            </div>
            <div class="menu-right">
                <?php wp_nav_menu( [
                    'theme_location'  => 'main-right-menu',
                ] ); ?>
            </div>
        </div>
    </div>
</header>

