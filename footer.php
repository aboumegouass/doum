<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>


<div x-data="{ open: true }">

    <?php
    $args = array(
        'posts_per_page' => 1,
        'order' => 'DESC',
        'cat' => '23'
    );
    $eyemich = new WP_Query($args);
    if ($eyemich->have_posts()) :
        while ($eyemich->have_posts()) : $eyemich->the_post();
        $url = get_the_post_thumbnail_url();
        ?>
    <div x-show="open"
        class="bg-red-100 p-6 transition-all duration-200 after:animate-ping after:absolute after:bg-red-600 after:h-3 after:left-0 after:right-0 after:top-0 after:z-40 before:absolute before:bg-red-700 before:h-3 before:left-0 before:right-0 before:top-0 before:z-40 fixed z-[9000] bottom-0 left-0 right-0">
        <button
            class="flex w-10 h-10 text-lg z-50 items-center font-bold justify-center bg-red-600 text-white right-10 rounded-full absolute -top-6"
            @click="open = false">
            <i class="fa fa-close"></i>
        </button>
        <div class="max-w-5xl mx-auto">
            <a href="<?php the_permalink(); ?>" class="flex gap-4">
                <div class="w-60">
                    <img src="<?php echo $url; ?>" class="object-cover rounded-md w-full h-40" alt="">
                </div>
                <div class="w-[calc(100%-240px)]">
                    <p
                        class="w-36 animate-pulse mb-3 bg-red-500 rounded-md text-white font-bold px-3 py-1.5 text-center">
                        خبر عاجل</p>
                    <h3 class="text-lg font-extrabold"><?php the_title(); ?></h3>
                    <p class="mt-2 text-base">
                        <?php 
                    $excerpt = get_the_excerpt(); 
                    $excerpt = substr( $excerpt, 0, 320 ); // Only display first 260 characters of excerpt
                    $result = substr( $excerpt, 0, strrpos( $excerpt, ' ' ) );
                    echo $result . " ...";
                    ?>
                    </p>
                </div>
            </a>
        </div>
    </div>

    <?php endwhile; else :
echo 'خطأ'; endif; wp_reset_postdata(); ?>

</div>

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