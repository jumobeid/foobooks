<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
	
	public function index(){
		
		return view('help.index');
	}
	
    public function about($title =null){
		
	  
      return view('pages.about');
    }
	public function contact($title =null){
      return view('pages.contact');
    }
	
	public function people(){
	  
	  $people=[
	  'Me','I','MySelf'];
		
      return view('pages.people',compact('people'));
    }
}
