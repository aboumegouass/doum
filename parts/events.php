<div class="jdsp-events">
    <div class="jdsp-events-inner">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="jdsp-events-header">
                    <h2 class="subtitle">Bring your groundbreaking ideas to life</h2>
                    <h2 class="title">JDSP</h2>
                </div>

                <div class="advancing-news-content album-gallery">
                    <div class="swiper mySwiper mt-2">
                        <div class="swiper-wrapper">
                            <?php
                                $args = array(
                                    'posts_per_page' => 18,
                                    'order' => 'DESC'
                                );
                                $eyemich = new WP_Query($args);
                                if ($eyemich->have_posts()) :
                                    while ($eyemich->have_posts()) : $eyemich->the_post();
                                    $url = get_the_post_thumbnail_url();
                            ?>
                            <div class="swiper-slide">
                                <div class="jdsp-post">
                                    <a href="<?php the_permalink(); ?>" class="jdsp-post-thumb" data-lightbox="gallery"
                                        style="background-image: url(<?php echo $url; ?>)">
                                    </a>
                                    <div class="jdsp-post-content">
                                        <h3 class="title">
                                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                        </h3>
                                        <p class="text"><?php snapep_excerpt('40'); ?></p>
                                    </div>
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
</div>