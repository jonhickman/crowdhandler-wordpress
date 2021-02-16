<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://www.crowdhandler.com/
 * @since             1.0.0
 * @package           Crowdhandler
 *
 * @wordpress-plugin
 * Plugin Name:       CrowdHandler™ Virtual Waiting Room - Protect your Website
 * Plugin URI:        https://www.crowdhandler.com/
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            CROWDHANDLER LTD
 * Author URI:        https://www.crowdhandler.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       crowdhandler
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if (!defined('WPINC')) {
	die;
}

define('CROWDHANDLER_PLUGIN_BASE_PATH', plugin_dir_path(__FILE__));
define('CROWDHANDLER_PLUGIN_BASE_URL', plugin_dir_url(__FILE__));

define('CROWDHANDLER_PLUGIN_INDEX_FILE_PATH', ABSPATH . 'index.php');
define('CROWDHANDLER_PLUGIN_INDEX_COPY_FILE_PATH', ABSPATH . 'wp-index.php');
