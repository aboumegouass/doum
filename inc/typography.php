<?php
// Display Title Post
function snapep_title($leng = '60', $l_end = '...') {
    echo mb_strimwidth(get_the_title(), 0, $leng, $l_end);
 }
  // Display Excerpt Post
  function snapep_excerpt($leng = '200', $l_end = '...') {
    echo mb_strimwidth(get_the_excerpt(), 0, $leng, $l_end);
  }
  // Display Time Post
  function time_ago() {
    echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . '<span> ago </span>';
  }