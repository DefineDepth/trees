<?php

namespace App\Controllers;

use PostTypes\PostType;
use Sober\Controller\Controller;

class TemplateAbout extends Controller
{

    public function footer_scheme()
    {
        return '-black';
    }

    public function nav_link_active()
    {
        return 'about-active';
    }


    public function team_posts()
    {
        $posts = get_posts([
            'post_type' => 'team',
            'fields' => 'ids',
            'order' => 'ASC',
            'numberposts' => -1,
        ]) ?: [];
        return $posts;
    }


    public function header_first_block()
    {
        return get_field(__FUNCTION__);
    }

    public function header_second_block()
    {
        return get_field(__FUNCTION__);
    }

    public function team_title()
    {
        return get_field(__FUNCTION__);
    }

    public function team_text()
    {
        return get_field(__FUNCTION__);
    }

    public function values_title()
    {
        return get_field(__FUNCTION__);
    }

    public function values_text()
    {
        return get_field(__FUNCTION__);
    }


    public function cta_title()
    {
        return get_field(__FUNCTION__);
    }

    public function cta_button_link()
    {
        return get_field(__FUNCTION__);
    }


    public function value_first()
    {
        return get_field(__FUNCTION__);
    }

    public function value_second()
    {
        return get_field(__FUNCTION__);
    }

    public function value_third()
    {
        return get_field(__FUNCTION__);
    }

}