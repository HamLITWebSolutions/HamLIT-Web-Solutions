<?php

/*
Plugin Name: HamLIT - Stop Smoothness Jquery
Plugin URI: https://github.com/hamlitwebsolutions/HamLIT-StopSmoothnessJquery
Description: Stops "Smoothness" Jquery. This fixes the Divi Theme Options Menu discoloration and functionality.
Author: HamLIT Web Solutions
Author URI: https://hamlitwebsolutions.com
Version: 1.0.0
License: MIT
License URI: https://opensource.org/licenses/MIT
Text Domain: HamLIT - Stop Smoothness Jquery
Domain Path: /languages
*/
function hamlit_dequeue_css() {
   wp_dequeue_style( 'jquery-ui-style' );
}
#Stops from Backend, not front end.
add_action( 'admin_enqueue_scripts', 'hamlit_dequeue_css', 100 );