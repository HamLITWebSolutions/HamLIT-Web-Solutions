<?php
function remove_redundant_profile_fields()
{
#Removes URL
    echo '<style>tr.user-url-wrap{ display: none; }</style>';
#Removes Color Scheme
    echo '<style>tr.user-admin-color-wrap{ display: none; }</style>';
#Removes Keyboard Shortcut for Comments
    echo '<style>tr.user-comment-shortcuts-wrap{ display: none; }</style>';
#Removes User Description/Biographical Info
    echo '<style>tr.user-description-wrap{ display: none; }</style>';
/*
#Removes AIM
    echo '<style>tr.user-aim-wrap{ display: none; }</style>';
#Removes YIM
    echo '<style>tr.user-yim-wrap{ display: none; }</style>';
#Removes Jabber
    echo '<style>tr.user-jabber-wrap{ display: none; }</style>';
*/
#Removes Profile Picture
    echo '<style>tr.user-profile-picture{ display: none; }</style>';
}
add_action( 'admin_head-user-edit.php', 'remove_redundant_profile_fields' );
add_action( 'admin_head-profile.php',   'remove_redundant_profile_fields' );