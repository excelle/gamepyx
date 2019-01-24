<?php
/**
 * @package WordPress
 * @subpackage U-Design
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


global $udesign_options;
$sidebar_position = ( $udesign_options['pages_sidebar_2'] == 'left' ) ? 'grid_8 pull_16 sidebar-box' : 'grid_8';
?>

<aside id="sidebar" class="<?php echo $sidebar_position; ?>">
	<div id="sidebarSubnav">
		<?php
		udesign_sidebar_top();
		
		// Widgetized sidebar.
		if ( ! function_exists( 'dynamic_sidebar' ) || ! dynamic_sidebar( 'PagesSidebar2' ) ) :
			?>
			<div class="custom-formatting">
				<h3><?php esc_html_e( 'About This Sidebar', 'udesign' ); ?></h3>
				<ul>
					<li><?php _e( "To edit this sidebar, go to admin backend's <strong><em>Appearance -> Widgets</em></strong> and place widgets into the <strong><em>Pages Sidebar 2</em></strong> Widget Area", 'udesign' ); ?></li>
				</ul>
			</div>
			<?php
		endif;

		udesign_sidebar_bottom();
		?>
	</div>
	<!-- end sidebarSubnav -->
</aside>
<!-- end sidebar -->

