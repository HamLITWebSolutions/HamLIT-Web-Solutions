<?php
// Set Options for Function
$options = [ 
    'hamlit_removenags',
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
    <h1>Remove Update Notification and Nags</h1>
<form method="post" action="">
<!-- Remove Update Notification and Nags -->
<div><br></div>
<div><input type = "checkbox" id = "hamlit_removenags" name = "hamlit_removenags" value = "1" <?php if(get_option('hamlit_removenags') == 1) echo 'checked';?>/> Remove Update Notification and Nags </div>
<!-- Submit Button -->
<div><br></div>
         <input type="submit" name="litsubmit" class="button button-primary" value="Save Changes"/>
</form>
</body>
</html>