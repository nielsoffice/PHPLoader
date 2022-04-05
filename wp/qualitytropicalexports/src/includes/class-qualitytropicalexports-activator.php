<?php

 namespace \PHPAutoloader\QTE\includes;

 use PHPAutoloader\QTE\Classes\GSPostType;

/**
 * Fired during plugin activation
 *
 * @link       https://nielsoffice197227997.wordpress.com/
 * @since      1.0.0
 *
 * @package    Qualitytropicalexports
 * @subpackage Qualitytropicalexports/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Qualitytropicalexports
 * @subpackage Qualitytropicalexports/includes
 * @author     nielsoffice <nielsoffice.wordpress.php@gmail.com>
 */
class Qualitytropicalexports_Activator Extends GSPostType {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {

		parent::__construct();

	}

}
