<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Auth extends BaseController
{
    public function product_details()
    {
      return view('product_details');
    }
    public function index()
    {
        //
    }
    public function login()
    {
        return view('login');
    }
}

