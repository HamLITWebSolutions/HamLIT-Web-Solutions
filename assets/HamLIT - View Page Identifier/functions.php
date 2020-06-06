<?php
function enqueue_my_scripts($hook) {
    echo "<p style='text-align:center;'>" .$hook. "</p>";
}
add_action('admin_enqueue_scripts', 'enqueue_my_scripts');