@extends('layouts.master')


@section('title')
    Show songs
@endsection


@push('head')
    <link href="/css/books/show.css" type='text/css' rel='stylesheet'>
@endpush


@section('content')
    
		<h1>Show songs:</h1>
		
         
		 {{ $song }}  lyrics
		 
	
			
	
@endsection


@push('body')
    <script src="/js/books/show.js"></script>
@endpush
