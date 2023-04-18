<!-- <div class="container">
<div dir="ltr" id="gallery">

</div>
</div> -->

<div class="advancing-news">
    <div class="advancing-news-imgs-numbers">
        <img src="<?php echo get_template_directory_uri() . '/img/blog-background-img-1-1.png'; ?>" alt="">
        <img src="<?php echo get_template_directory_uri() . '/img/blog-background-img-2.png'; ?>" alt="">
        <img src="<?php echo get_template_directory_uri() . '/img/blog-background-img-3.png'; ?>" alt="">
    </div>
    <div class="container">
        <div class="advancing-news-inner">
            <div class="advancing-news-header">
                <p class="text"></p>
                <h3 class="title">معرض الصور</h3>
            </div>
            <div class="advancing-news-content album-gallery">
                <div class="swiper mySwiper mt-2">
                    <div class="swiper-wrapper">
                        <?php
                     $args = array(
                         'posts_per_page' => 18,
                         'cat' => 5,
                         'order' => 'DESC'
                     );
                     $eyemich = new WP_Query($args);
                     if ($eyemich->have_posts()) :
                         while ($eyemich->have_posts()) : $eyemich->the_post();
                             $url = get_the_post_thumbnail_url();
                ?>
                        <div class="swiper-slide">
                            <div class="snapep-photo">
                                <a href="<?php echo $url; ?>" class="snapep-post-thumb" data-lightbox="gallery"
                                    style="background-image: url(<?php echo $url; ?>)">
                                    <span class="zoom-icon circular-btn white md">
                                        <i class="fa fa-plus-circle"></i>
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
    </div>
</div> 