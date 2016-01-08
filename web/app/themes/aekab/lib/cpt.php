<?php
namespace ekandreas;

class Cpt
{
    function __construct()
    {
        add_action( 'init', function () {

            if( !function_exists('register_extended_post_type') ) {
                include_once( $_SERVER['DOCUMENT_ROOT'] . '/../vendor/johnbillion/extended-cpts/extended-cpts.php');
            }
            
            if( function_exists('register_extended_post_type') ) {

                register_extended_post_type( 'module', [
                    'has_archive' => false,
                    'show_ui' => true,
                    'show_in_menu' => true,
                    'show_in_feed' => false,
                    'supports' => array( 'title', 'editor', 'thumbnail' ),
                ], [
                    'singular' => __('Modul','aekab'),
                    'plural'   => __('Moduler','aekab'),
                ] );
            }

        } );
    }

}

new Cpt();
