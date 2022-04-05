<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://nielsoffice197227997.wordpress.com/
 * @since             1.0.0
 * @package           Qualitytropicalexports
 *
 * @wordpress-plugin
 * Plugin Name:       qualitytropicalexports
 * Plugin URI:        qualitytropicalexports
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            nielsoffice
 * Author URI:        https://nielsoffice197227997.wordpress.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       qualitytropicalexports
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

 require_once plugin_dir_path( __FILE__ ) . 'src/app/PHPAutoloader.php';

	// Parent Folder
	use \PHPAutoloader\QTE\RequestClass;
	use \PHPAutoloader\QTE\system\PHPClass;
	use \PHPAutoloader\QTE\system\DataClass; 

function niesloffice_sublevel_menu() 
{
   
   add_submenu_page(
	   'edit.php',  // Post Menu
	   'NielsOffice-Title',
	   'NielsOffice-Menu',
	   'manage_options',
	   'nielsoffice-slug',
	   'nielsoffice_display_page'
   );
   
}
add_action( 'admin_menu', 'niesloffice_sublevel_menu' );

function nielsoffice_display_page()
{
	// Parent Folder
	$RequestClass = new RequestClass();
	echo "<br />";
	echo  $RequestClass->getRequestClass();

	// Sub folder
	echo "<br />";
	echo PHPClass::PHPAutoloader();

	// Sub folder
	$DataClass    = new DataClass();
	echo "<br />"; 
	echo $DataClass->getRequest();

	

}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'QUALITYTROPICALEXPORTS_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-qualitytropicalexports-activator.php
 */
function activate_qualitytropicalexports() {
    
	require_once plugin_dir_path( __FILE__ ) . './src/includes/class-qualitytropicalexports-activator.php';

	Qualitytropicalexports_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-qualitytropicalexports-deactivator.php
 */
function deactivate_qualitytropicalexports() {

	require_once plugin_dir_path( __FILE__ ) . './src/includes/class-qualitytropicalexports-deactivator.php';
	Qualitytropicalexports_Deactivator::deactivate();

}

register_activation_hook( __FILE__, 'activate_qualitytropicalexports' );
register_deactivation_hook( __FILE__, 'deactivate_qualitytropicalexports' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . './src/includes/class-qualitytropicalexports.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_qualitytropicalexports() {

	$plugin = new Qualitytropicalexports();
	$plugin->run();

}
run_qualitytropicalexports();
