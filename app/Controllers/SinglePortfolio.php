<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class SinglePortfolio extends Controller
{
  
  public function info_repeater()
  {
    return get_field(__FUNCTION__);
  }
  
  public function prev_project()
  {
    return get_field(__FUNCTION__);
  }
  
  public function next_project()
  {
    return get_field(__FUNCTION__);
  }

}
