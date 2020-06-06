<?php
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