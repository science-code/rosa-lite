<?php if ( ! defined( 'ABSPATH' ) ){
	exit; // Exit if accessed directly
}

if ( is_active_sidebar( 'sidebar-main' ) ): ?>
	<aside class="sidebar  sidebar--main">
		<?php dynamic_sidebar( 'sidebar-main' ); ?>
	</aside><!-- .sidebar -->
<?php endif; ?>