<?php
####### Post when LITSubmit is Clicked #######
if(isset($_POST['litsubmit'])){
        //////////////////// Defer Javascript ////////////////////
            $hamlit_deferjsvalue = !empty($_POST['hamlit_deferjs']) ? $_POST['hamlit_deferjs']:0;
            update_option('hamlit_deferjs', $hamlit_deferjsvalue);
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
    <h1>Defer Javascript</h1>
<form method="post" action="">
<!-- Defer Javascript -->
<div><br></div>
<div><input type = "checkbox" id = "hamlit_deferjs" name = "hamlit_deferjs" value = "1" <?php if(get_option('hamlit_deferjs') == 1) echo 'checked';?>/> Defer Javascript </div>
<!-- Submit Button -->
<div><br></div>
         <input type="submit" name="litsubmit" class="button button-primary" value="Save Changes"/>
</form>
</body>
</html>