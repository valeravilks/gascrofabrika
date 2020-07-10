<?php
/*
* template name: Контакты
*/


get_header();
?>

    <main class="contact-page">
        <div class="container">
            <h1 class="title">
                <?php the_title() ?>
            </h1>
            <div class="text">
                Напишите нам
            </div>
            <div class="block">
                <?php echo do_shortcode('[wpforms id="231" title="false" description="false"]')?>
<!--                <div class="sucsess">-->
<!--                    <div class="h">-->
<!--                        Спасибо!-->
<!--                    </div>-->
<!--                    <div class="t">-->
<!--                        Ваше сообщение отправлено.-->
<!--                    </div>-->
<!--                </div>-->
                <!--                <form action="">-->
<!--                    <input type="text" name="name" placeholder="Имя">-->
<!--                    <input type="email" name="email" placeholder="Email">-->
<!--                    <textarea name="message" placeholder="Соообщение"></textarea>-->
<!--                    <label class="check">-->
<!--                        <input type="checkbox" required>-->
<!--                        Я согласен с обработкой <a href="">персональных данных</a>-->
<!--                    </label>-->
<!--                    <button type="submit">ОТПРАВИТЬ</button>-->
<!--                </form>-->
                <div class="info">
                    <div>
                        <?php the_field('address', 'option'); ?>
                    </div>
                    <div>
                        <?php the_field('phone', 'option'); ?>
                    </div>
                    <div>
                        <?php the_field('work-hours', 'option'); ?>
                    </div>
                    <div class="req">
                        <?php the_field('reqiit', 'option')?>
                    </div>
                </div>
                <div class="soc">
                    <? if(get_field('footer-facebook', 'option')) :?>
                        <div class="block">
                            <div class="link-block">
                                <a target="_blank" href="<?php the_field('footer-facebook', 'option') ?>">
                                    Facebook
                                    <img src="<?php echo get_template_directory_uri() . '/image/arrow-link.svg' ?>" alt="">
                                </a>
                            </div>
                        </div>
                    <?php endif; ?>
                    <? if(get_field('footer-instagram', 'option')) :?>
                        <div class="block">
                            <div class="link-block">
                                <a target="_blank" href="<?php the_field('footer-instagram', 'option') ?>">
                                    Instagram
                                    <img src="<?php echo get_template_directory_uri() . '/image/arrow-link.svg' ?>" alt="">
                                </a>
                            </div>
                        </div>
                    <?php endif; ?>
                    <? if(get_field('footer-vkontakte', 'option')) :?>
                        <div class="block">
                            <div class="link-block">
                                <a target="_blank" href="<?php the_field('footer-vkontakte', 'option') ?>">
                                    Vkontakte
                                    <img src="<?php echo get_template_directory_uri() . '/image/arrow-link.svg' ?>" alt="">
                                </a>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A274f6c883828e30abd3a733cbb6a9d6d2bd21782c8b4e494feeb2f5d2b7f4953&amp;width=100%25&amp;height=450&amp;lang=ru_RU&amp;scroll=false"></script>

    </main>

<?php
get_footer();
?>