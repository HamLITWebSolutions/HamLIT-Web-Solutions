    <!-- Auto Complete Subscription Renewals -->
        <tr valign="top">
            <th scope="row">Auto Complete Subscription Renewals:</th>
            <?php if (get_option('hamlit_autocompsubsrenewals') == 1){$checkedyesno = 'checked';} else {$checkedyesno = '';}?>
            <td><input type="checkbox" name="hamlit_autocompsubsrenewals" value="1" <?php echo $checkedyesno; ?> />*This automatically completes all subscription renewal orders.</td>
        </tr>
    <!-- Change My Account Sections -->
        <tr valign="top">
            <th scope="row">Change My Account Sections:</th>
            <?php if (get_option('hamlit_changemyaccountsections') == 1){$checkedyesno = 'checked';} else {$checkedyesno = '';}?>
            <td><input type="checkbox" name="hamlit_changemyaccountsections" value="1" <?php echo $checkedyesno; ?> />*This enables you to add and display custom sections on the My Account page.</td>
        </tr>    
    <!-- Change Woocommerce Columns -->
        <tr valign="top">
            <th scope="row">Change Woocommerce Columns:</th>
            <?php if (get_option('hamlit_changewoocolumns') == 1){$checkedyesno = 'checked';} else {$checkedyesno = '';}?>
            <td><input type="checkbox" name="hamlit_changewoocolumns" value="1" <?php echo $checkedyesno; ?> />*This enables you to change the number of columns displayed on the WooCommerce Products Page.</td>
        </tr>
    <!-- Only Sell To -->
        <tr valign="top">
            <th scope="row">Only Sell To:</th>
            <?php if (get_option('hamlit_onlysellto') == 1){$checkedyesno = 'checked';} else {$checkedyesno = '';}?>
            <td><input type="checkbox" name="hamlit_onlysellto" value="1" <?php echo $checkedyesno; ?> />*Only Sell To Specific States.</td>
        </tr>
    <!-- Remove Product Count -->
        <tr valign="top">
            <th scope="row">Remove Product Count:</th>
            <?php if (get_option('hamlit_removeproductcount') == 1){$checkedyesno = 'checked';} else {$checkedyesno = '';}?>
            <td><input type="checkbox" name="hamlit_removeproductcount" value="1" <?php echo $checkedyesno; ?> />*Remove Product Count from Categories Page.</td>
        </tr>