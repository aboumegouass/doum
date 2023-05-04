<div class="event-counts">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-sm-6">
                <div class="event-count-item">
                    <div class="event-count-item-img">
                        <img src="<?php echo get_template_directory_uri() . '/img/004-man.png'; ?>" alt="">
                    </div>
                    <h1 class="count-title"><?php echo get_option('residencesCount'); ?></h1>
                    <p class="text"><?php echo __( 'عدد الطلبة المقيمين', 'diwan' ); ?></p>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6">
                <div class="event-count-item">
                    <div class="event-count-item-img">
                        <img src="<?php echo get_template_directory_uri() . '/img/003-bus-stop.png'; ?>" alt="">
                    </div>
                    <h1 class="count-title"><?php echo get_option('carsCount'); ?></h1>
                    <p class="text"><?php echo __( 'عدد الحافلات', 'diwan' ); ?></p>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6">
                <div class="event-count-item">
                    <div class="event-count-item-img">
                        <img src="<?php echo get_template_directory_uri() . '/img/001-hanger.png'; ?>" alt="">
                    </div>
                    <h1 class="count-title"><?php echo get_option('carsEtudients'); ?></h1>
                    <p class="text"><?php echo __( 'عدد مشتركي النقل', 'diwan' ); ?></p>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6">
                <div class="event-count-item">
                    <div class="event-count-item-img">
                        <img src="<?php echo get_template_directory_uri() . '/img/002-economy.png'; ?>" alt="">
                    </div>
                    <h1 class="count-title"><?php echo get_option('borceEtudients'); ?></h1>
                    <p class="text"><?php echo __( 'عدد الطلبة الممنوحين', 'diwan' ); ?></p>
                </div>
            </div>
        </div>
    </div>
</div>