<?php 
get_header(); 
$url = get_the_post_thumbnail_url();
$id = get_the_ID();
?>
<div class="snapep-single-content">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="snapep-single-thumbnail" style="background-image: url('<?php echo $url; ?>');"></div>
            </div>
            <div class="col-md-8">
                <?php 
            if (have_posts()) :
                while (have_posts()) : the_post();
                    get_template_part( 'template-parts/content', 'single' );  ?>
                <div class="flex border-t gap-2 items-center border-t-gray-100 mt-3 pt-4">
                    <div class="w-16 ">
                        <img src="<?php echo get_template_directory_uri() . '/img/logo.jpg'; ?>" alt="">
                    </div>
                    <div class="w-[calc(100%-50px)]">
                        <h3 class="title"><?php echo bloginfo('name'); ?></h3>
                        <p class="text-sm mt-1 opacity-70"><strong>تم النشر في: </strong> <?php the_time( 'j F, Y' ); ?>
                        </p>
                    </div>
                </div>
                <?php endwhile; 
            endif; 
        ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>