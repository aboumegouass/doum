<?php
/*-----------------------------------------------------------------------------------*/
/*	Customize Navbar
/*-----------------------------------------------------------------------------------*/

function snapep_register_nav_menu() {
    register_nav_menus(array(
        'primary' => __( 'القائمة الرئيسية', 'diwan' ),
        'top_primary' => __( 'القائمة عليا', 'diwan' ),
        'usinglinks' => __('روابط تهمك', 'diwan'),
        'instituts' => __('المعاهد والمراكز', 'diwan'),
    ));
}
add_action( 'after_setup_theme', 'snapep_register_nav_menu', 0 );
