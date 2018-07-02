<?php

/*
 * Plugin Name: Mature
 * Plugin URI: https://wordpress.org/plugins/mature
 * Decription: Checks the youtube channel visitors counter
 * Version: 0.1.0
 * Author: Olgun Özoktaş
 * Author URI: http://olgunozoktas.com
 * Text Domain: mature
 * Domain Path: /plugins
 */

//Exit if accessed directly
if(!defined('ABSPATH')){
    exit;
}

//Load Script
require_once(plugin_dir_path(__FILE__).'/include/mature-scripts.php');

//Load Class
require_once(plugin_dir_path(__FILE__).'/include/mature-class.php');

//Register Widget
function register_mature(){
    register_widget('Mature_Widget'); //class'ı çağıracak
}

// Hook in function
add_action('widgets_init', 'register_mature');