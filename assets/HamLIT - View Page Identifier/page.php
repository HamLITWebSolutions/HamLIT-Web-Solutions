<?php
####### Post when LITSubmit is Clicked #######
if(isset($_POST['litsubmit'])){
        //////////////////// View Page Identifier ////////////////////
            $viewpageidentifiervalue = !empty($_POST['viewpageidentifier']) ? $_POST['viewpageidentifier']:0;
            update_option('viewpageidentifier', $viewpageidentifiervalue);
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
<div><input type = "checkbox" id = "viewpageidentifier" name = "viewpageidentifier" value = "1" <?php if(get_option('viewpageidentifier') == 1) echo 'checked';?>/> View Page Identifier</div>
<!-- Submit Button -->
<div><br></div>
         <input type="submit" name="litsubmit" class="button button-primary" value="Save Changes"/>
</form>
</body>
</html>