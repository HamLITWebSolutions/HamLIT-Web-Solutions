<?php
####### Post when LITSubmit is Clicked #######
if(isset($_POST['litsubmit'])){
        //////////////////// Rename Sidebar Items ////////////////////
            $renamesidebaritemsvalue = !empty($_POST['renamesidebaritems']) ? $_POST['renamesidebaritems']:0;
            update_option('renamesidebaritems', $renamesidebaritemsvalue);
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
<div><input type = "checkbox" id = "renamesidebaritems" name = "renamesidebaritems" value = "1" <?php if(get_option('renamesidebaritems') == 1) echo 'checked';?>/> Rename Sidebar Items </div>
<!-- Submit Button -->
<div><br></div>
         <input type="submit" name="litsubmit" class="button button-primary" value="Save Changes"/>
</form>
</body>
</html>