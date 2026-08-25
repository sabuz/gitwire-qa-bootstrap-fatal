<?php
/**
 * Plugin Name: Gitwire QA Bootstrap Fatal Plugin
 * Description: Fatals immediately on activation (undefined function call). Tests gitwire's handling of WP core's own activation sandbox. Safe to delete.
 * Version: 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// gitwire_qa_this_function_does_not_exist();
