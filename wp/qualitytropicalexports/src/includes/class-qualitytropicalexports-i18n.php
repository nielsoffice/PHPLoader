<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://nielsoffice197227997.wordpress.com/
 * @since      1.0.0
 *
 * @package    Qualitytropicalexports
 * @subpackage Qualitytropicalexports/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Qualitytropicalexports
 * @subpackage Qualitytropicalexports/includes
 * @author     nielsoffice <nielsoffice.wordpress.php@gmail.com>
 */
class Qualitytropicalexports_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'qualitytropicalexports',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . 'src/languages/'
		);

	}



}
