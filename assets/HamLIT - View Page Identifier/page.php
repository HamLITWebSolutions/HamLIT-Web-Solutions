<?php
####### Post when LITSubmit is Clicked #######
if(isset($_POST['litsubmit'])){
        //////////////////// View Page Identifier ////////////////////
            $hamlit_viewpageidentifiervalue = !empty($_POST['hamlit_viewpageidentifier']) ? $_POST['hamlit_viewpageidentifier']:0;
            update_option('hamlit_viewpageidentifier', $hamlit_viewpageidentifiervalue);
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
    <h1>View Page Identifier</h1>
<form method="post" action="">
<!-- View Page Identifier -->
<div><br></div>
<div><input type = "checkbox" id = "hamlit_viewpageidentifier" name = "hamlit_viewpageidentifier" value = "1" <?php if(get_option('hamlit_viewpageidentifier') == 1) echo 'checked';?>/> View Page Identifier</div>
<!-- Submit Button -->
<div><br></div>
         <input type="submit" name="litsubmit" class="button button-primary" value="Save Changes"/>
</form>
</body>
</html>