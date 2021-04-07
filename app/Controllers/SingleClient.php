<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class SingleClient extends Controller
{
  
  public function client_text()
  {
    return get_field(__FUNCTION__);
  }

}
