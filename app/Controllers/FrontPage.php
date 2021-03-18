<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class FrontPage extends Controller
{
  
  public function hero_subtitle()
  {
    return get_field(__FUNCTION__);
  }
  
  public function hero_title()
  {
    return get_field(__FUNCTION__);
  }
  
  public function hero_repeater()
  {
    return get_field(__FUNCTION__);
  }

  public function posts_posts()
  {
    $posts = get_posts([
      'post_type' => 'post',
      'fields' => 'ids'
    ]) ?: [];
    return $posts;
  }


  public function about_image()
  {
    return get_field(__FUNCTION__);
  }

  public function about_subtitle()
  {
    return get_field(__FUNCTION__);
  }
  
  public function about_title()
  {
    return get_field(__FUNCTION__);
  }
  
  public function about_text()
  {
    return get_field(__FUNCTION__);
  }

}
