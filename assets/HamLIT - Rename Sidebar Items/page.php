<?php
####### Post when LITSubmit is Clicked #######
if(isset($_POST['litsubmit'])){
        //////////////////// Rename Sidebar Items ////////////////////
            $hamlit_renamesidebaritemsvalue = !empty($_POST['hamlit_renamesidebaritems']) ? $_POST['hamlit_renamesidebaritems']:0;
            update_option('hamlit_renamesidebaritems', $hamlit_renamesidebaritemsvalue);
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
    <h1>Rename Sidebar Items</h1>
<form method="post" action="">
<!-- Rename Sidebar Items -->
<div><br></div>
<div><input type = "checkbox" id = "hamlit_renamesidebaritems" name = "hamlit_renamesidebaritems" value = "1" <?php if(get_option('hamlit_renamesidebaritems') == 1) echo 'checked';?>/> Rename Sidebar Items </div>
<!-- Submit Button -->
<div><br></div>
         <input type="submit" name="litsubmit" class="button button-primary" value="Save Changes"/>
</form>
</body>
</html>