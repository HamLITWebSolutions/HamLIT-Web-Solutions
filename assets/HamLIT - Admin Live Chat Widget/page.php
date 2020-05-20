<?php
####### Post when LITSubmit is Clicked #######
if(isset($_POST['litsubmit'])){
        //////////////////// Priority Support Settings ////////////////////
            ####### Enable Admin Live Chat Checkbox #######
            $enablelivechatvalue = !empty($_POST['enablelivechat']) ? $_POST['enablelivechat']:0;
            update_option('enablelivechat', $enablelivechatvalue);
            ####### Hide Chat Checkbox #######
            $hidechatvalue = !empty($_POST['hidechat']) ? $_POST['hidechat']:0;
            update_option('hidechat', $hidechatvalue);
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
    <h1>Priority Support Settings</h1>
<form method="post" action="">
<!-- Priority Support Settings -->
<div><br></div>
<div><input type = "checkbox" id = "enablelivechat" name = "enablelivechat" value = "1" <?php if(get_option('enablelivechat') == 1) echo 'checked';?>/> Enable Admin LiveChat Extension </div>
<div><br></div>
<!-- If Admin Live Chat Enabled, Give Option to Hide Widget -->
<?php 
if (trim(get_option('enablelivechat')) == 1)
    {
        ?>
        <div style="display:block">
         <input type = "checkbox" id = "hidechat" name = "hidechat" value = "1" <?php if(get_option('hidechat') == 1) echo 'checked';?>/> Hide Chat widget (Chat Widget Disabled, Visitor Tracking Enabled)</div>
         <?php
    } 
?>
<!-- Submit Button -->
<div><br></div>
         <input type="submit" name="litsubmit" class="button button-primary" value="Save Changes"/>
</form>
</body>
</html>


