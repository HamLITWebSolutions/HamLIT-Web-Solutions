<?php
####### Post when LITSubmit is Clicked #######
if(isset($_POST['litsubmit'])){
        /////////////// Remove Update Notification and Nags ///////////////
            $hamlit_removenagsvalue = !empty($_POST['hamlit_removenags']) ? $_POST['hamlit_removenags']:0;
            update_option('hamlit_removenags', $hamlit_removenagsvalue);
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
    <h1>Remove Update Notification and Nags</h1>
<form method="post" action="">
<!-- Remove Update Notification and Nags -->
<div><br></div>
<div><input type = "checkbox" id = "hamlit_removenags" name = "hamlit_removenags" value = "1" <?php if(get_option('hamlit_removenags') == 1) echo 'checked';?>/> Remove Update Notification and Nags </div>
<!-- Submit Button -->
<div><br></div>
         <input type="submit" name="litsubmit" class="button button-primary" value="Save Changes"/>
</form>
</body>
</html>