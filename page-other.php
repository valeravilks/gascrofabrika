<?php
/*
* template name: Общий шаблон
*/


get_header();
?>

    <main class="other-page">
        <div class="container">
            <h1 class="title">
                <?php the_title()?>
            </h1>
            <div class="content">
                <?php the_content() ?>
            </div>
        </div>
    </main>

<?php
get_footer();
?>