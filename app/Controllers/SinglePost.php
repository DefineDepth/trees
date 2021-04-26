<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class SinglePost extends Controller
{
  
  public function post_quote()
  {
    return get_field(__FUNCTION__);
  }
  
  public function post_quote_author()
  {
    return get_field(__FUNCTION__);
  }
  
  public function post_image()
  {
    return get_field(__FUNCTION__);
  }
  
  public function post_header_content()
  {
    return get_field(__FUNCTION__);
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

  public function container_style() {
    return true;
  }

}
