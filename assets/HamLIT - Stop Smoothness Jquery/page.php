<?php
####### Post when LITSubmit is Clicked #######
if(isset($_POST['litsubmit'])){
        //////////////////// Stop Smoothness Jquery ////////////////////
            $stopsmoothnessjqueryvalue = !empty($_POST['stopsmoothnessjquery']) ? $_POST['stopsmoothnessjquery']:0;
            update_option('stopsmoothnessjquery', $stopsmoothnessjqueryvalue);
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
<div><input type = "checkbox" id = "stopsmoothnessjquery" name = "stopsmoothnessjquery" value = "1" <?php if(get_option('stopsmoothnessjquery') == 1) echo 'checked';?>/> Stop Smoothness Jquery </div>
<!-- Submit Button -->
<div><br></div>
         <input type="submit" name="litsubmit" class="button button-primary" value="Save Changes"/>
</form>
</body>
</html>