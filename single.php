<?php 
get_header(); 
$url = get_the_post_thumbnail_url();
?>
<div class="snapep-single-content">
    <div class="container">
        <div class="snapep-single-thumbnail" style="background-image: url('<?php echo $url; ?>');">
            
        </div>
        <?php 
            if (have_posts()) :
                while (have_posts()) : the_post();
                    get_template_part( 'template-parts/content', 'single' );  
                endwhile; 
            endif; 
        ?>
    </div>
</div>
<?php get_footer(); ?>