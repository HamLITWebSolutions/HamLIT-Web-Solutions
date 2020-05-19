<?php

/*
Plugin Name: HamLIT - Display User ID
Plugin URI: https://github.com/hamlitwebsolutions/HamLIT-DisplayUserID
Description: Displays User ID on Users page.
Author: HamLIT Web Solutions
Author URI: https://hamlitwebsolutions.com
Version: 1.0.0
License: MIT
License URI: https://opensource.org/licenses/MIT
Text Domain: HamLIT - Display User ID
Domain Path: /languages
*/
add_filter('manage_users_columns', 'HamLIT_add_user_id_column');
function HamLIT_add_user_id_column($columns) {
    $columns['user_id'] = 'User ID';
    return $columns;
}
 
add_action('manage_users_custom_column',  'HamLIT_show_user_id_column_content', 10, 3);
function HamLIT_show_user_id_column_content($value, $column_name, $user_id) {
    $user = get_userdata( $user_id );
	if ( 'user_id' == $column_name )
		return $user_id;
    return $value;
}