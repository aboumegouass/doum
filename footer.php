<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

<?php $bg = get_template_directory_uri() . '/img/footer.png'; ?>
<div class="najd-footer">
    <?php $whatsappNumber = get_option('whatsappNumber'); ?>
    <div class="fixed-whatsapp animatable bounceIn">
        <a href="https://wa.me/+<?php echo $whatsappNumber; ?>"
            class="bg-green-600 flex items-center text-white text-2xl shadow-lg justify-center w-14 h-14 rounded-full">
            <i class="fab fa-whatsapp"></i>
        </a>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-3">
                <div class="najd-footer-about">
                    <p class="about-text animatable bounceOut">
                        <?php echo __('هذا النص هو مثال لنص يمكن أن يستبدل في التطبيق.
إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى', 'jdsp'); ?>
                    </p>
                    <ul class="contact animatable bounceIn">
                        <li dir="ltr">
                            <a href="+21327882545">+(213)27882545</a>
                        </li>
                        <li>
                            <a>
                                <?php echo __('RG53 + 8J5 ، طريق المطار ، تمنراست', 'jdsp'); ?>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6">
                <div class="najd-footer-links">
                    <div class="najd-footer-header animatable bounceIn">
                        <h3 class="title"><?php echo __('هيئات تحت الوصاية', 'jdsp');?> </h3>
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
                        <h3 class="title"><?php echo _('روابط مديريات التربية');?> </h3>
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
            <div class="col-xl-3 col-sm-6">
                <div class="najd-footer-links">
                    <div class="najd-footer-header animatable bounceIn">
                        <h3 class="title"><?php echo _('مواقع تهمك');?> </h3>
                    </div>
                    <div class="links-item animatable bounceOut">
                        <?php 
                            $arg = array(
                                    'theme_location' => 'featuredwebsite'
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
            <p class="copyright animatable bounceIn">© <?php echo __( 'جميع الحقوق محفوظة لدى ', 'jdsp' ); ?>
                <?php echo bloginfo('name'); ?></p>
        </div>
    </div>
</footer>
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>


<?php wp_footer(); ?>
<script src="https://cdn.jsdelivr.net/gh/freeps2/a7rarpress@main/breaking-news-ticker.min.js"></script>
</body>

</html>