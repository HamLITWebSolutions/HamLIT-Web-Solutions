<?php

/*
Plugin Name: HamLIT - Remove WP Version Footer
Plugin URI: https://github.com/hamlitwebsolutions/HamLIT-RemoveWPVersionFooter
Description: Removes Version from the Footer in the Admin Dashboard
Author: HamLIT Web Solutions
Author URI: https://hamlitwebsolutions.com
Version: 1.0.0
License: MIT
License URI: https://opensource.org/licenses/MIT
Text Domain: HamLIT - Remove WP Version Footer
Domain Path: /languages
*/
#Removes Version from the Footer in the Admin Dashboard
function remove_versionfooter() {
        remove_filter( 'update_footer', 'core_update_footer' ); 
    }
add_action( 'admin_menu', 'remove_versionfooter' );

