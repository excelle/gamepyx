<?php
/**
 * Displays footer site info.
 *
 * @package WordPress
 * @subpackage U-Design
 */

global $udesign_options;
$footer_content_width = ( ! isset( $udesign_options['back_to_top'] ) || isset( $udesign_options['back_to_top'] ) && $udesign_options['back_to_top'] === 'none' ) ? 'grid_24' : 'grid_20';
?>

<div id="footer_text" class="<?php echo $footer_content_width; ?>">
	<?php
	echo do_shortcode( $udesign_options['copyright_message'] );
	if( $udesign_options['show_wp_link_in_footer'] ) :
		if ( function_exists( 'classicpress_version' ) ) {
			_e(' is proudly powered by <a target="_blank" href="https://www.classicpress.net/"><strong>ClassicPress</strong></a>', 'udesign');
		} else {
			_e(' is proudly powered by <a target="_blank" href="https://wordpress.org/"><strong>WordPress</strong></a>', 'udesign');
		}
	endif;

	if( $udesign_options['show_udesign_affiliate_link'] ) :
		printf( esc_html__(' | Designed with %1$sU-Design Theme%2$s', 'udesign'), '<a target="_blank" rel="nofollow" title="U-Design WordPress Premium Theme" href="http://themeforest.net/item/udesign-responsive-wordpress-theme/253220?ref='.$udesign_options['affiliate_username'].'">', '</a>' );
	endif;

	if( $udesign_options['show_entries_rss_in_footer'] ) :
		?>
		| <a href="<?php bloginfo('rss2_url'); ?>"><?php esc_html_e('Entries (RSS)', 'udesign'); ?></a>
		<?php
	endif;

	if( $udesign_options['show_comments_rss_in_footer'] ) :
		?>
		| <a href="<?php bloginfo('comments_rss2_url'); ?>"><?php esc_html_e('Comments (RSS)', 'udesign'); ?></a>
		<?php
	endif;
	?>
</div>

