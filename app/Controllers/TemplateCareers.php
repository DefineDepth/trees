<?php

namespace App\Controllers;

use PostTypes\PostType;
use Sober\Controller\Controller;

class TemplateCareers extends Controller
{

    public function footer_scheme()
    {
        return '-teal';
    }


    public function header()
    {
        return get_field(__FUNCTION__);
    }

    public function careers_cards()
    {
        return get_field(__FUNCTION__);
    }

    public function testimonials()
    {
        return get_field(__FUNCTION__);
    }

}