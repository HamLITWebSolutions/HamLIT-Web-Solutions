<?php

if ( !current_user_can( 'manage_options' ) )  {
        wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
    }
?>
<html>
<head>
<style>
/*INPUT STYLE HERE*/
</style>
</head>
<?php settings_errors(); ?>
<body>
    <h3>Remove WordPress Branding</h3>
    <p><i>***Save Changes at the bottom of the page!<br>
      **Anything you would not like to use simply leave blank and no changes will be made.</i></p>
<form method="post" action="options.php">
    <?php settings_fields( 'hamlit_removewpbranding_group' ); ?>
    <table class="form-table">
        <tr><th colspan="2"><h3 style="text-decoration: underline;">Wordpress Dashboard Changes:</h3></th></tr>
        <tr valign="top">
                <th scope="row">Custom Howdy text:</th>
                <td><input type="text" name="hamlit_howdy_text" value="<?php echo esc_attr( get_option('hamlit_howdy_text') ); ?>" maxlength="50" size="30" /></td>
        </tr>
        <tr valign="top">
                <th scope="row">Hide Wordpress Logos:</th>
                <?php if (get_option('hamlit_eliminate_logo') == 1){$chkysno = 'checked';} else {$chkysno = '';}?>
                <td><input type="checkbox" name="hamlit_eliminate_logo" value="1" <?php echo $chkysno; ?> />*This hides Wordpress logo upper left hand corner in the admin bar.</td>
        </tr>
        <tr valign="top">
                <th scope="row">Hide Wordpress Admin bar New menu:</th>
                <?php if (get_option('hamlit_eliminate_new_menu') == 1){$chkysno = 'checked';} else {$chkysno = '';}?>
                <td><input type="checkbox" name="hamlit_eliminate_new_menu" value="1" <?php echo $chkysno; ?> />*This hides Wordpress New menu within the admin bar.</td>
        </tr>
        <tr valign="top">
                <th scope="row">Hide Contextual Help Link:</th>
                <?php if (get_option('hamlit_eliminate_help') == 1){$chkysno = 'checked';} else {$chkysno = '';}?>
                <td><input type="checkbox" name="hamlit_eliminate_help" value="1" <?php echo $chkysno; ?> />*This hides Wordpress contextual help link in the upper right hand corner within main dashboard.</td>
        </tr>
        <tr valign="top">
            <th scope="row">Remove Screen Options:</th>
            <?php if (get_option('hamlit_removescreenoptions') == 1){$checkedyesno = 'checked';} else {$checkedyesno = '';}?>
            <td><input type="checkbox" name="hamlit_removescreenoptions" value="1" <?php echo $checkedyesno; ?> />*Remove Screen Options from Top Right.</td>
        </tr>
        <tr valign="top">
                <th scope="row">Change Wordpress text, lower left corner of admin pages:</th>
                <td><input type="text" name="hamlit_lower_left_text" value="<?php echo esc_attr( get_option('hamlit_lower_left_text') ); ?>" maxlength="150" size="50" /></td>
        </tr>
        <tr valign="top">
                <th scope="row">Hide Wordpress Version From Footer:</th>
                <?php if (get_option('hamlit_hide_wp_version') == 1){$chkysno = 'checked';} else {$chkysno = '';}?>
                <td><input type="checkbox" name="hamlit_hide_wp_version" value="1" <?php echo $chkysno; ?> />*This hides Wordpress version number from the footer on the bottom right corner.</td>
        </tr>
        <!-- Section Break -->
        <tr valign="top">
                <th scope="row" colspan="2">
                <hr>
                <h3 style="text-decoration: underline;">Custom Dashboard Widgets:</h3>
                <p><i>**If you are adding dashboard widgets with another plugin, you may leave these blank and they will not be created.</i></p>
                </th>
        </tr>
        <tr valign="top">
                <th scope="row">Hide Standard Wordpress Dashboards</th>
                <?php if (get_option('hamlit_remove_comp_dashboards') == 1){$rem_chkysno = 'checked';} else {$rem_chkysno = '';}?>
                <td><input type="checkbox" name="hamlit_remove_comp_dashboards" value="1" <?php echo $rem_chkysno; ?> />*Hide if you are adding widgets of your own (Below or with seperate plugin).</td>
        </tr>
        <tr valign="top">
                <th scope="row">Left Widget Title:</th>
                <td><input type="text" name="hamlit_left_widget_title" value="<?php echo esc_attr( get_option('hamlit_left_widget_title') ); ?>" maxlength="150" size="50" /></td>
        </tr>
        <tr valign="top">
                <th scope="row">Left Widget Content:<br>(Text Area and/or HTML5):</th>
                <td><textarea name="hamlit_left_widget_content" value="<?php echo esc_attr( get_option('hamlit_left_widget_content') );?>" rows="6" cols="50"><?php echo get_option('hamlit_left_widget_content');?></textarea></td>
        </tr>
        <tr valign="top">
                <th scope="row">Right Widget Title:</th>
                <td><input type="text" name="hamlit_right_widget_title" value="<?php echo esc_attr( get_option('hamlit_right_widget_title') ); ?>" maxlength="150" size="50" /></td>
        </tr>
        <tr valign="top">
                <th scope="row">Right Widget Content:<br>(Text Area and/or HTML5):</th>
                <td><textarea name="hamlit_right_widget_content" value="<?php echo esc_attr( get_option('hamlit_right_widget_content') );?>" rows="6" cols="50"><?php echo get_option('hamlit_right_widget_content');?></textarea></td>
        </tr>
    </table>
<?php submit_button();?>
</form>
</body>
</html>