<?php

class Payoff_Module_Type extends Papi_Page_Type
{
    public function meta()
    {
        return [
            'post_type'   => 'module',
            'name'        => __('Payoff', 'aekab'),
            'description' => __('Vinjettryckare för slogans', 'aekab'),
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
