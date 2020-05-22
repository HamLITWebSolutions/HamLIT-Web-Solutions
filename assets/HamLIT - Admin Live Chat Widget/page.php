<?php
// Set Options for Function
$options = [ 
    'hamlit_enablelivechat',
        'hamlit_loginchat',
        'hamlit_hidechat',
];

// Post Changes to Options when Submitted
if(isset($_POST['litsubmit'])){
            foreach ( $options as $option ){
            $checkboxvalue = !empty($_POST[$option]) ? $_POST[$option]:0;
	        update_option( $option, stripslashes($checkboxvalue) );
        }

    ##########////////// END!!!! NOTHING BELOW THIS LINE //////////##########
            ######## Submitted Changes, Display Success Message #######
            echo '<div class="updated"> <p>' . __('Success: Your changes have been saved.') . '</p> </div>';
            #echo "<meta http-equiv='refresh' content='0'>";
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
<!--<div><br></div>
         <input type="submit" name="litsubmit" class="button button-primary" value="Save Changes"/> -->
</form>
</body>
</html>


