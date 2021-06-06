<?php

namespace App\Controllers;

use PostTypes\PostType;
use Sober\Controller\Controller;

class TemplateInsight extends Controller
{

    public function footer_scheme()
    {
        return '-beige';
    }

    public function nav_link_active()
    {
        return 'insight-active';
    }

    public function posts()
    {
        $posts = get_posts([
            'post_type' => 'post',
            'fields' => 'ids',
            'numberposts' => -1,
        ]) ?: [];
        return $posts;
    }


    public function header()
    {
        return get_field(__FUNCTION__);
    }

}