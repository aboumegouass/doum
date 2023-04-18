<?php

// Display Category
function show_cat($type) {
    $categories = get_the_category();
    if ($type == true) {        
        if ($categories) {
            foreach ($categories as $category) {
                echo '<a class="cat cat-' . $category->term_id . '" href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>';
            }
        }    
    } else {
        if ($categories) {
            foreach ($categories as $category) {
                echo '<span class="cat cat-' . $category->term_id . '">' . $category->cat_name . '</span>';
            }
        } 
    }

}