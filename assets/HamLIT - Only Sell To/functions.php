<?php
########## HamLIT - Only Sell To Menu & Page ##########
if( function_exists( 'hamlit_menu' ) ) {
        function hamlit_only_sell_to_menu()
        {
        add_submenu_page(
            'HamLIT-Web-Solutions', //parent slug
            'HamLIT - Only Sell To', //page title
            'Only Sell To:', //menu text
            'manage_options', //capability level
            '/HamLIT-Only-Sell-To', //slug
            'hamlit_only_sell_to_page'); //function to run
        }
}
add_action('admin_menu', 'hamlit_only_sell_to_menu');
function hamlit_only_sell_to_page() {
    include "page.php";
}
###### HamLIT - Only Sell To ##########
function wc_sell_only_states( $states ) {
$states['US'] = array(
	'AL' => __( 'Alabama', 'woocommerce' ),
	'AK' => __( 'Alaska', 'woocommerce' ),
	'AZ' => __( 'Arizona', 'woocommerce' ),
	'AR' => __( 'Arkansas', 'woocommerce' ),
	'CA' => __( 'California', 'woocommerce' ),
	'CO' => __( 'Colorado', 'woocommerce' ),
	'CT' => __( 'Connecticut', 'woocommerce' ),
	'DE' => __( 'Delaware', 'woocommerce' ),
	'DC' => __( 'District Of Columbia', 'woocommerce' ),
	'FL' => __( 'Florida', 'woocommerce' ),
	'GA' => _x( 'Georgia', 'US state of Georgia', 'woocommerce' ),
	'HI' => __( 'Hawaii', 'woocommerce' ),
	'ID' => __( 'Idaho', 'woocommerce' ),
	'IL' => __( 'Illinois', 'woocommerce' ),
	'IN' => __( 'Indiana', 'woocommerce' ),
	'IA' => __( 'Iowa', 'woocommerce' ),
	'KS' => __( 'Kansas', 'woocommerce' ),
	'KY' => __( 'Kentucky', 'woocommerce' ),
	'LA' => __( 'Louisiana', 'woocommerce' ),
	'ME' => __( 'Maine', 'woocommerce' ),
	'MD' => __( 'Maryland', 'woocommerce' ),
	'MA' => __( 'Massachusetts', 'woocommerce' ),
	'MI' => __( 'Michigan', 'woocommerce' ),
	'MN' => __( 'Minnesota', 'woocommerce' ),
	'MS' => __( 'Mississippi', 'woocommerce' ),
	'MO' => __( 'Missouri', 'woocommerce' ),
	'MT' => __( 'Montana', 'woocommerce' ),
	'NE' => __( 'Nebraska', 'woocommerce' ),
	'NV' => __( 'Nevada', 'woocommerce' ),
	'NH' => __( 'New Hampshire', 'woocommerce' ),
	'NJ' => __( 'New Jersey', 'woocommerce' ),
	'NM' => __( 'New Mexico', 'woocommerce' ),
	'NY' => __( 'New York', 'woocommerce' ),
	'NC' => __( 'North Carolina', 'woocommerce' ),
	'ND' => __( 'North Dakota', 'woocommerce' ),
	'OH' => __( 'Ohio', 'woocommerce' ),
	'OK' => __( 'Oklahoma', 'woocommerce' ),
	'OR' => __( 'Oregon', 'woocommerce' ),
	'PA' => __( 'Pennsylvania', 'woocommerce' ),
	'RI' => __( 'Rhode Island', 'woocommerce' ),
	'SC' => __( 'South Carolina', 'woocommerce' ),
	'SD' => __( 'South Dakota', 'woocommerce' ),
	'TN' => __( 'Tennessee', 'woocommerce' ),
	'TX' => __( 'Texas', 'woocommerce' ),
	'UT' => __( 'Utah', 'woocommerce' ),
	'VT' => __( 'Vermont', 'woocommerce' ),
	'VA' => __( 'Virginia', 'woocommerce' ),
	'WA' => __( 'Washington', 'woocommerce' ),
	'WV' => __( 'West Virginia', 'woocommerce' ),
	'WI' => __( 'Wisconsin', 'woocommerce' ),
	'WY' => __( 'Wyoming', 'woocommerce' ),
	'AA' => __( 'Armed Forces (AA)', 'woocommerce' ),
	'AE' => __( 'Armed Forces (AE)', 'woocommerce' ),
	'AP' => __( 'Armed Forces (AP)', 'woocommerce' ),
);
	return $states;
}
add_filter( 'woocommerce_states', 'wc_sell_only_states' );