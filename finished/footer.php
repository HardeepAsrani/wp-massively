<footer>
<div class="row">
    <div class="twelve columns">
    <?php
        wp_nav_menu( array(
            'theme_location' => 'social',
            'menu' => esc_html__( 'Social Menu', 'wp-massively' ),
            'container' => 'ul',
            'menu_class' => 'social-links',
            'link_before' => '<span class="screen-reader-text">',
            'link_after' => '</span>',
        ) );
    ?>
    </div>
    <p class="copyright"><?php _e( '&copy; Copyright 2017 WP Massively. Design by <a title="Styleshout" href="http://www.styleshout.com/">Styleshout</a>.', 'wp-massively' ); ?></p>
</div>
<div id="go-top"><a class="smoothscroll" title="Back to Top', 'wp-massively" href="#top"><i class="fa fa-chevron-up"></i></a></div>
</footer>
<?php wp_footer(); ?>
</body>
</html>