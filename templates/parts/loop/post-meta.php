<?php
/**
 * Template part for displaying the post meta inside The Loop.
 *
 * @package Primer
 * @since   1.0.0
 */
?>

<div class="entry-meta">

    <?php if ( is_new_day() ) : ?>

	    <span class="posted-date"><?php the_date(); ?></span>

    <?php endif; ?>

	<span class="posted-author"><?php the_author_posts_link(); ?></span>

	<span class="comments-number">

		<?php if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) : ?>

			<a href="<?php echo get_comments_link(); ?>">

				<span class="comments-link"><?php comments_popup_link( esc_html__( 'Leave a comment', 'primer' ), esc_html__( '1 Comment', 'primer' ), esc_html_x( '% Comments', 'number of comments', 'primer' ) ); ?></span>

			</a>

		<?php endif; ?>

	</span>

</div><!-- .entry-meta -->
