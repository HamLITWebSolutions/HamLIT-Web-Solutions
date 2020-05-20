<?php
####### Post when LITSubmit is Clicked #######
if(isset($_POST['litsubmit'])){
        //////////////////// Change Woocommerce Columns ////////////////////
            $hamlit_changewoocolumnsvalue = !empty($_POST['hamlit_changewoocolumns']) ? $_POST['hamlit_changewoocolumns']:0;
            update_option('hamlit_changewoocolumns', $hamlit_changewoocolumnsvalue);
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
    <h1>Change Woocommerce Columns</h1>
<form method="post" action="">
<!-- Change Woocommerce Columns -->
<div><br></div>
<div><input type = "checkbox" id = "hamlit_changewoocolumns" name = "hamlit_changewoocolumns" value = "1" <?php if(get_option('hamlit_changewoocolumns') == 1) echo 'checked';?>/> Change Woocommerce Columns </div>
<!-- Submit Button -->
<div><br></div>
         <input type="submit" name="litsubmit" class="button button-primary" value="Save Changes"/>
</form>
</body>
</html>


