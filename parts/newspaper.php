<div class="jdsp-news">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <h1 class="main-title">
                Latest News for <?php echo bloginfo('name'); ?>
            </h1>
            <div class="row">
                <?php
                    $args = array(
                        'posts_per_page' => 4,
                        'order' => 'DESC'
                    );
                    $eyemich = new WP_Query($args);
                    if ($eyemich->have_posts()) :
                        while ($eyemich->have_posts()) : $eyemich->the_post();
                        $url = get_the_post_thumbnail_url();
                ?>
                <div class="col-xl-3 col-md-6">
                    <div class="jdsp-news-item">
                        <span class="date"><?php time_ago(); ?></span>
                        <a href="<?php the_permalink(); ?>" class="jdsp-news-thumb"
                            style="background-image: url(<?php echo $url; ?>)">
                        </a>
                        <div class="jdsp-news-content">
                            <h3 class="title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h3>
                            <p class="text"><?php snapep_excerpt('75'); ?></p>
                            <div class="butts">
                                <a href="<?php the_permalink(); ?>" class="btn butt-sm butt-primary2 rounded-0 w-100">
                                    Read More...
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endwhile; else :
                    echo 'خطأ'; endif; wp_reset_postdata(); ?>
            </div>
        </div>
    </div>
</div>