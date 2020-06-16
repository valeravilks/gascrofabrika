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
        main-page-about-image
    </div>
    <div class="container about">
        <h2>
            <?php the_field('main-page-about-title', 'option'); ?>
        </h2>
        <div><?php the_field('main-page-about-description', 'option'); ?></div>
        <?php
        $hero = get_field('mp-about-tezis-block', 'option');
        if( $hero ): ?>
            <div><?php echo $hero['text-1']?></div>
            <div><?php echo $hero['text-2']?></div>
            <div><?php echo $hero['text-3']?></div>
            <div><?php echo $hero['text-4']?></div>
            <div><?php echo $hero['text-5']?></div>
            <div><?php echo $hero['text-6']?></div>
        <?php endif; ?>
    </div>
    <div class="container">
        <?php
        $images = get_field('main-page-gallery', 'option');

if( $images ): ?>
        <ul>
            <?php foreach( $images as $image ): ?>
                <li>
                    <a href="<?php echo esc_url($image['url']); ?>">
                        <img src="<?php echo esc_url($image['sizes']['thumbnail']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    </a>
                    <p><?php echo esc_html($image['caption']); ?></p>
                </li>
            <?php endforeach; ?>
        </ul>
        <?php endif; ?>
    </div>
</main>

<?php get_footer();
?>