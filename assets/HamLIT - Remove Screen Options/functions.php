<?php

/*
Plugin Name: HamLIT - Remove Screen Options
Plugin URI: https://github.com/hamlitwebsolutions/HamLIT-RemoveScreenOptions
Description: Removes Screen Options Globally
Author: HamLIT Web Solutions
Author URI: https://hamlitwebsolutions.com
Version: 1.0.0
License: MIT
License URI: https://opensource.org/licenses/MIT
Text Domain: HamLIT - Remove Screen Options
Domain Path: /languages
*/
#Removes Screen Options
add_filter('screen_options_show_screen', '__return_false');