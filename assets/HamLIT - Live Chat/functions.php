<?php

/*
Plugin Name: HamLIT - Live Chat
Plugin URI: https://github.com/hamlitwebsolutions/HamLIT-LiveChat
Description: Allows users to input their Live Chat script to enable Live Chat on the front end.
Author: HamLIT Web Solutions
Author URI: https://hamlitwebsolutions.com
Version: 1.0.0
Text Domain: HamLIT - Live Chat
Domain Path: /languages
*/

function hamlit_livechat_embedfooter()
{
    $chatcode = trim(get_option('hamlit_livechatcode'));
    
    if (trim(get_option('hamlit_hidelivechat')) == 1)
    {
         $chatcode .= '<script> $zoho.salesiq.internalready = function() { $zoho.salesiq.floatbutton.visible("hide"); }</script>';
    }
    echo $chatcode;
}


add_action("wp_footer","hamlit_livechat_embedfooter", 5);