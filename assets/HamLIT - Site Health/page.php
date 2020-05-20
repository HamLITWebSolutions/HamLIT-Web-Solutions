<?php
####### Post when LITSubmit is Clicked #######
if(isset($_POST['litsubmit'])){
        //////////////////// HamLIT Site Health ////////////////////
            $hamlitsitehealthvalue = !empty($_POST['hamlitsitehealth']) ? $_POST['hamlitsitehealth']:0;
            update_option('hamlitsitehealth', $hamlitsitehealthvalue);
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
    <h1>HamLIT Site Health Options</h1>
<form method="post" action="">
<!-- HamLIT Site Health -->
<div><br></div>
<div><input type = "checkbox" id = "hamlitsitehealth" name = "hamlitsitehealth" value = "1" <?php if(get_option('hamlitsitehealth') == 1) echo 'checked';?>/> Customize Site Health Checks </div>
<!-- Submit Button -->
<div><br></div>
         <input type="submit" name="litsubmit" class="button button-primary" value="Save Changes"/>
</form>
</body>
</html>