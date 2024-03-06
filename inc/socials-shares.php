<?php
function socials_shares() {
    $title = get_the_title();
    $permalink = get_permalink();

    $twitter = 'https://twitter.com/intent/tweet?text=Hey! Read this: ' . $title . '&amp;url=' . $permalink . 'twitterholder';
    $facebook = 'https://facebook.com/sharer/sharer.php?u=' . $permalink;

    $shares_button = array(
        1 => array(
                    'id' => 'facebook_btn',
                    'label' => 'فيسبووك',
                    'name' => get_option('social_facebook'),
                    'permalink' => 'https://facebook.com/sharer/sharer.php?u=' . $permalink,
                    'icon' => '<i class="fab fa-facebook"></i>',
        ),
        2 => array(
                    'id' => 'twitter_btn',
                    'label' => 'تويتر',
                    'name' => get_option('social_twitter'),
                    'permalink' => 'https://twitter.com/intent/tweet?text=Hey! Read this: ' . $title . '&amp;url=' . $permalink . 'twitterholder',
                    'icon' => '<i class="fab fa-twitter"></i>',
        ),
        5 => array(
                    'id' => 'linkedin_btn',
                    'label' => 'لينكيدن',
                    'name' => get_option('social_linkedin'),
                    'permalink' => 'https://www.linkedin.com/shareArticle?title=' . $title . '&url=' . $permalink,
                    'icon' => '<i class="fab fa-linkedin"></i>',
        ),
        7 => array(
                    'id' => 'pinterest_btn',
                    'label' => 'بينتريسات',
                    'name' => get_option('social_pinterest'),
                    'permalink' => 'https://www.pinterest.com/pin/create/button/?description=' . $title . '&media=1&url=' . $permalink,
                    'icon' => '<i class="fab fa-pinterest"></i>',
        ),
    );
        ?>

<div
    class="flex justify-between max-sm:my-4 relative z-50 <?php echo get_option('social_shape'); ?> <?php echo get_option('position_btns'); ?> ">
    <p class="share-text"><i class="fa fa-share"></i> <span class="max-sm:hidden max-sm:opacity-40">مشاركة الموضوع عبر
            مواقع التواصل
            الاجتماعي </span> </p>
    <ul class="GH-shares nav">
        <?php
        foreach ($shares_button as $shares_btn) {
            if ($shares_btn['name'] !== '') { ?>
        <li class="<?php echo $shares_btn['id']; ?>">
            <a class="circular-btn md bg-secondary" style="text-decoration: none"
                href="<?php echo $shares_btn['permalink']; ?>">
                <?=$shares_btn['icon']; ?>
            </a>
        </li>
        <?php
            }
        }
        ?>
    </ul>
</div>
<?php

}