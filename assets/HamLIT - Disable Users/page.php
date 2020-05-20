<?php
####### Post when LITSubmit is Clicked #######
if(isset($_POST['litsubmit'])){
        //////////////////// Disable Users ////////////////////
            $disableusersvalue = !empty($_POST['disableusers']) ? $_POST['disableusers']:0;
            update_option('disableusers', $disableusersvalue);
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
    <h1>Disable Users</h1>
<form method="post" action="">
<!-- Disable Users -->
<div><br></div>
<div><input type = "checkbox" id = "disableusers" name = "disableusers" value = "1" <?php if(get_option('disableusers') == 1) echo 'checked';?>/> Disable Users </div>
<!-- Submit Button -->
<div><br></div>
         <input type="submit" name="litsubmit" class="button button-primary" value="Save Changes"/>
</form>
</body>
</html>