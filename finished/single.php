<?php get_header(); ?>

<div id="content-wrap">
    <div class="row">
        <div id="main" class="eight columns">
        <?php
        while ( have_posts() ) : the_post();
            get_template_part( 'content', 'single' );
            the_post_navigation(
                array(
                    'prev_text' => _x( '<strong>Previous Article</strong><span class="post-title">%title</span>', 'previous post', 'wp-massively' ),
                    'next_text' => _x( '<strong>Next Article</strong><span class="post-title">%title</span>', 'next post', 'wp-massively' ),
                )
            );
            if ( comments_open() || get_comments_number() ) :
                echo '<div id="comments">';
                comments_template();
                echo '</div>';
            endif;
        endwhile;
        ?>
        </div>
        <?php get_sidebar(); ?>
    </div>
</div>

<?php get_footer(); ?>