<?php

class Blog_Hero_Module_Type extends Papi_Page_Type
{
    public function meta()
    {
        return [
            'post_type'   => 'module',
            'name'        => __('Blogguppslag', 'aekab'),
            'description' => __('Uppslag med centrerad rubrik och dimmad bild (blogg)', 'aekab'),
            'template' => 'views.parts.page.blog-hero',
            'thumbnail' => get_stylesheet_directory_uri() . '/assets/images/module-blog-hero.png',
        ];
    }

    public function register()
    {
        $this->remove([
            'editor', 'wpseo_meta',
        ]);

        $this->box(__('Innehåll', 'aekab'), [

            papi_property([
                'slug'  => 'herotext',
                'title' => __('Uppslagstext', 'aekab'),
                'description' => __('Fokuserad uppslagstext under sidans rubrik', 'aekab'),
                'type'  => 'text',
            ]),

        ]);

        $this->box( dirname(__FILE__) . '/boxparts/design.php' );

    }


}
