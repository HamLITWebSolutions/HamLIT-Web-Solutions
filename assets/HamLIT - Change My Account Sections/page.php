<?php
####### Post when LITSubmit is Clicked #######
if(isset($_POST['litsubmit'])){
        //////////////////// Change My Account Sections ////////////////////
            $changemyaccountsectionsvalue = !empty($_POST['changemyaccountsections']) ? $_POST['changemyaccountsections']:0;
            update_option('changemyaccountsections', $changemyaccountsectionsvalue);
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
    <h1>Change My Account Sections</h1>
<form method="post" action="">
<!-- Change My Account Sections -->
<div><br></div>
<div><input type = "checkbox" id = "changemyaccountsections" name = "changemyaccountsections" value = "1" <?php if(get_option('changemyaccountsections') == 1) echo 'checked';?>/> Change My Account Sections </div>
<!-- Submit Button -->
<div><br></div>
         <input type="submit" name="litsubmit" class="button button-primary" value="Save Changes"/>
</form>
</body>
</html>


