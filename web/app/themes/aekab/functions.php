<?php


foreach(glob( dirname(__FILE__) . '/lib/*.php') as $file) {
     include_once $file;
}

