<?php
/**
 * Template part for displaying posts postmetadata block.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage U-Design
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $udesign_options;
?>

<section class="postmetadata">
	<span>
		<?php 
		if ( $udesign_options['show_postmetadata_author'] == 'yes' ) :
			printf( __( 'By %1$s on %2$s ', 'udesign' ), '</span>' . udesign_get_the_author_page_link() . '<span>', get_the_date() );
		else :
			printf( __( 'On %1$s ', 'udesign' ), get_the_date() );
		endif;
		?>
	</span> &nbsp; <span class="categories-link-divider">/ &nbsp;</span> <span class="postmetadata-categories-link"><?php the_category( ', ' ); ?></span> &nbsp; <?php echo udesign_get_comments_link(); ?> <?php edit_post_link( __( 'Edit', 'udesign' ), '<div class="postmetadata-edit-link">', '</div>' ); ?> 
	<?php echo ( $udesign_options['show_postmetadata_tags'] == 'yes' ) ? the_tags( '<div class="post-tags-wrapper">' . __( 'Tags: ', 'udesign' ), ', ', '</div>' ) : ''; ?>
</section><!-- end postmetadata -->

