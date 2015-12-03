<?php

class Payoff_Module_Type extends Papi_Page_Type
{
    public function meta()
    {
        return [
            'post_type'   => 'module',
            'name'        => __('Payoff', 'aekab'),
            'description' => __('Vinjettryckare för slogans', 'aekab'),
            'template' => 'views.parts.payoff',
            'thumbnail' => get_stylesheet_directory_uri() . '/assets/images/module-payoff.png',
        ];
    }

    public function register()
    {
        $this->remove([
            'editor', 'wpseo_meta',
        ]);

        $this->box(__('Payoffens inställningar', 'aekab'), [

            papi_property([
                'slug'  => 'words',
                'title' => __('Innehåll','aekab'),
                'description' => __('Den text som visas ut som payoff','aekab'),
                'type'  => 'text',
            ]),

            papi_property([
                'slug'  => 'type',
                'title' => __('Typ av payoff', 'aekab'),
                'description' => __('Välj vilken sort som ska visas ut', 'aekab'),
                'type'  => 'dropdown',
                'default' => 1,
                'settings' => [
                    'items' => [
                        __('Vit','aekab') => 1,
                        __('Grå','aekab') => 2,
                    ]
                ]
            ]),

        ]);
    }
}
