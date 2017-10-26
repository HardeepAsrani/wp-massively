<?php get_header(); ?>

<div id="content-wrap">
    <div class="row">
        <div id="main" class="twelve columns">
        <?php
        while ( have_posts() ) : the_post();
            get_template_part( 'content', 'page' );
            if ( comments_open() || get_comments_number() ) :
                echo '<div id="comments">';
                comments_template();
                echo '</div>';
            endif;
        endwhile;
        ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>