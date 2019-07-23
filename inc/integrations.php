<?php
/**
* Require files that deal with various plugin integrations.
*
* @package Rosa Lite
*/

/**
 * Load PixCodes compatibility file
 * https://wordpress.org/plugins/pixcodes/
 */
if ( class_exists( 'WpGradeShortcodes' ) ) {
	require get_parent_theme_file_path( '/inc/integrations/pixcodes.php' ); // phpcs:ignore
}

/**
 * Load Gridable compatibility file
 * https://wordpress.org/plugins/gridable/
 */
if ( class_exists( 'Gridable' ) ) {
	require get_parent_theme_file_path( '/inc/integrations/gridable.php' ); // phpcs:ignore
}
