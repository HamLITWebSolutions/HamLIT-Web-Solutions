<?php
########## HamLIT - Change Woocommerce Columns Menu & Page ##########
if( function_exists( 'hamlit_menu' ) ) {
        function hamlit_change_woocommerce_columns_menu()
        {
        add_submenu_page(
            'HamLIT-Web-Solutions', //parent slug
            'HamLIT - Change Woocommerce Columns', //page title
            'Woo-Columns', //menu text
            'manage_options', //capability level
            '/HamLIT-Change-Woocommerce-Columns', //slug
            'hamlit_change_woocommerce_columns_page'); //function to run
        }
}
add_action('admin_menu', 'hamlit_change_woocommerce_columns_menu');
function hamlit_change_woocommerce_columns_page() {
    include "page.php";
}
###### HamLIT - Change Woocommerce Columns ##########

/**
 * Change number or products per row to 3
 */
add_filter('loop_shop_columns', 'loop_columns', 999);
if (!function_exists('loop_columns')) {
	function loop_columns() {
		return 3; // 3 products per row
	}
}