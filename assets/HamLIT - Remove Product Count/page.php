<?php
####### Post when LITSubmit is Clicked #######
if(isset($_POST['litsubmit'])){
        //////////////////// Remove Product Count ////////////////////
            $hamlit_removeproductcountvalue = !empty($_POST['hamlit_removeproductcount']) ? $_POST['hamlit_removeproductcount']:0;
            update_option('hamlit_removeproductcount', $hamlit_removeproductcountvalue);
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
    <h1>Remove Product Count</h1>
<form method="post" action="">
<!-- Remove Product Count -->
<div><br></div>
<div><input type = "checkbox" id = "hamlit_removeproductcount" name = "hamlit_removeproductcount" value = "1" <?php if(get_option('hamlit_removeproductcount') == 1) echo 'checked';?>/> Remove Product Count </div>
<!-- Submit Button -->
<div><br></div>
         <input type="submit" name="litsubmit" class="button button-primary" value="Save Changes"/>
</form>
</body>
</html>