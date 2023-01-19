<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://philveloso.com
 * @since      1.0.0
 *
 * @package    Copy_Remote_Posts
 * @subpackage Copy_Remote_Posts/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Copy_Remote_Posts
 * @subpackage Copy_Remote_Posts/includes
 * @author     Phil Veloso <phil@inquisitive.solutions>
 */
class Copy_Remote_Posts_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'copy-remote-posts',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
