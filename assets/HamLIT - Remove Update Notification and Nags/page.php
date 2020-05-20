<?php
####### Post when LITSubmit is Clicked #######
if(isset($_POST['litsubmit'])){
        /////////////// Remove Update Notification and Nags ///////////////
            $removenagsvalue = !empty($_POST['removenags']) ? $_POST['removenags']:0;
            update_option('removenags', $removenagsvalue);
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
<div><input type = "checkbox" id = "removenags" name = "removenags" value = "1" <?php if(get_option('removenags') == 1) echo 'checked';?>/> Remove Update Notification and Nags </div>
<!-- Submit Button -->
<div><br></div>
         <input type="submit" name="litsubmit" class="button button-primary" value="Save Changes"/>
</form>
</body>
</html>