<?php 

/* 
Plugin Name: Labb 2 Plugin
Description: An awesome plugin  
Version: 1.0
Author: Avilin Persson
Author URI: http://www.mywebsite.com

*/

?>


<?php 

add_action( 'the_content', 'my_thank_you_text' );

function my_thank_you_text ( $content ) {
    return $content .= '<p>Thank you for reading this post!</p>';
}

?>