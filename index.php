<?php
/*
Plugin Name: HamLIT Web Solutions
Plugin URI: https://github.com/hamlitwebsolutions/HamLIT-Web-Solutions
GitHub Plugin URI: hamlitwebsolutions/HamLIT-Web-Solutions
Description: Provides Customization Options Provided by HamLIT Web Solutions
Author: HamLIT Web Solutions
Author URI: https://hamlitwebsolutions.com
Version: 1.0.0
License: MIT
License URI: https://opensource.org/licenses/MIT
Text Domain: HamLIT-Web-Solutions
Domain Path: /languages
*/
//--------------------------------------------------------------------------//
//--------------------------------------------------------------------------//
//--------------------------------------------------------------------------//
//------------------- CREATE MENU AND SUB-MENUS ----------------------------//
//--------------------------------------------------------------------------//
//--------------------------------------------------------------------------//
//--------------------------------------------------------------------------//
function hamlit_menu() {
   add_menu_page(
			__( 'HamLIT Web Solutions', 'my-textdomain' ), // page title
			__( 'HamLIT', 'my-textdomain' ), //menu text
			'manage_options', //capability level
			'HamLIT-Web-Solutions', //slug
			'hamlit_dashboard', //function to run
		    $icon_url = 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAD+UlEQVQ4y3XTXWjVdRzH8ffv9/v/ztN2ds7Zmek2m3vIfNrpQZ2pM2aT8iKywh4oIfJCIiRICL1OqKCLniAoioRqGmjYxIuhIw0FRRPDGKXmnCbTMzfn5nTnnP////t2kZjm8QO/y+8Lft8HxW0ZOncOV5XB6zuG3dMLyQqIxJHLAx0M55/Tna9vwLPI6CWIJ24vJfXq8wBo/hc1MUYwJ4e05tAFhUpmUdW15+SPo2+H3R8clNHLCVXTCIEPzv33buZuUByqWCBobSVY3kE4K4drnDegpjdekTOD7cF3m0+44bN1TJt5U9CgTXlQlCA2gpgo4dRpFBY8BvUz0IMXo4RXKuyyHNpKS7jl/SNSKZXSuQKZ9yDSOrs8qHQEVBx7pi/jXbyAB6i9XSvDrVt+1NkwGl1osG1zUVdK9e6bjd3KKVSsAuXp8qAJYkR3ffmW6friXeNbvAMH0u7rT3t0beFpr6EJXTGJqS1gFlYhPQOdsmfbQ3r4MvrEb/cAf+3Nyo6uz6S58aRkauHI7rUAkbZZmDpFOOJQCR9d40Ea3O59re7wUQLxbxneHRPp2v6oblvyXrhy/ef0n4fjh17W9Rad8UFKSNGhrEN5JSgCVRWT/qoXKNZlgTV3g/LOhl7O/3Va7/rWE2JORsfnektT6MoS4hw67SBQyGQJJsGseGKnCoeJD+TrgMG71yZ9X5P74at9JGygjXHKlZI6Kai4w6sFr96gYhakGlIa9/vhVWrThk/M3u1vlP/yto/WqrHBJhVxHWG+XysXoBIanQzRNRqUQgY1qAym2eJ6f+52Qz4yNbqzLCh9x57yHhA4sWO/OjWGbkphsil0WkFCw5hGxwJUooiK+Zg5hlD5hEf6F5Rf7JMjOQRUfAx9fwo7uxozLQLJOMQsWItOauy8EpHF11CpG/8WjhSnlAej8eHwgkKnfezsCSK5IjoLJKNIcgpko6iMItKs8RpDZELBNZDbjDsvpbP9e9enwAiRuVcx2euQKuCS0wlsB2F6PtRpqHHoygAVFeQGsLTlYFnQW71+c1hTmfdPGpQXQnIMydQT6EWIXUToPU4Qmw8JQdeMYlpCSkYTeW3j+rKgq64o2hef3BRMxK66SQPZa/imHWUfwTPVaK+B0CyApAdentLVqhuRdaufjSr/dFkQ/CoDBZcvpYt/xkAPAYKYOpQyoCpASsB+CvsacOcJIrmHe4L8qfI9JJ4eVw1Lttv2zk3Fi/FC8Zd67PV1SOk4PilceAk78THBoSkEozMO2Zb2Nc5Zz1/8zD1uuTCOaN9Flr30oQxP3epPXnhT9w+tNA0/NfuVM8Ur7D8rf48fDQqvdJvOth6GBN8voCdGbhH/ABh3mi4IbPWhAAAAAElFTkSuQmCC', //menu icon
			98 //position on menu
		);
########## HamLIT - Add Extra Profile Fields ##########
    add_submenu_page(
        'HamLIT-Web-Solutions', //parent slug
        'HamLIT - Add Extra Profile Fields', //page title
        'Profile Fields', //menu text
        'manage_options', //capability level
        '/HamLIT-Add-Extra-Profile-Fields', //slug
        'hamlit_add_extra_profile_fields'); //function to run
////////// End HamLIT - Add Extra Profile Fields //////////
########## HamLIT - Admin Live Chat Widget ##########
    add_submenu_page(
        'HamLIT-Web-Solutions', //parent slug
        'HamLIT - Admin Live Chat Widget', //page title
        'Admin Live Chat', //menu text
        'manage_options', //capability level
        '/HamLIT-Admin-Live-Chat-Widget', //slug
        'hamlit_admin_live_chat_widget'); //function to run
////////// End HamLIT - Admin Live Chat Widget //////////
########## HamLIT - Change My Account Sections ##########
    add_submenu_page(
        'HamLIT-Web-Solutions', //parent slug
        'HamLIT - Change My Account Sections', //page title
        'Account Sections', //menu text
        'manage_options', //capability level
        '/HamLIT-Change-My-Account-Sections', //slug
        'hamlit_change_my_account_sections'); //function to run
////////// End HamLIT - Change My Account Sections //////////
########## HamLIT - Change Woocommerce Columns ##########
    add_submenu_page(
        'HamLIT-Web-Solutions', //parent slug
        'HamLIT - Change Woocommerce Columns', //page title
        'Woo-Columns', //menu text
        'manage_options', //capability level
        '/HamLIT-Change-Woocommerce-Columns', //slug
        'hamlit_change_woocommerce_columns'); //function to run
////////// End HamLIT - Change Woocommerce Columns //////////
########## HamLIT - Custom Core CSS ##########
    add_submenu_page(
        'HamLIT-Web-Solutions', //parent slug
        'HamLIT - Custom Core CSS', //page title
        'Core CSS', //menu text
        'manage_options', //capability level
        '/HamLIT-Custom-Core-CSS', //slug
        'hamlit_custom_core_css'); //function to run
////////// End HamLIT - Custom Core CSS //////////
########## HamLIT - Defer JS ##########
    add_submenu_page(
        'HamLIT-Web-Solutions', //parent slug
        'HamLIT - Defer JS', //page title
        'Defer JS', //menu text
        'manage_options', //capability level
        '/HamLIT-Defer-JS', //slug
        'hamlit_defer_js'); //function to run
////////// End HamLIT - Defer JS //////////
########## HamLIT - Disable Users ##########
    add_submenu_page(
        'HamLIT-Web-Solutions', //parent slug
        'HamLIT - Disable Users', //page title
        'Disable Users', //menu text
        'manage_options', //capability level
        '/HamLIT-Disable-Users', //slug
        'hamlit_disable_users'); //function to run
////////// End HamLIT - Disable Users //////////
########## HamLIT - Display User ID ##########
    add_submenu_page(
        'HamLIT-Web-Solutions', //parent slug
        'HamLIT - Display User ID', //page title
        'Display User ID', //menu text
        'manage_options', //capability level
        '/HamLIT-Display-User-ID', //slug
        'hamlit_display_user_id'); //function to run
////////// End HamLIT - Disable Users //////////
########## HamLIT - Hide Title ##########
    add_submenu_page(
        'HamLIT-Web-Solutions', //parent slug
        'HamLIT - Hide Title', //page title
        'Hide Title', //menu text
        'manage_options', //capability level
        '/HamLIT-Hide-Title', //slug
        'hamlit_hide_title'); //function to run
////////// End HamLIT - Hide Title //////////
########## HamLIT - Only Sell To ##########
    add_submenu_page(
        'HamLIT-Web-Solutions', //parent slug
        'HamLIT - Only Sell To', //page title
        'Only Sell To:', //menu text
        'manage_options', //capability level
        '/HamLIT-Only-Sell-To', //slug
        'hamlit_only_sell_to'); //function to run
////////// End HamLIT - Only Sell To //////////
########## HamLIT - Remove Dashboard Widgets ##########
    add_submenu_page(
        'HamLIT-Web-Solutions', //parent slug
        'HamLIT - Remove Dashboard Widgets', //page title
        'Remove Widgets', //menu text
        'manage_options', //capability level
        '/HamLIT-Remove-Dashboard-Widgets', //slug
        'hamlit_remove_dashboard_widgets'); //function to run
////////// End HamLIT - Remove Dashboard Widgets //////////
########## HamLIT - Remove Post Count ##########
    add_submenu_page(
        'HamLIT-Web-Solutions', //parent slug
        'HamLIT - Remove Post Count', //page title
        'Remove Post Count', //menu text
        'manage_options', //capability level
        '/HamLIT-Remove-Post-Count', //slug
        'hamlit_remove_post_count'); //function to run
////////// End HamLIT - Remove Post Count //////////
########## HamLIT - Remove Product Count ##########
    add_submenu_page(
        'HamLIT-Web-Solutions', //parent slug
        'HamLIT - Remove Product Count', //page title
        'Remove Product Count', //menu text
        'manage_options', //capability level
        '/HamLIT-Remove-Product-Count', //slug
        'hamlit_remove_product_count'); //function to run
////////// End HamLIT - Remove Product Count //////////
########## HamLIT - Remove Profile Fields ##########
    add_submenu_page(
        'HamLIT-Web-Solutions', //parent slug
        'HamLIT - Remove Profile Fields', //page title
        'Remove Profile Fields', //menu text
        'manage_options', //capability level
        '/HamLIT-Remove-Profile-Fields', //slug
        'hamlit_remove_profile_fields'); //function to run
////////// End HamLIT - Remove Profile Fields //////////
########## HamLIT - Remove Screen Options ##########
    add_submenu_page(
        'HamLIT-Web-Solutions', //parent slug
        'HamLIT - Remove Screen Options', //page title
        'Remove Screen Options', //menu text
        'manage_options', //capability level
        '/HamLIT-Remove-Screen-Options', //slug
        'hamlit_remove_screen_options'); //function to run
////////// End HamLIT - Remove Screen Options //////////
########## HamLIT - Remove Update Notification and Nags ##########
    add_submenu_page(
        'HamLIT-Web-Solutions', //parent slug
        'HamLIT - Remove Update Notification and Nags', //page title
        'Remove Notifications', //menu text
        'manage_options', //capability level
        '/HamLIT-Remove-Notification-and-Nags', //slug
        'hamlit_remove_notification_and_nags'); //function to run
////////// End HamLIT - Remove Update Notification and Nags //////////
########## HamLIT - Remove WP Version Footer ##########
    add_submenu_page(
        'HamLIT-Web-Solutions', //parent slug
        'HamLIT - Remove WP Version Footer', //page title
        'Remove WP Footer', //menu text
        'manage_options', //capability level
        '/HamLIT-Remove-WP-Version_Footer', //slug
        'hamlit_remove_wp_version_footer'); //function to run
////////// End HamLIT - Remove WP Version Footer //////////
########## HamLIT - Rename Sidebar Items ##########
    add_submenu_page(
        'HamLIT-Web-Solutions', //parent slug
        'HamLIT - Rename Sidebar Items', //page title
        'Rename Sidebar Items', //menu text
        'manage_options', //capability level
        '/HamLIT-Rename-Sidebar-Items', //slug
        'hamlit_rename_sidebar_items'); //function to run
////////// End HamLIT - Rename Sidebar Items //////////
########## HamLIT - Site Health ##########
    add_submenu_page(
        'HamLIT-Web-Solutions', //parent slug
        'HamLIT - Site Health', //page title
        'Site Health', //menu text
        'manage_options', //capability level
        '/HamLIT-Site-Health', //slug
        'hamlit_site_health'); //function to run
////////// End HamLIT - Site Health //////////
########## HamLIT - Site Info Shortcode ##########
    add_submenu_page(
        'HamLIT-Web-Solutions', //parent slug
        'HamLIT - Site Info Shortcode', //page title
        'SiteInfo Shortcode', //menu text
        'manage_options', //capability level
        '/HamLIT-Site-Info-Shortcode', //slug
        'hamlit_site_info_shortcode'); //function to run
////////// End HamLIT - Site Info Shortcode //////////
########## HamLIT - Stop Smoothness JQuery ##########
    add_submenu_page(
        'HamLIT-Web-Solutions', //parent slug
        'HamLIT - Stop Smoothness JQuery', //page title
        'Stop Smoothness', //menu text
        'manage_options', //capability level
        '/HamLIT-Stop-Smoothness-JQuery', //slug
        'hamlit_stop_smoothness_jquery'); //function to run
////////// End HamLIT - Stop Smoothness Jquery //////////
########## HamLIT - View Page Identifier ##########
    add_submenu_page(
        'HamLIT-Web-Solutions', //parent slug
        'HamLIT - View Page Identifier', //page title
        'Page Identifier', //menu text
        'manage_options', //capability level
        '/HamLIT-View-Page-Identifier', //slug
        'hamlit_view_page_identifier'); //function to run
////////// End HamLIT - View Page Identifier //////////
//------------------- DO NOT PUT MENU ITEM BELOW THIS LINE -----------------//
}
add_action('admin_menu', 'hamlit_menu');
//--------------------------------------------------------------------------//
//--------------------------------------------------------------------------//
//--------------------------------------------------------------------------//
//---------------- DONE CREATING MENU AND SUB-MENUS ------------------------//
//--------------------------------------------------------------------------//
//--------------------------------------------------------------------------//
//--------------------------------------------------------------------------//
###################################################
###################################################
###################################################
############ Main Page Contents ###################
###################################################
###################################################
###################################################
function hamlit_dashboard() {
    include ('settings.php');
}

///////////////////////////////////////////////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
////////// Done with Main Page Contents ///////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
###################################################
###################################################
###################################################
###### HamLIT - Add Extra Profile Fields ##########
###################################################
###################################################
###################################################
function hamlit_add_extra_profile_fields() {
    include ('assets/HamLIT - Add Extra Profile Fields/page.php');
}
if (trim(get_option('addextraprofilefields')) == 1) {
    include ('assets/HamLIT - Add Extra Profile Fields/functions.php');
}
///////////////////////////////////////////////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
////// End HamLIT - Add Extra Profile Fields //////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
###################################################
###################################################
###################################################
###### HamLIT - Admin Live Chat Widget ############
###################################################
###################################################
###################################################
function hamlit_admin_live_chat_widget() {
    include ('assets/HamLIT - Admin Live Chat Widget/page.php');
}
if (trim(get_option('enablelivechat')) == 1) {
    include ('assets/HamLIT - Admin Live Chat Widget/functions.php');
}
///////////////////////////////////////////////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
///// End HamLIT - Admin Live Chat Widget /////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
###################################################
###################################################
###################################################
####### HamLIT - Change My Account Sections #######
###################################################
###################################################
###################################################
function hamlit_change_my_account_sections() {
    include ('assets/HamLIT - Change My Account Sections/page.php');
}
if (trim(get_option('changemyaccountsections')) == 1) {
    include ('assets/HamLIT - Change My Account Sections/functions.php');
}
///////////////////////////////////////////////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
////// End HamLIT - Change My Account Sections ////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
###################################################
###################################################
###################################################
######## HamLIT - Change Woocommerce Columns ######
###################################################
###################################################
###################################################
function hamlit_change_woocommerce_columns() {
    include ('assets/HamLIT - Change Woocommerce Columns/page.php');
}
if (trim(get_option('changewoocolumns')) == 1) {
    include ('assets/HamLIT - Change Woocommerce Columns/functions.php');
}
///////////////////////////////////////////////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
///// End HamLIT - Change Woocommerce Columns /////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
###################################################
###################################################
###################################################
########## HamLIT - Custom Core CSS ###############
###################################################
###################################################
###################################################
function hamlit_custom_core_css() {
    include ('assets/HamLIT - Custom Core CSS/page.php');
}
if (trim(get_option('customcorecss')) == 1) {
    include ('assets/HamLIT - Custom Core CSS/functions.php');
}
///////////////////////////////////////////////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
////////// End HamLIT - Custom Core CSS ///////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
###################################################
###################################################
###################################################
################ HamLIT - Defer JS ################
###################################################
###################################################
###################################################
function hamlit_defer_js() {
    include ('assets/HamLIT - Defer JS/page.php');
}
if (trim(get_option('deferjs')) == 1) {
    include ('assets/HamLIT - Defer JS/functions.php');
}
///////////////////////////////////////////////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
////////////// End HamLIT - Defer JS //////////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
###################################################
###################################################
###################################################
########### HamLIT - Disable Users ################
###################################################
###################################################
###################################################
function hamlit_disable_users() {
    include ('assets/HamLIT - Disable Users/page.php');
}
if (trim(get_option('disableusers')) == 1) {
    include ('assets/HamLIT - Disable Users/init.php');
}
///////////////////////////////////////////////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
//////////// End HamLIT - Disable Users ///////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
###################################################
###################################################
###################################################
########## HamLIT - Display User ID ###############
###################################################
###################################################
###################################################
function hamlit_display_user_id() {
    include ('assets/HamLIT - Display User ID/page.php');
}
if (trim(get_option('displayuserid')) == 1) {
    include ('assets/HamLIT - Display User ID/functions.php');
}
///////////////////////////////////////////////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
/////////// End HamLIT - Display User ID //////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
###################################################
###################################################
###################################################
########## HamLIT - Hide Title ####################
###################################################
###################################################
###################################################
function hamlit_hide_title() {
    include ('assets/HamLIT - Hide Title/page.php');
}
if (trim(get_option('hidetitle')) == 1) {
    include ('assets/HamLIT - Hide Title/functions.php');
}
///////////////////////////////////////////////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
/////////// End HamLIT - Hide Title ///////////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
###################################################
###################################################
###################################################
############ HamLIT - Only Sell To ################
###################################################
###################################################
###################################################
function hamlit_only_sell_to() {
    include ('assets/HamLIT - Only Sell To/page.php');
}
if (trim(get_option('onlysellto')) == 1) {
    include ('assets/HamLIT - Only Sell To/functions.php');
}
///////////////////////////////////////////////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
///////////// End HamLIT - Only Sell To ///////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
###################################################
###################################################
###################################################
####### HamLIT - Remove Dashboard Widgets #########
###################################################
###################################################
###################################################
function hamlit_remove_dashboard_widgets() {
    include ('assets/HamLIT - Remove Dashboard Widgets/page.php');
}
if (trim(get_option('removedashwidgets')) == 1) {
    include ('assets/HamLIT - Remove Dashboard Widgets/functions.php');
}
///////////////////////////////////////////////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
///// End HamLIT - Remove Dashboard Widgets ///////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
###################################################
###################################################
###################################################
########### HamLIT - Remove Post Count ############
###################################################
###################################################
###################################################
function hamlit_remove_post_count() {
    include ('assets/HamLIT - Remove Post Count/page.php');
}
if (trim(get_option('removepostcount')) == 1) {
    include ('assets/HamLIT - Remove Post Count/functions.php');
}
///////////////////////////////////////////////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
//////////// End HamLIT - Remove Post Count ///////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
###################################################
###################################################
###################################################
######## HamLIT - Remove Product Count ############
###################################################
###################################################
###################################################
function hamlit_remove_product_count() {
    include ('assets/HamLIT - Remove Post Count/page.php');
}
if (trim(get_option('removeproductcount')) == 1) {
    include ('assets/HamLIT - Remove Product Count/functions.php');
}
///////////////////////////////////////////////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
///////// End HamLIT - Remove Product Count ///////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
###################################################
###################################################
###################################################
######## HamLIT - Remove Profile Fields ###########
###################################################
###################################################
###################################################
function hamlit_remove_profile_fields() {
    include ('assets/HamLIT - Remove Profile Fields/page.php');
}
if (trim(get_option('removeprofilefields')) == 1) {
    include ('assets/HamLIT - Remove Profile Fields/functions.php');
}
///////////////////////////////////////////////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
///////// End HamLIT - Remove Profile Fields //////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
###################################################
###################################################
###################################################
######## HamLIT - Remove Screen Options ###########
###################################################
###################################################
###################################################
function hamlit_remove_screen_options() {
    include ('assets/HamLIT - Remove Screen Options/page.php');
}
if (trim(get_option('removescreenoptions')) == 1) {
    include ('assets/HamLIT - Remove Screen Options/functions.php');
}
///////////////////////////////////////////////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
///////// End HamLIT - Remove Screen Options //////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
###################################################
###################################################
###################################################
### HamLIT - Remove Update Notification and Nags ##
###################################################
###################################################
###################################################
function hamlit_remove_notification_and_nags() {
    include ('assets/HamLIT - Remove Update Notification and Nags/page.php');
}
if (trim(get_option('removenags')) == 1) {
    include ('assets/HamLIT - Remove Update Notification and Nags/functions.php');
}
///////////////////////////////////////////////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
// End HamLIT - Remove Update Notification and Nags
///////////////////////////////////////////////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
###################################################
###################################################
###################################################
####### HamLIT - Remove WP Version Footer #########
###################################################
###################################################
###################################################
function hamlit_remove_wp_version_footer() {
    include ('assets/HamLIT - Remove WP Version Footer/page.php');
}
if (trim(get_option('removeversionfooter')) == 1) {
    include ('assets/HamLIT - Remove WP Version Footer/functions.php');
}
///////////////////////////////////////////////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
///// End HamLIT - Remove WP Version Footer ///////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
###################################################
###################################################
###################################################
######### HamLIT - Rename Sidebar Items ###########
###################################################
###################################################
###################################################
function hamlit_rename_sidebar_items() {
    include ('assets/HamLIT - Rename Sidebar Items/page.php');
}
if (trim(get_option('renamesidebaritems')) == 1) {
    include ('assets/HamLIT - Rename Sidebar Items/functions.php');
}
///////////////////////////////////////////////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
/////// End HamLIT - Rename Sidebar Items /////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
###################################################
###################################################
###################################################
############### HamLIT - Site Health ##############
###################################################
###################################################
###################################################
function hamlit_site_health() {
    include ('assets/HamLIT - Site Health/page.php');
}
if (trim(get_option('hamlitsitehealth')) == 1) {
    include ('assets/HamLIT - Site Health/functions.php');
}
///////////////////////////////////////////////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
/////////// End HamLIT - Site Health //////////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
###################################################
###################################################
###################################################
########## HamLIT - Site Info Shortcode ###########
###################################################
###################################################
###################################################
function hamlit_site_info_shortcode() {
    include ('assets/HamLIT - Site Info Shortcode/page.php');
}
if (trim(get_option('bloginfosc')) == 1) {
    include ('assets/HamLIT - Site Info Shortcode/functions.php');
}
///////////////////////////////////////////////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
//////// End HamLIT - Site Info Shortcode /////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
###################################################
###################################################
###################################################
##### HamLIT - Stop Smoothness JQuery #############
###################################################
###################################################
###################################################
function hamlit_stop_smoothness_jquery() {
    include ('assets/HamLIT - Stop Smoothness Jquery/page.php');
}
if (trim(get_option('stopsmoothnessjquery')) == 1) {
    include ('assets/HamLIT - Stop Smoothness Jquery/functions.php');
}
///////////////////////////////////////////////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
////// End HamLIT - Stop Smoothness JQuery ////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
###################################################
###################################################
###################################################
########## HamLIT - View Page Identifier ##########
###################################################
###################################################
###################################################
function hamlit_view_page_identifier() {
    include ('assets/HamLIT - View Page Identifier/page.php');
}
if (trim(get_option('viewpageidentifier')) == 1) {
    include ('assets/HamLIT - View Page Identifier/functions.php');
}
///////////////////////////////////////////////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
////// End HamLIT - View Page Identifier //////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
?>
