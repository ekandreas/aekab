<?php

class Blog_Page_Type extends Papi_Page_Type
{

    public function meta()
    {
        return [
            'post_type'   => 'post',
            'name'        => __('Blogg','aekab'),
            'description' => __('En bloggpost','aekab'),
        ];
    }

    public function register() {

        //$this->box( dirname(__FILE__) . '/parts/sidebar-modules.php' );

    }

}
