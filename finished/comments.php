<?php
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">
	<?php
	if ( have_comments() ) : ?>
		<h2 class="comments-title">
			<?php
			$comments_number = get_comments_number();
			if ( '1' === $comments_number ) {
				printf( _x( 'One Reply to &ldquo;%s&rdquo;', 'comments title', 'wp-massively' ), get_the_title() );
			} else {
				printf(
					_nx(
						'%1$s Reply to &ldquo;%2$s&rdquo;',
						'%1$s Replies to &ldquo;%2$s&rdquo;',
						$comments_number,
						'comments title',
						'wp-massively'
					),
					number_format_i18n( $comments_number ),
					get_the_title()
				);
			}
			?>
		</h2>
		<ol class="commentlist">
			<?php
				wp_list_comments( array(
					'avatar_size' => 32,
					'style'       => 'li',
					'short_ping'  => true,
					'reply_text'  => __( 'Reply', 'wp-massively' ),
				) );
			?>
		</ol>
		<?php the_comments_pagination( array(
			'prev_text' => '<span class="screen-reader-text">' . __( 'Previous', 'wp-massively' ) . '</span>',
			'next_text' => '<span class="screen-reader-text">' . __( 'Next', 'wp-massively' ) . '</span>',
		) );
	endif;
	if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
		<p class="no-comments"><?php _e( 'Comments are closed.', 'wp-massively' ); ?></p>
	<?php
	endif;
	comment_form();
	?>
</div>