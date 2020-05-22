<?php
/**
 * Fired when the plugin is uninstalled.
 *
 * When populating this file, consider the following flow
 * of control:
 *
 * - This method should be static
 * - Check if the $_REQUEST content actually is the plugin name
 * - Run an admin referrer check to make sure it goes through authentication
 * - Verify the output of $_GET makes sense
 * - Repeat with other user roles. Best directly by using the links/query string parameters.
 * - Repeat things for multisite. Once for a single site in the network, once sitewide.
 *
 * This file may be updated more in future version of the Boilerplate; however, this is the
 * general skeleton and outline for how the file should work.
 *
 * @link    https://github.com/HamLITWebSolutions/HamLIT-Web-Solutions
 * @package HamLIT-Web-Solutions
 */

// If uninstall not called from WordPress, then exit.
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit;
}

$options = [ 
    'hamlit_addextraprofilefields',
    'hamlit_enablelivechat',
        'hamlit_loginchat',
        'hamlit_hidechat',
    'hamlit_changemyaccountsections',
    'hamlit_changewoocolumns',
    'hamlit_customcorecss',
    'hamlit_deferjs',
    'hamlit_disableusers',
    'hamlit_displayuserid',
    'hamlit_hidetitle',
    'hamlit_onlysellto',
    'hamlit_removedashwidgets',
    'hamlit_removepostcount',
    'hamlit_removeproductcount',
    'hamlit_removeprofilefields',
    'hamlit_removescreenoptions',
    'hamlit_removenags',
    'hamlit_removeversionfooter',
    'hamlit_renamesidebaritems',
    'hamlit_sitehealth',
    'hamlit_bloginfosc',
    'hamlit_stopsmoothnessjquery',
    'hamlit_transientmanager',
    'hamlit_viewpageidentifier'];




foreach ( $options as $option ) {
	delete_option( $option );
	delete_site_option( $option );
}

global $wpdb;
$table         = is_multisite() ? $wpdb->base_prefix . 'sitemeta' : $wpdb->base_prefix . 'options';
$column        = is_multisite() ? 'meta_key' : 'option_name';
$delete_string = 'DELETE FROM ' . $table . ' WHERE ' . $column . ' LIKE %s LIMIT 1000';

$wpdb->query( $wpdb->prepare( $delete_string, [ '%ghu-%' ] ) ); // phpcs:ignore

@unlink( WP_CONTENT_DIR . '/tmp-readme.txt' );
