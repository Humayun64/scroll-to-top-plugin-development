<?php
/*
Plugin Name: Scroll to Top Plugin
Plugin URI: https://www.example.com
Description: Adds a "Scroll to Top" button to your website
Version: 1.0
Author: Humayun Kabir
Author URI: https://www.example.com
License: GPL2
*/

// Add the required scripts and styles
function add_scroll_to_top_scripts() {
    wp_enqueue_style( 'scroll-to-top-style', plugin_dir_url( __FILE__ ) . 'css/scroll-to-top.css' );
    wp_enqueue_script( 'scroll-to-top-script', plugin_dir_url( __FILE__ ) . 'js/scroll-to-top.js', array('jquery'), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'add_scroll_to_top_scripts' );

// Add the "Scroll to Top" button
function scroll_to_top_button() {
    echo '<a href="#" class="scroll-to-top"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>';
}
add_action( 'wp_footer', 'scroll_to_top_button' );


