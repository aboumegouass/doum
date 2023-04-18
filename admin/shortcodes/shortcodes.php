<?php
/*
    ==================================================================================================
        Contact Form ShortCode 
    ==================================================================================================
*/
function GH_contact_form($atts, $content = null) {
    // [contact_form]

    //Get the attributes
    $atts = shortcode_atts(
        array(),
        $atts,
        'contact_form'
    );
    // Return HTML
    ob_start();
    require_once( get_template_directory() . '/admin/shortcodes/contact-form-shortcode.php' );

    return ob_get_clean();
}
add_shortcode('contact_form', 'GH_contact_form');