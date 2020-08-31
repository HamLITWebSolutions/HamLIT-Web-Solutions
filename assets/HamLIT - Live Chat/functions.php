<?php
########## HamLIT - Live Chat Menu & Page ##########
//function to set up admin menu item and page
if( function_exists( 'hamlit_menu' ) ) {
        function hamlit_live_chat_menu()
        {
        add_submenu_page(
            'HamLIT-Web-Solutions', //parent slug
            'HamLIT - Live Chat', //page title
            'Live Chat', //menu text
            'manage_options', //capability level
            '/HamLIT-Live-Chat', //slug
            'hamlit_live_chat_page'); //function to run
        }
}
add_action('admin_menu', 'hamlit_live_chat_menu');
//function to set up admin menu item and page end

function hamlit_live_chat_page() {
    include "page.php";
}

###### HamLIT - Live Chat ##########
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