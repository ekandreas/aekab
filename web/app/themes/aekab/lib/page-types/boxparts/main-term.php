<?php
return  [

        'title' => __('Kategori','aekeb'),
        'context' => 'side',

        papi_property([

            'slug'  => 'main_category',
            'title' => __('Huvud-kategori','aekab'),
            'description' => __('Ange huvudkategori för posten','orasolv'),
            'type'  => 'term',
			'settings'  => [ 
				'placeholder' => __('Huvudkategori','aekab'),
				'taxonomy'=>'category' 
			],

          ]),

];
