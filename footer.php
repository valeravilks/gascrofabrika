<footer>
    <div class="footer-1">
        <div class="container">
            <div class="logo">
                <img src="<?php the_field('footer-logo', 'option') ?>" alt="">
            </div>
            <div class="menu menu-1">
                <?php wp_nav_menu([
                    'theme_location' => 'footer-menu-1-1',
                ]); ?>
            </div>
            <div class="menu menu-2">
                <?php wp_nav_menu([
                    'theme_location' => 'footer-menu-1-2',
                ]); ?>
            </div>
            <div class="soc">
                <? if (get_field('footer-facebook', 'option')) : ?>
                    <div class="blocks">
                        <div class="image-block">
                            <img src="<?php echo get_template_directory_uri() . '/image/soc/facebook.svg' ?>" alt="">
                        </div>
                        <div class="link-block">
                            <a target="_blank" href="<?php the_field('footer-facebook', 'option') ?>">
                                Facebook
                            </a>
                        </div>
                    </div>
                <?php endif; ?>
                <? if (get_field('footer-instagram', 'option')) : ?>
                    <div class="blocks">
                        <div class="image-block">
                            <img
                                    src="<?php echo get_template_directory_uri() . '/image/soc/instagram.svg' ?>"
                                    alt=""
                            >
                        </div>
                        <div class="link-block">
                            <a target="_blank" href="<?php the_field('footer-instagram', 'option') ?>">
                                Instagram
                            </a>
                        </div>
                    </div>
                <?php endif; ?>
                <? if (get_field('footer-vkontakte', 'option')) : ?>
                    <div class="blocks">
                        <div class="image-block">
                            <img src="<?php echo get_template_directory_uri() . '/image/soc/vk.svg' ?>" alt="">
                        </div>
                        <div class="link-block">
                            <a target="_blank" href="<?php the_field('footer-vkontakte', 'option') ?>">
                                Vkontakte
                            </a>
                        </div>
                    </div>
                <?php endif; ?>
                <? if (get_field('footer-mail', 'option')) : ?>
                    <div class="blocks">
                        <div class="image-block">
                            <img src="<?php echo get_template_directory_uri() . '/image/soc/mail.svg' ?>" alt="">
                        </div>
                        <div class="link-block">
                            <a target="_blank" href="mailto:<?php the_field('footer-mail', 'option') ?>">
                                <?php the_field('footer-mail', 'option') ?>
                            </a>
                        </div>
                    </div>
                <?php endif; ?>
                <? if (get_field('footer-phone', 'option')) : ?>
                    <div class="blocks">
                        <div class="image-block">
                            <img src="<?php echo get_template_directory_uri() . '/image/soc/telephone.svg' ?>" alt="">
                        </div>
                        <div class="link-block">
                            <a target="_blank" href="tel:<?php the_field('footer-phone', 'option') ?>">
                                <?php the_field('footer-phone', 'option') ?>
                            </a>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
            <!--todo доработать кнопку -->
            <div class="subscription">
<!--                <form action="">-->
<!--                    <input class="email" type="email" placeholder="Ваш e-mail">-->
<!--                    <button-->
<!--                            class="submit"-->
<!--                            type="submit">-->
<!--                        <svg width="13" height="22" viewBox="0 0 13 22" fill="none" xmlns="http://www.w3.org/2000/svg">-->
<!--                            <path d="M0.35045 1.3515L1.32698 0.357246L11.2863 10.4973L11.7575 11.0001L11.2871 11.5028L1.32744 21.6432L0.35045 20.6485L9.65847 11.1752L9.83063 11L9.65847 10.8248L0.35045 1.3515Z"-->
<!--                                  fill="#282828" stroke="#282828" stroke-width="0.5"/>-->
<!--                        </svg>-->
<!--                    </button>-->
<!--                </form>-->


                <!-- Subscription Form -->
                <div class="sp-form-outer sp-force-hide">
                    <div class="text">
                        Подпишитесь на рассылку
                    </div>
                    <div id="sp-form-160112" sp-id="160112"
                         sp-hash="73379cf57da5b3bda4f12ae2f85220eba8edeb3a8f99c9d399136a46c62d6933" sp-lang="ru"
                         class="sp-form sp-form-regular sp-form-embed"
                         sp-show-options="%7B%22satellite%22%3Afalse%2C%22maDomain%22%3A%22login.sendpulse.com%22%2C%22formsDomain%22%3A%22forms.sendpulse.com%22%2C%22condition%22%3A%22onEnter%22%2C%22scrollTo%22%3A25%2C%22delay%22%3A10%2C%22repeat%22%3A3%2C%22background%22%3A%22rgba(0%2C%200%2C%200%2C%200.5)%22%2C%22position%22%3A%22bottom-right%22%2C%22animation%22%3A%22%22%2C%22hideOnMobile%22%3Afalse%2C%22urlFilter%22%3Afalse%2C%22urlFilterConditions%22%3A%5B%7B%22force%22%3A%22hide%22%2C%22clause%22%3A%22contains%22%2C%22token%22%3A%22%22%7D%5D%2C%22analytics%22%3A%7B%22ga%22%3A%7B%22eventLabel%22%3Anull%2C%22send%22%3Afalse%7D%2C%22ym%22%3A%7B%22counterId%22%3Anull%2C%22eventLabel%22%3Anull%2C%22targetId%22%3Anull%2C%22send%22%3Afalse%7D%7D%2C%22utmEnable%22%3Afalse%7D">
                        <div class="sp-form-fields-wrapper">
                            <div class="sp-message">
                                <div></div>
                            </div>
                            <form novalidate="" class="sp-element-container ui-sortable ui-droppable " data->
                                <div class="sp-field " sp-id="sp-fdeb08c6-79dc-4ab2-93af-69b4bcf1a4c1">
                                    <input type="email" sp-type="email"
                                       name="sform[email]"

                                       class="sp-form-control "
                                       placeholder="Ваш e-mail"
                                       sp-tips="%7B%22required%22%3A%22%D0%9E%D0%B1%D1%8F%D0%B7%D0%B0%D1%82%D0%B5%D0%BB%D1%8C%D0%BD%D0%BE%D0%B5%20%D0%BF%D0%BE%D0%BB%D0%B5%22%2C%22wrong%22%3A%22%D0%9D%D0%B5%D0%B2%D0%B5%D1%80%D0%BD%D1%8B%D0%B9%20email-%D0%B0%D0%B4%D1%80%D0%B5%D1%81%22%7D"
                                       data- required="required"></div>
                                <div class="sp-field sp-button-container "
                                     sp-id="sp-7f4b0dda-34d2-4299-9d1d-4d1e2659d16d">
                                    <button id="sp-7f4b0dda-34d2-4299-9d1d-4d1e2659d16d" class="sp-button">
                                        <svg width="13" height="22" viewBox="0 0 13 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0.35045 1.3515L1.32698 0.357246L11.2863 10.4973L11.7575 11.0001L11.2871 11.5028L1.32744 21.6432L0.35045 20.6485L9.65847 11.1752L9.83063 11L9.65847 10.8248L0.35045 1.3515Z"
                                                  fill="#282828" stroke="#282828" stroke-width="0.5"/>
                                        </svg>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <script type="text/javascript"
                        src="//web.webformscr.com/apps/fc3/build/default-handler.js?1594131353539"></script>
                <!-- /Subscription Form -->
                <div class="pay">
                    <img src="<?php echo get_template_directory_uri() . '/image/pay/viza.svg' ?>" alt="">
                    <img src="<?php echo get_template_directory_uri() . '/image/pay/paypal.svg' ?>" alt="">
                    <img src="<?php echo get_template_directory_uri() . '/image/pay/masterCart.svg' ?>" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="footer-2">
        <div class="container">
            <div class="copyright">
                <?php the_field('footer-copyright', 'option') ?>
            </div>
            <div class="menu">
                <?php wp_nav_menu([
                    'theme_location' => 'footer-2-menu',
                ]); ?>
            </div>
        </div>
    </div>
</footer>

<?php
wp_footer();
?>

</body>
</html>
