<?php

class Homepage_Hero_Module_Type extends Papi_Page_Type
{
    public function meta()
    {
        return [
            'post_type'   => 'module',
            'name'        => __('Startsideuppslag', 'aekab'),
            'description' => __('Stort uppslag med pekande hand', 'aekab'),
            'template' => \ekandreas\Papi::module_view_path(__CLASS__),
            'thumbnail' => \ekandreas\Papi::module_thumbnail_path(__CLASS__),
        ];
    }

    public function register()
    {
        $this->remove([
            'editor', 'wpseo_meta',
        ]);

        $this->box(__('Innehåll', 'aekab'), [

            papi_property([
                'slug'  => 'top_word',
                'title' => __('Toppord', 'aekab'),
                'description' => __('Det som visas allra högst upp med väldigt stora bokstäver', 'aekab'),
                'type'  => 'string',
            ]),

            papi_property([
                'slug'  => 'headliner',
                'title' => __('Rubriklinje', 'aekab'),
                'description' => __('Visas under det stora toppordet', 'aekab'),
                'type'  => 'string',
            ]),

            papi_property([
                'slug'  => 'thirdliner',
                'title' => __('Avslutningsrubrik', 'aekab'),
                'description' => __('Visas under efter rubriklinjen', 'aekab'),
                'type'  => 'string',
            ]),

            papi_property([
                'slug'  => 'sellpoint',
                'title' => __('Säljtext', 'aekab'),
                'description' => __('Säljande text under trippelrubriken', 'aekab'),
                'type'  => 'text',
            ]),

            papi_property([
                'slug'  => 'link1',
                'title' => __('Vidarelänkning 1', 'aekab'),
                'description' => __('Knapp #1 för att gå vidare', 'aekab'),
                'type'  => 'link',
            ]),

            papi_property([
                'slug'  => 'link2',
                'title' => __('Vidarelänkning 2', 'aekab'),
                'description' => __('Knapp #2 för att gå vidare', 'aekab'),
                'type'  => 'link',
            ]),


        ]);
    }
}
