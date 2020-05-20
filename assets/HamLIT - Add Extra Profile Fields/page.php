<?php
####### Post when LITSubmit is Clicked #######
if(isset($_POST['litsubmit'])){
        //////////////////// Add Extra Profile Fields ////////////////////
            $addextraprofilefieldsvalue = !empty($_POST['addextraprofilefields']) ? $_POST['addextraprofilefields']:0;
            update_option('addextraprofilefields', $addextraprofilefieldsvalue);
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
    <h1>Add Extra Profile Fields</h1>
<form method="post" action="">
<!-- Add Extra Profile Fields -->
<div><br></div>
<div><input type = "checkbox" id = "addextraprofilefields" name = "addextraprofilefields" value = "1" <?php if(get_option('addextraprofilefields') == 1) echo 'checked';?>/> Add Extra Profile Fields </div>
<!-- Submit Button -->
<div><br></div>
         <input type="submit" name="litsubmit" class="button button-primary" value="Save Changes"/>
</form>
</body>
</html>


