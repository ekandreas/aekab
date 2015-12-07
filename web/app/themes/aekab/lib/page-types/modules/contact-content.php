<?php

class Contact_Content_Module_Type extends Papi_Page_Type
{
    public function meta()
    {
        return [
            'post_type'   => 'module',
            'name'        => __('Kontaktinnehåll', 'aekab'),
            'description' => __('Modul för innehållsutvisning med kontakt', 'aekab'),
            'template' => \ekandreas\Papi::module_view_path(__CLASS__),
            'thumbnail' => \ekandreas\Papi::module_thumbnail_path(__CLASS__),
        ];
    }

    public function register()
    {

        $this->remove([
            'editor', 'wpseo_meta',
        ]);

        $this->box( __('Innehåll','aekeb'), [

            papi_property([
                'slug'  => 'headline',
                'title' => __('Rubrik','aekab'),
                'description' => __('Förstarubrik i text','aekab'),
                'type'  => 'string',
            ]),

            papi_property([
                'slug'  => 'intro',
                'title' => __('Introduktionstext', 'aekab'),
                'type'  => 'text',
            ]),

            papi_property([
                'slug'  => 'headline2',
                'title' => __('Andrarubrik, inledning', 'aekab'),
                'description' => __('Under intro och före textblocken','aekab'),
                'type'  => 'string',
            ]),

            papi_property([
                'slug'  => 'blocks',
                'title' => __('Textblock', 'aekab'),
                'description' => __('Flera rader med innehållsblock','aekab'),
                'type'  => 'repeater',
                'settings' => [
                    
                    'items' => [
                        papi_property([
                            'slug'  => 'headline',
                            'title' => __('Rubrik','aekab'),
                            'description' => __('Förstarubrik i text','aekab'),
                            'type'  => 'string',
                        ]),

                        papi_property([
                            'slug'  => 'text',
                            'title' => __('Text', 'aekab'),
                            'type'  => 'text',
                        ]),
                    ]

                ]
            ]), 
        ]);

        $this->box(__('Kontaktinnehåll', 'aekab'), [

            papi_property([
                'slug'  => 'contact',
                'title' => __('Modul för kontakt', 'aekab'),
                'description' => __('Vilken kontakt ska denna text peka på för utvisning?', 'aekab'),
                'type'  => 'post',
                'settings' => [
                    'placeholder' => __('Välj en modul som är kontakt', 'aekab'),
                    'post_type' => [ 'module' ],
                    'query' => [
                        'meta_key' => PAPI_PAGE_TYPE_KEY,
                        'meta_value' => 'modules/contact',
                    ]
                ]
            ]),

        ]);


    }
}
