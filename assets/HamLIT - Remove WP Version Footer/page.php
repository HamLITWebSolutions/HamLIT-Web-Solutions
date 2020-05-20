<?php
####### Post when LITSubmit is Clicked #######
if(isset($_POST['litsubmit'])){
        //////////////////// Remove WP Version Footer ////////////////////
            $removeversionfootervalue = !empty($_POST['removeversionfooter']) ? $_POST['removeversionfooter']:0;
            update_option('removeversionfooter', $removeversionfootervalue);
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
    <h1>Remove WP Version Footer</h1>
<form method="post" action="">
<!-- Remove WP Version Footer -->
<div><br></div>
<div><input type = "checkbox" id = "removeversionfooter" name = "removeversionfooter" value = "1" <?php if(get_option('removeversionfooter') == 1) echo 'checked';?>/> Remove WP Version Footer </div>
<!-- Submit Button -->
<div><br></div>
         <input type="submit" name="litsubmit" class="button button-primary" value="Save Changes"/>
</form>
</body>
</html>