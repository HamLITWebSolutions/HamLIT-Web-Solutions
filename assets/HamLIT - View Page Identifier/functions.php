<?php

/*
Plugin Name: HamLIT - View Page Identifier
Plugin URI: https://github.com/hamlitwebsolutions/HamLIT-ViewPageIdentifier
Description: Displays page identifier to hook actions to.
Author: HamLIT Web Solutions
Author URI: https://hamlitwebsolutions.com
Version: 1.0.0
License: MIT
License URI: https://opensource.org/licenses/MIT
Text Domain: HamLIT - View Page Identifier
Domain Path: /languages
*/

function enqueue_my_scripts($hook) {
    echo "<p style='text-align:center;'>" .$hook. "</p>";
}
add_action('admin_enqueue_scripts', 'enqueue_my_scripts');