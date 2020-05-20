<?php
####### Post when LITSubmit is Clicked #######
if(isset($_POST['litsubmit'])){
        //////////////////// Only Sell To ////////////////////
            $onlyselltovalue = !empty($_POST['onlysellto']) ? $_POST['onlysellto']:0;
            update_option('onlysellto', $onlyselltovalue);
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
    <h1>Only Sell To</h1>
<form method="post" action="">
<!-- Only Sell To -->
<div><br></div>
<div><input type = "checkbox" id = "onlysellto" name = "onlysellto" value = "1" <?php if(get_option('onlysellto') == 1) echo 'checked';?>/> Only Sell To </div>
<!-- Submit Button -->
<div><br></div>
         <input type="submit" name="litsubmit" class="button button-primary" value="Save Changes"/>
</form>
</body>
</html>