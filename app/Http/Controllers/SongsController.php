<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SongsController extends Controller
{
    //list of songs
	
	public function index(){
		
	$songs=$this->getsongs();

	return view('songs.index',compact('songs'));
	}
	
	public function show($id){
		
	$song=$this->getsongs()[$id];

	return view('songs.show',compact('song'));
	}
	
	public function getsongs(){
		
		return ['Boy Friend','Allreight','Fall'];
		
	}
}
