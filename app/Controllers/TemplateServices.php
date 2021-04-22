<?php

namespace App\Controllers;

use PostTypes\PostType;
use Sober\Controller\Controller;

class TemplateServices extends Controller
{

    public function footer_scheme()
    {
        return '-blue';
    }


    public function header_first_block()
    {
        return get_field(__FUNCTION__);
    }

    public function header_second_block()
    {
        return get_field(__FUNCTION__);
    }

}