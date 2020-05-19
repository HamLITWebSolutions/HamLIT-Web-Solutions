<?php

/*
Plugin Name: HamLIT - Remove Dashboard Widgets
Plugin URI: https://github.com/hamlitwebsolutions/HamLIT-RemoveDashboardWidgets
Description: Remove Unwanted Dashboard Widgets in Admin Area
Author: HamLIT Web Solutions
Author URI: https://hamlitwebsolutions.com
Version: 1.0.0
License: MIT
License URI: https://opensource.org/licenses/MIT
Text Domain: HamLIT - Remove Dashboard Widgets
Domain Path: /languages
*/
add_action('wp_dashboard_setup', 'remove_dashboard_meta_boxes', 9999 );

function remove_dashboard_meta_boxes()
{
    global $wp_meta_boxes;
   # $wp_meta_boxes['dashboard']['normal']['core'] = array(); #Removes All CORE DASHBOARD WIDGETS, Including Remove WP Branding Plugins Widgets.
    $wp_meta_boxes['dashboard']['side']['core'] = array();
    $wp_meta_boxes['dashboard']['normal']['core']['themeisle'] = array();
    $wp_meta_boxes['dashboard']['normal']['core']['yith_dashboard_blog_news'] = array();
    $wp_meta_boxes['dashboard']['normal']['core']['yith_dashboard_products_news'] = array();
    $wp_meta_boxes['dashboard']['normal']['core']['tribe_dashboard_widget'] = array();
    

}