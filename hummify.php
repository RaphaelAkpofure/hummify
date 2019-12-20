<?php
/**
 * Plugin Name: Hummify
 * Plugin URI: http://www.blizywap.com.ng/hummify
 * Description: Simple wordpress plugin to display thank you on every post.
 * Version: 1.0.0
 * Author: Raphael Akpofure
 * Author URI: http://www.mywebsite.com
 */

add_action( 'the_content', 'my_thank_you_text' );

function my_thank_you_text ( $content ) {
    return $content .= '<p>Thank you for reading!</p>';
}
