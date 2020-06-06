    <!-- Priority Support Settings -->
        <tr valign="top">
            <th scope="row">Enable HamLIT Chat Support:</th>
            <?php if (get_option('hamlit_enablelivechat') == 1){$checkedyesno = 'checked';} else {$checkedyesno = '';}?>
            <td>
                <input type="checkbox" name="hamlit_enablelivechat" value="1" <?php echo $checkedyesno; ?> />*This enables the Live Chat Support widget on the admin pages -- The fastest way to get support.
                <div><br></div>
        <!-- If Admin Live Chat Enabled, Give Option to Hide Widget and Enable on Login Screen -->
                <?php 
                    if (trim(get_option('hamlit_enablelivechat')) == 1)
                    {
                        ?>
                            <div style="display:block; text-indent: 5%;">
                                <?php if (get_option('hamlit_loginchat') == 1){$checkedyesno = 'checked';} else {$checkedyesno = '';}?>
                                <input type="checkbox" name="hamlit_loginchat" value="1" <?php echo $checkedyesno; ?> />Enable Chat Widget on  Login Screen (In case login help is needed).
                            </div>
                            <div><br></div>
                            <div style="display:block; text-indent: 5%;">
                                <?php if (get_option('hamlit_hidechat') == 1){$checkedyesno = 'checked';} else {$checkedyesno = '';}?>
                                <input type="checkbox" name="hamlit_hidechat" value="1" <?php echo $checkedyesno; ?> /> Hide Chat widget (Chat Widget Disabled, Visitor Tracking Enabled)</div>
                             <div><br></div>
                        <?php
                    }?>        
            </td>
        </tr>
    <!-- HamLIT Site Health -->
        <tr valign="top">
            <th scope="row">HamLIT Site Health:</th>
            <?php if (get_option('hamlit_sitehealth') == 1){$checkedyesno = 'checked';} else {$checkedyesno = '';}?>
            <td><input type="checkbox" name="hamlit_sitehealth" value="1" <?php echo $checkedyesno; ?> />*Enables Site Health Filtering to disable unwanted warnings.</td>
        </tr>
    <!-- Transient Manager -->
        <tr valign="top">
            <th scope="row">Enable Transient Manager:</th>
            <?php if (get_option('hamlit_transientmanager') == 1){$checkedyesno = 'checked';} else {$checkedyesno = '';}?>
            <td><input type="checkbox" name="hamlit_transientmanager" value="1" <?php echo $checkedyesno; ?> />*Manage Transients through tools menu.</td>
        </tr>