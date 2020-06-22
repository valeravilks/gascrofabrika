<?php
/*
* template name: Услуги
*/


get_header();
?>

    <main class="services-page">
        <div class="container">
            <h1 class="title">
                <?php the_title() ?>
            </h1>
            <div class="box">
                <?php

                $args = array(
                    'posts_per_page' => 10,
                    'post_type' => 'services',
                    'order' => 'ASC'

                );
                $query = new WP_Query( $args );
                if( $query->have_posts() ){ ?>
                    <?php
                    while( $query->have_posts() ){
                        $query->the_post();
                        ?>
                        <div class="block">
                            <div
                                class="img"
                                style="background: url(<?php the_field('services-image')?>)"
                            ></div>
                            <div class="content">
                                <h2>
                                    <?php the_title()?>
                                </h2>
                                <div class="text">
                                    <?php the_field('services-text')?>
                                </div>
                            </div>
                        </div>
                        <?php
                    } ?>
                    <?php

                    wp_reset_postdata(); // сбрасываем переменную $post
                } ?>
            </div>
        </div>
    </main>

<?php
get_footer();
?>