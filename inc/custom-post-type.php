<?php
/*
    ============================================================================================
        Add Post type "Messages"
    ============================================================================================
*/
function add_post_type_contact() {
    $labels = array(
        'name' => 'الرسائل',
        'singular_name' => 'الرسائل',
        'menu_name' => 'الرسائل',
        'name_admin_bar' => 'الرسائل',
    );
    $args = array(
        'labels' => $labels,
        'show_ui' => true,
        'show_in_menu' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => 26,
        'menu_icon' => 'dashicons-email-alt',
        'supports' => array('title', 'editor', 'author'),
    );
    register_post_type('gh-contact', $args);
}
add_action('init', 'add_post_type_contact');
/*
    ============================================================================================
        Customize Columns "Messages"
    ============================================================================================
*/
function GH_set_contact_column($columns) {
    $newColumn = array();
    $newColumn['title'] = 'الاسم الكامل';
    $newColumn['email'] = 'البريد الإلكتروني';
    $newColumn['message'] = 'نص الرسالة';
    $newColumn['date'] = 'التاريخ';
    return $newColumn;
}
add_filter('manage_gh-contact_posts_columns', 'GH_set_contact_column');

function GH_contact_custom_column($column, $post_id) {
    switch($column) {
        case 'message' :
            echo get_the_excerpt();
            break;
        case 'email' :
            $email = get_post_meta($post_id, '_contact_email_value_key', true);
            echo '<a href="mailto:' . $email . '">' . $email . '</a>';
            break;
    }
}
add_action('manage_gh-contact_posts_custom_column', 'GH_contact_custom_column', 10, 2);
/*
    ============================================================================================
        Add Meta Box email "Messages"
    ============================================================================================
*/
function GH_contact_add_meta_box() {
    add_meta_box('contact_email', 'البريد الإلكتروني', 'GH_contact_email_callback', 'gh-contact', 'side');
}
add_action('add_meta_boxes', 'GH_contact_add_meta_box');

function GH_contact_email_callback($post) {
    wp_nonce_field('gh_save_email_data', 'gh_contact_email_meta_box_nonce');
    $value = get_post_meta($post->ID, '_contact_email_value_key', true); ?>
    
    <label for="GH_contact_email_field">اسم المسخدم</label>
    <input type="email" id="GH_contact_email_field" name="GH_contact_email_field" value="<?php echo esc_attr($value); ?>" size="25">

<?php }
function gh_save_email_data($post_id) {
    if (! isset($_POST['gh_contact_email_meta_box_nonce'])) {
        return;
    }
    if (! wp_verify_nonce($_POST['gh_contact_email_meta_box_nonce'], 'gh_save_email_data')) {
        return;
    }
    if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }  
    if (! current_user_can('edit_post', $post_id)) {
        return;
    }  
    if (! isset($_POST['GH_contact_email_field'])) {
        return;
    }

    $user_data = sanitize_text_field($_POST['GH_contact_email_field']);

    update_post_meta($post_id, '_contact_email_value_key', $user_data);
}
add_action('save_post', 'gh_save_email_data');