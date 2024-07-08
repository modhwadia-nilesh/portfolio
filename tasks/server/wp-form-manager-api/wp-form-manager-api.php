<?php

/**
 * Plugin Name:       WP Form Manager API
 * Version:           1.0.0
 * Text Domain:       wp-form-manager-api
 */

// If this file is called directly, abort.
if (!defined('WPINC')) {
	die;
}

/**
 * Including required files for custom functionality.
 **/

// Including the file that contains custom post type definitions.
require plugin_dir_path(__FILE__) . 'includes/cpt.php';

// Including the file that contains functions for adding and managing custom metaboxes.
require plugin_dir_path(__FILE__) . 'includes/metabox-functions.php';

// Including the file that contains functions for the WordPress Form Manager API.
require plugin_dir_path(__FILE__) . 'includes/wp-form-manager-api-functions.php';