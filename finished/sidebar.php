<?php
if ( ! is_active_sidebar( 'sidebar-main' ) ) {
    return;
}
?>
<div id="sidebar" class="four columns">
    <?php dynamic_sidebar( 'sidebar-main' ); ?>
</div>