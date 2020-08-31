<?php
########## HamLIT - Rename Sidebar Items Menu & Page ##########
if( function_exists( 'hamlit_menu' ) ) {
        function hamlit_rename_sidebar_items_menu()
        {
        add_submenu_page(
            'HamLIT-Web-Solutions', //parent slug
            'HamLIT - Rename Sidebar Items', //page title
            'Rename Sidebar Items', //menu text
            'manage_options', //capability level
            '/HamLIT-Rename-Sidebar-Items', //slug
            'hamlit_rename_sidebar_items_page'); //function to run
        }
}
add_action('admin_menu', 'hamlit_rename_sidebar_items_menu');
function hamlit_rename_sidebar_items_page() {
    include "page.php";
}
###### HamLIT - Rename Sidebar Items ##########
add_action( 'admin_menu', 'rename_woocoomerce_hamlit', 999 );

function rename_woocoomerce_hamlit() 
{
    global $menu;

    // Find the Items you want to rename.
	$woo = recursive_array_search_php_91365( 'WooCommerce', $menu );
#	$bookings = recursive_array_search_php_91365( 'Bookings', $menu );

    // Validate and Re-Name
	if( !$woo )
		return;
	$menu[$woo][0] = 'Store Settings';
  
#	if( !$bookings)
#		return;
#	$menu[$bookings][0] = 'Appointments';

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