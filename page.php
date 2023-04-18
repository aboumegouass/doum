<?php get_header(); ?>
<?php 
/* Start the Loop */
while ( have_posts() ) :
	the_post();
    ?>
<?php if (is_page(15)) { // 88 ?>
    <?php get_template_part( 'parts/ouroverview' ); ?>
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-md-7">
                <div class="najd-contact-us">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </div>
<?php //get_template_part( 'parts/teamwork' ); ?>
<?php }?>
<?php if (is_page(13)) { ?>
    <div class="app-header-bg" style="background-image: url('<?php echo get_template_directory_uri() . '/img/apply-to-speak.jpg'; ?>');">
        <div class="container">
            <h1 class="title">اتصل بنا</h1>
        </div>
    </div>
    <div class="container my-3">
            <div class="teams-items">
            <div class="row">
                <?php get_template_part( 'parts/contactusinfo' ); ?>
                <div class="col-xl-8 col-md-7">
                    <div class="najd-contact-us">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php }?>
<?php if (is_page(17)) { ?>
    <div class="app-header-bg" style="background-image: url('<?php echo get_template_directory_uri() . '/img/16_2.jpg'; ?>');">
        <div class="container">
            <h1 class="title">خدماتنا</h1>
            <p class="text">لدينا تجربة عميقة في تقديم الخدمات في المجالات التالية</p>
        </div>
    </div>

    <div class="container my-3">
        <div class="abouts-items">
    <div class="py-4">
        <?php get_template_part( 'parts/ourservices' ); ?>
    </div>
    <div class="py-5">

        <div class="app-header">
            <h1 class="title">نشاطات أخرى</h1>
            <p class="text">لدينا الكثير والكثير لكم فما ترونه الان على الموقع الخاص بنا ما هو إلا قطرة من بحر الافكار
                التى نمتلكها</p>
        </div>
        <?php get_template_part( 'parts/otheractions' ); ?>
    </div>
    </div>
    <?php } ?>
    <?php endwhile; // End of the loop.?>
    <?php get_footer(); ?>