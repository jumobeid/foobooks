@extends('layouts.master')


@section('title')
    Show songs
@endsection


@push('head')
    <link href="/css/books/show.css" type='text/css' rel='stylesheet'>
@endpush


@section('content')
    @if($songs)
		<h1>Show songs:</h1>
		@foreach ($songs as $index=> $song)
         <ul>
		 <li><a href="/songs/{{$index}}">{{ $song }}</a></li>
		 </ul>
		@endforeach
			
	@else	
			
        <h1>No songs chosen</h1>
    @endif
@endsection


@push('body')
    <script src="/js/books/show.js"></script>
@endpush
