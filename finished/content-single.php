<article id="post-<?php the_ID(); ?>" <?php post_class( 'entry' ); ?>>
    <header class="entry-header">
        <h2 class="entry-title">
            <?php the_title();?>
        </h2>
        <div class="entry-meta">
            <ul>
                <li><?php echo esc_html( get_the_date() ); ?></li>
                <span class="meta-sep">&bull;</span>
                <?php $category = get_the_category(); ?>
                <li><a href="<?php echo esc_url( get_category_link( $category[0]->term_id ) ); ?>" title="<?php echo esc_attr( $category[0]->cat_name ); ?>" rel="category tag"><?php echo esc_html( $category[0]->cat_name ); ?></a></li>
                <span class="meta-sep">&bull;</span>
                <li><?php echo esc_html( get_the_author() ); ?></li>
            </ul>
        </div>
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
    <?php the_tags( __( '<div class="tags">Tagged in: ', 'wp-massively' ), ', ', ' </div>'); ?>
</article>