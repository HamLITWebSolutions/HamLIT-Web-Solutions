<?php

/*
Plugin Name: HamLIT - Change My Account Sections
Plugin URI: https://github.com/hamlitwebsolutions/HamLIT-ChangeMyAccountSections
Description: Change My Account sections and remove them.
Author: HamLIT Web Solutions
Author URI: https://hamlitwebsolutions.com
Version: 1.0.0
License: MIT
License URI: https://opensource.org/licenses/MIT
Text Domain: HamLIT - Change My Account Sections
Domain Path: /languages
*/

function LIT_woo_my_account_endpoints() {
 $myorder1 = array(
# 'my-custom-endpoint' => __( 'My Stuff', 'woocommerce' ),
 'dashboard' => __( 'Dashboard', 'woocommerce' ),
  'orders' => __( 'Orders', 'woocommerce' ),
 'edit-account' => __( 'Identity & Password', 'woocommerce' ),
# 'downloads' => __( 'Downloads', 'woocommerce' ),
 'edit-address' => __( 'Addresses', 'woocommerce' ),
# 'payment-methods' => __( 'Payment Methods', 'woocommerce' ),
 'customer-logout' => __( 'Logout', 'woocommerce' ),
 );
 return $myorder1;
}
add_filter ( 'woocommerce_account_menu_items', 'LIT_woo_my_account_endpoints' );

#public function LIT_woo-pre-order_my_account_endpoints() {
# $myorder2 = array(
#  'pre-orders' => __( 'Pre-Orders', 'wc-pre-orders' ),
#  );
# return $myorder2;
#}
#
#add_filter ( 'menu_items', 'LIT_woo-pre-order_my_account_endpoints' );