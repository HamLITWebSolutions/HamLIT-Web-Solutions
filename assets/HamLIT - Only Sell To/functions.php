<?php

/*
Plugin Name: HamLIT - Only Sell To
Plugin URI: https://github.com/hamlitwebsolutions/HamLIT-OnlySellTo
Description: Only Sell To Specific States Within The United States. Add and Remove States By Commenting Out State Exclusions using #
Author: HamLIT Web Solutions
Author URI: https://hamlitwebsolutions.com
Version: 1.0.0
License: MIT
License URI: https://opensource.org/licenses/MIT
Text Domain: HamLIT - Only Sell To
Domain Path: /languages
*/


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