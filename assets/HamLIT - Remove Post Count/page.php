<?php
####### Post when LITSubmit is Clicked #######
if(isset($_POST['litsubmit'])){
        //////////////////// Remove Post Count ////////////////////
            $hamlit_removepostcountvalue = !empty($_POST['hamlit_removepostcount']) ? $_POST['hamlit_removepostcount']:0;
            update_option('hamlit_removepostcount', $hamlit_removepostcountvalue);
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
    <h1>Remove Post Count</h1>
<form method="post" action="">
<!-- Remove Post Count -->
<div><br></div>
<div><input type = "checkbox" id = "hamlit_removepostcount" name = "hamlit_removepostcount" value = "1" <?php if(get_option('hamlit_removepostcount') == 1) echo 'checked';?>/> Remove Post Count </div>
<!-- Submit Button -->
<div><br></div>
         <input type="submit" name="litsubmit" class="button button-primary" value="Save Changes"/>
</form>
</body>
</html>