<?php
// Set Options for Function
$options = [ 
    'hamlit_viewpageidentifier'
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
    <h1>View Page Identifier</h1>
<form method="post" action="">
<!-- View Page Identifier -->
<div><br></div>
<div><input type = "checkbox" id = "hamlit_viewpageidentifier" name = "hamlit_viewpageidentifier" value = "1" <?php if(get_option('hamlit_viewpageidentifier') == 1) echo 'checked';?>/> View Page Identifier</div>
<!-- Submit Button -->
<div><br></div>
         <input type="submit" name="litsubmit" class="button button-primary" value="Save Changes"/>
</form>
</body>
</html>