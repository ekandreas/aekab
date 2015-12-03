<?php

class Hero_Contact_Module_Type extends Papi_Page_Type
{
    public function meta()
    {
        return [
            'post_type'   => 'module',
            'name'        => __('Kontaktuppslag', 'aekab'),
            'description' => __('Uppslag med rubrik och dimmad bild (service)', 'aekab'),
            'template' => 'views.parts.page.contact-hero',
            'thumbnail' => get_stylesheet_directory_uri() . '/assets/images/module-contact-hero.png',
        ];
    }

    public function register()
    {
        $this->remove([
            'editor', 'wpseo_meta',
        ]);
    }
}
