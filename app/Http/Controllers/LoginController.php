<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index ()
    {
         return view('login');
    }

   
}
