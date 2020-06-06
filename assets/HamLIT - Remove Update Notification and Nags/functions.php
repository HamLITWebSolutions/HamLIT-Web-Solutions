<?php
function remove_core_updates(){
global $wp_version;return(object) array('last_checked'=> time(),'version_checked'=> $wp_version,);
}
add_filter('pre_site_transient_update_core','remove_core_updates');
add_filter('pre_site_transient_update_plugins','remove_core_updates');
add_filter('pre_site_transient_update_themes','remove_core_updates');
function hide_update_notice_to_all_but_admin_users()
{
    if (!current_user_can('update_core')) {
        remove_action( 'admin_notices', 'update_nag', 3 );
    }
}
add_action( 'admin_head', 'hide_update_notice_to_all_but_admin_users', 1 );
function hide_update_msg_non_admins(){
     if (!current_user_can( 'manage_options' )) { // non-admin users
            echo '<style>#setting-error-tgmpa>.updated settings-error notice is-dismissible, .update-nag, .updated { display: none; }</style>';
        }
}
    add_action( 'admin_head', 'hide_update_msg_non_admins');