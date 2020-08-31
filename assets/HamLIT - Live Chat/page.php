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
    <h3>Live Chat Settings</h3>
    <p><i>***Save Changes at the bottom of the page!<br>
      **Anything you would not like to use simply leave blank and no changes will be made.</i></p>
<form method="post" action="options.php">
    <?php settings_fields( 'hamlit_livechat_group' ); ?>
    <table class="form-table">
        <!-- First Section -->
        <tr valign="top">
            <th scope="row" colspan="2">
                <h3 style="text-decoration: underline;">Live Chat Script:</h3>
             </th>
        </tr>
        <tr valign="top">
                <th scope="row">Script:</th>
                <td>
                    <textarea name="hamlit_livechatcode" style="height:200px;width:400px"><?php echo htmlentities(get_option('hamlit_livechatcode'));?></textarea>
                </td>
        </tr>
        <!-- Second Section -->
        <tr valign="top">
            <th scope="row" colspan="2"><hr>
                <h3 style="text-decoration: underline;">Chat Customizations:</h3>
             </th>
        </tr>
        <tr valign="top">
                <th scope="row">Hide LiveChat Widget:</th>
                <?php if (get_option('hamlit_hidelivechat') == 1){$chkysno = 'checked';} else {$chkysno = '';}?>
                <td><input type="checkbox" name="hamlit_hidelivechat" value="1" <?php echo $chkysno; ?> />*ZOHO SALESIQ ONLY: (Chat Widget Disabled, Visitor Tracking Enabled.)</td>
        </tr>
    </table>
<?php submit_button();?>
</form>
</body>
</html>