<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi officia pariatur, ratione neque mollitia dolore nemo excepturi ullam doloribus culpa quaerat quia provident aperiam, totam magni nostrum repellendus possimus et!">

    <meta name="author" content="Fareza Tech">
    <meta name="keywords" content="">
    <!-- Shareable -->
    <meta property="og:title" content="<?php the_title(); ?>" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="<?php the_permalink(); ?>" />
    <meta property="og:image" content="<?php echo get_the_post_thumbnail_url(); ?>" />
    <title>
        <?php bloginfo('name'); ?> |
        <?php is_front_page() ? bloginfo('description') : wp_title(''); ?>
    </title>
    <link rel="icon" href="<?php echo get_template_directory_uri() . '/img/fav.png'; ?>">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <script src="https://kit.fontawesome.com/8012fece80.js" crossorigin="anonymous"></script>
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
</head>

<body class="">
    <div class="top-menu">
        <div class="top-menu-list">
            <?php 
            $arg = array(
                'theme_location' => 'top_primary'
            );
            wp_nav_menu($arg); 
            ?>
        </div>
        <div class="diwan-search">
            <form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                <label for="diwan-search-form-id">
                    <span
                        class="screen-reader-text"><?php _e( 'البحث عن:', 'diwan' ); // phpcs:ignore: WordPress.Security.EscapeOutput.UnsafePrintingFunction -- core trusts translations ?></span>
                    <input type="search" id="diwan-search-form-id" class="search-field"
                        placeholder="<?php echo _( 'البحث في الموقع &hellip;' ); ?>"
                        value="<?php echo get_search_query(); ?>" name="s" />
                </label>
                <button type="submit" class="btn-search"><span class="fa fa-search"></span></button>
            </form>
        </div>

        <ul class="diwan-socials">
            <li>
                <?php if (is_rtl()) { ?>
                <a href="" class="btn butt-sm butt-primary flex-center"><i class="fa fa-globe"></i> English</a>
                <?php }else { ?>
                <a href="" class="btn butt-sm butt-primary flex-center"><i class="fa fa-globe"></i> العربية</a>
                <?php } ?>
            </li>
            <li class="social-item"><a href="" target="_blank"><i class="fab fa-facebook"></i></a></li>
            <li class="social-item"><a href="" target="_blank"><i class="fab fa-twitter"></i></a></li>
            <li class="social-item"><a href="" target="_blank"><i class="fab fa-instagram"></i></a></li>
            <li class="social-item"><a href="" target="_blank"><i class="fab fa-youtube"></i></a></li>
        </ul>
    </div>
    <div class="diwan-primary">
        <div class="diwan-primary-logo">
            <img src="<?php echo get_template_directory_uri() . '/img/logo.jpg'; ?>" alt="">
        </div>
        <div class="primary-menu-list">
            <?php 
            $arg = array(
                'theme_location' => 'primary'
            );
            wp_nav_menu($arg); 
            ?>
        </div>
    </div>
    <div class="diwan-title-main">
        <div class="container-xl">
            <h1 class="title"><?php is_front_page() ? bloginfo('description') : wp_title(''); ?></h1>
        </div>
    </div>