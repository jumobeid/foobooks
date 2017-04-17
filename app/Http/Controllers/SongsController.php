<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Song;

class SongsController extends Controller
{
    //list of songs
	
	public function index(){
		
	$songs=Song::get();

	return view('songs.index',compact('songs'));
	}
	
	public function show($id){
		
	$song=Song::find($id);

	return view('songs.show',compact('song'));
	}
	

}
