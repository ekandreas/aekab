<?php

class Homepage_Pusher_Module_Type extends Papi_Page_Type
{
    public function meta()
    {
        return [
            'post_type'   => 'module',
            'name'        => __('Startsidepuffar', 'aekab'),
            'description' => __('Nyheter och bloggposter, 3 st', 'aekab'),
            'template' => 'views.parts.homepage.pusher',
        ];
    }

    public function register()
    {
        $this->remove([
            'editor', 'wpseo_meta',
        ]);

        $this->box(__('Innehåll', 'aekab'), [

            papi_property([
                'slug'  => 'headline',
                'title' => __('Rubrik', 'aekab'),
                'description' => __('Visas överst på denna modul', 'aekab'),
                'default' => 'Blogg & nyheter',                
                'type'  => 'string',
            ]),

            papi_property([
                'slug'  => 'posts',
                'title' => __('Poster', 'aekab'),
                'description' => __('Poster som ska visas i listningen', 'aekab'),
                'type'  => 'relationship',
                'settings' => [
                    'post_type' => [ 'page', 'post' ]
                ]
            ]),

            papi_property([
                'slug'  => 'more',
                'title' => __('Läs mer', 'aekab'),
                'description' => __('Länk under puffarna', 'aekab'),
                'type'  => 'link',
            ]),

        ]);
    }
}
