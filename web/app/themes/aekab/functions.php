<?php

foreach(glob( dirname(__FILE__) . '/lib/*.php') as $file) {
     include_once $file;
}

if(function_exists('blade_set_storage_path')){
    blade_set_storage_path( dirname( __FILE__ ) . '/.cache' );
}


