<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class TemplatePortfolio extends Controller
{
  
  public function footer_scheme()
  {
    return '-orange';
  }

  public function nav_link_active()
  {
      return 'portfolio-active';
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
