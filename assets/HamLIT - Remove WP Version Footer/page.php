<?php
####### Post when LITSubmit is Clicked #######
if(isset($_POST['litsubmit'])){
        //////////////////// Remove WP Version Footer ////////////////////
            $hamlit_removeversionfootervalue = !empty($_POST['hamlit_removeversionfooter']) ? $_POST['hamlit_removeversionfooter']:0;
            update_option('hamlit_removeversionfooter', $hamlit_removeversionfootervalue);
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
<div><input type = "checkbox" id = "hamlit_removeversionfooter" name = "hamlit_removeversionfooter" value = "1" <?php if(get_option('hamlit_removeversionfooter') == 1) echo 'checked';?>/> Remove WP Version Footer </div>
<!-- Submit Button -->
<div><br></div>
         <input type="submit" name="litsubmit" class="button button-primary" value="Save Changes"/>
</form>
</body>
</html>