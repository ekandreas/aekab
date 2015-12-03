<?php
return  [

        'title' => __('Sidans moduler på sidan','aekeb'),

        papi_property([
            'slug'  => 'page_modules',
            'title' => __('Sidans moduler','aekab'),
            'description' => __('Välj de moduler som sidan ska visa samt vilken ordning','orasolv'),
            'type'  => 'relationship',
            'settings' => [
                'post_type' => 'module',
            ]
        ]),

];
