<?php
namespace ekandreas;

class menu
{
    public function __construct()
    {
        add_filter('nav_menu_link_attributes', __NAMESPACE__ . '\Menu::add_class_to_items_link', 10, 3);
    }


    public static function add_class_to_items_link($atts, $item, $args)
    {
    	if( $item->current ) {
			$atts['class'] = 'w-nav-link topnavlink activemenustate';
    	}
    	else {
			$atts['class'] = 'w-nav-link topnavlink';
    	}
        return $atts;
    }
}

new Menu();
