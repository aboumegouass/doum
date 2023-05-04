<?php

function add_widgets_area() {
  	register_sidebar( array(
  		'name'          => __('فيديو مديرية الخدمات الجامعية '),
  		'id'            => 'aside-video',
  		'description'   => __('أضف نص من الودجات واسحبه هنا'),
  	) );
}
add_action( 'widgets_init', 'add_widgets_area' );
