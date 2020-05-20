<?php
####### Post when CleanHamLITDB is Clicked #######
if(isset($_POST['hamlit_cleandb'])){
    // Clean Up Database and Reset all Settings //
        delete_option('hamlit_addextraprofilefields');
        delete_option('hamlit_enablelivechat');
            delete_option('hamlit_loginchat');
            delete_option('hamlit_hidechat');
        delete_option('hamlit_changemyaccountsections');
        delete_option('hamlit_changewoocolumns');
        delete_option('hamlit_customcorecss');
        delete_option('hamlit_deferjs');
        delete_option('hamlit_disableusers');
        delete_option('hamlit_displayuserid');
        delete_option('hamlit_hidetitle');
        delete_option('hamlit_onlysellto');
        delete_option('hamlit_removedashwidgets');
        delete_option('hamlit_removepostcount');
        delete_option('hamlit_removeproductcount');
        delete_option('hamlit_removeprofilefields');
        delete_option('hamlit_removescreenoptions');
        delete_option('hamlit_removenags');
        delete_option('hamlit_removeversionfooter');
        delete_option('hamlit_renamesidebaritems');
        delete_option('hamlit_sitehealth');
        delete_option('hamlit_bloginfosc');
        delete_option('hamlit_stopsmoothnessjquery');
        delete_option('hamlit_viewpageidentifier');
    // Old Clean Up Database and Reset all Settings //
        delete_option('addextraprofilefields');
        delete_option('enablelivechat');
            delete_option('loginchat');
            delete_option('hidechat');
        delete_option('changemyaccountsections');
        delete_option('changewoocolumns');
        delete_option('customcorecss');
        delete_option('deferjs');
        delete_option('disableusers');
        delete_option('displayuserid');
        delete_option('hidetitle');
        delete_option('onlysellto');
        delete_option('removedashwidgets');
        delete_option('removepostcount');
        delete_option('removeproductcount');
        delete_option('removeprofilefields');
        delete_option('removescreenoptions');
        delete_option('removenags');
        delete_option('removeversionfooter');
        delete_option('renamesidebaritems');
        delete_option('hamlitsitehealth');
        delete_option('bloginfosc');
        delete_option('stopsmoothnessjquery');
        delete_option('viewpageidentifier');
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
    <h1>HamLIT Web Solutions Extension &amp; Settings</h1>
<form method="post" action="">
<!-- Clean Database Button -->
<div><br></div>
    <h3>Clean Database and Reset all HamLIT Plugin Settings</h3>

         <input type="submit" name="hamlit_cleandb" class="button button-primary" value="Clean Database"/>
</form>
</body>
</html>