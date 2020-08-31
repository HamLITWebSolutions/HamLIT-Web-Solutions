<?php
add_action('wp_dashboard_setup', 'remove_dashboard_meta_boxes', 9999 );
function remove_dashboard_meta_boxes()
{
    global $wp_meta_boxes;
   # $wp_meta_boxes['dashboard']['normal']['core'] = array(); #Removes All CORE DASHBOARD WIDGETS, Including Remove WP Branding Plugins Widgets.
    $wp_meta_boxes['dashboard']['side']['core'] = array();
    $wp_meta_boxes['dashboard']['normal']['core']['themeisle'] = array();
    $wp_meta_boxes['dashboard']['normal']['core']['yith_dashboard_blog_news'] = array();
    $wp_meta_boxes['dashboard']['normal']['core']['yith_dashboard_products_news'] = array();
    $wp_meta_boxes['dashboard']['normal']['core']['tribe_dashboard_widget'] = array();
    $wp_meta_boxes['dashboard']['normal']['core']['mycred_overview'] = array();
}

// REBRAND WooCommerce // // Should find a new home for this code eventually.

// Rename WooCommerce in Sidebar
function rename_woocoomerce_hamlit() 
{
    global $menu;
    
    // Find the Items you want to rename.
	$woo = hamlit_recursive_array_search( 'WooCommerce', $menu );

    // Validate and Re-Name
	if( !$woo )
		return;
	$menu[$woo][0] = 'Store Options';
}
add_action( 'admin_menu', 'rename_woocoomerce_hamlit', 999 );

// Rename POS in Sidebar
function rename_POS_hamlit() 
{
    global $menu;
    
    // Find the Items you want to rename.
	$pos = hamlit_recursive_array_search( 'POS', $menu );

    // Validate and Re-Name
	if( !$pos )
		return;
	$menu[$pos][0] = 'Point of Sale';
}
add_action( 'admin_menu', 'rename_POS_hamlit', 999 );


#This Is the Search and Replace Function. Don't change anything down here.
function hamlit_recursive_array_search( $needle, $haystack ) 
{
    foreach( $haystack as $key => $value ) 
    {
        $current_key = $key;
        if( 
            $needle === $value 
            OR ( 
                is_array( $value )
                && hamlit_recursive_array_search( $needle, $value ) !== false 
            )
        ) 
        {
            return $current_key;
        }
    }
    return false;
}

// Rename WooCommerce Status widget 
add_filter(  'gettext',  'change_woo_widget', 10, 3 );
function change_woo_widget( $translated, $text, $domain  ) {
    global $pagenow;
    if( $text === 'WooCommerce Status' && $domain === 'woocommerce' && is_admin() && $pagenow === 'index.php' ){
        $translated = __( 'Store Summary', $domain );
    }
    return $translated;
}