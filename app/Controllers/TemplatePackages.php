<?php

namespace App\Controllers;

use PostTypes\PostType;
use Sober\Controller\Controller;

class TemplatePackages extends Controller
{

    public function footer_scheme()
    {
        return '-orange';
    }

    public function header()
    {
        return get_field(__FUNCTION__);
    }

    public function clients()
    {
        return get_field(__FUNCTION__);
    }

    public function packages()
    {
        return get_field(__FUNCTION__);
    }


}