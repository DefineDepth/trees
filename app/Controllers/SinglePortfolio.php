<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class SinglePortfolio extends Controller
{
  
  public function info_repeater()
  {
    return get_field(__FUNCTION__);
  }

}
