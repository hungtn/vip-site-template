<?php
/**
 * Bootstrap all must-use plugins.
 */

/**
 * List of relative paths to plugin bootstrap files.
 *
 * @var array
 */
$plugins = [
	// 'example-plugin/plugin.php',
];

foreach ( $plugins as $plugin ) {
	$plugin_file = sprintf( '%s/%s', __DIR__, $plugin );

	if ( file_exists( $plugin_file ) ) {
		require_once $plugin_file;
	}
}
