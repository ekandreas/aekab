<?php

class Homepage_BigCat_Module_Type extends Papi_Page_Type
{
    public function meta()
    {
        return [
            'post_type'   => 'module',
            'name'        => __('Startsidekategorier', 'aekab'),
            'description' => __('Stora kategoriikoner visas upp (hårdkodat)', 'aekab'),
            'template' => 'views.parts.homepage.bigcat',
        ];
    }

    public function register()
    {
        $this->remove([
            'editor', 'wpseo_meta',
        ]);

        $this->box(__('Innehåll', 'aekab'), [

            papi_property([
                'slug'  => 'payoff',
                'title' => __('Payofftext', 'aekab'),
                'description' => __('Visas överst på denna modul', 'aekab'),
                'type'  => 'text',
            ]),

        ]);
    }
}
