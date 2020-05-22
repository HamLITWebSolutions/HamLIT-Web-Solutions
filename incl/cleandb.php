<?php
####### Post when CleanHamLITDB is Clicked #######
if(isset($_POST['hamlit_cleandb'])){
        // Call Variables //
        $dir = ABSPATH . 'wp-content/plugins/HamLIT-Web-Solutions/';
        require "$dir/incl/optionvariables.php";
        // Clean Up Database and Reset all Settings //
        foreach ( $options as $option ) {
	        delete_option( $option );
	        delete_site_option( $option );
        }
        ##////////// END!!!! NOTHING BELOW THIS LINE //////////##
        ######## Submitted Changes, Display Success Message#######
        echo '<div class="updated"> <p>' . __('The database has been cleaned and all settings have been reset.') . '</p> </div>';
        #echo "<meta http-equiv='refresh' content='0'>";
}
           
?>

<form method="post" action="">
<!-- Clean Database Button -->
<div><br></div>
    <h3>Clean Database and Reset all HamLIT Plugin Settings</h3>
         <input type="submit" name="hamlit_cleandb" class="button button-primary" value="Clean Database"/>
<div><br></div>
</form>