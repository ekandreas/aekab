<?php

class Portfolio_Page_Type extends Papi_Page_Type
{

    public function meta()
    {
        return [
            'post_type'   => 'post',
            'name'        => __('Uppdrag','aekab'),
            'description' => __('Post om uppdrag att visa upp','aekab'),
        ];
    }

    public function register() {

        //$this->box( dirname(__FILE__) . '/parts/sidebar-modules.php' );

    }

}
