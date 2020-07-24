<?php
/**
 * Plugin Name: Giphy Block by Jetpack
 * Plugin URI: https://jetpack.com
 * Description: Bring the power of gifs to your self-hosted WordPress.
 * Author: Automattic
 * Version: 1.0-alpha
 * Author URI: https://jetpack.com
 * License: GPL2+
 * Text Domain: jetpack
 * Domain Path: /languages/
 * Requires at least: 5.4
 * Requires PHP: 5.6
 *
 * @package jetpack-gif-block
 */

require __DIR__ . '/vendor/autoload_packages.php';

add_action( 'plugins_loaded', array( 'Jetpack_Gutenberg', 'init' ) );

add_action( 'init', function() {
	// error_log("sample gif block initialized");
} );