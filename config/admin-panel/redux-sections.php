<?php

$sections = array();
$debug    = '';

if ( isset( $_GET['debug_mod'] ) && $_GET['debug_mod'] === 'true' ) {
	$debug = 'debug_on';
}

// General Options
// ------------------------------------------------------------------------

$sections[] = array(
	'icon'       => 'icon-database-1',
	'icon_class' => '',
	'title'      => __( 'General', wpgrade::textdomain() ),
	'desc'       => sprintf( '<p class="description">' . __( 'General settings contains options that have a site-wide reach like defining your site dynamics or branding (including logo and other icons).', wpgrade::textdomain() ) . '</p>', wpgrade::themename() ),
	'fields'     => array(
		array(
			'id'       => 'use_smooth_scroll',
			'type'     => 'switch',
			'title'    => __( 'Smooth Scrolling', wpgrade::textdomain() ),
			'subtitle' => __( 'Enable / Disable smooth scrolling.', wpgrade::textdomain() ),
			'default'  => '1'
		),
		array(
			'id'   => 'branding-header-90821',
			'desc' => '<h3>' . __( 'Branding', wpgrade::textdomain() ) . '</h3>',
			'type' => 'info'
		),

		array(
			'id'       => 'main_logo_light',
			'type'     => 'media',
			'title'    => __( 'Main Logo', wpgrade::textdomain() ),
			'subtitle' => __( 'If there is no image uploaded, plain text will be used instead (generated from the site\'s name).', wpgrade::textdomain() ),
		),
        array(
			'id'       => 'use_retina_logo',
			'type'     => 'switch',
			'title'    => __( '2x Retina Logo', wpgrade::textdomain() ),
			'subtitle' => __( 'To be Retina-ready you need to add a 2x size logo image.', wpgrade::textdomain() ),
		),
		array(
            'id'       => 'retina_main_logo_light',
            'type'     => 'media',
            'title'    => __( 'Retina Logo light', wpgrade::textdomain() ),
            'required' => array( 'use_retina_logo', 'equals', 1 )
        ),

        array(
            'id'       => 'main_logo_dark',
            'type'     => 'media',
            'title'    => __( 'Main Logo Inversed', wpgrade::textdomain() ),
        ),
        array(
            'id'       => 'retina_main_logo_dark',
            'type'     => 'media',
            'title'    => __( 'Retina Logo dark', wpgrade::textdomain() ),
            'required' => array( 'use_retina_logo', 'equals', 1 )
        ),
		array(
			'id'       => 'favicon',
			'type'     => 'media',
			'title'    => __( 'Favicon', wpgrade::textdomain() ),
			'subtitle' => __( 'Upload a 16 x 16px image that will be used as a favicon.', wpgrade::textdomain() ),
		),
		array(
			'id'       => 'apple_touch_icon',
			'type'     => 'media',
			'title'    => __( 'Apple Touch Icon', wpgrade::textdomain() ),
			'subtitle' => __( 'You can customize the icon for the Apple touch shortcut to your website. The size of this icon must be 77x77px.', wpgrade::textdomain() )
		),
		array(
			'id'       => 'metro_icon',
			'type'     => 'media',
			'title'    => __( 'Metro Icon', wpgrade::textdomain() ),
			'subtitle' => __( 'The size of this icon must be 144x144px.', wpgrade::textdomain() )
		)
	)
);


// Style Options
// ------------------------------------------------------------------------

$sections[] = array(
	'icon'            => "icon-params",
	'icon_class'      => '',
	'title'           => __( 'Style', wpgrade::textdomain() ),
	'desc'            => '<p class="description">' . __( 'The style options control the general styling of the site, like accent color and Google Web Fonts. You can choose custom fonts for various typography elements with font weight, character set, size and/or line height. You also have a live preview for your chosen fonts.', wpgrade::textdomain() ) . '</p>',
	'customizer_only' => false,
	'fields'          => array(
		array(
			'id'         => 'live-customizer-button' . $debug,
			'title'      => '<a href="' . admin_url( "customize.php" ) . '" class="button button-primary" id="live-customizer-button">
							' . __( 'Access the Live Customizer', wpgrade::textdomain() ) . '
						</a>',
			'type'       => 'info',
			'customizer' => array()
		),
		array(
			'id'         => 'customizer_title',
			'title'      => '<h1>' . __( 'Customizer', wpgrade::textdomain() ) . '</h1><p>Use the controls below to change fonts, colors, sizes and other styling options.</p>',
			'type'       => 'customizer_info',
			'customizer' => array()
		),
		array(
			'id'         => 'colors_title',
			'title'      => '<h3>' . __( 'Colors', wpgrade::textdomain() ) . '</h3>',
			'type'       => 'customizer_info',
			'customizer' => array()
		),
		array(
			'id'         => 'main_color',
			'type'       => 'color',
			'title'      => __( 'Accent Color', wpgrade::textdomain() ),
			'subtitle'   => __( 'Use the color picker to change the main color of the site to match your brand color.', wpgrade::textdomain() ),
			'default'    => '#c59d5f',
			'validate'   => 'color',
			'compiler'   => true,
			'customizer' => array(
				'transport' => 'postMessage',
				'css_rules' => array(
					'color'            => array(
						'selector' => "	a, a:hover, .nav--main a:hover, .headline__secondary, .separator--line-flower,
										.tabs__nav a.current, .tabs__nav a:hover, .btn.btn--text, .btn--text.comments_add-comment,
										.comments_add-comment.read-more-button, .form-submit .btn--text#comment-submit,
										.form-submit #comment-submit.read-more-button, .btn--text.wpcf7-form-control.wpcf7-submit,
										.wpcf7-form-control.wpcf7-submit.read-more-button, .btn--text.otreservations-submit,
										.otreservations-submit.read-more-button, .widget_tag_cloud a.btn--text, .widget_tag_cloud a.read-more-button, .btn.read-more-button,
										a:hover > .pixcode--icon, .widget a:hover, blockquote, .meta-list a.btn:hover,
										.meta-list a.comments_add-comment:hover, .meta-list .form-submit a#comment-submit:hover,
										.form-submit .meta-list a#comment-submit:hover, .meta-list a.wpcf7-form-control.wpcf7-submit:hover,
										.meta-list a.otreservations-submit:hover, .meta-list .widget_tag_cloud a:hover, .widget_tag_cloud .meta-list a:hover, .btn.btn--text:hover,
										.article__content a:not([class]), .article__content a:hover:not([class]):hover,
										.article__header .article__headline .headline__description .star"
					),
					'background-color' => array(
						'selector' => ".btn--primary, .comments_add-comment, .form-submit #comment-submit, .btn:hover, .wpcf7-form-control.wpcf7-submit:hover",
					),
					'border-color'     => array(
						'selector' => ".tabs__nav a.current, .tabs__nav a:hover, .btn.btn--text, .btn--text.comments_add-comment, .comments_add-comment.read-more-button,
						.form-submit .btn--text#comment-submit, .form-submit #comment-submit.read-more-button,
						.btn--text.wpcf7-form-control.wpcf7-submit, .wpcf7-form-control.wpcf7-submit.read-more-button,
						.btn--text.otreservations-submit, .otreservations-submit.read-more-button,
						.widget_tag_cloud a.btn--text, .widget_tag_cloud a.read-more-button, .btn.read-more-button, blockquote, .article__content a:not([class])",
					),
					'outline-color'    => array(
						'selector' => ".test",
					),
				)
			)
		),
		array(
			'id'         => 'text_color',
			'type'       => 'color',
			'title'      => __( 'Text Color', wpgrade::textdomain() ),
			'default'    => '#515150',
			'validate'   => 'color',
			'compiler'   => true,
			'customizer' => array(
				'transport' => 'postMessage',
				'css_rules' => array(
					'color'        => array(
						'selector' => " body, 
										.up-link"
					),
					'border-color' => array(
						'selector' => ".up-link:before"
					)
				)
			)
		),
		array(
			'id'         => 'headings_color',
			'type'       => 'color',
			'title'      => __( 'Headings color', wpgrade::textdomain() ),
			'default'    => '#262526',
			'validate'   => 'color',
			'compiler'   => true,
			'customizer' => array(
				'transport' => 'postMessage',
				'css_rules' => array(
					'color' => array(
						'selector' => "h1, h2, h3, h4, h5, h6, h1 a, h2 a, h3 a, h4 a, h5 a, h6 a, .article-archive .article__title a, .article-archive .article__title a:hover"
					),
				)
			)
		),
		// Not needed now
		// array(
		// 	'id'         => 'nav_links',
		// 	'type'       => 'color',
		// 	'title'      => __( 'Nav Links', wpgrade::textdomain() ),
		// 	'default'    => '#262526',
		// 	'validate'   => 'color',
		// 	'compiler'   => true,
		// 	'customizer' => array(
		// 		'transport' => 'postMessage',
		// 		'css_rules' => array(
		// 			'color' => array(
		// 				'selector' => ".nav--main a, a.site-logo--text"
		// 			),
		// 		)
		// 	)
		// ),
		array(
			'id'         => 'cover_text',
			'type'       => 'color',
			'title'      => __( 'Cover Text', wpgrade::textdomain() ),
			'default'    => '#fff',
			'validate'   => 'color',
			'compiler'   => true,
			'customizer' => array(
				'transport' => 'postMessage',
				'css_rules' => array(
					'color' => array(
						'selector' => ".article__header .article__headline .headline__primary, 
										.article__header .article__headline .headline__description *"
					),
				)
			)
		),

		array(
			'id'         => 'backgrounds_title',
			'title'      => '<h3>' . __( 'Backgrounds', wpgrade::textdomain() ) . '</h3>',
			'type'       => 'customizer_info',
			'customizer' => array()
		),
		array(
			'id'         => 'header_background_color',
			'type'       => 'color',
			'title'      => __( 'Header', wpgrade::textdomain() ),
			'default'    => '#ffffff',
			'validate'   => 'color',
			'compiler'   => true,
			'customizer' => array(
				'transport' => 'postMessage',
				'css_rules' => array(
					'background-color' => array(
						'selector' => ".site-header"
					),
				)
			)
		),
		array(
			'id'               => 'header_image_pattern',
			'type'             => 'customizer_background',
			'output'           => array( '.site-header' ),
			'title'            => __( '<button></button>', wpgrade::textdomain() ),
			'subtitle'         => __( 'Container background with image.', wpgrade::textdomain() ),
			'customizer'       => array(
				'transport' => 'refresh',
			),
			'background-color' => false,
			'default'          => array(
				'background-repeat'     => '',
				'background-size'       => '',
				'background-attachment' => '',
				'background-position'   => '',
				'background-image'      => '',
				'media'                 => array(
					'id'        => '',
					'height'    => '',
					'width'     => '',
					'thumbnail' => '',
				)
			),
		),
		array(
			'id'         => 'content_background_color',
			'type'       => 'color',
			'title'      => __( 'Content', wpgrade::textdomain() ),
			'default'    => '#ffffff',
			'validate'   => 'color',
			'compiler'   => true,
			'customizer' => array(
				'transport' => 'postMessage',
				'css_rules' => array(
					'background-color' => array(
						'selector' => ".page .article__content, .up-link, html"
					),
				)
			)
		),
		array(
			'id'               => 'container_image_pattern',
			'type'             => 'customizer_background',
			'output'           => array( '.page .article__content' ),
			'title'            => __( '<button></button>', wpgrade::textdomain() ),
			'subtitle'         => __( 'Container background with image.', wpgrade::textdomain() ),
			'customizer'       => array(
				'transport' => 'refresh',
			),
			'background-color' => false,
			'default'          => array(
				'background-repeat'     => '',
				'background-size'       => '',
				'background-attachment' => '',
				'background-position'   => '',
				'background-image'      => '',
				'media'                 => array(
					'id'        => '',
					'height'    => '',
					'width'     => '',
					'thumbnail' => '',
				)
			),
		),
		array(
			'id'         => 'typography_title',
			'title'      => '<h3>' . __( 'Typography', wpgrade::textdomain() ) . '</h3>',
			'type'       => 'customizer_info',
			'customizer' => array()
		),
		array(
			'id'       => 'use_google_fonts',
			'type'     => 'switch',
			'title'    => __( 'Do you need custom web fonts?', wpgrade::textdomain() ),
			'subtitle' => __( 'Tap into the massive <a href="http://www.google.com/fonts/">Google Fonts</a> collection (with Live preview).', wpgrade::textdomain() ),
			'default'  => '1',
			'compiler' => true,
		),
		// Headings Font
		array(
			'id'             => 'google_titles_font',
			'type'           => 'customizer_typography',
			'color'          => false,
			'font-size'      => false,
			'line-height'    => false,
			'text-transform' => false,
			'letter-spacing' => false,
			'text-align'     => false,
			'all_styles'     => true,
			'preview'        => false,
			'required'       => array( 'use_google_fonts', '=', 1 ),
			'title'          => __( '<button></button> Headings', wpgrade::textdomain() ),
			'subtitle'       => __( 'Font for titles and headings.', wpgrade::textdomain() ),
			'compiler'       => true,
			'customizer'     => array(
				'transport' => 'refresh',
			),
			'default'        => array(
				'font-family' => 'Source Sans Pro',
				'google'      => true,
			),
//			'output'         => array( 'h1, h2, h3, h4, h5, h6' ),

		),
		// SubHeadings Font
		array(
			'id'             => 'google_subtitles_font',
			'type'           => 'customizer_typography',
			'color'          => false,
			'font-size'      => false,
			'line-height'    => false,
			'text-transform' => false,
			'letter-spacing' => false,
			'text-align'     => false,
			'all_styles'     => true,
			'preview'        => false,
			'required'       => array( 'use_google_fonts', '=', 1 ),
			'title'          => __( '<button></button> Sub Headings', wpgrade::textdomain() ),
			'subtitle'       => __( 'Font for titles and headings.', wpgrade::textdomain() ),
			'compiler'       => true,
			'customizer'     => array(
				'transport' => 'refresh',
			),
			'default'        => array(
				'font-family' => 'Herr Von Muellerhoff',
				'google'      => true,
			),
//			'output'         => array( '.headline__secondary' ),
		),
		array(
			'id'            => 'subheadings_bottom-spacing',
			'type'          => 'customizer_slider',
			'title'         => __( 'Bottom Spacing', wpgrade::textdomain() ),
			'validate'      => 'numeric',
			'default'       => '-38',
			'min'           => -90,
			'step'          => 1,
			'max'           => 48,
			'display_value' => 'text',
			'customizer'    => array(
				'transport' => 'postMessage',
				'css_rules' => array(
					'margin-bottom' => array(
						'selector' => '.headline__secondary',
						'unit'     => 'px',
					)
				)
			),
			'compiler'      => true
		),
		// array(
		// 	'id'            => 'subheadings_first-letter-size',
		// 	'type'          => 'customizer_slider',
		// 	'title'         => __( 'First Letter Size', wpgrade::textdomain() ),
		// 	'validate'      => 'numeric',
		// 	'default'       => '1.22',
		// 	'min'           => 1,
		// 	'step'          => 0.1,
		// 	'max'           => 3,
		// 	'display_value' => 'text',
		// 	'customizer'    => array(
		// 		'transport' => 'postMessage',
		// 		'css_rules' => array(
		// 			'font-size' => array(
		// 				'selector' => '.headline__secondary .first-letter',
		// 				'unit'     => 'em',
		// 			)
		// 		)
		// 	),
		// 	'compiler'      => true
		// ),
		array(
			'id'            => 'subheadings_first-letter',
			'type'          => 'customizer_slider',
			'title'         => __( 'First Letter Offset', wpgrade::textdomain() ),
			'validate'      => 'numeric',
			'default'       => '9',
			'min'           => - 48,
			'step'          => 1,
			'max'           => 90,
			'display_value' => 'text',
			'customizer'    => array(
				'transport' => 'postMessage',
				'css_rules' => array(
					'top' => array(
						'selector' => '.headline__secondary .first-letter',
						'unit'     => 'px',
					)
				)
			),
			'compiler'      => true
		),
		
		// Navigation Font
		array(
			'id'             => 'google_nav_font',
			'type'           => 'customizer_typography',
			'color'          => false,
			'font-size'      => false,
			'line-height'    => false,
			'text-transform' => false,
			'letter-spacing' => false,
			'text-align'     => false,
			'all_styles'     => true,
			'preview'        => false,
			'required'       => array( 'use_google_fonts', '=', 1 ),
			'title'          => __( '<button></button> Navigation', wpgrade::textdomain() ),
			'subtitle'       => __( 'Font for the navigation menu.', wpgrade::textdomain() ),
			'compiler'       => true,
			'customizer'     => array(
				'transport' => 'refresh',
			),
			'default'        => array(
				'font-family' => 'Cabin',
				'google'      => true,
			),
//			'output'         => array( '.navigation--main' ),

		),
		array(
			'id'            => 'nav_font-size',
			'type'          => 'customizer_slider',
			'title'         => __( 'Font Size', wpgrade::textdomain() ),
			'validate'      => 'numeric',
			'default'       => '13',
			'min'           => 8,
			'step'          => 1,
			'max'           => 30,
			'display_value' => 'text',
			'customizer'    => array(
				'transport' => 'postMessage',
				'css_rules' => array(
					'font-size' => array(
						'selector' => '.navigation a',
						'unit'     => 'px',
					)
				)
			),
			'compiler'      => true
		),
		array(
			'id'            => 'nav_letter-spacing',
			'type'          => 'customizer_slider',
			'title'         => __( 'Letter Spacing', wpgrade::textdomain() ),
			'validate'      => 'numeric',
			'default'       => '1',
			'min'           => -5,
			'step'          => 1,
			'max'           => 20,
			'display_value' => 'text',
			'customizer'    => array(
				'transport' => 'postMessage',
				'css_rules' => array(
					'letter-spacing' => array(
						'selector' => '.navigation a',
						'unit'     => 'px',
					)
				)
			),
			'compiler'      => true
		),
		array(
			'id'            => 'nav_text-transform',
			'type'          => 'select',
			'title'         => __( 'Text Transform', wpgrade::textdomain() ),
			'options'       => array(
				'none'       => 'None',
				'capitalize' => 'Capitalize',
				'uppercase'  => 'Uppercase',
				'lowercase'  => 'Lowercase',
			),
			'default'       => 'uppercase',
			'select2'       => array( // here you can provide params for the select2 jquery call
				'minimumResultsForSearch' => - 1, // this way the search box will be disabled
				'allowClear'              => false // don't allow a empty select
			),
			'display_value' => 'text',
			'customizer'    => array(
				'transport' => 'postMessage',
				'css_rules' => array(
					'text-transform' => array(
						'selector' => '.nav--main > .menu-item > a',
					)
				)
			),
			'compiler'      => true
		),
		array(
			'id'            => 'nav_text-decoration',
			'type'          => 'select',
			'title'         => __( 'Text Decoration', wpgrade::textdomain() ),
			'options'       => array(
				'none'      => 'None',
				'underline' => 'Underline',
				'overline'  => 'Overline',
			),
			'default'       => 'none',
			'select2'       => array( // here you can provide params for the select2 jquery call
				'minimumResultsForSearch' => - 1, // this way the search box will be disabled
				'allowClear'              => false // don't allow a empty select
			),
			'display_value' => 'text',
			'customizer'    => array(
				'transport' => 'postMessage',
				'css_rules' => array(
					'text-decoration' => array(
						'selector' => '.nav--main > .menu-item > a',
					)
				)
			),
			'compiler'      => true
		),
		// Body Font
		array(
			'id'             => 'google_body_font',
			'type'           => 'customizer_typography',
			'color'          => false,
			'font-size'      => false,
			'line-height'    => false,
			'text-transform' => false,
			'letter-spacing' => false,
			'text-align'     => false,
			'all_styles'     => true,
			'preview'        => false,
			'required'       => array( 'use_google_fonts', '=', 1 ),
			'title'          => __( '<button></button> Body', wpgrade::textdomain() ),
			'subtitle'       => __( 'Font for content and widget text.', wpgrade::textdomain() ),
			'compiler'       => true,
			'customizer'     => array(
				'transport' => 'refresh',
			),
			'default'        => array(
				'font-family' => 'Cabin',
				'google'      => true,
			),
//			'output'         => array( 'body' ),
		),
		array(
			'id'            => 'body-font-size',
			'type'          => 'customizer_slider',
			'title'         => __( 'Font Size', wpgrade::textdomain() ),
			'validate'      => 'numeric',
			'default'       => '16',
			'min'           => 8,
			'step'          => 1,
			'max'           => 72,
			'display_value' => 'text',
			'customizer'    => array(
				'transport' => 'postMessage',
				'css_rules' => array(
					'font-size' => array(
						'selector' => 'body',
						'unit'     => 'px',
					)
				)
			),
			'compiler'      => true
		),
		array(
			'id'            => 'body-line-height',
			'type'          => 'customizer_slider',
			'title'         => __( 'Line Height', wpgrade::textdomain() ),
			'validate'      => 'numeric',
			'default'       => '1.7',
			'min'           => 0,
			'max'           => 3,
			'step'          => .1,
			'resolution'    => 0.1,
			'display_value' => 'text',
			'customizer'    => array(
				'transport' => 'postMessage',
				'css_rules' => array(
					'line-height' => array(
						'selector' => 'body',
						'unit'     => '',
					)
				)
			),
			'compiler'      => true
		),
		/*
		 * Sizes and Spacing
		 */
		array(
			'id'         => 'sizes_title',
			'title'      => '<h3>' . __( 'Sizes and spacings', wpgrade::textdomain() ) . '</h3>',
			'type'       => 'customizer_info',
			'customizer' => array()
		),
		array(
			'id'         => 'sizes_content',
			'title'      => '<label><span class="customize-control-title sizes_section"><button></button>' . __( 'Content', wpgrade::textdomain() ) . '</span></label>',
			'type'       => 'customizer_info',
			'customizer' => array()
		),
		array(
			'id'            => 'content_width',
			'type'          => 'customizer_slider',
			'title'         => __( 'Site Container Width', wpgrade::textdomain() ),
			'subtitle'      => __( 'Set the width of the container.', wpgrade::textdomain() ),
			'validate'      => 'numeric',
			'default'       => '1250',
			'min'           => 600,
			'step'          => 1,
			'max'           => 2700,
			'display_value' => 'text',
			'customizer'    => array(
				'transport' => 'postMessage',
				'css_rules' => array(
					'max-width' => array(
						'selector' => '.container, .search__container, .site-header__container, .header--sticky .site-header__container',
						'unit'     => 'px',
					)
				)
			),
			'compiler'      => true
		),
		array(
			'id'            => 'sections_vertical_margins',
			'type'          => 'customizer_slider',
			'title'         => __( 'Sections Vertical Margins', wpgrade::textdomain() ),
			'validate'      => 'numeric',
			'default'       => '78',
			'min'           => 0,
			'step'          => 6,
			'max'           => 120,
			'display_value' => 'text',
			'customizer'    => array(
				'transport' => 'postMessage',
				'css_rules' => array(
					'padding-top'    => array(
						'selector' => '.page .article__content',
						'unit'     => 'px',
                        'media'    => 'only screen and (min-width: 900px)',
					),
					'padding-bottom' => array(
						'selector' => '.page .article__content',
						'unit'     => 'px',
                        'media'    => 'only screen and (min-width: 900px)',
					)
				)
			),
			'compiler'      => true
		),
		array(
			'id'            => 'sidebar_width',
			'type'          => 'customizer_slider',
			'title'         => __( 'Sidebar Width', wpgrade::textdomain() ),
			'subtitle'      => __( 'Set the width of the sidebar.', wpgrade::textdomain() ),
			'validate'      => 'numeric',
			'default'       => '300',
			'min'           => 140,
			'step'          => 10,
			'max'           => 500,
			'display_value' => 'text',
			'customizer'    => array(
				'transport' => 'postMessage',
				'css_rules' => array(
					'width'        => array(
						'selector' => '.sidebar--main',
						'unit'     => 'px',
						'media'    => 'only screen and (min-width: 900px)'
					),
					'right'        => array(
						'selector' => '.page-content.has-sidebar:after',
						'unit'     => 'px',
						'media'    => 'only screen and (min-width: 900px)'
					),
					'margin-right' => array(
						'selector'          => '.page-content.has-sidebar .page-content__wrapper',
						'negative_selector' => '.page-content.has-sidebar',
						'unit'              => 'px',
						'media'             => 'only screen and (min-width: 900px)'
					),

				)
			),
			'compiler'      => true
		),
		array(
			'id'         => 'sizes_header',
			'title'      => '<label><span class="customize-control-title sizes_section"><button></button>' . __( 'Header', wpgrade::textdomain() ) . '</span></label>',
			'type'       => 'customizer_info',
			'customizer' => array()
		),
		array(
			'id'            => 'header_logo_height',
			'type'          => 'customizer_slider',
			'title'         => __( 'Logo Height', wpgrade::textdomain() ),
			'validate'      => 'numeric',
			'default'       => '90',
			'min'           => 25,
			'step'          => 1,
			'max'           => 125,
			'display_value' => 'text',
			'class'         => 'small-text',
			'customizer'    => array(
				'transport' => 'postMessage',
				'css_rules' => array(
					'max-height' => array(
						'selector' => '.site-title--image img',
						'unit'     => 'px',
					)
				)
			),
			'compiler'      => true
		),
		array(
			'id'            => 'header_vertical_margins',
			'type'          => 'customizer_slider',
			'title'         => __( 'Header Vertical Margins', wpgrade::textdomain() ),
			'validate'      => 'numeric',
			'default'       => '0',
			'min'           => 0,
			'step'          => 1,
			'max'           => 100,
			'display_value' => 'text',
			'class'         => 'small-text',
			'customizer'    => array(
				'transport' => 'postMessage',
				'css_rules' => array(
					'padding-top'    => array(
						'selector' => '.site-header',
						'unit'     => 'px',
						'media'    => 'screen and (min-width: 900px)'
					),
					'padding-bottom' => array(
						'selector' => '.site-header',
						'unit'     => 'px',
						'media'    => 'screen and (min-width: 900px)'
					)
				)
			),
			'compiler'      => true
		),
		array(
			'id'         => 'sizes_nav',
			'title'      => '<label><span class="customize-control-title sizes_section"><button></button>' . __( 'Navigation', wpgrade::textdomain() ) . '</span></label>',
			'type'       => 'customizer_info',
			'customizer' => array()
		),
		array(
			'id'            => 'navigation_menu_items_spacing',
			'type'          => 'customizer_slider',
			'title'         => __( 'Menu Items Spacing', wpgrade::textdomain() ),
			'validate'      => 'numeric',
			'default'       => 24,
			'min'           => 12,
			'step'          => 1,
			'max'           => 75,
			'display_value' => 'text',
			'customizer'    => array(
				'transport' => 'postMessage',
				'css_rules' => array(
					'padding-left'  => array(
						'selector' => '.nav--main > .menu-item > a',
						'unit'     => 'px',
						'media'    => 'screen and (min-width: 900px)'
					),
					'padding-right' => array(
						'selector' => '.nav--main > .menu-item > a',
						'unit'     => 'px',
						'media'    => 'screen and (min-width: 900px)'
					)
				)
			),
			'compiler'      => true
		),
		// array(
		//     'id'=>'sidebar_title',
		//     'title'=> '<h4>'.__('Sidebar', wpgrade::textdomain()).'</h4>',
		//  'type' => 'customizer_info',
		//  'customizer' => array()
		// ),
		
		array(
			'id'         => 'customizer_reset_button_section',
			'title'      => '<a class="btn" id="reset-style-defaults" href="#" data-ajax_nonce="'.  wp_create_nonce( "reset-style-section" ) .'">' . __( 'Reset to Defaults', wpgrade::textdomain() ) . '</a>',
			'type'       => 'customizer_info',
			'default'    => 'Test',
			'customizer' => array()
		),

		array(
			'id'         => 'options_title',
			'title'      => '<h3>' . __( 'Options', wpgrade::textdomain() ) . '</h3>',
			'type'       => 'customizer_info',
			'customizer' => array()
		),
		array(
			'id'         => 'nav_always_show',
			'type'       => 'checkbox',
			'title'      => __( 'Always show nav', wpgrade::textdomain() ),
			'default'    => '1',
			'customizer' => array()
		),
		array(
			'id'         => 'nav_placement',
			'type'       => 'select',
			'title'      => __( 'Navigation placement', wpgrade::textdomain() ),
			// 'subtitle' => __('How should the header menu behave?', wpgrade::textdomain()),
			'options'    => array(
				'top'    => 'Top',
				'bottom' => 'Bottom',
			),
			'default'    => 'bottom',
			'select2'    => array( // here you can provide params for the select2 jquery call
				'minimumResultsForSearch' => - 1, // this way the search box will be disabled
				'allowClear'              => false // don't allow a empty select
			),
			'customizer' => array()
		),
		array(
			'id'         => 'nav_separators',
			'type'       => 'select',
			'title'      => __( 'Navigation separators', wpgrade::textdomain() ),
			// 'subtitle' => __('How should the header menu behave?', wpgrade::textdomain()),
			'options'    => array(
				'none'    => 'None',
				'default' => 'Default',
			),
			'default'    => 'default',
			'select2'    => array( // here you can provide params for the select2 jquery call
				'minimumResultsForSearch' => - 1, // this way the search box will be disabled
				'allowClear'              => false // don't allow a empty select
			),
			'customizer' => array()
		),
		array(
			'id'         => 'nav_borders',
			'type'       => 'checkbox',
			'title'      => __( 'Borders', wpgrade::textdomain() ),
			// 'subtitle' => __('Adds the social links you have configured in Theme Options > Social and SEO.', wpgrade::textdomain()),
			'default'    => '1',
			'customizer' => array()
		),
	)
);


// Header/Footer Options
// ------------------------------------------------------------------------

//$sections[] = array(
//	'icon'   => 'note-1',
//	'title'  => __( 'Header', wpgrade::textdomain() ),
//	'desc'   => '<p class="description">' . __( 'Header options allow you to control both the visual and functional aspects of the page header area.', wpgrade::textdomain() ) . '</p>',
//	'fields' => array()
//);

$sections[] = array(
	'icon'   => 'icon-note-1',
	'title'  => __( 'Footer', wpgrade::textdomain() ),
	'desc'   => '<p class="description">' . __( 'Footer options allow you to control both the visual and functional aspects of the page footer area.', wpgrade::textdomain() ) . '</p>',
	'fields' => array(
		array(
			'id'       => 'copyright_text',
			'type'     => 'editor',
			'title'    => __( 'Copyright Text', wpgrade::textdomain() ),
			'subtitle' => sprintf( __( 'Text that will appear in bottom left area (eg. Copyright 2014 %s | All Rights Reserved).', wpgrade::textdomain() ), wpgrade::themename() ),
			'default'  => '2014 &copy; Handcrafted with love by <a href="#">PixelGrade</a> Team',
			'rows'     => 3,
		)

	)
);

// Archives Options
// ------------------------------------------------------------------------

$sections[] = array(
	'icon'   => 'icon-pencil-1',
	'title'  => __( 'Blog - Archive', wpgrade::textdomain() ),
	'desc'   => sprintf( '<p class="description">' . __( 'Archive options control the various aspects related to displaying posts in blog archives. You can control things like excerpt length and various layout aspects.', wpgrade::textdomain() ) . '</p>', wpgrade::themename() ),
	'fields' => array(
		array(
			'id'       => 'blog_read_more_text',
			'type'     => 'text',
			'title'    => __( 'Read More Text', wpgrade::textdomain() ),
			'subtitle' => __( 'Set the read more link text.', wpgrade::textdomain() ),
			'default'  => 'Read more',
		),
		array(
			'id'       => 'blog_excerpt_more_text',
			'type'     => 'text',
			'title'    => __( 'Excerpt "More" Text', wpgrade::textdomain() ),
			'subtitle' => __( 'Change the default [...] with something else.', wpgrade::textdomain() ),
			'default'  => '..',
		),
		array(
			'id'       => 'blog_excerpt_length',
			'type'     => 'text',
			'title'    => __( 'Excerpt Length', wpgrade::textdomain() ),
			'subtitle' => __( 'Set the number of characters for posts excerpt.', wpgrade::textdomain() ),
			'default'  => '140',
		),
		array(
			'id'   => 'posts_meta_data-218293204',
			'desc' => '<h4>' . __( 'Posts Meta Informations', wpgrade::textdomain() ) . '</h4>',
			'type' => 'info'
		),
		array(
			'id'       => 'blog_show_date',
			'type'     => 'checkbox',
			'title'    => __( 'Date', wpgrade::textdomain() ),
			'subtitle' => __( 'Display the post publish date.', wpgrade::textdomain() ),
			'default'  => '1',
		),
		array(
			'id'       => 'blog_custom_date_separator',
			'type'     => 'checkbox',
			'title'    => __( 'Dot Separator', wpgrade::textdomain() ),
			'subtitle' => __( 'Change spaces, commas or slashes with a custom dot.', wpgrade::textdomain() ),
			'default'  => '1',
			'required' => array( 'blog_show_date', '=', true )
		),
	)
);

$sections[] = array(
	'icon'   => 'icon-pencil-1',
	'title'  => __( 'Blog - Single', wpgrade::textdomain() ),
	'desc'   => sprintf( '<p class="description">' . __( 'Post options control the various aspects related to the <b>single post page</b>.', wpgrade::textdomain() ) . '</p>', wpgrade::themename() ),
	'fields' => array(
		array(
			'id'       => 'blog_single_show_author_box',
			'type'     => 'switch',
			'title'    => __( 'Show Author Info Box', wpgrade::textdomain() ),
			'subtitle' => __( 'Do you want to show author info box with avatar and description bellow the post?', wpgrade::textdomain() ),
			'default'  => true,
		),
		array(
			'id'   => 'posts_share-links-812329384',
			'desc' => '<h4>' . __( 'Share Links', wpgrade::textdomain() ) . '</h4>',
			'type' => 'info'
		),
		array(
			'id'       => 'blog_single_show_share_links',
			'type'     => 'switch',
			'title'    => __( 'Show Share Links', wpgrade::textdomain() ),
			'subtitle' => __( 'Do you want to show share icon links in your articles?', wpgrade::textdomain() ),
			'default'  => true,
		),
		array(
			'id'   => 'posts_comments-812329384',
			'desc' => '<h4>' . __( 'Comments', wpgrade::textdomain() ) . '</h4>',
			'type' => 'info'
		),
		array(
			'id'       => 'comments_show_avatar',
			'type'     => 'switch',
			'title'    => __( 'Show Comments Avatars', wpgrade::textdomain() ),
			'subtitle' => __( 'Do you want to show avatars in comments?', wpgrade::textdomain() ),
			'default'  => false,
		),
		array(
			'id'       => 'comments_show_numbering',
			'type'     => 'switch',
			'title'    => __( 'Show Comments Numbers', wpgrade::textdomain() ),
			'subtitle' => __( 'Do you want to show numbers beside each comment?', wpgrade::textdomain() ),
			'default'  => true,
		),
		array(
			'id'   => 'posts_sidebar-812329384',
			'desc' => '<h4>' . __( 'Sidebar', wpgrade::textdomain() ) . '</h4>',
			'type' => 'info'
		),
		array(
			'id'       => 'blog_single_show_sidebar',
			'type'     => 'switch',
			'title'    => __( 'Show Sidebar', wpgrade::textdomain() ),
			'subtitle' => __( 'Show the main sidebar in the single post pages.', wpgrade::textdomain() ),
			'default'  => '1',
			'switch'   => true,
		),
	)
);

$sections[] = array(
	'type' => 'divide',
);

// Social and SEO options
// ------------------------------------------------------------------------

$sections[] = array(
	'icon'       => "icon-thumbs-up-1",
	'icon_class' => '',
	'title'      => __( 'Social and SEO', wpgrade::textdomain() ),
	'desc'       => '<p class="description">' . __( 'Social and SEO options allow you to display your social links and choose where to display them. Then you can set the social SEO related info added in the meta tags or used in various widgets.', wpgrade::textdomain() ) . '</p>',
	'fields'     => array(
		array(
			'id'   => 'header_layout-218293203',
			'desc' => '<h3>' . __( 'Sharing', wpgrade::textdomain() ) . '</h3>',
			'type' => 'info'
		),
		//		array(
		//			'id' => 'share_buttons_settings',
		//			'type' => 'select',
		//			'title' => __('Share Services', wpgrade::textdomain()),
		//			'subtitle' => __('Add here the share services you want to use, single comma delimited (no spaces). You can find the full list of services here: <a href="http://www.addthis.com/services/list">http://www.addthis.com/services/list</a>. Also you can use the <strong>more</strong> tag to show the plus sign and the <strong>counter</strong> tag to show a global share counter.<br/><br/>Important: If you want to allow AddThis to show your visitors personalized lists of share buttons you can use the <strong>preferred</strong> tag. More about this here: <a href="http://bit.ly/1fLP69i">http://bit.ly/1fLP69i</a>.', wpgrade::textdomain()),
		//			'default' => 'more,preferred,preferred,preferred,preferred',
		//			'options'  => array(
		//				'more' => 'More Button',
		//				'preferred' => 'Preferred',
		//				'facebook' => 'Facebook',
		//				'twitter' => 'Twitter',
		//				'google_plusone_share' => 'Google+',
		//				'google' => 'Google Bookmarks',
		//				'pinterest_share' => 'Pinterest',
		//				'linkedin' => 'LinkedIn',
		//				'sinaweibo' => 'Sina Weibo',
		//				'baidu' => 'Baidu',
		//				'chimein' => 'Chime.In',
		//				'classicalplace' => 'ClassicalPlace',
		//				'cndig' => 'Cndig',
		//				'technerd' => 'TechNerd',
		//				'delicious' => 'Delicious',
		//				'digg' => 'Digg',
		//				'diigo' => 'Diigo',
		//				'dosti' => 'Dosti',
		//				'douban' => 'Douban',
		//				'draugiem' => 'Draugiem.lv',
		//				'dudu' => 'dudu',
		//				'dzone' => 'dzone',
		//				'efactor' => 'EFactor',
		//				'ekudos' => 'eKudos',
		//				'elefantapl' => 'elefanta.pl',
		//				'email' => 'Email',
		//				'mailto' => 'Email App',
		//				'embarkons' => 'Embarkons',
		//				'evernote' => 'Evernote',
		//				'extraplay' => 'extraplay',
		//				'fabulously40' => 'Fabulously40',
		//				'farkinda' => 'Farkinda',
		//				'favable' => 'FAVable',
		//				'faves' => 'Fave',
		//				'favlogde' => 'favlog',
		//				'favoritende' => 'Favoriten.de',
		//				'favorites' => 'Favorites',
		//				'favoritus' => 'Favoritus',
		//				'financialjuice' => 'financialjuice',
		//				'flaker' => 'Flaker',
		//				'folkd' => 'Folkd',
		//				'formspring' => 'Formspring',
		//				'fresqui' => 'Fresqui',
		//				'friendfeed' => 'FriendFeed',
		//				'funp' => 'funP',
		//				'fwisp' => 'fwisp',
		//				'gabbr' => 'Gabbr',
		//				'gamekicker' => 'Gamekicker',
		//				'gg' => 'GG',
		//				'givealink' => 'GiveALink',
		//				'gmail' => 'Gmail',
		//				'govn' => 'Go.vn',
		//				'goodnoows' => 'Good Noows',
		//				'greaterdebater' => 'GreaterDebater',
		//				'hackernews' => 'Hacker News',
		//				'gluvsnap' => 'Healthimize',
		//				'hedgehogs' => 'Hedgehogs.net',
		//				'historious' => 'Historious',
		//				'hotklix' => 'Hotklix',
		//				'hotmail' => 'Hotmail',
		//				'identica' => 'Identica',
		//				'ihavegot' => 'ihavegot',
		//				'index4' => 'Index4',
		//				'instapaper' => 'Instapaper',
		//				'iorbix' => 'iOrbix',
		//				'irepeater' => 'IRepeater.Share',
		//				'isociety' => 'iSociety',
		//				'iwiw' => 'iWiW',
		//				'jamespot' => 'Jamespot',
		//				'jappy' => 'Jappy Ticker',
		//				'jolly' => 'Jolly',
		//				'jumptags' => 'Jumptags',
		//				'kaevur' => 'Kaevur',
		//				'kaixin' => 'Kaixin Repaste',
		//				'ketnooi' => 'Ketnooi',
		//				'kledy' => 'Kledy',
		//				'kommenting' => 'Kommenting',
		//				'latafaneracat' => 'La tafanera',
		//				'librerio' => 'Librerio',
		//				'lidar' => 'LiDAR Online',
		//				'linksgutter' => 'Links Gutter',
		//				'linkshares' => 'LinkShares',
		//				'linkuj' => 'Linkuj.cz',
		//				'lockerblogger' => 'LockerBlogger',
		//				'logger24' => 'Logger24.com',
		//				'mymailru' => 'Mail.ru',
		//				'margarin' => 'mar.gar.in',
		//				'markme' => 'Markme',
		//				'mashant' => 'Mashant',
		//				'mashbord' => 'Mashbord',
		//				'me2day' => 'me2day',
		//				'meinvz' => 'meinVZ',
		//				'mekusharim' => 'Mekusharim',
		//				'memori' => 'Memori.ru',
		//				'meneame' => 'Menéame',
		//				'live' => 'Messenger',
		//				'misterwong' => 'Mister Wong',
		//				'misterwong_de' => 'Mister Wong DE',
		//				'mixi' => 'Mixi',
		//				'moemesto' => 'Moemesto.ru',
		//				'moikrug' => 'Moikrug',
		//				'mrcnetworkit' => 'mRcNEtwORK',
		//				'myspace' => 'Myspace',
		//				'myvidster' => 'myVidster',
		//				'n4g' => 'N4G',
		//				'naszaklasa' => 'Nasza-klasa',
		//				'netlog' => 'NetLog',
		//				'netvibes' => 'Netvibes',
		//				'netvouz' => 'Netvouz',
		//				'newsmeback' => 'NewsMeBack',
		//				'newstrust' => 'NewsTrust',
		//				'newsvine' => 'Newsvine',
		//				'nujij' => 'Nujij',
		//				'odnoklassniki_ru' => 'Odnoklassniki',
		//				'oknotizie' => 'OKNOtizie',
		//				'openthedoor' => 'OpenTheDoor',
		//				'orkut' => 'orkut',
		//				'oyyla' => 'Oyyla',
		//				'packg' => 'Packg',
		//				'pafnetde' => 'pafnet.de',
		//				'phonefavs' => 'PhoneFavs',
		//				'plaxo' => 'Plaxo',
		//				'plurk' => 'Plurk',
		//				'pocket' => 'Pocket',
		//				'posteezy' => 'Posteezy',
		//				'posterous' => 'Posterous',
		//				'print' => 'Print',
		//				'printfriendly' => 'PrintFriendly',
		//				'pusha' => 'Pusha',
		//				'qrfin' => 'QRF.in',
		//				'qrsrc' => 'QRSrc.com',
		//				'qzone' => 'Qzone',
		//				'reddit' => 'Reddit',
		//				'rediff' => 'Rediff MyPage',
		//				'redkum' => 'RedKum',
		//				'researchgate' => 'ResearchGate',
		//				'scoopat' => 'Scoop.at',
		//				'scoopit' => 'Scoop.it',
		//				'sekoman' => 'Sekoman',
		//				'select2gether' => 'Select2Gether',
		//				'shaveh' => 'Shaveh',
		//				'shetoldme' => 'SheToldMe',
		//				'smiru' => 'SMI',
		//				'sonico' => 'Sonico',
		//				'spinsnap' => 'SpinSnap',
		//				'yiid' => 'Spread.ly',
		//				'springpad' => 'springpad',
		//				'startaid' => 'Startaid',
		//				'startlap' => 'Startlap',
		//				'storyfollower' => 'Story Follower',
		//				'studivz' => 'studiVZ',
		//				'stumbleupon' => 'StumbleUpon',
		//				'sulia' => 'Sulia',
		//				'sunlize' => 'Sunlize',
		//				'surfingbird' => 'Surfingbird',
		//				'svejo' => 'Svejo',
		//				'taaza' => 'Taaza',
		//				'tagza' => 'Tagza',
		//				'taringa' => 'Taringa!',
		//				'textme' => 'Textme SMS',
		//				'thewebblend' => 'The Web Blend',
		//				'thinkfinity' => 'Thinkfinity',
		//				'topsitelernet' => 'TopSiteler',
		//				'tuenti' => 'Tuenti',
		//				'tulinq' => 'Tulinq',
		//				'tumblr' => 'Tumblr',
		//				'tvinx' => 'Tvinx',
		//				'typepad' => 'Typepad',
		//				'upnews' => 'Upnews.it',
		//				'urlaubswerkde' => 'Urlaubswerk',
		//				'visitezmonsite' => 'Visitez Mon Site',
		//				'vk' => 'Vkontakte',
		//				'vkrugudruzei' => 'vKruguDruzei',
		//				'vybralisme' => 'vybrali SME',
		//				'wanelo' => 'Wanelo',
		//				'sharer' => 'WebMoney.Events',
		//				'webnews' => 'Webnews',
		//				'webshare' => 'WebShare',
		//				'werkenntwen' => 'Wer Kennt Wen',
		//				'wirefan' => 'WireFan',
		//				'wowbored' => 'WowBored',
		//				'wykop' => 'Wykop',
		//				'xanga' => 'Xanga',
		//				'xing' => 'Xing',
		//				'yahoobkm' => 'Y! Bookmarks',
		//				'yahoomail' => 'Y! Mail',
		//				'yammer' => 'Yammer',
		//				'yardbarker' => 'Yardbarker',
		//				'yigg' => 'Yigg',
		//				'yookos' => 'Yookos',
		//				'yoolink' => 'Yoolink',
		//				'yorumcuyum' => 'Yorumcuyum',
		//				'youmob' => 'YouMob',
		//				'yuuby' => 'Yuuby',
		//				'zakladoknet' => 'Zakladok.net',
		//				'ziczac' => 'ZicZac',
		//				'zingme' => 'ZingMe',
		//
		//
		//			),
		////			'sortable' => true,
		//			'multi' => true,
		//			'select2' => array( // here you can provide params for the select2 jquery call
		//				'minimumResultsForSearch' => 1,
		//				'allowClear' => true, // don't allow a empty select
		//				//'separator' => ','
		//			)
		//		),
		array(
			'id'       => 'share_buttons_settings',
			'type'     => 'text',
			'title'    => __( 'Share Services', wpgrade::textdomain() ),
			'subtitle' => __( 'Add here the share services you want to use, single comma delimited (no spaces). You can find the full list of services here: <a href="http://www.addthis.com/services/list">http://www.addthis.com/services/list</a>. Also you can use the <strong>more</strong> tag to show the plus sign and the <strong>counter</strong> tag to show a global share counter.<br/><br/>Important: If you want to allow AddThis to show your visitors personalized lists of share buttons you can use the <strong>preferred</strong> tag. More about this here: <a href="http://bit.ly/1fLP69i">http://bit.ly/1fLP69i</a>.', wpgrade::textdomain() ),
			'default'  => 'more,preferred,preferred,preferred,preferred',
		),
		array(
			'id'       => 'share_buttons_enable_tracking',
			'type'     => 'switch',
			'title'    => __( 'Sharing Analytics', wpgrade::textdomain() ),
			'subtitle' => __( 'Do you want to get analytics for your social shares?', wpgrade::textdomain() ),
			'default'  => '0',
		),
		array(
			'id'       => 'share_buttons_enable_addthis_tracking',
			'type'     => 'switch',
			'title'    => __( 'AddThis Tracking', wpgrade::textdomain() ),
			'subtitle' => __( 'Do you want to enable AddThis tracking? This will all you to see sharing analytics in your AddThis account (see more here: <a href="http://bit.ly/1oe5zad">bit.ly/1oe5zad</a>)', wpgrade::textdomain() ),
			'default'  => '0',
			'required' => array( 'share_buttons_enable_tracking', '=', 1 ),
		),
		array(
			'id'       => 'share_buttons_addthis_username',
			'type'     => 'text',
			'title'    => __( 'AddThis Username', wpgrade::textdomain() ),
			'subtitle' => __( 'Enter here your AddThis username so you will receive analytics data.', wpgrade::textdomain() ),
			'default'  => '',
			'required' => array( 'share_buttons_enable_addthis_tracking', '=', 1 ),
		),
		array(
			'id'       => 'share_buttons_enable_ga_tracking',
			'type'     => 'switch',
			'title'    => __( 'Google Analytics Tracking', wpgrade::textdomain() ),
			'subtitle' => __( 'Do you want to enable the AddThis - Google Analytics tracking integration? See more about this here: <a href="http://bit.ly/1kxPg7K">bit.ly/1kxPg7K</a>', wpgrade::textdomain() ),
			'default'  => '0',
			'required' => array( 'share_buttons_enable_tracking', '=', 1 ),
		),
		array(
			'id'       => 'share_buttons_ga_id',
			'type'     => 'text',
			'title'    => __( 'GA Property ID', wpgrade::textdomain() ),
			'subtitle' => __( 'Enter here your GA property ID (generally a serial number of the form UA-xxxxxx-x).', wpgrade::textdomain() ),
			'default'  => '',
			'required' => array( 'share_buttons_enable_ga_tracking', '=', 1 ),
		),
		array(
			'id'       => 'share_buttons_enable_ga_social_tracking',
			'type'     => 'switch',
			'title'    => __( 'GA Social Tracking', wpgrade::textdomain() ),
			'subtitle' => __( 'If you are using the latest version of GA code, you can take advantage of Google\'s new <a href="http://bit.ly/1iVvkbk">social interaction analytics</a>.', wpgrade::textdomain() ),
			'default'  => '0',
			'required' => array( 'share_buttons_enable_ga_tracking', '=', 1 ),
		),
		array(
			'id'   => 'header_layout-218293203',
			'desc' => '<h3>' . __( 'Social Links', wpgrade::textdomain() ) . '</h3>',
			'type' => 'info'
		),
		array(
			'id'         => 'social_icons',
			'type'       => 'text_sortable',
			'title'      => __( 'Social Links', wpgrade::textdomain() ),
			'subtitle'   => sprintf( __( 'Define and reorder your social pages links.<br /><b>Note:</b> These will be displayed in the "%s Social Links" widget so you can put them anywhere on your site. Only those filled will appear.<br /><br /><strong> You need to input the <strong>complete</strong> URL (ie. http://twitter.com/username)</strong>', wpgrade::textdomain() ), wpgrade::themename() ),
			'desc'       => __( 'Icons provided by <strong>FontAwesome</strong> and <strong>Entypo</strong>.', wpgrade::textdomain() ),
			'checkboxes' => array(
				'widget' => __( 'Widget', wpgrade::textdomain() ),
				'header' => __( 'Header', wpgrade::textdomain() )
			),
			'options'    => array(
				'flickr'        => __( 'Flickr', wpgrade::textdomain() ),
				'tumblr'        => __( 'Tumblr', wpgrade::textdomain() ),
				'pinterest'     => __( 'Pinterest', wpgrade::textdomain() ),
				'instagram'     => __( 'Instagram', wpgrade::textdomain() ),
				'behance'       => __( 'Behance', wpgrade::textdomain() ),
				'fivehundredpx' => __( '500px', wpgrade::textdomain() ),
				'deviantart'    => __( 'DeviantART', wpgrade::textdomain() ),
				'dribbble'      => __( 'Dribbble', wpgrade::textdomain() ),
				'twitter'       => __( 'Twitter', wpgrade::textdomain() ),
				'facebook'      => __( 'Facebook', wpgrade::textdomain() ),
				'gplus'         => __( 'Google+', wpgrade::textdomain() ),
				'youtube'       => __( 'Youtube', wpgrade::textdomain() ),
				'vimeo'         => __( 'Vimeo', wpgrade::textdomain() ),
				'linkedin'      => __( 'LinkedIn', wpgrade::textdomain() ),
				'tumblr'        => __( 'Tumblr', wpgrade::textdomain() ),
				'skype'         => __( 'Skype', wpgrade::textdomain() ),
				'soundcloud'    => __( 'SoundCloud', wpgrade::textdomain() ),
				'digg'          => __( 'Digg', wpgrade::textdomain() ),
				'lastfm'        => __( 'Last.FM', wpgrade::textdomain() ),
				'rdio'          => __( 'Rdio', wpgrade::textdomain() ),
				'sina-weibo'    => __( 'Sina Weibo', wpgrade::textdomain() ),
				'vkontakte'     => __( 'VKontakte', wpgrade::textdomain() ),
				'appnet'        => __( 'App.net', wpgrade::textdomain() ),
				'rss'           => __( 'RSS Feed', wpgrade::textdomain() ),
			)
		),
		array(
			'id'       => 'social_icons_target_blank',
			'type'     => 'switch',
			'title'    => __( 'Open Social Links In a New Tab?', wpgrade::textdomain() ),
			'subtitle' => __( 'Do you want to open social links in a new tab?', wpgrade::textdomain() ),
			'default'  => '1',
		),
		array(
			'id'   => 'header_layout-218293203',
			'desc' => '<h3>' . __( 'Social Metas', wpgrade::textdomain() ) . '</h3>',
			'type' => 'info'
		),
		array(
			'id'       => 'prepare_for_social_share',
			'type'     => 'switch',
			'title'    => __( 'Add Social Meta Tags', wpgrade::textdomain() ),
			'subtitle' => __( 'Let us properly prepare your theme for the social sharing and discovery by adding the needed metatags in the <head> section. These include Open Graph (Facebook), Google+ and Twitter metas.', wpgrade::textdomain() ),
			'default'  => '1',
		),
		array(
			'id'       => 'facebook_id_app',
			'type'     => 'text',
			'title'    => __( 'Facebook Application ID', wpgrade::textdomain() ),
			'subtitle' => __( 'Enter the Facebook Application ID of the Fan Page which is associated with this website. You can create one <a href="https://developers.facebook.com/apps">here</a>.', wpgrade::textdomain() ),
			'required' => array( 'prepare_for_social_share', '=', 1 )
		),
		array(
			'id'       => 'facebook_admin_id',
			'type'     => 'text',
			'title'    => __( 'Facebook Admin ID', wpgrade::textdomain() ),
			'subtitle' => __( 'The id of the user that has administrative privileges to your Facebook App so you can access the <a href="https://www.facebook.com/insights/">Facebook Insights</a>.', wpgrade::textdomain() ),
			'required' => array( 'prepare_for_social_share', '=', 1 )
		),
		array(
			'id'       => 'google_page_url',
			'type'     => 'text',
			'title'    => __( 'Google+ Publisher', wpgrade::textdomain() ),
			'subtitle' => __( 'Enter your Google Plus page ID (example: https://plus.google.com/<b>105345678532237339285</b>) here if you have set up a "Google+ Page".', wpgrade::textdomain() ),
			'required' => array( 'prepare_for_social_share', '=', 1 )
		),
		array(
			'id'       => 'twitter_card_site',
			'type'     => 'text',
			'title'    => __( 'Twitter Site Username', wpgrade::textdomain() ),
			'subtitle' => __( 'The Twitter username of the entire site. The username for the author will be taken from the author\'s profile (skip the @)', wpgrade::textdomain() ),
			'required' => array( 'prepare_for_social_share', '=', 1 )
		),
		array(
			'id'    => 'social_share_default_image',
			'type'  => 'media',
			'title' => __( 'Default Social Share Image', wpgrade::textdomain() ),
			'desc'  => __( 'If an image is uploaded, this will be used for content sharing if you don\'t upload a custom image with your content (at least 200px wide recommended).', wpgrade::textdomain() ),
		),
		array(
			'id'       => 'remove_parameters_from_static_res',
			'type'     => 'switch',
			'title'    => __( 'Clean Static Files URL', wpgrade::textdomain() ),
			'subtitle' => __( 'Do you want us to remove the version parameters from static resources so they can be cached better?', wpgrade::textdomain() ),
			'default'  => '0',
		),
		//		array(
		//			'id' => 'move_jquery_to_footer',
		//			'type' => 'switch',
		//			'title' => __('Move JS Files To Footer', wpgrade::textdomain()),
		//			'subtitle' => __('This will force jQuery and all other files to be included just before the body closing tag. Please note that this can break some plugins so use it wisely.', wpgrade::textdomain()),
		//			'default' => '0',
		//		),
	)
);

// Custom Code
// ------------------------------------------------------------------------

$sections[] = array(
	'icon'       => "icon-database-1",
	'icon_class' => '',
	'title'      => __( 'Custom Code', wpgrade::textdomain() ),
	'desc'       => '<p class="description">' . __( 'You can change the site style and behaviour by adding custom scripts to all pages within your site using the custom code areas below.', wpgrade::textdomain() ) . '</p>',
	'fields'     => array(
		array(
			'id'       => 'custom_css',
			'type'     => 'ace_editor',
			'title'    => __( 'Custom CSS', wpgrade::textdomain() ),
			'subtitle' => __( 'Enter your custom CSS code. It will be included in the head section of the page and will overwrite the main CSS styling.', wpgrade::textdomain() ),
			'desc'     => __( '', wpgrade::textdomain() ),
			'mode'     => 'css',
			'theme'    => 'chrome',
			//'validate' => 'html',
			'compiler' => true
		),
		array(
			'id'       => 'inject_custom_css',
			'type'     => 'select',
			'title'    => __( 'Apply Custom CSS', wpgrade::textdomain() ),
			'subtitle' => sprintf( __( 'Select how to insert the custom CSS into your pages.', wpgrade::textdomain() ), wpgrade::themename() ),
			'default'  => 'inline',
			'options'  => array(
				'inline' => __( 'Inline <em>(recommended)</em>', wpgrade::textdomain() ),
				'file'   => __( 'Write To File (might require file permissions)', wpgrade::textdomain() )
			),
			'select2'  => array( // here you can provide params for the select2 jquery call
				'minimumResultsForSearch' => - 1, // this way the search box will be disabled
				'allowClear'              => false // don't allow a empty select
			),
			'compiler' => true
		),
		array(
			'id'       => 'custom_js',
			'type'     => 'ace_editor',
			'title'    => __( 'Custom JavaScript (header)', wpgrade::textdomain() ),
			'subtitle' => __( 'Enter your custom Javascript code. This code will be loaded in the head section of your pages.', wpgrade::textdomain() ),
			'mode'     => 'text',
			'theme'    => 'chrome'
		),
		array(
			'id'       => 'custom_js_footer',
			'type'     => 'ace_editor',
			'title'    => __( 'Custom JavaScript (footer)', wpgrade::textdomain() ),
			'subtitle' => __( 'This javascript code will be loaded in the footer. You can paste here your <strong>Google Analytics tracking code</strong> (or for what matters any tracking code) and we will put it on every page.', wpgrade::textdomain() ),
			'mode'     => 'text',
			'theme'    => 'chrome'
		),
	)
);

// Utilities - Theme Auto Update + Import Demo Data
// ------------------------------------------------------------------------

$sections[] = array(
	'icon'       => "icon-truck",
	'icon_class' => '',
	'title'      => __( 'Utilities', wpgrade::textdomain() ),
	'desc'       => '<p class="description">' . __( 'Utilities help you keep up-to-date with new versions of the theme. Also you can import the demo data from here.', wpgrade::textdomain() ) . '</p>',
	'fields'     => array(
		array(
			'id'   => 'theme-one-click-update-info',
			'desc' => __( '<h3>Theme One-Click Update</h3>
				<p class="description">' . __( 'Let us notify you when new versions of this theme are live on ThemeForest! Update with just one button click and forget about manual updates!</p><p> If you have any troubles with this system please refer to <a href="http://bit.ly/backend-update">Updating a theme</a> article.', wpgrade::textdomain() ) . '</p>', wpgrade::textdomain() ),
			'type' => 'info'
		),
		array(
			'id'       => 'themeforest_upgrade',
			'type'     => 'switch',
			'title'    => __( 'One-Click Update', wpgrade::textdomain() ),
			'subtitle' => __( 'Activate this to enter the info needed for the theme\'s one-click update to work.', wpgrade::textdomain() ),
			'default'  => true,
		),
		array(
			'id'       => 'marketplace_username',
			'type'     => 'text',
			'title'    => __( 'ThemeForest Username', wpgrade::textdomain() ),
			'subtitle' => __( 'Enter here your ThemeForest (or Envato) username account (i.e. pixelgrade).', wpgrade::textdomain() ),
			'required' => array( 'themeforest_upgrade', '=', 1 )
		),
		array(
			'id'       => 'marketplace_api_key',
			'type'     => 'text',
			'title'    => __( 'ThemeForest Secret API Key', wpgrade::textdomain() ),
			'subtitle' => __( 'Enter here the secret api key you\'ve created on ThemeForest. You can create a new one in the Settings > API Keys section of your profile.', wpgrade::textdomain() ),
			'required' => array( 'themeforest_upgrade', '=', 1 )
		),
		array(
			'id'       => 'themeforest_upgrade_backup',
			'type'     => 'switch',
			'title'    => __( 'Backup Theme Before Upgrade?', wpgrade::textdomain() ),
			'subtitle' => __( 'Check this if you want us to automatically save your theme as a ZIP archive before an upgrade. The directory those backups get saved to is <code>wp-content/envato-backups</code>. However, if you\'re experiencing problems while attempting to upgrade, it\'s likely to be a permissions issue and you may want to manually backup your theme before upgrading. Alternatively, if you don\'t want to backup your theme you can disable this.', wpgrade::textdomain() ),
			'default'  => '0',
			'required' => array( 'themeforest_upgrade', '=', 1 )
		),
		array(
			'id'   => 'import-demo-data-info',
			'desc' => __( '<h3>Import Demo Data</h3>
				<p class="description">' . __( 'Here you can import the demo data and get on your way of setting up the site like the theme demo (images not included due to copyright).', wpgrade::textdomain() ) . '</p>', wpgrade::textdomain() ),
			'type' => 'info'
		),
		array(
			'id'   => 'wpGrade_import_demodata_button',
			'type' => 'info',
			'desc' => '
                    <input type="hidden" name="wpGrade-nonce-import-posts-pages" value="' . wp_create_nonce( 'wpGrade_nonce_import_demo_posts_pages' ) . '" />
						<input type="hidden" name="wpGrade-nonce-import-theme-options" value="' . wp_create_nonce( 'wpGrade_nonce_import_demo_theme_options' ) . '" />
						<input type="hidden" name="wpGrade-nonce-import-widgets" value="' . wp_create_nonce( 'wpGrade_nonce_import_demo_widgets' ) . '" />
						<input type="hidden" name="wpGrade_import_ajax_url" value="' . admin_url( "admin-ajax.php" ) . '" />

						<a href="#" class="button button-primary" id="wpGrade_import_demodata_button">
							' . __( 'Import demo data', wpgrade::textdomain() ) . '
						</a>

						<div class="wpGrade-loading-wrap hidden">
							<span class="wpGrade-loading wpGrade-import-loading"></span>
							<div class="wpGrade-import-wait">
								' . __( 'Please wait a few minutes (between 1 and 3 minutes usually, but depending on your hosting it can take longer) and <strong>don\'t reload the page</strong>. You will be notified as soon as the import has finished!', wpgrade::textdomain() ) . '
							</div>
						</div>

						<div class="wpGrade-import-results hidden"></div>
						<div class="hr"><div class="inner"><span>&nbsp;</span></div></div>
					',
		),
		array(
			'id'       => 'admin_panel_options',
			'type'     => 'switch',
			'title'    => __( 'Admin Panel Options', wpgrade::textdomain() ),
			'subtitle' => __( 'Here you can copy/download your current admin option settings. Keep this safe as you can use it as a backup should anything go wrong, or you can use it to restore your settings on this site (or any other site).', wpgrade::textdomain() ),
		),
		array(
			'id'       => 'theme_options_import',
			'type'     => 'import_export',
			'required' => array( 'admin_panel_options', '=', 1 )
		)
	)
);

// Help and Support
// ------------------------------------------------------------------------

$sections[] = array(
	'icon'       => "icon-cd-1",
	'icon_class' => '',
	'title'      => __( 'Help and Support', wpgrade::textdomain() ),
	'desc'       => '<p class="description">' . __( 'If you had anything less than a great experience with this theme please contact us now. You can also find answers in our community site, or official articles and tutorials in our knowledge base.', wpgrade::textdomain() ) . '</p>
		<ul class="help-and-support">
			<li>
				<a href="http://bit.ly/19G56H1">
					<span class="community-img"></span>
					<h4>Community Answers</h4>
					<span class="description">Get Help from other people that are using this theme.</span>
				</a>
			</li>
			<li>
				<a href="http://bit.ly/19G5cyl">
					<span class="knowledge-img"></span>
					<h4>Knowledge Base</h4>
					<span class="description">Getting started guides and useful articles to better help you with this theme.</span>
				</a>
			</li>
			<li>
				<a href="http://bit.ly/new-ticket">
					<span class="community-img"></span>
					<h4>Submit a Ticket</h4>
					<span class="description">File a ticket for a personal response from our support team.</span>
				</a>
			</li>
		</ul>
	',
	'fields'     => array()
);


return $sections;
