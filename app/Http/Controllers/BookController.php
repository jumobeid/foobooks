<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    //functions that will return values when invoked by Route :get
    public function index(){
      return "view all books";
    }

    public function view($title =null){
      return "you want to view the book".$title;
    }
}
