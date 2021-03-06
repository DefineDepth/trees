<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class TemplateCanna extends Controller
{
  
  public function footer_scheme()
  {
    return '-orange';
  }

  public function posts_posts()
  {
    $posts = get_posts([
      'post_type' => 'portfolio',
      'fields' => 'ids'
    ]) ?: [];
    return $posts;
  }

  public function portfolio_controls()
  {
    return get_field(__FUNCTION__);
  }

}
