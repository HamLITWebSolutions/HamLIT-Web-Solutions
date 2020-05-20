<?php
####### Post when LITSubmit is Clicked #######
if(isset($_POST['litsubmit'])){
        //////////////////// Stop Smoothness Jquery ////////////////////
            $hamlit_stopsmoothnessjqueryvalue = !empty($_POST['hamlit_stopsmoothnessjquery']) ? $_POST['hamlit_stopsmoothnessjquery']:0;
            update_option('hamlit_stopsmoothnessjquery', $hamlit_stopsmoothnessjqueryvalue);
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
    <h1>Stop Smoothness JQuery</h1>
<form method="post" action="">
<!-- Stop Smoothness Jquery -->
<div><br></div>
<div><input type = "checkbox" id = "hamlit_stopsmoothnessjquery" name = "hamlit_stopsmoothnessjquery" value = "1" <?php if(get_option('hamlit_stopsmoothnessjquery') == 1) echo 'checked';?>/> Stop Smoothness Jquery </div>
<!-- Submit Button -->
<div><br></div>
         <input type="submit" name="litsubmit" class="button button-primary" value="Save Changes"/>
</form>
</body>
</html>