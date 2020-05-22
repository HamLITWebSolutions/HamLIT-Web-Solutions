<?php
// Set Options for Function
$options = [ 
    'hamlit_livechat',
        'hamlit_livechatcode',
        'hamlit_hidelivechat',
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
    <h1>Live Chat Settings</h1>
<form method="post" action="">
<!-- Priority Support Settings -->
<div><br></div>
<div><input type = "checkbox" id = "hamlit_livechat" name = "hamlit_livechat" value = "1" <?php if(get_option('hamlit_livechat') == 1) echo 'checked';?>/> Enable Live Chat Extension </div>
<div><br></div>
<!-- If Admin Live Chat Enabled, Give Option to Hide Widget and Enable on Login Screen -->
<?php 
if (trim(get_option('hamlit_livechat')) == 1)
    {
        ?>
         <div style="display:block">
             <textarea id="hamlit_livechatcode" onclick="this.select()" name="hamlit_livechatcode" style="height:200px;width:400px"><?php  echo htmlentities(get_option('hamlit_livechatcode')) ?></textarea></div>
                  <div><br></div>
        <div style="display:block">
         <input type = "checkbox" id = "hamlit_hidelivechat" name = "hamlit_hidelivechat" value = "1" <?php if(get_option('hamlit_hidelivechat') == 1) echo 'checked';?>/> ZOHO SALESIQ ONLY: Hide Chat widget (Chat Widget Disabled, Visitor Tracking Enabled)</div>
         <?php
    } 
?>
<!-- Submit Button -->
<div><br></div>
         <input type="submit" name="litsubmit" class="button button-primary" value="Save Changes"/>
</form>
</body>
</html>


