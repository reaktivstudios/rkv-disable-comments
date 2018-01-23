<?php
/**
 * Plugin Name: ReaktivStudios Disable Comments
 * Description: Completely disables comments so that there are no references to comments on the site or dashboard.
 * Version: 0.1.0
 * Author: Reaktiv Studios
 * License: GPL-2.0+
 *
 * @version 0.1.0
 * @package rkv-disable-comments
 */

define( 'RKV_DC_PATH', plugin_dir_path( __FILE__ ) );

require_once BISK_DC_PATH . 'inc/class-rkv-disable-comments.php';

add_action( 'init', array( Rkv_Disable_Comments::get_instance(), 'init' ) );
