<?php
/*
Plugin Name: HamLIT Web Solutions
Plugin URI: https://github.com/hamlitwebsolutions/HamLIT-Web-Solutions
GitHub Plugin URI: hamlitwebsolutions/HamLIT-Web-Solutions
Description: Provides Customization Options Provided by HamLIT Web Solutions
Author: HamLIT Web Solutions
Author URI: https://hamlitwebsolutions.com
Version: 1.0.6
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
//------------------- DO NOT PUT MENU ITEM BELOW THIS LINE -----------------//
}
add_action('admin_menu', 'hamlit_menu');

// Add settings links on plugin page
add_filter( 'plugin_action_links_' . plugin_basename(__FILE__), 'hamlit_settings_link' );
  function hamlit_settings_link( $links ) {
     $links[] = '<a href="'. get_admin_url(null, 'admin.php?page=HamLIT-Web-Solutions') .'">Settings</a>';
     $links[] = '<b><a href="https://hamlitwebsolutions.com/donate" target="_blank">Donate</a></b>';
     return $links;
  }
// Add settings links on plugin page end

// Set Option Groups for Functions
$dir = ABSPATH . 'wp-content/plugins/HamLIT-Web-Solutions/incl/';
require "$dir/option-groups.php";
// Set Option Groups for Functions end

//--------------------------------------------------------------------------//
//--------------------------------------------------------------------------//
//--------------------------------------------------------------------------//
//---------------- DONE CREATING MENU AND SUB-MENUS ------------------------//
//--------------------------------------------------------------------------//
//--------------------------------------------------------------------------//
//--------------------------------------------------------------------------//
###################################################
############ Main Page Contents ###################
###################################################
function hamlit_dashboard() {
    include ('incl/settings.php');
}
///////////////////////////////////////////////////
////////// Done with Main Page Contents ///////////
///////////////////////////////////////////////////
###################################################
###### HamLIT - Add Extra Profile Fields ##########
###################################################
if (trim(get_option('hamlit_addextraprofilefields')) == 1) {
    include ('assets/HamLIT - Add Extra Profile Fields/functions.php');
}
///////////////////////////////////////////////////
////// End HamLIT - Add Extra Profile Fields //////
///////////////////////////////////////////////////
###################################################
###### HamLIT - Admin Live Chat Widget ############
###################################################
if (trim(get_option('hamlit_enablelivechat')) == 1) {
    include ('assets/HamLIT - Admin Live Chat Widget/functions.php');
}
///////////////////////////////////////////////////
///// End HamLIT - Admin Live Chat Widget /////////
///////////////////////////////////////////////////
###################################################
###### HamLIT - Auto Complete Subs. Renewals ######
###################################################
if (trim(get_option('hamlit_autocompsubsrenewals')) == 1) {
    include ('assets/HamLIT - Auto Complete Subscription Renewals/functions.php');
}
///////////////////////////////////////////////////
//// End HamLIT - Auto Complete Subs. Renewals ////
///////////////////////////////////////////////////
###################################################
####### HamLIT - Change My Account Sections #######
###################################################
if (trim(get_option('hamlit_changemyaccountsections')) == 1) {
    include ('assets/HamLIT - Change My Account Sections/functions.php');
}
///////////////////////////////////////////////////
////// End HamLIT - Change My Account Sections ////
///////////////////////////////////////////////////
###################################################
######## HamLIT - Change Woocommerce Columns ######
###################################################
if (trim(get_option('hamlit_changewoocolumns')) == 1) {
    include ('assets/HamLIT - Change Woocommerce Columns/functions.php');
}
///////////////////////////////////////////////////
///// End HamLIT - Change Woocommerce Columns /////
///////////////////////////////////////////////////
###################################################
########## HamLIT - Custom Login Page #############
###################################################
if (trim(get_option('hamlit_customloginpage')) == 1) {
    include ('assets/HamLIT - Custom Login Page/functions.php');
}
///////////////////////////////////////////////////
//////// End HamLIT - Custom Login Page ///////////
///////////////////////////////////////////////////
###################################################
################ HamLIT - Defer JS ################
###################################################
if (trim(get_option('hamlit_deferjs')) == 1) {
    include ('assets/HamLIT - Defer JS/functions.php');
}
///////////////////////////////////////////////////
////////////// End HamLIT - Defer JS //////////////
///////////////////////////////////////////////////
###################################################
########### HamLIT - Disable Users ################
###################################################
if (trim(get_option('hamlit_disableusers')) == 1) {
    include ('assets/HamLIT - Disable Users/init.php');
}
///////////////////////////////////////////////////
//////////// End HamLIT - Disable Users ///////////
///////////////////////////////////////////////////
###################################################
########## HamLIT - Display User ID ###############
###################################################
if (trim(get_option('hamlit_displayuserid')) == 1) {
    include ('assets/HamLIT - Display User ID/functions.php');
}
///////////////////////////////////////////////////
/////////// End HamLIT - Display User ID //////////
///////////////////////////////////////////////////
###################################################
########## HamLIT - Hide Title ####################
###################################################
if (trim(get_option('hamlit_hidetitle')) == 1) {
    include ('assets/HamLIT - Hide Title/functions.php');
}
///////////////////////////////////////////////////
/////////// End HamLIT - Hide Title ///////////////
///////////////////////////////////////////////////
###################################################
########### HamLIT - Live Chat ####################
###################################################
if (trim(get_option('hamlit_livechat')) == 1) {
    include ('assets/HamLIT - Live Chat/functions.php');
}
///////////////////////////////////////////////////
//////////// End HamLIT - Live Chat ///////////////
///////////////////////////////////////////////////
###################################################
############ HamLIT - Only Sell To ################
###################################################
if (trim(get_option('hamlit_onlysellto')) == 1) {
    include ('assets/HamLIT - Only Sell To/functions.php');
}
///////////////////////////////////////////////////
///////////// End HamLIT - Only Sell To ///////////
///////////////////////////////////////////////////
###################################################
####### HamLIT - Remove Dashboard Widgets #########
###################################################
if (trim(get_option('hamlit_removedashwidgets')) == 1) {
    include ('assets/HamLIT - Remove Dashboard Widgets/functions.php');
}
///////////////////////////////////////////////////
///// End HamLIT - Remove Dashboard Widgets ///////
///////////////////////////////////////////////////
###################################################
########### HamLIT - Remove Post Count ############
###################################################
if (trim(get_option('hamlit_removepostcount')) == 1) {
    include ('assets/HamLIT - Remove Post Count/functions.php');
}
///////////////////////////////////////////////////
//////////// End HamLIT - Remove Post Count ///////
///////////////////////////////////////////////////
###################################################
######## HamLIT - Remove Product Count ############
###################################################
if (trim(get_option('hamlit_removeproductcount')) == 1) {
    include ('assets/HamLIT - Remove Product Count/functions.php');
}
///////////////////////////////////////////////////
///////// End HamLIT - Remove Product Count ///////
///////////////////////////////////////////////////
###################################################
######## HamLIT - Remove Profile Fields ###########
###################################################
if (trim(get_option('hamlit_removeprofilefields')) == 1) {
    include ('assets/HamLIT - Remove Profile Fields/functions.php');
}
///////////////////////////////////////////////////
///////// End HamLIT - Remove Profile Fields //////
///////////////////////////////////////////////////
###################################################
### HamLIT - Remove Update Notification and Nags ##
###################################################
if (trim(get_option('hamlit_removenags')) == 1) {
    include ('assets/HamLIT - Remove Update Notification and Nags/functions.php');
}
///////////////////////////////////////////////////
// End HamLIT - Remove Update Notification and Nags
///////////////////////////////////////////////////
###################################################
########## HamLIT - Remove WP Branding ############
###################################################
if (trim(get_option('hamlit_removewpbranding')) == 1) {
    include ('assets/HamLIT - Remove WP Branding/functions.php');
}
///////////////////////////////////////////////////
//////// End HamLIT - Remove WP Branding //////////
///////////////////////////////////////////////////
###################################################
######### HamLIT - Rename Sidebar Items ###########
###################################################
if (trim(get_option('hamlit_renamesidebaritems')) == 1) {
    include ('assets/HamLIT - Rename Sidebar Items/functions.php');
}
///////////////////////////////////////////////////
/////// End HamLIT - Rename Sidebar Items /////////
///////////////////////////////////////////////////
###################################################
############### HamLIT - Site Health ##############
###################################################
if (trim(get_option('hamlit_sitehealth')) == 1) {
    include ('assets/HamLIT - Site Health/functions.php');
}
///////////////////////////////////////////////////
/////////// End HamLIT - Site Health //////////////
///////////////////////////////////////////////////
###################################################
########## HamLIT - Site Info Shortcode ###########
###################################################
if (trim(get_option('hamlit_bloginfosc')) == 1) {
    include ('assets/HamLIT - Site Info Shortcode/functions.php');
}
///////////////////////////////////////////////////
//////// End HamLIT - Site Info Shortcode /////////
///////////////////////////////////////////////////
###################################################
##### HamLIT - Stop Smoothness JQuery #############
###################################################
if (trim(get_option('hamlit_stopsmoothnessjquery')) == 1) {
    include ('assets/HamLIT - Stop Smoothness Jquery/functions.php');
}
///////////////////////////////////////////////////
////// End HamLIT - Stop Smoothness JQuery ////////
///////////////////////////////////////////////////
###################################################
############ HamLIT - Transient Manager ###########
###################################################
if (trim(get_option('hamlit_transientmanager')) == 1) {
    include ('assets/HamLIT - Transient Manager/functions.php');
}
///////////////////////////////////////////////////
//////// End HamLIT - Transient Manager ///////////
///////////////////////////////////////////////////
###################################################
########## HamLIT - View Page Identifier ##########
###################################################
if (trim(get_option('hamlit_viewpageidentifier')) == 1) {
    include ('assets/HamLIT - View Page Identifier/functions.php');
}
///////////////////////////////////////////////////
////// End HamLIT - View Page Identifier //////////
///////////////////////////////////////////////////
?>