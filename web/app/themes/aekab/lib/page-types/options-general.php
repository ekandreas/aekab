<?php
/**
 * Options General Type for theme with Papi
 * Andreas Ek, 2015-11-30
 */
class Options_General_Type extends Papi_Option_Type
{

    /**
     * Where to register the option page to show
     * @return []
     */
    public function meta()
    {
        return [
            'menu' => 'themes.php',
            'name' => __('AEKAB','aekab'),
        ];
    }

    /**
     * Registers meta boxes to papi page type
     * @return void
     */
    public function register()
    {
        $this->box( __('Sidfot','AEKAB'), [

            papi_property([
                'slug'  => 'footer_summary',
                'title' => __('Summering','aekab'),
                'description' => __('Företagssummering i sidfoten','aekab'),
                'type'  => 'text',
            ]),

            papi_property([
                'slug'  => 'footer_link1_text',
                'title' => __('Länkgrupp 1','aekab'),
                'description' => __('Text för länkgrupp 1 i sidfoten','aekab'),
                'type'  => 'string',
            ]),

            papi_property([
                'slug'  => 'footer_link1_links',
                'title' => __('Länkar 1','aekab'),
                'description' => __('Länkar för länkgrupp 1 i sidfoten','aekab'),
                'type'  => 'repeater',
                'settings' => [
                    'items' => [
                        papi_property([
                            'slug'  => 'link',
                            'title' => __('Länk','aekab'),
                            'type'  => 'link',
                        ]),
                    ]
                ]

            ]),

            papi_property([
                'slug'  => 'footer_link2_text',
                'title' => __('Länkgrupp 2','aekab'),
                'description' => __('Text för länkgrupp 2 i sidfoten','aekab'),
                'type'  => 'string',
            ]),

            papi_property([
                'slug'  => 'footer_link2_links',
                'title' => __('Länkar 2','aekab'),
                'description' => __('Länkar för länkgrupp 2 i sidfoten','aekab'),
                'type'  => 'repeater',
                'settings' => [
                    'items' => [
                        papi_property([
                            'slug'  => 'link',
                            'title' => __('Länk','aekab'),
                            'type'  => 'link',
                        ]),
                    ]
                ]

            ]),

            papi_property([
                'slug'  => 'footer_contact_headline',
                'title' => __('Rubrik kontakt','aekab'),
                'description' => __('Rubrik som ligger allra längst ned i sidfot','aekab'),
                'type'  => 'string',
            ]),

            papi_property([
                'slug'  => 'footer_contact_text1',
                'title' => __('Kontakttext 1','aekab'),
                'description' => __('Text udner kontaktrubrik allra längst ned i sidfot','aekab'),
                'type'  => 'text',
                'settings' => [
                    'allow_html' => true
                ]
            ]),

            papi_property([
                'slug'  => 'footer_contact_text2',
                'title' => __('Kontakttext 2','aekab'),
                'description' => __('Text udner kontaktrubrik allra längst ned i sidfot','aekab'),
                'type'  => 'text',
                'settings' => [
                    'allow_html' => true
                ]
            ]),

        ]);
    }

}
