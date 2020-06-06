<?php
function hamlit_dequeue_css() {
   wp_dequeue_style( 'jquery-ui-style' );
}
#Stops from Backend, not front end.
add_action( 'admin_enqueue_scripts', 'hamlit_dequeue_css', 100 );