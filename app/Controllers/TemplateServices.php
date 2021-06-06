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

    public function nav_link_active()
    {
        return 'services-active';
    }


    public function header_first_block()
    {
        return get_field(__FUNCTION__);
    }

    public function header_second_block()
    {
        return get_field(__FUNCTION__);
    }


    public function services_subtitle()
    {
        return get_field(__FUNCTION__);
    }

    public function services_title()
    {
        return get_field(__FUNCTION__);
    }

    public function services_repeater()
    {
        return get_field(__FUNCTION__);
    }

    
    public function clients_title()
    {
        return get_field(__FUNCTION__);
    }

    public function clients_text()
    {
        return get_field(__FUNCTION__);
    }

    public function clients_repeater()
    {
        return get_field(__FUNCTION__);
    }

}