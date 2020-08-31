<?php
########## HamLIT - Remove WP Branding Menu & Page ##########
//function to set up admin menu item and page
if( function_exists( 'hamlit_menu' ) ) {
    function hamlit_remove_wp_branding_menu(){
        add_submenu_page(
            'HamLIT-Web-Solutions', //parent slug
            'HamLIT - Remove WP Branding', //page title
            'Remove Branding', //menu text
            'manage_options', //capability level
            '/HamLIT-Remove-WP-Branding', //slug
            'hamlit_remove_wp_branding_page'); //function to run
    }
}
add_action('admin_menu', 'hamlit_remove_wp_branding_menu');
//function to set up admin menu item and page end

//initialize settings
function hamlit_remove_wp_branding_init() {
    //this sets options at install if they do not already exist
    if ( get_option('hamlit_init_removewpbranding') != 'initialized') {
        add_option( 'hamlit_howdy_text', 'Welcome, ' );
        add_option( 'hamlit_eliminate_logo', '1' );
        add_option( 'hamlit_eliminate_new_menu', '' );
        add_option( 'hamlit_eliminate_help', '1' );
        add_option( 'hamlit_removescreenoptions', '1' );
        add_option( 'hamlit_lower_left_text', 'Designed & Hosted by <a href="https://hamlitwebsolutions.com">HamLIT Web Solutions</a>' );
        add_option( 'hamlit_hide_wp_version', '1');
        add_option( 'hamlit_remove_comp_dashboards', '1' );
        add_option( 'hamlit_left_widget_title', 'New Widget' );
        add_option( 'hamlit_left_widget_content', 'You can alter this content on the <a href="'. get_admin_url(null, 'admin.php?page=HamLIT-Remove-WP-Branding') .'">settings</a> page.' );
        add_option( 'hamlit_right_widget_title', 'Need Help?' );
        add_option( 'hamlit_right_widget_content', 'We are happy to help in any way that we can! Please reach out to us via our <a onclick=' . '$zoho.salesiq.floatwindow.visible("show");' . '>Live Chat</a> or on our <a href="https://hamlitwebsolutions.com/contact-us">Contact Us</a> page for assistance!' );
        //usage: add_option( $option, $value, $deprecated, $autoload );
        //example: add_option( 'myhack_extraction_length', '255', '', 'yes' );
        update_option('hamlit_init_removewpbranding', 'initialized');
    }
    //this sets options at install if they do not already exist end
}
add_action('admin_init', 'hamlit_remove_wp_branding_init' );
//initialize settings end

//display contents on submenu page
function hamlit_remove_wp_branding_page() {
    //include the actual page with context and style
    include "page.php";
    //include the actual page with context and style end
}
########## HamLIT - Remove WP Branding Menu & Page END ##########

########## HamLIT - Remove WP Branding  ##########
//function for the "Howdy, admin" section in admin menu bar
function custom_howdy( $wp_admin_bar ) {
    $hamlit_howdy_choice = get_option('hamlit_howdy_text');
    if ($hamlit_howdy_choice == '') {
        $hamlit_howdy_answer = 'Howdy, ';
    }
    else {
        $hamlit_howdy_answer = get_option('hamlit_howdy_text');
    }
    $my_account=$wp_admin_bar->get_node('my-account');
    $newtitle = str_replace( 'Howdy,', $hamlit_howdy_answer, $my_account->title );
    $wp_admin_bar->add_node( array('id' => 'my-account','title' => $newtitle) );
}
add_filter( 'admin_bar_menu', 'custom_howdy',25 );
//function for the "Howdy, admin" section in admin menu bar end

//If statement to hide admin bar wordpress logo
if (get_option('hamlit_eliminate_logo') == 1){
    //remove wordpress stuff from admin menu
    function admin_bar_logo_remove() {
            global $wp_admin_bar;
            /* Remove their stuff */
            $wp_admin_bar->remove_menu('wp-logo');
    }
    add_action('wp_before_admin_bar_render', 'admin_bar_logo_remove', 0);
    //remove wordpress stuff from admin menu end
    // hide administration page header logo and blavatar
    function remove_admin_logo() {
    echo '<style>
    #wp-admin-bar-wp-logo{ display: none; }
    img.blavatar { display: none;}
    #wpadminbar .quicklinks li div.blavatar {display:none;}
    #wpadminbar .quicklinks li .blavatar {display:none;}
    /*#wpadminbar #wp-admin-bar-new-content .ab-icon:before {display:none;}*/
    #wpadminbar .quicklinks li .blavatar:before {display:none;}
    </style>';
    }
    add_action('admin_head', 'remove_admin_logo');
    // hide administration page header logo and blavatar end
}//If statement to hide admin bar wordpress logo and help menu end

//If statement and function to remove "new" Menu from Admin Bar
if (get_option('hamlit_eliminate_new_menu') == 1){
    //remove wordpress stuff from admin menu
    function new_menu_remove() {
            global $wp_admin_bar;
            /* Remove their stuff */
            $wp_admin_bar->remove_menu('new-content');
    }
    add_action('wp_before_admin_bar_render', 'new_menu_remove', 0);
    //remove wordpress stuff from admin menu end
}
//If statement and function to remove "new" Menu from Admin Bar end

//if statemend and function for the "help" screen options
if (get_option('hamlit_eliminate_help') == 1){
    function hamlit_hide_help() {
        echo '<style type="text/css">#contextual-help-link-wrap { display: none !important; }</style>';
    }
    add_action('admin_head', 'hamlit_hide_help');
}
//if statemend and function for the "help" screen options end

//if statemend and function to remove screen options
if (get_option('hamlit_removescreenoptions') == 1){
   add_filter('screen_options_show_screen', '__return_false');
}
//if statemend and function to remove screen options end

//if statement and function for the lower left text
if (get_option('hamlit_lower_left_text') != ''){
    function b3m_modify_footer_admin () {
      echo get_option('hamlit_lower_left_text');
    }
    add_filter('admin_footer_text', 'b3m_modify_footer_admin');
}//if statement and function for the lower left text end

//if statemend and function for the wordpress version footer
if (get_option('hamlit_hide_wp_version') == 1){
    function hamlit_hide_wp_version() {
            remove_filter( 'update_footer', 'core_update_footer' ); 
        }
    add_action( 'admin_menu', 'hamlit_hide_wp_version' );
}
//if statemend and function for the wordpress version footer end


//if statemend and function for the dashboard widgets
if (get_option('hamlit_remove_comp_dashboards') == '1'){
    //removing that stuff from the dashboard
    function hamlit_remove_dashboard_meta() {
            remove_meta_box( 'dashboard_activity', 'dashboard', 'normal' );
            remove_meta_box( 'dashboard_incoming_links', 'dashboard', 'normal' );
            remove_meta_box( 'dashboard_plugins', 'dashboard', 'normal' );
            remove_meta_box( 'dashboard_primary', 'dashboard', 'normal' );
            remove_meta_box( 'dashboard_secondary', 'dashboard', 'normal' );
            remove_meta_box( 'dashboard_incoming_links', 'dashboard', 'normal' );
            remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
            remove_meta_box( 'dashboard_recent_drafts', 'dashboard', 'side' );
            remove_meta_box( 'dashboard_recent_comments', 'dashboard', 'normal' );
            remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' );
    }
    add_action( 'admin_init', 'hamlit_remove_dashboard_meta' );
    //removing that stuff from the dashboard end
}
//if statemend and function for the dashboard widgets end

//if statement and function for left widget
if (get_option('hamlit_left_widget_title') != ''){
    //outputs the contents of the dashboard widget
    function hamlit_dashboard_widget_function( $post, $callback_args ) {
      echo get_option('hamlit_left_widget_content');
    }
    //function used in the action hook
    function hamlit_add_dashboard_widgets() {
      wp_add_dashboard_widget('dashboard_widget', get_option('hamlit_left_widget_title'), 'hamlit_dashboard_widget_function');
    }
    //Register the new dashboard widget with the 'wp_dashboard_setup' action
    add_action('wp_dashboard_setup', 'hamlit_add_dashboard_widgets' );
}
//if statement and function for left widget end

//if statement and function for right widget
if (get_option('hamlit_right_widget_title') != ''){
    function hamlit_dashboard_widget_function_topright( $post, $callback_args ) {
      echo get_option('hamlit_right_widget_content');
    }
    //function used in the action hook
    function hamlit_add_dashboard_widget_topright() {
      //wp_add_dashboard_widget('dashboard_widget', 'Contact work.shop', 'dashboard_widget_function');
      add_meta_box('hamlit_meta_id1', get_option('hamlit_right_widget_title'), 'hamlit_dashboard_widget_function_topright', 'dashboard', 'side', 'high');
    }
    // Register the new dashboard widget with the 'wp_dashboard_setup' action
    add_action('wp_dashboard_setup', 'hamlit_add_dashboard_widget_topright' );
}
//if statement and function for right widget end

########## HamLIT - Remove WP Branding END  ##########