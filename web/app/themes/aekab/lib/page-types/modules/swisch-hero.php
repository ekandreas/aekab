<?php

class Swisch_Hero_Module_Type extends Papi_Page_Type
{
    public function meta()
    {
        return [
            'post_type'   => 'module',
            'name'        => __('Sidouppslag med swisch', 'aekab'),
            'description' => __('Uppslag med rubrik och dimmad bild (om oss) och swisch', 'aekab'),
            'template' => 'views.parts.page.swisch-hero',
            'thumbnail' => get_stylesheet_directory_uri() . '/assets/images/module-swisch-hero.png',
        ];
    }

    public function register()
    {
        $this->remove([
            'editor', 'wpseo_meta',
        ]);

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
