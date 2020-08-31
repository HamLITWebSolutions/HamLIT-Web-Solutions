<?php
//function to set and register settings in the database upon save
function hamlit_settings() {
    // Identify Options for Functions
    $dir = ABSPATH . 'wp-content/plugins/HamLIT-Web-Solutions/incl/';
    require "$dir/optionvariables.php";

    //Register options for Simple Options
    foreach ($simple_options as $simple_option)
    {register_setting('hamlit_simpleoptions_group', $simple_option);}
    
    //Register options for Remove WP Branding
    foreach ($rwpb_options as $rwpb_option)
    {register_setting('hamlit_removewpbranding_group', $rwpb_option);}

    //Register options for Custom Login Page
    foreach ($clp_options as $clp_option)
    {register_setting('hamlit_customloginpage_group', $clp_option);}

    //Register options for Live Chat
    foreach ($lc_options as $lc_option)
    {register_setting('hamlit_livechat_group', $lc_option);}
}
add_action('admin_init', 'hamlit_settings' );
//function to set and register settings in the database upon save end
?>