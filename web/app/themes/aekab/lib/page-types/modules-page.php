<?php

class Modules_Page_Type extends Papi_Page_Type
{

    public function meta()
    {
        return [
            'post_type'   => 'page',
            'name'        => __('Modulsida','aekab'),
            'description' => __('En sida med fler olika moduler på','aekab'),
        ];
    }

    public function register() {

        $this->remove([
            'editor', 'wpseo_meta',
        ]);

        $this->box( dirname(__FILE__) . '/boxparts/modules.php' );

        $this->box( dirname(__FILE__) . '/boxparts/design.php' );

    }

}
