<?php
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
    add_action('login_enqueue_scripts',"hamlit_livechat_embedchat", 5);
}