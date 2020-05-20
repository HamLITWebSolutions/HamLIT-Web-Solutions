<?php
####### Post when LITSubmit is Clicked #######
if(isset($_POST['litsubmit'])){
        //////////////////// Display User ID ////////////////////
            $hamlit_displayuseridvalue = !empty($_POST['hamlit_displayuserid']) ? $_POST['hamlit_displayuserid']:0;
            update_option('hamlit_displayuserid', $hamlit_displayuseridvalue);
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
    <h1>Display User ID</h1>
<form method="post" action="">
<!-- Display User ID -->
<div><br></div>
<div><input type = "checkbox" id = "hamlit_displayuserid" name = "hamlit_displayuserid" value = "1" <?php if(get_option('hamlit_displayuserid') == 1) echo 'checked';?>/> Display User ID </div>
<!-- Submit Button -->
<div><br></div>
         <input type="submit" name="litsubmit" class="button button-primary" value="Save Changes"/>
</form>
</body>
</html>