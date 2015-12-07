<?php

class Page_Posts_Module_Type extends Papi_Page_Type
{
    public function meta()
    {
        return [
            'post_type'   => 'module',
            'name'        => __('Postlistning', 'aekab'),
            'description' => __('Lista med Nyheter, Uppdrag och blogg -poster', 'aekab'),
            'template' => \ekandreas\Papi::module_view_path(__CLASS__),
            'thumbnail' => \ekandreas\Papi::module_thumbnail_path(__CLASS__),
        ];
    }

    public function register()
    {
        $this->remove([
            'editor', 'wpseo_meta',
        ]);
    }
}
