<?php

/*
Plugin Name: HamLIT - Rename Sidebar Items
Plugin URI: https://github.com/hamlitwebsolutions/HamLIT-RenameSidebarItems
Description: Ra-names Sidebar Items in the Admin Dashboard
Author: HamLIT Web Solutions
Author URI: https://hamlitwebsolutions.com
Version: 1.0.0
License: MIT
License URI: https://opensource.org/licenses/MIT
Text Domain: HamLIT - Rename Sidebar Items
Domain Path: /languages
*/
add_action( 'admin_menu', 'rename_woocoomerce_hamlit', 999 );

function rename_woocoomerce_hamlit() 
{
    global $menu;

    // Find the Items you want to rename.
#	$woo = recursive_array_search_php_91365( 'WooCommerce', $menu );
#	$bookings = recursive_array_search_php_91365( 'Bookings', $menu );

    // Validate and Re-Name
#	if( !$woo )
#		return;
#	$menu[$woo][0] = 'Store Settings';
  
	if( !$bookings)
		return;
	$menu[$bookings][0] = 'Appointments';

} #Leave this Bracket to close the search and replace!

#This Is the Search and Replace Function. Don't change anything down here.
function recursive_array_search_php_91365( $needle, $haystack ) 
{
    foreach( $haystack as $key => $value ) 
    {
        $current_key = $key;
        if( 
            $needle === $value 
            OR ( 
                is_array( $value )
                && recursive_array_search_php_91365( $needle, $value ) !== false 
            )
        ) 
        {
            return $current_key;
        }
    }
    return false;
}