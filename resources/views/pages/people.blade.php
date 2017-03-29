@extends('layouts.master')


@section('title')
    Show book
@endsection


@push('head')
    <link href="/css/books/show.css" type='text/css' rel='stylesheet'>
@endpush


@section('content')

   @if(count($people))
	   <h3>People I like!</h3>
		<ul>
			@foreach($people as $person)
			<li>{{$person}}</li>
			@endforeach
		</ul>
	@endif
@endsection


@push('body')
    <script src="/js/books/show.js"></script>
@endpush
