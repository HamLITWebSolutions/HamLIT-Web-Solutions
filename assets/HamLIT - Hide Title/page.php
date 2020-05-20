<?php
####### Post when LITSubmit is Clicked #######
if(isset($_POST['litsubmit'])){
        //////////////////// Hide Title ////////////////////
            $hidetitlevalue = !empty($_POST['hidetitle']) ? $_POST['hidetitle']:0;
            update_option('hidetitle', $hidetitlevalue);
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
    <h1>Hide Title</h1>
<form method="post" action="">
<!-- Hide Title -->
<div><br></div>
<div><input type = "checkbox" id = "hidetitle" name = "hidetitle" value = "1" <?php if(get_option('hidetitle') == 1) echo 'checked';?>/> Hide Title </div>
<!-- Submit Button -->
<div><br></div>
         <input type="submit" name="litsubmit" class="button button-primary" value="Save Changes"/>
</form>
</body>
</html>