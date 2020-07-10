<?php

get_header();
?>
<main class="about-page">
    <div class="container">
        <h1 class="title">
            <?php the_title() ?>
        </h1>
        <div
                class="image"
                style="background-image: url(<?php the_field('services-image-1');?>)"
        ></div>
        <div class="text-2">
            <?php the_field('services-desc') ?>
        </div>

    </div>
</main>

<?php
get_footer();
?>
