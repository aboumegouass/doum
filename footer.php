<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

<?php $bg = get_template_directory_uri() . '/img/footer.png'; ?>
<div class="najd-footer">
    <div class="fixed-whatsapp animatable bounceIn">
        <a href="https://wa.me/+966504252545" class="circular-btn green lg">
            <i class="fab fa-whatsapp"></i>
        </a>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="najd-footer-about">
                    <p class="about-text animatable bounceOut"><?php echo _('هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.
إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى'); ?>
                    </p>
                    <ul class="contact animatable bounceIn">
                        <li dir="ltr">
                            <a href="+966504252545">+(966)504252545</a>
                        </li>
                        <li>
                            <a>
                                <?php echo _('RG53+8J5, Route de l Aéroport, Tamanrasset'); ?>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6">
                <div class="najd-footer-links">
                    <div class="najd-footer-header animatable bounceIn">
                        <h3 class="title"><?php echo _('المعاهد والمراكز');?> </h3>
                    </div>
                    <div class="links-item animatable bounceOut">
                        <?php 
                            $arg = array(
                                    'theme_location' => 'instituts'
                                );
                            wp_nav_menu($arg); 
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6">
                <div class="najd-footer-links">
                    <div class="najd-footer-header animatable bounceIn">
                        <h3 class="title"><?php echo _('روابط هامة');?> </h3>
                    </div>
                    <div class="links-item animatable bounceOut">
                        <?php 
                            $arg = array(
                                    'theme_location' => 'usinglinks'
                                );
                            wp_nav_menu($arg); 
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="najd-footer-bottom">
    <div class="container">
        <div class="najd-footer-bottom-inner">
            <ul class="nav footer-socials animatable bounceOut">
                <li>
                    <a href="https://wa.me/+966504252545" class="circular-btn sm white"><i
                            class="fa-brands fa-facebook"></i></a>
                </li>
                <li>
                    <a href="https://wa.me/+966504252545" class="circular-btn sm white"><i
                            class="fa-brands fa-whatsapp"></i></a>
                </li>
                <li>
                    <a href="mailto: aa.sd.1@hotmail.com" class="circular-btn sm white"><i class="fa fa-at"></i></a>
                </li>
                <li>
                    <a href="tel:+966504252545" class="circular-btn sm white"><i
                            class="fa-solid fa-mobile-screen"></i></a>
                </li>
            </ul>
            <p class="copyright animatable bounceIn">© <?php echo _( 'جميع الحقوق محفوظة لدى ' ); ?>
                <?php echo bloginfo('name'); ?></p>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>