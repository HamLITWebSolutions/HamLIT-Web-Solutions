<?php
####### Post when LITSubmit is Clicked #######
if(isset($_POST['litsubmit'])){
        //////////////////// Change Woocommerce Columns ////////////////////
            $changewoocolumnsvalue = !empty($_POST['changewoocolumns']) ? $_POST['changewoocolumns']:0;
            update_option('changewoocolumns', $changewoocolumnsvalue);
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
<div><input type = "checkbox" id = "changewoocolumns" name = "changewoocolumns" value = "1" <?php if(get_option('changewoocolumns') == 1) echo 'checked';?>/> Change Woocommerce Columns </div>
<!-- Submit Button -->
<div><br></div>
         <input type="submit" name="litsubmit" class="button button-primary" value="Save Changes"/>
</form>
</body>
</html>


