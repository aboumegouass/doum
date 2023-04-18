<div class="snapep-videos-posts">
    <div class="container">
        <div class="app-header primary2 flex-center">
            <h4 class="title">فيديوهات النقابة</h4>
            <a href="https://snapep.org/?cat=12" class="btn butt-dark butt-sm">
                المزيد...
            </a>
        </div>
        <div class="swiper mySwiper mt-2">
            <div class="swiper-wrapper">
                <?php
                    $args = array(
                        'posts_per_page' => 12,
                        'cat' => 12,
                        'order' => 'DESC'
                    );
                    $eyemich = new WP_Query($args);
                    if ($eyemich->have_posts()) :
                        while ($eyemich->have_posts()) : $eyemich->the_post();
                            $url = get_the_post_thumbnail_url();
                ?>
                <div class="swiper-slide">

                    <div class="snapep-video">
                        <a href="<?php the_permalink(); ?>" class="snapep-post-thumb"
                            style="background-image: url(<?php echo $url; ?>)">
                            <span class="icon">
                                <i class="fa fa-play"></i>
                            </span>
                        </a>
                    </div>
                </div>
                <?php endwhile; else :
            echo 'خطأ'; endif; wp_reset_postdata(); ?>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</div>