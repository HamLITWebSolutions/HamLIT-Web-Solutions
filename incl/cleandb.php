<?php
//Check to see if DB was just cleaned, if so, display message.
if (trim(get_option('hamlit_dbcleaned')) == 'cleaned') {
        // Display message
        echo '<div class="notice notice-success is-dismissible"> <p>' . __('The database has been cleaned and all settings have been reset.') . '</p> </div>';
        // Remove database indicator
        delete_option('hamlit_dbcleaned');
}

//Clean db when button is pressed, then refresh the page.
if(isset($_POST['hamlit_cleandb'])){
        // Call Variables
        $dir = ABSPATH . 'wp-content/plugins/HamLIT-Web-Solutions/incl/';
        require "$dir/optionvariables.php";
        // Clean Up Database and Reset all Settings
        foreach ( $options as $option ) {
	        delete_option( $option );
	        delete_site_option( $option );
        }
        // Tell database that it is now cleaned with database indicator
        add_option('hamlit_dbcleaned','cleaned');
        // Refresh page
        echo "<meta http-equiv='refresh' content='0'>";
}
?>
<!-- Clean Database Button -->
<form method="post" action="">
<div><br></div>
    <h3>Clean Database and Reset all HamLIT Plugin Settings</h3>
         <input type="submit" name="hamlit_cleandb" class="button button-primary" value="Clean Database"/>
<div><br></div>
</form>