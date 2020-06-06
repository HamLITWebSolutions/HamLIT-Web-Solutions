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
    <h3>Custom Login Page</h3>
    <p><i>***Save Changes at the bottom of the page!<br>
      **Anything you would not like to use simply leave blank and no changes will be made.</i></p>
<form method="post" action="options.php">
    <?php settings_fields( 'hamlit_customloginpage_group' ); ?>
    <table class="form-table">
    <!-- First Section -->
        <tr valign="top">
            <th scope="row" colspan="2">
                <h3 style="text-decoration: underline;">Login & Register Page Styles:</h3>
             </th>
        </tr>
        
        <tr valign="top">
                <th scope="row">Login Button Style:</th>
                <td>
                    <textarea name="hamlit_custom_login_button" style="height:300px;width:300px"><?php echo htmlentities(get_option('hamlit_custom_login_button'));?></textarea>
                </td>
        </tr>
        
        <tr valign="top">
                <th scope="row">Login Button Style: Hover</th>
                <td>
                    <textarea name="hamlit_custom_login_button_hover" style="height:300px;width:300px"><?php echo htmlentities(get_option('hamlit_custom_login_button_hover'));?></textarea>
                </td>
        </tr>
    <!-- Second Section -->
        <tr valign="top">
            <th scope="row" colspan="2"><hr>
                <h3 style="text-decoration: underline;">Login Page Logo:</h3>
                <p><i>**If you are changing the login page logo with another plugin, you may leave this blank and no further changes will be made.</i></p>
             </th>
        </tr>
        <tr valign="top">
                <th scope="row"></th>
                <td><img style="width:<?php if (get_option('hamlit_login_logo') != ''){echo '300';}else{ echo '80'; }?>px;" src="<?php if (get_option('hamlit_login_logo') != ''){echo esc_attr( get_option('hamlit_login_logo') );}else{ echo '/wp-admin/images/wordpress-logo.svg'; }?>"></td>
        </tr>
    <!-- START JAVASCRIPT -->
        <script type="text/javascript">
                jQuery(document).ready(function($){
                    $('#hamlit_upload_image_button').click(function(e) {
                        e.preventDefault();
                        var image = wp.media({ 
                            title: 'Upload Image',
                            // mutiple: true if you want to upload multiple files at once
                            multiple: false
                        }).open()
                        .on('select', function(e){
                            // This will return the selected image from the Media Uploader, the result is an object
                            var uploaded_image = image.state().get('selection').first();
                            // We convert uploaded_image to a JSON object to make accessing it easier
                            // Output to the console uploaded_image
                            console.log(uploaded_image);
                            var image_url = uploaded_image.toJSON().url;
                            // Let's assign the url value to the input field
                            $('#hamlit_upload_image').val(image_url);
                        });
                    });
                });
        </script>
    <!-- END JAVASCRIPT -->
        <tr valign="top">
              <td>Upload Image</td>
              <td><label for="hamlit_upload_image">
                <input id="hamlit_upload_image" type="text" size="36" name="hamlit_login_logo" value="<?php echo esc_attr( get_option('hamlit_login_logo') ); ?>" />
                <input id="hamlit_upload_image_button" type="button" value="Choose Image" />
                <br />*Save Changes at bottom of page to see the logo changes take effect.
                </label>
              </td>
        </tr>
        <tr valign="top">
                <th scope="row">Login Logo height:<br>
                Leave blank for default (150).</th>
                <td>
                <input type="text" name="hamlit_login_logo_height" value="<?php echo esc_attr( get_option('hamlit_login_logo_height') ); ?>" maxlength="150" size="3" />px - This is here to adjust the given height area on the login page.
                <br>*Login logo is naturally restrained to 300px. So if your logo is 3:1 or 300x100,<br>you will need to set this to 100 (it's 150 by default).
                </td>
        </tr>
    
    </table>
<?php submit_button();?>
</form>
</body>
</html>