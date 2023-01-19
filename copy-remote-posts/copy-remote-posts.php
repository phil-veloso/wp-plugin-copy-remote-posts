<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://philveloso.com
 * @since             1.0.0
 * @package           Copy_Remote_Posts
 *
 * @wordpress-plugin
 * Plugin Name:       Copy Remote Posts
 * Plugin URI:        https://github.com/phil-veloso/wp-plugin-copy-remote-posts
 * Description:       This is a description of the plugin.
 * Version:           1.0.0
 * Author:            Phil Veloso
 * Author URI:        https://philveloso.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       copy-remote-posts
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'COPY_REMOTE_POSTS_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-copy-remote-posts-activator.php
 */
function activate_copy_remote_posts() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-copy-remote-posts-activator.php';
	Copy_Remote_Posts_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-copy-remote-posts-deactivator.php
 */
function deactivate_copy_remote_posts() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-copy-remote-posts-deactivator.php';
	Copy_Remote_Posts_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_copy_remote_posts' );
register_deactivation_hook( __FILE__, 'deactivate_copy_remote_posts' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-copy-remote-posts.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_copy_remote_posts() {

	$plugin = new Copy_Remote_Posts();
	$plugin->run();

}
run_copy_remote_posts();
