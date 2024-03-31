<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php the_excerpt(); ?>">

    <meta name="author" content="Fareza Tech">
    <meta name="keywords" content="">
    <!-- Shareable -->
    <meta property="og:title" content="<?php the_title(); ?>" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="<?php the_permalink(); ?>" />
    <meta property="og:description" content="<?php the_excerpt(); ?>" />
    <meta property="og:image" content="<?php echo get_the_post_thumbnail_url(); ?>" />
    <title>
        <?php bloginfo('name'); ?> |
        <?php is_front_page() ? bloginfo('description') : wp_title(''); ?>
    </title>
    <link rel="icon" href="<?php echo get_template_directory_uri() . '/img/fav.png'; ?>">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <?php wp_head(); ?>
    <script src="https://kit.fontawesome.com/8012fece80.js" crossorigin="anonymous"></script>

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
</head>

<?php $bgheader = get_template_directory_uri() . '/img/tt.png'; ?>

<body style="background-image: url(<?php echo $bgheader; ?>)" class="bg-fixed">

    <div class="container">

        <div class="flex p-2 justify-between max-sm:justify-center items-center">
            <div class="">
                <ul class="flex items-center gap-3">
                    <li>
                        <a href="">آخر الأخبار</a>
                    </li>
                    <li class="relative z-[9999]" x-data="{ open: false }">
                        <a @click="open = !open" href="#">مواقع تهمك</a>
                        <div x-show="open" @click.outside="open = false"
                            class="absolute shadow-md overflow-hidden rounded-md z-[9999] bg-white p-2 w-72">
                            <div class="h-56 overflow-y-scroll">
                                <ul>
                                    <li class="border-b last:border-b-0 border-b-slate-100">
                                        <a target="_blank" href="https://ostad.education.gov.dz/auth"
                                            class="p-2 hover:bg-slate-100 hover:opacity-100 opacity-80 flex w-full">
                                            فضاء الاساتذة

                                        </a>
                                    </li>
                                    <li class="border-b last:border-b-0 border-b-slate-100">
                                        <a target="_blank" href="http://www.infpe.edu.dz/"
                                            class="p-2 hover:bg-slate-100 hover:opacity-100 opacity-80 flex w-full">
                                            المعهد الوطني لتكوين عمال قطاع التربية و تحسين مستواهم (INFPE)
                                        </a>
                                    </li>
                                    <li class="border-b last:border-b-0 border-b-slate-100">
                                        <a target="_blank" href="https://www.inre.dz/"
                                            class="p-2 hover:bg-slate-100 hover:opacity-100 opacity-80 flex w-full">
                                            المعهد الوطني للبحث في التربية (INRE)
                                        </a>
                                    </li>
                                    <li class="border-b last:border-b-0 border-b-slate-100">
                                        <a target="_blank" href="http://education.gov.dz/administrator/index.php"
                                            class="p-2 hover:bg-slate-100 hover:opacity-100 opacity-80 flex w-full">
                                            مركزالتموين بالتجهيزات و الوسائل التعليمية و صيانتها (CAMEMD)
                                        </a>
                                    </li>
                                    <li class="border-b last:border-b-0 border-b-slate-100">
                                        <a target="_blank" href="http://www.cndp.dz/"
                                            class="p-2 hover:bg-slate-100 hover:opacity-100 opacity-80 flex w-full">
                                            المركز الوطني للوثائق البيداغوجية (CNDP)
                                        </a>
                                    </li>
                                    <li class="border-b last:border-b-0 border-b-slate-100">
                                        <a target="_blank" href="http://www.cnplet.dz/"
                                            class="p-2 hover:bg-slate-100 hover:opacity-100 opacity-80 flex w-full">
                                            المركز الوطني لادماج الابتكارات البيداغوجية و تنمية تكنلوجيات الاعلام و
                                            الاتصال (CNIIPDTICE)
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="relative z-[9999]" x-data="{ open: false }">
                        <a @click="open = !open" href="#">مديريات التربية</a>
                        <div x-show="open" @click.outside="open = false"
                            class="absolute shadow-md overflow-hidden rounded-md z-[9999] bg-white p-2 w-72">
                            <div class="h-56 overflow-y-scroll">
                                <ul>
                                    <li class="border-b last:border-b-0 border-b-slate-100">
                                        <a target="_blank" href="https://www.adraredu.com"
                                            class="p-2 hover:bg-slate-100 hover:opacity-100 opacity-80 flex w-full">
                                            مديرية التربية لولاية ادرار
                                        </a>
                                    </li>
                                    <li class="border-b last:border-b-0 border-b-slate-100">
                                        <a target="_blank" href="https://www.de-chlef.edu.dz"
                                            class="p-2 hover:bg-slate-100 hover:opacity-100 opacity-80 flex w-full">
                                            مديرية التربية لولاية الشلف
                                        </a>
                                    </li>
                                    <li class="border-b last:border-b-0 border-b-slate-100">
                                        <a target="_blank" href="https://www.delaghouat.dz"
                                            class="p-2 hover:bg-slate-100 hover:opacity-100 opacity-80 flex w-full">
                                            مديرية التربية لولاية الاغواط
                                        </a>
                                    </li>
                                    <li class="border-b last:border-b-0 border-b-slate-100">
                                        <a target="_blank" href="https://www.educoeb04e-monsitecom"
                                            class="p-2 hover:bg-slate-100 hover:opacity-100 opacity-80 flex w-full">
                                            مديرية التربية لولاية أم البواقي
                                        </a>
                                    </li>
                                    <li class="border-b last:border-b-0 border-b-slate-100">
                                        <a target="_blank" href="https://www.de-batna-edu-dz"
                                            class="p-2 hover:bg-slate-100 hover:opacity-100 opacity-80 flex w-full">
                                            مديرية التربية لولاية باتنة

                                        </a>
                                    </li>
                                    <li class="border-b last:border-b-0 border-b-slate-100">
                                        <a target="_blank" href="https://www.de-biskra.com"
                                            class="p-2 hover:bg-slate-100 hover:opacity-100 opacity-80 flex w-full">
                                            مديرية التربية لولاية بسكرة

                                        </a>
                                    </li>
                                    <li class="border-b last:border-b-0 border-b-slate-100">
                                        <a target="_blank" href="https://www.de-bechar-edu-dz"
                                            class="p-2 hover:bg-slate-100 hover:opacity-100 opacity-80 flex w-full">
                                            مديرية التربية لولاية بشار

                                        </a>
                                    </li>
                                    <li class="border-b last:border-b-0 border-b-slate-100">
                                        <a target="_blank" href="https://www.deblida.net"
                                            class="p-2 hover:bg-slate-100 hover:opacity-100 opacity-80 flex w-full">
                                            مديرية التربية لولاية االبليدة

                                        </a>
                                    </li>
                                    <li class="border-b last:border-b-0 border-b-slate-100">
                                        <a target="_blank" href="https://www.de-bouira-dz"
                                            class="p-2 hover:bg-slate-100 hover:opacity-100 opacity-80 flex w-full">
                                            مديرية التربية لولاية البويرة

                                        </a>
                                    </li>
                                    <li class="border-b last:border-b-0 border-b-slate-100">
                                        <a target="_blank" href="https://www.etarbia11.com"
                                            class="p-2 hover:bg-slate-100 hover:opacity-100 opacity-80 flex w-full">
                                            مديرية التربية لولاية تمنراست

                                        </a>
                                    </li>
                                    <li class="border-b last:border-b-0 border-b-slate-100">
                                        <a target="_blank" href="https://www.de-tebessa.com"
                                            class="p-2 hover:bg-slate-100 hover:opacity-100 opacity-80 flex w-full">
                                            مديرية التربية لولاية تبسة

                                        </a>
                                    </li>
                                    <li class="border-b last:border-b-0 border-b-slate-100">
                                        <a target="_blank" href="https://"
                                            class="p-2 hover:bg-slate-100 hover:opacity-100 opacity-80 flex w-full">
                                            مديرية التربية لولاية تلمسان

                                        </a>
                                    </li>
                                    <li class="border-b last:border-b-0 border-b-slate-100">
                                        <a target="_blank" href="https://www.de-tiaret.com"
                                            class="p-2 hover:bg-slate-100 hover:opacity-100 opacity-80 flex w-full">
                                            مديرية التربية لولاية تيارت
                                        </a>
                                    </li>
                                    <li class="border-b last:border-b-0 border-b-slate-100">
                                        <a target="_blank" href="https://www.de-tiziouzou.edu.dz"
                                            class="p-2 hover:bg-slate-100 hover:opacity-100 opacity-80 flex w-full">
                                            مديرية التربية لولاية تيزي وزو

                                        </a>
                                    </li>
                                    <li class="border-b last:border-b-0 border-b-slate-100">
                                        <a target="_blank" href="https://www.dealgercentre.com"
                                            class="p-2 hover:bg-slate-100 hover:opacity-100 opacity-80 flex w-full">
                                            مديرية التربية لولاية الجزائر وسط
                                        </a>
                                    </li>
                                    <li class="border-b last:border-b-0 border-b-slate-100">
                                        <a target="_blank" href="www.de-alger-est.com"
                                            class="p-2 hover:bg-slate-100 hover:opacity-100 opacity-80 flex w-full">
                                            مديرية التربية لشرق ولاية الجزائر
                                        </a>
                                    </li>
                                    <li class="border-b last:border-b-0 border-b-slate-100">
                                        <a target="_blank" href="www.de-alger-ouest.net"
                                            class="p-2 hover:bg-slate-100 hover:opacity-100 opacity-80 flex w-full">
                                            مديرية التربية لغرب ولاية الجزائر
                                        </a>
                                    </li>
                                    <li class="border-b last:border-b-0 border-b-slate-100">
                                        <a target="_blank" href="https://www.dedjelfa.org"
                                            class="p-2 hover:bg-slate-100 hover:opacity-100 opacity-80 flex w-full">
                                            مديرية التربية لولاية الجلفة
                                        </a>
                                    </li>
                                    <li class="border-b last:border-b-0 border-b-slate-100">
                                        <a target="_blank" href="https://www.edujijel.com"
                                            class="p-2 hover:bg-slate-100 hover:opacity-100 opacity-80 flex w-full">
                                            مديرية التربية لولاية جيجل
                                        </a>
                                    </li>
                                    <li class="border-b last:border-b-0 border-b-slate-100">
                                        <a target="_blank" href="https://www.desetif.com"
                                            class="p-2 hover:bg-slate-100 hover:opacity-100 opacity-80 flex w-full">
                                            مديرية التربية لولاية سطيف
                                        </a>
                                    </li>
                                    <li class="border-b last:border-b-0 border-b-slate-100">
                                        <a target="_blank" href="https://www.desaida.com"
                                            class="p-2 hover:bg-slate-100 hover:opacity-100 opacity-80 flex w-full">
                                            مديرية التربية لولاية سعيدة
                                        </a>
                                    </li>
                                    <li class="border-b last:border-b-0 border-b-slate-100">
                                        <a target="_blank" href="https://www.de-skikda.com"
                                            class="p-2 hover:bg-slate-100 hover:opacity-100 opacity-80 flex w-full">
                                            مديرية التربية لولاية سكيكة
                                        </a>
                                    </li>
                                    <li class="border-b last:border-b-0 border-b-slate-100">
                                        <a target="_blank" href="https://www.desba.com"
                                            class="p-2 hover:bg-slate-100 hover:opacity-100 opacity-80 flex w-full">
                                            مديرية التربية لولاية سيدي بلعباس
                                        </a>
                                    </li>
                                    <li class="border-b last:border-b-0 border-b-slate-100">
                                        <a target="_blank" href="https://www.annabade.eb2a.com"
                                            class="p-2 hover:bg-slate-100 hover:opacity-100 opacity-80 flex w-full">
                                            مديرية التربية لولاية عنابة
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="max-sm:z-[9999]" x-data="{ open: false }">
                        <button @click="open = !open" type="button"
                            class="inline-flex items-center gap-x-1 text-sm font-semibold leading-6 text-gray-900"
                            aria-expanded="false">
                            <img class="w-5" src="<?php echo get_template_directory_uri() . '/img/logo.jpg'; ?>" alt="">
                            <span>بيتي SNAPEP</span>
                            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                        <div x-show="open" @click.outside="open = false"
                            class="absolute left-1/2 max-sm:rtl:right-0 max-sm:rtl:left-0 max-sm:left-0 max-sm:right-0 max-sm:rtl:z-[9999] rtl:right-1/2 rtl:left-auto z-50 mt-2 flex px-4">
                            <div
                                class="w-screen max-w-md flex-auto overflow-hidden rounded-3xl bg-white text-sm leading-6 shadow-lg ring-1 ring-gray-900/5">
                                <div class="p-4">
                                    <div class="group relative flex gap-x-6 rounded-lg p-4 hover:bg-gray-50">
                                        <div
                                            class="mt-1 shadow-lg flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                                            <img class="h-8 w-8 text-gray-600 group-hover:text-indigo-600"
                                                src="<?php echo get_template_directory_uri() . '/img/blood.png'; ?>">
                                        </div>
                                        <div>
                                            <a href="#" class="font-bold text-lg text-gray-900">
                                                قطرة حياة
                                                <span class="absolute inset-0"></span>
                                            </a>
                                            <p class="text-gray-700">هذا النص هو مثال لنص يمكن استبداله
                                            </p>
                                        </div>
                                    </div>
                                    <div class="group relative flex gap-x-6 rounded-lg p-4 hover:bg-gray-50">
                                        <div
                                            class="mt-1 shadow-lg flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                                            <img class="h-8 w-8 text-gray-600 group-hover:text-indigo-600"
                                                src="<?php echo get_template_directory_uri() . '/img/koran_.png'; ?>">
                                        </div>
                                        <div>
                                            <a href="#" class="font-bold text-lg text-gray-900">
                                                شموع المعرفة
                                                <span class="absolute inset-0"></span>
                                            </a>
                                            <p class="text-gray-700">هذا النص هو مثال لنص يمكن استبداله
                                            </p>
                                        </div>
                                    </div>
                                    <div class="group relative flex gap-x-6 rounded-lg p-4 hover:bg-gray-50">
                                        <div
                                            class="mt-1 shadow-lg flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                                            <img class="h-8 w-8 text-gray-600 group-hover:text-indigo-600"
                                                src="<?php echo get_template_directory_uri() . '/img/join.png'; ?>">
                                        </div>
                                        <div>
                                            <a href="#" class="font-bold text-lg text-gray-900">
                                                انخرط معنا
                                                <span class="absolute inset-0"></span>
                                            </a>
                                            <p class="text-gray-700">هذا النص هو مثال لنص يمكن استبداله
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="flex gap-2 max-sm:hidden items-center">
                <div class="relative">
                    <form role="search" method="get" class="search-form"
                        action="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <label for="diwan-search-form-id">
                            <span class="screen-reader-text">
                                <?php __( 'البحث عن:', 'jdsp' ); // phpcs:ignore: WordPress.Security.EscapeOutput.UnsafePrintingFunction -- core trusts translations ?>
                            </span>
                            <input type="search" id="diwan-search-form-id"
                                class="bg-white p-2 border border-slate-300 outline-none text-sm px-4 rounded-md"
                                placeholder="<?php echo __( 'البحث في الموقع &hellip;', 'jdsp' ); ?>"
                                value="<?php echo get_search_query(); ?>" name="s" />
                        </label>
                        <button type="submit" class="absolute left-3 top-2.5 opacity-60">
                            <span class="fa fa-search"></span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="diwan-primary relative z-50" x-data="{ open: false }">
        <div class="container">
            <div class="flex items-center justify-between">
                <div class="diwan-primary-logo">
                    <a href="<?php echo get_home_url(); ?>">
                        <img class="" src="<?php echo get_template_directory_uri() . '/img/logo.jpg'; ?>" alt="">
                    </a>
                </div>
                <div class="primary-menu-list">
                    <?php 
                        $arg = array(
                            'theme_location' => 'primary',
                        );
                        wp_nav_menu($arg);
                    ?>
                </div>
                <div class="max-sm:block hidden">
                    <button x-on:click="open = !open"
                        class="text-lg focus:bg-slate-600 flex h-10 w-10 items-center justify-center bg-black/10 rounded-full">
                        <i class="fa fa-bars"></i>
                    </button>
                    <div x-show="open" @click.outside="open = false"
                        class="fixed z-[9999] bg-white left-0 right-0 top-0 transition-all duration-200 p-4">
                        <button x-on:click="open = false"
                            class="text-lg absolute left-3 top-5 flex h-10 w-10 items-center justify-center rounded-full">
                            <i class="fa fa-remove"></i>
                        </button>
                        <div class="flex gap-2 items-center">
                            <div class="relative">
                                <form role="search" method="get" class="search-form"
                                    action="<?php echo esc_url( home_url( '/' ) ); ?>">
                                    <label for="diwan-search-form-id">
                                        <span class="screen-reader-text">
                                            <?php __( 'البحث عن:', 'jdsp' ); ?>
                                        </span>
                                        <input type="search" id="diwan-search-form-id"
                                            class="bg-white p-2 border border-slate-300 outline-none text-sm px-4 rounded-md"
                                            placeholder="<?php echo __( 'البحث في الموقع &hellip;', 'jdsp' ); ?>"
                                            value="<?php echo get_search_query(); ?>" name="s" />
                                    </label>
                                    <button type="submit" class="absolute left-3 top-2.5 opacity-60">
                                        <span class="fa fa-search"></span>
                                    </button>
                                </form>
                            </div>
                        </div>
                        <?php 
                            $arg = array(
                                'theme_location' => 'primary',
                                'menu_class' => 'flex flex-col gap-3.5',
                            );
                            wp_nav_menu($arg); 
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php if (!is_home()) { ?>
    <div class="diwan-title-main bg-cover"
        style="background-image: url(<?php echo get_template_directory_uri() . '/img/bg.jpg'; ?>)">
        <div class="container">
            <h1 class="title font-bold text-2xl"><?php is_front_page() ? bloginfo('description') : wp_title(''); ?></h1>
        </div>
    </div>
    <?php } ?>
    <div class="container">
        <div class="flex items-center">
            <div
                class="bg-slate-900/30 font-bold rounded-s-lg flex items-center justify-center h-14 max-sm:h-10 overflow-hidden w-36 max-sm:w-16">
                <span class="max-sm:hidden">
                    شريط العاجل
                </span>
                <span class="hidden max-sm:flex">
                    <i class="fa fa-rss"></i>
                </span>
            </div>
            <div class="ticker-wrap flex items-center h-14 max-sm:h-10 overflow-hidden w-[calc(100%-144px)] max-sm:w-[calc(100%-64px)] bg-white/60 border border-slate-900/50 shadow-lg rounded-s-lg relative isolate"
                dir="ltr">
                <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80"
                    aria-hidden="true">
                    <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]"
                        style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
                    </div>
                </div>
                <div class="ticker">
                    <?php
                    $args = array(
                        'posts_per_page' => 9,
                        'order' => 'DESC',
                        'cat' => '15'
                    );
                    $eyemich = new WP_Query($args);
                    if ($eyemich->have_posts()) :
                        while ($eyemich->have_posts()) : $eyemich->the_post();
                        $url = get_the_post_thumbnail_url();
                ?>
                    <div class="ticker__item">
                        <a href="<?php the_permalink(); ?>"
                            class="opacity-70 hover:opacity-100 transition-all duration-200">
                            <?php the_title(); ?>
                        </a>
                    </div>
                    <?php endwhile; else :
                    echo 'خطأ'; endif; wp_reset_postdata(); ?>
                </div>
            </div>
        </div>
    </div>