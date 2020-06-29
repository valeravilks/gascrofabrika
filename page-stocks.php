<?php
/*
* template name: Акции
*/


get_header();
?>

<main class="stocks-page">
    <div class="container">
        <h1 class="title">
            <?php the_title() ?>
        </h1>
        <?php

        $args = array(
            'posts_per_page' => 10,
            'post_type' => 'stocks'
        );
        $query = new WP_Query( $args );
        if( $query->have_posts() ){ ?>
            <?php
            while( $query->have_posts() ){
                $query->the_post();
                ?>
                <div class="h2-mobile">
                    <?php the_title()?>
                </div>
                <div class="block">
                    <div
                        class="img"
                        style="background-image: url(<?php the_field('stocks-img')?>)"
                    ></div>
                    <div class="content">
                        <h2>
                            <?php the_title()?>
                        </h2>
                        <div class="text">
                            <?php the_field('stocks-text')?>
                        </div>
                    </div>
                </div>
                <hr>

                <?php
            } ?>
            <?php

            wp_reset_postdata(); // сбрасываем переменную $post
        } ?>

    </div>
</main>

<?php
get_footer();
?>