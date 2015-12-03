<?php

class Page_Posts_Module_Type extends Papi_Page_Type
{
    public function meta()
    {
        return [
            'post_type'   => 'module',
            'name'        => __('Postlistning', 'aekab'),
            'description' => __('Lista med Nyheter, Uppdrag och blogg -poster', 'aekab'),
            'template' => 'views.parts.page.post-list',
            'thumbnail' => get_stylesheet_directory_uri() . '/assets/images/module-post-list.png',
        ];
    }

    public function register()
    {
        $this->remove([
            'editor', 'wpseo_meta',
        ]);
    }
}
