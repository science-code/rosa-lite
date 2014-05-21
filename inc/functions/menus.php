<?php

	/*
	 * Register custom menus.
	 * This works on 3.1+
	 */
	function wpgrade_register_custom_menus() {

		add_theme_support('menus');
		$menus = wpgrade::confoption('import_nav_menu');
		foreach ($menus as $key => $value) {
			register_nav_menu($key, $value);
		}
	}

	add_action("after_setup_theme", "wpgrade_register_custom_menus");


    /*
     * Function for displaying The Main Header Menu
     */
	function wpgrade_main_nav() {
		// test if there are menu locations to prevent errors
		$theme_locations = get_nav_menu_locations();

//		if (isset($theme_locations["main_menu"]) && ($theme_locations["main_menu"] != 0)) {
//			require_once(wpgrade::themefilepath('inc/WPGrade_Heap_Walker_Nav_Menu.php'));
			
			$args = array
				(
					'theme_location'  => 'main_menu',
                    'menu'            => '',
                    'container'       => '',
                    'container_id'    => '',
                    'menu_class'      => 'nav--main',
                    'menu_id'         => '',
                    'fallback_cb'     => 'wpgrade_please_select_a_menu',
                    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'walker'          => new WPGrade_Arrow_Walker_Nav_Menu()
                );

            wp_nav_menu($args);
//        }
    }

    /*
     * Function for displaying The Footer Menu
     */
	function wpgrade_footer_nav() {
        $theme_locations = get_nav_menu_locations();

        if (isset($theme_locations["footer_menu"]) && ($theme_locations["footer_menu"] != 0)) {
            $args = array
                (
                    'theme_location'  => 'footer_menu',
                    'menu'            => '',
                    'container'       => '',
                    'container_id'    => '',
//                    'menu_class'      => 'site-navigation site-navigation--footer site-navigation--secondary flush--bottom',
                    'menu_class'      => 'footer-menu',
                    'fallback_cb'     => false,
                    'menu_id'         => '',
					'depth'			  => 1,
					'items_wrap'      => '<ul id="%1$s" class="%2$s  nav  nav--main">%3$s</ul>',
                );

            wp_nav_menu($args);
		}
	}

	function wpgrade_please_select_a_menu(){
		echo '
		<ul class="nav  nav--main sub-menu" >
			<li><a href="'. admin_url('nav-menus.php?action=locations') .'">'.__('Please select a menu in this location', wpgrade::textdomain() ) .'</a></li>
		</ul>';
	}