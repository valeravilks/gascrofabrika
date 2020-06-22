<?php
/*
* template name: О нас
*/


get_header();
?>
    <main class="about-page">
        <div class="container">
            <h1 class="title">
                <?php the_title() ?>
            </h1>
            <div
                class="image"
                style="background: url(<?php the_field('about-image');?>)"
            ></div>
            <div class="text">
                <?php the_field('about-text'); ?>
            </div>
            <h2>
                <?php the_field('about-title-2'); ?>
            </h2>
            <div class="team">
                <?php

                $args = array(
                    'posts_per_page' => 20,
                    'post_type' => 'team'
                );
                $query = new WP_Query( $args );
                if( $query->have_posts() ){ ?>
                    <?php
                    while( $query->have_posts() ){
                        $query->the_post();
                        ?>
                            <div class="block">
                                <div
                                    class="image"
                                    style="background: url(<?php the_field('team-image'); ?>)"
                                ></div>
                                <div class="fio">
                                    <?php the_field('team-name'); ?>
                                </div>
                                <div class="dolg">
                                    <?php the_field('team-dolg'); ?>
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