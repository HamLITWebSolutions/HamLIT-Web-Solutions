<?php
####### Post when LITSubmit is Clicked #######
if(isset($_POST['litsubmit'])){
        //////////////////// Remove Profile Fields ////////////////////
            $removeprofilefieldsvalue = !empty($_POST['removeprofilefields']) ? $_POST['removeprofilefields']:0;
            update_option('removeprofilefields', $removeprofilefieldsvalue);
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
    <h1>Remove Profile Fields</h1>
<form method="post" action="">
<!-- Remove Profile Fields -->
<div><br></div>
<div><input type = "checkbox" id = "removeprofilefields" name = "removeprofilefields" value = "1" <?php if(get_option('removeprofilefields') == 1) echo 'checked';?>/> Remove Profile Fields </div>
<!-- Submit Button -->
<div><br></div>
         <input type="submit" name="litsubmit" class="button button-primary" value="Save Changes"/>
</form>
</body>
</html>