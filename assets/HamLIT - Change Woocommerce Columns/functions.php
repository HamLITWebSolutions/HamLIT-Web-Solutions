<?php

/*
Plugin Name: HamLIT - Change Woocommerce Columns
Plugin URI: https://github.com/hamlitwebsolutions/HamLIT-ChangeWoocommerceColumns
Description: Changes number of Woocommerce Columns to 4.
Author: HamLIT Web Solutions
Author URI: https://hamlitwebsolutions.com
Version: 1.0.0
License: MIT
License URI: https://opensource.org/licenses/MIT
Text Domain: HamLIT - Change Woocommerce Columns
Domain Path: /languages
*/
/**
 * Change number or products per row to 3
 */
add_filter('loop_shop_columns', 'loop_columns', 999);
if (!function_exists('loop_columns')) {
	function loop_columns() {
		return 3; // 3 products per row
	}
}