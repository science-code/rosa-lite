<?php

// ensure REQUEST_PROTOCOL is defined
if ( ! defined('REQUEST_PROTOCOL')) {
	if (is_ssl()) {
		define( 'REQUEST_PROTOCOL', 'https:' );
	} else {
		define( 'REQUEST_PROTOCOL', 'http:' );
	}
}

// Loads the theme's translated strings
load_theme_textdomain( 'rosa', get_template_directory() . '/languages' );

if ( ! function_exists(' rosa_theme_setup' ) ) {
	function rosa_theme_setup () {
		//add theme support for RSS feed links automatically generated in the head section
		add_theme_support( 'automatic-feed-links' );

		//tell galleries and captions to behave nicely and use HTML5 markup
		add_theme_support( 'html5', array( 'gallery', 'caption' ) );

		// Add theme support for Featured Images
		add_theme_support( 'post-thumbnails' );

		$sizes = rosa::confoption( 'thumbnails_sizes' );

		if ( ! empty( $sizes ) ) {
			foreach ( $sizes as $size_key => $values ) {

				$width = 0;
				if ( isset( $values['width'] ) ) {
					$width = $values['width'];
				}

				$height = 0;
				if ( isset( $values['height'] ) ) {
					$height = $values['height'];
				}

				$hard_crop = false;
				if ( isset( $values['hard_crop'] ) ) {
					$hard_crop = $values['hard_crop'];
				}

				add_image_size( $size_key, $width, $height, $hard_crop );

			}
		}

		// add theme support for post formats
		$post_formats = rosa::confoption( 'post-formats', array() );
		if ( ! empty( $post_formats ) ) {
			add_theme_support( 'post-formats', $post_formats );
		}

		/*
		 * Register custom menus.
		 * This works on 3.1+
		 */
		add_theme_support( 'menus' );
		$menus = rosa::confoption( 'import_nav_menu' );
		foreach ( $menus as $key => $value ) {
			register_nav_menu( $key, $value );
		}

		add_editor_style( 'editor-style.css' );

		add_filter( 'upload_mimes', 'rosa_callback_custom_upload_mimes' );
	}
	add_action( 'after_setup_theme', 'rosa_theme_setup' );
}

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function rosa_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'rosa_content_width', 960, 0 );
}

add_action( 'after_setup_theme', 'rosa_content_width', 0 );

/// load assets
if ( ! function_exists( 'rosa_load_assets' ) ) {
	function rosa_load_assets(){

		// Styles
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}

		if ( is_rtl() ) {
			wp_enqueue_style( 'rtl-support', rosa::resourceuri( 'css/localization/rtl.css' ) );
		}

		if (is_404()) {
			wp_enqueue_style( rosa::shortname() . '-404-style', get_template_directory_uri() . '/assets/css/pages/404.css', array(), time(), 'all' );
		}

		// @todo maybe load from customify???

//		wp_enqueue_script( 'google-webfonts', REQUEST_PROTOCOL . '//fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,900|Cabin:400,700,400italic,700italic|Herr+Von+Muellerhoff' );

		wp_enqueue_style( 'wpgrade-main-style', get_template_directory_uri() . '/style.css', array(), rosa::cachebust_string( rosa::themefilepath( 'style.css' ) ) );

		// Scripts

		wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/assets/js/vendor/modernizr.min.js', array( 'jquery' ) );
		wp_enqueue_script( 'webfont-script', REQUEST_PROTOCOL . '//ajax.googleapis.com/ajax/libs/webfont/1.5.3/webfont.js', array( 'jquery' ) );

		wp_enqueue_script( 'wpgrade-plugins', get_template_directory_uri() . '/assets/js/plugins.js', array( 'jquery', 'modernizr' ), null, true );
		wp_enqueue_script( 'wpgrade-main-scripts', get_template_directory_uri() . '/assets/js/main.js', array( 'wpgrade-plugins' ), rosa::cachebust_string( rosa::themefilepath( 'assets/js/main.js' ) ), true );


		wp_enqueue_script( 'addthis-api', REQUEST_PROTOCOL . '//s7.addthis.com/js/300/addthis_widget.js#async=1', array( 'jquery' ), null, true );
		wp_enqueue_script( 'google-maps-api', REQUEST_PROTOCOL . '//maps.google.com/maps/api/js?sensor=false&amp;language=en', array( 'jquery' ), null, true );

		wp_localize_script( 'wpgrade-main-scripts', 'ajaxurl', admin_url( 'admin-ajax.php' ) );
		// localize the theme_name, we are gonna need it
		wp_localize_script( 'wpgrade-main-scripts', 'theme_name', rosa::shortname() );
		wp_localize_script( 'wpgrade-main-scripts', 'objectl10n', array(
			'tPrev'             => __( 'Previous (Left arrow key)', 'rosa' ),
			'tNext'             => __( 'Next (Right arrow key)', 'rosa' ),
			'tCounter'          => __( 'of', 'rosa' ),
			'infscrLoadingText' => "",
			'infscrReachedEnd'  => "",
		) );
	}
	add_action( 'wp_enqueue_scripts', 'rosa_load_assets' );
}


if ( ! function_exists( 'rosa_load_admin_assets' ) ) {

	function rosa_load_admin_assets() {

		wp_enqueue_script( 'rosa_admin_general_script', get_template_directory_uri().'/assets/js/admin/admin-general.js', array('jquery') );

		$translation_array = array
		(
			'import_failed' => __( 'The import didn\'t work completely! <br/> Check out the errors given. You might want to try reloading the page and then try again.', 'rosa'),
			'import_confirm' => __( 'Importing the demo data will overwrite your current Theme Options settings. Proceed anyway?', 'rosa'),
			'import_phew' => __( 'Phew...that was a hard one!', 'rosa'),
			'import_success_note' => __( 'The demo data was imported without a glitch! Awesome! <br/><br/><b style="color:red">Remember to update the passwords and roles of imported users. </b><br/><br/><i>We will now reload the page so you can see the brand new data!</i>', 'rosa'),
			'import_all_done' => __( "All done!", 'rosa'),
			'import_working' => __( "Working...", 'rosa'),
			'import_widgets_failed' => __( "The setting up of the demo widgets failed...", 'rosa'),
			'import_widgets_error' => __( 'The setting up of the demo widgets failed</i><br />(The script returned the following message', 'rosa'),
			'import_widgets_done' => __( 'Finished setting up the demo widgets...', 'rosa'),
			'import_theme_options_failed' => __( "The importing of the theme options has failed...", 'rosa'),
			'import_theme_options_error' => __( 'The importing of the theme options has failed</i><br />(The script returned the following message', 'rosa'),
			'import_theme_options_done' => __( 'Finished importing the demo theme options...', 'rosa'),
			'import_posts_failed' => __( "The importing of the theme options has failed...", 'rosa'),
			'import_posts_step' => __( 'Importing posts | Step', 'rosa'),
			'import_error' =>  __( "Error:", 'rosa'),
			'import_try_reload' =>  __( "You can reload the page and try again.", 'rosa'),
		);
		wp_localize_script( 'rosa_admin_general_script', 'rosa_admin_js_texts', $translation_array );
	}
}
add_action( 'admin_enqueue_scripts', 'rosa_load_admin_assets' );

// Media Handlers
// --------------


/**
 * Make sure wordpress allows our mime types.
 * @return array
 */
function rosa_callback_custom_upload_mimes( $existing_mimes = null ) {
	if ( $existing_mimes === null ) {
		$existing_mimes = array();
	}

	$existing_mimes['mp3']  = 'audio/mpeg3';
	$existing_mimes['oga']  = 'audio/ogg';
	$existing_mimes['ogv']  = 'video/ogg';
	$existing_mimes['mp4a'] = 'audio/mp4';
	$existing_mimes['mp4']  = 'video/mp4';
	$existing_mimes['weba'] = 'audio/webm';
	$existing_mimes['webm'] = 'video/webm';

	// allow svg files only for admins
	if ( is_admin() ) {
		//and some more
		$existing_mimes['svg'] = 'image/svg+xml';
	}

	return $existing_mimes;
}

require get_template_directory() . '/inc/classes/util.php';
require get_template_directory() . '/inc/classes/rosa.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * For admin also
 */
if ( is_admin() ) {
	require get_template_directory() . '/inc/extras_admin.php';
}

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * MB string functions for when the MB library is not available
 */
require get_template_directory() . '/inc/mb_compat.php';

require get_template_directory() . '/inc/integrations.php';
require get_template_directory() . '/inc/customify.php';
require get_template_directory() . '/inc/required-plugins/required-plugins.php';



//Automagical updates
function wupdates_check_vexXr( $transient ) {
	// Nothing to do here if the checked transient entry is empty
	if ( empty( $transient->checked ) ) {
		return $transient;
	}

	// Let's start gathering data about the theme
	// First get the theme directory name (the theme slug - unique)
	$slug = basename( get_template_directory() );
	$http_args = array (
		'body' => array(
			'slug' => $slug,
			'url' => home_url(), //the site's home URL
			'version' => 0,
			'data' => null, //no optional data is sent by default
		)
	);

	// If the theme has been checked for updates before, get the checked version
	if ( isset( $transient->checked[ $slug ] ) && $transient->checked[ $slug ] ) {
		$http_args['body']['version'] = $transient->checked[ $slug ];
	}

	// Use this filter to add optional data to send
	// Make sure you return an associative array - do not encode it in any way
	$optional_data = apply_filters( 'wupdates_call_data_request', $http_args['body']['data'], $slug, $http_args['body']['version'] );

	// Encrypting optional data with private key, just to keep your data a little safer
	// You should not edit the code bellow
	$optional_data = json_encode( $optional_data );
	$w=array();$re="";$s=array();$sa=md5(str_rot13('0aad90f61af7dca48f99ac9f6fc7ac4219649a20'));
	$l=strlen($sa);$d=str_rot13($optional_data);$ii=-1;
	while(++$ii<256){$w[$ii]=ord(substr($sa,(($ii%$l)+1),1));$s[$ii]=$ii;} $ii=-1;$j=0;
	while(++$ii<256){$j=($j+$w[$ii]+$s[$ii])%255;$t=$s[$j];$s[$ii]=$s[$j];$s[$j]=$t;}
	$l=strlen($d);$ii=-1;$j=0;$k=0;
	while(++$ii<$l){$j=($j+1)%256;$k=($k+$s[$j])%255;$t=$w[$j];$s[$j]=$s[$k];$s[$k]=$t;
		$x=$s[(($s[$j]+$s[$k])%255)];$re.=chr(ord($d[$ii])^$x);}
	$optional_data=base64_encode($re);

	// Save the encrypted optional data so it can be sent to the updates server
	$http_args['body']['data'] = $optional_data;

	// Check for an available update
	$raw_response = wp_remote_post( 'https://wupdates.com/wp-json/wup/v1/themes/check_version/vexXr', $http_args );

	// We stop in case we haven't received a proper response
	if ( is_wp_error( $raw_response ) || $raw_response['response']['code'] !== 200 ) {
		return $transient;
	}

	$response = (array) json_decode($raw_response['body']);
	if ( ! empty( $response ) ) {
		// You can use this action to show notifications or take other action
		do_action( 'wupdates_before_response', $response, $transient );
		if ( isset( $response['allow_update'] ) && $response['allow_update'] && isset( $response['transient'] ) ) {
			$transient->response[ $slug ] = (array) $response['transient'];
		}
		do_action( 'wupdates_after_response', $response, $transient );
	}

	return $transient;
}
add_filter( 'pre_set_site_transient_update_themes', 'wupdates_check_vexXr' );

/* Only allow theme updates with a valid Envato purchase code */
function wupdates_add_purchase_code_field_vexXr( $themes ) {
	$output = '';
	// First get the theme directory name (the theme slug - unique)
	$slug = basename( get_template_directory() );
	if ( isset( $themes[ $slug ] ) ) {
		$output .= "<br/><br/>"; //put a little space above

		//get errors so we can show them
		$errors = get_option( $slug . '_wup_errors', array() );
		delete_option( $slug . '_wup_errors' ); //delete existing errors as we will handle them next

		//check if we have a purchase code saved already
		$purchase_code = sanitize_text_field( get_option( $slug . '_wup_purchase_code', '' ) );
		//in case there is an update available, tell the user that it needs a valid purchase code
		if ( empty( $purchase_code ) && $themes[ $slug ]['hasUpdate'] ) {
			$output .= '<div class="notice notice-error notice-alt notice-large">' . __( 'A <strong>valid purchase code</strong> is required for automatic updates.' ) . '</div>';
		}
		//output errors and notifications
		if ( ! empty( $errors ) ) {
			foreach ( $errors as $key => $error ) {
				$output .= '<div class="error"><p>' . wp_kses_post( $error ) . '</p></div>';
			}
		}
		if ( ! empty( $purchase_code ) ) {
			if ( ! empty( $errors ) ) {
				//since there is already a purchase code present - notify the user
				$output .= '<div class="notice notice-warning notice-alt"><p>' . esc_html__( 'Purchase code not updated. We will keep the existing one.' ) . '</p></div>';
			} else {
				//this means a valid purchase code is present and no errors were found
				$output .= '<div class="notice notice-success notice-alt notice-large">' . __( 'Your <strong>purchase code is valid</strong>. Thank you! Enjoy one-click automatic updates.' ) . '</div>';
			}
		}

		$output .= '<form class="wupdates_purchase_code" action="" method="post">' .
		           '<input type="hidden" name="wupdates_pc_theme" value="' . $slug . '" />' .
		           '<input type="text" id="' . sanitize_title( $slug ) . '_wup_purchase_code" name="' . sanitize_title( $slug ) . '_wup_purchase_code"
	            value="' . $purchase_code . '" placeholder="Purchase code ( e.g. 9g2b13fa-10aa-2267-883a-9201a94cf9b5 )" style="width:100%"/>' .
		           '<p class="">' . __( 'Enter your purchase code and <strong>hit return/enter</strong>.' ) . '</p>' .
		           '<p class="theme-description">' .
		           __( 'Find out how to <a href="https://help.market.envato.com/hc/en-us/articles/202822600-Where-Is-My-Purchase-Code-" target="_blank">get your purchase code</a>.' ) .
		           '</p>
			</form>';
	}
	//finally put the markup after the theme tags
	if ( ! isset( $themes[ $slug ]['tags'] ) ) {
		$themes[ $slug ]['tags'] = '';
	}
	$themes[ $slug ]['tags'] .= $output;

	return $themes;
}
add_filter( 'wp_prepare_themes_for_js' ,'wupdates_add_purchase_code_field_vexXr' );

function wupdates_process_purchase_code_vexXr() {
	//in case the user has submitted the purchase code form
	if ( ! empty( $_POST['wupdates_pc_theme'] ) ) {
		$errors = array();
		$slug = sanitize_text_field( $_POST['wupdates_pc_theme'] ); // get the theme's slug
		if ( ! empty( $_POST[ $slug . '_wup_purchase_code' ] ) ) {
			//get the submitted purchase code and sanitize it
			$purchase_code = sanitize_text_field( $_POST[ $slug . '_wup_purchase_code' ] );

			//check if this purchase code represents a sale of the theme
			$http_args = array (
				'body' => array(
					'slug' => $slug, //the theme's slug
					'url' => home_url(), //the site's home URL
					'purchase_code' => $purchase_code,
				)
			);

			//make the call to the purchase code check API
			$raw_response = wp_remote_post( 'https://wupdates.com/wp-json/wup/v1/front/check_envato_purchase_code/vexXr', $http_args );
			// In case the server hasn't responded properly, show error
			if ( is_wp_error( $raw_response ) || $raw_response['response']['code'] !== 200 ) {
				$errors[] = __( 'We are sorry but we couldn\'t connect to the verification server. Please try again later.<span class="hidden">' . $raw_response['body'] . '</span>' );
			} else {
				$response = json_decode( $raw_response['body'], true );
				if ( ! empty( $response ) ) {
					//we will only update the purchase code if it's valid
					//this way we keep existing valid purchase codes
					if ( isset( $response['purchase_code'] ) && 'valid' == $response['purchase_code'] ) {
						//all is good, update the purchase code option
						update_option( $slug . '_wup_purchase_code', $purchase_code );
					} else {
						if ( isset( $response['reason'] ) && ! empty( $response['reason'] ) && 'out_of_support' == $response['reason'] ) {
							$errors[] = esc_html__( 'Your purchase\'s support period has ended. Please extend it to receive automatic updates.' );
						} else {
							$errors[] = esc_html__( 'Could not find a sale with this purchase code. Please double check.' );
						}
					}
				}
			}
		} else {
			//in case the user hasn't entered a purchase code
			$errors[] = esc_html__( 'Please enter a purchase code' );
		}

		if ( count( $errors ) > 0 ) {
			//if we do have errors, save them in the database so we can display them to the user
			update_option( $slug . '_wup_errors', $errors );
		} else {
			//since there are no errors, delete the option
			delete_option( $slug . '_wup_errors' );
		}

		//redirect back to the themes page and open popup
		wp_redirect( add_query_arg( 'theme', $slug ) );
		exit;
	} //@todo should check from time to time or only on the themes.php page if the purchase code is still in it's support period
}
add_action( 'admin_init', 'wupdates_process_purchase_code_vexXr' );

function wupdates_send_purchase_code_vexXr( $optional_data, $slug ) {
	//check if we have a purchase code saved
	$purchase_code = sanitize_text_field( get_option( $slug . '_wup_purchase_code', '' ) );
	if ( ! empty( $purchase_code ) ) {
		if ( null === $optional_data ) { //if there is no optional data, initialize it
			$optional_data = array();
		}
		//add the purchase code to the optional_data so we can check it upon update check
		//if a theme has an Envato item selected, this is mandatory
		$optional_data['envato_purchase_code'] = $purchase_code;
	}
	return $optional_data;
}
add_filter( 'wupdates_call_data_request', 'wupdates_send_purchase_code_vexXr', 10, 2 );

/* End of Envato checkup code */