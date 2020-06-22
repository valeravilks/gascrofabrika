<?php
/*
* template name: Доставка
*/


get_header();
?>

    <main class="delivery">
        <div class="container">
            <h1 class="title">
                <?php the_title() ?>
            </h1>
            <div class="block">
                <div class="text">
                    <?php the_field('delivery-text-1')?>
                </div>
                <div class="image"
                    style="background: url(<?php the_field('delivery-image-1')?>)"
                ></div>
            </div>
            <div class="partner">
                <?php
                $images = get_field('delivery-logo-partner');

                if( $images ): ?>
                    <?php foreach( $images as $image ): ?>
                        <img src="<?php echo esc_url($image['sizes']['large']); ?>" alt="" class="image">
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
            <div class="block-2">
                <div class="image"
                     style="background: url(<?php the_field('delivery-image-2')?>)"
                ></div>
                <div class="content">
                    <h2 class="head">
                        <?php the_field('delivery-title-2'); ?>
                    </h2>
                    <div class="text">
                        <?php the_field('delivery-text-2'); ?>
                    </div>
                </div>
            </div>
        </div>
    </main>

<?php
get_footer();
?>