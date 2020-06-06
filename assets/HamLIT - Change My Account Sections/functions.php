<?php
########## HamLIT - Change My Account Sections Menu & Page ##########
if( function_exists( 'hamlit_menu' ) ) {
        function hamlit_change_my_account_sections_menu()
        {
        add_submenu_page(
            'HamLIT-Web-Solutions', //parent slug
            'HamLIT - Change My Account Sections', //page title
            'Account Sections', //menu text
            'manage_options', //capability level
            '/HamLIT-Change-My-Account-Sections', //slug
            'hamlit_change_my_account_sections_page'); //function to run
        }
}
add_action('admin_menu', 'hamlit_change_my_account_sections_menu');
function hamlit_change_my_account_sections_page() {
    include "page.php";
}
###### HamLIT - Change My Account Sections ##########
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