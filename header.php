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
</header>

