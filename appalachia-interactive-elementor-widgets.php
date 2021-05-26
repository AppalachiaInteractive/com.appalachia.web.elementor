<?php
/**
 * Appalachia Interactive Elementor Widgets WordPress Plugin
 *
 * @package AppalachiaInteractiveElementorWidgets
 *
 * Plugin Name: Appalachia Interactive Elementor Widgets
 * Description: Custom Elementor widgets for Appalachia Interactive website
 * Plugin URI:  https://github.com/AppalachiaInteractive/com.appalachia.web.elementor
 * Version:     1.0.0
 * Author:      Appalachia Interactive
 * Author URI:  https://appalachiainteractive.com
 * Text Domain: appalachia-interactive-elementor-widgets
 */

define( 'APPALACHIA_INTERACTIVE_ELEMENTOR_WIDGETS', __FILE__ );

/**
 * Include the Appalachia_Interactive_Elementor_Widgets class.
 */
require plugin_dir_path( APPALACHIA_INTERACTIVE_ELEMENTOR_WIDGETS ) . 'class-appalachia-interactive-elementor-widgets.php';
