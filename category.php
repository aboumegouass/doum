<?php get_header(); ?>
<?php if (is_category(3)) { ?>
<div class="app-header-bg" style="background-image: url('<?php echo get_template_directory_uri() . '/img/behaviour.jpg'; ?>');">
    <div class="container">
        <h1 class="title"><?php single_cat_title(); ?></h1>
    </div>
</div>
<div class="container my-3">
        <div class="abouts-items">
        <div class="advancing-news">
            
            <div class="advancing-news-inner bg-white p-2 my-2">
                <div class="image-ad">
                    <img src="<?php echo get_template_directory_uri() . '/img/fm.gif'; ?>" class="gifphto" alt="">
                </div>
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-2019-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-2019" type="button" role="tab" aria-controls="pills-2019"
                            aria-selected="true">عام 2019</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-2018-tab" data-bs-toggle="pill" data-bs-target="#pills-2018"
                            type="button" role="tab" aria-controls="pills-2018" aria-selected="false">عام 2018</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-2017-tab" data-bs-toggle="pill" data-bs-target="#pills-2017"
                            type="button" role="tab" aria-controls="pills-2017" aria-selected="false">عام 2017</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-2016-tab" data-bs-toggle="pill" data-bs-target="#pills-2016"
                            type="button" role="tab" aria-controls="pills-2016" aria-selected="false">عام 2016</button>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-2019" role="tabpanel"
                        aria-labelledby="pills-2019-tab" tabindex="0">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="item-maarad">
                                    <div class="item-maarad-content">
                                        <p class="meta"><i class="fa fa-location"></i> مهرجان قناع و قبوع</p>
                                        <h3 class="title">مهرجان قناع وقبوع</h3>
                                        <p class="text">الترفيه الغامض ( قناع و قبوع ) اصبح الشباب بكافة الاعﻤﺎر يبحثون
                                            عن كل ما هو جديد وغريب من باب التغﻴﺮُّ وكسر الروتﻴﻦ لنجد بعض الأفكار الغريبة
                                            التي دخلت لمجتمعاتنا وأصبحت لازمة له فهناك من يرى في التخفي الجزﺋﻲ وتغﻴﺮًّ
                                            اﻧﻤاط الشكل نوعاً من أنواع التميُّز.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-2018" role="tabpanel" aria-labelledby="pills-2018-tab"
                        tabindex="0">
                        <div class="item-maarad-empty">
                            <div class="item-maarad-content">
                                <img src="<?php echo get_template_directory_uri() . '/img/empty.png'; ?>" alt="">
                                <h3 class="title">لا توجد معارض</h3>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-2017" role="tabpanel" aria-labelledby="pills-2017-tab"
                        tabindex="0">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="item-maarad">
                                    <div class="item-maarad-content">
                                        <p class="meta"><i class="fa fa-location"></i> مهرجان صيف الباحة للتسويق
                                            والترفيه</p>
                                        <h3 class="title">مهرجان صيف الباحة</h3>
                                        <p class="text">-مهرجان صيف الباحة 1438 ه ت م تنفيذ ما يلي - 12345678 123456
                                            خيام التسوق والسوق الاستهلاكية العاب الترفيه الهوائية والمائية مسرح الاسرة
                                            والطفل العروض البهلوانية حديقة الحيوانات اكشاك الطعام والشراب حملة اعلامية
                                            واعلانية من خلال حضور المشاهﻴﺮ والفنانﻴﻦ مشاركة في تنظيم مسرحية كوميدية
                                            للفنان فايز المالﻜﻲ بايعها</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="item-maarad">
                                    <div class="item-maarad-content">
                                        <p class="meta"><i class="fa fa-location"></i> معرض جوهرةعسير للتسويق والترفيه
                                        </p>
                                        <h3 class="title">تنظيم معرض جوهرة عسﻴﺮ ﺑﻤحافظة عسﻴﺮ</h3>
                                        <p class="text">خيام التسوق والسوق الاستهلاكية العاب الترفيه الهوائية والمائية
                                            مسرح الاسرة والطفل حديقة الحيوانات اكشاك الطعام والشراب مساهمة في نشر الوعي
                                            الثقافي والمسؤولية الاجتﻤﺎعية</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="item-maarad">
                                    <div class="item-maarad-content">
                                        <p class="meta"><i class="fa fa-location"></i> معرض صيف المدينة المنورة للتسويق
                                            والترفيه</p>
                                        <h3 class="title">-معرض صيف المدينة المنورة 1438 ه تم تنفيذ ما يلي</h3>
                                        <p class="text">خيام التسوق والسوق الاستهلاكية العاب الترفيه الهوائية والمائية
                                            مسرح الاسرة والطفل حديقة الحيوانات اكشاك الطعام والشراب مساهمة في نشر الوعي
                                            الثقافي والمسؤولية الاجتﻤﺎعية استقطاب الشخصيات الهامة والمشاهﻴﺮ والفنانﻴﻦ
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-2016" role="tabpanel" aria-labelledby="pills-2016-tab"
                        tabindex="0">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="item-maarad">
                                    <div class="item-maarad-content">
                                        <p class="meta"><i class="fa fa-location"></i> مركز مروج الرياض للمعارض
                                            والمؤتمرات</p>
                                        <h3 class="title">استثﻤﺎر مركز مروج الرياض للمعارض والمؤﺗﻤرات لمدة عام تنفيذ ما
                                            يلي</h3>
                                        <p class="text">خيام التسوق والسوق الاستهلاكية العاب الترفيه الهوائية والمائية
                                            في العام 2016 استثﻤﺎر مركز مروج الرياض للمعارض والمؤﺗﻤرات لمدة عام تنفيذ ما
                                            يلي العاب كهربائية اكشاك المؤكولات في الساحة الخارجية</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="item-maarad">
                                    <div class="item-maarad-content">
                                        <p class="meta"><i class="fa fa-location"></i> معرض سيف للتسويق والترفيه</p>
                                        <h3 class="title">معرض سيف للتسوق والترفيه</h3>
                                        <p class="text">تنظيم معرض سيف للتسوق والترفيه في مركز سيف للمعارض والمؤﺗﻤرات
                                            لمدة عامﻴﻦ على التوالي 2016- 2015</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="item-maarad">
                                    <div class="item-maarad-content">
                                        <p class="meta"><i class="fa fa-location"></i> معرض العائلة للتسويق والترفيه</p>
                                        <h3 class="title">معرض العائلة للتسوق والترفية</h3>
                                        <p class="text">تنظيم معرض العائلة للتسوق والترفيه في مركز القصيم الدولي للمعارض
                                            والمؤﺗﻤرات 2015- لمدة عامﻴﻦ على التوالي 201</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="item-maarad">
                                    <div class="item-maarad-content">
                                        <p class="meta"><i class="fa fa-location"></i> معرض المجمعة أحلى</p>
                                        <h3 class="title">معرض المجمعة أحلى</h3>
                                        <p class="text"> تنظيم معرض المجمعة احلى ﺑﻤحافظة المجمعة
                                            تنظيم معرض شتاء الزلفي ﺑﻤحافظة الزلفي</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } else ?>
    <?php { ?>
    <div class="snapep--search py-4">
        <div class="container">
            <div class="row">
                <?php
                if (have_posts()) :
                    while (have_posts()) : the_post();
                        $url = get_the_post_thumbnail_url();
            ?>
                <div class="col-xl-3 col-md-6">
                    <div class="snapep-post">
                        <a href="<?php the_permalink(); ?>" class="snapep-post-thumb"
                            style="background-image: url(<?php echo $url; ?>)">
                        </a>
                        <ul class="meta">
                            <li><i class="fa fa-clock"></i> <?php time_ago(); ?></li>
                            <li><i class="fa fa-eye"></i> <?php echo getPostViews(get_the_ID()); ?></li>
                        </ul>
                        <h3 class="title">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h3>
                    </div>
                </div>
                <?php endwhile; endif; ?>
            </div>
        </div>
    </div>
    </div>
    </div>
<?php }?>
<?php get_footer(); ?>