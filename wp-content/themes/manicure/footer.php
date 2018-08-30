<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package manicure
 */

?>

</main>

<footer class="footer" id="footer">
    <div class="container-fluid">
        <div class="footer_container">
            <div class="footer_logo">
                <a href="#hero" class="footer_link"> <img src="assets/images/icon/logo.png" alt="logo"
                                                          class="footer_img">
                    <p class="footer_text">Учебный центр<br>
                        маникюра и педикюра</p>
                </a>
            </div>
            <div class="footer_copy">
                <div class="footer_menu">
                    <ul>
                        <li><a href="#about">О нас</a></li>
                        <li><a href="#program">Программа обучения</a></li>
                        <li><a href="#reviews">Отзывы</a></li>
                        <li><a href="#contacts">Контакты</a></li>
                    </ul>
                </div>
                <div class="footer_copy-text">Школа маникюра и педикюра в Москве © 2018 Все права защищены</div>
            </div>
            <div class="footer_social">
                <a href="#"><img src="assets/images/icon/vk.png" alt="vk "></a>
                <a href="#"><img src="assets/images/icon/fb.png" alt="fb "></a>
                <a href="#"><img src="assets/images/icon/inst.png" alt="instagram "></a>
            </div>
        </div>

    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
