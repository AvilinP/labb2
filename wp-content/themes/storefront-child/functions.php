<?php

//Custom post type 
function custom_stores() {
    register_post_type('stores', [
    'public' => true,
    'has_archive' => true,
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

   add_action('init','remove_product_text',10);
    function remove_product_text() {
        remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
} 
   
?>
