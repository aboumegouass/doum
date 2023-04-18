<?php
// Add Size Thumbnails Post
function GH_thumbnail_setup() {
  add_theme_support( 'post-thumbnails' );
  
  /** Single Thumbnail Size **/
  /**************************************************************/
  add_image_size( 'single-thumbnail', 660, 252, array( 'left', 'bottom' ) );

  /** Tiny Thumbnail Size **/
  /**************************************************************/
  add_image_size( 'most-popular-thumbnail', 110, 90, array( 'left', 'bottom' ) );

  /** Panel thumbnail Size **/
  add_image_size( 'panel-thumbnail', 162, 122, array( 'left', 'bottom' ) );
  /**************************************************************/

  /** Panel featured thumbnail Size **/
  add_image_size( 'panel-featured-thumbnail', 335, 220, array( 'left', 'bottom' ) );
  /**************************************************************/

  /** Slider thumbnail Size **/
  add_image_size( 'slider-thumbnail', 280, 200, array( 'left', 'bottom' ) );
  /**************************************************************/

  /** Featured Slider thumbnail Size **/
  /**************************************************************/
  add_image_size( 'featured-slider-thumbnail', 600, 390, array( 'left', 'bottom' ) );
}

add_action( 'after_setup_theme', 'GH_thumbnail_setup' );

function GH_thumbnail($postID = null, $thumb_size = null) {
  $thumb_uri = get_the_post_thumbnail_url($postID, $thumb_size);
  if ($thumb_uri == '') {
    echo get_template_directory_uri() . '/assets/images/default.png';
  } else {
    echo $thumb_uri;
  }
}