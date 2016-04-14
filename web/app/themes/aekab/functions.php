<?php

foreach(glob( dirname(__FILE__) . '/lib/*.php') as $file) {
     include_once $file;
}

if(function_exists('blade_set_storage_path')){
    blade_set_storage_path( dirname( __FILE__ ) . '/.cache' );
}

/**
 * Block external WordPress API request
 */
function wp_api_block_request($pre, $args, $url)
{
    if (strpos($url, 'api.wordpress.org')) {
        return true;
    } else {
        return $pre;
    }
}
add_filter('pre_http_request', 'wp_api_block_request', 10, 3);
