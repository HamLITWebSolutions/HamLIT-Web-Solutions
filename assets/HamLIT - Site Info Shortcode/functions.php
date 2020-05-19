<?php

/*
Plugin Name: HamLIT - Site Info Shortcode
Plugin URI: https://github.com/hamlitwebsolutions/HamLIT-SiteInfoShortcode
Description: Allows you to insert site info into text by using a shortcode. Example [bloginfo info='name']
Author: HamLIT Web Solutions
Author URI: https://hamlitwebsolutions.com
Version: 1.0.0
License: MIT
License URI: https://opensource.org/licenses/MIT
Text Domain: HamLIT - Site Info Shortcode
Domain Path: /languages
*/
add_shortcode('bloginfo', function($atts) {

   $atts = shortcode_atts(array('filter'=>'', 'info'=>''), $atts, 'bloginfo');

   $infos = array(
     'name', 'description',
     'wpurl', 'url', 'pingback_url',
     'admin_email', 'charset', 'version', 'html_type', 'language',
     'atom_url', 'rdf_url','rss_url', 'rss2_url',
     'comments_atom_url', 'comments_rss2_url',
   );

   $filter = in_array(strtolower($atts['filter']), array('raw', 'display'), true)
     ? strtolower($atts['filter'])
     : 'display';

   return in_array($atts['info'], $infos, true) ? get_bloginfo($atts['info'], $filter) : '';
});