<?php
/*
   Plugin Name: JS for WP Likes Example (React)
   Version: 1.0.0
   Author: Zac Gordon
   Author URI: https://zacgordon.com
   Description: An example plugin for learning React in WordPress
   Text Domain: jsforwplikesreact
   License: GPLv3
*/


// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
  die;
}

define( 'WPPLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'WPPLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'WPPLUGIN_FILE', __FILE__ );

include( plugin_dir_path( __FILE__ ) . 'includes/enqueue-scripts.php');
include( plugin_dir_path( __FILE__ ) . 'includes/register-meta.php');
include( plugin_dir_path( __FILE__ ) . 'includes/rest-api.php');

