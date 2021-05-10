<?php

namespace App\Controllers;

use PostTypes\PostType;
use Sober\Controller\Controller;

class TemplateManifest extends Controller
{

    public function footer_scheme()
    {
        return '-blue';
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

    public function manifest_features()
    {
        return get_field(__FUNCTION__);
    }

    public function manifest_cta()
    {
        return get_field(__FUNCTION__);
    }

}