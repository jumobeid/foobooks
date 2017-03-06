<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    //Special controler for WelcomeController
    public function __invoke(){
      return view('welcome');
    }
}
