<?php

class Hero_Contact_Module_Type extends Papi_Page_Type
{
    public function meta()
    {
        return [
            'post_type'   => 'module',
            'name'        => __('Kontaktuppslag', 'aekab'),
            'description' => __('Uppslag med rubrik och dimmad bild (service)', 'aekab'),
            'template' => \ekandreas\Papi::module_view_path(__CLASS__),
            'thumbnail' => \ekandreas\Papi::module_thumbnail_path(__CLASS__),
        ];
    }

    public function remove() {
        return [
            'editor', 'wpseo_meta',
        ];
    }

    public function register()
    {
    }
}
