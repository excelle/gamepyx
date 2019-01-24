<?php
/**
 * Merlin WP configuration file.
 *
 * @package   Merlin WP
 */

if ( ! class_exists( 'Merlin' ) ) {
	return;
}

/**
 * Set directory locations, text strings, and other settings for Merlin WP.
 */
$udesign_merlin_wizard = new Merlin(
	// Configure Merlin with custom settings.
	$config = array(
		'directory'		=> 'inc/admin/u-design-merlin', // Location / directory where Merlin WP is placed in your theme.
		'merlin_url'		=> 'udesign-demo-import-wizard', // The wp-admin page slug where Merlin WP loads.
		'parent_slug'		=> 'themes.php', // The wp-admin parent page slug for the admin menu item.
		'capability'		=> 'manage_options', // The capability required for this menu to be displayed to the user.
		'child_action_btn_url'	=> 'https://codex.wordpress.org/Child_Themes',  // URL for the 'child-action-link'.
		'dev_mode'		=> false, // Enable development mode for testing.
		'license_step'		=> false, // EDD license activation step.
		'license_required'	=> false, // Require the license activation step.
		'license_help_url'	=> '', // URL for the 'license-tooltip'.
		'edd_remote_api_url'	=> '', // EDD_Theme_Updater_Admin remote_api_url.
		'edd_item_name'		=> '', // EDD_Theme_Updater_Admin item_name.
		'edd_theme_slug'	=> '', // EDD_Theme_Updater_Admin item_slug.
		'branding'		=> false, // Set to false to remove Merlin WP's branding.
		'ready_big_button_url'	=> home_url( '/' ), // Link for the big button on the ready step.
	),
	$strings = array(
		'admin-menu'               => esc_html__( 'Import Demo Wizard', 'udesign' ),

		/* translators: 1: Title Tag 2: Theme Name 3: Closing Title Tag */
		'title%s%s%s%s'            => esc_html__( '%1$s%2$s Themes &lsaquo; Theme Setup: %3$s%4$s', 'udesign' ),
		'return-to-dashboard'      => esc_html__( 'Return to the dashboard' , 'udesign' ),
		'ignore'                   => '', // Leave this an empty string.

		'btn-skip'                 => esc_html__( 'Skip' , 'udesign' ),
		'btn-next'                 => esc_html__( 'Next' , 'udesign' ),
		'btn-start'                => esc_html__( 'Start' , 'udesign' ),
		'btn-no'                   => esc_html__( 'Cancel' , 'udesign' ),
		'btn-plugins-install'      => esc_html__( 'Install' , 'udesign' ),
		'btn-child-install'        => esc_html__( 'Install' , 'udesign' ),
		'btn-content-install'      => esc_html__( 'Install' , 'udesign' ),
		'btn-import'               => esc_html__( 'Import' , 'udesign' ),
		'btn-license-activate'     => esc_html__( 'Activate', 'udesign' ),
		'btn-license-skip'         => esc_html__( 'Later', 'udesign' ),

		/* translators: Theme Name */
		'license-header%s'         => esc_html__( 'Activate %s', 'udesign' ),
		/* translators: Theme Name */
		'license-header-success%s' => esc_html__( '%s is Activated', 'udesign' ),
		/* translators: Theme Name */
		'license%s'                => esc_html__( 'Enter your license key to enable remote updates and theme support.', 'udesign' ),
		'license-label'            => esc_html__( 'License key', 'udesign' ),
		'license-success%s'        => esc_html__( 'The theme is already registered, so you can go to the next step!', 'udesign' ),
		'license-json-success%s'   => esc_html__( 'Your theme is activated! Remote updates and theme support are enabled.', 'udesign' ),
		'license-tooltip'          => esc_html__( 'Need help?', 'udesign' ),

		/* translators: Theme Name */
		'welcome-header%s'         => esc_html__( 'Welcome to %s' , 'udesign' ),
		'welcome-header-success%s' => esc_html__( 'Hi. Welcome back' , 'udesign' ),
		'welcome%s'                => esc_html__( 'This wizard will set up your theme, install plugins, and import content. It is optional & should take only a few minutes.' , 'udesign' ),
		'welcome-success%s'        => esc_html__( 'You may have already run this theme setup wizard. If you would like to proceed anyway, click on the "Start" button below.' , 'udesign' ),

		'child-header'             => esc_html__( 'Install Child Theme' , 'udesign' ),
		'child-header-success'     => esc_html__( 'You\'re good to go!' , 'udesign' ),
		'child'                    => esc_html__( 'Let\'s build & activate a child theme so you may easily make theme changes.' , 'udesign' ),
		'child-success%s'          => esc_html__( 'Your child theme has already been installed and is now activated, if it wasn\'t already.' , 'udesign' ),
		'child-action-link'        => esc_html__( 'Learn about child themes' , 'udesign' ),
		'child-json-success%s'     => esc_html__( 'Awesome. Your child theme has already been installed and is now activated.' , 'udesign' ),
		'child-json-already%s'     => esc_html__( 'Awesome. Your child theme has been created and is now activated.' , 'udesign' ),

		'plugins-header'           => esc_html__( 'Install Plugins' , 'udesign' ),
		'plugins-header-success'   => esc_html__( 'You\'re up to speed!' , 'udesign' ),
		'plugins'                  => esc_html__( 'Let\'s install some essential WordPress plugins to get your site up to speed.' , 'udesign' ),
		'plugins-success%s'        => esc_html__( 'The required WordPress plugins are all installed and up to date. Press "Next" to continue the setup wizard.' , 'udesign' ),
		'plugins-action-link'      => esc_html__( 'Advanced' , 'udesign' ),

		'import-header'            => esc_html__( 'Import Content' , 'udesign' ),
		'import'                   => esc_html__( 'Let\'s import content to your website, to help you get familiar with the theme.' , 'udesign' ),
		'import-action-link'       => esc_html__( 'Advanced' , 'udesign' ),

		'ready-header'             => esc_html__( 'All done. Have fun!' , 'udesign' ),

		/* translators: Theme Author */
		'ready%s'                  => esc_html__( 'Your theme has been all set up. Enjoy your new theme by %s.' , 'udesign' ),
		'ready-action-link'        => esc_html__( 'Extras' , 'udesign' ),
		'ready-big-button'         => esc_html__( 'View your website' , 'udesign' ),
		'ready-link-1'             => sprintf( '<a href="%1$s" target="_blank">%2$s</a>', 'https://wordpress.org/support/', esc_html__( 'Explore WordPress', 'udesign' ) ),
		'ready-link-2'             => sprintf( '<a href="%1$s" target="_blank">%2$s</a>', 'https://dreamthemedesign.com/u-design-support/', esc_html__( 'Get Theme Support', 'udesign' ) ),
		'ready-link-3'             => sprintf( '<a href="%1$s">%2$s</a>', admin_url( 'admin.php?page=udesign_options_page' ), esc_html__( 'Start Customizing', 'udesign' ) ),
	)
);
