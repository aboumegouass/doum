<?php
/*
==================================================================================================
   Save Contact Form
==================================================================================================
*/
add_action('wp_ajax_GH_save_user_contact', 'GH_save_contact');
add_action('wp_ajax_nopriv_GH_save_user_contact', 'GH_save_contact');


/*
==================================================================================================
   Function to Save Contact Form
==================================================================================================
*/
function GH_save_contact() {
    $fullname = wp_strip_all_tags($_POST['fullname']);
    $email = wp_strip_all_tags($_POST['email']);
    $message = wp_strip_all_tags($_POST['message']);
    $args = array (
        'post_title' => $fullname,
        'post_content' => $message,
        'post_author' => 1,
        'post_status' => 'publish', 
        'post_type' => 'gh-contact',
        'meta_input' => array(
            '_contact_email_value_key' => $email,
        )
        );
        $postID = wp_insert_post($args);
        echo $postID;
    die(); 
}

/*
===========================================================================================
*/
function ajax_posts_enqueue() {
    wp_enqueue_script( 'ajax-posts-cat', get_template_directory_uri() . '/js/ajax.js', array('jquery') );

    wp_localize_script( 'ajax-posts-cat', 'ajax_var', 'categ_object', array( 
        'ajax_url' => admin_url('admin-ajax.php'), 
        'nonce' => wp_create_nonce('ajax-nonce') 
        ) );
}
add_action( 'wp_enqueue_scripts', 'ajax_posts_enqueue' );
