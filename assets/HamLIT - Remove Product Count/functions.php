<?php

/*
Plugin Name: HamLIT - Remove Product Count
Plugin URI: https://github.com/hamlitwebsolutions/HamLIT-RemoveProductCount
Description: Removes Product Count from Categories and Subcategories
Author: HamLIT Web Solutions
Author URI: https://hamlitwebsolutions.com
Version: 1.0.0
License: MIT
License URI: https://opensource.org/licenses/MIT
Text Domain: HamLIT - Remove Product Count
Domain Path: /languages
*/

add_filter( 'woocommerce_subcategory_count_html', 'woo_remove_category_products_count' );

function woo_remove_category_products_count() {
  return;
}