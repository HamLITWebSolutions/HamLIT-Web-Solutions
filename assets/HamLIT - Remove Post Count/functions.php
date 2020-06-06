<?php
add_filter('manage_users_columns','remove_users_columns');
function remove_users_columns($column_headers) {
      unset($column_headers['posts']);
    return $column_headers;
}