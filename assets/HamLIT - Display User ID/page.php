<?php
####### Post when LITSubmit is Clicked #######
if(isset($_POST['litsubmit'])){
        //////////////////// Display User ID ////////////////////
            $displayuseridvalue = !empty($_POST['displayuserid']) ? $_POST['displayuserid']:0;
            update_option('displayuserid', $displayuseridvalue);
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
<div><input type = "checkbox" id = "displayuserid" name = "displayuserid" value = "1" <?php if(get_option('displayuserid') == 1) echo 'checked';?>/> Display User ID </div>
<!-- Submit Button -->
<div><br></div>
         <input type="submit" name="litsubmit" class="button button-primary" value="Save Changes"/>
</form>
</body>
</html>