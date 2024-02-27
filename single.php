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
                <div class="author-user">
                    <div class="author-user-img">
                        <img src="<?php echo get_template_directory_uri() . '/img/logo.jpg'; ?>" alt="">
                    </div>
                    <div class="author-user-body">
                        <h3 class="title"><?php echo bloginfo('name'); ?></h3>
                        <p class="text"><?php the_time( 'j F, Y' ); ?></p>
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