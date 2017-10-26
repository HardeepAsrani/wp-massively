<?php get_header(); ?>

<div id="content-wrap">
    <div class="row">
        <div id="main" class="eight columns">
        <?php
        if ( have_posts() ) :
            while ( have_posts() ) : the_post();
                get_template_part( 'content' );
            endwhile;
            the_posts_navigation();
        else :
            get_template_part( 'content', 'none' );
        endif;
        ?>
        </div>
        <?php get_sidebar(); ?>
    </div>
</div>

<?php get_footer(); ?>