<?php
########## HamLIT - Custom Login Page Menu & Page ##########
//function to set up admin menu item and page
if( function_exists( 'hamlit_menu' ) ) {
        function hamlit_custom_login_menu()
        {
            add_submenu_page(
                'HamLIT-Web-Solutions', //parent slug
                'HamLIT - Custom Login Page', //page title
                'Custom Login', //menu text
                'manage_options', //capability level
                '/HamLIT-Custom-Login Page', //slug
                'hamlit_custom_login_page'); //function to run
        }
}
add_action('admin_menu', 'hamlit_custom_login_menu');
//function to set up admin menu item and page end

//initialize settings
function hamlit_custom_login_page_init() {
    //this sets options at install if they do not already exist
    if ( get_option('hamlit_init_customloginpage') != 'initialized') {
        add_option( 'hamlit_login_logo', '' );
        add_option( 'hamlit_login_logo_height', '' );
        //usage: add_option( $option, $value, $deprecated, $autoload );
        //example: add_option( 'myhack_extraction_length', '255', '', 'yes' );
        update_option('hamlit_init_customloginpage', 'initialized');
    }
    //this sets options at install if they do not already exist end
}
add_action('admin_init', 'hamlit_custom_login_page_init' );
//initialize settings end

//display contents on submenu page
function hamlit_custom_login_page() {
    //include the actual page with context and style
    include "page.php";
    //include the actual page with context and style end
}
########## HamLIT - Custom Login Page Menu & Page END  ##########

########## HamLIT - Custom Login Page  ##########

//function for Login Page Styles
function custom_login_style() { ?>
    <style type="text/css">
 /* CSS For Login Buttons*/
       .wp-core-ui .button-group.button-large .button, .wp-core-ui .button.button-large {
    <?php echo htmlentities(get_option('hamlit_custom_login_button'));?>
	}
 /* CSS For Login Buttons on Hover*/
     .wp-core-ui:hover .button-group.button-large:hover .button:hover, .wp-core-ui:hover .button.button-large:hover {
    <?php echo htmlentities(get_option('hamlit_custom_login_button_hover'));?>
	}
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'custom_login_style' );
//function for Login Page Styles end

//if statemend and function for the logo on login page
if (get_option('hamlit_login_logo') != ''){
    //this changes the logo on the login page
    function my_login_logo() {
      if (get_option('hamlit_login_logo_height') != ''){
        $hamlit_added_logo_height = get_option('hamlit_login_logo_height');
      } else {
        $hamlit_added_logo_height = '150';
      }
      ?>
    
        <style type="text/css">
            body.login div#login h1 a {
                background-image: url(<?php echo get_option('hamlit_login_logo')?>);
                /*padding-bottom: 2px;*/
                width:100%;
                background-size: 100%;
                height: <?php echo $hamlit_added_logo_height ?>px;
            }
        </style>
    <?php }
    add_action( 'login_enqueue_scripts', 'my_login_logo' );
    //this changes the logo on the login page end
}
//if statemend and function for the logo on login page end


////////// ADDITIONAL CODE NEEDED FOR PLUGIN //////////
//changes the title for the login logo on the login page
function hamlit_login_logo_url_title() {
  return get_bloginfo('name');
}
add_filter( 'login_headertext', 'hamlit_login_logo_url_title' );
//changes the title for the login logo on the login page end

//changes the link for the login logo on the login page
function hamlit_login_page_custom_link() {
    return get_site_url();
}
add_filter('login_headerurl','hamlit_login_page_custom_link');
//changes the link for the login logo on the login page end

//Add media upload scripts for logo page upload 
function hamlit_add_media_admin_scripts() {
    wp_enqueue_script('jquery');
    // This will enqueue the Media Uploader script
    wp_enqueue_media();
}
add_action('admin_print_scripts', 'hamlit_add_media_admin_scripts');
//Add media upload scripts for logo page upload end