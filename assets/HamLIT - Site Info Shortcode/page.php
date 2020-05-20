<?php
####### Post when LITSubmit is Clicked #######
if(isset($_POST['litsubmit'])){
        //////////////////// BlogInfo Short Code ////////////////////
            $hamlit_bloginfoscvalue = !empty($_POST['hamlit_bloginfosc']) ? $_POST['hamlit_bloginfosc']:0;
            update_option('hamlit_bloginfosc', $hamlit_bloginfoscvalue);
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
    <h1>HamLIT Site Info Shortcode</h1>
<form method="post" action="">
<!-- BlogInfo Shortcode -->
<div><br></div>
<div><input type = "checkbox" id = "hamlit_bloginfosc" name = "hamlit_bloginfosc" value = "1" <?php if(get_option('hamlit_bloginfosc') == 1) echo 'checked';?>/> Allows use of "bloginfo" to post as shortcode. (ex. [bloginfo info='name'] displays Site Title)</div>
<!-- Submit Button -->
<div><br></div>
         <input type="submit" name="litsubmit" class="button button-primary" value="Save Changes"/>
</form>
</body>
</html>