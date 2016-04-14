<?php

namespace nordiciron;

class SEO
{
    function __construct()
    {
        add_filter( 'wpseo_metabox_prio', array( &$this, 'yoasttobottom' ) );
    }

    static function yoasttobottom()
    {
        return 'low';
    }

}

new SEO();