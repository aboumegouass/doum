<?php get_header(); ?>
<div class="advancing-news">
    <div class="advancing-news-inner bg-white p-2 my-2">
        <div class="image-ad">
            <img src="<?php echo get_template_directory_uri() . '/img/fm.gif'; ?>" class="gifphto" alt="">
        </div>
        <div class="row">
            <?php 
                if (have_posts()) :
                while (have_posts()) : the_post();
                $url = get_the_post_thumbnail_url();
            ?>
            <div class="col-sm-6">
                <a href="<?php the_permalink(); ?>" class="flex mb-3 last:mb-0 items-center gap-2">
                    <div class="w-2/5">
                        <img src="<?php echo $url; ?>" class="w-full object-cover h-44 max-sm:h-28 rounded-md" alt="">
                    </div>
                    <div class="w-3/5">
                        <div class="post-item-content-inner">
                            <h4 class="title text-lg font-bold"><?php the_title(); ?></h4>
                            <p class="text-xs"><?php the_time(); ?></p>
                            <p class="mt-2 text-sm max-sm:hidden">
                                <?php 
                                                $excerpt = get_the_excerpt(); 

                                                $excerpt = substr( $excerpt, 0, 290 ); // Only display first 260 characters of excerpt
                                                $result = substr( $excerpt, 0, strrpos( $excerpt, ' ' ) );
                                                echo $result . " ...";
                                            ?>
                            </p>
                        </div>
                    </div>
                </a>
                <?php endwhile; 
                                    endif; 
                                ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>