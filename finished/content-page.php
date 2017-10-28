<article id="post-<?php the_ID(); ?>" <?php post_class( 'entry' ); ?>>
    <header class="entry-header">
        <h1 class="entry-title">
            <?php the_title();?>
        </h1>
    </header>
    <div class="entry-content-media">
        <div class="post-thumb">
            <?php the_post_thumbnail(); ?>
        </div>
    </div>
    <div class="entry-content">
        <?php the_content(); ?>
        <?php wp_link_pages(); ?>
    </div>
</article>