<?php
/*
 =========================================================================================================
 Tab1 General Settings
 =========================================================================================================
*/
function GH_api_heading_callback() {
  echo '<h2>خيارات تطبيقات مواقع التواصل الاجتماعي</h2>';
}

function fb_app_id_view() { ?>
  <input type="text" id="fb_app_id" value="<?php echo get_option('fb_app_id'); ?>" name="fb_app_id">
<?php }

function cats_slider_settings_view() { 

$categories = get_categories(); ?>
 
 <select name="cats_slider_1" id="cats_slider_1">
  <?php if ($categories) { 
     foreach ($categories as $category) { ?>
        <option value="<?=$category->term_id; ?>" <?php selected($category->term_id, get_option('cats_slider_1'), true); ?>>
          <?=$category->cat_name; ?>
        </option>
      
    <?php } } ?>
    </select> 

 <select name="cats_slider_2" id="cats_slider_2">
  <?php if ($categories) { 
     foreach ($categories as $category) { ?>
        <option value="<?=$category->term_id; ?>" <?php selected($category->term_id, get_option('cats_slider_2'), true); ?>>
          <?=$category->cat_name; ?>
        </option>
      
    <?php } } ?>
    </select>

     
 <select name="cats_slider_3" id="cats_slider_3">
  <?php if ($categories) { 
     foreach ($categories as $category) { ?>
        <option value="<?=$category->term_id; ?>" <?php selected($category->term_id, get_option('cats_slider_3'), true); ?>>
          <?=$category->cat_name; ?>
        </option>
      
    <?php } } ?>
    </select>

     
 <select name="cats_slider_4" id="cats_slider_4">
  <?php if ($categories) { 
     foreach ($categories as $category) { ?>
        <option value="<?=$category->term_id; ?>" <?php selected($category->term_id, get_option('cats_slider_4'), true); ?>>
          <?=$category->cat_name; ?>
        </option>
      
    <?php } } ?>
    </select>

     
 <select name="cats_slider_5" id="cats_slider_5">
  <?php if ($categories) { 
     foreach ($categories as $category) { ?>
        <option value="<?=$category->term_id; ?>" <?php selected($category->term_id, get_option('cats_slider_5'), true); ?>>
          <?=$category->cat_name; ?>
        </option>
      
    <?php } } ?>
    </select>
    <p class="description">المواضيع التي تظهر في السلايدر حسب كل تصنيف مختار</p>
    <p class="description"><strong>ملاحظة: </strong> هناك خمس تصنيفات فقط واذا كنت تريد اقل من ذاك فقط قم بتكرار نصف الصنف</p>

<?php }

function instagram_account_settings_view() { ?>
  <input type="text" id="blog_name" value="<?php echo get_option('blog_name'); ?>" name="blog_name">
  <p class="description">اسم المدونة الخاصة بالكُتاب والمدونين</p>
<?php }

function youtube_account_settings_view() { ?>
  <textarea name="about_text" id="about_text" cols="60" rows="10"><?php echo get_option('about_text'); ?></textarea>
  <p class="description">وصف مختصر للموقع الذي يظهر في الفوتر</p>
<?php }

function panel_categories_settings_view() {
  $categories = get_categories(); ?>
 
 <select name="panel_cat_global1" id="panel_cat_global1">
  <?php if ($categories) { 
     foreach ($categories as $category) { ?>
        <option value="<?=$category->term_id; ?>" <?php selected($category->term_id, get_option('panel_cat_global1'), true); ?>>
          <?=$category->cat_name; ?>
        </option>
      
    <?php } } ?>
    </select> 

 <select name="panel_cat_global2" id="panel_cat_global2">
  <?php if ($categories) { 
     foreach ($categories as $category) { ?>
        <option value="<?=$category->term_id; ?>" <?php selected($category->term_id, get_option('panel_cat_global2'), true); ?>>
          <?=$category->cat_name; ?>
        </option>
      
    <?php } } ?>
    </select>

     
 <select name="panel_cat_global3" id="panel_cat_global3">
  <?php if ($categories) { 
     foreach ($categories as $category) { ?>
        <option value="<?=$category->term_id; ?>" <?php selected($category->term_id, get_option('panel_cat_global3'), true); ?>>
          <?=$category->cat_name; ?>
        </option>
      
    <?php } } ?>
    </select>

     
 <select name="panel_cat_global4" id="panel_cat_global4">
  <?php if ($categories) { 
     foreach ($categories as $category) { ?>
        <option value="<?=$category->term_id; ?>" <?php selected($category->term_id, get_option('panel_cat_global4'), true); ?>>
          <?=$category->cat_name; ?>
        </option>
      
    <?php } } ?>
    </select>

     
 <select name="panel_cat_global5" id="panel_cat_global5">
  <?php if ($categories) { 
     foreach ($categories as $category) { ?>
        <option value="<?=$category->term_id; ?>" <?php selected($category->term_id, get_option('panel_cat_global5'), true); ?>>
          <?=$category->cat_name; ?>
        </option>
      
    <?php } } ?>
    </select>
  
    <?php }
 /* --------------------------------------------------------------------------------------- */
 function GH_position_btns_view() { 
   require_once( get_template_directory() . '/admin/templates/positions-btns.php' );
 }
 
 function GH_position_heading_callback() { 
     echo '<h2>وضعية الأزرار</h2>';
  }
/* --------------------------------------------------------------------------------------- */

/* --------------------------------------------------------------------------------------- */
/*
 =========================================================================================================
  Tab3 Sidebar Position Settings
 =========================================================================================================
*/
function GH_sidebar_heading_callback() {
  echo '<h1>اتجاه الجهة الجانبية</h1>';
}
function GH_sidebar_pos_view() {?>

  <input type="radio" id="sidebar_pos_1" value="right_side" name="sidebar_pos"
  <?php checked('right_side', get_option('sidebar_pos'), true); ?>>
  <label for="sidebar_pos_1">
    <img src="<?php echo get_template_directory_uri() . '/admin/images/right_side.png'; ?>" alt="">
  </label>

  <input type="radio" id="sidebar_pos_2" value="left_side" name="sidebar_pos"
    <?php checked('left_side', get_option('sidebar_pos'), true); ?>>
  <label for="sidebar_pos_2">
    <img src="<?php echo get_template_directory_uri() . '/admin/images/left_side.png'; ?>" alt="">
  </label>
<?php } 

function GH_container_opt_view() {?>
  <input type="radio" id="container_opt_1" value="container" name="container_opt"
  <?php checked('container', get_option('container_opt'), true); ?>>
  <label for="container_opt_1">
    <img src="<?php echo get_template_directory_uri() . '/admin/images/container.png'; ?>" alt="">
  </label>

  <input type="radio" id="container_opt_2" value="container-fluid" name="container_opt"
    <?php checked('container-fluid', get_option('container_opt'), true); ?>>
  <label for="container_opt_2">
    <img src="<?php echo get_template_directory_uri() . '/admin/images/container-fluid.png'; ?>" alt="">
  </label>
<?php }