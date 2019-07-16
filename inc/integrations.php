<?php
/**
* Require files that deal with various plugin integrations.
*
* @package Rosa
*/

/**
 * Load PixCare compatibility file.
 */
require get_template_directory() . '/inc/integrations/pixcare.php';

/**
 * Load Starter Content compatibility file.
 */
require get_template_directory() . '/inc/integrations/pixcare_starter_content.php';

/**
 * Load PixCodes compatibility file
 * https://wordpress.org/plugins/pixcodes/
 */
if ( class_exists( 'WpGradeShortcodes' ) ) {
	require get_template_directory() . '/inc/integrations/pixcodes.php';
}

if ( class_exists( 'Vc_Manager' ) ) {
	require get_template_directory() . '/inc/integrations/visual-composer.php';
}

if ( class_exists( 'FLBuilderModel' ) ) {
	require get_template_directory() . '/inc/integrations/beaver-builder.php';
}

if ( function_exists( 'siteorigin_panels_render' ) ) {
	require get_template_directory() . '/inc/integrations/page-builder-siteorigin.php';
}

if ( class_exists( 'Gridable' ) ) {
	require get_template_directory() . '/inc/integrations/gridable.php';
}

if ( class_exists( 'Elementor\Plugin' ) ) {
	require get_template_directory() . '/inc/integrations/elementor.php';
}
