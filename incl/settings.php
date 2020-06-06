<?php
//Set Directory for Tab Conents
$dir = ABSPATH . 'wp-content/plugins/HamLIT-Web-Solutions/incl/';
//Set Permission to view page
if ( !current_user_can( 'manage_options' ) )  {
        wp_die( __( 'You do not have sufficient permissions to access this page.' ) ); }
// Get the active tab from the $_GET param
$default_tab = null;
$tab = isset($_GET['tab']) ? $_GET['tab'] : $default_tab;
?>
<!-- Our admin page content should all be inside .wrap -->
<div class="wrap">
    <h1>HamLIT Web Solutions Extension &amp; Settings</h1>
    <nav class="nav-tab-wrapper">
        <!-- First Tab -->
        <a href="?page=HamLIT-Web-Solutions" class="nav-tab <?php if($tab===null):?>nav-tab-active<?php endif; ?>">HamLIT Web Solutions</a>
        <!-- Second Tab -->
        <a href="?page=HamLIT-Web-Solutions&tab=settings" class="nav-tab <?php if($tab==='settings'):?>nav-tab-active<?php endif; ?>">Settings</a>
        <!-- Third Tab -->
        <a href="?page=HamLIT-Web-Solutions&tab=reset" class="nav-tab <?php if($tab==='reset'):?>nav-tab-active<?php endif; ?>">Clean & Reset</a>
    </nav>    

    <div class="tab-content">
        <!-- Start Tabbed Content -->
        <?php switch($tab):
            // First Tab
            default:
                include "$dir/hamlitwebsolutions.php";
                break;
            // Second Tab
            case 'settings':
                include "$dir/simpleoptions.php";
                break;
            // Third Tab
            case 'reset':
                include "$dir/cleandb.php";
                break;
        endswitch; ?>
    </div>
</div>