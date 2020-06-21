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
