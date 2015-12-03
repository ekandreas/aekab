<?php

class Page_Hero_Module_Type extends Papi_Page_Type
{
    public function meta()
    {
        return [
            'post_type'   => 'module',
            'name'        => __('Sidouppslag', 'aekab'),
            'description' => __('Uppslag med rubrik och dimmad bild (service)', 'aekab'),
            'template' => 'views.parts.page.hero',
            'thumbnail' => get_stylesheet_directory_uri() . '/assets/images/module-page-hero.png',
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
