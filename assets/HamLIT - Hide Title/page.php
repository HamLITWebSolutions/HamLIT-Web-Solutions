<?php
####### Post when LITSubmit is Clicked #######
if(isset($_POST['litsubmit'])){
        //////////////////// Hide Title ////////////////////
            $hamlit_hidetitlevalue = !empty($_POST['hamlit_hidetitle']) ? $_POST['hamlit_hidetitle']:0;
            update_option('hamlit_hidetitle', $hamlit_hidetitlevalue);
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
<div><input type = "checkbox" id = "hamlit_hidetitle" name = "hamlit_hidetitle" value = "1" <?php if(get_option('hamlit_hidetitle') == 1) echo 'checked';?>/> Hide Title </div>
<!-- Submit Button -->
<div><br></div>
         <input type="submit" name="litsubmit" class="button button-primary" value="Save Changes"/>
</form>
</body>
</html>