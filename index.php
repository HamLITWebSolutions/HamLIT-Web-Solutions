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
###################################################
###################################################
###################################################
######### Create Admin Page/Menu ##################
###################################################
###################################################
###################################################
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
/*
########## Create Live Chat Extension Page ##########
    add_submenu_page(
        'HamLIT-Web-Solutions', //parent slug
        'HamLIT Priority Support', //page title
        'Priority Support', //menu text
        'manage_options', //capability level
        '/HamLIT-Priority-Support', //slug
        'hamlit_prioritysupport'); //function to run
////////// Done with Live Chat Extension Page //////////
*/
///////////////////////////////////////////////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
////////// Done Creating Admin Page/Menu //////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
}
add_action('admin_menu', 'hamlit_menu');
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
############# Priority Support ####################
###################################################
###################################################
###################################################
/*function hamlit_prioritysupport() {
    include ('assets/Admin-Live-Chat-Extension/index.php');
}*/
if (trim(get_option('enablelivechat')) == 1)
{
include ('assets/HamLIT - Admin Live Chat Widget/functions.php');
}
///////////////////////////////////////////////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
//////////// End Priority Support /////////////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
###################################################
###################################################
###################################################
######### Remove Dashboard Widgets ################
###################################################
###################################################
###################################################
if (trim(get_option('removedashwidgets')) == 1)
{
include ('assets/HamLIT - Remove Dashboard Widgets/functions.php');
}
///////////////////////////////////////////////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
/////// End Remove Dashboard Widgets //////////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
###################################################
###################################################
###################################################
########## Stop Smoothness Jquery #################
###################################################
###################################################
###################################################
if (trim(get_option('stopsmoothnessjquery')) == 1)
{
include ('assets/HamLIT - Stop Smoothness Jquery/functions.php');
}
///////////////////////////////////////////////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
/////////// End Stop Smoothness Jquery ////////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
###################################################
###################################################
###################################################
########## Add Extra Profile Fields ###############
###################################################
###################################################
###################################################
if (trim(get_option('addextraprofilefields')) == 1)
{
include ('assets/HamLIT - Add Extra Profile Fields/functions.php');
}
///////////////////////////////////////////////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
////////// End Add Extra Profile Fields ///////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
###################################################
###################################################
###################################################
########## Change My Account Sections #############
###################################################
###################################################
###################################################
if (trim(get_option('changemyaccountsections')) == 1)
{
include ('assets/HamLIT - Change My Account Sections/functions.php');
}
///////////////////////////////////////////////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
////////// End Change My Account Sections /////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
###################################################
###################################################
###################################################
################ Custom Core CSS ##################
###################################################
###################################################
###################################################
if (trim(get_option('customcorecss')) == 1)
{
include ('assets/HamLIT - Custom Core CSS/functions.php');
}
///////////////////////////////////////////////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
///////////////// End Custom Core CSS /////////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
###################################################
###################################################
###################################################
################ Disable Users ####################
###################################################
###################################################
###################################################
if (trim(get_option('disableusers')) == 1)
{
include ('assets/HamLIT - Disable Users/functions.php');
}
///////////////////////////////////////////////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
///////////////// End Disable Users ///////////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
###################################################
###################################################
###################################################
################ Display User ID ##################
###################################################
###################################################
###################################################
if (trim(get_option('displayuserid')) == 1)
{
include ('assets/HamLIT - Display User ID/functions.php');
}
///////////////////////////////////////////////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
///////////////// End Display User ID /////////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
###################################################
###################################################
###################################################
################ Hide Title #######################
###################################################
###################################################
###################################################
if (trim(get_option('hidetitle')) == 1)
{
include ('assets/HamLIT - Hide Title/functions.php');
}
///////////////////////////////////////////////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
///////////////// End Hide Title //////////////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
###################################################
###################################################
###################################################
################ Only Sell To #####################
###################################################
###################################################
###################################################
if (trim(get_option('onlysellto')) == 1)
{
include ('assets/HamLIT - Only Sell To/functions.php');
}
///////////////////////////////////////////////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
///////////////// End Only Sell To ////////////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
###################################################
###################################################
###################################################
################ Remove Post Count ################
###################################################
###################################################
###################################################
if (trim(get_option('removepostcount')) == 1)
{
include ('assets/HamLIT - Remove Post Count/functions.php');
}
///////////////////////////////////////////////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
///////////////// End Remove Post Count ///////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
###################################################
###################################################
###################################################
############# Remove Product Count ################
###################################################
###################################################
###################################################
if (trim(get_option('removeproductcount')) == 1)
{
include ('assets/HamLIT - Remove Product Count/functions.php');
}
///////////////////////////////////////////////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
////////////// End Remove Product Count ///////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
###################################################
###################################################
###################################################
############# Remove Profile Fields ###############
###################################################
###################################################
###################################################
if (trim(get_option('removeprofilefields')) == 1)
{
include ('assets/HamLIT - Remove Profile Fields/functions.php');
}
///////////////////////////////////////////////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
////////////// End Remove Profile Fields //////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
###################################################
###################################################
###################################################
############# Remove Screen Options ###############
###################################################
###################################################
###################################################
if (trim(get_option('removescreenoptions')) == 1)
{
include ('assets/HamLIT - Remove Screen Options/functions.php');
}
///////////////////////////////////////////////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
////////////// End Remove Screen Options //////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
###################################################
###################################################
###################################################
###### Remove Update Notification and Nags ########
###################################################
###################################################
###################################################
if (trim(get_option('removenags')) == 1)
{
include ('assets/HamLIT - Remove Update Notification and Nags/functions.php');
}
///////////////////////////////////////////////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
/////// End Remove Update Notification and Nags ///
///////////////////////////////////////////////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
###################################################
###################################################
###################################################
############ Remove WP Version Footer #############
###################################################
###################################################
###################################################
if (trim(get_option('removeversionfooter')) == 1)
{
include ('assets/HamLIT - Remove WP Version Footer/functions.php');
}
///////////////////////////////////////////////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
////////// End Remove WP Version Footer ///////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
###################################################
###################################################
###################################################
############ Rename Sidebar Items #############
###################################################
###################################################
###################################################
if (trim(get_option('renamesidebaritems')) == 1)
{
include ('assets/HamLIT - Rename Sidebar Items/functions.php');
}
///////////////////////////////////////////////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
////////// End Rename Sidebar Items ///////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
###################################################
###################################################
###################################################
############ Change Woocommerce Columns ###########
###################################################
###################################################
###################################################
if (trim(get_option('changewoocolumns')) == 1)
{
include ('assets/HamLIT - Change Woocommerce Columns/functions.php');
}
///////////////////////////////////////////////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
////////// End Change Woocommerce Columns /////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
###################################################
###################################################
###################################################
################# Defer Javascript ################
###################################################
###################################################
###################################################
if (trim(get_option('deferjs')) == 1)
{
include ('assets/HamLIT - Defer JS/functions.php');
}
///////////////////////////////////////////////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
/////////////// End Defer Javascript //////////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
###################################################
###################################################
###################################################
################# HamLIT Site Health ##############
###################################################
###################################################
###################################################
if (trim(get_option('hamlitsitehealth')) == 1)
{
include ('assets/HamLIT - Site Health/functions.php');
}
///////////////////////////////////////////////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
///////////// End HamLIT Site Health //////////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
###################################################
###################################################
###################################################
################# BlogInfo Shortcode ##############
###################################################
###################################################
###################################################
if (trim(get_option('bloginfosc')) == 1)
{
include ('assets/HamLIT - Site Info Shortcode/functions.php');
}
///////////////////////////////////////////////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
///////////// End BlogInfo Shortcode //////////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
###################################################
###################################################
###################################################
############### View Page Identifier ##############
###################################################
###################################################
###################################################
if (trim(get_option('viewpageidentifier')) == 1)
{
include ('assets/HamLIT - View Page Identifier/functions.php');
}
///////////////////////////////////////////////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
/////////// End View Page Identifier //////////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////
?>