<?php
####### Post when LITSubmit is Clicked #######
if(isset($_POST['litsubmit'])){
        //////////////////// Custom Core CSS ////////////////////
            $customcorecssvalue = !empty($_POST['customcorecss']) ? $_POST['customcorecss']:0;
            update_option('customcorecss', $customcorecssvalue);
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
    <h1>Custom Core CSS</h1>
<form method="post" action="">
<!-- Custom Core CSS -->
<div><br></div>
<div><input type = "checkbox" id = "customcorecss" name = "customcorecss" value = "1" <?php if(get_option('customcorecss') == 1) echo 'checked';?>/> Custom Core CSS </div>
<!-- Submit Button -->
<div><br></div>
         <input type="submit" name="litsubmit" class="button button-primary" value="Save Changes"/>
</form>
</body>
</html>