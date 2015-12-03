<?php

class Contact_Module_Type extends Papi_Page_Type
{
    public function meta()
    {
        return [
            'post_type'   => 'module',
            'name'        => __('Kontakt', 'aekab'),
            'description' => __('Modul för utvisning av kontakt vid innehåll', 'aekab'),
            'template' => 'views.parts.contact',
            'thumbnail' => get_stylesheet_directory_uri() . '/assets/images/module-contact.png',
        ];
    }

    public function register()
    {

        $this->remove([
            'editor', 'wpseo_meta', 
        ]);

        $this->box( __('Kontakt','aekeb'), [

            papi_property([
                'slug'  => 'name',
                'title' => __('Namn', 'aekab'),
                'type'  => 'string',
            ]),

            papi_property([
                'slug'  => 'title',
                'title' => __('Titel', 'aekab'),
                'type'  => 'string',
            ]),

            papi_property([
                'slug'  => 'phone_text',
                'title' => __('Telefon -text', 'aekab'),
                'type'  => 'string',
            ]),

            papi_property([
                'slug'  => 'phone_tel',
                'title' => __('Telefon -nummerlänk', 'aekab'),
                'type'  => 'string',
            ]),

            papi_property([
                'slug'  => 'email',
                'title' => __('E-postadress', 'aekab'),
                'type'  => 'string',
            ]),
        ]);

    }
}
