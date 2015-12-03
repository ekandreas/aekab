<?php

class Homepage_Hero_Module_Type extends Papi_Page_Type
{
    public function meta()
    {
        return [
            'post_type'   => 'module',
            'name'        => __('Startsideuppslag', 'aekab'),
            'description' => __('Stort uppslag med pekande hand', 'aekab'),
            'template' => 'views.parts.homepage.hero',
        ];
    }

    public function register()
    {
        $this->remove([
            'editor',
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
                'slug'  => 'buttontitle1',
                'title' => __('Knapp 1 text', 'aekab'),
                'description' => __('Texten till den första knappen', 'aekab'),
                'type'  => 'string',
            ]),

            papi_property([
                'slug'  => 'buttonpost1',
                'title' => __('Knapp 1 sida/post', 'aekab'),
                'description' => __('Sida som knappen ska länka till', 'aekab'),
                'type'  => 'post',
                'settings' => [
                    'placeholder' => __('Välj en sida eller post', 'aekab'),
                    'post_type' => [ 'post', 'page' ],
                ]
            ]),

            papi_property([
                'slug'  => 'buttontitle2',
                'title' => __('Knapp 2 text', 'aekab'),
                'description' => __('Texten till den andra knappen', 'aekab'),
                'type'  => 'string',
            ]),

            papi_property([
                'slug'  => 'buttonpost2',
                'title' => __('Knapp 2 sida/post', 'aekab'),
                'description' => __('Sida som knappen ska länka till', 'aekab'),
                'type'  => 'post',
                'settings' => [
                    'placeholder' => __('Välj en sida eller post', 'aekab'),
                    'post_type' => [ 'post', 'page' ],
                ]
            ]),


        ]);
    }
}
