<?php get_header(); ?>
<div class="diwan-hero">
    <div class="container-xl">
        <div class="row py-4">
            <div class="col-lg-4">
                <div class="diwan-hero-latest">
                    <h2 class="title"><?php echo _( 'آخر المستجدات' ); ?></h2>
                    <ul class="news-list">
                        <?php
                    $args = array(
                        'posts_per_page' => 8,
                        'order' => 'DESC'
                    );
                    $eyemich = new WP_Query($args);
                    if ($eyemich->have_posts()) :
                        while ($eyemich->have_posts()) : $eyemich->the_post();
                        $url = get_the_post_thumbnail_url();
                ?>
                        <li>
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </li>
                        <?php endwhile; else :
                    echo 'خطأ'; endif; wp_reset_postdata(); ?>
                    </ul>
                </div>
            </div>
            <div class="col-lg-8">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active"
                            style="background-image: url('https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__480.jpg')">

                        </div>
                        <div class="carousel-item"
                            style="background-image: url('https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__480.jpg')">

                        </div>
                        <div class="carousel-item"
                            style="background-image: url('https://images.unsplash.com/photo-1575936123452-b67c3203c357?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8aW1hZ2V8ZW58MHx8MHx8&w=1000&q=80')">

                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-xl">
    <div class="row">
        <div class="col-lg-6">
            <div class="page-header">
                <h2 class="title"><?php echo _( 'المنح' ); ?></h2>
            </div>
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
                <div class="col-sm-6">
                    <a href="<?php the_permalink(); ?>" class="post-item">
                        <div class="post-item-img" style="background-image: url(<?php echo $url; ?>)"></div>
                        <div class="post-item-content">
                            <div class="post-item-content-inner">
                                <h4 class="title"><?php the_title(); ?></h4>
                                <p class="meta"><?php the_time(); ?></p>
                            </div>
                        </div>
                    </a>
                </div>

                <?php endwhile; else :
                    echo 'خطأ'; endif; wp_reset_postdata(); ?>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="page-header">
                <h2 class="title"><?php echo _( 'التظاهرات العلمية' ); ?></h2>
            </div>
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
                <div class="col-sm-6">
                    <a href="<?php the_permalink(); ?>" class="post-item">
                        <div class="post-item-img" style="background-image: url(<?php echo $url; ?>)"></div>
                        <div class="post-item-content">
                            <div class="post-item-content-inner">
                                <h4 class="title"><?php the_title(); ?></h4>
                                <p class="meta"><?php the_time(); ?></p>
                            </div>
                        </div>
                    </a>
                </div>

                <?php endwhile; else :
                    echo 'خطأ'; endif; wp_reset_postdata(); ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>