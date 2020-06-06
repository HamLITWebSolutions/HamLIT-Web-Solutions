    <!-- Live Chat -->
        <tr valign="top">
            <th scope="row">Live Chat:</th>
            <?php if (get_option('hamlit_livechat') == 1){$checkedyesno = 'checked';} else {$checkedyesno = '';}?>
            <td><input type="checkbox" name="hamlit_livechat" value="1" <?php echo $checkedyesno; ?> />*Allows you to enable your own Live Chat support on your website.</td>
        </tr>