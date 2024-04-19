<?php get_header(); ?>
<?php $ecretaryGeneral = get_option('ecretaryGeneral'); ?>
<div class="container">
    <div
        class="relative my-8 z-10 isolate overflow-hidden bg-gray-900 px-3 pt-6 shadow-2xl sm:rounded-xl sm:px-6 md:pt-8 lg:px-8 lg:pt-0">
        <div class="flex max-sm:flex-col lg:flex lg:gap-x-8 gap-4 items-center">
            <div class="w-1/3 max-sm:w-full">
                <div class="">
                    <svg viewBox="0 0 1024 1024"
                        class="absolute left-1/2 rtl:right-1/2 rtl:left-auto top-1/2 -z-10 h-[64rem] w-[64rem] -translate-y-1/2 [mask-image:radial-gradient(closest-side,white,transparent)] sm:left-full rtl:sm:right-full rtl:sm:left-0 sm:-ml-80 rtl:sm:-mr-80 rtl:sm:-ml-0 lg:left-1/2 rtl:lg:right-1/2 rtl:lg:left-auto lg:ml-0 lg:-translate-x-1/2 rtl:lg:translate-x-1/2 lg:translate-y-0"
                        aria-hidden="true">
                        <circle cx="512" cy="512" r="512" fill="url(#759c1415-0410-454c-8f7c-9a820de03641)"
                            fill-opacity="0.7" />
                        <defs>
                            <radialGradient id="759c1415-0410-454c-8f7c-9a820de03641">
                                <stop stop-color="#7775D6" />
                                <stop offset="1" stop-color="#E935C1" />
                            </radialGradient>
                        </defs>
                    </svg>
                    <div x-data="{ open: false }"
                        class="mx-auto max-w-md text-center lg:mx-0 lg:flex-auto lg:py-8 lg:text-left rtl:lg:text-right">
                        <div class="flex flex-col justify-center items-center">
                            <img class="w-20 h-20 border-2 border-white shadow-lg rounded-full "
                                src="<?php echo get_template_directory_uri() . '/img/hmaidat.png'; ?>" alt="">
                            <h2 class="text-xl font-extrabold m-0 tracking-tight text-white sm:text-lg">كلمة الأمين
                                العام
                            </h2>
                            <h2 class="text-lg font-normal m-0 tracking-tight text-white sm:text-lg">حميدات محمد
                            </h2>
                        </div>
                        <p class="mt-6 text-lg leading-8 text-gray-300">
                            <?php 
                        $excerpt2 = substr( $ecretaryGeneral, 0, 320 ); // Only display first 260 characters of excerpt
                        $result2 = substr( $excerpt2, 0, strrpos( $ecretaryGeneral, ' ' ) );
                        echo $excerpt2 . " ...";
                        ?>
                        </p>
                        <?php 
                            $link1 = get_option('ecretaryIst'); 
                            $link2 = get_option('ecretaryTw'); 
                            $link3 = get_option('ecretaryFace'); 
                            $link4 = get_option('ecretaryLin'); 
                        ?>
                        <div
                            class="mt-10 flex max-sm:flex-col max-sm:justify-center max-sm:gap-3 items-center justify-between gap-x-6 lg:justify-between">
                            <button @click="open = true"
                                class="rounded-md max-sm:w-full bg-white px-3.5 py-2.5 text-sm font-semibold text-gray-900 shadow-sm hover:bg-gray-100 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">إقرأ
                                المزيد...</button>
                            <div class="flex gap-2 items-center">
                                <?php if ($link3 !==  '' || !empty($link3)) { ?>
                                <a href="<?php echo $link3; ?>" target="_blank"
                                    class="w-9 flex items-center justify-center h-9 rounded-full bg-gray-100/10 hover:bg-gray-100/20 text-white">
                                    <i class="fab fa-facebook"></i>
                                </a>
                                <?php } ?>
                                <?php if ($link2 !==  '' || !empty($link2)) { ?>
                                <a href="<?php echo $link2; ?>" target="_blank"
                                    class="w-9 flex items-center justify-center h-9 rounded-full bg-gray-100/10 hover:bg-gray-100/20 text-white">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <?php } ?>
                                <?php if ($link4 !==  '' || !empty($link4)) { ?>
                                <a href="<?php echo $link4; ?>" target="_blank"
                                    class="w-9 flex items-center justify-center h-9 rounded-full bg-gray-100/10 hover:bg-gray-100/20 text-white">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                                <?php } ?>
                                <?php if ($link1 !==  '' || !empty($link1)) { ?>
                                <a href="<?php echo $link1; ?>" target="_blank"
                                    class="w-9 flex items-center justify-center h-9 rounded-full bg-gray-100/10 hover:bg-gray-100/20 text-white">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <?php } ?>
                            </div>
                        </div>
                        <div x-show="open"
                            class="fixed flex items-center justify-center left-0 right-0 top-0 bottom-0 z-50 bg-black/20">
                            <div @click.outside="open = false"
                                class="bg-white overflow-y-scroll h-96 relative p-4 rounded-lg shadow-lg w-96 max-sm:w-full">
                                <button @click="open = false"
                                    class="fixed z-50 h-8 w-8 flex items-center rounded-full text-xl justify-center bg-black/20 top-3 left-3">
                                    <i class="fa fa-close"></i>
                                </button>
                                <?php echo $ecretaryGeneral; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-2/3 max-sm:w-full">
                <div class="hero-slider mb-6 mt-4" dir="ltr" data-slick='{"slidesToShow": 4, "slidesToScroll": 4}'>
                    <?php
    $args = array(
        'posts_per_page' => 8,
        'order' => 'DESC',
        'cat' => '5'
    );
    $eyemich = new WP_Query($args);
    if ($eyemich->have_posts()) :
        while ($eyemich->have_posts()) : $eyemich->the_post();
        $url = get_the_post_thumbnail_url();
?>
                    <div dir="rtl" class="bg-black/30 h-72 overflow-hidden rounded-lg shadow-md">
                        <a href="<?php the_permalink(); ?>">
                            <img class="inset-0 w-full h-36 object-cover object-center md:object-center"
                                src="<?php echo $url; ?>" alt="<?php the_title(); ?>">
                        </a>
                        <div class="p-3">
                            <h3
                                class="font-extrabold text-sm opacity-70 transition-all hover:opacity-100 hover:text-white text-white">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h3>
                        </div>
                    </div>
                    <?php endwhile; else :
        echo 'خطأ'; endif; wp_reset_postdata(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-xl bg-white p-3">
    <div class="page-header">
        <h2 class="title"><?php echo __( 'أنشطة المكتب الوطني', 'jdsp' ); ?></h2>
    </div>
    <div class="row">
        <?php
                    $args = array(
                        'posts_per_page' => 4,
                        'order' => 'DESC',
                        'cat' => '2'
                    );
                    $eyemich = new WP_Query($args);
                    if ($eyemich->have_posts()) :
                        while ($eyemich->have_posts()) : $eyemich->the_post();
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
        </div>
        <?php endwhile; else :
                    echo 'خطأ'; endif; wp_reset_postdata(); ?>
    </div>
    <div class="page-header">
        <h2 class="title"><?php echo __( 'أنشطة المكاتب الولائية', 'jdsp' ); ?></h2>
    </div>
    <div class="row">
        <?php
                    $args = array(
                        'posts_per_page' => 4,
                        'order' => 'DESC',
                        'cat' => '3'
                    );
                    $eyemich = new WP_Query($args);
                    if ($eyemich->have_posts()) :
                        while ($eyemich->have_posts()) : $eyemich->the_post();
                        $url = get_the_post_thumbnail_url();
                ?>
        <div class="col-sm-3">
            <a href="<?php the_permalink(); ?>" class="post-item rounded-md">
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
    <div class="row">
        <div class="col-lg-6">
            <div class="page-header">
                <h2 class="title"><?php echo __( 'حصص تيليفيزيونية', 'jdsp' ); ?></h2>
            </div>
            <div class="">
                <?php
                    $args = array(
                        'posts_per_page' => 3,
                        'order' => 'DESC',
                        'cat' => '11'
                    );
                    $eyemich = new WP_Query($args);
                    if ($eyemich->have_posts()) :
                        while ($eyemich->have_posts()) : $eyemich->the_post();
                        $url = get_the_post_thumbnail_url();
                ?>
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
                <?php endwhile; else :
                    echo 'خطأ'; endif; wp_reset_postdata(); ?>
            </div>
        </div>
        <div class="w-1/2 max-sm:w-full">
            <div class="page-header">
                <h2 class="title"><?php echo __( 'فيديو النقابة', 'jdsp' ); ?></h2>
            </div>
            <?php $videoLink = get_option('videoLink'); ?>
            <iframe class="w-full rounded-md h-64 mb-6" src="https://www.youtube.com/embed/<?php echo $videoLink; ?>"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>
        </div>
    </div>
</div>
<div class="container-xl bg-white p-3">
    <div class="flex gap-3 my-3 max-sm:flex-col-reverse">
        <div class="w-2/3 max-sm:w-full">
            <div class="mb-2 pb-4 border-b border-b-slate-200">
                <h3 class="text-2xl font-extrabold">تعازي</h3>
            </div>
            <div class="hero-carousel mb-6 mt-4" dir="ltr" data-slick='{"slidesToShow": 4, "slidesToScroll": 4}'>
                <?php
    $args = array(
        'posts_per_page' => 8,
        'order' => 'DESC',
        'cat' => '12'
    );
    $eyemich = new WP_Query($args);
    if ($eyemich->have_posts()) :
        while ($eyemich->have_posts()) : $eyemich->the_post();
        $url = get_the_post_thumbnail_url();
?>
                <div dir="rtl" class="bg-white h-64 overflow-hidden rounded-lg shadow-md">
                    <a href="<?php the_permalink(); ?>">
                        <img class="inset-0 w-full h-44 object-cover object-center md:object-center"
                            src="<?php echo $url; ?>" alt="<?php the_title(); ?>">
                    </a>
                    <div class="p-3">
                        <h3 class="font-extrabold mb-3">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h3>
                    </div>
                </div>
                <?php endwhile; else :
        echo 'خطأ'; endif; wp_reset_postdata(); ?>
            </div>
        </div>
        <div class="w-1/3 max-sm:w-full">
            <div class="page-header">
                <h2 class="title"><?php echo __( 'بيانات النقابة', 'jdsp' ); ?></h2>
            </div>
            <?php
                    $args = array(
                        'posts_per_page' => 1,
                        'order' => 'DESC',
                        'cat' => '13'
                    );
                    $eyemich = new WP_Query($args);
                    if ($eyemich->have_posts()) :
                        while ($eyemich->have_posts()) : $eyemich->the_post();
                        $url = get_the_post_thumbnail_url();
                ?>
            <a href="<?php the_permalink(); ?>"
                class="flex opacity-80 transition-all hover:opacity-100 items-center gap-2">
                <div class="w-full">
                    <img src="<?php echo $url; ?>" class="w-full object-cover h-72 max-sm:h-64 rounded-md"
                        alt="<?php the_title(); ?>">
                </div>
            </a>
            <?php endwhile; else :
                    echo 'خطأ'; endif; wp_reset_postdata(); ?>
        </div>
    </div>
</div>

<div class="relative isolate overflow-hidden bg-gray-900 py-24 sm:py-32">
    <img src="<?php echo get_template_directory_uri() . '/img/albumimage.jpg'; ?>" alt=""
        class="absolute inset-0 -z-10 h-full w-full object-cover object-center md:object-center">
    <div class="hidden sm:absolute sm:-top-10 sm:right-1/2 sm:-z-10 sm:mr-10 sm:block sm:transform-gpu sm:blur-3xl"
        aria-hidden="true">
        <div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-[#ff4694] to-[#776fff] opacity-20"
            style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
        </div>
    </div>
    <div class="absolute -top-52 left-1/2 -z-10 -translate-x-1/2 transform-gpu blur-3xl sm:top-[-28rem] sm:ml-16 sm:translate-x-0 sm:transform-gpu"
        aria-hidden="true">
        <div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-[#ff4694] to-[#776fff] opacity-20"
            style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
        </div>
    </div>

    <div class="mb-10 border-b-2 border-b-white/10 pb-8">
        <div class="container">
            <h2 class="text-4xl text-center font-bold tracking-tight text-white sm:text-6xl">ألبوم الصور</h2>
            <p class="mt-6 text-center text-lg leading-3 text-gray-300">عرض أبوم الصور الخاص بنشاطات النقابة</p>
        </div>
    </div>
    <div class="container">
        <div dir="ltr">
            <div class="slider demo">
                <?php
                    $args = array(
                        'posts_per_page' => 9,
                        'order' => 'DESC',
                        'cat' => '14'
                    );
                    $eyemich = new WP_Query($args);
                    if ($eyemich->have_posts()) :
                        while ($eyemich->have_posts()) : $eyemich->the_post();
                        $url = get_the_post_thumbnail_url();
                ?>
                <a href="<?php the_permalink(); ?>"
                    class="overflow-hidden shadow-lg border-2 border-white/30 group opacity-70 hover:opacity-100 transition-all duration-200 h-48 max-sm:h-28 rounded-lg relative block shadow-lg">
                    <span
                        class="absolute left-[48%] max-sm:hidden transition-all duration-200 group-hover:scale-110 group-hover:bg-white/70 group-hover:text-blackag   ai  qa top-[48%] flex items-center justify-center bg-white/30 h-8 w-8 rounded-full">
                        <i class="fa fa-image"></i>
                    </span>
                    <img class="inset-0 w-full object-cover object-center md:object-center" src="<?php echo $url; ?>"
                        alt="Image Description" />
                </a>
                <?php endwhile; else :
                    echo 'خطأ'; endif; wp_reset_postdata(); ?>
            </div>
        </div>
    </div>
    <!-- <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto mt-10 max-w-2xl lg:mx-0 lg:max-w-none">
            <dl class="mt-16 grid grid-cols-1 gap-8 sm:mt-20 sm:grid-cols-2 lg:grid-cols-4">
                <div class="flex flex-col-reverse">
                    <dt class="text-base leading-7 text-gray-300">عدد المنخرطين في النقابة</dt>
                    <dd class="text-2xl font-bold leading-9 tracking-tight text-white">12</dd>
                </div>
                <div class="flex flex-col-reverse">
                    <dt class="text-base leading-7 text-gray-300">عدد الإبتدائيات في التراب الوطني</dt>
                    <dd class="text-2xl font-bold leading-9 tracking-tight text-white">7392</dd>
                </div>
                <div class="flex flex-col-reverse">
                    <dt class="text-base leading-7 text-gray-300">عدد المتوسطات في التراب الوطني</dt>
                    <dd class="text-2xl font-bold leading-9 tracking-tight text-white">6100</dd>
                </div>
                <div class="flex flex-col-reverse">
                    <dt class="text-base leading-7 text-gray-300">عدد المكاتب الوطنية</dt>
                    <dd class="text-2xl font-bold leading-9 tracking-tight text-white">23</dd>
                </div>
            </dl>
        </div>
    </div> -->
</div>
<div class="container-xl bg-white p-3 my-3">
    <?php echo do_shortcode( '[contact_form]' ); ?>
</div>
<?php get_footer(); ?>