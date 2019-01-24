<?php
/**
 * U-Design: Dynamic styles for Gutenberg block editor.
 *
 * @package WordPress
 * @subpackage U-Design
 */

/**
 * Generate the CSS for the block editor.
 */
function udesign_dynamic_block_editor_styles() {

	global $udesign_options;

	$general_font_family = preg_replace( '/:.*/','', $udesign_options['general_font_family'] );
	$headings_font_family = preg_replace( '/:.*/','', $udesign_options['headings_font_family'] );
	ob_start();
	?>
	/**
	 * U-Design dynamic block editor styles.
	 */
	.editor-styles-wrapper, .editor-styles-wrapper p {
		font-family:'<?php echo $general_font_family; ?>';
		font-weight: <?php echo udesign_block_editor_parse_font_variants('general', 'weight'); ?>;
		font-style: <?php echo udesign_block_editor_parse_font_variants('general', 'style'); ?>;
		font-size: <?php echo $udesign_options['general_font_size']; ?>px;
		line-height: <?php echo $udesign_options['general_font_line_height']; ?>;
	}
	.editor-styles-wrapper .has-small-font-size { font-size: <?php echo ( $udesign_options['general_font_size'] - 2 ); ?>px; }
	.editor-styles-wrapper .has-normal-font-size { font-size: <?php echo $udesign_options['general_font_size']; ?>px; }
	.editor-styles-wrapper .has-medium-font-size  { font-size: <?php echo ( $udesign_options['general_font_size'] + 4 ); ?>px; }
	.editor-styles-wrapper .has-large-font-size  { font-size: <?php echo ( $udesign_options['general_font_size'] + 20  ); ?>px; }
	.editor-styles-wrapper .has-larger-font-size  { font-size: <?php echo ( $udesign_options['general_font_size'] + 34 ); ?>px; }
	.editor-styles-wrapper .wp-block-pullquote blockquote { font-family:'<?php echo $general_font_family; ?>'; }

	.editor-styles-wrapper h1, .editor-styles-wrapper h2, .editor-styles-wrapper h3, .editor-styles-wrapper h4,  .editor-styles-wrapper h5, .editor-styles-wrapper h6 {
		font-family:'<?php echo $headings_font_family; ?>';
		line-height: <?php echo $udesign_options['headings_font_line_height']; ?>;
		font-weight: <?php echo udesign_block_editor_parse_font_variants('headings', 'weight'); ?>;
		font-style: <?php echo udesign_block_editor_parse_font_variants('headings', 'style'); ?>;
	}
	<?php // Overwrite Indivisual Headings. ?>
	<?php if ( isset($udesign_options['heading1_font_settings_enabled']) && $udesign_options['heading1_font_settings_enabled'] == "yes" ) : ?>
		.editor-styles-wrapper h1 { font-family:'<?php echo $udesign_options['heading1_font_family']; ?>'; font-weight: <?php echo udesign_block_editor_parse_font_variants('heading1', 'weight'); ?>; font-style: <?php echo udesign_block_editor_parse_font_variants('heading1', 'style'); ?>; font-size:<?php echo $udesign_options['heading1_font_size']; ?>em; line-height:<?php echo $udesign_options['heading1_font_line_height']; ?>; }
	<?php endif; ?>
	<?php if ( isset($udesign_options['heading2_font_settings_enabled']) && $udesign_options['heading2_font_settings_enabled'] == "yes" ) : ?>
		.editor-styles-wrapper h2 { font-family:'<?php echo $udesign_options['heading2_font_family']; ?>'; font-weight: <?php echo udesign_block_editor_parse_font_variants('heading2', 'weight'); ?>; font-style: <?php echo udesign_block_editor_parse_font_variants('heading2', 'style'); ?>; font-size:<?php echo $udesign_options['heading2_font_size']; ?>em; line-height:<?php echo $udesign_options['heading2_font_line_height']; ?>; }
	<?php endif; ?>
	<?php if ( isset($udesign_options['heading3_font_settings_enabled']) && $udesign_options['heading3_font_settings_enabled'] == "yes" ) : ?>
		.editor-styles-wrapper h3 { font-family:'<?php echo $udesign_options['heading3_font_family']; ?>'; font-weight: <?php echo udesign_block_editor_parse_font_variants('heading3', 'weight'); ?>; font-style: <?php echo udesign_block_editor_parse_font_variants('heading3', 'style'); ?>; font-size:<?php echo $udesign_options['heading3_font_size']; ?>em; line-height:<?php echo $udesign_options['heading3_font_line_height']; ?>; }
	<?php endif; ?>
	<?php if ( isset($udesign_options['heading4_font_settings_enabled']) && $udesign_options['heading4_font_settings_enabled'] == "yes" ) : ?>
		.editor-styles-wrapper h4 { font-family:'<?php echo $udesign_options['heading4_font_family']; ?>'; font-weight: <?php echo udesign_block_editor_parse_font_variants('heading4', 'weight'); ?>; font-style: <?php echo udesign_block_editor_parse_font_variants('heading4', 'style'); ?>; font-size:<?php echo $udesign_options['heading4_font_size']; ?>em; line-height:<?php echo $udesign_options['heading4_font_line_height']; ?>; }
	<?php endif; ?>
	<?php if ( isset($udesign_options['heading5_font_settings_enabled']) && $udesign_options['heading5_font_settings_enabled'] == "yes" ) : ?>
		.editor-styles-wrapper h5 { font-family:'<?php echo $udesign_options['heading5_font_family']; ?>'; font-weight: <?php echo udesign_block_editor_parse_font_variants('heading5', 'weight'); ?>; font-style: <?php echo udesign_block_editor_parse_font_variants('heading5', 'style'); ?>; font-size:<?php echo $udesign_options['heading5_font_size']; ?>em; line-height:<?php echo $udesign_options['heading5_font_line_height']; ?>; }
	<?php endif; ?>
	<?php if ( isset($udesign_options['heading6_font_settings_enabled']) && $udesign_options['heading6_font_settings_enabled'] == "yes" ) : ?>
		.editor-styles-wrapper h6 { font-family:'<?php echo $udesign_options['heading6_font_family']; ?>'; font-weight: <?php echo udesign_block_editor_parse_font_variants('heading6', 'weight'); ?>; font-style: <?php echo udesign_block_editor_parse_font_variants('heading6', 'style'); ?>; font-size:<?php echo $udesign_options['heading6_font_size']; ?>em; line-height:<?php echo $udesign_options['heading6_font_line_height']; ?>; }
	<?php endif; ?>
	<?php 
	$editor_css = ob_get_clean();
	
	return apply_filters( 'udesign_dynamic_block_editor_styles', $editor_css );
}




/**
 * This function will parse the Google Fonts Variants into font-weight and/or font-style property values respectively.
 * 
 * Dynamically generated names in this function:
 *      'general_font_variant', 'top_nav_font_variant', 'headings_font_variant', 
 *      'heading1_font_variant', 'heading2_font_variant', 'heading3_font_variant', 'heading4_font_variant', 'heading5_font_variant', 'heading6_font_variant',
 * 
 * @param string $prefix This is the font setting prefix, for example 'general', 'top_nav', 'headings' will be used to generate 'general_font_variant', 'top_nav_font_variant', 'headings_font_variant' names respectively
 * @param string $which_property Possible value: 'weight" or 'style' for returning font-weight or font-style respectively
 * @return string Return the font-weight or font-style string respectively
 */
function udesign_block_editor_parse_font_variants( $prefix = 'general', $which_property = 'weight' ) {
	global $udesign_options;
	${$prefix.'_font_weight'} = ${$prefix.'_font_style'} = 'normal';
	if ( isset( $udesign_options[$prefix.'_font_variant'] ) && $udesign_options[$prefix.'_font_variant'] !== "" ) {
		if ( $udesign_options[$prefix.'_font_variant'] === "italic" ) {
			${$prefix.'_font_style'} = 'italic';
		} elseif ( $udesign_options[$prefix.'_font_variant'] !== "regular" ) {
			$font_variant = preg_split( '/(?<=\d)(?=[a-z])/i', $udesign_options[$prefix.'_font_variant'] );
			if( is_numeric( $font_variant[0] ) ) {
				${$prefix.'_font_weight'} = $font_variant[0];
			}
			if( in_array( 'italic', $font_variant ) ) {
				${$prefix.'_font_style'} = 'italic';
			}
		}
	}
	return ( $which_property === 'weight' ) ? ${$prefix.'_font_weight'} : ${$prefix.'_font_style'};
}

