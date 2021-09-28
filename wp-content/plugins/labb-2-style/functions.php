<?php 
/**
 * Register and enqueue a custom stylesheet in the WordPress admin.
 */

 
function wpdocs_enqueue_custom_admin_style() {
        wp_register_style( 'custom_wp_admin_css', 
        get_template_directory_uri() . '/admin-style.css', false, '1.0.0' );
        wp_enqueue_style( 'custom_wp_admin_css' );
}
add_action( 'init', 'wpdocs_enqueue_custom_admin_style' );



?>