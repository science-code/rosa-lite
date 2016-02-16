<?php
/*
 * Register Widgets areas.
 */
function rosa_register_sidebars() {

	register_sidebar( array(
		'id'            => 'sidebar-main',
		'name'          => __( 'Main Sidebar', 'rosa' ),
		'description'   => __( 'Main Sidebar', 'rosa' ),
		'before_title'  => '<h4 class="widget__title widget--sidebar-blog__title">',
		'after_title'   => '</h4>',
		'before_widget' => '<div id="%1$s" class="widget widget--sidebar-blog %2$s">',
		'after_widget'  => '</div>',
	) );

	register_sidebar( array(
		'id'            => 'sidebar-footer',
		'name'          => __( 'Footer Area', 'rosa' ),
		'description'   => __( 'Footer Area', 'rosa' ),
		'before_title'  => '<h4 class="widget__title widget--menu__title">',
		'after_title'   => '</h4>',
		'before_widget' => '<div id="%1$s" class="widget widget--menu %2$s">',
		'after_widget'  => '</div>',
	) );

	//allow the Text Widgets to handle shortcodes
	add_filter( 'widget_text', 'shortcode_unautop');
	add_filter('widget_text', 'do_shortcode');

}

add_action( 'widgets_init', 'rosa_register_sidebars' );