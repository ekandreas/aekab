<?php
namespace ekandreas;

class Papi
{
    function __construct()
    {
        add_filter( 'papi/settings/directories', function ( $directories ) {
            $directories[] = dirname(__FILE__) . '/page-types';
            return $directories;
        } );

    }

    static function is_papi_page() {
        return !!\papi_get_page_type_id();
    }

    static function module_view_path( $class ) {
        $class = str_replace('_Module_Type', '', $class);
        $class = str_replace('_', '-', $class);
        $class = strtolower($class);
        $result = 'views.modules.' . $class;
        return $result;
    }

    static function module_thumbnail_path( $class ) {
        $class = str_replace('_Module_Type', '', $class);
        $class = str_replace('_', '-', $class);
        $class = strtolower($class);
        $result = get_stylesheet_directory_uri() . "/assets/images/modules/$class.png";
        return $result;
    }

}

new Papi();
