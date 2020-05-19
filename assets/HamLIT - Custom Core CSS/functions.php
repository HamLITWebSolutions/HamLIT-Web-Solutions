<?php

/*
Plugin Name: HamLIT - Custom Core CSS
Plugin URI: https://github.com/hamlitwebsolutions/HamLIT-CustomCoreCSS
Description: Customizes the stylesheet for Core elements. Make changes in CSS Section Below.
Author: HamLIT Web Solutions
Author URI: https://hamlitwebsolutions.com
Version: 1.0.0
License: MIT
License URI: https://opensource.org/licenses/MIT
Text Domain: HamLIT - Custom Core CSS
Domain Path: /languages
*/

function custom_login_style() { ?>
    <style type="text/css">
/*
 * Change the CSS Below As Needed
 */
 /* CSS For Core Buttons*/
       .wp-core-ui .button-group.button-large .button, .wp-core-ui .button.button-large {
	color: #ffffff !important;
	padding: .3em 1em !important;
	background-color: #42c1c7 !important;
    border-radius: 50px !important;
    border: 2px solid !important;
	font-size: 20px !important;
    font-weight: bold !important;
    font-style: normal !important;
    text-transform: uppercase !important;
    text-decoration: none !important;
	line-height: 1.7em !important;
    letter-spacing: 1px !important;
	}
 /* CSS For Core Buttons on Hover*/
     .wp-core-ui:hover .button-group.button-large:hover .button:hover, .wp-core-ui:hover .button.button-large:hover {
	color: #000000 !important;
	padding: .3em 1em !important;
	background-color: #42c1c7 !important;
    border-radius: 50px !important;
    border: 2px solid !important;
	font-size: 20px !important;
    font-weight: bold !important;
    font-style: normal !important;
    text-transform: uppercase !important;
    text-decoration: none !important;
	line-height: 1.7em !important;
    letter-spacing: 1px !important;
	}
    </style>
<?php }

//This loads the function above on the login page
add_action( 'login_enqueue_scripts', 'custom_login_style' );