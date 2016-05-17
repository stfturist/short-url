<?php

/**
 * Plugin Name: Short url
 * Description: Short url to the permalink, like Simple Address in EPiServer.
 * Author: Fredrik Forsmo
 * Author URI: http://forsmo.me/
 * Version: 2.0.3
 * Plugin URI: https://github.com/frozzare/short-url
 */

// Load short url files.
require_once __DIR__ . '/src/class-short-url.php';
require_once __DIR__ . '/src/functions.php';

/**
 * Load Short Url plugin.
 */
add_action( 'plugins_loaded', function () {
	return Short_Url::instance();
} );
