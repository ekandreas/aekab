<?php

class Page_Hero_Module_Type extends Papi_Page_Type
{
    public function meta()
    {
        return [
            'post_type'   => 'module',
            'name'        => __('Sidouppslag', 'aekab'),
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

        $this->box(__('Innehåll', 'aekab'), [

            papi_property([
                'slug'  => 'herotext',
                'title' => __('Uppslagstext', 'aekab'),
                'description' => __('Fokuserad uppslagstext under sidans rubrik', 'aekab'),
                'type'  => 'text',
            ]),

        ]);
    }
}
