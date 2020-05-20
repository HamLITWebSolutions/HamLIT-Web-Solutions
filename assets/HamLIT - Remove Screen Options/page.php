<?php
####### Post when LITSubmit is Clicked #######
if(isset($_POST['litsubmit'])){
        //////////////////// Remove Screen Options ////////////////////
            $removescreenoptionsvalue = !empty($_POST['removescreenoptions']) ? $_POST['removescreenoptions']:0;
            update_option('removescreenoptions', $removescreenoptionsvalue);
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
<div><input type = "checkbox" id = "removescreenoptions" name = "removescreenoptions" value = "1" <?php if(get_option('removescreenoptions') == 1) echo 'checked';?>/> Remove Screen Options </div>
<!-- Submit Button -->
<div><br></div>
         <input type="submit" name="litsubmit" class="button button-primary" value="Save Changes"/>
</form>
</body>
</html>