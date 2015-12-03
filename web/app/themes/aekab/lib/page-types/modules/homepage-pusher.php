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
            'editor',
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
                'slug'  => 'moretitle',
                'title' => __('Läs mer -text', 'aekab'),
                'description' => __('Texten till länken under puffarna', 'aekab'),
                'type'  => 'string',
            ]),

            papi_property([
                'slug'  => 'morepost',
                'title' => __('Läs mer -sida', 'aekab'),
                'description' => __('Sida som "Läs mer" ska länka till', 'aekab'),
                'type'  => 'post',
                'settings' => [
                    'placeholder' => __('Välj en sida eller post', 'aekab'),
                    'post_type' => [ 'post', 'page' ],
                ]
            ]),

        ]);
    }
}
