<?php

/*
Plugin Name: HamLIT - Remove Post Count
Plugin URI: https://github.com/hamlitwebsolutions/HamLIT-RemovePostCount
Description: Removes Post Count from Backend Users Page
Author: HamLIT Web Solutions
Author URI: https://hamlitwebsolutions.com
Version: 1.0.0
License: MIT
License URI: https://opensource.org/licenses/MIT
Text Domain: HamLIT - Remove Post Count
Domain Path: /languages
*/
/*
 * Removes Post Count
 */
add_filter('manage_users_columns','remove_users_columns');
function remove_users_columns($column_headers) {
      unset($column_headers['posts']);
 
    return $column_headers;
}