<?php
/**
 * Displays the post header
 *
 * @package WordPress
 * @subpackage Sv_Theme
 * @since 1.0.0
 */

$discussion = ! is_page() && svtheme_can_show_post_thumbnail() ? svtheme_get_discussion_data() : null; ?>

<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

<?php if ( ! is_page() ) : ?>
<div class="entry-meta">
	<?php svtheme_posted_by(); ?>
	<?php svtheme_posted_on(); ?>
	<span class="comment-count">
		<?php
		if ( ! empty( $discussion ) ) {
			svtheme_discussion_avatars_list( $discussion->authors );
		}
		?>
		<?php svtheme_comment_count(); ?>
	</span>
	<?php
	// Edit post link.
		edit_post_link(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers. */
					__( 'Edit <span class="screen-reader-text">%s</span>', 'svtheme' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			),
			'<span class="edit-link">' . svtheme_get_icon_svg( 'edit', 16 ),
			'</span>'
		);
	?>
</div><!-- .meta-info -->
<?php endif; ?>
