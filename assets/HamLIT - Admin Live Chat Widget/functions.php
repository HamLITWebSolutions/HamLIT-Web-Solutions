<?php

/*
Plugin Name: HamLIT - Admin Live Chat Widget
Plugin URI: https://github.com/hamlitwebsolutions/HamLIT-AdminLiveChatWidget
Description: Adds HamLIT Web Solutions Live Chat to Admin
Author: HamLIT Web Solutions
Author URI: https://hamlitwebsolutions.com
Version: 1.0.0
License: MIT
License URI: https://opensource.org/licenses/MIT
Text Domain: HamLIT - Admin Live Chat Widget
Domain Path: /languages
*/

add_action('admin_enqueue_scripts',"hamlit_livechat_embedchat", 5);

function hamlit_livechat_embedchat()
    {
        ob_start();                      // start capturing output
        include('salesiq.php');   // execute the file
        $litcode_str = ob_get_contents();    // get the contents from the buffer
        ob_end_clean();                  // stop buffering and discard contents
                if (trim(get_option('hamlit_hidechat')) == 1)
                {
             $litcode_str .= '<script> $zoho.salesiq.internalready = function() { $zoho.salesiq.floatbutton.visible("hide"); }</script>';
                }
        echo $litcode_str;
    }
    
if (trim(get_option('hamlit_loginchat')) == 1) {
    add_action('login_url',"hamlit_livechat_embedchat", 5);
}