<?php
/**
 *  WP World Builders Plugin
 *
 * @link              http://www.chrispian.com
 * @since             1.0.0
 * @package           ChrispianHBurks\WorldBuilder
 *
 * @wordpress-plugin
 * Plugin Name:       WP World Builder
 * Plugin URI:        http://www.chrispian.com
 * Description:       Plugin for writers, roleplayers and world builders to create, manage and share their world.
 * Version:           1.0.0
 * Author:            Chrispian H. Burks
 * Author URI:        http://www.chrispian.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wp-world-builder
 * Domain Path:       /languages
 *
 *
 */

$autoload = plugin_dir_path( __FILE__ ) . 'vendor/autoload.php';

if ( is_readable( $autoload ) ) {
	require_once $autoload;
}

// If this file is called directly, abort.
defined( 'ABSPATH' ) || die( 'Direct Access Not Permitted.' );

$plugin = new \ChrispianHBurks\WorldBuilder\WorldBuilderPlugin();
$plugin->run();
