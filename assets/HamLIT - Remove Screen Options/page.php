<?php
####### Post when LITSubmit is Clicked #######
if(isset($_POST['litsubmit'])){
        //////////////////// Remove Screen Options ////////////////////
            $hamlit_removescreenoptionsvalue = !empty($_POST['hamlit_removescreenoptions']) ? $_POST['hamlit_removescreenoptions']:0;
            update_option('hamlit_removescreenoptions', $hamlit_removescreenoptionsvalue);
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
    <h1>Remove Screen Options</h1>
<form method="post" action="">
<!-- Remove Screen Options -->
<div><br></div>
<div><input type = "checkbox" id = "hamlit_removescreenoptions" name = "hamlit_removescreenoptions" value = "1" <?php if(get_option('hamlit_removescreenoptions') == 1) echo 'checked';?>/> Remove Screen Options </div>
<!-- Submit Button -->
<div><br></div>
         <input type="submit" name="litsubmit" class="button button-primary" value="Save Changes"/>
</form>
</body>
</html>