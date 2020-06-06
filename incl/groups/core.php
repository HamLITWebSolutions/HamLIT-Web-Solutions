    <!-- Add Extra Profile Fields -->
        <tr valign="top">
            <th scope="row">Add Profile Fields:</th>
            <?php if (get_option('hamlit_addextraprofilefields') == 1){$checkedyesno = 'checked';} else {$checkedyesno = '';}?>
            <td><input type="checkbox" name="hamlit_addextraprofilefields" value="1" <?php echo $checkedyesno; ?> />*This enables you to add and display custom profile fields for user accounts.</td>
        </tr>
    <!-- Custom Login Page -->
        <tr valign="top">
            <th scope="row">Custom Login Page:</th>
            <?php if (get_option('hamlit_customloginpage') == 1){$checkedyesno = 'checked';} else {$checkedyesno = '';}?>
            <td><input type="checkbox" name="hamlit_customloginpage" value="1" <?php echo $checkedyesno; ?> />*This allows you to modify the style of the Login Page.</td>
        </tr>
    <!-- Defer Javascript -->
        <tr valign="top">
            <th scope="row">Defer Javascript:</th>
            <?php if (get_option('hamlit_deferjs') == 1){$checkedyesno = 'checked';} else {$checkedyesno = '';}?>
            <td><input type="checkbox" name="hamlit_deferjs" value="1" <?php echo $checkedyesno; ?> />*Defer Javascript to increase pagespeed.</td>
        </tr>
    <!-- Disable Users -->
        <tr valign="top">
            <th scope="row">Disable Users:</th>
            <?php if (get_option('hamlit_disableusers') == 1){$checkedyesno = 'checked';} else {$checkedyesno = '';}?>
            <td><input type="checkbox" name="hamlit_disableusers" value="1" <?php echo $checkedyesno; ?> />*Disable users from being able to log in.</td>
        </tr>
    <!-- Display User ID -->
        <tr valign="top">
            <th scope="row">Display User ID:</th>
            <?php if (get_option('hamlit_displayuserid') == 1){$checkedyesno = 'checked';} else {$checkedyesno = '';}?>
            <td><input type="checkbox" name="hamlit_displayuserid" value="1" <?php echo $checkedyesno; ?> />*Display User ID Number on Users page.</td>
        </tr>
    <!-- Hide Title -->
        <tr valign="top">
            <th scope="row">Hide Title:</th>
            <?php if (get_option('hamlit_hidetitle') == 1){$checkedyesno = 'checked';} else {$checkedyesno = '';}?>
            <td><input type="checkbox" name="hamlit_hidetitle" value="1" <?php echo $checkedyesno; ?> />*Allows you to hide post/page title from within the editor.</td>
        </tr>
    <!-- Remove Dashboard Widgets -->
        <tr valign="top">
            <th scope="row">Remove Dashboard Widgets:</th>
            <?php if (get_option('hamlit_removedashwidgets') == 1){$checkedyesno = 'checked';} else {$checkedyesno = '';}?>
            <td><input type="checkbox" name="hamlit_removedashwidgets" value="1" <?php echo $checkedyesno; ?> />*Remove Specific Dashboard Widgets.</td>
        </tr>
    <!-- Remove Post Count -->
        <tr valign="top">
            <th scope="row">Remove Post Count:</th>
            <?php if (get_option('hamlit_removepostcount') == 1){$checkedyesno = 'checked';} else {$checkedyesno = '';}?>
            <td><input type="checkbox" name="hamlit_removepostcount" value="1" <?php echo $checkedyesno; ?> />*Remove Post Count from Users Page.</td>
        </tr>
    <!-- Remove Profile Fields -->
        <tr valign="top">
            <th scope="row">Remove Profile Fields:</th>
            <?php if (get_option('hamlit_removeprofilefields') == 1){$checkedyesno = 'checked';} else {$checkedyesno = '';}?>
            <td><input type="checkbox" name="hamlit_removeprofilefields" value="1" <?php echo $checkedyesno; ?> />*Remove Unwanted Profile Fields.</td>
        </tr>
    <!-- Remove Update Notification and Nags -->
        <tr valign="top">
            <th scope="row">Remove Update Notification and Nags:</th>
            <?php if (get_option('hamlit_removenags') == 1){$checkedyesno = 'checked';} else {$checkedyesno = '';}?>
            <td><input type="checkbox" name="hamlit_removenags" value="1" <?php echo $checkedyesno; ?> />*Remove Update Notification and Nags for non-admin users.</td>
        </tr>
    <!-- Remove WP Branding -->
        <tr valign="top">
            <th scope="row">Remove Branding:</th>
            <?php if (get_option('hamlit_removewpbranding') == 1){$checkedyesno = 'checked';} else {$checkedyesno = '';}?>
            <td><input type="checkbox" name="hamlit_removewpbranding" value="1" <?php echo $checkedyesno; ?> />*Remove WordPress Branding.</td>
        </tr>
    <!-- Rename Sidebar Items -->
        <tr valign="top">
            <th scope="row">Rename Sidebar Items:</th>
            <?php if (get_option('hamlit_renamesidebaritems') == 1){$checkedyesno = 'checked';} else {$checkedyesno = '';}?>
            <td><input type="checkbox" name="hamlit_renamesidebaritems" value="1" <?php echo $checkedyesno; ?> />*Recursive Search and Replace to rename specified sidebar items.</td>
        </tr>
    <!-- SiteInfo Shortcode -->
        <tr valign="top">
            <th scope="row">SiteInfo Shortcode:</th>
            <?php if (get_option('hamlit_bloginfosc') == 1){$checkedyesno = 'checked';} else {$checkedyesno = '';}?>
            <td><input type="checkbox" name="hamlit_bloginfosc" value="1" <?php echo $checkedyesno; ?> />*Allows use of "bloginfo" to post as shortcode. (ex. [bloginfo info='name'] displays Site Title).</td>
        </tr>
    <!-- Stop Smoothness Jquery -->
        <tr valign="top">
            <th scope="row">Stop Smoothness Jquery:</th>
            <?php if (get_option('hamlit_stopsmoothnessjquery') == 1){$checkedyesno = 'checked';} else {$checkedyesno = '';}?>
            <td><input type="checkbox" name="hamlit_stopsmoothnessjquery" value="1" <?php echo $checkedyesno; ?> />*Stop Smoothness Jquery from the back end to increase pagespeed.</td>
        </tr>
    <!-- View Page Identifier -->
        <tr valign="top">
            <th scope="row">View Page Identifier:</th>
            <?php if (get_option('hamlit_viewpageidentifier') == 1){$checkedyesno = 'checked';} else {$checkedyesno = '';}?>
            <td><input type="checkbox" name="hamlit_viewpageidentifier" value="1" <?php echo $checkedyesno; ?> />*View Page Identifier.</td>
        </tr>