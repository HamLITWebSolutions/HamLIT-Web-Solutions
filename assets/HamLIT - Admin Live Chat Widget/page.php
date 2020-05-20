<?php
####### Post when LITSubmit is Clicked #######
if(isset($_POST['litsubmit'])){
        //////////////////// Priority Support Settings ////////////////////
            ####### Enable Admin Live Chat Checkbox #######
            $hamlit_enablelivechatvalue = !empty($_POST['hamlit_enablelivechat']) ? $_POST['hamlit_enablelivechat']:0;
            update_option('hamlit_enablelivechat', $hamlit_enablelivechatvalue);
            ####### Login Page Chat Checkbox #######
            $hamlit_loginchatvalue = !empty($_POST['hamlit_loginchat']) ? $_POST['hamlit_loginchat']:0;
            update_option('hamlit_loginchat', $hamlit_loginchatvalue);
            ####### Hide Chat Checkbox #######
            $hamlit_hidechatvalue = !empty($_POST['hamlit_hidechat']) ? $_POST['hamlit_hidechat']:0;
            update_option('hamlit_hidechat', $hamlit_hidechatvalue);
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
<div><input type = "checkbox" id = "hamlit_enablelivechat" name = "hamlit_enablelivechat" value = "1" <?php if(get_option('hamlit_enablelivechat') == 1) echo 'checked';?>/> Enable Admin LiveChat Extension </div>
<div><br></div>
<!-- This is how to add text area and save to options, note that the POST is not set above so enabling this will not save any changes -->
<!-- <div><textarea style="display:none" id="litcodesnippet" onclick="this.select()" name="litcodesnippet" style="height:100px;width:400px">
<?php  # include ('assets/Admin Live Chat/HamLIT - Admin Live Chat Widget/salesiq.php');  
?>
</textarea></div> -->
<!-- If Admin Live Chat Enabled, Give Option to Hide Widget and Enable on Login Screen -->
<?php 
if (trim(get_option('hamlit_enablelivechat')) == 1)
    {
        ?>
         <div style="display:block">
         <input type = "checkbox" id = "hamlit_loginchat" name = "hamlit_loginchat" value = "1" <?php if(get_option('hamlit_loginchat') == 1) echo 'checked';?>/> Enable Chat Widget on  Login Screen (In case login help is needed).</div>
                  <div><br></div>
        <div style="display:block">
         <input type = "checkbox" id = "hamlit_hidechat" name = "hamlit_hidechat" value = "1" <?php if(get_option('hamlit_hidechat') == 1) echo 'checked';?>/> Hide Chat widget (Chat Widget Disabled, Visitor Tracking Enabled)</div>
         <?php
    } 
?>
<!-- Submit Button -->
<div><br></div>
         <input type="submit" name="litsubmit" class="button button-primary" value="Save Changes"/>
</form>
</body>
</html>


