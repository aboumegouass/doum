<?php 
	$postID = get_the_ID();
	setPostViews($postID);
?>
<div class="snapep-single">
    <?php socials_shares(); ?>
    <h1 class="heading"><?php the_title(); ?></h1>
    <?php if ( get_post_type( $postID ) == 'blog' ) { ?>
    <ul class="nav meta-data">
        <li>
            <i class="fa fa-clock"></i><?php time_ago(); ?>
        </li>
        <li class="view-txt">
            <i class="fa fa-burn"></i> <?php echo getPostViews($postID); ?>
        </li>
    </ul>
    <?php }elseif ( get_post_type( $postID ) == 'post' ) { ?>
    <ul class="nav meta-data">
        <li>
            <i class="fa fa-clock"></i> <?php time_ago(); ?>
        </li>
        <li class="view-txt">
            <i class="fa fa-burn"></i> <?php echo getPostViews($postID); ?>
        </li>
    </ul>
    <?php } ?>


    <div class="img-content" style="background-image: url('<?php GH_thumbnail($postID,'single-thumbnail');?>');">
        <div class="content-shadow"></div>
    </div>
    <div class="single-content GH-content">
        <?php the_content(); ?>
    </div>

</div>