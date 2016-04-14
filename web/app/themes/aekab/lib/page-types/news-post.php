<?php

class News_Page_Type extends Papi_Page_Type
{

    public function meta()
    {
        return [
            'post_type'   => 'post',
            'name'        => __('Nyhet','aekab'),
            'description' => __('Nyhetspostning','aekab'),
        ];
    }

    public function register() {

        $this->box( dirname(__FILE__) . '/boxparts/main-term.php' );
        $this->box( dirname(__FILE__) . '/boxparts/payoff.php' );

    }

}
