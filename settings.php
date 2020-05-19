<?php
####### Post when LITSubmit is Clicked #######
if(isset($_POST['litsubmit'])){
        //////////////////// Priority Support Settings ////////////////////
            ####### Enable Admin Live Chat Checkbox #######
            $enablelivechatvalue = !empty($_POST['enablelivechat']) ? $_POST['enablelivechat']:0;
            update_option('enablelivechat', $enablelivechatvalue);
            ####### SalesIQ Code #######
            $litcodesnippet = $_POST['litcodesnippet'];
            update_option('litcode',stripslashes($litcodesnippet));
            ####### Hide Chat Checkbox #######
            $hidechatvalue = !empty($_POST['hidechat']) ? $_POST['hidechat']:0;
            update_option('hidechat', $hidechatvalue);
        //////////////////// Remove Dashboard Widgets ////////////////////
            $removedashwidgetsvalue = !empty($_POST['removedashwidgets']) ? $_POST['removedashwidgets']:0;
            update_option('removedashwidgets', $removedashwidgetsvalue);
        //////////////////// Stop Smoothness Jquery ////////////////////
            $stopsmoothnessjqueryvalue = !empty($_POST['stopsmoothnessjquery']) ? $_POST['stopsmoothnessjquery']:0;
            update_option('stopsmoothnessjquery', $stopsmoothnessjqueryvalue);
        //////////////////// Add Extra Profile Fields ////////////////////
            $addextraprofilefieldsvalue = !empty($_POST['addextraprofilefields']) ? $_POST['addextraprofilefields']:0;
            update_option('addextraprofilefields', $addextraprofilefieldsvalue);
        //////////////////// Change My Account Sections ////////////////////
            $changemyaccountsectionsvalue = !empty($_POST['changemyaccountsections']) ? $_POST['changemyaccountsections']:0;
            update_option('changemyaccountsections', $changemyaccountsectionsvalue);
        //////////////////// Custom Core CSS ////////////////////
            $customcorecssvalue = !empty($_POST['customcorecss']) ? $_POST['customcorecss']:0;
            update_option('customcorecss', $customcorecssvalue);
        //////////////////// Disable Users ////////////////////
            $disableusersvalue = !empty($_POST['disableusers']) ? $_POST['disableusers']:0;
            update_option('disableusers', $disableusersvalue);
        //////////////////// Display User ID ////////////////////
            $displayuseridvalue = !empty($_POST['displayuserid']) ? $_POST['displayuserid']:0;
            update_option('displayuserid', $displayuseridvalue);
        //////////////////// Hide Title ////////////////////
            $hidetitlevalue = !empty($_POST['hidetitle']) ? $_POST['hidetitle']:0;
            update_option('hidetitle', $hidetitlevalue);
        //////////////////// Only Sell To ////////////////////
            $onlyselltovalue = !empty($_POST['onlysellto']) ? $_POST['onlysellto']:0;
            update_option('onlysellto', $onlyselltovalue);
        //////////////////// Remove Post Count ////////////////////
            $removepostcountvalue = !empty($_POST['removepostcount']) ? $_POST['removepostcount']:0;
            update_option('removepostcount', $removepostcountvalue);
        //////////////////// Remove Product Count ////////////////////
            $removeproductcountvalue = !empty($_POST['removeproductcount']) ? $_POST['removeproductcount']:0;
            update_option('removeproductcount', $removeproductcountvalue);
        //////////////////// Remove Profile Fields ////////////////////
            $removeprofilefieldsvalue = !empty($_POST['removeprofilefields']) ? $_POST['removeprofilefields']:0;
            update_option('removeprofilefields', $removeprofilefieldsvalue);
        //////////////////// Remove Screen Options ////////////////////
            $removescreenoptionsvalue = !empty($_POST['removescreenoptions']) ? $_POST['removescreenoptions']:0;
            update_option('removescreenoptions', $removescreenoptionsvalue);
        /////////////// Remove Update Notification and Nags ///////////////
            $removenagsvalue = !empty($_POST['removenags']) ? $_POST['removenags']:0;
            update_option('removenags', $removenagsvalue);
        //////////////////// Remove WP Version Footer ////////////////////
            $removeversionfootervalue = !empty($_POST['removeversionfooter']) ? $_POST['removeversionfooter']:0;
            update_option('removeversionfooter', $removeversionfootervalue);
        //////////////////// Rename Sidebar Items ////////////////////
            $renamesidebaritemsvalue = !empty($_POST['renamesidebaritems']) ? $_POST['renamesidebaritems']:0;
            update_option('renamesidebaritems', $renamesidebaritemsvalue);
        //////////////////// Change Woocommerce Columns ////////////////////
            $changewoocolumnsvalue = !empty($_POST['changewoocolumns']) ? $_POST['changewoocolumns']:0;
            update_option('changewoocolumns', $changewoocolumnsvalue);
        //////////////////// Defer Javascript ////////////////////
            $deferjsvalue = !empty($_POST['deferjs']) ? $_POST['deferjs']:0;
            update_option('deferjs', $deferjsvalue);
        //////////////////// HamLIT Site Health ////////////////////
            $hamlitsitehealthvalue = !empty($_POST['hamlitsitehealth']) ? $_POST['hamlitsitehealth']:0;
            update_option('hamlitsitehealth', $hamlitsitehealthvalue);
        //////////////////// BlogInfo Short Code ////////////////////
            $bloginfoscvalue = !empty($_POST['bloginfosc']) ? $_POST['bloginfosc']:0;
            update_option('bloginfosc', $bloginfoscvalue);
        //////////////////// View Page Identifier ////////////////////
            $viewpageidentifiervalue = !empty($_POST['viewpageidentifier']) ? $_POST['viewpageidentifier']:0;
            update_option('viewpageidentifier', $viewpageidentifiervalue);
    ##########////////// END!!!! NOTHING BELOW THIS LINE //////////##########
            ######## Submitted Changes, Time to Refresh!#######
            echo "<meta http-equiv='refresh' content='0'>";
        }
?>

<html>
<head>
<style>
/*INPUT STYLE HERE*/
</style>
</head>

<body>
    <h1>HamLIT Web Solutions Extensions &amp; Settings</h1>
<form method="post" action="">
<!-- Priority Support Settings -->
<div><br></div>
<div><h3>Priority Support Settings</h3></div>
<div><input type = "checkbox" id = "enablelivechat" name = "enablelivechat" value = "1" <?php if(get_option('enablelivechat') == 1) echo 'checked';?>/> Enable Admin LiveChat Extension </div>
<div><textarea style="display:none" id="litcodesnippet" onclick="this.select()" name="litcodesnippet" style="height:100px;width:400px">
<?php   include ('assets/Admin Live Chat/HamLIT - Admin Live Chat Widget/salesiq.php');  
?>
</textarea></div>
<div><br></div>
<?php 
if (trim(get_option('enablelivechat')) == 1)
    {
        ?>
        <div style="display:block">
         <input type = "checkbox" id = "hidechat" name = "hidechat" value = "1" <?php if(get_option('hidechat') == 1) echo 'checked';?>/> Hide Chat widget (Chat Widget Disabled, Visitor Tracking Enabled)</div>
         <?php
    } 
?>
<!-- Remove Dashboard Widgets -->
<div><br></div>
<div><h3>Remove Dashboard Widgets</h3></div>
<div><input type = "checkbox" id = "removedashwidgets" name = "removedashwidgets" value = "1" <?php if(get_option('removedashwidgets') == 1) echo 'checked';?>/> Remove Dashboard Widgets </div>
<!-- Stop Smoothness Jquery -->
<div><br></div>
<div><h3>Stop Smoothness Jquery</h3></div>
<div><input type = "checkbox" id = "stopsmoothnessjquery" name = "stopsmoothnessjquery" value = "1" <?php if(get_option('stopsmoothnessjquery') == 1) echo 'checked';?>/> Stop Smoothness Jquery </div>
<!-- Add Extra Profile Fields -->
<div><br></div>
<div><h3>Add Extra Profile Fields</h3></div>
<div><input type = "checkbox" id = "addextraprofilefields" name = "addextraprofilefields" value = "1" <?php if(get_option('addextraprofilefields') == 1) echo 'checked';?>/> Add Extra Profile Fields </div>
<!-- Change My Account Sections -->
<div><br></div>
<div><h3>Change My Account Sections</h3></div>
<div><input type = "checkbox" id = "changemyaccountsections" name = "changemyaccountsections" value = "1" <?php if(get_option('changemyaccountsections') == 1) echo 'checked';?>/> Change My Account Sections </div>
<!-- Custom Core CSS -->
<div><br></div>
<div><h3>Custom Core CSS</h3></div>
<div><input type = "checkbox" id = "customcorecss" name = "customcorecss" value = "1" <?php if(get_option('customcorecss') == 1) echo 'checked';?>/> Custom Core CSS </div>
<!-- Disable Users -->
<div><br></div>
<div><h3>Disable Users</h3></div>
<div><input type = "checkbox" id = "disableusers" name = "disableusers" value = "1" <?php if(get_option('disableusers') == 1) echo 'checked';?>/> Disable Users </div>
<!-- Display User ID -->
<div><br></div>
<div><h3>Display User ID</h3></div>
<div><input type = "checkbox" id = "displayuserid" name = "displayuserid" value = "1" <?php if(get_option('displayuserid') == 1) echo 'checked';?>/> Display User ID </div>
<!-- Hide Title -->
<div><br></div>
<div><h3>Hide Title</h3></div>
<div><input type = "checkbox" id = "hidetitle" name = "hidetitle" value = "1" <?php if(get_option('hidetitle') == 1) echo 'checked';?>/> Hide Title </div>
<!-- Only Sell To -->
<div><br></div>
<div><h3>Only Sell To</h3></div>
<div><input type = "checkbox" id = "onlysellto" name = "onlysellto" value = "1" <?php if(get_option('onlysellto') == 1) echo 'checked';?>/> Only Sell To </div>
<!-- Remove Post Count -->
<div><br></div>
<div><h3>Remove Post Count</h3></div>
<div><input type = "checkbox" id = "removepostcount" name = "removepostcount" value = "1" <?php if(get_option('removepostcount') == 1) echo 'checked';?>/> Remove Post Count </div>
<!-- Remove Product Count -->
<div><br></div>
<div><h3>Remove Product Count</h3></div>
<div><input type = "checkbox" id = "removeproductcount" name = "removeproductcount" value = "1" <?php if(get_option('removeproductcount') == 1) echo 'checked';?>/> Remove Product Count </div>
<!-- Remove Profile Fields -->
<div><br></div>
<div><h3>Remove Profile Fields</h3></div>
<div><input type = "checkbox" id = "removeprofilefields" name = "removeprofilefields" value = "1" <?php if(get_option('removeprofilefields') == 1) echo 'checked';?>/> Remove Profile Fields </div>
<!-- Remove Screen Options -->
<div><br></div>
<div><h3>Remove Screen Options</h3></div>
<div><input type = "checkbox" id = "removescreenoptions" name = "removescreenoptions" value = "1" <?php if(get_option('removescreenoptions') == 1) echo 'checked';?>/> Remove Screen Options </div>
<!-- Remove Update Notification and Nags -->
<div><br></div>
<div><h3>Remove Update Notification and Nags</h3></div>
<div><input type = "checkbox" id = "removenags" name = "removenags" value = "1" <?php if(get_option('removenags') == 1) echo 'checked';?>/> Remove Update Notification and Nags </div>
<!-- Remove WP Version Footer -->
<div><br></div>
<div><h3>Remove WP Version Footer</h3></div>
<div><input type = "checkbox" id = "removeversionfooter" name = "removeversionfooter" value = "1" <?php if(get_option('removeversionfooter') == 1) echo 'checked';?>/> Remove WP Version Footer </div>
<!-- Rename Sidebar Items -->
<div><br></div>
<div><h3>Rename Sidebar Items</h3></div>
<div><input type = "checkbox" id = "renamesidebaritems" name = "renamesidebaritems" value = "1" <?php if(get_option('renamesidebaritems') == 1) echo 'checked';?>/> Rename Sidebar Items </div>
<!-- Change Woocommerce Columns -->
<div><br></div>
<div><h3>Change Woocommerce Columns</h3></div>
<div><input type = "checkbox" id = "changewoocolumns" name = "changewoocolumns" value = "1" <?php if(get_option('changewoocolumns') == 1) echo 'checked';?>/> Change Woocommerce Columns </div>
<!-- Defer Javascript -->
<div><br></div>
<div><h3>Defer JS</h3></div>
<div><input type = "checkbox" id = "deferjs" name = "deferjs" value = "1" <?php if(get_option('deferjs') == 1) echo 'checked';?>/> Defer Javascript </div>
<!-- HamLIT Site Health -->
<div><br></div>
<div><h3>Site Health</h3></div>
<div><input type = "checkbox" id = "hamlitsitehealth" name = "hamlitsitehealth" value = "1" <?php if(get_option('hamlitsitehealth') == 1) echo 'checked';?>/> Customize Site Health Checks </div>
<!-- BlogInfo Shortcode -->
<div><br></div>
<div><h3>BlogInfo Shortcode</h3></div>
<div><input type = "checkbox" id = "bloginfosc" name = "bloginfosc" value = "1" <?php if(get_option('bloginfosc') == 1) echo 'checked';?>/> Allows use of "bloginfo" to post as shortcode. (ex. [bloginfo info='name'] displays Site Title)</div>
<!-- View Page Identifier -->
<div><br></div>
<div><h3>View Page Identifier</h3></div>
<div><input type = "checkbox" id = "viewpageidentifier" name = "viewpageidentifier" value = "1" <?php if(get_option('viewpageidentifier') == 1) echo 'checked';?>/> View Page Identifier</div>
<!-- Submit Button -->
<div><br></div>
         <input type="submit" name="litsubmit" class="button button-primary" value="Save Changes"/>
</form>
</body>
</html>


