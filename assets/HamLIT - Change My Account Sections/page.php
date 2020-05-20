<?php
####### Post when LITSubmit is Clicked #######
if(isset($_POST['litsubmit'])){
        //////////////////// Change My Account Sections ////////////////////
            $hamlit_changemyaccountsectionsvalue = !empty($_POST['hamlit_changemyaccountsections']) ? $_POST['hamlit_changemyaccountsections']:0;
            update_option('hamlit_changemyaccountsections', $hamlit_changemyaccountsectionsvalue);
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
<div><input type = "checkbox" id = "hamlit_changemyaccountsections" name = "hamlit_changemyaccountsections" value = "1" <?php if(get_option('hamlit_changemyaccountsections') == 1) echo 'checked';?>/> Change My Account Sections </div>
<!-- Submit Button -->
<div><br></div>
         <input type="submit" name="litsubmit" class="button button-primary" value="Save Changes"/>
</form>
</body>
</html>


