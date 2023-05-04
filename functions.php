<?php
/**
 * Register and Enqueue Styles.
 *
 * @since SNAPEP 1.0
 */
function snapep_register_styles() {

	$theme_version = wp_get_theme()->get( 'Version' );

	wp_enqueue_style( 'validationcss', get_template_directory_uri() . '/css/form-validation.css', array(), false );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.rtl.min.css', array(), false );
	wp_enqueue_style( 'flickitycss', get_template_directory_uri() . '/css/lightslider.min.css', array(), false );
	wp_enqueue_style( 'gallery', get_template_directory_uri() . '/css/viewbox.css', array(), false );
	wp_enqueue_style( 'snapep-style', get_stylesheet_uri(), array(), $theme_version );
	wp_style_add_data( 'snapep-style', 'rtl', 'replace' );
	wp_enqueue_script( 'jq', get_template_directory_uri() . '/js/jquery.js', array(), '1.0.0', true );
	wp_enqueue_script( 'btsjs', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array( 'jquery' ), '1.0.0', true );
	wp_enqueue_script( 'flickity', get_template_directory_uri() . '/js/lightslider.min.js', array( 'jquery' ), '1.0.0', true );
	wp_enqueue_script( 'validationjs', get_template_directory_uri() . '/js/form-validation.js', array( 'jquery' ), '1.0.0', true );
	wp_enqueue_script( 'slick', get_template_directory_uri() . '/js/slick.min.js', array( 'jquery' ), '1.0.0', true );
	wp_enqueue_script( 'galljs', get_template_directory_uri() . '/js/jquery.viewbox.min.js', array( 'jquery' ), '1.0.0', true );
	wp_enqueue_script( 'ajax', get_template_directory_uri() . '/js/ajax.js', array( 'jquery' ), '1.0.0', true );
	wp_enqueue_script( 'appjs', get_template_directory_uri() . '/js/app.js', array( 'jquery' ), '1.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'snapep_register_styles' );

  // Customize Nav
  require_once( get_template_directory() . '/inc/nav.php' );

  // Views Count
  require_once( get_template_directory() . '/inc/views.php' );

  // Typography
  require_once( get_template_directory() . '/inc/typography.php' );

  // Costumize Thumbnails Post
  require_once( get_template_directory() . '/inc/thumbnails.php' );

  // Costumize Socials Shares
  require_once( get_template_directory() . '/inc/socials-shares.php' );

  // Costumize Show Categories
  require_once( get_template_directory() . '/inc/categories.php' );

  // Add Widgets Area
  require_once( get_template_directory() . '/inc/widgets.php' );


  /*
  ==============================================================================================
    Ajax Posts 
  ==============================================================================================
  */

  require_once( get_template_directory() . '/inc/ajax.php' );
  /*
  ==============================================================================================
    Short Codes 
  ==============================================================================================
  */

  require_once( get_template_directory() . '/admin/shortcodes/shortcodes.php' );

    /*
  ==============================================================================================
    Add Post Type
  ==============================================================================================
  */

  require_once( get_template_directory() . '/inc/custom-post-type.php' );


  // Add Theme Options
  function add_admin_page_callback () {
    add_menu_page('SNAPEP', "خيارات عامة", 'manage_options', 'snapep_options', 'snapep_options_callback', null, 110);
    add_action('admin_init', 'snapep_custom_settings');
  }
  add_action( 'admin_menu', 'add_admin_page_callback' );
  // SNAPEP Callback snapep_options_callback
  function snapep_custom_settings() {
    register_setting('snapep-settings-group', 'residencesCount');
    register_setting('snapep-settings-group', 'carsCount');
    register_setting('snapep-settings-group', 'carsEtudients');
    register_setting('snapep-settings-group', 'borceEtudients');
    add_settings_section( 'snapep-sidebar-option', null, 'snapep_sidebar_option', 'snapep_options' );
    add_settings_field( 'residencesCount', __( 'عدد الطلبة المقيمين', 'diwan' ), 'residences_callback', 'snapep_options', 'snapep-sidebar-option' );
    add_settings_field( 'carsCount', __( 'عدد الحافلات', 'diwan' ), 'cars_counts_callback', 'snapep_options', 'snapep-sidebar-option' );
    add_settings_field( 'carsEtudients', __( 'عدد مشتركي النقل', 'diwan' ), 'cars_etudients_callback', 'snapep_options', 'snapep-sidebar-option' );
    add_settings_field( 'borceEtudients', __( 'عدد الطلبة الممنوحين', 'diwan' ), 'bource_etudients_callback', 'snapep_options', 'snapep-sidebar-option' );
  }
  function snapep_options_callback() {
    require_once(get_template_directory() . '/admin/templates/general_options.php');
  }
  function residences_callback() {
    $field1 = get_option('residencesCount');
    $text1 = __( 'عدد الطلبة المقيمين', 'diwan' );
    echo '<input type="text" name="residencesCount" value="' . $field1 . '" placeholder="' . $text1 . '">';
  }
  function cars_counts_callback() {
    $field2 = get_option('carsCount');
    $text2 = __( 'عدد الحافلات', 'diwan' );
    echo '<input type="text" name="carsCount" value="' . $field2 . '" placeholder="' . $text2 . '">';
  }
  function cars_etudients_callback() {
    $field3 = get_option('carsEtudients');
    echo '<input type="text" name="carsEtudients" value="' . $field3 . '" placeholder="' . __( 'عدد مشتركي النقل', 'diwan' ) . '">';
  }
  function bource_etudients_callback() {
    $field3 = get_option('borceEtudients');
    echo '<input type="text" name="borceEtudients" value="' . $field3 . '" placeholder="' . __( 'عدد الطلبة الممنوحين', 'diwan' ) . '">';
  }

  function snapep_sidebar_option() {
    echo '<h1>SNAPEP</h1>';
    //require_once(get_template_directory() . '/admin/templates/snapep_sidebar_option.php');
  }