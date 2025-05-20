<?php

/**
 * Main plugin file for the Mason Test plugin
 */

/**
 * Plugin Name:       Mason WordPress: Mason Test Plugin
 * Author:            Jan Macario
 * Plugin URI:        https://github.com/mason-webmaster/gmuw-wordpress-plugin-mason-test
 * Description:       Mason WordPress plugin used for testing purposes.
 * Version:           1.4
 */


// Exit if this file is not called directly.
	if (!defined('WPINC')) {
		die;
	}

// Set up auto-updates
	require 'plugin-update-checker/plugin-update-checker.php';
	$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
	'https://github.com/mason-webmaster/gmuw-wordpress-plugin-mason-test/',
	__FILE__,
	'gmuj-wordpress-plugin-mason-test'
	);

// Include files
	// Branding
		include('php/fnsBranding.php');
	// Admin menu
		include('php/admin-menu.php');
	// Admin page
		include('php/admin-page.php');
