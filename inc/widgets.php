<?php

function add_widgets_area() {
  	register_sidebar( array(
  		'name'          => __('فيديو النقابة '),
  		'id'            => 'aside-video',
  		'description'   => __('أضف نص من الودجات واسحبه هنا'),
  	) );
  	register_sidebar( array(
  		'name'          => __('صورة بيان النقابة'),
  		'id'            => 'aside-image',
  		'description'   => __('أضف نص من الودجات واسحبه هنا'),
  	) );
}
add_action( 'widgets_init', 'add_widgets_area' );
