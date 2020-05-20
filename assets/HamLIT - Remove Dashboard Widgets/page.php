<?php
####### Post when LITSubmit is Clicked #######
if(isset($_POST['litsubmit'])){
        //////////////////// Remove Dashboard Widgets ////////////////////
            $removedashwidgetsvalue = !empty($_POST['removedashwidgets']) ? $_POST['removedashwidgets']:0;
            update_option('removedashwidgets', $removedashwidgetsvalue);
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
    <h1>Remove Dashboard Widgets</h1>
<form method="post" action="">
<!-- Remove Dashboard Widgets -->
<div><br></div>
<div><input type = "checkbox" id = "removedashwidgets" name = "removedashwidgets" value = "1" <?php if(get_option('removedashwidgets') == 1) echo 'checked';?>/> Remove Dashboard Widgets </div>
<!-- Submit Button -->
<div><br></div>
         <input type="submit" name="litsubmit" class="button button-primary" value="Save Changes"/>
</form>
</body>
</html>