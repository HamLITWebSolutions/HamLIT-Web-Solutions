<?php
####### Post when LITSubmit is Clicked #######
if(isset($_POST['litsubmit'])){
        //////////////////// HamLIT Site Health ////////////////////
            $hamlit_sitehealthvalue = !empty($_POST['hamlit_sitehealth']) ? $_POST['hamlit_sitehealth']:0;
            update_option('hamlit_sitehealth', $hamlit_sitehealthvalue);
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
<div><input type = "checkbox" id = "hamlit_sitehealth" name = "hamlit_sitehealth" value = "1" <?php if(get_option('hamlit_sitehealth') == 1) echo 'checked';?>/> Customize Site Health Checks </div>
<!-- Submit Button -->
<div><br></div>
         <input type="submit" name="litsubmit" class="button button-primary" value="Save Changes"/>
</form>
</body>
</html>