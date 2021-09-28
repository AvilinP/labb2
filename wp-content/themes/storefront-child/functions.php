<?php

//Custom post type 
function custom_stores() {
    register_post_type('stores', [
    'public' => true,
    'show_in_rest' => true,
    'labels' => [
    'name' => 'Stores',
    'add_new_item' => 'Add New store',
    'edit_item' => 'Edit store',
    'all_items' => 'All stores',
    'singular_name' => 'store',
    ],
    'supports' => ['thumbnail', 'title', 'editor']
    ]);
   }
   
   add_action('init', 'custom_stores');
   

?>