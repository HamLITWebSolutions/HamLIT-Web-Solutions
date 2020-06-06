<?php 
$dir = ABSPATH . 'wp-content/plugins/HamLIT-Web-Solutions/incl/';
?>
<html>
<head>
<style>
/*INPUT STYLE HERE*/
</style>
</head>
<?php settings_errors(); ?>
<body>
<form method="post" action="options.php">
    <?php settings_fields( 'hamlit_simpleoptions_group' ); ?>
    <table class="form-table">
<!-- Table Start -->
    <!-- First Section -->
        <tr valign="top">
            <th scope="row" colspan="2">
                <h3 style="text-decoration: underline;">HamLIT Settings:</h3>
             </th>
        </tr>
        <?php include "$dir/groups/HamLIT.php";?>
    <!-- Second Section -->
        <tr valign="top">
            <th scope="row" colspan="2"><hr>
                <h3 style="text-decoration: underline;">Core Settings:</h3>
             </th>
        </tr>
        <?php include "$dir/groups/core.php";?>
    <!-- Third Section -->
        <tr valign="top">
            <th scope="row" colspan="2"><hr>
                <h3 style="text-decoration: underline;">Integration Settings:</h3>
             </th>
        </tr>
        <?php include "$dir/groups/integration.php";?>
    <!-- Fourth Section -->
        <tr valign="top">
            <th scope="row" colspan="2"><hr>
                <h3 style="text-decoration: underline;">Woocommerce Settings:</h3>
             </th>
        </tr>
        <?php include "$dir/groups/woocommerce.php";?>
<!-- Table End -->
    </table>
<?php submit_button();?>
</form>
</body>
</html>