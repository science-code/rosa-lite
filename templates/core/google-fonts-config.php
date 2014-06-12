<?php defined( 'ABSPATH' ) or die;
/* @var array $families */

/**
 * Overwrite families with those served by redux ... they can give us fonts with all-styles included
 */
if ( class_exists('ReduxFramework_customizer_typography')) {
	global $redux;
	$typography = new ReduxFramework_customizer_typography( null, null, $redux );

	// on customizer overwrite options
	// @TODO Refactor this somewhere else
//	if ( isset( $_POST['customized'] ) ) {
//		$typography2 = false;
//		foreach ( $fonts_array  as $font ) {
//			if ( wpgrade::customizer_option_exists( $font ) ) {
//				$this_font = wpgrade::get_customizer_option( $font );
//				$typography2 = new ReduxFramework_customizer_typography( null, $this_font, $redux );
//			}
//		}
//		$test = 'test';
//	}


	$families = $typography->makeGoogleWebfontString( $typography->parent->typography ); ?>
	<script type="text/javascript">
		WebFont.load({ google: {families: [<?php echo ($families); ?>]} });
	</script>
<?php } else { // legacy compatibility ?>
	<script type="text/javascript">
		WebFont.load({
			google: {families: <?php echo json_encode($families); ?>}
		});
	</script>
<?php }
