<?php
// Set Options for Function
$options = [ 
#    'hamlit_addextraprofilefields',
    'hamlit_enablelivechat',
        'hamlit_loginchat',
        'hamlit_hidechat',
#    'hamlit_changemyaccountsections',
#    'hamlit_changewoocolumns',
#    'hamlit_customcorecss',
    'hamlit_deferjs',
    'hamlit_disableusers',
    'hamlit_displayuserid',
    'hamlit_hidetitle',
#    'hamlit_livechat',
#        'hamlit_livechatcode',
#        'hamlit_hidelivechat',
#    'hamlit_onlysellto',
    'hamlit_removedashwidgets',
    'hamlit_removepostcount',
    'hamlit_removeproductcount',
    'hamlit_removeprofilefields',
    'hamlit_removescreenoptions',
    'hamlit_removenags',
    'hamlit_removeversionfooter',
#    'hamlit_renamesidebaritems',
    'hamlit_sitehealth',
    'hamlit_bloginfosc',
    'hamlit_stopsmoothnessjquery',
    'hamlit_transientmanager',
    'hamlit_viewpageidentifier'
];

// Post Changes to Options when Submitted
if(isset($_POST['litsubmit'])){
            foreach ( $options as $option ){
            $checkboxvalue = !empty($_POST[$option]) ? $_POST[$option]:0;
	        update_option( $option, $checkboxvalue );
        }
    ##########////////// END!!!! NOTHING BELOW THIS LINE //////////##########
            ######## Submitted Changes, Display Success Message #######
            echo '<div class="updated"> <p>' . __('Success: Your changes have been saved.') . '</p> </div>';
            #echo "<meta http-equiv='refresh' content='0'>";
}
?>

<html>
<head>
<style>
/*INPUT STYLE HERE*/
</style>
</head>

<body>
    <h3>Main Options</h3>
<form method="post" action="">
<!-- Priority Support Settings -->
        <div><br></div>
        <div><input type = "checkbox" id = "hamlit_enablelivechat" name = "hamlit_enablelivechat" value = "1" <?php if(get_option('hamlit_enablelivechat') == 1) echo 'checked';?>/> Enable Admin LiveChat Extension </div>
        <div><br></div>
        <!-- If Admin Live Chat Enabled, Give Option to Hide Widget and Enable on Login Screen -->
        <?php 
                if (trim(get_option('hamlit_enablelivechat')) == 1)
                {
                    ?>
                         <div style="display:block; text-indent: 5%;">
                         <input type = "checkbox" id = "hamlit_loginchat" name = "hamlit_loginchat" value = "1" <?php if(get_option('hamlit_loginchat') == 1) echo 'checked';?>/> Enable Chat Widget on  Login Screen (In case login help is needed).</div>
                        <div><br></div>
                        <div style="display:block; text-indent: 5%;">
                         <input type = "checkbox" id = "hamlit_hidechat" name = "hamlit_hidechat" value = "1" <?php if(get_option('hamlit_hidechat') == 1) echo 'checked';?>/> Hide Chat widget (Chat Widget Disabled, Visitor Tracking Enabled)</div>
                         <div><br></div>
                    <?php
                }?>
<!-- Defer Javascript -->
        <div><input type = "checkbox" id = "hamlit_deferjs" name = "hamlit_deferjs" value = "1" <?php if(get_option('hamlit_deferjs') == 1) echo 'checked';?>/> Defer Javascript </div>
<!-- Disable Users -->
        <div><br></div>
        <div><input type = "checkbox" id = "hamlit_disableusers" name = "hamlit_disableusers" value = "1" <?php if(get_option('hamlit_disableusers') == 1) echo 'checked';?>/> Disable Users </div>
<!-- Display User ID -->
        <div><br></div>
        <div><input type = "checkbox" id = "hamlit_displayuserid" name = "hamlit_displayuserid" value = "1" <?php if(get_option('hamlit_displayuserid') == 1) echo 'checked';?>/> Display User ID </div>
<!-- Hide Title -->
        <div><br></div>
        <div><input type = "checkbox" id = "hamlit_hidetitle" name = "hamlit_hidetitle" value = "1" <?php if(get_option('hamlit_hidetitle') == 1) echo 'checked';?>/> Hide Title </div>
<!-- Remove Dashboard Widgets -->
        <div><br></div>
        <div><input type = "checkbox" id = "hamlit_removedashwidgets" name = "hamlit_removedashwidgets" value = "1" <?php if(get_option('hamlit_removedashwidgets') == 1) echo 'checked';?>/> Remove Dashboard Widgets </div>        
<!-- Remove Post Count -->
        <div><br></div>
        <div><input type = "checkbox" id = "hamlit_removepostcount" name = "hamlit_removepostcount" value = "1" <?php if(get_option('hamlit_removepostcount') == 1) echo 'checked';?>/> Remove Post Count </div>
<!-- Remove Product Count -->
        <div><br></div>
        <div><input type = "checkbox" id = "hamlit_removeproductcount" name = "hamlit_removeproductcount" value = "1" <?php if(get_option('hamlit_removeproductcount') == 1) echo 'checked';?>/> Remove Product Count </div>
<!-- Remove Profile Fields -->
        <div><br></div>
        <div><input type = "checkbox" id = "hamlit_removeprofilefields" name = "hamlit_removeprofilefields" value = "1" <?php if(get_option('hamlit_removeprofilefields') == 1) echo 'checked';?>/> Remove Profile Fields </div>
<!-- Remove Screen Options -->
        <div><br></div>
        <div><input type = "checkbox" id = "hamlit_removescreenoptions" name = "hamlit_removescreenoptions" value = "1" <?php if(get_option('hamlit_removescreenoptions') == 1) echo 'checked';?>/> Remove Screen Options </div>
<!-- Remove Update Notification and Nags -->
        <div><br></div>
        <div><input type = "checkbox" id = "hamlit_removenags" name = "hamlit_removenags" value = "1" <?php if(get_option('hamlit_removenags') == 1) echo 'checked';?>/> Remove Update Notification and Nags </div>
<!-- Remove WP Version Footer -->
        <div><br></div>
        <div><input type = "checkbox" id = "hamlit_removeversionfooter" name = "hamlit_removeversionfooter" value = "1" <?php if(get_option('hamlit_removeversionfooter') == 1) echo 'checked';?>/> Remove WP Version Footer </div>
<!-- HamLIT Site Health -->
        <div><br></div>
        <div><input type = "checkbox" id = "hamlit_sitehealth" name = "hamlit_sitehealth" value = "1" <?php if(get_option('hamlit_sitehealth') == 1) echo 'checked';?>/> Customize Site Health Checks </div>        
<!-- SiteInfo Shortcode -->
        <div><br></div>
        <div><input type = "checkbox" id = "hamlit_bloginfosc" name = "hamlit_bloginfosc" value = "1" <?php if(get_option('hamlit_bloginfosc') == 1) echo 'checked';?>/> Allows use of "bloginfo" to post as shortcode. (ex. [bloginfo info='name'] displays Site Title)</div>
<!-- Stop Smoothness Jquery -->
        <div><br></div>
        <div><input type = "checkbox" id = "hamlit_stopsmoothnessjquery" name = "hamlit_stopsmoothnessjquery" value = "1" <?php if(get_option('hamlit_stopsmoothnessjquery') == 1) echo 'checked';?>/> Stop Smoothness Jquery </div>
<!-- Transient Manager -->
        <div><br></div>
        <div><input type = "checkbox" id = "hamlit_transientmanager" name = "hamlit_transientmanager" value = "1" <?php if(get_option('hamlit_transientmanager') == 1) echo 'checked';?>/> Enable Transient Manager </div>
<!-- View Page Identifier -->
        <div><br></div>
        <div><input type = "checkbox" id = "hamlit_viewpageidentifier" name = "hamlit_viewpageidentifier" value = "1" <?php if(get_option('hamlit_viewpageidentifier') == 1) echo 'checked';?>/> View Page Identifier</div>
<div><br></div>
<!-- Submit Changes -->
             <input type="submit" name="litsubmit" class="button button-primary" value="Save Changes"/>
</form>
</body>
</html>