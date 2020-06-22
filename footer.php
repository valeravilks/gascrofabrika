<footer>
    <div class="footer-1">
        <div class="container">
            <div class="logo">
                <img src="<?php the_field('footer-logo', 'option') ?>" alt="">
            </div>
            <div class="menu">
                <?php wp_nav_menu( [
                    'theme_location'  => 'footer-menu-1-1',
                ] ); ?>
            </div>
            <div class="menu">
                <?php wp_nav_menu( [
                    'theme_location'  => 'footer-menu-1-2',
                ] ); ?>
            </div>
            <div class="soc">
                <? if(get_field('footer-facebook', 'option')) :?>
                <div class="block">
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
                <? if(get_field('footer-instagram', 'option')) :?>
                    <div class="block">
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
                <? if(get_field('footer-vkontakte', 'option')) :?>
                    <div class="block">
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
                <? if(get_field('footer-mail', 'option')) :?>
                    <div class="block">
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
                <? if(get_field('footer-phone', 'option')) :?>
                    <div class="block">
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
                <div class="text">
                    Подпишитесь на рассылку
                </div>
                <form action="">
                    <input class="email" type="email" placeholder="Ваш e-mail">
                    <button
                        class="submit"
                        type="submit">
                        <svg width="13" height="22" viewBox="0 0 13 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.35045 1.3515L1.32698 0.357246L11.2863 10.4973L11.7575 11.0001L11.2871 11.5028L1.32744 21.6432L0.35045 20.6485L9.65847 11.1752L9.83063 11L9.65847 10.8248L0.35045 1.3515Z" fill="#282828" stroke="#282828" stroke-width="0.5"/>
                        </svg>
                    </button>
                </form>
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
                <?php wp_nav_menu( [
                    'theme_location'  => 'footer-2-menu',
                ] ); ?>
            </div>
        </div>
    </div>
</footer>

<?php
wp_footer();
?>

</body>
</html>
